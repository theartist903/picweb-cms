@extends('template.base')
@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bg-picture card-box">
                                    <div class="profile-info-name">
                                        <img src="assets/images/profile.jpg"
                                                class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image">

                                        <div class="profile-info-detail overflow-hidden">
                                            <h4 class="m-0">Alexandra Clarkson</h4>
                                            <p class="text-muted"><i>Web Designer</i></p>
                                            <p class="font-13">Hi I'm Alexandra Clarkson,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature it over 2000 years to popular belief Ipsum is not simplyrandom text.</p>

                                            <ul class="social-list list-inline mt-3 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i
                                                            class="mdi mdi-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                            class="mdi mdi-google"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                            class="mdi mdi-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                                            class="mdi mdi-github"></i></a>
                                                </li>
                                            </ul>
        
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--/ meta -->



                                <form method="post" class="card-box">
                                    <span class="input-icon icon-right">
                                        <textarea rows="3" class="form-control" placeholder="Post a new message"></textarea>
                                    </span>
                                    <div class="pt-1 float-right">
                                        <a href="" class="btn btn-primary btn-sm waves-effect waves-light">Send</a>
                                    </div>
                                    <ul class="nav nav-pills profile-pills mt-1">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-location-arrow"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" fa fa-camera"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-smile"></i></a>
                                        </li>
                                    </ul>

                                </form>
                                <div class="card-box">
                                    <div class="media mb-2">
                                        <img src="assets/images/users/user-1.jpg" alt="" class="comment-avatar avatar-sm rounded mr-2">
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="#" class="text-dark">Adam Jansen</a><small class="ml-1 text-muted">about 2 minuts ago</small></h5>
                                            <p>Story based around the idea of time lapse, animation to post soon!</p>
                                            <div>
                                                <a href="">
                                                    <img src="assets/images/small/img-1.jpg" class="avatar-md rounded">
                                                </a>
                                                <a href="">
                                                    <img src="assets/images/small/img-2.jpg" class="avatar-md rounded">
                                                </a>
                                                <a href="">
                                                    <img src="assets/images/small/img-3.jpg" class="avatar-md rounded">
                                                </a>
                                            </div>
                                            <div class="comment-footer pt-2 mb-3">
                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                <a href="#">Reply</a>
                                            </div>
                                            
                                            <div class="media mb-2">
                                                <img src="assets/images/users/user-3.jpg" alt="" class="comment-avatar avatar-sm rounded mr-2">
                                                <div class="media-body">
                                                    <h5 class="mt-0"><a href="#" class="text-dark">John Smith</a><small class="ml-1 text-muted">about 1 hour ago</small></h5>
                                                    <p>Wow impressive!</p>

                                                    <div class="comment-footer">
                                                        <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                        <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="comment-avatar avatar-sm rounded mr-2">
                                                <div class="media-body">
                                                    <h5 class="mt-0"><a href="#" class="text-dark">Matt Cheuvront</a><small class="ml-1 text-muted">about 2 hour ago</small></h5>
                                                    <p>Wow, that is really nice.</p>

                                                    <div class="comment-footer mb-3">
                                                        <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                        <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                        <a href="#">Reply</a>
                                                    </div>

                                                    <div class="media mb-2">
                                                        <img src="assets/images/users/user-5.jpg" alt="" class="comment-avatar avatar-sm rounded mr-2">
                                                        <div class="media-body">
                                                            <h5 class="mt-0"><a href="#" class="text-dark">Stephanie Walter</a><small class="ml-1 text-muted">about 3 hour ago</small></h5>
                                                            <p>Nice work, makes me think of The Money Pit.</p>
        
                                                            <div class="comment-footer">
                                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  media -->

                                    <div class="media mb-3">
                                        <img src="assets/images/users/user-6.jpg" alt="" class="comment-avatar avatar-sm rounded mr-2">
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="#" class="text-dark">John Smith</a><small class="ml-1 text-muted">about 4 hour ago</small></h5>
                                            <p>i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>

                                            <div class="comment-footer">
                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media mb-3">
                                        <img src="assets/images/users/user-7.jpg" alt="" class="comment-avatar avatar-sm rounded mr-2">
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="#" class="text-dark">Nicolai Larson</a><small class="ml-1 text-muted">about 10 hour ago</small></h5>
                                            <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                            <div class="comment-footer">
                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <a href="" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4">
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

                                    <h4 class="header-title mt-0 mb-3">My Team Members</h4>

                                    <ul class="list-group mb-0 user-list">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-left mr-2">
                                                    <img src="assets/images/users/user-2.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">Michael Zenaty</h5>
                                                    <p class="desc text-muted mb-0 font-12">CEO</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-left mr-2">
                                                    <img src="assets/images/users/user-3.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">James Neon</h5>
                                                    <p class="desc text-muted mb-0 font-12">Web Designer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-left mr-2">
                                                    <img src="assets/images/users/user-5.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">John Smith</h5>
                                                    <p class="desc text-muted mb-0 font-12">Web Developer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-left mr-2">
                                                    <img src="assets/images/users/user-6.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">Michael Zenaty</h5>
                                                    <p class="desc text-muted mb-0 font-12">Programmer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-left mr-2">
                                                    <img src="assets/images/users/user-1.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">Mat Helme</h5>
                                                    <p class="desc text-muted mb-0 font-12">Manager</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

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

                                    <h4 class="header-title mt-0 mb-3"><i class="mdi mdi-notification-clear-all mr-1"></i> Upcoming Reminders</h4>

                                    <ul class="list-group mb-0 user-list">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-left mr-3">
                                                    <i class="mdi mdi-circle text-primary"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 24, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-left mr-3">
                                                    <i class="mdi mdi-circle text-success"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Project Discussion</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 25, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-left mr-3">
                                                    <i class="mdi mdi-circle text-pink"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 26, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-left mr-3">
                                                    <i class="mdi mdi-circle text-muted"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Project Discussion</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 27, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-left mr-3">
                                                    <i class="mdi mdi-circle text-danger"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 28, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
        </div>

@endsection
