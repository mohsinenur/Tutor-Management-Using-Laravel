@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-1 mt-4">
        <div class="row">
            <!-- Blog Posts-->
            <div class="col-xl-4 col-lg-4 order-lg-2">
                <div class="widget-title">
                    <div class="text-left">Help & Info:</div>
                </div>
                <a class="list-group-item flex-column align-items-start" href="#">
                    <div class="d-flex w-100 justify-content-between">
                        <h5>1. How search work ?</h5>
                    </div>
                    <p>Select the district and other tution related parameter and click search to get your desired tutors.
                    </p>
                    <div class="d-flex w-100 justify-content-between">
                        <h5>2. If i dont get my desired tutor ?</h5>
                    </div>
                    <p>If you dont get your desired tutor then you can request for tutor by filling the form and fill the
                        your tutor details then the info will be published on the website</p>
                </a>


            </div>
            <!-- Sidebar          -->
            <div class="col-xl-8 col-lg-8 order-lg-1">
                <aside class="sidebar sidebar-offcanvas">
                    <!-- Widget Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">SEARCH TUTORS</h3>
                        <form name="search-tutor-form" method="get" action="{{ url('search-tutors-result') }}">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="district" class="form-control">
                                        <option value="">All Districts</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="area" class="form-control">
                                        <option value="">All Areas</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="medium" class="form-control">
                                        <option value="">Any Medium</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="class" class="form-control">
                                        <option value="">Any Class</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="subject" class="form-control">
                                        <option value="">All Subjects</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="gender" class="form-control">
                                        <option value="">Any Gender</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="salary_range" class="form-control">
                                        <option value="">Salary Range</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
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
