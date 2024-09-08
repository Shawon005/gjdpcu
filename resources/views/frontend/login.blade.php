@extends('frontend.layout.master')
@section('content')

                        <!-- main content section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="head-reg my-5 text-center box-reg">
                                    <p>Login</p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 box-reg">
                                        <div class="my-2">
                                            <p class="login-text">Please login if you are a member or click on create account to registered as a alumni member.</p>
                                        </div>
                                        @if(session('message'))
                                            <div class="alert alert-success">
                                                <span class="close" data-dismiss="alert"></span>
                                                <strong>{{session('message')}}</strong>
                                            </div>
                                        @endif
                                        <form class="row g-3" action="{{route('login_store')}}" method="post">
                                            @csrf
                                            <div class="col-md-6 col-lg-12">
                                                <div class="mb-3">
                                                    <label for="">Mobile No.</label>
                                                    <input type="tel" class="form-control" name="mobile" placeholder="Enter your number">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="mb-3">
                                                    <label for="">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 text-center">
                                                <div class="card-footer d-grid gap-2">
                                                    <button  class="btn btn-danger" type="submit">Login</button>
                                                </div>
                                            </div> 
                                            <div class="text-center">
                                                <span><a href="{{route('registration')}}" class="red-txt">Create account</a></span>  |  <span><a href="" class="red-txt">Forgot Password?</a></span>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        

 @endsection