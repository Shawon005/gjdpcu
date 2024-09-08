
@extends('frontend.layout.master')
@section('content')
                        <!-- main content section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="head-reg my-5 text-center box-reg">
                                    <p>REGISTRATION</p>
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
                                        <form class="row g-3" action="{{route('admin.register.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title"class="form-control" id="" placeholder="Enter your title">
                                                    @error('title')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Full Name <span style="color:red">*</span> </label>
                                                    <input type="text" name="name"class="form-control" id="" placeholder="Enter your full name">
                                                    @error('name')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Nick Name</label>
                                                    <input type="text" name="nick_name"class="form-control" id="exampleInp"placeholder="Enter your nick name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Mobile No <span style="color:red">*</span></label>
                                                    <input type="tel" name="mobile"class="form-control" placeholder="Enter your number">
                                                    @error('mobile')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Password <span style="color:red">*</span></label>
                                                    <input type="password"name="password" class="form-control" placeholder="Enter your Password">
                                                    @error('password')
                                                <span class="small text-danger">{{$message}}</span>
                                                @enderror
                                                </div>
                                            </div>
                                               
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Email Address <span style="color:red">*</span></label>
                                                    <input type="email" name="email"class="form-control" placeholder="Enter your email">
                                                    @error('email')
                                                    <span class="small text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">University Batch <span style="color:red">*</span></label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example" name="batch" id="batch">
                                                        <option selected value="" >Select Batch</option>
                                                        <option value="1">1st</option>
                                                        <option value="2">2nd</option>
                                                        <option value="3">3th</option>
                                                        @php for($i=4;$i<=57 ;$i++){ @endphp
                                                            <option value="{{$i}}">{{$i}}th</option>
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
                                                    <input type="text" name="session"class="form-control" placeholder="2021 - 2022">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Passing Year</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example" name="passing_year">
                                                        <option selected>Select Passing Year</option>
                                                        @php for($i=2023;$i>=1973 ;$i--){ @endphp
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @php } @endphp 
                                                       
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Hall</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example"name="hall">
                                                        <option value="" selected>Select Hall</option>
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
                                                        <option value="" selected >Select T-shirt size</option>
                                                        <option value="s">s</option>
                                                        <option value="m">m</option>
                                                        <option value="l">l</option>
                                                        <option value="xl">xl</option>
                                                        <option value="xxl">xxl</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                    <label for="formFile" class="form-label">Profile Picture <span style="color:red">*</span>
                                                    </label>
                                                    <input type="file" id="input-file-now-custom-1" name="image" class="dropify" accept="image/*" data-default-file="" />
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
                                                        <option value="" selected >Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Profession</label>
                                                    <input type="text" class="form-control" id="" placeholder=""name="proffession">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="">Organization/Institute</label>
                                                    <input type="text" class="form-control" id="" placeholder=""name="insititute">
                                                </div>
                                            </div>
                                           
                                           
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Present Address <span style="color:red">*</span></label>
                                                    <textarea name="present_address"class="form-control" id="" cols="30" rows="5"></textarea>
                                                    <!-- <input type="text" class="form-control" id="" placeholder="Enter your address"name="present_address"> -->
                                                    @error('present_address')
                                                <span class="small text-danger">{{$message}}</span>
                                                @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Permanent Address</label>
                                                    <textarea name="parmanent_address"class="form-control" id="" cols="30" rows="5"></textarea>
                                                    <!-- <input type="text" class="form-control" id="exampleInputEmail1"placeholder="Enter your nick address"name="parmanent_address"> -->
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <h5 class="red-txt">Event Section</h5>
                                            </div>
                                            <div class="col-12 form-check mb-2">
                                                <input class="form-check-input" name="spouse" type="checkbox" value="2040" id="spouse_chk">
                                                <label class="form-check-label" for="spouse_chk">
                                                Spouse
                                                </label>
                                            </div>
                                            <div class="col-12" id="spouse">
                                                <div class="row g-3 box-event">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Name</label>
                                                            <input type="text" name="spouse[name]" class="form-control spouse" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                   <input type="hidden" name="spouse[amount]" value="1530">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">T-shirt Size</label>
                                                                <select class="form-select form-select spouse"  name="spouse[size]" aria-label=".form-select-sm example">
                                                                <option value="" selected >Select T-shirt size</option>
                                                                <option value="s">s</option>
                                                                <option value="m">m</option>
                                                                <option value="l">l</option>
                                                                <option value="xl">xl</option>
                                                                <option value="xxl">xxl</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-12 form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="1530" id="children_chk">
                                                <label class="form-check-label" for="children_chk">
                                                Children (above 5)
                                                </label>
                                            </div>
                                            <div class="col-12" id="children">
                                                <div class=" text-end">
                                                    <div class="btn btn-primary prod-add-oad"><span>+</span></div>
                                                    <div class="btn btn-info prod-add-ore"><span>-</span></div>
                                                </div>
                                                <div class="add_child">
                                                    <ul>
                                                        <li>
                                                            <div class="row g-3 box-event">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="">Name</label>
                                                                        <input type="text" name="childen[name][]" class="form-control children" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="">Age</label>
                                                                        <input type="text" name="childen[age][]" class="form-control c_age children" id="c_age" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="childen[amount]" value="1020">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="">T-shirt Size</label>
                                                                            <select class="form-select form-select children" name="childen[size][]" aria-label=".form-select-sm example">
                                                                            <option value="" selected >Select T-shirt size</option>
                                                                            <option value="s">s</option>
                                                                            <option value="m">m</option>
                                                                            <option value="l">l</option>
                                                                            <option value="xl">xl</option>
                                                                            <option value="xxl">xxl</option>
                                                                        </select> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-12 form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="1530" id="driver_chk">
                                                <label class="form-check-label" for="driver_chk">
                                                Drivers
                                                </label>
                                            </div>
                                            <div class="col-12" id="driver">
                                                <div class="row g-3 box-event">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control driver" name="driver[name]" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="driver[amount]" value="1020">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Age</label>
                                                            <input type="text" class="form-control driver" name="driver[age]" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="3060" id="guest_chk">
                                                <label class="form-check-label" for="guest_chk">
                                                Guest
                                                </label>
                                            </div>
                                            <div class="col-12" id="guest">
                                                <div class="row g-3 box-event">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control guest" name="guest[name]" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="guest[amount]" value="2040">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Age</label>
                                                            <input type="number" class="form-control guest" name="guest[age]"  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">T-shirt Size</label>
                                                                <select class="form-select form-select guest" name="guest[size]" aria-label=".form-select-sm example">
                                                                <option value="" selected >Select T-shirt size</option>
                                                                <option value="s">s</option>
                                                                <option value="m">m</option>
                                                                <option value="l">l</option>
                                                                <option value="xl">xl</option>
                                                                <option value="xxl">xxl</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Total Participent</label>
                                                    <input type="number" readonly class="form-control" id="total_partticipent" name="total_partticipent" value="1" placeholder="1" >
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Total Amount</label>
                                                    <input type="number" class="form-control" id="total_amount"value="2040" name="total_amount"  placeholder="" readonly>
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
 @section('js')
  <script>
    $(document).ready(function() {
        let total=0;
        var bat=0;
        let n=1;
        let age=0;
        let age1=0;
        $('#batch').on('change',function(){
            var batch= $(this).val();
            if(batch<53){
               
                if(bat==0){
                    bat=1;
                    total=total+2040;
                    $('#total_amount').val(total);
                }
                if(bat==2)
                {
                    bat=1;
                    total=total+1020;
                    $('#total_amount').val(total);
                }
            }
            else{
                
                if(bat==0){
                    bat=2;
                    total=total+1020;
                    $('#total_amount').val(total);
                }
                if(bat==1)
                {
                    bat=2;
                    total=total-1020;
                    $('#total_amount').val(total);
                }
            } 
        })
       
       
       
       
        $('#spouse').hide();
        var count=0;
        $("#spouse_chk").on( "click",function(){
            if(count==1)
            {
                //$('#spouse').hide();
                $('#spouse').delay("slow").fadeOut();
                count=0;
                total=total-1530;
                n=n-1;
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.spouse').val(null);
                $('.spouse').attr('required', false);
            }
            else{
                $('#spouse').delay("slow").fadeIn();
                //$('#spouse').show();
                count=1;
                total=total+1530;
                n=n+1;
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.spouse').attr('required', true);
            }    
        });
        $('#children').hide();
        var count1=0;
        $("#children_chk").on( "click",function(){
            if(count1==1)
            {
                $('#children').delay("slow").fadeOut();
                count1=0;
                if(age==0){
                    total=total-1020;
                    }
                    n=n-1;
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                 $('.children').val(null);
                 $('.children').attr('required', false);
            }
            else{
                $('#children').delay("slow").fadeIn();
                    age1=0;
                    age=0;
                count1=1;
                total=total+1020;
                n=n+1;
            $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.children').attr('required', true);
            }    
        });
        $('#driver').hide();
        var count2=0;
        $("#driver_chk").on( "click",function(){
            if(count2==1)
            {
                $('#driver').delay("slow").fadeOut();
                count2=0;
                total=total-1020;
                n=n-1;
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.driver').val(null);
                $('.driver').attr('required', false);
            }
            else{
                $('#driver').delay("slow").fadeIn();
                count2=1;
                total=total+1020;
                n=n+1;
            $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.driver').attr('required', true);
            }    
        });
        $('#guest').hide();
        var count3=0;
        $("#guest_chk").on( "click",function(){
            if(count3==1)
            {
                $('#guest').delay("slow").fadeOut();
                count3=0;
                total=total-2040;
                n=n-1;
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.guest').val(null);
                $('.guest').attr('required', false);
            }
            else{
                $('#guest').delay("slow").fadeIn();
                count3=1;
                total=total+2040;
                n=n+1;
            $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.guest').attr('required', true);
            }    
        });
       
        $('.c_age').on('focusout',function(){
            if($(this).val()<6)
            {
                if(age==0){
                age=1;
                age1=1;
                total=total-1020;
                $('#total_amount').val(total);}
            }
            else{
                if(age1==1){
                    age1=0;
                    age=0
                    total=total+1020;
                    $('#total_amount').val(total);
                }
            }
        });
        var counter=1;
        //PRODUCT SPECIFICATION LIST ADD - APPEND
        $(".prod-add-oad").on('click', function() {
        $(".add_child ul li:last-child").after('<li><div class="row g-3 box-event"><div class="col-12"><div class="mb-3"><label for="">Name</label><input type="text" name="childen[name][]" class="form-control" id="" placeholder=""><input type="hidden" name="childen[amount]" value="1020"></div></div><div class="col-12"><div class="mb-3"><label for="">Age</label><input type="text" name="childen[age][]" class="form-control c_age" id="c_age" placeholder=""></div></div><div class="col-12"><div class="mb-3"><label for="">T-shirt Size</label><select class="form-select form-select" name="childen[size][]" aria-label=".form-select-sm example"><option selected>s</option><option value="1">m</option><option value="2">l</option><option value="3">xl</option><option value="3">xxl</option></select> </div></div></div></li>');
        counter=counter+1;
        total=total+1020;
        n=n+1;
        $('#total_partticipent').val(n);
        $('#total_amount').val(total);
        if(counter>1){
            $('#children_chk').attr('disabled', true);
        }
        });
        //PRODUCT SPECIFICATION LIST REMOVE - APPEND
        $(".prod-add-ore").on('click', function() {
            
            var _prodspec = $(".add_child").length;
            if(counter >= 2){
                $(".add_child ul li:last-child").remove();
                counter=counter-1;
                total=total-1020;
                n=n-1;
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                if(counter==1){
                    $('#children_chk').attr('disabled', false);
                }
            }
            
            else{
                alert("Sorry! you are not allowed to remove the last one.");
            }
        });
        
    });
  </script>
  @endsection