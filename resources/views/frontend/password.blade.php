@extends('frontend.layout.master')
@section('content')

                        <!-- main content section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="head-reg my-5 text-center box-reg">
                                    <p>Password Change</p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 box-reg">
                                        <!-- <div class="my-2">
                                            <p class="login-text">Please login if you are a member or click on create account to registered as a alumni member.</p>
                                        </div> -->
                                        @if(session('message'))
                                            <div class="alert alert-success">
                                                <span class="close" data-dismiss="alert"></span>
                                                <strong>{{session('message')}}</strong>
                                            </div>
                                        @endif
                                        <form class="row g-3" action="{{route('password_change')}}" method="post">
                                            @csrf
                                           
                                            <div class="col-md-6 col-lg-12">
                                                <div class="mb-3">
                                                    <label for="">Old Password</label>
                                                    <input type="password" class="form-control" name="old_password" placeholder="Enter your Password" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="mb-3">
                                                    <label for="">New Password</label>
                                                    <input type="password" class="form-control" name="new_password" id="new_pass" placeholder="Enter your Password"required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="mb-3">
                                                    <label for="">Confirm Password</label>
                                                    <input type="password" class="form-control" name="con_password" id="con_pass" placeholder="Enter your Password"required>
                                                    <small class="d-none" id ="not_match"style="color:red">Password does not match</small>
                                                    <small class="d-none" id="match"style="color:green">Password  match</small>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 text-center">
                                                <div class="card-footer d-grid gap-2">
                                                    <button  class="btn btn-danger" type="submit">Submit</button>
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
 @section('js')
 <script>
    $(document).ready(function() {
       
        $('#con_pass').on('input',function(){
            var con_pass=$(this).val();
            var new_pass=$('#new_pass').val();
            if(new_pass==con_pass)
            {
                $('#not_match').addClass('d-none');
                $('#match').removeClass('d-none');
            }
            else{
                $('#not_match').removeClass('d-none');
                $('#match').addClass('d-none');
            }
        })
        
    });
 </script>
 @endsection