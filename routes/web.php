<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackPortalController;

//General Page Routes start
Route::get('general', [BackPortalController::class, 'index'])->name('generalsettings');
Route::post('general/create', [BackPortalController::class, 'store'])->name('create');
Route::put('update-item', [BackPortalController::class, 'update']);
Route::get('general/edit-item/{id}', [BackPortalController::class, 'edit']);
//General Page Routes end

Route::get('create-doctor', function(){
    return view('create-doctor');
});

Route::get('/about-pic', [BackPortalController::class, 'aboutUs'])->name('about-pic');
Route::post('/save-about-us', [BackPortalController::class, 'saveAboutUs']);


//Route::get('/doctors' , 'BackPortalController@showDoctors');

Route::get('/doctors', [BackPortalController::class, 'showDoctors'])->name('doctors');

Route::get('/', function () {return view('index');})->name("/");
//Route::get('/settings', function () {return view('general_settings');})->name("generalsettings");

Route::get('/typography', function () {return view('ui-typography');})->name('typography');

Route::get('/calendar', function () {return view('calendar');})->name('calendar');

Route::get('/buttons', function () {return view('ui-buttons');})->name('buttons');

Route::get('/cards', function () {return view('ui-cards');})->name('cards');

Route::get('/draggable-cards', function () {return view('ui-draggable-cards');})->name('draggable-cards');

Route::get('/checkbox-radio', function () {return view('ui-checkbox-radio');})->name('checkbox-radio');

Route::get('/material-icons', function () {return view('ui-material-icons');})->name('material-icons');

Route::get('/font-awesome-icons', function () {return view('ui-font-awesome-icons');})->name('font-awesome-icons');

Route::get('/dripicons', function () {return view('ui-dripicons');})->name('dripicons');

Route::get('/feather-icons', function () {return view('ui-feather-icons');})->name('feather-icons');

Route::get('/themify-icons', function () {return view('ui-themify-icons');})->name('themify-icons');

Route::get('/modals', function () {return view('ui-modals');})->name('modals');

Route::get('/notification', function () {return view('ui-notification');})->name('notification');

Route::get('/range-slider', function () {return view('ui-range-slider');})->name('range-slider');

Route::get('/components', function () {return view('ui-components');})->name('components');

Route::get('/sweetalert', function () {return view('ui-sweetalert');})->name('sweetalert');

Route::get('/treeview', function () {return view('ui-treeview');})->name('treeview');

Route::get('/widgets', function () {return view('ui-widgets');})->name('widgets');

Route::get('/form-elements', function () {return view('form-elements');})->name('form-elements');

Route::get('/form-advanced', function () {return view('form-advanced');})->name('form-advanced');

Route::get('/form-validation', function () {return view('form-validation');})->name('form-validation');

Route::get('/form-wizard', function () {return view('form-wizard');})->name('form-wizard');

Route::get('/form-fileupload', function () {return view('form-fileupload');})->name('form-fileupload');

Route::get('/form-quilljs', function () {return view('form-quilljs');})->name('form-quilljs');

Route::get('/form-xeditable', function () {return view('form-xeditable');})->name('form-xeditable');

Route::get('/tables-basic', function () {return view('tables-basic');})->name('tables-basic');

Route::get('/tables-datatable', function () {return view('tables-datatable');})->name('tables-datatable');

Route::get('/tables-responsive', function () {return view('tables-responsive');})->name('tables-responsive');

Route::get('/tables-editable', function () {return view('tables-editable');})->name('tables-editable');

Route::get('/tables-tablesaw', function () {return view('tables-tablesaw');})->name('tables-tablesaw');

Route::get('/charts-flot', function () {return view('charts-flot');})->name('charts-flot');

Route::get('/charts-morris', function () {return view('charts-morris');})->name('charts-morris');

Route::get('/charts-chartist', function () {return view('charts-chartist');})->name('charts-chartist');

Route::get('/charts-chartjs', function () {return view('charts-chartjs');})->name('charts-chartjs');

Route::get('/charts-other', function () {return view('charts-other');})->name('charts-other');

Route::get('/starter', function () {return view('pages-starter');})->name('pages-starter');

Route::get('/login', function () {return view('pages-login');})->name('login');

Route::get('/register', function () {return view('pages-register');})->name('register');

Route::get('/recover', function () {return view('pages-recoverpw');})->name('recover');

Route::get('/lock-screen', function () {return view('pages-lock-screen');})->name('lockscreen');

Route::get('/confirm-mail', function () {return view('pages-confirm-mail');})->name('confirm-mail');

Route::get('/pages-404', function () {return view('pages-404');})->name('pages-404');

Route::get('/pages-500', function () {return view('pages-500');})->name('pages-500');

Route::get('/projects', function () {return view('extras-projects');})->name('projects');

Route::get('/tour', function () {return view('extras-tour');})->name('tour');

Route::get('/taskboard', function () {return view('extras-taskboard');})->name('taskboard');

Route::get('/taskdetail', function () {return view('extras-taskdetail');})->name('taskdetail');

Route::get('/profile', function () {return view('extras-profile');})->name('profile');

Route::get('/maps', function () {return view('extras-maps');})->name('maps');

Route::get('/contact', function () {return view('extras-contact');})->name('contact');

Route::get('/pricing', function () {return view('extras-pricing');})->name('pricing');

Route::get('/timeline', function () {return view('extras-timeline');})->name('timeline');

Route::get('/invoice', function () {return view('extras-invoice');})->name('invoice');

Route::get('/faq', function () {return view('extras-faq');})->name('faq');

Route::get('/gallery', function () {return view('extras-gallery');})->name('gallery');

Route::get('/email', function () {return view('extras-email-templates');})->name('email');

Route::get('/maintenance', function () {return view('extras-maintenance');})->name('maintenance');

Route::get('/comingsoon', function () {return view('extras-comingsoon');})->name('comingsoon');
