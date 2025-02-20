@extends('template.base')
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

                                <h4 class="header-title mt-0 mb-3">Basic Form</h4>

                                <form action="#" data-parsley-validate novalidate>
                                    <div class="form-group">
                                        <label for="userName">User Name*</label>
                                        <input type="text" name="nick" parsley-trigger="change" required
                                                placeholder="Enter user name" class="form-control" id="userName">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Email address*</label>
                                        <input type="email" name="email" parsley-trigger="change" required
                                                placeholder="Enter email" class="form-control" id="emailAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Password*</label>
                                        <input id="pass1" type="password" placeholder="Password" required
                                                class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="passWord2">Confirm Password *</label>
                                        <input data-parsley-equalto="#pass1" type="password" required
                                                placeholder="Password" class="form-control" id="passWord2">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="remember-1" type="checkbox">
                                            <label for="remember-1"> Remember me </label>
                                        </div>
                                    </div>

                                    <div class="form-group text-right mb-0">
                                        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                            Cancel
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div><!-- end col -->

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

                                <h4 class="header-title mt-0 mb-3">Horizontal Form</h4>

                                <form class="form-horizontal" role="form" data-parsley-validate novalidate>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Email*</label>
                                        <div class="col-sm-7">
                                            <input type="email" required parsley-type="email" class="form-control"
                                                    id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hori-pass1" class="col-sm-4 col-form-label">Password*</label>
                                        <div class="col-sm-7">
                                            <input id="hori-pass1" type="password" placeholder="Password" required
                                                    class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hori-pass2" class="col-sm-4 col-form-label">Confirm Password
                                            *</label>
                                        <div class="col-sm-7">
                                            <input data-parsley-equalto="#hori-pass1" type="password" required
                                                    placeholder="Password" class="form-control" id="hori-pass2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="webSite" class="col-sm-4 col-form-label">Web Site*</label>
                                        <div class="col-sm-7">
                                            <input type="url" required parsley-type="url" class="form-control"
                                                    id="webSite" placeholder="URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-4 col-sm-8">
                                            <div class="checkbox">
                                                <input id="remember-2" type="checkbox">
                                                <label for="remember-2"> Remember me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                Registrer
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-secondary waves-effect waves-light">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-sm-12">
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

                                <h4 class="header-title mt-0 mb-3">Fields validation</h4>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <h5>Validation type</h5>
                                        <p class="text-muted font-13 mb-3">
                                            Your awesome text goes here.
                                        </p>

                                        <form class="form-horizontal group-border-dashed" action="#">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Required</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            placeholder="Type something"/>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Equal To</label>
                                                <div class="col-sm-3">
                                                    <input type="password" id="pass2" class="form-control" required
                                                            placeholder="Password"/>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="password" class="form-control" required
                                                            data-parsley-equalto="#pass2"
                                                            placeholder="Re-Type Password"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">E-Mail</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" required
                                                            parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">URL</label>
                                                <div class="col-sm-6">
                                                    <input parsley-type="url" type="url" class="form-control"
                                                            required placeholder="URL"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Digits</label>
                                                <div class="col-sm-6">
                                                    <input data-parsley-type="digits" type="text"
                                                            class="form-control" required
                                                            placeholder="Enter only digits"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Number</label>
                                                <div class="col-sm-6">
                                                    <input data-parsley-type="number" type="text"
                                                            class="form-control" required
                                                            placeholder="Enter only numbers"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Alphanumeric</label>
                                                <div class="col-sm-6">
                                                    <input data-parsley-type="alphanum" type="text"
                                                            class="form-control" required
                                                            placeholder="Enter alphanumeric value"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Textarea</label>
                                                <div class="col-sm-6">
                                                    <textarea required class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-3 col-sm-9 mt-2">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- end col -->

                                    <div class="col-xl-6">
                                        <h5>Range validation</h5>
                                        <p class="text-muted font-13 mb-3">
                                            Your awesome text goes here.
                                        </p>

                                        <form class="form-horizontal group-border-dashed" action="#">

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Min Length</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Max Length</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Range Length</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            data-parsley-length="[5,10]"
                                                            placeholder="Text between 5 - 10 chars length"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Min Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            data-parsley-min="6" placeholder="Min value is 6"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Max Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            data-parsley-max="6" placeholder="Max value is 6"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Range Value</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" required type="text range" min="6"
                                                            max="100" placeholder="Number between 6 - 100"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Regular Exp</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" required
                                                            data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                            placeholder="Hex. Color"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Min check</label>
                                                <div class="col-sm-6">
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox1" type="checkbox"
                                                                data-parsley-multiple="groups"
                                                                data-parsley-mincheck="2">
                                                        <label for="checkbox1"> And this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox2" type="checkbox"
                                                                data-parsley-multiple="groups"
                                                                data-parsley-mincheck="2">
                                                        <label for="checkbox2"> Can't check this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox3" type="checkbox"
                                                                data-parsley-multiple="groups"
                                                                data-parsley-mincheck="2" required>
                                                        <label for="checkbox3"> This too </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Max check</label>
                                                <div class="col-sm-6">
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox4" type="checkbox"
                                                                data-parsley-multiple="group1">
                                                        <label for="checkbox4"> And this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox5" type="checkbox"
                                                                data-parsley-multiple="group1">
                                                        <label for="checkbox5"> Can't check this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox6" type="checkbox"
                                                                data-parsley-multiple="group1"
                                                                data-parsley-maxcheck="1">
                                                        <label for="checkbox6"> This too </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="offset-sm-3 col-sm-9">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- end col -->
                                </div><!-- end row -->
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
    <script src="{!!url('resources/libs/parsleyjs/parsley.min.js')!!}"></script>
    <script src="{!! url('resources/js/pages/form-validation.init.js') !!}"></script>
@endsection
