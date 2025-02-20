@extends('template.base')
@section('main_section')

    <div id="wrapper">
        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-box">

                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="header-title mt-0">Ion Range Slider</h4>

                                <p class="text-muted font-13 mb-4">
                                    Cool, comfortable, responsive and easily customizable range slider
                                </p>

                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="range_01" class="col-sm-2 control-label">Default</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_01">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_02" class="col-sm-2 control-label">Min-Max</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_02">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_03" class="col-sm-2 control-label">Prefix</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_03">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_04" class="col-sm-2 control-label">Range</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_04">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_05" class="col-sm-2 control-label">Step</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_05">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_06" class="col-sm-2 control-label">Custom Values</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_06">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_07" class="col-sm-2 control-label">Prettify Numbers</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_07">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_08" class="col-sm-2 control-label">Disabled</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="range_08">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div><!-- Row -->

                </div> <!-- container-fluid -->

            </div> <!-- content -->
        </div>
    </div>

@endsection

@section('footer_files')
    <script src="{!!url('resources/libs/ion-rangeslider/ion.rangeSlider.min.js')!!}"></script>
    <script src="{!!url('resources/js/pages/range-sliders.init.js')!!}"></script>
@endsection
