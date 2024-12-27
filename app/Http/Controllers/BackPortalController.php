<?php
namespace App\Http\Controllers;
use App\AboutUs;
use App\BOG;
use App\Careers;
use App\CEOMessage;
use App\Certification;
use App\Controllers;
use App\Department;
use App\Doctors;
use App\Downloads;
use App\Youtube;
use App\EmployeeDetails;
use App\Employees;
use App\Expertise;
use App\FrontContentSection;
use App\Groups;
use App\Logins;
use App\Management;
use App\ManagementSection;
use App\MTI_Act;
use App\News;
use App\Qualification;
use App\SectionServices;
use App\SectionTeam;
use App\Slider;
use App\Tenders;
use App\Timeline;
use App\UserNav;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Setting;


class BackPortalController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        return view('general_settings', compact('setting'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'key' => 'required|string|max:255',
            'value' => 'nullable', // Can be text or file
            'page' => 'required|string|max:255',
            'inputType' => 'required|string|in:text,image',
            'old_value' => 'nullable|string'
        ]);

        $value = null;

        if ($request->inputType === 'image' && $request->hasFile('value')) {
            // Handle the image upload
            $image = $request->file('value');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads/images', $imageName, 'public'); // Store in 'public/uploads/images'
            $value = $imageName; // Save the path in the database
        } else if ($request->inputType === 'text') {
            // Handle plain text input
            $value = $request->value;
        }

        // Create the setting
        Setting::create([
            'key_name' => $request->key,
            'val' => $value,
            'page' => $request->page,
            'type' => $request->inputType,
            'old_value' => $request->old_value,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('generalsettings')->with('status', "New Item Added Successfully.");
    }

    public function edit(string $id)
    {
        $item = Setting::find($id);

        return response()->json([
            'status' => 200,
            'item' => $item,
        ]);
    }
    public function update(Request $request)
    {
        $id =  $request->input('id');

        $item = Setting::find($id);

        $item->key_name = $request->input('key');
        $item->val = $request->input('value');
        $item->page = $request->input('page');
        $item->type = $request->input('inputType');
        $item->old_value = $request->input('old_value');
        $item->updated_at = now();

        $item->update();

        return redirect()->route('generalsettings')->with('status', "Item Updated Successfully.");
    }


    public function Dashboard()
    {
        $tenders = Tenders::count();
        $careers = Careers::count();
        $users = Logins::count();
        $sliders = Slider::count();
        $doctor = Doctors::count();
        return view("admin.dashboard" , compact('tenders' , 'careers','users','doctor','sliders'));
    }

    public function showDepartment()
    {
        $department = Department::all();
        return view("admin.department" , compact('department'));
    }

    public function createDepartment()
    {
        return view("admin.department-form");
    }

    public function editDepartment($deptId)
    {
        $department = Department::find($deptId);
        return view("admin.edit-department" , compact('department'));
    }

    public function saveEditDepartment(Request $request)
    {
        $department = Department::where("id" , $request->get('departmentid'))->first();
        $department->name = $request->get('department');
        $department->save();
        return redirect()->to('department');
    }

    public function showTenderGrid()
    {
        $tender = Tenders::orderBy('advertisement_date' , 'desc')->get();
        return view("admin.tender" , compact('tender'));
    }
    public function showCareersGrid()
    {
        $careers = Careers::orderBy('advertisement_date' , 'desc')->get();
        return view("admin.careers" , compact('careers'));
    }
    public function users()
    {
        $users = Logins::all();
        return view("admin.users" , compact('users'));
    }
    public function showCreateTender()
    {
        return view("admin.create-tender");
    }
    public function showCreateCareer()
    {
        return view("admin.create-career");
    }
    public function createUser()
    {
        return view("admin.create-user");
    }

    public function saveDepartment(Request $request)
    {
        $department = Department::where("name" , $request->get('department'))->get();
        if(! ( count($department) > 0 ) )
        {
            $department = new Department();
            $department->name = $request->get('department');
            $department->save();
        }
        return redirect()->to('department');
    }

    public function saveUser(Request $request)
    {
        $user = new Logins();
        $user->username = $request->get('user_email');
        $user->password = Hash::make($request->get('user_password'));
        $user->TYPE = $request->get('user_type');
        $user->ACTIVE = $request->get('active') == "on" ? 1 : 0;
        $user->save();
        return redirect()->to('users');
    }

    public function editUser($userId)
    {
        $user = Logins::where("ID" , $userId)->first();
        $user_screen = UserNav::where("USER_ID" , $userId)->get();
        return view("admin.edit-user" , compact('user' , 'user_screen'));
    }

    public function saveUserScreen(Request $request)
    {
        $screen = UserNav::where("NAV_ID" , $request->get('screen'))->where("USER_ID" , $request->get('userid'))->get();
        if(count($screen) > 0)
        {
            return redirect()->back();
        }
        $screen = new UserNav();
        $screen->NAV_ID = $request->get('screen');
        $screen->USER_ID = $request->get('userid');
        $screen->save();
        return redirect()->back();
    }

    public function saveEditUser(Request $request)
    {
        $login = Logins::where("ID" , $request->get('userid'))->first();
        $login->username = $request->get('user_email');
        $login->TYPE = $request->get('user_type');
        if($request->get('user_password') != "")
        {
            $login->password = Hash::make($request->get('user_password'));
        }
        $login->ACTIVE = $request->get('active') == "on" ? 1 : 0;
        $login->save();
        return redirect()->back();
    }

    public function removeUserScreen($screenId)
    {
        UserNav::where("ID" , $screenId)->delete();
        return redirect()->back();
    }

    public function saveTender(Request $request)
    {
        $tender = new Tenders();
        $tender->tender_num = $request->get("tenderNumber");
        $tender->tender_name = $request->get("tenderName");
        $tender->tender_type = $request->get("tenderType");
        $tender->procurement_entity = $request->get("procurement_entity");
        $tender->tender_description = $request->get("tenderDescription");
        if($request->file('file'))
        {
            $tender->tender_eoi = date('dhis').$request->file('file')->getClientOriginalName();
        }
        if($request->file('file_2'))
        {
            $tender->tender_eoi_2 = date('dhis').$request->file('file_2')->getClientOriginalName();
        }
        if($request->file('sbd'))
        {
            $tender->sbd = date('dhis').$request->file('sbd')->getClientOriginalName();
        }
        if($request->file('tender_evaluation'))
        {
            $tender->tender_evaluation = date('dhis').$request->file('tender_evaluation')->getClientOriginalName();
        }
        if($request->file('financial_evaluation'))
        {
            $tender->financial_evaluation = date('dhis').$request->file('financial_evaluation')->getClientOriginalName();
        }
        if($request->file('tender_document'))
        {
            $tender->tender_document = date('dhis').$request->file('tender_document')->getClientOriginalName();
        }
        $tender->advertisement_date = $request->get("advertisement_date");
        $tender->closing_date = $request->get("closing_date");
        $tender->financial_remarks = $request->get("financialRemarks");
        $tender->active = $request->get("active") == "on" ? 1 : 0;
        $tender->save();
        if ($request->file('file'))
        {
            $request->file('file')->move(public_path('../resources/tenders/'), $tender->tender_eoi);
        }
        if ($request->file('file_2'))
        {
            $request->file('file_2')->move(public_path('../resources/tenders/'), $tender->tender_eoi_2);
        }
        if ($request->file('sbd'))
        {
            $request->file('sbd')->move(public_path('../resources/tenders/'), $tender->sbd);
        }
        if ($request->file('tender_evaluation'))
        {
            $request->file('tender_evaluation')->move(public_path('../resources/tenders/'), $tender->tender_evaluation);
        }
        if ($request->file('financial_evaluation'))
        {
            $request->file('financial_evaluation')->move(public_path('../resources/tenders/'), $tender->financial_evaluation);
        }
        if ($request->file('tender_document'))
        {
            $request->file('tender_document')->move(public_path('../resources/tenders/'), $tender->tender_document);
        }
        return redirect()->to("/tenders");
    }

    public function saveEditedTender(Request $request)
    {

        $tender = Tenders::find($request->get('tender_id'));
        $tender->tender_num = $request->get("tenderNumber");
        $tender->tender_name = $request->get("tenderName");
        $tender->tender_type = $request->get("tenderType");
        $tender->procurement_entity = $request->get("procurement_entity");
        $tender->tender_description = $request->get("tenderDescription");
        if($request->file('file'))
        {
            $tender->tender_eoi = date('dhis').$request->file('file')->getClientOriginalName();
        }
        if($request->file('file_2'))
        {
            $tender->tender_eoi_2 = date('dhis').$request->file('file_2')->getClientOriginalName();
        }
        if($request->file('sbd'))
        {
            $tender->sbd = date('dhis').$request->file('sbd')->getClientOriginalName();
        }
        if($request->file('tender_evaluation'))
        {
            $tender->tender_evaluation = date('dhis').$request->file('tender_evaluation')->getClientOriginalName();
        }
        if($request->file('financial_evaluation'))
        {
            $tender->financial_evaluation = date('dhis').$request->file('financial_evaluation')->getClientOriginalName();
        }
        if($request->file('tender_document'))
        {
            $tender->tender_document = date('dhis').$request->file('tender_document')->getClientOriginalName();
        }
        $tender->advertisement_date = $request->get("advertisement_date");
        $tender->closing_date = $request->get("closing_date");
        $tender->financial_remarks = $request->get("financialRemarks");
        $tender->active = $request->get("active") == "on" ? 1 : 0;
        $tender->save();
        if ($request->file('file'))
        {
            $request->file('file')->move(public_path('../resources/tenders/'), $tender->tender_eoi);
        }
        if ($request->file('file_2'))
        {
            $request->file('file_2')->move(public_path('../resources/tenders/'), $tender->tender_eoi_2);
        }
        if ($request->file('sbd'))
        {
            $request->file('sbd')->move(public_path('../resources/tenders/'), $tender->sbd);
        }
        if ($request->file('tender_evaluation'))
        {
            $request->file('tender_evaluation')->move(public_path('../resources/tenders/'), $tender->tender_evaluation);
        }
        if ($request->file('financial_evaluation'))
        {
            $request->file('financial_evaluation')->move(public_path('../resources/tenders/'), $tender->financial_evaluation);
        }
        if ($request->file('tender_document'))
        {
            $request->file('tender_document')->move(public_path('../resources/tenders/'), $tender->tender_document);
        }
        return redirect()->to("/tenders");
    }

    public function editTender($id)
    {
        $tender = Tenders::find($id);
        return view("admin.edit-tender" , compact('tender'));
    }
    public function editCareer($id)
    {
        $career = Careers::find($id);
        return view("admin.edit-career" , compact('career'));
    }

    public function saveAdvertisement(Request $request)
    {
        $tender = new Careers();
        $tender->type = $request->get("career_type");
        $tender->description = $request->get("career_description");
        $tender->advertisement_date = $request->get("advertisement_date");
        $tender->closing_date = $request->get("closing_date");
        if($request->file('file'))
        {
            $tender->file = date('dhis').$request->file('file')->getClientOriginalName();
        }
        $tender->active = $request->get("active") == "on" ? 1 : 0;
        $tender->save();
        if ($request->file('file'))
        {
            $request->file->move(public_path('../resources/careers/'), $tender->file);
        }
        return redirect()->to("/careers");
    }

    public function saveEditAdvertisement(Request $request)
    {
        $tender = Careers::find($request->get('career_id'));
        $tender->type = $request->get("career_type");
        $tender->description = $request->get("career_description");
        $tender->advertisement_date = $request->get("advertisement_date");
        $tender->closing_date = $request->get("closing_date");
        if($request->file('file'))
        {
            $tender->file = date('dhis').$request->file('file')->getClientOriginalName();
        }
        $tender->active = $request->get("active") == "on" ? 1 : 0;
        $tender->save();
        if ($request->file('file'))
        {
            $request->file->move(public_path('../resources/careers/'), $tender->file);
        }
        return redirect()->to("/careers");
    }

    public function showMtiActs()
    {
        $mti_act = MTI_Act::where('active' , 1)->get();
        return view("admin.mti-acts" , compact('mti_act'));
    }
    public function createMTIActs()
    {
        return view("admin.create-mti-acts");
    }
    public function showDownloads()
    {
        $download = Downloads::all();
        return view("admin.all-downloads" , compact('download'));
    }
    public function createDownloads()
    {
        return view("admin.create-downloads");
    }
    public function editMTIActs($id)
    {
        $mti_act = MTI_Act::find($id);
        return view("admin.edit-mti_act" , compact('mti_act'));
    }
    public function removeDownload($id)
    {
        $download = Downloads::find($id);
        @unlink(url('/resources/downloads/' . $download->file));
        $download->delete();
        return redirect()->to("/downloads");
    }
    public function saveMTIActs(Request $request)
    {
        $tender = new MTI_Act();
        $tender->description = $request->get("description");
        if($request->file('file'))
        {
            $tender->file = date('dhis').$request->file('file')->getClientOriginalName();
        }
        $tender->active = $request->get("active") == "on" ? 1 : 0;
        $tender->save();
        if ($request->file('file'))
        {
            $request->file->move(public_path('../resources/mti_acts/'), $tender->file);
        }
        return redirect()->to("/mti-acts");
    }
    public function saveEditMTIActs(Request $request)
    {
        $tender = MTI_Act::find($request->get('mti_id'));
        $tender->description = $request->get("description");
        if($request->file('file'))
        {
            $tender->file = date('dhis').$request->file('file')->getClientOriginalName();
        }
        $tender->active = $request->get("active") == "on" ? 1 : 0;
        $tender->save();
        if ($request->file('file'))
        {
            $request->file->move(public_path('../resources/mti_acts/'), $tender->file);
        }
        return redirect()->to("/mti-acts");
    }

    public function saveDownloads(Request $request)
    {
        $tender = new Downloads();
        $tender->name = $request->get("name");
        $tender->description = $request->get("description");
        if($request->file('file'))
        {
            $tender->file = date('dhis').$request->file('file')->getClientOriginalName();
        }
        $tender->save();
        if ($request->file('file'))
        {
            $request->file->move(public_path('../resources/downloads/'), $tender->file);
        }
        return redirect()->to("/downloads");
    }

    public function showNews()
    {
        $news = News::orderByDesc('updated_at')->get();
        return view("admin.news" , compact('news'));
    }


    public function showVideos()
    {
        $videos = Youtube::orderByDesc('id')->get();
        return view("admin.videos" , compact('videos'));
    }

    public function createVideos()
    {
        return view("admin.create-videos");
    }

    public function saveVideo(Request $request)
    {
        $youtube = new Youtube();
        $youtube->title = $request->get("title");
        $youtube->video = $request->get("video");
        $youtube->active = $request->get("active") == "on" ? 1 : 0;
        $youtube->save();

        return redirect()->to("/videos");
    }

    public function editVideo($id)
    {
        $video = Youtube::where("id" , $id)->first();
        return view("admin.edit-video" , compact('video'));
    }

    public function saveEditVideo(Request $request)
    {

        $video = Youtube::find($request->get('videoId'));
        $video->title = $request->get("title");
        $video->video = $request->get("video");
        $video->active = $request->get("active") == "on" ? 1 : 0;
        $video->save();

        return redirect()->to("/videos");
    }

    public function editNews($id)
    {
        $news = News::where("id" , $id)->first();
        return view("admin.edit-news" , compact('news'));
    }

    public function createNews()
    {
        return view("admin.create-news");
    }

    public function saveNews(Request $request)
    {
        $news = new News();
        if($request->file('pic_1'))
        {
            $news->news_image = date('dhis').$request->file('pic_1')->getClientOriginalName();
            $request->file('pic_1')->move(public_path('../resources/news/'), $news->news_image);
        }
        if($request->file('news_pic1'))
        {
            $news->news_image_1 = date('dhis').$request->file('news_pic1')->getClientOriginalName();
            $request->file('news_pic1')->move(public_path('../resources/news/'), $news->news_image_1);
        }
        if($request->file('news_pic2'))
        {
            $news->news_image_2 = date('dhis').$request->file('news_pic2')->getClientOriginalName();
            $request->file('news_pic2')->move(public_path('../resources/news/'), $news->news_image_2);
        }
        if($request->file('news_pic3'))
        {
            $news->news_image_3 = date('dhis').$request->file('news_pic3')->getClientOriginalName();
            $request->file('news_pic3')->move(public_path('../resources/news/'), $news->news_image_3);
        }
        if($request->file('news_pic4'))
        {
            $news->news_image_4 = date('dhis').$request->file('news_pic4')->getClientOriginalName();
            $request->file('news_pic4')->move(public_path('../resources/news/'), $news->news_image_4);
        }
        if($request->file('news_pic5'))
        {
            $news->news_image_5 = date('dhis').$request->file('news_pic5')->getClientOriginalName();
            $request->file('news_pic5')->move(public_path('../resources/news/'), $news->news_image_5);
        }
        if($request->file('news_pic6'))
        {
            $news->news_image_6 = date('dhis').$request->file('news_pic6')->getClientOriginalName();
            $request->file('news_pic6')->move(public_path('../resources/news/'), $news->news_image_6);
        }
        if($request->file('news_pic7'))
        {
            $news->news_image_7 = date('dhis').$request->file('news_pic7')->getClientOriginalName();
            $request->file('news_pic7')->move(public_path('../resources/news/'), $news->news_image_7);
        }
        if($request->file('news_pic8'))
        {
            $news->news_image_8 = date('dhis').$request->file('news_pic8')->getClientOriginalName();
            $request->file('news_pic8')->move(public_path('../resources/news/'), $news->news_image_8);
        }

        $news->news_image_description = $request->get("newsDescription1");
        $news->news_details = $request->get("newsDescription2");
        $news->news_last_description = $request->get("newsDescription3");
        $news->featured_news = ($request->get("newstype") == "Featured News") ? 1 : 0;
        $news->covid_news = ($request->get("newstype") == "COVID-19 News") ? 1 : 0;
        $news->active = $request->get("active") == "on" ? 1 : 0;
        $news->save();

        return redirect()->to("/news");
    }

    public function saveEditNews(Request $request)
    {

        $news = News::find($request->get('newsid'));
        if($request->file('pic_1'))
        {
            $news->news_image = date('dhis').$request->file('pic_1')->getClientOriginalName();
            $request->file('pic_1')->move(public_path('../resources/news/'), $news->news_image);
        }
        if($request->file('news_pic1'))
        {
            $news->news_image_1 = date('dhis').$request->file('news_pic1')->getClientOriginalName();
            $request->file('news_pic1')->move(public_path('../resources/news/'), $news->news_image_1);
        }
        if($request->file('news_pic2'))
        {
            $news->news_image_2 = date('dhis').$request->file('news_pic2')->getClientOriginalName();
            $request->file('news_pic2')->move(public_path('../resources/news/'), $news->news_image_2);
        }
        if($request->file('news_pic3'))
        {
            $news->news_image_3 = date('dhis').$request->file('news_pic3')->getClientOriginalName();
            $request->file('news_pic3')->move(public_path('../resources/news/'), $news->news_image_3);
        }
        if($request->file('news_pic4'))
        {
            $news->news_image_4 = date('dhis').$request->file('news_pic4')->getClientOriginalName();
            $request->file('news_pic4')->move(public_path('../resources/news/'), $news->news_image_4);
        }
        if($request->file('news_pic5'))
        {
            $news->news_image_5 = date('dhis').$request->file('news_pic5')->getClientOriginalName();
            $request->file('news_pic5')->move(public_path('../resources/news/'), $news->news_image_5);
        }
        if($request->file('news_pic6'))
        {
            $news->news_image_6 = date('dhis').$request->file('news_pic6')->getClientOriginalName();
            $request->file('news_pic6')->move(public_path('../resources/news/'), $news->news_image_6);
        }
        if($request->file('news_pic7'))
        {
            $news->news_image_7 = date('dhis').$request->file('news_pic7')->getClientOriginalName();
            $request->file('news_pic7')->move(public_path('../resources/news/'), $news->news_image_7);
        }
        if($request->file('news_pic8'))
        {
            $news->news_image_8 = date('dhis').$request->file('news_pic8')->getClientOriginalName();
            $request->file('news_pic8')->move(public_path('../resources/news/'), $news->news_image_8);
        }

        $news->news_image_description = $request->get("newsDescription1");
        $news->news_details = $request->get("newsDescription2");
        $news->news_last_description = $request->get("newsDescription3");
        $news->featured_news = ($request->get("newstype") == "Featured News") ? 1 : 0;
        $news->covid_news = ($request->get("newstype") == "COVID-19 News") ? 1 : 0;
        $news->active = $request->get("active") == "on" ? 1 : 0;
        $news->save();

        return redirect()->to("/news");
    }

    public function saveFrontContent(Request $request)
    {
        $content = FrontContentSection::where("content_level" , $request->get("level"))->get();
        if(count($content) > 0)
        {
            // Already Exist Just Update the content

            $content = $content->first();
            $content->content_level = $request->get("level");
            if($request->file('pic'))
            {
                $content->content_pic = date('dhis').$request->get("level").'-'.$request->file('pic')->getClientOriginalName();
                $request->file('pic')->move(public_path('../resources/contents/'), $content->content_pic);
            }

            $content->content_description = $request->get("contentDescription");
            $content->save();
        }
        else
        {
            // No Content, Create

            $content = new FrontContentSection();
            $content->content_level = $request->get("level");
            if($request->file('pic'))
            {
                $content->content_pic = date('dhis').$request->get("level").'-'.$request->file('pic')->getClientOriginalName();
                $request->file('pic')->move(public_path('../resources/contents/'), $content->content_pic);
            }

            $content->content_description = $request->get("contentDescription");
            $content->save();

        }
        return redirect()->back();
    }

    public function showFrontContents()
    {
        $first_content = FrontContentSection::where("content_level",1)->get();
        $second_content = FrontContentSection::where("content_level",2)->get();
        $third_content = FrontContentSection::where("content_level",3)->get();
        return view("admin.front-contents" , compact('first_content','second_content','third_content'));
    }

    public function showSliders()
    {
        $slider = Slider::all();
        return view("admin.slider" , compact('slider'));
    }
    public function createSlider()
    {
        return view("admin.create-slider");
    }
    public function saveSlider(Request $request)
    {
        $content = new Slider();
        $content->slider_text = $request->get("sliderText");
        if($request->file('pic'))
        {
            $content->slider_image = date('dhis').$request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(public_path('../resources/sliders/'), $content->slider_image);
        }
        $content->save();

        return redirect()->to("/sliders");
    }
    public function editSaveSlider(Request $request)
    {
        $content = Slider::where('id' , $request->get('sliderid'))->first();
        $content->slider_text = $request->get("sliderText");
        if($request->file('pic'))
        {
            $content->slider_image = date('dhis').$request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(public_path('../resources/sliders/'), $content->slider_image);
        }
        $content->save();

        return redirect()->to("/sliders");
    }

    public function editSlider($id)
    {
        $slider = Slider::where('id' , $id)->first();
        return view("admin.edit-slider" , compact('slider'));
    }

    public function showDoctors()
    {
        $doctor = Doctors::all();
        return view("doctors" , compact('doctor'));
    }
    public function createDoctor()
    {
        $department = Department::all();
        return view("admin.create-doctor" , compact('department'));
    }

    public function saveDoctor(Request $request)
    {
        $doctor = new Doctors();
        $doctor->name = $request->get("name");
        $doctor->title = $request->get("title");
        $doctor->description = $request->get("description");
        $doctor->timing = $request->get('timing');
        $doctor->dept_id = $request->get('department');
        $doctor->speciality = $request->get('speciality');
        if($request->file('pic'))
        {
            $doctor->doctor_image = date('dhis').$request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(public_path('../resources/doctors/'), $doctor->doctor_image);
        }
        $doctor->save();

        return redirect()->to("/doctors");
    }

    public function editDoctor($id)
    {
        $doctor = Doctors::where('id' , $id)->first();
        $department = Department::all();
        return view("admin.edit-doctor", compact('doctor' , 'department'));
    }

    public function editSaveDoctor(Request $request)
    {
        $doctor = Doctors::where('id' , $request->get('doctorid'))->first();
        $doctor->name = $request->get("name");
        $doctor->title = $request->get("title");
        $doctor->description = $request->get("description");
        $doctor->timing = $request->get('timing');
        $doctor->dept_id = $request->get('department');
        $doctor->speciality = $request->get('speciality');
        if($request->file('pic'))
        {
            $doctor->doctor_image = date('dhis').$request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(public_path('../resources/doctors/'), $doctor->doctor_image);
        }
        $doctor->save();

        return redirect()->to("/doctors");
    }

    public function saveDoctorExpertise(Request $request)
    {
        $expertise = Expertise::where("doctor_id" , $request->get('doctorid'))->where("title" , $request->get('expertise'))->get();
        if(count($expertise) > 0)
        {
            return redirect()->back();
        }
        $expertise = new Expertise();
        $expertise->doctor_id = $request->get('doctorid');
        $expertise->title = $request->get('expertise');
        $expertise->save();
        return redirect()->back();
    }

    public function removeExpertise($id)
    {
        Expertise::find($id)->delete();
        return redirect()->back();
    }

    public function saveDoctorQualification(Request $request)
    {
        $qualification = Qualification::where("doctor_id" , $request->get('doctorid'))->where("title" , $request->get('qualification'))->get();
        if(count($qualification) > 0)
        {
            return redirect()->back();
        }
        $qualification = new Qualification();
        $qualification->doctor_id = $request->get('doctorid');
        $qualification->title = $request->get('qualification');
        $qualification->save();
        return redirect()->back();
    }

    public function removeQualification($id)
    {
        Qualification::find($id)->delete();
        return redirect()->back();
    }

    public function saveDoctorCertification(Request $request)
    {
        $certification = Certification::where("doctor_id" , $request->get('doctorid'))->where("title" , $request->get('certification'))->get();
        if(count($certification) > 0)
        {
            return redirect()->back();
        }
        $certification = new Certification();
        $certification->doctor_id = $request->get('doctorid');
        $certification->title = $request->get('certification');
        $certification->save();
        return redirect()->back();
    }

    public function removeCertification($id)
    {
        Certification::find($id)->delete();
        return redirect()->back();
    }

    public function showManagements()
    {
        $management = Management::where("type" , "Management")->get();
        return view("admin.management" ,compact('management'));
    }
    public function showServices()
    {
        $management = Management::where("type" , "Services")->get();
        return view("admin.services" ,compact('management'));
    }

    public function createManagement()
    {
        return view("admin.create-management");
    }
    public function createService()
    {
        return view("admin.create-service");
    }

    public function saveManagement(Request $request)
    {
        $management = Management::where("management_name" , $request->get('management'))->get();
        if(count($management) > 0)
        {
            return redirect()->to('/management');
        }
        $management = new Management();
        $management->management_name = $request->get('management');
        $management->level = $request->get('level');
        $management->type = "Management";
        $management->save();
        return redirect()->to('/management');
    }

    public function saveService(Request $request)
    {
        $management = Management::where("management_name" , $request->get('management'))->get();
        if(count($management) > 0)
        {
            return redirect()->to('/services');
        }
        $management = new Management();
        $management->management_name = $request->get('management');
        $management->level = $request->get('level');
        $management->type = "Services";
        $management->save();
        return redirect()->to('/services');
    }

    public function editManagement($id)
    {
        $management = Management::where("id" , $id)->first();
        return view("admin.edit-management" , compact('management'));
    }

    public function editService($id)
    {
        $management = Management::where("id" , $id)->first();
        return view("admin.edit-service" , compact('management'));
    }

    public function saveEditManagement(Request $request)
    {
        $management = Management::where("id" , $request->get('managementid'))->first();
        $management->management_name = $request->get('management');
        $management->level = $request->get('level');
        $management->save();
        return redirect()->to('/management');
    }

    public function saveEditService(Request $request)
    {
        $management = Management::where("id" , $request->get('managementid'))->first();
        $management->management_name = $request->get('management');
        $management->level = $request->get('level');
        $management->save();
        return redirect()->to('/services');
    }

    public function showManagementSection($mgtid)
    {
        $mgtSection = ManagementSection::where("management_id" , $mgtid)->get();
        $mgt = Management::where("id" , $mgtid)->first();
        return view("admin.management-section" , compact('mgtSection','mgt'));
    }

    public function showServiceSection($mgtid)
    {
        $mgtSection = ManagementSection::where("management_id" , $mgtid)->get();
        $mgt = Management::where("id" , $mgtid)->first();
        return view("admin.service-section" , compact('mgtSection','mgt'));
    }

    public function saveSectionTeam(Request $request)
    {
        $sectionTeam = new SectionTeam();
        $sectionTeam->management_section_id = $request->get('sectionid');
        if($request->file('member'))
        {
            $sectionTeam->member = date('dhis').$request->file('member')->getClientOriginalName();
            $request->file('member')->move(public_path('../resources/management/team/'), $sectionTeam->member);
        }
        $sectionTeam->team_member = $request->get('member_name');
        $sectionTeam->member_designation = $request->get('member_designation');
        $sectionTeam->member_email = $request->get('member_email');
        $sectionTeam->save();

        return redirect()->back();
    }

    public function saveServiceSectionTeam(Request $request)
    {
        $sectionTeam = new SectionTeam();
        $sectionTeam->management_section_id = $request->get('sectionid');
        if($request->file('member'))
        {
            $sectionTeam->member = date('dhis').$request->file('member')->getClientOriginalName();
            $request->file('member')->move(public_path('../resources/service/team/'), $sectionTeam->member);
        }
        $sectionTeam->team_member = $request->get('member_name');
        $sectionTeam->member_designation = $request->get('member_designation');
        $sectionTeam->member_email = $request->get('member_email');
        $sectionTeam->save();

        return redirect()->back();
    }

    public function CEOMessage()
    {
        $message = CEOMessage::all();
        return view("admin.ceo-message" , compact('message'));
    }

    public function showMessageForm()
    {
        return view("admin.create-ceo-message");
    }

    public function saveMessage(Request $request)
    {
        $message = new CEOMessage();
        if($request->file('pic'))
        {
            $message->msg_pic = date('dhis').$request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(public_path('../resources/ceo/'), $message->msg_pic);
        }
        $message->msg_title = $request->get('title');
        $message->msg_description = $request->get('description');
        $message->save();

        return redirect()->to('/ceo-message');
    }

    public function SaveEditMessage(Request $request)
    {
        $message = CEOMessage::where("id" , $request->get('messageid'))->first();
        if($request->file('pic'))
        {
            $message->msg_pic = date('dhis').$request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(public_path('../resources/ceo/'), $message->msg_pic);
        }
        $message->msg_title = $request->get('title');
        $message->msg_description = $request->get('description');
        $message->save();

        return redirect()->to('/ceo-message');
    }

    public function editMessage($messageId)
    {
        $message = CEOMessage::where("id" , $messageId)->first();
        return view("admin.edit-ceo-message" , compact("message"));
    }

    public function removeTeam($teamId)
    {
        $sectionTeam = SectionTeam::where("id" , $teamId)->first();
        File::delete(public_path('../resources/management/team/') . '/' . $sectionTeam->member);
        SectionTeam::where("id" , $teamId)->delete();
        return redirect()->back();
    }

    public function removeServiceTeam($teamId)
    {
        $sectionTeam = SectionTeam::where("id" , $teamId)->first();
        File::delete(public_path('../resources/service/team/') . '/' . $sectionTeam->member);
        SectionTeam::where("id" , $teamId)->delete();
        return redirect()->back();
    }

    public function saveManagementSection(Request $request)
    {
        $mgtSection = ManagementSection::where("management_id" , $request->get('managementid'))->get();
        if(count($mgtSection) > 0)
        {
            $mgtSection = $mgtSection->first();
        }
        else
        {
            $mgtSection = new ManagementSection();
        }

        $mgtSection->management_id = $request->get('managementid');
        if($request->file('header'))
        {
            $mgtSection->header = date('dhis').$request->file('header')->getClientOriginalName();
            $request->file('header')->move(public_path('../resources/management/'), $mgtSection->header);
        }
        if($request->file('hod'))
        {
            $mgtSection->hod = date('dhis').$request->file('hod')->getClientOriginalName();
            $request->file('hod')->move(public_path('../resources/management/'), $mgtSection->hod);
        }

        $mgtSection->description = $request->get('sectionDescription');
        $mgtSection->hod_name = $request->get('hod_name');
        $mgtSection->hod_designation = $request->get('hod_designation');
        $mgtSection->hod_email = $request->get('hod_email');
        $mgtSection->save();

        return redirect()->back();
    }

    public function saveServiceSection(Request $request)
    {
        $mgtSection = ManagementSection::where("management_id" , $request->get('managementid'))->get();
        if(count($mgtSection) > 0)
        {
            $mgtSection = $mgtSection->first();
        }
        else
        {
            $mgtSection = new ManagementSection();
        }

        $mgtSection->management_id = $request->get('managementid');
        if($request->file('header'))
        {
            $mgtSection->header = date('dhis').$request->file('header')->getClientOriginalName();
            $request->file('header')->move(public_path('../resources/service/'), $mgtSection->header);
        }
        if($request->file('hod'))
        {
            $mgtSection->hod = date('dhis').$request->file('hod')->getClientOriginalName();
            $request->file('hod')->move(public_path('../resources/service/'), $mgtSection->hod);
        }

        $mgtSection->description = $request->get('sectionDescription');
        $mgtSection->hod_name = $request->get('hod_name');
        $mgtSection->hod_designation = $request->get('hod_designation');
        $mgtSection->hod_email = $request->get('hod_email');
        $mgtSection->save();

        return redirect()->back();
    }

    public function saveSectionServices(Request $request)
    {
        $service = new SectionServices();
        $service->management_section_id = $request->get('sectionid');
        $service->service_title = $request->get('service');
        $service->save();
        return redirect()->back();
    }

    public function aboutUs()
    {
        $aboutus = AboutUs::where('type' ,"about-us")->get();
        return view("about-us" , compact('aboutus'));
    }
    public function visionMission()
    {
        $aboutus = AboutUs::where('type' ,"vision-mission")->get();
        return view("admin.vision-mission" , compact('aboutus'));
    }

    public function saveAboutUs(Request $request)
    {

        $aboutUs = AboutUs::where("type" , 'about-us')->get();
        if(count($aboutUs) > 0)
        {
            $aboutUs = $aboutUs->first();
        }
        else
        {
            $aboutUs = new AboutUs();
        }
        $aboutUs->type = "about-us";
        if($request->file('banner_image'))
        {
            $aboutUs->banner_image = date('dhis').$request->file('banner_image')->getClientOriginalName();
            $request->file('banner_image')->move(public_path('../storage/app/public/'), $aboutUs->banner_image);
        }

        $details =  $request->get('details');

        $wrappedHtml = '<div>' . $details . '</div>';

// Use the global DOMDocument class
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true); // Suppress warnings for invalid HTML structure
        $dom->loadHTML($wrappedHtml, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

// Get the <ul> element
        $ul = $dom->getElementsByTagName('ul')->item(0);
        if ($ul) {
            // Add the class "list" to the <ul> tag
            $ul->setAttribute('class', 'list');

            // Loop through all <li> elements and add the <i> icon
            foreach ($ul->getElementsByTagName('li') as $li) {
                // Create the <i> element
                $icon = $dom->createElement('i');
                $icon->setAttribute('class', 'ti ti-checks');

                // Insert the <i> element at the beginning of the <li> tag
                $li->insertBefore($icon, $li->firstChild);
            }
        }

// Extract the modified HTML inside the temporary wrapper
        $body = $dom->getElementsByTagName('div')->item(0);
        $details = $dom->saveHTML($body);

// Remove the wrapping <div> tag
        $details = preg_replace('/^<div>|<\/div>$/', '', $details);
        $aboutUs->details = $details;

        if($request->file('image_1'))
        {
            $aboutUs->image_1 = date('dhis').$request->file('image_1')->getClientOriginalName();
            $request->file('image_1')->move(public_path('../storage/app/public/'), $aboutUs->image_1);
        }
        if($request->file('image_2'))
        {
            $aboutUs->image_2 = date('dhis').$request->file('image_2')->getClientOriginalName();
            $request->file('image_2')->move(public_path('../storage/app/public/'), $aboutUs->image_2);
        }
        if($request->file('image_3'))
        {
            $aboutUs->image_3 = date('dhis').$request->file('image_3')->getClientOriginalName();
            $request->file('image_3')->move(public_path('../storage/app/public/'), $aboutUs->image_3);
        }
        $aboutUs->details_2 = $request->get('details_2');

        if($request->file('image_4'))
        {
            $aboutUs->image_4 = date('dhis').$request->file('image_4')->getClientOriginalName();
            $request->file('image_4')->move(public_path('../storage/app/public/'), $aboutUs->image_4);
        }
        if($request->file('image_5'))
        {
            $aboutUs->image_5 = date('dhis').$request->file('image_5')->getClientOriginalName();
            $request->file('image_5')->move(public_path('../storage/app/public/'), $aboutUs->image_5);
        }
        if($request->file('image_6'))
        {
            $aboutUs->image_6 = date('dhis').$request->file('image_6')->getClientOriginalName();
            $request->file('image_6')->move(public_path('../storage/app/public/'), $aboutUs->image_6);
        }
        $aboutUs->details_3 = $request->get('details_3');
        if($request->file('image_7'))
        {
            $aboutUs->image_7 = date('dhis').$request->file('image_7')->getClientOriginalName();
            $request->file('image_7')->move(public_path('../storage/app/public/'), $aboutUs->image_7);
        }
        if($request->file('image_8'))
        {
            $aboutUs->image_8 = date('dhis').$request->file('image_8')->getClientOriginalName();
            $request->file('image_8')->move(public_path('../storage/app/public/'), $aboutUs->image_8);
        }
        if($request->file('image_9'))
        {
            $aboutUs->image_9 = date('dhis').$request->file('image_9')->getClientOriginalName();
            $request->file('image_9')->move(public_path('../storage/app/public/'), $aboutUs->image_9);
        }
        $aboutUs->save();
        return redirect()->to("/about-pic");
    }
    public function saveVisionMission(Request $request)
    {

        $aboutUs = AboutUs::where("type" , 'vision-mission')->get();
        if(count($aboutUs) > 0)
        {
            $aboutUs = $aboutUs->first();
        }
        else
        {
            $aboutUs = new AboutUs();
        }
        $aboutUs->type = "vision-mission";
        if($request->file('banner_image'))
        {
            $aboutUs->banner_image = date('dhis').$request->file('banner_image')->getClientOriginalName();
            $request->file('banner_image')->move(public_path('../resources/vision-mission/'), $aboutUs->banner_image);
        }
        $aboutUs->details = $request->get('details');

        if($request->file('image_1'))
        {
            $aboutUs->image_1 = date('dhis').$request->file('image_1')->getClientOriginalName();
            $request->file('image_1')->move(public_path('../resources/vision-mission/'), $aboutUs->image_1);
        }
        if($request->file('image_2'))
        {
            $aboutUs->image_2 = date('dhis').$request->file('image_2')->getClientOriginalName();
            $request->file('image_2')->move(public_path('../resources/vision-mission/'), $aboutUs->image_2);
        }
        if($request->file('image_3'))
        {
            $aboutUs->image_3 = date('dhis').$request->file('image_3')->getClientOriginalName();
            $request->file('image_3')->move(public_path('../resources/vision-mission/'), $aboutUs->image_3);
        }
        $aboutUs->details_2 = $request->get('details_2');

        if($request->file('image_4'))
        {
            $aboutUs->image_4 = date('dhis').$request->file('image_4')->getClientOriginalName();
            $request->file('image_4')->move(public_path('../resources/vision-mission/'), $aboutUs->image_4);
        }
        if($request->file('image_5'))
        {
            $aboutUs->image_5 = date('dhis').$request->file('image_5')->getClientOriginalName();
            $request->file('image_5')->move(public_path('../resources/vision-mission/'), $aboutUs->image_5);
        }
        if($request->file('image_6'))
        {
            $aboutUs->image_6 = date('dhis').$request->file('image_6')->getClientOriginalName();
            $request->file('image_6')->move(public_path('../resources/vision-mission/'), $aboutUs->image_6);
        }
        $aboutUs->details_3 = $request->get('details_3');
        if($request->file('image_7'))
        {
            $aboutUs->image_7 = date('dhis').$request->file('image_7')->getClientOriginalName();
            $request->file('image_7')->move(public_path('../resources/vision-mission/'), $aboutUs->image_7);
        }
        if($request->file('image_8'))
        {
            $aboutUs->image_8 = date('dhis').$request->file('image_8')->getClientOriginalName();
            $request->file('image_8')->move(public_path('../resources/vision-mission/'), $aboutUs->image_8);
        }
        if($request->file('image_9'))
        {
            $aboutUs->image_9 = date('dhis').$request->file('image_9')->getClientOriginalName();
            $request->file('image_9')->move(public_path('../resources/vision-mission/'), $aboutUs->image_9);
        }

        $aboutUs->save();

        return redirect()->to("/vision-mission");
    }

    public function governorsBoard()
    {
        $bog = BOG::all();
        return view("admin.governors-board" , compact('bog'));
    }
    public function createGovernorsBoard()
    {
        return view("admin.create-board-governor");
    }
    public function editBOG($id)
    {
        $bog = BOG::where('id' , $id)->first();
        return view("admin.edit-board-governor" , compact('bog'));
    }
    public function saveBOG(Request $request)
    {
        $bog = new BOG();
        $bog->bog_name = $request->get("bog_name");
        $bog->bog_title = $request->get("bog_title");
        if($request->file('bog_image'))
        {
            $bog->bog_image = date('dhis').$request->file('bog_image')->getClientOriginalName();
            $request->file('bog_image')->move(public_path('../resources/bog/'), $bog->bog_image);
        }
        $bog->save();

        return redirect()->to("/governors");
    }
    public function saveEditBOG(Request $request)
    {
        $bog = BOG::where('id' , $request->get('bogid'))->first();
        $bog->bog_name = $request->get("bog_name");
        $bog->bog_title = $request->get("bog_title");
        if($request->file('bog_image'))
        {
            $bog->bog_image = date('dhis').$request->file('bog_image')->getClientOriginalName();
            $request->file('bog_image')->move(public_path('../resources/bog/'), $bog->bog_image);
        }
        $bog->save();

        return redirect()->to("/governors");
    }
    public function timeline()
    {
        $timeline = Timeline::all();
        return view("admin.timeline" , compact('timeline'));
    }
    public function editTimeline($id)
    {
        $timeline = Timeline::where('id' , $id)->first();
        return view("admin.edit-timeline" , compact('timeline'));
    }

    public function createTimeline()
    {
        return view("admin.create-timeline");
    }

    public function saveTimeline(Request $request)
    {
        $timeline = new Timeline();
        if($request->file('image'))
        {
            $timeline->image = date('dhis').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('../resources/timeline/'), $timeline->image);
        }
        $timeline->title = $request->get("title");
        $timeline->description = $request->get("description");
        $timeline->created_at = $request->get("date");
        $timeline->save();
        return redirect()->to("timeline");
    }

    public function SaveEditTimeline(Request $request)
    {
        $timeline = Timeline::where('id' , $request->get('timelineid'))->first();
        if($request->file('image'))
        {
            $timeline->image = date('dhis').$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('../resources/timeline/'), $timeline->image);
        }
        $timeline->title = $request->get("title");
        $timeline->description = $request->get("description");
        $timeline->created_at = $request->get("date");
        $timeline->save();
        return redirect()->to("timeline");
    }

    public function removeTenderEOI($id)
    {
        $tender = Tenders::where('id' , $id)->first();
        File::delete(public_path('../resources/tenders') . '/' . $tender->tender_eoi);
        $tender->tender_eoi = NULL;
        $tender->save();
        return back();
    }
    public function removeTenderEOI2($id)
    {
        $tender = Tenders::where('id' , $id)->first();
        File::delete(public_path('../resources/tenders') . '/' . $tender->tender_eoi2);
        $tender->tender_eoi2 = NULL;
        $tender->save();
        return back();
    }
    public function removeTenderSBD($id)
    {
        $tender = Tenders::where('id' , $id)->first();
        File::delete(public_path('../resources/tenders') . '/' . $tender->sbd);
        $tender->sbd = NULL;
        $tender->save();
        return back();
    }
    public function removeTenderDocument($id)
    {
        $tender = Tenders::where('id' , $id)->first();
        File::delete(public_path('../resources/tenders') . '/' . $tender->tender_document);
        $tender->tender_document = NULL;
        $tender->save();
        return back();
    }
    public function removeTenderevaluation($id)
    {
        $tender = Tenders::where('id' , $id)->first();
        File::delete(public_path('../resources/tenders') . '/' . $tender->tender_evaluation);
        $tender->tender_evaluation = NULL;
        $tender->save();
        return back();
    }

    public function removeFinancialEvaluation($id)
    {
        $tender = Tenders::where('id' , $id)->first();
        File::delete(public_path('../resources/tenders') . '/' . $tender->financial_evaluation);
        $tender->financial_evaluation = NULL;
        $tender->save();
        return back();
    }

    public function validateDocuments()
    {

    }

    public function getCurrentDateTime()
    {
        return date("Y-m-d");
    }

    public function getCurrentID()
    {
        return Auth::user()->ID;
    }
}
