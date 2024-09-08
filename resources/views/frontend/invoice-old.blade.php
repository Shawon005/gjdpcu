@extends('frontend.layout.master')
@section('content')
                        <!-- main content section -->
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="row my-3">
                                        <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
                                            <div class="box-reg">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="invoice-logo text-center">
                                                            <img src="{{asset('')}}frontend/img/lg-1.png" class="logo-nav" alt="...">
                                                            <p class="t-text">GOLDEN JUBILEE 2023</p>
                                                            <p class="t-text">Department of Philosophy, University of Chittagong.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-2 my-4">
                                                        <img src="{{$user->image}}" class="img-prfl" style="width: 160px; height: 180px;">
                                                        <br>
                                                        <p style="text-align:center"><b>Reg. ID: </b>{{$user->reg_id}}</p>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-12 col-lg-6 my-4" style="line-height: 183%;">
                                                        <p><b>Name: </b>{{$user->name}}</p>
                                                        <p><b>Phone: </b>{{$user->mobile}}</p>
                                                        <p><b>Email: </b> {{$user->email}}</p>
                                                        <p><b>Address: </b>{{$user->present_address}}</p>
                                                        
                                                        
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4 mt-5">
                                                        <p ><b>Invoice-ID: </b> {{$user->reg_id}}</p>
                                                        <p><b>Invoice-Date: </b>{{$user->cdt}}</p>
                                                        <p><b>Invoice-Status: </b> <span class="badge text-bg-{{($user->payment_type=='paid')?'success':'danger'}}">{{$user->payment_type}}</span></p>
                                                    </div>
                                                </div>
                                                
                                                <table class="table table-bordered  table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Person Count</th>
                                                            <th scope="col">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $child=json_decode($user->childen);
                                                    $guest=json_decode($user->guest);
                                                    $driver=json_decode($user->driver);
                                                    $spouse=json_decode($user->spouse);
                                                    $no=1;
                                                    @endphp
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>{{($user->batch>52)?' Current Student':' Alumni'}}</td>
                                                            <td>1</td>
                                                            <td>{{($user->batch>52)?' 1020.00 tk.':'2040.00 tk.'}}</td>
                                                        </tr>
                                                        @if($user->payment_type!='pending')
                                                        @if($spouse->name!=null)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>Spouse</td>
                                                            <td>1</td>
                                                            <td>1530.00 tk.</td>
                                                        </tr>
                                                        @endif
                                                        @if($guest->name!=null)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>Guest</td>
                                                            <td>1</td>
                                                            <td>2040.00 tk.</td>
                                                        </tr>
                                                        @endif
                                                        @if($child->name[0] !=null)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>Child (above 5 years)</td>
                                                            <td>1</td>
                                                            <td>{{count($child->name)*1020}}.00 tk.</td>
                                                        </tr>
                                                        @endif
                                                        @if($guest->name!=null)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                        <td>Driver</td>
                                                        <td>1</td>
                                                        <td>1020.00 tk.</td>
                                                    </tr>
                                                    @endif
                                                    @endif
                                                        <tr>
                                                            <td colspan="3" class="text-end"> <b>Total</b> </td>
                                                            <td> <b>{{$user->total_amount}} tk.</b> </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <br>

                                                <table class="table table-bordered  table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Tran. ID</th>
                                                            <th scope="col">Payment via</th>
                                                            <th scope="col">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($tran as $id=>$trans)
                                                        <tr>
                                                            <td>{{$id+1}}</td>
                                                            <td>{{$trans->bank_txn}}</td>
                                                            <td>{{$trans->card_type}}</td>
                                                            <td>{{$trans->amount}} tk.</td>
                                                        </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>

                                                <div class="print-btn text-end">
                                                    @if($user->payment_type=='paid')
                                                    <a type="button" href="{{route('pdf')}}"class="btn btn-danger"><i class="fa fa-print" aria-hidden="true"></i> Print</a>  
                                                    @else
                                                    <a href="{{route('admin.payment')}}"class="btn btn-danger">Pay Now</a>
                                                    @endif                       
                                                </div>
                                            </div>
                                        </div>




                                        <!-- <div class="col-sm-12 col-md-12 col-lg-5 mt-3">
                                            <div class="app-box">
                                                <h5 class="red-txt text-center"><b>Application Procedure</b></h5>
                                                <p>Registration fee can be paid from :</p>
                                                <ul class="list-nested">
                                                    <li class="list-group-item"><b>Debit/Credit Card:</b> Visa,Master</li>
                                                    <li class="list-group-item"><b>Mobile Banking:</b> Bkash,Nogod</li>
                                                    <li class="list-group-item"><b>Internet Banking:</b> City Touch,Islami Bank,Bank Asia,Mutual Trust Bank</li>    
                                                </ul> 
                                                <p>The photo must be passport size (300x400 Pixel) color.</p>
                                            </div>
                                        </div> -->
                                    </div> 
                                </div>
                            </div>
                        </div>
@endsection

