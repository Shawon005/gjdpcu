<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile(string $id)
    {
        $user=DB::table('registration')->where('id',$id)->first();
        return view('frontend.profile-status',compact('user')); 
    }
    public function login(Request $request)
    {
       //dd($request->all());
       session('user');
       $mobile=$request->mobile;
       $pass=$request->password;
       $user=DB::table('registration')->where('mobile',$mobile)->where('password',$pass)->first();
       //dd($user);
       if($user==null){
        return redirect()->back()->with('maessage','Increct password');
       }
       else{
        session(['user'=>$user->id]);
        return view('frontend.profile-status',compact('user'));
       }
    }
    public function password(Request $request)
    {
        $user=DB::table('registration')->where('id',session('user'))->first();
        if($user->password==$request->old_password){
        if($request->new_password==$request->con_password){
            DB::table('registration')->where('id',session('user'))->update([
                'password'=>$request->new_password,
            ]);
            return redirect()->back()->with('message','Password Change Succesfully');
        }
        return redirect()->back()->with('message','Password Not Match');
        }
        return redirect()->back()->with('message','Password Not Match');
    }
    public function logout()
    {
        session(['user'=>null]);
        return redirect()->route('home');
    }
    public function invoice()
    {
        
        $user=DB::table('registration')->where('id',session('user'))->first();
        $tran=DB::table('transaction')->where('user_id',session('user'))->get(); 

        return view('frontend.invoice',compact('user','tran'));
    }
    public function generatePDF()
    {
        $user=DB::table('registration')->where('id',session('user'))->first();
        $tran=DB::table('transaction')->where('user_id',session('user'))->get(); 
        $data = [

            'user' =>$user,

            'tran' =>$tran

        ];


        $pdf = PDF::loadView('frontend/invoice(pdf)', $data);
        return $pdf->download('invoice-'. $user->reg_id .'.pdf');

    }
    public function generatePDFID($id)
    {
        $user=DB::table('registration')->where('id',$id)->first();
        $tran=DB::table('transaction')->where('user_id',$id)->get(); 
        $data = [

            'user' =>$user,

            'tran' =>$tran

        ];


        $pdf = PDF::loadView('frontend/invoice(pdf)', $data);
        return $pdf->download('invoice-'. $user->reg_id .'.pdf');

    }
    public function participant($id)
    {
        $user=DB::table('registration')->where('id',$id)->first();
        return view('frontend.event',compact('user'));
    }
}
