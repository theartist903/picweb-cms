@extends('template.base')

@section('page_title')
    General Settings
@endsection

@section('header_files')
    <link href="{!!url('resources/libs/datatables/dataTables.bootstrap4.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!!url('resources/libs/datatables/responsive.bootstrap4.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!!url('resources/libs/datatables/buttons.bootstrap4.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!!url('resources/libs/datatables/select.bootstrap4.css')!!}" rel="stylesheet" type="text/css" />
@endsection

@section('main_section')
        <div id="wrapper">
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h4 class="mt-0 header-title">
{{--                                                Data Table--}}
                                            </h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary btn-rounded width-sm waves-effect waves-light float-right" data-toggle="modal" data-target="#myModal">Add Item</button>
                                        </div>
                                    </div>
                                    <br>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Key Name</th>
                                            <th>Page</th>
                                            <th>Type</th>
                                            <th>Value</th>
                                            <th>Old Value</th>
                                            <th>Created_at</th>
                                            <th>Action</th>
                                            <th>Updated_at</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($setting as $id => $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->key_name}}</td>
                                            <td>{{$value->page}}</td>
                                            <td>{{$value->type}}</td>
                                            <td>{{$value->val}}</td>
                                            <td>{{$value->old_value}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td>
                                                <button type="button" value="{{$value->id}}" class="editbtn text-primary" style="background: none; border: none; font-size: x-large; line-height: 10px;">
                                                    <i class="fas fa-edit"></i>
                                                </button>

{{--                                                <a href="{{ url('general/edit-item/$value->id') }}" class="editbtn">--}}
{{--                                                    <i class="fas fa-edit"></i>--}}
{{--                                                </a>--}}

                                            </td>

                                            <td>{{$value->updated_at}}</td>

                                        </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <!-- Add modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Add Item</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('create')}}" enctype="multipart/form-data" data-parsley-validate novalidate METHOD="POST">
                                            @csrf

                                            <div class="form-inline">
                                                    <label>Type</label>
                                                    <div class="custom-control custom-radio ml-4">
                                                        <input type="radio" id="text" name="inputType" class="custom-control-input" value="text">
                                                        <label class="custom-control-label" for="text">Text</label>
                                                    </div>
                                                    <div class="custom-control custom-radio ml-4">
                                                        <input type="radio" id="image" name="inputType" class="custom-control-input"  value="image">
                                                        <label class="custom-control-label" for="image">Image</label>
                                                    </div>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="keyName">Key Name</label>
                                                <input type="text" name="key" parsley-trigger="change" required placeholder="Enter Key Name" class="form-control" id="keyName">
                                            </div>

                                            <div class="form-group" id="textField" style="display: none;">
                                                <label for="val">Value</label>
                                                <input type="text" name="value" parsley-trigger="change"  required placeholder="Enter Value" class="form-control" id="val">
                                            </div>

                                            <div class="form-group" id="fileField" style="display: none;">
                                                <label for="fileInput">Upload Image</label>
                                                <input type="file" name="value" parsley-trigger="change" class="form-control" id="fileInput">
                                            </div>

                                            <div class="form-group">
                                                <label for="pg">Page</label>
                                                <input type="text" name="page" parsley-trigger="change"  required placeholder="Enter Value" class="form-control" id="pg">
                                            </div>
                                            <div class="form-group">
                                                <label for="old_val">Old Value</label>
                                                <input type="text" name="old_value" parsley-trigger="change"  required placeholder="Enter Value" class="form-control" id="old_val">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>

                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                        <!-- Edit modal content -->
                        <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Update Item</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('update-item') }}" data-parsley-validate novalidate method="POST">
                                            @csrf
                                            @method("put")
                                            <input type="hidden" id="id" name="id">

                                            <div class="form-inline">
                                                <label>Type</label>
                                                <div class="custom-control custom-radio ml-4">
                                                    <input type="radio" id="text" name="inputType" class="custom-control-input" value="text">
                                                    <label class="custom-control-label" for="text">Text</label>
                                                </div>
                                                <div class="custom-control custom-radio ml-4">
                                                    <input type="radio" id="image" name="inputType" class="custom-control-input" value="image">
                                                    <label class="custom-control-label" for="image">Image</label>
                                                </div>

                                            </div>
                                            <p></p>
                                            <div class="form-group">
                                                <label for="key">Key Name</label>
                                                <input type="text" name="key" id="key" parsley-trigger="change"  class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="value">Value</label>
                                                <input type="text" name="value" id="value" parsley-trigger="change"   class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="page">Page</label>
                                                <input type="text" name="page" id="page" parsley-trigger="change"   class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="old_value">Old Value</label>
                                                <input type="text" name="old_value" id="old_value" parsley-trigger="change"  class="form-control" >
                                            </div>
{{--                                            <div class="form-group">--}}
{{--                                                <label for="created_at">Created_at</label>--}}
{{--                                                <input type="text" name="created_at" parsley-trigger="change"  disabled class="form-control" id="created_at">--}}
{{--                                            </div>--}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                    </div>

                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
        </div>



@endsection

@section('footer_files')

    <script>

        $(document).ready(function () {
            $(document).on('click', '.editbtn', function () {
                var id = $(this).val(); // Get the ID from the button value
                $('#editModal').modal('show'); // Show the modal


                $.ajax({
                    type: "GET",
                    url: "{{ url('general/edit-item') }}/" + id, // Construct URL
                    success: function (response) {
                        if (response.status === 200) {
                            // Populate the form fields in the modal with the response data
                            $('#id').val(response.item.id);
                            $('#key').val(response.item.key_name);
                            $('#value').val(response.item.val);
                            $('#page').val(response.item.page);
                            $('#old_value').val(response.item.old_value);

                            // Handle radio button selection
                            $('input[name="inputType"]').prop('checked', false); // Reset radio buttons
                            $(`input[name="inputType"][value="${response.item.type}"]`).prop('checked', true);
                        } else {
                            console.error("Item not found");
                        }
                    },
                    error: function (xhr) {
                        console.error("Error fetching item:", xhr.responseText);
                    }
                });

            });
        });



    </script>


    <script src="{!!url('resources/libs/datatables/jquery.dataTables.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/dataTables.bootstrap4.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/dataTables.responsive.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/responsive.bootstrap4.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/dataTables.buttons.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/buttons.bootstrap4.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/buttons.html5.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/buttons.flash.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/buttons.print.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/dataTables.keyTable.min.js')!!}"></script>
    <script src="{!!url('resources/libs/datatables/dataTables.select.min.js')!!}"></script>
    <script src="{!!url('resources/libs/pdfmake/pdfmake.min.js')!!}"></script>
    <script src="{!!url('resources/libs/pdfmake/vfs_fonts.js')!!}"></script>

    <script src="{!! url('resources/js/pages/datatables.init.js') !!}"></script>

@endsection

