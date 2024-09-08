@extends('frontend.layout.master')
@section('content')
                        <!--  timer section -->
                        <div class="container" id="header">
                            <div class="text-center timer-logo">
                                <img src="{{asset('')}}frontend/img/logo.png" class="logo img-fluid" alt="logo">
                                <h2 class="timer-heading mt-3">GOLDEN JUBLEE 2023 </h2>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
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
                            </div>
                        </div>

                        <!--  status section -->
                        <div class="profile-status">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <div class="pay-event">
                                        <div class="text-center prof-head"><i class="fa fa-users" aria-hidden="true"></i> Total Member
                                        </div>
                                        <div class="prof-info">
                                        @php $child=json_decode($user->childen);
                                            $guest=json_decode($user->guest);
                                            $driver=json_decode($user->driver);
                                            $spouse=json_decode($user->spouse);
                                           
                                        @endphp

                                            @if($user->payment_type!='pending')
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true">{{($user->batch>52)?' Current Student':' Alumni'}} </i></b> : 1</p>
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Spouse</i></b> : {{($spouse->name!=null)?1:0}}</p>
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Children </i></b> :{{($child->name[0] !=null)?count($child->name):0}}</p>
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Guest </i></b> : {{($guest->name!=null)?1:0}}</p>
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Driver </i></b> : {{($driver->name!=null)?1:0}}</p>
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Total </i></b> : {{$user->total_partticipent}}</p>
                                            @else
                                            <p>Not registered in event yet. <br>
                                                <a href="{{route('event',session('user'))}}">Click here</a> to register in event.
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <div class="pay-event">
                                        <div class="text-center prof-head"><i class="fa fa-credit-card" aria-hidden="true"></i> Payment Information
                                        </div>
                                        <div class="prof-info">
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Total Amount </i></b> :{{$user->total_amount}} tk.</p>
                                            <p><b><i class="fa fa-arrow-right" aria-hidden="true"> Medium </i></b> : {{$user->payment_mode}}</p>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <div class="pay-event">
                                        <div class="text-center prof-head"><i class="fa fa-question-circle" aria-hidden="true"></i> Payment Status
                                        </div>
                                        <div class="prof-info">
                                            <p><b> Status </i></b> : <label class="badge text-bg-{{($user->payment_type=='paid')?'success':'danger'}}" for="">{{$user->payment_type}}</label> </p>
                                           @if($user->payment_type=='paid')
                                            <p style="font-size: 24px; color:green"><b><i class="fa fa-check-circle-o" aria-hidden="true"> Registration Confirmed </i></b></p>
                                           
                                            @elseif($user->payment_type=='unpaid')
                                            <p clsss="" style="font-size: 24px;"><b><i class="fa fa-spinner" aria-hidden="true"> Registration Pending </i></b></p>
                                            <a href="{{route('admin.payment')}}"class="btn btn-danger">Pay Now</a>
                                            @else
                                            <p clsss="" style="font-size: 24px;"><b><i class="fa fa-spinner" aria-hidden="true"> Registration Pending </i></b></p>
                                            @endif
                                            <!-- <p style="font-size: 24px;"><b><i class="fa fa-times" aria-hidden="true"> Registration Declined </i></b></p> -->
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- <div class="footer-banner">
                            <div class="row my-2">
                                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                    <div class="banner-2 my-3 text-center">
                                        <img src="{{asset('')}}frontend/img/banner.jpeg" class="" alt="banner" style="height: 80px; width: 650px;">
                                    </div>
                                    <h5 class="red-txt">Online Registration For Department of Philosophy, University of Chittagong 2023</h5> 
                                </div>
                            </div>
                        </div> -->

@endsection