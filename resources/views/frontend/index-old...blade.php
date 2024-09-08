@extends('frontend.layout.master')
@section('content')



                        <!-- banner section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="">
                                    <div class="banner-head text-center">
                                        <img src="{{asset('')}}frontend/img/banner.jpeg" class="" height="350px" width="100%" alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  timer section -->
                        <div class="" id="header">
                            <div class="row mt-5">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="text-center timer-logo">
                                        <img src="{{asset('')}}frontend/img/logo.png" class="logo img-fluid" alt="logo">
                                        <h2 class="timer-heading mt-3">GOLDEN JUBLEE 2023 </h2>
                                    </div>
                                    <!-- timer -->
                                    <div class="">
                                        <div class="countdown d-flex justify-content-center" data-count="2023/10/28">
                                            <div>
                                                <h3>%d</h3>
                                                <h4>Days</h4>
                                            </div>
                                            <div>
                                                <h3>%h</h3>
                                                <h4>Hours</h4>
                                            </div>
                                            <div>
                                                <h3>%m</h3>
                                                <h4>Minutes</h4>
                                            </div>
                                            <div>
                                                <h3>%s</h3>
                                                <h4>Seconds</h4>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="wel-info">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="text-center">
                                                    <h2 class="timer-heading mb-3">WELCOME </h2>
                                                    <p>We are happy to announce that the Golden Jubilee Celebration of The Department of Philosophy, University of Chittagong will be held on <b class="red-txt">28 October, 2023 Saturday</b>.
                                                        <br> All alumni of the department are invited to participate this Grand Event.
                                                        <br> The deadline of the event registration is 
                                                        <b class="red-txt">15 September 2023</b>. <br>For Online registration <b>
                                                        <a href="{{route('registration')}}" class="red-txt">Link Here</a><!-- <br>
                                                        <a href="registration.html" class="btn btn-outline-danger">Register Event Online</a> -->
                                                        </b> 
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timer-info mt-5">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="reg-div text-center ">
                                                    <p><span class="t-text">Online Registration <br>
                                                </span>Complete your online registration using online payment option </p>
                                                    <p>
                                                        <a href="{{route('login')}}" type="submit" class="btn btn-outline-danger">Create Account/Login</a>
                                                    </p>
                                                    <p> 
                                                        <a href="{{route('registration')}}" class="btn btn-outline-danger">Register With Online Payment</a>
                                                    </p>

                                                    <p> 
                                                        <a href="{{route('register')}}" class="btn btn-outline-danger">Register</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-12 col-lg-6">
                                                <div class="don-div text-center">
                                                    <p><span class="t-text">Online Donation :</span>Donate Online using online<br>  payment option in single step</p>
                                                    <p><span class="t-text">Step :</span> <button type="button" class="btn btn-outline-danger">Donate Online</button></p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- organizer committee -->
                        <!-- <div class="">
                            <div class="row my-5">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="committee-box">
                                        <div class="text-center mb-4">
                                            <h4 class="red-txt">Organizer Committee</h4>
                                            <h5><a href="" class="red-txt">Click</a> here to view all committee members</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('')}}frontend/img/tutor-img.png" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Zahidul Islam</h5>
                                                                <p class="card-text">Member Secretary</p>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('')}}frontend/img/tutor-img.png" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Zahidul Islam</h5>
                                                                <p class="card-text">Member Secretary</p>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('')}}frontend/img/tutor-img.png" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Zahidul Islam</h5>
                                                                <p class="card-text">Member Secretary</p>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->

                       

@endsection
    
    



