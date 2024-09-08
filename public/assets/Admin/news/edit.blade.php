@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">News</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">News</li>
                    <li class="breadcrumb-item active">News Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Edit {{$news->news_title}} News</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.news.update',$news->news_id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="news_title" value="{{$news->news_title}}" >
                                <label for="exampleInputuname1">Post Title</label>
                            </div>
                            @error('news_title')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group m-b-40">
                               <label for="exampleInputuname">Category</label><br><br>
                                <select name="news_category" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                @foreach($categories as $category)
                                   @if($news->news_category==$category->name)
                                    <option value="{{$category->name}}" selected>{{$category->name}}</option>
                                    @else
                                    <option value="{{$category->name}}" >{{$category->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                
                            </div>  
                            <div class="card form-group m-b-40">
                                <div class="card-body">
                                    <h4 class="card-title">News Details</h4>
                                    <textarea id="mymce" name="news_description">{{$news->news_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-40">
                            <input type="file" id="input-file-now-custom-1" name="news_image" class="dropify" data-default-file="{{$news->news_image}}" />
                                <label for="exampleInputuname2">Post Image</label>
                                <small class="text-danger">Image Should be 760X400</small>
                            </div>    
                                  
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="news_status"class="form-control"{{$news->news_status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.news.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection