@extends('template.base')

@section('page_title')
    Morris Charts
@endsection

@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-6">
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

                                    <h4 class="header-title mt-0 mb-3">Line Chart</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-line-example" class="morris-chart" style="height: 300px;" dir="ltr"></div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-6">
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

                                    <h4 class="header-title mt-0 mb-3">Bar Chart</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #35b8e0;"><i class="fa fa-circle mr-1"></i>Series C</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-bar-example" class="morris-chart" style="height: 300px;" dir="ltr"></></div>
                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
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

                                    <h4 class="header-title mt-0 mb-3">Stacked Bar Chart</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5 style="color: #71b6f9;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5><i class="fa fa-circle mr-1" style="color: #ebeff2;"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-bar-stacked" class="morris-chart" style="height: 300px;" dir="ltr"></></div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-6">
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

                                    <h4 class="header-title mt-0 mb-3">Area Chart</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #35b8e0;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-area-example" class="morris-chart" style="height: 300px;" dir="ltr"></></div>

                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
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

                                    <h4 class="header-title mt-0 mb-3">Area Chart with Point</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #35b8e0;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-area-with-dotted" class="morris-chart" style="height: 300px;" dir="ltr"></></div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-6">
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

                                    <h4 class="header-title mt-0 mb-3"> Donut Chart</h4>

                                    <div id="morris-donut-example" class="morris-chart" style="height: 300px;" dir="ltr"></></div>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>In-Store Sales</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #35b8e0;"><i class="fa fa-circle mr-1"></i>Mail-Order Sales</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Download Sales</h5>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
        </div>

@endsection

@section('footer_files')
    <script src="{!!url('resources/libs/morris-js/morris.min.js')!!}"></script>
    <script src="{!!url('resources/libs/raphael/raphael.min.js')!!}"></script>

    <script src="{!! url('resources/js/pages/morris.init.js') !!}"></script>
@endsection
