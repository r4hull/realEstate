@extends('layouts.app')

@section('content')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Starter</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Set The Header Of Website</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        In this Section you can add the website user panel name, slogan, logo, and about detail here...
                                    </p>

                                    <form role="form">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Website Name<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" required="" parsley-type="email" class="form-control" id="inputEmail3" placeholder="Name...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Website Slogan<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input id="hori-pass1" type="text" placeholder="Slogan..." required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">Website Logo
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input data-parsley-equalto="#hori-pass1" type="file" required="" placeholder="Password" class="form-control" id="hori-pass2">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="webSite" class="col-4 col-form-label">Web Site<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="url" required="" parsley-type="url" class="form-control" id="webSite" placeholder="URL">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8 offset-4">
                                                <div class="checkbox checkbox-purple">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8 offset-4">
                                                <button type="submit" class="btn btn-gradient waves-effect waves-light">
                                                    Register
                                                </button>
                                                <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Set The Footer Of The Website</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>

                                    <form role="form">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Email<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="email" required="" parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-4 col-form-label">Password<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input id="hori-pass1" type="password" placeholder="Password" required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">Confirm Password
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input data-parsley-equalto="#hori-pass1" type="password" required="" placeholder="Password" class="form-control" id="hori-pass2">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="webSite" class="col-4 col-form-label">Web Site<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="url" required="" parsley-type="url" class="form-control" id="webSite" placeholder="URL">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8 offset-4">
                                                <div class="checkbox checkbox-purple">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8 offset-4">
                                                <button type="submit" class="btn btn-gradient waves-effect waves-light">
                                                    Register
                                                </button>
                                                <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div> <!-- end col -->
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>

@endsection
