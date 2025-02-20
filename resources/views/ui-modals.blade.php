@extends('template.base')
@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- Bootstrap Modals -->
                        <div class="row">
                            <div class="col-md-12">
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

                                    <h4 class="header-title mt-0">Bootstrap Modals (default)</h4>

                                    <p class="text-muted font-13">
                                        A rendered modal with header, body, and set of actions in the footer.
                                    </p>

                                    <!-- sample modal content -->
                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Text in a modal</h4>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h4>Overflowing text to show scroll behavior</h4>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  Modal content for the above example -->
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!-- Long Content Scroll Modal -->
                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalScrollableTitle">Modal title</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="button-list">
                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                        <!-- Extra large modal -->
                                        <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl">Extra Large modal</button>
                                        <!-- Large modal -->
                                        <button class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <!-- Small modal -->
                                        <button class="btn btn-purple waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                        <!-- center modal -->
                                        <button class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Center modal</button>
                                        <!-- Long Content Scroll -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable">Scrollable</button>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#staticBackdrop">
                                            Static backdrop
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-md-12">
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

                                    <h4 class="header-title mt-0">Modals Examples (Animations)</h4>

                                    <p class="text-muted font-13">Use <code>data-animation="fadein" data-plugin="custommodal" data-overlayColor="#xxx"</code>. </p>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered mb-0">
                                            <thead class="bg-light border-0">
                                                <tr>
                                                    <th style="width:30%;">Modal Type</th>
                                                    <th>Animation Code</th>
                                                    <th>Example</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fade in</td>
                                                    <td><code>data-animation="fadein"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slide</td>
                                                    <td><code>data-animation="slide"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="slide" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Newspaper</td>
                                                    <td><code>data-animation="newspaper"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="newspaper" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fall</td>
                                                    <td><code>data-animation="fall"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="fall" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Side Fall</td>
                                                    <td><code>data-animation="sidefall"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="sidefall" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Blur</td>
                                                    <td><code>data-animation="blur"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="blur" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flip</td>
                                                    <td><code>data-animation="flip"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="flip" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sign</td>
                                                    <td><code>data-animation="sign"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="sign" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Super Scaled</td>
                                                    <td><code>data-animation="superscaled"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="superscaled" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slit</td>
                                                    <td><code>data-animation="slit"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="slit" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rotate</td>
                                                    <td><code>data-animation="rotate"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="rotate" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Letmein</td>
                                                    <td><code>data-animation="letmein"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="letmein" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Makeway</td>
                                                    <td><code>data-animation="makeway"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="makeway" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slip</td>
                                                    <td><code>data-animation="slip"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="slip" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Corner</td>
                                                    <td><code>data-animation="corner"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="corner" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slide together</td>
                                                    <td><code>data-animation="slidetogether"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="slidetogether" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Scale</td>
                                                    <td><code>data-animation="scale"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="scale" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Door</td>
                                                    <td><code>data-animation="door"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="door" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Push</td>
                                                    <td><code>data-animation="push"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="push" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Content Scale</td>
                                                    <td><code>data-animation="contentscale"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="contentscale" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Swell</td>
                                                    <td><code>data-animation="swell"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="swell" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rotate Down</td>
                                                    <td><code>data-animation="rotatedown"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="rotatedown" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flash</td>
                                                    <td><code>data-animation="flash"</code></td>
                                                    <td>
                                                        <a href="#custom-modal" class="btn btn-primary btn-sm waves-effect" data-animation="flash" data-plugin="custommodal" data-overlayColor="#36404a">Show me</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->

                                </div>
                                <!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- End row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Modal -->
                <div id="custom-modal" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.modal.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title">Modal title</h4>
                    <div class="custom-modal-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>

        </div>

@endsection

@section('footer_files')
    <script src="{!!url('resources/libs/custombox/custombox.min.js')!!}"></script>
@endsection
