
@extends('frontend.layout.master')
@section('content')
                        <!-- main content section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="head-reg my-5 text-center box-reg">
                                    <p>EVENT REGISTRATION</p>
                                </div>
                            </div>
                            @php $child=json_decode($user->childen);
                            $guest=json_decode($user->guest);
                            $driver=json_decode($user->driver);
                            $spouse=json_decode($user->spouse);
                            
                            @endphp
                            <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
                                @if(session('message'))
                                <div class="alert alert-success">
                                    <span class="close" data-dismiss="alert"></span>
                                    <strong>{{session('message')}}</strong>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 box-reg">
                                        <form class="row g-3" action="{{route('update_event')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                           @if($spouse->name==null)
                                            <div class="col-12 form-check mb-2">
                                                <input class="form-check-input" name="spouse" type="checkbox" value="1530" id="spouse_chk">
                                                <label class="form-check-label" for="spouse_chk">
                                                Spouse
                                                </label>
                                            </div>
                                            <div class="col-12" id="spouse">
                                                <div class="row g-3 box-event">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Name</label>
                                                            <input type="text" name="spouse[name]" class="form-control spouse" value="{{$spouse->name}}" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                   <input type="hidden" name="spouse[amount]" value="1530">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">T-shirt Size</label>
                                                                <select class="form-select form-select spouse"  name="spouse[size]" aria-label=".form-select-sm example">
                                                                <option value="" selected >Select T-shirt size</option>
                                                                <option value="s" {{($spouse->size=='s')?'selected':''}}>s</option>
                                                                <option value="m"{{($spouse->size=='m')?'selected':''}}>m</option>
                                                                <option value="l"{{($spouse->size=='l')?'selected':''}}>l</option>
                                                                <option value="xl"{{($spouse->size=='xl')?'selected':''}}>xl</option>
                                                                <option value="xxl"{{($spouse->size=='xxl')?'selected':''}}>xxl</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <p>Spouse Already Registered</p>
                                            @endif

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
                                                       
                                                    @foreach($child->name as $id=>$name)
                                                        <li>
                                                            <div class="row g-3 box-event">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="">Name</label>
                                                                        <input type="text" name="childen[name][]" value="{{$name}}"class="form-control children" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="">Age</label>
                                                                        <input type="text" name="childen[age][]"value="{{$child->age[$id]}}" class="form-control c_age children" id="c_age" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="childen[amount]" value="1020">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="">T-shirt Size</label>
                                                                            <select class="form-select form-select children" name="childen[size][]" aria-label=".form-select-sm example">
                                                                            <option value="" selected >Select T-shirt size</option>
                                                                            <option value="s" {{($child->size[$id]=='s')?'selected':''}}>s</option>
                                                                            <option value="m"{{($child->size[$id]=='m')?'selected':''}}>m</option>
                                                                            <option value="l"{{($child->size[$id]=='l')?'selected':''}}>l</option>
                                                                            <option value="xl"{{($child->size[$id]=='xl')?'selected':''}}>xl</option>
                                                                            <option value="xxl"{{($child->size[$id]=='xxl')?'selected':''}}>xxl</option>
                                                                        </select> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                            @if($driver->name==null)
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
                                                            <input type="text" class="form-control driver" name="driver[name]" value="{{$driver->name}}" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="driver[amount]" value="1020">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Age</label>
                                                            <input type="text" class="form-control driver" name="driver[age]" value="{{$driver->age}}"id="" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <p>Drivers Already Registered</p>
                                            @endif
                                            @if($guest->name==null)
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
                                                            <input type="text" class="form-control guest" name="guest[name]"value="{{$guest->name}}" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="guest[amount]" value="2040">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">Age</label>
                                                            <input type="number" class="form-control guest" name="guest[age]" value="{{$guest->age}}" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="">T-shirt Size</label>
                                                                <select class="form-select form-select guest" name="guest[size]" aria-label=".form-select-sm example">
                                                                <option value=""  >Select T-shirt size</option>
                                                                <option value="s" {{($guest->size=='s')?'selected':''}}>s</option>
                                                                <option value="m"{{($guest->size=='m')?'selected':''}}>m</option>
                                                                <option value="l"{{($guest->size=='l')?'selected':''}}>l</option>
                                                                <option value="xl"{{($guest->size=='xl')?'selected':''}}>xl</option>
                                                                <option value="xxl"{{($guest->size=='xxl')?'selected':''}}>xxl</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <p>Guest Already Registered</p>
                                            @endif
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Total Participent</label>
                                                    <input type="number" readonly class="form-control" id="total_partticipent" name="total_partticipent" value="{{table('registration','id',session('user'),'total_partticipent')}}" placeholder="1" >
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Total Amount</label>
                                                    <input type="number" class="form-control" id="total_amount"value="0" name="total_amount" placeholder="" readonly>
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
        let total={{table('registration','id',session('user'),'total_amount')}};
        check="{{table('registration','id',session('user'),'payment_type')}}";
        if(check=='paid'){
            total=0;
        }
        var bat=0;
        let n={{table('registration','id',session('user'),'total_partticipent')}};
        let age=0;
        let age1=0;
        
        let child_ck="{{$child->name[0]}}";
        
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
        var sub=0;
        $("#children_chk").on( "click",function(){
            if(count1==1)
            {
                $('#children').delay("slow").fadeOut();
                count1=0;
                if(age==0 && sub==1){
                    total=total-1020;
                    }
                    if(sub==1){
                        n=n-1;
                    }
                   
                $('#total_partticipent').val(n);
                $('#total_amount').val(total);
                $('.children').attr('required', false);
               
            }
            else{
                $('#children').delay("slow").fadeIn();
                    age1=0;
                    age=0;
                    count1=1;
                    if(child_ck==''){
                    sub=1;
                    total=total+1020;
                    n=n+1;
                    }
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