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
                                <th>Page Name</th>
                                
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$page->page_name}}</td>
                                <td><a class="btn-sm btn-info " href="{{route('admin.spelansvar.edit',$page->id)}}"><i class="fas fa-edit"></i></a>
                                
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