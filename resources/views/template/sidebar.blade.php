            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{!!url("resources/images/users/user-1.jpg")!!}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown" aria-expanded="false">Nowak Helme</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted">
                                    <i class="mdi mdi-cog"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{ route("/")}}">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-page-layout-sidebar-left"></i>
                                    <span> Layouts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                    <li><a href="layouts-sidebar-sm.html">Small Sidebar</a></li>
                                    <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                    <li><a href="layouts-dark-topbar.html">Dark Topbar</a></li>
                                    <li><a href="layouts-preloader.html">Preloader</a></li>
                                    <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                    <li><a href="layouts-boxed.html">Boxed</a></li>
                                </ul>
                            </li> --}}

                            <li class="menu-title">Apps</li>

                            {{-- <li>
                                <a href="apps-chat.html">
                                    <i class="mdi mdi-forum"></i>
                                    <span class="badge badge-purple float-right">New</span>
                                    <span> Chat </span>
                                </a>
                            </li> --}}

                            <li>
                                <a href="{{ route("calendar")}}">
                                    <i class="mdi mdi-calendar"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="inbox.html">
                                    <i class="mdi mdi-email"></i>
                                    <span> Mail </span>
                                </a>
                            </li> --}}

                            <li class="menu-title">PIC WEB</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span> Settings </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Users</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('generalsettings') }}">General Settings</a>
                                    </li>

                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span> Landing Page </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li>
                                        <a href="{!! url('/doctors') !!}">Doctors</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Video Gallery</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Downloads</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Main Content</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">News</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Rules & Regulations</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Sliders</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Tenders</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Timeline</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Main Page</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Health Professionals</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">About Us</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Vision & Mission</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">BOGs</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Directors Message</a>
                                    </li>
                                </ul>
                            </li>



{{--                            <li class="menu-title">Components</li>--}}

