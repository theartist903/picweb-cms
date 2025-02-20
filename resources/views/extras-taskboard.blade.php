@extends('template.base')
@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box taskboard-box">
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

                                    <h4 class="header-title mt-0 mb-3 text-primary">Upcoming</h4>

                                    <ul class="sortable-list list-unstyled taskList" id="upcoming">
                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox2" value="option2"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-danger float-right">Urgent</span>
                                                    <h5 class="mt-0"><a href="" class="text-dark">Improve animation loader</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-2.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox3" value="option3"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-warning float-right">High</span>
                                                    <h5 class="mt-0"><a href=""  class="text-dark">Write a release note for Admin v1.5</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-3.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox4" value="option4"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <h5 class="mt-0"><a href="" class="text-dark">Invite user to a project</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-4.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox5" value="option2"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-danger float-right">Urgent</span>
                                                    <h5 class="mt-0"><a href="" class="text-dark">Code HTML email template for welcome email</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-5.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="text-center pt-2">
                                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light"
                                            data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                                            <i class="mdi mdi-plus"></i> Add New
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->


                            <div class="col-xl-4">
                                <div class="card-box taskboard-box">
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

                                    <h4 class="header-title mt-0 mb-3 text-warning">In Progress</h4>

                                    <ul class="sortable-list list-unstyled taskList" id="inprogress">
                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox6" value="option6"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-danger float-right">Urgent</span>
                                                    <h5 class="mt-0"><a href="" class="text-dark">File Uploads on cards</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-6.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox7" value="option7"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-warning float-right">High</span>
                                                    <h5 class="mt-0"><a href="" class="text-dark">Enable analytics tracking</a> </h4>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-7.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox8" value="option8"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <h5 class="mt-0"><a href="" class="text-dark">Improve animation loader</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-8.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="text-center pt-2">
                                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light"
                                            data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                                            <i class="mdi mdi-plus"></i> Add New
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->


                            <div class="col-xl-4">
                                <div class="card-box taskboard-box">
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

                                    <h4 class="header-title mt-0 mb-3 text-success">Complete</h4>

                                    <ul class="sortable-list list-unstyled taskList" id="completed">
                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox10" value="option10"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-danger float-right">Urgent</span>
                                                    <h5 class="mt-0"><a href="" class="text-dark">Improve animation loader</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-9.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox11" value="option11"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-warning float-right">High</span>
                                                    <h5><a href="" class="text-dark">Write a release note for Admin v1.5</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-1.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single float-left">
                                                        <input type="checkbox" id="singleCheckbox12" value="option12"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <h5 class="mt-0"><a href="" class="text-dark">Invite user to a project</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-2.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="kanban-box">
                                                <div class="checkbox-wrapper float-left">
                                                    <div class="checkbox checkbox-success checkbox-single">
                                                        <input type="checkbox" id="singleCheckbox13" value="option13"
                                                                aria-label="Single checkbox Two">
                                                        <label></label>
                                                    </div>
                                                </div>

                                                <div class="kanban-detail">
                                                    <span class="badge badge-danger float-right">Urgent</span>
                                                    <h5 class="mt-0"><a href="" class="text-dark">Code HTML email template for welcome email</a> </h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="Username">
                                                                <img src="assets/images/users/user-3.jpg" alt="img"
                                                                        class="avatar-sm rounded-circle">
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="5 Tasks">
                                                                <i class="mdi mdi-format-align-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                                title="" data-original-title="3 Comments">
                                                                <i class="mdi mdi-comment-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="text-center pt-2">
                                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light"
                                            data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                                            <i class="mdi mdi-plus"></i> Add New
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->


                        </div>
                        <!-- end row -->        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
            <!-- Modal -->
            <div id="custom-modal" class="modal-demo">
                <button type="button" class="close" onclick="Custombox.modal.close();">
                    <span>&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="custom-modal-title">Add New</h4>
                <div class="custom-modal-text text-left">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Task Name</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="assign">Assign to</label>
                                    <input type="text" class="form-control" id="assign" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="priority">Priority</label>
                                    <input type="text" class="form-control" id="priority" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Sdate">Start Date</label>
                                    <input type="text" class="form-control" id="Sdate" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Ddate">Due Date</label>
                                    <input type="text" class="form-control" id="Ddate" placeholder="">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success waves-effect waves-light mr-1">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
