@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Participant</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Participant</li>
                    <li class="breadcrumb-item active">Participant Details</li>
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
                <h4 class="card-title">Participent Table</h4>
                <h6 class="card-subtitle">All Participent Information</h6>
                
                <p>
                    <a class="btn badge-success" href="{{route('admin.register.index')}}">
                        All
                    </a>
                    <a class="btn badge-success" href="{{route('admin.paid')}}">
                        Paid
                    </a>
                    <a class="btn badge-success" href="{{route('admin.pending')}}">
                        Pending
                    </a>
                   
                </p>
               
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Reg No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Batch</th>
                                <th>Participant</th>
                                <th>Total Amount</th>
                                <th>Address</th>
                                <th>Register Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div>
                            @foreach($registers as $regsiter)
                            <tr>
                                <td>{{$regsiter->reg_id}}</td>
                                <td>{{$regsiter->name}}</td>
                                <td><img src="{{$regsiter->image}}" weight="80px" height="70px" alt=""></td>
                                <td >{{$regsiter->mobile}}</td>
                                <td>{{$regsiter->email}}</td>
                                <td>{{$regsiter->batch}}</td>
                                <td>{{$regsiter->total_partticipent}} </td>
                                <td>{{$regsiter->total_amount}} </td>
                                <td>{{$regsiter->present_address}}</td>
                                <td>{{($regsiter->cdt)}}</td>
                                <td><a target="_blank" href="{{route('admin.register.show',$regsiter->id)}}" class="badge badge-success">view</a>
                                <a target="_blank" href="{{route('admin.invoice',$regsiter->id)}}" class="badge badge-success">invoice</a>
                                    <a class="badge badge-danger" href="{{route('admin.register.delete',$regsiter->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </div>
                           
                    </tbody>
                    </table>
                </div>
               
            </div>
        </div>
  </div>
  @endsection
  