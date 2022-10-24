@extends('layouts.default')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
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
                        <h3 class="widget-title">REQUEST TUTORS</h3>
                        <p>আপনার গৃহশিক্ষক দরকার হলে নিচের ফরমটা পুরন করুন । গৃহশিক্ষকেরা আপনার ফোনে যোগাযোগ করবে। </p>
                        <form name="request-tutor-form" method="post" action="{{ url('tutions') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 order-md-2">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Full Name</label>
                                        <div class="col-9">
                                            <input name="full_name" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select District: </label>
                                        <div class="col-9">
                                            <select name="district" class="form-control" required>
                                                <option value="" selected disabled>Select District</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Manikganj">Manikganj</option>
                                                <option value="Tangail">Tangail</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Area:</label>
                                        <div class="col-9">
                                            <select name="area" class="form-control" required>
                                                <option value="" selected disabled>Select Area</option>
                                                <option value="Gulshan">Gulshan</option>
                                                <option value="Banani">Banani</option>
                                                <option value="Badda">Badda</option>
                                                <option value="Mirpur">Mirpur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Medium:</label>
                                        <div class="col-9">
                                            <select name="medium" class="form-control">
                                                <option value="" selected disabled>Select Medium</option>
                                                <option value="English">English</option>
                                                <option value="Bangla">Bangla</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Class:</label>
                                        <div class="col-9">
                                            <select name="class" class="form-control" required>
                                                <option value="" selected disabled>Select Class</option>
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
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Select Subject:</label>
                                        <div class="col-9">
                                            <select name="subject" class="form-control" required>
                                                <option value="" selected disabled> Select Subject</option>
                                                <option value="Bangla">Bangla</option>
                                                <option value="English">English</option>
                                                <option value="Math">Math</option>
                                                <option value="Chemistry">Chemistry</option>
                                                <option value="ICT">ICT</option>
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
                                            <select name="days_per_week" class="form-control">
                                                <option value="" selected disabled>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Gender of Student:</label>
                                        <div class="col-9">
                                            <select name="student_gender" class="form-control" required>
                                                <option value="" selected disabled>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Desired Tutor
                                            Gender:</label>
                                        <div class="col-9">
                                            <select name="tutor_gender" class="form-control">
                                                <option value="Any Gender">Any Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Monthly Salary</label>
                                        <div class="col-9">
                                            <input name="salary" class="form-control" type="number">
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
                                            <input name="mobile" class="form-control" type="number" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Email</label>
                                        <div class="col-9">
                                            <input name="email" class="form-control" type="email">
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
