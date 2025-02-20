<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PIC-MTI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap Css -->
        <link href="{!!url('resources/css/bootstrap.min.css')!!}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{!!url('resources/css/icons.min.css')!!}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{!!url('resources/css/app.min.css')!!}" id="app-stylesheet" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="#" class="logo">
                                <img src="resources/images/logo-light.png" alt="" height="22" class="logo-light mx-auto">
                               <img src="resources/images/logo-dark.png" alt="" height="22" class="logo-dark mx-auto">
                            </a>
                            <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0 mb-4">Welcome Back</h4>
                                    <img src="assets/images/users/user-1.jpg" width="88" alt="user-image" class="rounded-circle img-thumbnail">
                                    <p class="text-muted my-4">Enter your password to access the admin.</p>

                                </div>

                                <form action="#">

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>
    
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Not you? return <a href="pages-login.html" class="text-dark ml-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    
        <!-- Vendor js -->
        <script src="{!!url('resources/js/vendor.min.js')!!}"></script>

        <!-- App js -->
        <script src="{!!url('resources/js/app.min.js')!!}"></script>
         
    </body>
</html>