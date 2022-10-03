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
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 order-md-2">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Full Name</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" id="text-input"
                                                value="Artisanal kale">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select District: </label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Select District</option>
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Area:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Select Area</option>
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Medium:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Select Medium</option>
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Select Class:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Select Class</option>
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Select Subject:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option> Select Subject</option>
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="textarea-input">Student School/
                                            College:</label>
                                        <div class="col-9">
                                            <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Days per week:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Select Subject:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option> Select Subject</option>
                                                <option>Option item 1</option>
                                                <option>Option item 2</option>
                                                <option>Option item 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input"> Gender of Student:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Any Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="select-input">Desired Tutor Gender:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="select-input">
                                                <option>Any Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="textarea-input">Details Address</label>
                                        <div class="col-9">
                                            <textarea class="form-control" id="textarea-input" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Mobile</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" id="text-input"
                                                value="Artisanal kale">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="text-input">Email</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" id="text-input"
                                                value="Artisanal kale">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="textarea-input">Additional
                                            Information</label>
                                        <div class="col-9">
                                            <textarea class="form-control" id="textarea-input" rows="5"></textarea>
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
