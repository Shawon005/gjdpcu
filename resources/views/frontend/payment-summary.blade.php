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

                        <!-- main content section -->
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="event">
                                        <div class="head-reg my-5 text-center box-reg">
                                            <p>Payment Summary</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="row my-3">
                                        <div class="col-sm-12 col-md-12 col-lg-8 mt-5 box-reg">
                                            <h5><b>PAYMENT SUMMARY</b></h5>
                                            <p><b>Payment For:</b> Online Registration for Golden Jubilee Registration 2023<br>Department of Philosophy,University of Chittagong </p>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Count</th>
                                                    <th scope="col">Per Person Fee</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Alumni</td>
                                                        <td>1</td>
                                                        <td>2550.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Spouse</td>
                                                        <td>1</td>
                                                        <td>2040.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Child</td>
                                                        <td>1</td>
                                                        <td>1030.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Guest</td>
                                                        <td>1</td>
                                                        <td>3060.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Driver</td>
                                                        <td>1</td>
                                                        <td>1530.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>5</td>
                                                        <td>10230.00 BDT</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="mb-5">
                                                <!-- <div class="form-check my-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    I have read and accept <a>Terms & Conditions and Refund Policy</a>
                                                    </label>
                                                </div> -->
                                                <button type="button" class="btn btn-outline-secondary">Go Back</button>
                                                <button type="button" class="btn btn-outline-success">Pay Later</button>
                                                <button type="button" class="btn btn-outline-danger">Cancel</button>
                                                <button type="button" class="btn btn-outline-info">submit</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-4 mt-5">
                                            <div class="box-event">
                                                <p class="head-reg">Payment Methos</p>
                                                <ul class="list-nested">
                                                    <li class="list-group-item"><b>Debit/Credit Card:</b> Visa,Master,American Express</li>
                                                    <li class="list-group-item"><b>Mobile Banking:</b> Bkash,M Cash, My Cash,AB Cash</li>
                                                    <li class="list-group-item"><b>Internet Banking:</b> City Touch,Islami Bank,Bank Asia,Mutual Trust Bank</li>    
                                                </ul> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        

                        <!-- footer -->
  @endsection