@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Tipster</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Tipster</li>
                    <li class="breadcrumb-item active">Tipster Details</li>
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
                <h4 class="card-title"> Tipster</h4>
                <h6 class="card-subtitle">All Tipster Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.tipspel.create')}}">Add New Tipster</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Nick Name</th>
                                <th>Profile Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Tipsters as $Tipster)
                            <tr>
                                <td >{{$Tipster->fullname}}</td>
                                <td>{{$Tipster->nickname}}</td>
                                <td><img src="{{$Tipster->profile_image}}" weight="80px" height="70px" alt="" class="rounded-circle"></td>
                                <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$Tipster->id}} {{($Tipster->status==1)?'checked':''}} /></td>
                                <td><a class="btn-sm btn-info " href="{{route('admin.tipspel.edit',$Tipster->id)}}"><i class="fas fa-edit"></i></a> 
                                @method('delete')
                                <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.tipspel.delete',$Tipster->id) }}"><i class="fas fa-trash"></i></a> </td>
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
             url:"TipsterStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection