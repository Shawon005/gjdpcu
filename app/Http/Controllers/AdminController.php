<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Storage;
use Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $registers=DB::table('registration')->get();
        return view('Admin.Participant.index',compact('registers'));
    }
    public function index2()
    {
       
        $registers=DB::table('registration')->where('payment_type','paid')->get();
        return view('Admin.Participant.index',compact('registers'));
    }
    public function index3()
    {
        $registers=DB::table('registration')->where('payment_type','pending')->orWhere('payment_type','unpaid')->get();
        return view('Admin.Participant.index',compact('registers'));
    }
    public function invoice($id)
    {
        
        $user=DB::table('registration')->where('id',$id)->first();
        $tran=DB::table('transaction')->where('user_id',$id)->get(); 

        return view('frontend.invoice',compact('user','tran'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'mobile'=>'required|unique:registration,mobile,',
            'email'=>'required',
            'batch'=>'required',
            'image'=>'required', 
            'password'=>'required',
            'present_address'=>'required'
        ]);
       //dd($request->all());
        // try{
        $id=DB::table('registration')->insertGetId([
        'title'=>$request->title,
        'name'=>$request->name,
        'nick_name'=>$request->nick_name,
        't_size'=>$request->t_size,
        'mobile'=>$request->mobile,
        'password'=>$request->password,
        'email'=>$request->email,
        'batch'=>$request->batch,
        'session'=>$request->session,
        'hall'=>$request->hall,
        'blood'=>$request->blood,
        'proffession'=>$request->proffession,
        'insititute'=>$request->insititute,
        'passing_year'=>$request->passing_year,
        'gender' =>$request->gender,
        'present_address' =>$request->present_address,
        'parmanent_address' =>$request->parmanent_address,
        'image' =>$this->saveFile1($request,'image'),
        'spouse'=>json_encode($request->spouse),
        'childen'=>json_encode($request->childen),
        'driver'=>json_encode($request->driver),
        'guest'=>json_encode($request->guest),
        'total_amount'=>$request->total_amount,
        'total_partticipent'=>$request->total_partticipent,
        'payment_type'=>'pending',
        ]);
       // dd($id);
        
       
        DB::table('registration')->where('id',$id)->update([
            'reg_id'=>sprintf("%05d",$id),  
        ]);
       
       if($request->type){
            session(['user_event'=>'false']);
            session(['user'=>$id]);
            return redirect()->route('invoice')->with('message' , 'Registration was successful whitout Event');
       }
       else{
      
        
        //payment
        $url = 'https://sandbox.aamarpay.com/request.php'; // live url https://secure.aamarpay.com/request.php
        $fields = array(
            'store_id' => 'aamarpaytest', //store id will be aamarpay,  contact integration@aamarpay.com for test/live id
            'amount' => $request->total_amount, //transaction amount
            'payment_type' => 'VISA', //no need to change
            'currency' => 'BDT',  //currenct will be USD/BDT
            'tran_id' => rand(1111111,9999999), //transaction id must be unique from your end
            'cus_name' => $request->name,  //customer name
            'cus_email' => $request->email, //customer email address
            'cus_add1' => $request->present_address,  //customer address
            // 'cus_add2' => 'Mohakhali DOHS', //customer address
            // 'cus_city' => 'Dhaka',  //customer city
            // 'cus_state' => 'Dhaka',  //state
            // 'cus_postcode' => '1206', //postcode or zipcode
            'cus_country' => 'Bangladesh',  //country
            'cus_phone' => $request->mobile, //customer phone number
            'cus_fax' => 'Not¬Applicable',  //fax
            // 'ship_name' => 'ship name', //ship name
            // 'ship_add1' => 'House B-121, Road 21',  //ship address
            // 'ship_add2' => 'Mohakhali',
            // 'ship_city' => 'Dhaka', 
            // 'ship_state' => 'Dhaka',
            // 'ship_postcode' => '1212', 
            // 'ship_country' => 'Bangladesh',
            'desc' => 'Registation Paymeny', 
            'success_url' => route('admin.succes'), //your success route
            'fail_url' => route('admin.fail'), //your fail route
            'cancel_url' =>route('admin.cancle',$id), //your cancel url
             'opt_a' => $id,  //optional paramter
            // 'opt_b' => 'Akil',
            // 'opt_c' => 'Liza', 
            // 'opt_d' => 'Sohel',
            'signature_key' => 'dbb74894e82415a2f7ff0ec3a97e4183'); //signature key will provided aamarpay, contact integration@aamarpay.com for test/live signature key

            $fields_string = http_build_query($fields);
     
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_URL, $url);  
  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));	
        curl_close($ch); 

        $this->redirect_to_merchant($url_forward);
    }
        //return redirect()->back()->with('message' , 'Registration was successful!');
    // }
    // catch(\Throwable $th){
    //     return redirect()->back()->with('message' , 'Please Try Again!!!');;
    // }
    }
     function redirect_to_merchant($url) {

        ?>
        <html xmlns="http://www.w3.org/1999/xhtml">
          <head><script type="text/javascript">
            function closethisasap() { document.forms["redirectpost"].submit(); } 
          </script></head>
          <body onLoad="closethisasap();">
          
            <form name="redirectpost" method="post" action="<?php echo 'https://sandbox.aamarpay.com/'.$url; ?>">
               
            </form>
            <!-- for live url https://secure.aamarpay.com -->
          </body>
        </html>
        <?php	
        exit;
    } 
    public function succes(Request $request)
    {
        //dd($request->all());
        DB::table('registration')->where('id',$request->opt_a)->update([
            'payment_type'=>'paid',
            'payment_mode'=>$request->card_type,
        ]);
        DB::table('transaction')->insert([
            'user_id'=>$request->opt_a, 	
            'pg_service_charge_bdt'=>$request->pg_service_charge_bdt, 	
            'amount_original'=>$request->amount_original, 	
            'gateway_fee'=>$request->gateway_fee, 	
            'pg_service_charge_usd'=>$request->pg_service_charge_usd, 	
            'pg_card_bank_name'=>$request->pg_card_bank_name, 	
            'pg_card_bank_country'=>$request->pg_card_bank_country, 	
            'card_number'=>$request-> card_number,	
            'card_holder'=>$request->card_holder, 	
            'status_code'=>$request->status_code, 	
            'pay_status'=>$request->pay_status, 	
            'cus_name'=>$request->cus_name, 	
            'cus_email'=>$request->cus_email, 	
            'cus_phone'=>$request-> cus_phone,	
            'currency_merchant'=>$request->currency_merchant, 	
            'convertion_rate'=>$request->convertion_rate, 	
            'ip_address'=>$request->ip_address, 	
            'other_currency'=>$request-> other_currency,	
            'pg_txnid'=>$request->pg_txnid ,	
            'epw_txnid'=>$request-> epw_txnid,	
            'mer_txnid'=>$request-> mer_txnid,	
            'store_id' =>$request->store_id,	
            'merchant_id'=>$request-> merchant_id,	
            'currency'=>$request->currency, 	
            'store_amount'=>$request->store_amount, 	
            'pay_time'=>$request-> pay_time,	
            'amount'=>$request-> amount,	
            'bank_txn'=>$request-> bank_txn,	
            'card_type'=>$request->card_type, 	
            'reason'=>$request->reason, 	
            'pg_card_risklevel'=>$request-> pg_card_risklevel,	
            'pg_error_code_details'=>$request->pg_error_code_details, 	 	
            'opt_b'=>$request->opt_b, 	
        ]);
        session(['user'=>$request->opt_a]);
        session(['user_event'=>'true']);
        return redirect()->route('invoice')->with('message' , 'Registration was successful!');
    }
    public function fail(Request $request)
    {
        DB::table('registration')->where('id',$request->opt_a)->update([
            'payment_type'=>'unpaid',
        ]);
        session(['user'=>$request->opt_a]);
        return redirect()->route('invoice')->with('message' , 'Registration was successful whitout Payment');
    }
    public function cancle($id)
    {
       
        session(['user'=>$id]);
        return redirect()->route('invoice')->with('message' , 'Registration was successful whitout Payment');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=DB::table('registration')->where('id',$id)->first();
        return view('Admin.Participant.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=DB::table('registration')->where('id',$id)->first();
        return view('frontend.profile_update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $img=$request->image;
        if($img==null)
        {
            $user=DB::table('registration')->where('id',$id)->first();
            $img=$user->image;
        }
        else{
            $img=$this->saveFile($request,'image');
        }
        try{
            DB::table('registration')->where('id',$id)->update([
            'title'=>$request->title,
            'name'=>$request->name,
            'nick_name'=>$request->nick_name,
            't_size'=>$request->t_size,
            'session'=>$request->session,
            'hall'=>$request->hall,
            'blood'=>$request->blood,
            'proffession'=>$request->proffession,
            'insititute'=>$request->insititute,
            'passing_year'=>$request->passing_year,
            'gender' =>$request->gender,
            'present_address' =>$request->present_address,
            'parmanent_address' =>$request->parmanent_address,
            'image' =>$img,
            
            ]);
            return redirect()->back()->with('message' , 'Update was successful!');
        }
        catch(\Throwable $th){
            return redirect()->back()->with('message' , 'Please Try Again!!!');;
        }
    }
    public function update_event(Request $request)
    {
       //dd($request->all());
        // try{
            $user=DB::table('registration')->where('id',session('user'))->first();

            $child=json_decode($user->childen);
            $guest=json_decode($user->guest);
            $driver=json_decode($user->driver);
            $spouse=json_decode($user->spouse);
            if($spouse->name==null){
                $spouse=json_encode($request->spouse);
            }
            else{
                $spouse=$user->spouse;
            }
            if($guest->name==null){
                $guest=json_encode($request->guest);
            }
            else{
                $guest=$user->guest;
            }
            if($driver->name==null){
                $driver=json_encode($request->driver);
            }
            else{
                $driver=$user->driver;
            }
            if($user->payment_type=='paid'){
                $amount=($user->total_amount)+($request->total_amount);
            }
            else{
                $amount=$request->total_amount;
            }
            DB::table('registration')->where('id',session('user'))->update([
                'spouse'=>$spouse,
                'childen'=>json_encode($request->childen),
                'driver'=>$driver,
                'guest'=>$guest,
                'total_amount'=>$amount,
                'total_partticipent'=>$request->total_partticipent,
            
            ]);
            
                //payment
        $url = 'https://sandbox.aamarpay.com/request.php'; // live url https://secure.aamarpay.com/request.php
        $fields = array(
            'store_id' => 'aamarpaytest', //store id will be aamarpay,  contact integration@aamarpay.com for test/live id
            'amount' => $request->total_amount, //transaction amount
            'payment_type' => 'VISA', //no need to change
            'currency' => 'BDT',  //currenct will be USD/BDT
            'tran_id' => rand(1111111,9999999), //transaction id must be unique from your end
            'cus_name' => $user->name,  //customer name
            'cus_email' => $user->email, //customer email address
            'cus_add1' => $user->present_address,  //customer address
            // 'cus_add2' => 'Mohakhali DOHS', //customer address
            // 'cus_city' => 'Dhaka',  //customer city
            // 'cus_state' => 'Dhaka',  //state
            // 'cus_postcode' => '1206', //postcode or zipcode
            'cus_country' => 'Bangladesh',  //country
            'cus_phone' => $user->mobile, //customer phone number
            'cus_fax' => 'Not¬Applicable',  //fax
            // 'ship_name' => 'ship name', //ship name
            // 'ship_add1' => 'House B-121, Road 21',  //ship address
            // 'ship_add2' => 'Mohakhali',
            // 'ship_city' => 'Dhaka', 
            // 'ship_state' => 'Dhaka',
            // 'ship_postcode' => '1212', 
            // 'ship_country' => 'Bangladesh',
            'desc' => 'Registation Paymeny', 
            'success_url' => route('admin.succes'), //your success route
            'fail_url' => route('admin.fail'), //your fail route
            'cancel_url' =>route('admin.cancle',$user->id), //your cancel url
             'opt_a' => $user->id,  //optional paramter
            // 'opt_b' => 'Akil',
            // 'opt_c' => 'Liza', 
            // 'opt_d' => 'Sohel',
            'signature_key' => 'dbb74894e82415a2f7ff0ec3a97e4183'); //signature key will provided aamarpay, contact integration@aamarpay.com for test/live signature key

            $fields_string = http_build_query($fields);
     
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_URL, $url);  
  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));	
        curl_close($ch); 

        $this->redirect_to_merchant($url_forward);
            //return redirect()->back()->with('message' , 'Update was successful!');
        // }
        // catch(\Throwable $th){
        //     return redirect()->back()->with('message' , 'Please Try Again!!!');;
        // }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=DB::table('registration')->where('id',$id)->first();
        if($user->payment_type=="paid"){
            return redirect()->back()->with('message','User Already Paid!');
        }
        else{
            DB::table('registration')->where('id',$id)->delete();
            return redirect()->back()->with('message','Delete Successful!');
        }
        
    }
    function saveFile(Request $request,$input)
    {
        $file = $request->file($input);
        $ext = $file->extension();
        $filename = now()->timestamp.Str::random(20).'.'.$ext;

        $path = 'uploads'.date('/y') . '/' . date('m') . '/';
        $filePath = $path.$filename;
    
        $file->move('storage/uploads'.date('/y') . '/' . date('m') . '/',$filename);
        // Storage::put($filePath, file_get_contents($file));

        return Storage::url($filePath);
    }
    function saveFile1(Request $request,$input)
    {
        $image = $request->file($input);
        $ext = $image->extension();
        //$filename = time().'.'.$image->getClientOriginalExtension();
        $filename = now()->timestamp.Str::random(20).'.'.$ext;

        $destinationPath = 'uploads'.date('/y') . '/' . date('m');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(300, 400, function ($constraint) {
		    // $constraint->aspectRatio();
		})->save($destinationPath.'/'.$filename);
        $destinationPath = 'storage/uploads'.date('/y') . '/' . date('m') . '/' ;
        // $imgFile->save('storage/uploads'.date('/y') . '/' . date('m') . '/',$filename);
        $image->move($destinationPath, $filename);
        // Storage::put($filePath, file_get_contents($file));
        $path = '/uploads'.date('/y') . '/' . date('m') . '/';
        $filePath = $path.$filename;

        return $filePath;
    }

    public function payment()
    {
        $user=DB::table('registration')->where('id',session('user'))->first();
        //payment
        $url = 'https://sandbox.aamarpay.com/request.php'; // live url https://secure.aamarpay.com/request.php
        $fields = array(
            'store_id' => 'aamarpaytest', //store id will be aamarpay,  contact integration@aamarpay.com for test/live id
            'amount' => $user->total_amount, //transaction amount
            'payment_type' => 'VISA', //no need to change
            'currency' => 'BDT',  //currenct will be USD/BDT
            'tran_id' => rand(1111111,9999999), //transaction id must be unique from your end
            'cus_name' => $user->name,  //customer name
            'cus_email' => $user->email, //customer email address
            'cus_add1' => $user->present_address,  //customer address
            // 'cus_add2' => 'Mohakhali DOHS', //customer address
            // 'cus_city' => 'Dhaka',  //customer city
            // 'cus_state' => 'Dhaka',  //state
            // 'cus_postcode' => '1206', //postcode or zipcode
            'cus_country' => 'Bangladesh',  //country
            'cus_phone' => $user->mobile, //customer phone number
            'cus_fax' => 'Not¬Applicable',  //fax
            // 'ship_name' => 'ship name', //ship name
            // 'ship_add1' => 'House B-121, Road 21',  //ship address
            // 'ship_add2' => 'Mohakhali',
            // 'ship_city' => 'Dhaka', 
            // 'ship_state' => 'Dhaka',
            // 'ship_postcode' => '1212', 
            // 'ship_country' => 'Bangladesh',
            'desc' => 'Registation Paymeny', 
            'success_url' => route('admin.succes'), //your success route
            'fail_url' => route('admin.fail'), //your fail route
            'cancel_url' =>route('admin.cancle',$user->id), //your cancel url
            'opt_a' => $user->id,  //optional paramter
            // 'opt_b' => 'Akil',
            // 'opt_c' => 'Liza', 
            // 'opt_d' => 'Sohel',
            'signature_key' => 'dbb74894e82415a2f7ff0ec3a97e4183'); //signature key will provided aamarpay, contact integration@aamarpay.com for test/live signature key

            $fields_string = http_build_query($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_URL, $url);  

        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));	
        curl_close($ch); 

        $this->redirect_to_merchant($url_forward);
    }
}
