@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">User</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">User Details</li>
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
                <h4 class="card-title">User Table</h4>
                <h6 class="card-subtitle">All user Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.user.create')}}">Add New User</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="nam">{{$user->name}}</td>
                                <td><img src="{{$user->profile_image}}" weight="80px" height="70px" alt=""></td>
                                <td>{{$user->email_id}}</td>
                                <td class="text-password">{{$user->mobile_number}}</td>
                                <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$user->user_id}} {{($user->status==1)?'checked':''}} /></td>
                                <td>{{dateFormatconverter($user->user_cdt)}}</td>
                                <td><a class="btn-sm btn-info " href="{{route('admin.user.edit',$user->user_slug)}}"><i class="fas fa-edit"></i></a> 
                                <a class="btn-sm btn-warning " href="" data-toggle="modal" data-target="#add-contact"><i class="fas fa-search"></i></a>
                                @method('delete')
                                <!-- <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.user.delete',$user->user_slug) }}"><i class="fas fa-trash"></i></a>  -->
                            </td>
                            </tr>
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">User Information</h4> 
                                        </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                    <label for="">Name</label>
                                                        <input type="text" class="form-control" placeholder="{{$user->name}}" readonly > 
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                    <label for="">Email</label>
                                                        <input type="text" class="form-control" placeholder="{{$user->email_id}}" readonly > 
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                    <label for="">Mobile</label>
                                                        <input type="text" class="form-control" placeholder="{{$user->mobile_number}}" readonly > 
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <label for="">Password</label>
                                                        <input type="password" class="form-control" value="{{$user->password}}" readonly > 
                                                    </div>  
                                                    <div class="col-md-12 m-b-20">
                                                    <label for="">Address</label>
                                                        <input type="text" class="form-control" placeholder="{{$user->user_address}}" readonly > 
                                                    </div>  
                                                    <div class="col-md-12 m-b-20">
                                                    <label for="">Profile Image</label> <br>
                                                      <img src="{{$user->profile_image}}" weight="80px" height="70px" alt="">
                                                    </div>  
                                                    
                                                </div>                        
                                                </from>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                                                        <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
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
             url:"UserStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection