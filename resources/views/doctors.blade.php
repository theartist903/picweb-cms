@extends('template.base')

@section('page_title')
    Doctors
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
                                                Data Table
                                            </h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary btn-rounded width-sm waves-effect waves-light float-right">Add Doctor</button>
                                        </div>
                                    </div>
                                    <br>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>Doctor Id</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Timing</th>
                                            <th>Speciality</th>
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($doctor as $doc)
                                        <tr>
                                            <td>{{$doc->id}}</td>
                                            <td>{{$doc->name}}</td>
                                            <td>{{$doc->title}}</td>
                                            <td>{{$doc->dept->name}}</td>
                                            <td>{{$doc->timing}}</td>
                                            <td>{{$doc->speciality}}</td>
                                            <td>
                                                <a href="{!! url('/edit-doctor/' . $doc->id) !!}"> <i class="fas fa-edit"></i> </a>
                                                <a href=""> <i class="fas fa-trash"></i> </a>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->

@endsection
