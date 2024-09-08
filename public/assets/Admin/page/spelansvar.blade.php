@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Spelansvar Layout</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Spelansvar Layout</li>
                    <li class="breadcrumb-item active">Spelansvar Details</li>
                </ol>
            </div>
           
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Spelansvar Layout</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.spelansvar.update',1)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="contain1" value="{{$spela->contain1}}" >
                                <label for="exampleInputuname1">Contain</label>
                            </div>

                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="contain2" value="{{$spela->contain2}}" >
                                <label for="exampleInputuname1">Contain</label>
                            </div>

                            <div class="form-group m-b-40">
                                <label for="exampleInputuname2">Contain Image</label><br><br>
                                <input type="file" id="input-file-now-custom-1" name="contain_image" class="dropify" data-default-file="{{$spela->contain_image}}" />  
                            </div>

                            <div class="form-group m-b-40">
                                <label for="exampleInputuname2">Banner Image</label><br><br>
                                <input type="file" id="input-file-now-custom-1" name="page_banner" class="dropify" data-default-file="{{$spela->page_banner}}" />
                            </div> 

                            <div class="form-group m-b-40">
                                <label for="exampleInputuname1">Banner Text</label><br><br>
                                <textarea id="mymce" name="banner_text"value="">{{$spela->banner_text}}</textarea>
                            </div>

                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="text_link" value="{{$spela->text_link}}">
                                <label for="exampleInputuname1">Banner Link</label>
                            </div>
                           
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection