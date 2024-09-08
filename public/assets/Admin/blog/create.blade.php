@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Blog</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">Blog Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Blog</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.blog.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="blog_name" required="">
                                <label for="exampleInputuname1">Blog Name</label>
                            </div>
                            @error('blog_name')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror
                            <!-- <div class="form-group m-b-40">
                                <label for="exampleInputuname">Category</label><br><br>
                                <select name="blog_category" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40"required="">
                                    <option value="">Select Category</option>
                                    <option value="Kronika">Kronika</option>
                                    <option value="Artikel">Artikel</option>
                                    <option value="Sport">Sport</option>
                                    <option value="Spel">Spel</option>
                                </select>
                            </div>   -->
                            <div class="card form-group m-b-40">
                                <div class="card-body">
                                    <h4 class="card-title">Blog Details</h4>
                                    <textarea id="mymce" name="blog_description" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="blog_image" required="">
                                <label for="exampleInputuname2">Blog Image</label>
                            </div>    
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox2" type="checkbox" name="is_pin"class="form-control">
                                    <label for="checkbox2">Is Pin </label>
                                </div>
                            </div>   
                            <br><br>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="blog_status"class="form-control">
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.blog.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection