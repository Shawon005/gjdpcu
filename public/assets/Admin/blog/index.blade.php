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
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    <strong>{{session('message')}}</strong>
                </div>
                 @endif
                <h4 class="card-title">Blog Table</h4>
                <h6 class="card-subtitle">All Blog Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.blog.create')}}">Add New Blog</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Picture</th>
                                <!-- <th>Category</th> -->
                                <th>Pin</th>
                                <th>Status</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{$blog->blog_name}}</td>
                                <td><img src="{{$blog->blog_image}}" weight="80px" height="70px" alt=""></td>
                                <!-- <td>{{$blog->blog_category}}</td> -->
                                <td ><span class="btn-sm btn-{{($blog->is_pin==1)?'primary':'danger'}}">{{($blog->is_pin==1)?'Pin':'Unpin'}}</span></td>
                                <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$blog->blog_id}} {{($blog->blog_status==1)?'checked':''}} /></td>
                                <td>{{dateFormatconverter($blog->blog_cdt)}}</td>
                                <td><a class="btn-sm btn-info" href="{{route('admin.blog.edit',$blog->blog_slug)}}"><i class="fas fa-edit"></i></a> 
                          
                                @method('delete')
                                <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.blogs.destroy',$blog->blog_slug) }}"><i class="fas fa-trash"></i></a> </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
  @endsection
  @section('js')
  <script>
    $(document).ready(function() {
        $(".js-switch").on( "change",function(){
            var id=$(this).data('id');
         $.ajax({
             url:"BlogStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection