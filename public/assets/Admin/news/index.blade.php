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
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    <strong>{{session('message')}}</strong>
                </div>
                 @endif
                <h4 class="card-title">News Table</h4>
                <h6 class="card-subtitle">All news Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.news.create')}}">Add New News</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Picture</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newses as $news)
                            <tr>
                                <td>{{$news->news_title}}</td>
                                <td><img src="{{$news->news_image}}" weight="80px" height="70px" alt=""></td>
                                <td>{{$news->news_category}}</td>
                                <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$news->news_id}} {{($news->news_status==1)?'checked':''}} /></td>
                                <td>{{dateFormatconverter($news->news_cdt)}}</td>
                                <td><a class="btn-sm btn-info " href="{{route('admin.news.edit',$news->news_slug)}}"><i class="fas fa-edit"></i></a> 
                          
                                @method('delete')
                                <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.news.delete',$news->news_slug) }}"><i class="fas fa-trash"></i></a> </td>
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
             url:"NewsStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection