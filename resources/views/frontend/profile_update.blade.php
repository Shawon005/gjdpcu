
@extends('frontend.layout.master')
@section('content')
                        <!-- main content section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="head-reg my-5 text-center box-reg">
                                    <p>PROFILE UPDATE</p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
                                @if(session('message'))
                                <div class="alert alert-success">
                                    <span class="close" data-dismiss="alert"></span>
                                    <strong>{{session('message')}}</strong>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 box-reg">
                                        <form class="row g-3" action="{{route('admin.register.update',$user->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title"class="form-control" id="" value="{{$user->title}}" placeholder="Enter your title">
                                                    @error('title')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Full Name</label>
                                                    <input type="text" name="name"class="form-control" id=""  value="{{$user->name}}" placeholder="Enter your full name">
                                                    @error('name')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Nick Name</label>
                                                    <input type="text" name="nick_name"class="form-control"  value="{{$user->nick_name}}" id="exampleInputEmail1"placeholder="Enter your nick name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Email Address</label>
                                                    <input type="email" name="email"class="form-control" disabled value="{{$user->email}}" placeholder="Enter your email">
                                                    @error('email')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Mobile</label>
                                                    <input type="text" name="mobile"class="form-control" disabled value="{{$user->mobile}}" >
                                                    @error('email')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">University Batch</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example" disabled name="batch" id="batch">
                                                        <option selected>Select Batch</option>
                                                        <option value="1"{{($user->batch==1)?'selected':''}}>1st</option>
                                                        <option value="2"{{($user->batch==2)?'selected':''}}>2nd</option>
                                                        <option value="3"{{($user->batch==3)?'selected':''}}>3th</option>
                                                        @php for($i=0;$i<=57 ;$i++){ @endphp
                                                            <option value="{{$i}}" {{($user->batch==$i)?'selected':''}}>{{$i}}th</option>
                                                        @php } @endphp 
                                                    </select> 
                                                    @error('batch')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Session</label>
                                                    <input type="text" name="session"class="form-control" value="{{$user->session}}" placeholder="Enter your Session">
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Passing Year</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example" name="passing_year">
                                                        <option selected>Select Passing Year</option>
                                                        @php for($i=2023;$i>=1973 ;$i--){ @endphp
                                                            <option value="{{$i}}" {{($user->passing_year==$i)?'selected':''}}>{{$i}}</option>
                                                        @php } @endphp 
                                                       
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Hall</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example"name="hall">
                                                        <option selected>Select Hall</option>
                                                        <option value="Alaol Hall">Alaol Hall</option>
                                                        <option value="A. F. Rahman Hall">A. F. Rahman Hall</option>
                                                        <option value="Shahjalal Hall">Shahjalal Hall</option>
                                                        <option value="Suhrawardy Hall">Suhrawardy Hall</option>
                                                        <option value="Shamsun Nahar Hall">Shamsun Nahar Hall</option>
                                                        <option value="Shaheed Abdur Rab Hall">Shaheed Abdur Rab Hall</option>
                                                        <option value="Pritilata Hall">Pritilata Hall</option>
                                                        <option value="Deshnetri Begum Khaleda Zia Hall">Deshnetri Begum Khaleda Zia Hall</option>
                                                        <option value="Masterda Surja Sen Hall">Masterda Surja Sen Hall</option>
                                                        <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                                                        <option value="Janonetri Sheikh Hasina Hall">Janonetri Sheikh Hasina Hall</option>
                                                        <option value="Artist Rashid Chowdhury Hostel">Artist Rashid Chowdhury Hostel</option>
                                                        <option value="Bangamata Sheikh Fazilatunnesa Mujib Hall">Bangamata Sheikh Fazilatunnesa Mujib Hall</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">T-shirt Size</label>
                                                        <select class="form-select form-select"  name="t_size" aria-label=".form-select-sm example">
                                                        <option value=""  >Select T-shirt size</option>
                                                        <option value="s" {{($user->t_size=='s')?'selected':''}}>s</option>
                                                        <option value="m"{{($user->t_size=='m')?'selected':''}}>m</option>
                                                        <option value="l"{{($user->t_size=='l')?'selected':''}}>l</option>
                                                        <option value="xl"{{($user->t_size=='xl')?'selected':''}}>xl</option>
                                                        <option value="xxl"{{($user->t_size=='xxl')?'selected':''}}>xxl</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                    <label for="formFile" class="form-label">Profile Picture <span style="color:red">*</span>
                                                    </label>
                                                    <input type="file" id="input-file-now-custom-1" name="image" class="dropify" accept="image/*" data-default-file="{{$user->image}}" />
                                                    <!-- <input class="form-control" type="file" id="formFile" accept="image/*" name="image"> -->
                                                    </div>
                                                    <small><b>Important:</b> We kindly request you to upload a high-resolution picture for inclusion in the vibrant souvenir that will be published during our Golden Jubilee celebration</small>
                                                    @error('image')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Blood Group</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example"name="blood">
                                                        <option selected>Select Blood Group</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>

                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Gender</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example"name="gender">
                                                        <option selected>Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Profession</label>
                                                    <input type="text" class="form-control" id=""  value="{{$user->proffession}}" placeholder=""name="proffession">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Organization/Institute</label>
                                                    <input type="text" class="form-control" id=""  value="{{$user->insititute}}" placeholder=""name="insititute">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Present Address</label>
                                                    <textarea name="present_address" id=""class="form-control" cols="30" rows="5">{{$user->present_address}}</textarea>
                                                    <!-- <input type="text" class="form-control" id=""  value="{{$user->present_address}}" placeholder="Enter your address"name="present_address"> -->
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Permanent Address</label>
                                                    <textarea name="parmanent_address" class="form-control" id="" cols="30" rows="5">{{$user->parmanent_address}}</textarea>
                                                    <!-- <input type="text" class="form-control"  value="{{$user->parmanent_address}}" id="exampleInputEmail1"placeholder="Enter your nick address"name="parmanent_address"> -->
                                                </div>
                                            </div>
                                           
                                            <div class="col-12 text-center">
                                                <div class="mb-2">
                                                    <button type="reset" class="btn btn-outline-danger">Cancel</button>
                                                    <button type="submit" class="btn btn-outline-info">submit</button>
                                                    
                                                </div>
                                            </div>  
                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        

                        <!-- footer -->
 @endsection
 