@extends('template.base')
@section('main_section')


        <!-- Begin page -->
        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light mb-3"><i class="mdi mdi-plus"></i> Create Project</button>
                            </div>
                            <div class="col-sm-8">
                                <div class="project-sort float-right">
                                    <div class="project-sort-item">
                                        <form class="form-inline">
                                            <div class="form-group mr-2">
                                                <label>Phase :</label>
                                                <select class="form-control ml-2 form-control-sm">
                                                    <option>All Projects(6)</option>
                                                    <option>Complated</option>
                                                    <option>Progress</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sort :</label>
                                                <select class="form-control ml-2 form-control-sm">
                                                    <option>Date</option>
                                                    <option>Name</option>
                                                    <option>End date</option>
                                                    <option>Start Date</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box project-box">
                                    <div class="badge badge-success float-right">Completed</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">New Admin Design</a></h4>
                                    <p class="text-success text-uppercase font-13">Web Design</p>
                                    <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...<a href="#" class="text-primary">View more</a>
                                    </p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-4">
                                            <h4 class="mb-0">56</h4>
                                            <p class="text-muted">Questions</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">452</h4>
                                            <p class="text-muted">Comments</p>
                                        </li>
                                    </ul>

                                    <div class="project-members mb-2">
                                        <h5 class="float-left mr-3">Team :</h5>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                <img src="assets/images/users/user-3.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>

                                        </div>
                                    </div>

                                    <h5>Progress <span class="text-success float-right">80%</span></h5>
                                    <div class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success progress-animated wow animated animated"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%; visibility: visible; animation-name: animationProgress;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box project-box">
                                    <div class="badge badge-primary float-right">Completed</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">App Design and Develop</a></h4>
                                    <p class="text-primary text-uppercase font-13">Android</p>
                                    <p class="text-muted font-13">New common language will be more simple and regular than the existing European languages...<a href="#" class="text-primary">View more</a>
                                    </p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-4">
                                            <h4 class="mb-0">77</h4>
                                            <p class="text-muted">Questions</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">875</h4>
                                            <p class="text-muted">Comments</p>
                                        </li>
                                    </ul>

                                    <div class="project-members mb-2">
                                        <h5 class="float-left mr-3">Team :</h5>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>

                                        </div>
                                    </div>

                                    <h5>Progress <span class="text-primary float-right">45%</span></h5>
                                    <div class="progress progress-bar-alt-primary progress-sm">
                                        <div class="progress-bar bg-primary progress-animated wow animated animated"
                                                role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 45%;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box project-box">
                                    <div class="badge badge-pink float-right">Completed</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">Landing page Design</a></h4>
                                    <p class="text-pink text-uppercase font-13">Web Design</p>
                                    <p class="text-muted font-13">It will be as simple as occidental in fact it will be to an english person it will seem like simplified English...<a href="#" class="text-primary">view more</a>
                                    </p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-4">
                                            <h4 class="mb-0">87</h4>
                                            <p class="text-muted">Questions</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">125</h4>
                                            <p class="text-muted">Comments</p>
                                        </li>
                                    </ul>

                                    <div class="project-members mb-2">
                                        <h5 class="float-left mr-3">Team :</h5>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                <img src="assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-11.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Joel Heffner">
                                                <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
                                        </div>
                                    </div>
                                    

                                    <h5>Progress <span class="text-pink float-right">68%</span></h5>
                                    <div class="progress progress-bar-alt-pink progress-sm">
                                        <div class="progress-bar bg-pink progress-animated wow animated animated"
                                                role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 68%;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card-box project-box">
                                    <div class="badge badge-purple float-right">Completed</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">App Design and Develop</a></h4>
                                    <p class="text-purple text-uppercase font-13">Android</p>
                                    <p class="text-muted font-13">Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators...<a href="#" class="text-primary">view more</a>
                                    </p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-4">
                                            <h4 class="mb-0">77</h4>
                                            <p class="text-muted">Questions</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">875</h4>
                                            <p class="text-muted">Comments</p>
                                        </li>
                                    </ul>

                                    <div class="project-members mb-2">
                                        <h5 class="float-left mr-3">Team :</h5>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                <img src="assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-11.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Joel Heffner">
                                                <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
                                        </div>
                                    </div>

                                    <h5>Progress <span class="text-purple float-right">45%</span></h5>
                                    <div class="progress progress-bar-alt-purple progress-sm">
                                        <div class="progress-bar bg-purple progress-animated wow animated animated"
                                                role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 45%;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box project-box">
                                    <div class="badge badge-danger float-right">Completed</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">Landing page Design</a></h4>
                                    <p class="text-danger text-uppercase font-13">Web Design</p>
                                    <p class="text-muted font-13">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium deleniti...<a href="#" class="text-primary">view more</a>
                                    </p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-4">
                                            <h4 class="mb-0">87</h4>
                                            <p class="text-muted">Questions</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">125</h4>
                                            <p class="text-muted">Comments</p>
                                        </li>
                                    </ul>

                                    <div class="project-members mb-2">
                                        <h5 class="float-left mr-3">Team :</h5>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>

                                        </div>
                                    </div>

                                    <h5>Progress <span class="text-danger float-right">68%</span></h5>
                                    <div class="progress progress-bar-alt-danger progress-sm">
                                        <div class="progress-bar bg-danger progress-animated wow animated animated"
                                                role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 68%;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box project-box">
                                    <div class="badge badge-warning float-right">Completed</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">New Admin Design</a></h4>
                                    <p class="text-warning text-uppercase font-13">Web Design</p>
                                    <p class="text-muted font-13">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary....<a href="#" class="text-primary">view more</a>
                                    </p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-4">
                                            <h4 class="mb-0">56</h4>
                                            <p class="text-muted">Questions</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">452</h4>
                                            <p class="text-muted">Comments</p>
                                        </li>
                                    </ul>

                                    <div class="project-members mb-2">
                                        <h5 class="float-left mr-3">Team :</h5>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>
    
                                            <a href="#" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                <img src="assets/images/users/user-3.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                            </a>

                                        </div>
                                    </div>

                                    <h5>Progress <span class="text-warning float-right">80%</span></h5>
                                    <div class="progress progress-bar-alt-warning progress-sm">
                                        <div class="progress-bar bg-warning progress-animated wow animated animated"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
        </div>
        <!-- END wrapper -->
@endsection