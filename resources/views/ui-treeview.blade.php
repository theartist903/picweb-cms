@extends('template.base')
@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6">
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

                                    <h4 class="header-title mt-0 mb-3">Basic Tree</h4>

                                    <div id="basicTree">
                                        <ul>
                                            <li>Adminto
                                                <ul>
                                                    <li data-jstree='{"opened":true}'>Assets
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Css</li>
                                                            <li data-jstree='{"opened":true}'>Plugins
                                                                <ul>
                                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"opened":true}'>Email Template
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                                    <li data-jstree='{"icon":"mdi mdi-format-font"}'>Typography</li>
                                                    <li data-jstree='{"opened":true}'>User Interface
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"icon":"mdi mdi-texture"}'>Forms</li>
                                                    <li data-jstree='{"icon":"mdi mdi-view-list"}'>Tables</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"type":"file"}'>Frontend</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6">
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

                                    <h4 class="header-title mt-0 mb-3">Checkbox Tree</h4>

                                    <div id="checkTree">
                                        <ul>
                                            <li>Adminto
                                                <ul>
                                                    <li data-jstree='{"opened":true}'>Assets
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Css</li>
                                                            <li data-jstree='{"opened":true}'>Plugins
                                                                <ul>
                                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"opened":true}'>Email Template
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                                    <li data-jstree='{"icon":"mdi mdi-format-font"}'>Typography</li>
                                                    <li data-jstree='{"opened":true}'>User Interface
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"icon":"mdi mdi-texture"}'>Forms</li>
                                                    <li data-jstree='{"icon":"mdi mdi-view-list"}'>Tables</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"type":"file"}'>Frontend</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
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

                                    <h4 class="header-title mt-0 mb-3">Drag &amp; Drop</h4>

                                    <div id="dragTree">
                                        <ul>
                                            <li>Adminto
                                                <ul>
                                                    <li data-jstree='{"opened":true}'>Assets
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Css</li>
                                                            <li data-jstree='{"opened":true}'>Plugins
                                                                <ul>
                                                                    <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                                    <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"opened":true}'>Email Template
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Email one</li>
                                                            <li data-jstree='{"type":"file"}'>Email two</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"icon":"mdi mdi-view-dashboard"}'>Dashboard</li>
                                                    <li data-jstree='{"icon":"mdi mdi-format-font"}'>Typography</li>
                                                    <li data-jstree='{"opened":true}'>User Interface
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Buttons</li>
                                                            <li data-jstree='{"type":"file"}'>Cards</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{"icon":"mdi mdi-texture"}'>Forms</li>
                                                    <li data-jstree='{"icon":"mdi mdi-view-list"}'>Tables</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"type":"file"}'>Frontend</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6">
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

                                    <h4 class="header-title mt-0 mb-3">Ajax</h4>

                                    <div id="ajaxTree"></div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div> <!-- content -->
            </div>
        </div>

@endsection

@section('footer_files')
    <script src="{!!url('resources/libs/treeview/jstree.min.js')!!}"></script>
    <script src="{!!url('resources/js/pages/treeview.init.js')!!}"></script>
@endsection
