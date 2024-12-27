@extends('template.base')

@section('page_title')
    About Us
@endsection

@section('header_files')
    <style type="text/css">
        .content_pic_1 {
            width: 100%;
            height:  500px;
        }
        .content_pic_2{
            width: 100%;
            height:  500px;
        }
        .content_pic_3 {
            width: 100%;
            height:  500px;
        }
        .content_pic_4 {
            width: 100%;
            height:  500px;
        }
        .content_pic_5 {
            width: 100%;
            height:  500px;
        }
        .content_pic_6 {
            width: 100%;
            height:  500px;
        }
        .content_pic_7 {
            width: 100%;
            height:  500px;
        }
        .content_pic_8 {
            width: 100%;
            height:  500px;
        }
        .content_pic_9 {
            width: 100%;
            height:  500px;
        }
        .content_pic_10 {
            width: 100%;
            height:  500px;
        }
    </style>
@endsection

@section('main_section')
        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

                                {{--Section 1--}}
                                <form action="{!! url("/save-about-us") !!}" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="card-box">

                                    <h4 class="header-title mt-0 mb-3 float-left">Banner</h4>
                                    <button type="submit" data-toggle="tooltip" data-placement="bottom" class="btn btn-primary float-right">
                                        <i class="fa fa-save" style="font-size: 24px;"></i>
                                    </button>

                                    @if(count($aboutus) > 0)
                                        <img class="pull-left flip mr-15 thumbnail content_pic_1"  src="{{ url('/storage/app/public/' . $aboutus->first()->banner_image  )}}" alt="">
                                    @else
                                        <img class="pull-left flip mr-15 thumbnail content_pic_1"  src="{!! url('/storage/app/public/image-placeholder.webp') !!}" alt="">
                                    @endif

                                    <input type="file" name="banner_image" class="form-control pic_1">
                                    <br>
                                    <h4 class="header-title">Description</h4>
                                    {{--Editor--}}
                                    <textarea class="form-control ckeditor" name="details">{{ (count($aboutus) > 0 ) ? $aboutus->first()->details : '' }}</textarea>
                                </div>

                                {{--Section 2--}}
                                <div class="card-box"  style="padding: 0px;">
                                    {{--Image 1 --}}
                                    <div class="col-sm-4 float-left" style="padding: 0px;">
                                        <div class="card-box">
                                            <h4 class="header-title">Image</h4>
                                            @if(count($aboutus) > 0)
                                                <img class="pull-left flip mr-15 thumbnail content_pic_2"  src="{{ url('/storage/app/public/' . $aboutus->first()->image_1  )}}" alt="">
                                            @else
                                                <img class="pull-left flip mr-15 thumbnail content_pic_2"  src="{!! url('/storage/app/public/image-placeholder.webp') !!}" alt="">
                                            @endif
                                            <input type="file" name="image_1" class="form-control pic_2" >
                                        </div>
                                    </div>

                                    {{--Image 2 --}}
                                    <div class="col-sm-4 float-left" style="padding: 0px;">
                                        <div class="card-box">
                                            <h4 class="header-title">Image</h4>
                                            @if(count($aboutus) > 0)
                                                <img class="pull-left flip mr-15 thumbnail content_pic_3"  src="{{ url('/storage/app/public/' . $aboutus->first()->image_2  )}}" alt="">
                                            @else
                                                <img class="pull-left flip mr-15 thumbnail content_pic_3"  src="{!! url('/storage/app/public/image-placeholder.webp') !!}" alt="">
                                            @endif
                                            <input type="file" name="image_2" class="form-control pic_3" >
                                        </div>
                                    </div>

                                    {{--Image 3 --}}
                                    <div class="col-sm-4 float-left" style="padding: 0px;">
                                        <div class="card-box">
                                            <h4 class="header-title">Image</h4>
                                            @if(count($aboutus) > 0)
                                                <img class="pull-left flip mr-15 thumbnail content_pic_4"  src="{{ url('/storage/app/public/' . $aboutus->first()->image_3  )}}" alt="">
                                            @else
                                                <img class="pull-left flip mr-15 thumbnail content_pic_4"  src="{!! url('/storage/app/public/image-placeholder.webp') !!}" alt="">
                                            @endif
                                            <input type="file" name="image_3" class="form-control pic_4" >
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    {{--Editor--}}
                                    <h4 class="header-title">Description</h4>
                                    <textarea class="form-control ckeditor" name="details_2">{{ (count($aboutus) > 0 ) ? $aboutus->first()->details_2 : '' }}</textarea>
                                </div>

                                {{--Section 3--}}
                                <div class="card-box"  style="padding: 0px;">
                                    {{--Image 1 --}}
                                    <div class="col-sm-4 float-left" style="padding: 0px;">
                                        <div class="card-box">
                                            <h4 class="header-title">Image</h4>
                                            @if(count($aboutus) > 0)
                                                <img class="pull-left flip mr-15 thumbnail content_pic_5"  src="{{ url('/storage/app/public/' . $aboutus->first()->image_4  )}}" alt="">
                                            @else
                                                <img class="pull-left flip mr-15 thumbnail content_pic_5"  src="{!! url('/resources/image-placeholder.webp') !!}" alt="">
                                            @endif
                                            <input type="file" name="image_4" class="form-control pic_5" >
                                        </div>
                                    </div>

                                    {{--Image 2 --}}
                                    <div class="col-sm-4 float-left" style="padding: 0px;">
                                        <div class="card-box">
                                            <h4 class="header-title">Image</h4>
                                            @if(count($aboutus) > 0)
                                                <img class="pull-left flip mr-15 thumbnail content_pic_6"  src="{{ url('/storage/app/public/' . $aboutus->first()->image_5  )}}" alt="">
                                            @else
                                                <img class="pull-left flip mr-15 thumbnail content_pic_6"  src="{!! url('/resources/image-placeholder.webp') !!}" alt="">
                                            @endif
                                            <input type="file" name="image_5" class="form-control pic_6" >
                                        </div>
                                    </div>

                                    {{--Image 3 --}}
                                    <div class="col-sm-4 float-left" style="padding: 0px;">
                                        <div class="card-box">
                                            <h4 class="header-title">Image</h4>
                                            @if(count($aboutus) > 0)
                                                <img class="pull-left flip mr-15 thumbnail content_pic_7"  src="{{ url('/storage/app/public/' . $aboutus->first()->image_6  )}}" alt="">
                                            @else
                                                <img class="pull-left flip mr-15 thumbnail content_pic_7"  src="{!! url('/resources/image-placeholder.webp') !!}" alt="">
                                            @endif
                                            <input type="file" name="image_6" class="form-control pic_7" >
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    {{--Editor--}}
                                    <h4 class="header-title">Description</h4>
                                    <textarea class="form-control ckeditor" name="details_3">{{ (count($aboutus) > 0 ) ? $aboutus->first()->details_3 : '' }}</textarea>
                                </div>

                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
        </div>

