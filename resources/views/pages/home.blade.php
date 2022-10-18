@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-1 mt-4">
        <div class="row">
            <!-- Blog Posts-->
            <div class="col-xl-6 col-lg-6 order-lg-2">
                <div class="widget-title">
                    <div class="text-left">Available Tuitions ({{ $count }})</div>
                </div>

                <div class="card mb-30">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Tuition ID #</td>
                                    <td>9242022101933</td>
                                </tr>
                                <tr>
                                    <td>Class/ Subject:</td>
                                    <td>Class IX , All Subject</td>
                                </tr>
                                <tr>
                                    <td>Location:</td>
                                    <td>DHAKA, Basundhara Residential </td>
                                </tr>
                                <tr>
                                    <td>Days:</td>
                                    <td>4 days/week</td>
                                </tr>
                                <tr>
                                    <td>Salary Range:</td>
                                    <td>5500-6500 tk/month</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right"> Posted on: 24 Sep, 2022 10:19 PM </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar          -->
            <div class="col-xl-6 col-lg-6 order-lg-1">
                <aside class="sidebar sidebar-offcanvas">
                    <!-- Widget Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">SEARCH FOR TUTORS</h3>
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
                                    <button class="btn btn-primary" type="submit">Search Tutor</button>
                                </div>
                            </div>
                        </form>
                    </section>

                </aside>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 order-lg-1">
            <aside class="sidebar sidebar-offcanvas">
                <!-- Widget Categories-->
                <section class="widget widget-categories">
                    <h3 class="widget-title">Featured Tutors</h3>
                    <div class="row">
                        @foreach ($tutors as $tutor)
                            <div class="col-xl-4 col-lg-4 ">
                                <div class="product-card product-list">
                                    <a style="position: relative; width: 120px; padding: 18px; border-right: 1px solid #e1e7ec; display: table-cell; vertical-align: middle;"
                                        href="/tutor/{{ $tutor->id }}"><img src="{{ url('images/' . $tutor->image) }}"
                                            alt="Product"></a>
                                    <div class="product-info">
                                        <h3 class="product-title"><a
                                                href="/tutor/{{ $tutor->id }}">{{ $tutor->name }}</a></h3>
                                        <h4 class="product-price">{{ $tutor->salary }} tk/month</h4>
                                        <p class="hidden-xs-down">{{ $tutor->district }}</p>
                                        <p class="hidden-xs-down">{{ $tutor->phone }}</p>
                                        <a href="/tutor/{{ $tutor->id }}" class="btn btn-outline-primary btn-sm">Message</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </aside>
        </div>

    @stop
