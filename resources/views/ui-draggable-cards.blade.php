@extends('template.base')
@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="sortable">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="card card-draggable">
                                        <img class="card-img-top img-fluid" src="{!! url('resources/images/gallery/1.jpg') !!}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                    <div class="card card-draggable text-white bg-primary">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="card card-draggable">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card card-draggable">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                    <div class="card card-draggable">
                                        <img class="card-img-top img-fluid" src="{!! url('resources/images/gallery/3.jpg') !!}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                    <div class="card card-draggable">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="card card-draggable">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>


                                    <div class="card card-draggable">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>


                                    <div class="card card-draggable">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                        </div>
                                    </div>

                                    <div class="card text-white bg-danger card-draggable">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>

                                </div>

                            </div><!-- Row -->
                        </div><!-- Sortable -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>
        </div>

@endsection

@section('footer_files')
    <script src="{!!url('resources/js/pages/draggable.init.js')!!}"></script>
@endsection
