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
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Tangail">Tangail</option>
                                        <option value="Manikganj">Manikganj</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="area" class="form-control">
                                        <option value="">All Areas</option>
                                        <option value="Gulshan">Gulshan</option>
                                        <option value="Banani">Banani</option>
                                        <option value="Badda">Badda</option>
                                        <option value="Mirpur">Mirpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="medium" class="form-control">
                                        <option value="">Any Medium</option>
                                        <option value="English">English</option>
                                        <option value="Bangla">Bangla</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="class" class="form-control">
                                        <option value="">Any Class</option>
                                        <option value="One">One</option>
                                        <option value="Two">Two</option>
                                        <option value="Three">Three</option>
                                        <option value="Four">Four</option>
                                        <option value="Five">Five</option>
                                        <option value="Six">Six</option>
                                        <option value="Seven">Seven</option>
                                        <option value="Eight">Eight</option>
                                        <option value="Nine">Nine</option>
                                        <option value="Ten">Ten</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="subject" class="form-control">
                                        <option value="">All Subjects</option>
                                        <option value="Bangla">Bangla</option>
                                        <option value="English">English</option>
                                        <option value="Math">Math</option>
                                        <option value="Chamestry">Chamestry</option>
                                        <option value="ICT">ICT</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="gender" class="form-control">
                                        <option value="">Any Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
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