<script src="{!! url('resources/libs/ckeditor/ckeditor.js') !!}"></script>
<script>CKEDITOR.replace('ckeditor');</script>
@endsection

@section('footer_files')

<script>
    $(function () {
        $(".pic_1").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_2").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_1;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_3").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_2;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_4").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_3;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_5").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_4;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_6").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_5;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_7").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_6;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_8").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_7;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_9").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_8;
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(".pic_10").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded_9;
                reader.readAsDataURL(this.files[0]);
            }
        });
    });

    function imageIsLoaded(e) {
        $('.content_pic_1').attr('src', e.target.result);
    };
    function imageIsLoaded_1(e) {
        $('.content_pic_2').attr('src', e.target.result);
    };
    function imageIsLoaded_2(e) {
        $('.content_pic_3').attr('src', e.target.result);
    };
    function imageIsLoaded_3(e) {
        $('.content_pic_4').attr('src', e.target.result);
    };
    function imageIsLoaded_4(e) {
        $('.content_pic_5').attr('src', e.target.result);
    };
    function imageIsLoaded_5(e) {
        $('.content_pic_6').attr('src', e.target.result);
    };
    function imageIsLoaded_6(e) {
        $('.content_pic_7').attr('src', e.target.result);
    };
    function imageIsLoaded_7(e) {
        $('.content_pic_8').attr('src', e.target.result);
    };
    function imageIsLoaded_8(e) {
        $('.content_pic_9').attr('src', e.target.result);
    };
    function imageIsLoaded_9(e) {
        $('.content_pic_10').attr('src', e.target.result);
    };

</script>
@endsection

