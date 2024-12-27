@extends('template.base')

@section('page_title')
    Add Consultant
@endsection

@section('main_section')

    <div id="wrapper">
        <div class="content-page">
            <div class="content">

                <form>
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- Form row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-box">
                                <input type="file" class="dropify" data-height="500" />
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-box">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="designation" class="col-form-label">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="title" placeholder="Designation">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="timing" class="col-form-label">Timing</label>
                                            <input type="text" class="form-control" id="timing" name="timing" placeholder="Timing">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="department" class="col-form-label">Department</label>
                                            <select id="department" class="form-control" name="Department">
{{--                                                @foreach($department as $dept)--}}
{{--                                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>--}}
                                                <option>Choose</option>
{{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="speciality" class="col-form-label">Speciality</label>
                                            <input type="text" class="form-control" id="speciality" placeholder="Speciality">
                                        </div>
                                    </div>

                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label for="profile" class="col-form-label">Consultant Profile</label>
                                        {{--Snow Editor --}}
                                        <div id="snow-editor" style="height: 200px;"></div>
                                        <!-- end Snow-editor-->
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->

            </div> <!-- content -->
        </div>
    </div>

@endsection
