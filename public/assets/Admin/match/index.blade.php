@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Match/Event</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Match/Event</li>
                    <li class="breadcrumb-item active">Match/Event Details</li>
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
                <h4 class="card-title">Match/Event Table</h4>
                <h6 class="card-subtitle">All Match/Event Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.match.create')}}">Add New Match/Event</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Picture</th>
                                <th>Type</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matchs as $match)
                            <tr>
                                <td>{{$match->title}}</td>
                                <td><img src="{{$match->banner}}" weight="80px" height="70px" alt=""></td>
                                <td>{{$match->type}}</td>
                                <td><span><a href="{{$match->company_link}}">{{$match->company_name}}</a></span></td>
                                <td ><input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" data-size="small" data-id={{$match->id}} {{($match->status==1)?'checked':''}} /></td>
                                <td>{{dateFormatconverter($match->cdt)}}</td>
                                <td><a class="btn-sm btn-info" href="{{route('admin.match.edit',$match->id)}}"><i class="fas fa-edit"></i></a> 
                          
                                @method('delete')
                                <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.match.delete',$match->id) }}"><i class="fas fa-trash"></i></a> </td>
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
             url:"MatchStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection