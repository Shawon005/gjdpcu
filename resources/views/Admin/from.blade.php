@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sample Form with the Icons</h4>
                        <h6 class="card-subtitle">made with bootstrap elements</h6>
                        <form class="form p-t-20">
                            <div class="form-group">
                                <label for="exampleInputuname">User Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputuname" placeholder="Username">
                                </div>
                            </div>
                           
                            <div class="card form-group">
                            <label for="exampleInputuname">User</label>
                                <div class="card-body">
                                    <div class="summernote">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname">File</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-user"></i>
                                        </span>
                                    </div>
                                    <input type="file" class="form-control" id="exampleInputuname" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" id="pwd1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd2">Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-lock"></i>
                                        </span>
                                    </div>
                                    <input type="date" class="form-control" id="pwd2" placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-lock"></i>
                                        </span>
                                    </div>
                                    <select class="form-control custom-select">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>
                                <small class="form-control-feedback"> Select your gender </small> 
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender-Multiple</label>
                                    <select class="form-control custom-select" multiple="">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                <small class="form-control-feedback"> Select your gender </small> 
                            </div>
                            <div class="form-group">
                                <label class="control-label">Membership</label>
                                <div class="m-b-10">
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                        <span class="custom-control-label">Free</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                        <span class="custom-control-label">Paid</span>
                                    </label>
                                </div>
                            </div>
                                                          
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"> Remember me </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection