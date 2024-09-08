
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
                        <h4 class="card-title">Edit {{$blog->blog_name}} Blog</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.blog.update',$blog->blog_id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="blog_name" value="{{$blog->blog_name}}">
                                <label for="exampleInputuname1">Blog Name</label>
                            </div>
                            @error('blog_name')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror
                            <!-- <div class="form-group m-b-40">
                               <label for="exampleInputuname">Category</label><br><br>
                                <select name="blog_category" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Category</option>
                                    <option {{($blog->blog_category=='Kronika')?'selected':''}} value="Kronika">Kronika</option>
                                    <option {{($blog->blog_category=='Artikel')?'selected':''}} value="Artikel" >Artikel</option>
                                    <option {{($blog->blog_category=='Sport')?'selected':''}} value="Sport">Sport</option>
                                    <option {{($blog->blog_category=='Spel')?'selected':''}} value="Spel">Spel</option>
                                </select>
                                
                            </div>   -->
                            <div class="card form-group m-b-40">
                                <div class="card-body">
                                    <h4 class="card-title">Blog Details</h4>
                                    <textarea id="mymce" name="blog_description">{{$blog->blog_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-40">
                            <input type="file" id="input-file-now-custom-1" name="blog_image" class="dropify" data-default-file="{{$blog->blog_image}}" />
                                <label for="exampleInputuname2">Blog Image</label>
                            </div>    
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox2" type="checkbox" name="is_pin"class="form-control"{{$blog->is_pin==1?'checked':''}}>
                                    <label for="checkbox2">Is Pin </label>
                                </div>
                            </div>   
                            <br><br>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="blog_status"class="form-control"{{$blog->blog_status==1?'checked':''}}>
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