@extends('layouts.default')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container padding-bottom-3x mb-1 mt-4">
        <div class="row">
            <!-- Blog Posts-->
            <div class="col-xl-4 col-lg-4 order-lg-2">
                <div class="widget-title">
                    <div class="text-left">Help & Info:</div>
                </div>
                <a class="list-group-item flex-column align-items-start" href="#">
                    <div class="d-flex w-100 justify-content-between">
                        <h5>Q. If i cant get the desired tutor ?</h5>
                    </div>
                    <p>Just fill up the request tutor form and send us. We will try to find your desired tutor.
                    </p>
                    <div class="d-flex w-100 justify-content-between">
                        <h5>Q. what will happen after fill the forms ?</h5>
                    </div>
                    <p>After fill up the form the information will be sent to bdtutorsfinalnew support team. They will
                        review/ verify the info and will publish on the available tuitions section.</p>
                </a>


            </div>
            <!-- Sidebar          -->
            <div class="col-xl-8 col-lg-8 order-lg-1">
                <aside class="sidebar sidebar-offcanvas">
                    <!-- Widget Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">SEARCH TUTORS</h3>
                        <p>আপনার গৃহশিক্ষক দরকার হলে নিচের ফরমটা পুরন করুন । গৃহশিক্ষকেরা আপনার ফোনে যোগাযোগ করবে। </p>
                        <form name="request-tutor-form" method="post" action="{{ url('tutions') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 order-md-2">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Full Name</label>
                                        <div class="col-9">
                                            <input name="full_name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select District: </label>
                                        <div class="col-9">
                                            <select name="district" class="form-control" id="select-input">
                                                <option>Select District</option>
                                                <option value="dhaka">Dhaka</option>
                                                <option value="manikganj">Manikganj</option>
                                                <option value="sylhet">Sylhet</option>
                                                <option value="khulna">Khulna</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Area:</label>
                                        <div class="col-9">
                                            <select name="area" class="form-control" id="select-input">
                                                <option>Select Area</option>
                                                <option value="gulshan">Gulshan</option>
                                                <option value="banani">Banani</option>
                                                <option value="badda">Badda</option>
                                                <option value="mirpur">Mirpur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Medium:</label>
                                        <div class="col-9">
                                            <select name="medium" class="form-control" id="select-input">
                                                <option>Select Medium</option>
                                                <option value="english">English</option>
                                                <option value="bangla">Bangla</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Class:</label>
                                        <div class="col-9">
                                            <select name="class" class="form-control" id="select-input">
                                                <option>Select Class</option>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                                <option value="five">Five</option>
                                                <option value="six">Six</option>
                                                <option value="seven">Seven</option>
                                                <option value="eight">Eight</option>
                                                <option value="nine">Nine</option>
                                                <option value="ten">Ten</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Select Subject:</label>
                                        <div class="col-9">
                                            <select name="subject" class="form-control" id="select-input">
                                                <option> Select Subject</option>
                                                <option value="bangla">Bangla</option>
                                                <option value="english">English</option>
                                                <option value="math">Math</option>
                                                <option value="chamestry">Chamestry</option>
                                                <option value="ICT">ict</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="textarea-input">Student School/
                                            College:</label>
                                        <div class="col-9">
                                            <textarea name="student_school" class="form-control" id="textarea-input" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Days per week:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                                <option value="five">Five</option>
                                                <option value="six">Six</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Gender of Student:</label>
                                        <div class="col-9">
                                            <select name="student_gender" class="form-control" id="select-input">
                                                <option>Any Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Desired Tutor
                                            Gender:</label>
                                        <div class="col-9">
                                            <select name="tutor_gender" class="form-control" id="select-input">
                                                <option>Any Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Monthly Salary</label>
                                        <div class="col-9">
                                            <input name="salary" class="form-control" type="text" id="text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="textarea-input">Details Address</label>
                                        <div class="col-9">
                                            <textarea name="address" class="form-control" id="textarea-input" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Mobile</label>
                                        <div class="col-9">
                                            <input name="mobile" class="form-control" type="text" id="text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Email</label>
                                        <div class="col-9">
                                            <input name="email" class="form-control" type="text" id="text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="textarea-input">Additional
                                            Information</label>
                                        <div class="col-9">
                                            <textarea name="information" class="form-control" id="textarea-input" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Request Tutor</button>
                                </div>
                            </div>
                        </form>
                    </section>

                </aside>
            </div>
        </div>

    @stop
