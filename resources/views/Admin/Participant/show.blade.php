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
                 <div class="text-center" style="">
                    <img src="{{$user->image}}" alt="">
                    <h4 class="mt-3">Reg No: {{$user->reg_id}}</h4>
                    <h2 class="text-uppercase">{{$user->name}}</h2>
                 </div>
                <div style="margin:0 20% 10px; color:black">
                    <p class="mt-4 p-2 border"><b>Title:</b> {{$user->title}}</p>
                    <p class="p-2 border"><b>Nick name:</b> {{$user->nick_name}}</p>
                    <p class="p-2 border"><b>Mobile:</b> {{$user->mobile}}</p>
                    <p class="p-2 border"><b>Email:</b> {{$user->email}}</p>
                    <p class="p-2 border"><b>Blood:</b> {{$user->blood}}</p>
                    <p class="p-2 border"><b>Gander: </b>{{$user->gender}}</p>
                    <p class="p-2 border"><b>Batch:</b> {{$user->batch}}</p>
                    <p class="p-2 border"><b>Hall:</b> {{$user->hall}}</p>
                    <p class="p-2 border"><b>Passing Year:</b> {{$user->passing_year}}</p>
                    <p class="p-2 border"><b>Session:</b> {{$user->session}}</p>
                    <p class="p-2 border"><b>Present Address:</b> {{$user->present_address}}</p>
                    <p class="p-2 border"><b>Parmanent Address:</b> {{$user->parmanent_address}}</p>
                    <p class="p-2 border"><b>Profession:</b> {{$user->proffession}}</p>
                    <p class="p-2 border"><b>Insititute:</b> {{$user->insititute}}</p>
                    @php $child=json_decode($user->childen);
                    $guest=json_decode($user->guest);
                    $driver=json_decode($user->driver);
                    $spouse=json_decode($user->spouse);
                    @endphp
                                                        
                    @if($spouse->name!=null)
                    <p class="p-2 border"><b>Spouse Name:</b> {{$spouse->name}}, <b>T-shirt Size:</b> {{$spouse->size}} </p>
                    @endif
                    @if($guest->name!=null)
                    <p class="p-2 border"><b>Guest Name:</b> {{$guest->name}}, <b>T-shirt Size:</b> {{$guest->size}}, <b>Age:</b> {{$guest->age}}</p>
                    @endif
                    @if($child->name[0] !=null)
                    @foreach($child->name as $id=>$chi)
                    <p class="p-2 border"><b>Child Name:</b> {{$chi}}, <b>T-shirt Size:</b> {{$child->size[$id]}}, <b>Age:</b> {{$child->age[$id]}}</p>
                    @endforeach
                    @endif
                    @if($driver->name!=null)
                    <p class="p-2 border"><b>Driver Name:</b> {{$driver->name}}, <b>Age:</b> {{$driver->age}}</p>
                    @endif
                    <p class="p-2 border"><b>Total Amount:</b> {{$user->total_amount}} tk.</p>
                </div>
            </div>
        </div>
  </div>
  @endsection
  