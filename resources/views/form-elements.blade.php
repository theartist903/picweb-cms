@extends('template.base')
@section('main_section')

        <div id="wrapper">
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Input Types</h4>
                                    <p class="sub-header">
                                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Text</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="simpleinput" class="form-control" value="Some text value...">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-email">Email</label>
                                                        <div class="col-md-10">
                                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-password">Password</label>
                                                        <div class="col-md-10">
                                                            <input type="password" id="example-password" class="form-control" value="password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-placeholder">Placeholder</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="example-placeholder" class="form-control" placeholder="placeholder">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Text area</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Readonly</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" readonly="" value="Readonly value">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Disabled</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" disabled="" value="Disabled value">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-static">Static control</label>
                                                        <div class="col-md-10">
                                                            <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-helping">Helping text</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                            <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Input Select</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                            <h6>Multiple select</h6>
                                                            <select multiple class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-fileinput">Default file input</label>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" id="example-fileinput">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-date">Date</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" id="example-date" type="date" name="date">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-month">Month</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" id="example-month" type="month" name="month">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-time">Time</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="time" name="time" id="example-time">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-week">Week</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="week" name="week" id="example-week">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-number">Number</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="number" name="number" id="example-number">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">URL</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="url" name="url">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Search</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="search" name="search">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Tel</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="tel" name="tel">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-color">Color</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="color" name="color" value="#71b6f9" id="example-color">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <label class="col-md-2 col-form-label" for="example-range">Range</label>
                                                        <div class="col-md-10 align-self-center">
                                                            <input class="custom-range" type="range" name="range" min="0" max="10" id="example-range">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="mt-0 header-title">Select menu</h4>
                                            <p class="text-muted font-14">
                                                Custom <code class="highlighter-rouge">&lt;select&gt;</code> menus need only a custom class, <code class="highlighter-rouge">.custom-select</code> to trigger the custom styles.
                                            </p>

                                            <select class="custom-select mt-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>

                                            <h4 class="header-title mt-5">Switches</h4>
                                            <p class="text-muted">
                                                A switch has the markup of a custom checkbox but uses the <code>.custom-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.
                                            </p>

                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                            </div>
                                            <div class="custom-control custom-switch mt-1">
                                                <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <h4 class="header-title">Checkboxes and radios</h4>
                                            <div class="mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Input Sizes & Group</h4>
                                    <p class="text-muted mb-3 font-14">
                                        Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                    </p>

                                    <div class="p-2">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-input-small">Small</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-input-normal">Normal</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-input-large">Large</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Grid Sizes</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Static</label>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Dropdowns</label>
                                                <div class="col-md-10">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <label class="col-md-2 col-form-label">Buttons</label>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-dark waves-effect waves-light" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mt-0 mb-3 header-title">Basic Example</h4>

                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mt-0 mb-3 header-title">Horizontal form</h4>

                                    <form class="form-horizontal" role="form">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword5" class="col-sm-3 col-form-label">Re Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end">
                                            <div class=" col-sm-9">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2">
                                                        Check me out !
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 justify-content-end row">
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Inline Form</h4>
                                    <p class="text-muted mb-3 font-13">
                                        Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>)
                                        for left-aligned and inline-block controls. <strong>This only applies to forms within viewports
                                            that are at least 768px wide.</strong>
                                    </p>
                                    <div class="row m-b-30">
                                        <div class="col-sm-12">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <label for="staticEmail2" class="sr-only">Email</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                </div>
                                                <div class="form-group mx-sm-3">
                                                    <label for="inputPassword2" class="sr-only">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Confirm identity</button>
                                            </form>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <h6 class="font-13 mt-4">Auto-sizing</h6>

                                            <form>
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="mt-2">
                                                            <label class="sr-only" for="inlineFormInput">Name</label>
                                                            <input type="text" class="form-control" id="inlineFormInput" placeholder="Jane Doe">
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="mt-2">
                                                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="mt-2">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                                                <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="mt-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- Form row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Form row</h4>
                                    <p class="text-muted mb-3 font-13">
                                        You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                    </p>

                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2" class="col-form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="col-form-label">State</label>
                                                <select id="inputState" class="form-control">
                                                    <option>Choose</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip" class="col-form-label">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkmeout">
                                                <label class="custom-control-label" for="checkmeout">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
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