{{--                            <li>--}}
{{--                                <a href="{{route("typography")}}">--}}
{{--                                    <i class="mdi mdi-format-font"></i>--}}
{{--                                    <span> Typography </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-invert-colors"></i>--}}
{{--                                    <span> User Interface </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="{{route('buttons')}}">Buttons</a></li>--}}
{{--                                    <li><a href="{{route('cards')}}">Cards</a></li>--}}
{{--                                    <li><a href="{{route('draggable-cards')}}">Draggable Cards</a></li>--}}
{{--                                    <li><a href="{{route('checkbox-radio')}}">Checkboxs-Radios</a></li>--}}
{{--                                    <li><a href="{{route('material-icons')}}">Material Design</a></li>--}}
{{--                                    <li><a href="{{route('font-awesome-icons')}}">Font Awesome 5</a></li>--}}
{{--                                    <li><a href="{{route('dripicons')}}">Dripicons</a></li>--}}
{{--                                    <li><a href="{{route('feather-icons')}}">Feather Icons</a></li>--}}
{{--                                    <li><a href="{{route('themify-icons')}}">Themify Icons</a></li>--}}
{{--                                    <li><a href="{{route("modals")}}">Modals</a></li>--}}
{{--                                    <li><a href="{{route('notification')}}">Notification</a></li>--}}
{{--                                    <li><a href="{{route('range-slider')}}">Range Slider</a></li>--}}
{{--                                    <li><a href="{{route('components')}}">Components</a>--}}
{{--                                    <li><a href="{{route('sweetalert')}}">Sweet Alert</a>--}}
{{--                                    <li><a href="{{route('treeview')}}">Tree view</a>--}}
{{--                                    <li><a href="{{route('widgets')}}">Widgets</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-texture"></i>--}}
{{--                                    <span class="badge badge-warning float-right">7</span>--}}
{{--                                    <span> Forms </span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="{{route('form-elements')}}">General Elements</a></li>--}}
{{--                                    <li><a href="{{route('form-advanced')}}">Advanced Form</a></li>--}}
{{--                                    <li><a href="{{route('form-validation')}}">Form Validation</a></li>--}}
{{--                                    <li><a href="{{route('form-wizard')}}">Form Wizard</a></li>--}}
{{--                                    <li><a href="{{route('form-fileupload')}}">Form Uploads</a></li>--}}
{{--                                    <li><a href="{{route('form-quilljs')}}">Quilljs Editor</a></li>--}}
{{--                                    <li><a href="{{route('form-xeditable')}}">X-editable</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-view-list"></i>--}}
{{--                                    <span> Tables </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="{{route('tables-basic')}}">Basic Tables</a></li>--}}
{{--                                    <li><a href="{{route('tables-datatable')}}">Data Tables</a></li>--}}
{{--                                    <li><a href="{{route('tables-responsive')}}">Responsive Table</a></li>--}}
{{--                                    <li><a href="{{route('tables-editable')}}">Editable Table</a></li>--}}
{{--                                    <li><a href="{{route('tables-tablesaw')}}">Tablesaw Table</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-chart-donut-variant"></i>--}}
{{--                                    <span> Charts </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="{{route('charts-flot')}}">Flot Charts</a></li>--}}
{{--                                    <li><a href="{{route('charts-morris')}}">Morris Charts</a></li>--}}
{{--                                    <li><a href="{{route('charts-chartist')}}">Chartist Charts</a></li>--}}
{{--                                    <li><a href="{{route('charts-chartjs')}}">Chartjs Charts</a></li>--}}
{{--                                    <li><a href="{{route('charts-other')}}">Other Charts</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            --}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-file-multiple"></i>--}}
{{--                                    <span> Pages </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="{{route('pages-starter')}}">Starter Page</a></li>--}}
{{--                                    <li><a href="{{route('login')}}">Login</a></li>--}}
{{--                                    <li><a href="{{route('register')}}">Register</a></li>--}}
{{--                                    <li><a href="{{route('recover')}}">Recover Password</a></li>--}}
{{--                                    <li><a href="{{route('lockscreen')}}">Lock Screen</a></li>--}}
{{--                                    <li><a href="{{route('confirm-mail')}}">Confirm Mail</a></li>--}}
{{--                                    <li><a href="{{route('pages-404')}}">Error 404</a></li>--}}
{{--                                    <li><a href="{{route('pages-500')}}">Error 500</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-layers"></i>--}}
{{--                                    <span> Extra Pages </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="{{route('projects')}}">Projects</a></li>--}}
{{--                                    <li><a href="{{route('tour')}}">Tour</a></li>--}}
{{--                                    <li><a href="{{route('taskboard')}}">Taskboard</a></li>--}}
{{--                                    <li><a href="{{route('taskdetail')}}">Task Detail</a></li>--}}
{{--                                    <li><a href="{{route('profile')}}">Profile</a></li>--}}
{{--                                    <li><a href="{{route('maps')}}">Maps</a></li>--}}
{{--                                    <li><a href="{{route('contact')}}">Contact list</a></li>--}}
{{--                                    <li><a href="{{route('pricing')}}">Pricing</a></li>--}}
{{--                                    <li><a href="{{route('timeline')}}">Timeline</a></li>--}}
{{--                                    <li><a href="{{route('invoice')}}">Invoice</a></li>--}}
{{--                                    <li><a href="{{route('faq')}}">FAQs</a></li>--}}
{{--                                    <li><a href="{{route('gallery')}}">Gallery</a></li>--}}
{{--                                    <li><a href="{{route('email')}}">Email Templates</a></li>--}}
{{--                                    <li><a href="{{route('maintenance')}}">Maintenance</a></li>--}}
{{--                                    <li><a href="{{route('comingsoon')}}">Coming Soon</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-share-variant"></i>--}}
{{--                                    <span> Multi Level </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level nav" aria-expanded="false">--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);">Level 1.1</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);" aria-expanded="false">Level 1.2--}}
{{--                                            <span class="menu-arrow"></span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="nav-third-level nav" aria-expanded="false">--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript: void(0);">Level 2.1</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript: void(0);">Level 2.2</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
