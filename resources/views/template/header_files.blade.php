<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PIC-MTI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />



        <link href="{!!url('resources/libs/fullcalendar/fullcalendar.min.css')!!}" rel="stylesheet">
        <link href="{!!url('resources/libs/custombox/custombox.min.css')!!}" rel="stylesheet">
        <link href="{!!url('resources/libs/toastr/toastr.min.css')!!}" rel="stylesheet">
        <link href="{!!url('resources/libs/ion-rangeslider/ion.rangeSlider.css')!!}" rel="stylesheet">
        <link href="{!!url('resources/libs/sweetalert2/sweetalert2.min.css')!!}" rel="stylesheet" type="text/css" />
        <link href="{!!url('resources/libs/treeview/style.css')!!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet" />
        <link href="{!! url('resources/libs/switchery/switchery.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/multiselect/multi-select.css') !!}"  rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/select2/select2.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet" />
        <link href="{!! url('resources/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') !!}" rel="stylesheet">
        <link href="{!! url('resources/libs/bootstrap-color picker/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">
        <link href="{!! url('resources/libs/bootstrap-datepicker/bootstrap-datepicker.css') !!}" rel="stylesheet">
        <link href="{!! url('resources/libs/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">
        <link href="{!! url('resources/libs/dropify/dropify.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/quill/quill.core.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/quill/quill.bubble.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/quill/quill.snow.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('resources/libs/x-editable/bootstrap-editable.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!!url('resources/libs/rwd-table/rwd-table.min.css')!!}" rel="stylesheet" type="text/css" />
        <link href="{!!url('resources/libs/tablesaw/tablesaw.css')!!}" rel="stylesheet" type="text/css" />
        <link href="{!!url('resources/libs/chartist/chartist.min.css')!!}" rel="stylesheet" type="text/css" />

        <link href="{!!url('resources/css/bootstrap.min.css')!!}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        @yield('header_files')
        <link href="{!!url('resources/css/icons.min.css')!!}" rel="stylesheet" type="text/css" />
        <link href="{!!url('resources/css/app.min.css')!!}" id="app-stylesheet" rel="stylesheet" type="text/css" />



{{--        <script>--}}
{{--            // JS script for text field and file field swapping--}}
{{--            document.addEventListener("DOMContentLoaded", function () {--}}
{{--                // Get references to the form elements--}}
{{--                const radioButtons = document.getElementsByName("inputType");--}}
{{--                const textField = document.getElementById("textField");--}}
{{--                const fileField = document.getElementById("fileField");--}}

{{--                // Add event listeners to each radio button--}}
{{--                radioButtons.forEach(function (radio) {--}}
{{--                    radio.addEventListener("change", function () {--}}
{{--                        const selectedType = this.value;--}}

{{--                        // Hide both fields initially--}}
{{--                        textField.style.display = "none";--}}
{{--                        fileField.style.display = "none";--}}

{{--                        // Show the appropriate field based on the selected radio button--}}
{{--                        if (selectedType === "text") {--}}
{{--                            textField.style.display = "block"; // Show text input field--}}
{{--                        } else if (selectedType === "image") {--}}
{{--                            fileField.style.display = "block"; // Show file upload field--}}
{{--                        }--}}
{{--                    });--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Function to toggle visibility based on the selected type
                function toggleInputFields() {
                    const selectedType = document.querySelector('input[name="inputType"]:checked')?.value;

                    // Show or hide fields based on the selected type
                    if (selectedType === 'text') {
                        document.getElementById('textField').style.display = 'block';
                        document.getElementById('fileField').style.display = 'none';
                    } else if (selectedType === 'image') {
                        document.getElementById('textField').style.display = 'none';
                        document.getElementById('fileField').style.display = 'block';
                    } else {
                        // Hide both if no type is selected
                        document.getElementById('textField').style.display = 'none';
                        document.getElementById('fileField').style.display = 'none';
                    }
                }

                // Add event listeners to radio buttons
                document.querySelectorAll('input[name="inputType"]').forEach(function (radioButton) {
                    radioButton.addEventListener('change', toggleInputFields);
                });

                // Initialize visibility on page load based on the pre-selected value
                toggleInputFields();
            });

        </script>
    </head>

    <body>
