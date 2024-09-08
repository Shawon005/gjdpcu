@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">User</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">User Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New User</h4>
                        <h6 class="card-subtitle">made with bootstrap elements</h6>
                        <form class="floating-labels m-t-40" action="{{route('admin.user.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="name"  required="">
                                <label for="exampleInputuname1">Name</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="profile_image"required="">
                                <label for="exampleInputuname2">Profile Image</label>
                            </div> 
                            <div class="form-group m-b-40">
                                
                                <input type="email" class="form-control" id="exampleInputuname1" name="email" required="">
                                <label for="exampleInputuname1">Email</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="tel" class="form-control" id="exampleInputuname1" name="mobile" required="">
                                <label for="exampleInputuname1">Mobile</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="password" class="form-control" id="exampleInputuname1" name="password" required="">
                                <label for="exampleInputuname1">Password</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="address" required="">
                                <label for="exampleInputuname1">Address</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="dob" required=""onfocus="(this.type='date')">
                                <label for="exampleInputuname1">Date of Birth</label>
                            </div>      
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control">
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.user.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection