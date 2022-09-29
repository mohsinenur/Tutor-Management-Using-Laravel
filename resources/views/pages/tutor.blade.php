@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-1 mt-4">
        <div class="row">
            <!-- Blog Posts-->
            <div class="col-xl-4 col-lg-4 order-lg-2">
                <div class="widget-title">
                    <div class="text-left">Available Tuitions (1)</div>
                </div>


            </div>
            <!-- Sidebar          -->
            <div class="col-xl-8 col-lg-8 order-lg-1">
                <aside class="sidebar sidebar-offcanvas">
                    <!-- Widget Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">SEARCH TUTORS</h3>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">All Districts</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">All Areas</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">Any Medium</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">Any Class</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">All Subjects</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <button class="btn btn-primary" type="submit">Search Tutor</button>
                                </div>
                            </div>
                        </form>
                    </section>

                </aside>
            </div>
        </div>

    @stop
