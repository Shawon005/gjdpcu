@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Table</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Table Details</li>
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
                <h4 class="card-title"> Table</h4>
                <h6 class="card-subtitle">All Table Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.table.create')}}">Add New table</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>image</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tables as $table)
                            <tr>
                                <td >{{$table->title}}</td>
                                <td>{{$table->category}}</td>
                                <td><img src="{{$table->image}}" weight="80px" height="70px" alt=""></td>
                                <!-- <td>{{$table->link}}</td> -->
                                <td >{{$table->date}}</td>
                                <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$table->id}} {{($table->status==1)?'checked':''}} /></td>
                                <td><a class="btn-sm btn-info " href="{{route('admin.table.edit',$table->id)}}"><i class="fas fa-edit"></i></a> 
                                @method('delete')
                                <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.table.delete',$table->id) }}"><i class="fas fa-trash"></i></a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
  <!-- Model -->
  @endsection
  @section('js')
  <script>
    $(document).ready(function() {
        $(".js-switch").on( "change",function(){
            var id=$(this).data('id');
         $.ajax({
             url:"TableStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection