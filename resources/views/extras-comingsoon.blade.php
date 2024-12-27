<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PIC-CMS</title>
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
        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="text-center">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo-light.png" alt="" height="22" class="logo-light mx-auto">
                               <img src="assets/images/logo-dark.png" alt="" height="22" class="logo-dark mx-auto">
                            </a>

                            <h3 class="mt-4">Stay tunned, we're launching very soon</h3>
                            <p class="text-muted">We're making the system more awesome.</p>

                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <div data-countdown="2021/01/17" class="counter-number"></div>
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div>
        </div>

         <!-- Vendor js -->
        <script src="{!!url('resources/js/vendor.min.js')!!}"></script>

        <!-- App js -->
        <script src="{!!url('resources/js/app.min.js')!!}"></script>
        
        
        <!-- Plugins js-->
        <script src="{!!url('resources/libs/jquery-countdown/jquery.countdown.min.js')!!}"></script>

        <!-- countdown init -->
        <script src="{!!url('resources/js/pages/countdown.init.js')!!}"></script>

        
    </body>
</html>