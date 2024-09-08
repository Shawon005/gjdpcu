@extends('frontend.layout.master')
@section('content')
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <nav class="navbar navbar-expand-lg custom-nav">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="index.html"><img src="img/lg-1.png" class="logo-nav" alt="..."> </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="nav justify-content-center">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="schedule.html">Program Schedule</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="instruction.html">Instruction</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="registration.html">Registration</a>
                                                </li>
                                                <!-- <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Registration Status
                                                    </a>
                                                    <ul class="dropdown-menu drop-custom">
                                                        <li><a class="dropdown-item" href="reg-page.html">Registration</a></li>
                                                        <li><a class="dropdown-item" href="event-section.html">Event Registration</a></li>
                                                        <li><a class="dropdown-item">Summery</a> </li>
                                                        
                                                    </ul>
                                                </li> -->
                                                <li class="nav-item">
                                                    <a class="nav-link" href="connect-us.html">Connect Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav> 
                            </div>
                        </div>

                        <!--  timer section -->
                        <div class="container" id="header">
                            <div class="row mt-5">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="text-center timer-logo">
                                        <img src="img/brand-apple.png" class="logo img-fluid" alt="logo">
                                        <h2 class="timer-heading mt-3">GOLDEN JUBLEE 2020 </h2>
                                    </div>
                                    <div class="">
                                        <div class="countdown d-flex justify-content-center" data-count="2023/12/3">
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

                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12 my-5">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <div class="card text-bg-primary mb-3">
                                                <div class="card-header">Total Summary</div>
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <p class="card-text">Member: 3</p>
                                                    <p class="card-text">Member: 4</p>
                                                    <p class="card-text">children: 1</p>
                                                    <p class="card-text">Total: 8</p>
                                                </div>
                                                <div class="card-footer d-grid gap-2">
                                                    <button class="btn btn-primary" type="button">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <div class="card text-bg-secondary mb-3">
                                                <div class="card-header">Pending Summary</div>
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <p class="card-text">Member: 3</p>
                                                    <p class="card-text">Member: 4</p>
                                                    <p class="card-text">children: 1</p>
                                                    <p class="card-text">Total: 8</p>
                                                </div>
                                                <div class="card-footer d-grid gap-2">
                                                    <button class="btn btn-secondary" type="button">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <div class="card text-bg-success mb-3">
                                                <div class="card-header">Confirmed Summary</div>
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <p class="card-text">Member: 3</p>
                                                    <p class="card-text">Member: 4</p>
                                                    <p class="card-text">children: 1</p>
                                                    <p class="card-text">Total: 8</p>
                                                </div>
                                                <div class="card-footer d-grid gap-2">
                                                    <button class="btn btn-success" type="button">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <div class="card card-custom border-danger mb-3">
                                                <div class="card-header">Your Summary</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Register Now</h5>
                                                    <p class="card-text"></p>
                                                    <p class="card-text"></p>
                                                    <p class="card-text"></p>
                                                </div>
                                                <div class="card-footer d-grid gap-2">
                                                    <button class="btn btn-danger" type="button">Button</button>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                    <div class="banner-2 my-3 text-center">
                                        <img src="img/banner.jpg" class="" alt="banner" style="height: 80px; width: 650px;">
                                    </div>
                                    <h5>Online Registration For CCC High School Golden Jubilee 2023</h5> 
                                </div>
                            </div>
                        </div>


 @endsection