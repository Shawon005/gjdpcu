@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Activices</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Activices</li>
                    <li class="breadcrumb-item active">Activices Details</li>
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
                <h4 class="card-title">Activices Table</h4>
                <h6 class="card-subtitle">All Activices Information</h6>
              
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Page</th>
                                <th>Type</th>
                                <th>Create Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Activicess as $Activices)
                            <tr>
                                <td>{{user($Activices->user_id)}}</td>
                                <td>{{$Activices->page}}</td>
                                <td >{{$Activices->type}}</td>
                                <td>{{dateFormatconverter($Activices->cdt)}}</td>
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
             url:"ActivicesStatusById/"+id,
             type:"GET",
             success:function(data){
                 
             }
         });
            
        });
    });
  </script>
  @endsection