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
                        <h4 class="card-title">Edit {{$user->name}} Profile</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.user.update',$user->user_id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="name" value="{{$user->name}}"required="">
                                <label for="exampleInputuname1">Name</label>
                            </div>
                            
                            <div class="form-group m-b-40">
                               <label for="exampleInputuname2">Profile Image</label>
                               <input type="file" id="input-file-now-custom-1" name="profile_image" class="dropify" data-default-file="{{$user->profile_image}}" />
                            </div>
                            
                            <div class="form-group m-b-40">
                                
                                <input type="email" class="form-control" id="exampleInputuname1" name="email" value="{{$user->email_id}}"required="">
                                <label for="exampleInputuname1">Email</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="tel" class="form-control" id="exampleInputuname1" name="mobile" value="{{$user->mobile_number}}"required="">
                                <label for="exampleInputuname1">Mobile</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="password" class="form-control" id="exampleInputuname1" name="password" value="{{$user->password}}"required="">
                                <label for="exampleInputuname1">Password</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="address" value="{{$user->user_address}}"required="">
                                <label for="exampleInputuname1">Address</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="dob" value="{{$user->date_of_birth}}"required="" onfocus="(this.type='date')">
                                <label for="exampleInputuname1">Date of Birth</label>
                            </div>      
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control"{{$user->status==1?'checked':''}}>
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