@extends('frontend.layout.master')
@section('content')

                        <!-- main content section -->
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="">
                                        <div class="head-reg my-5 text-center box-reg">
                                            <p>INSTRUCTIONS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="row my-3">
                                        <div class="col-sm-12 col-md-12 col-lg-7 mt-3">
                                            <div class=" box-reg">
                                                <h5 class="red-txt text-center"><b>Registration Fee</b></h5>
                                                <p><b>Fee For:</b> Online Registration for Golden Jubilee Registration 2023<br>Department of Philosophy,University of Chittagong  <a target="_blank" href="{{asset('')}}frontend/documents/Leaflet-2.pdf"><i class="fa fa-file-pdf-o" title="payment information"aria-hidden="true"></i></a></p>
                                                <table class="table table-bordered border-danger table-hover">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Per Person Fee</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Alumni</td>
                                                            <td>2040.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Current Student</td>
                                                            <td>1020.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spouse</td>
                                                            <td>1530.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Child</td>
                                                            <td>1020.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Guest</td>
                                                            <td>2040.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Driver</td>
                                                            <td>1020.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!-- <div class="mb-5">
                                                    <button type="button" class="btn btn-outline-secondary">Go Back</button>
                                                    <button type="button" class="btn btn-outline-success">Pay Later</button>
                                                    <button type="button" class="btn btn-outline-danger">Cancel</button>
                                                    <button type="button" class="btn btn-outline-info">submit</button>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-5 mt-3">
                                            <div class="app-box">
                                                <h5 class="red-txt text-center"><b>Application Procedure</b></h5>
                                                <p>Registration fee can be paid from :</p>
                                                <ul class="list-nested">
                                                    <li class="list-group-item"><b>Debit/Credit Card:</b> Nexsus, Visa, Master</li>
                                                    <li class="list-group-item"><b>Mobile Banking:</b> Rocket, Bkash, Nogod, Upay, Ok wallet, Tap</li>
                                                    <!-- <li class="list-group-item"><b>Internet Banking:</b> City Touch,Islami Bank,Bank Asia,Mutual Trust Bank</li>     -->
                                                </ul> 
                                                <p>The photo must be passport size (300x400 Pixel) color.</p>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        

                        <!-- footer -->
@endsection