<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GJDPCU</title>

    <style>
        body{
            /* font-family:san-sarif; */
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
            }
        .column-13 {
            float: left;
            width: 100%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }
        .column-2 {
            float: left;
            width: 20%;
            font-size:12px;
            /* padding: 10px; */
            /* height: 300px; */
            
            /* Should be removed. Only for demonstration */
        }
        .column-3 {
            float: left;
            width: 46%;
            font-size:12px;
            /* padding: 10px; */
            /* height: 300px; */
           
             /* Should be removed. Only for demonstration */
        }
        .column-4 {
            float: left;
            width: 34%;
           font-size:12px;
            /* padding: 10px; */
             /* Should be removed. Only for demonstration */
        }
        .column-5 {
            float: left;
            width: 100%;
            padding: 10px;
             /* Should be removed. Only for demonstration */
        }
        .column-6 {
            float: left;
            width: 100%;
            padding: 10px;
            /* Should be removed. Only for demonstration */
        }

        .logo-nav{
            padding-left: 15rem;
        }
        .t-text{
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 14px;
            color: #b1040e;
            text-align:center;
        }
        .l-text{
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 14px;
            color: #b1040e;
            text-align:center;
            /* padding-left: 10rem; */
        }
        .box-reg{
            background-color: #FAFAFA;
            padding: 20px;
            border: 2px solid #FAFAFA;
            border-color: #b1040e;
            box-shadow: 5px solid #FAFAFA;
            border-radius: 8px;
            margin-bottom: 20px;
           
            margin-left: 3rem;
            margin-right: 3rem;
        }
        .img-prfl{
            margin-top:10px;
            width: 80px;
            height: 90px;
            margin-right:10px;
        }
        .info{
           line-height: 100%;
           padding: 0;
           margin: 0;

        }
        
        table, td, th {
          border: 1px solid gray;
          background: #fff;
          height: 50px;
          margin: 5px;
        }
        td {
            padding-left:10px
        }

        table {
          width: 100%;
          border-collapse: collapse;
          margin-bottom: 1rem;
        }
    </style>    
</head>

<body>
    <section class="nav-head">
        <div class="container-fluid">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row my-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-3 box-reg">
                                <div class="row" style="margin-bottom:30px">

                                    <div class="column-1">
                                        <div class="invoice-logo">
                                            <img src="https://cuphilosophy.com/frontend/img/lg-1.png" class="logo-nav" alt="...">
                                            <p class="t-text">GOLDEN JUBILEE 2023</p>
                                            <p class="l-text">Department of Philosophy, University of Chittagong.</p>
                                        </div>
                                    </div>

                                    <div class="column-2">
                                        <img src="https://cuphilosophy.com{{$user->image}}" class="img-prfl">
                                        <p style="font-size:12px;  margin-top:0px;"><b>Reg. ID: </b>{{$user->reg_id}}</p>
                                    </div>

                                    <div class="column-3 info">
                                        <p><b>Name: </b>{{$user->name}}</p>
                                        <p><b>Phone: </b>{{$user->mobile}}</p>
                                        <p><b>Email: </b> {{$user->email}}</p>
                                        <p><b>Address: </b>{{$user->present_address}}</p>
                                        <p><b>Batch: </b>{{$user->batch}}th</p>
                                    </div>

                                    <div class="column-4">
                                        <p><b>Invoice-ID: </b>{{$user->reg_id}}</p>
                                        <p><b>Invoice-Date: </b>{{$user->cdt}}</p>
                                        <p><b>Invoice-Status: </b> <span style="background:{{($user->payment_type=='paid')?'#198754':'#dc3545'}}; padding:5px 12px; border-radius:5px; color:white" >{{$user->payment_type}}</span></p>
                                        <p><b>Session: </b>{{$user->session}}</p>
                                    </div>
                                </div>
                                
                                <table class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Person Count</th>
                                        <th>Amount</th>
                                    </tr>
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
                                            <td>Child</td>
                                            <td>{{count($child->name)}}</td>
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
                                    <tr>
                                        <td colspan="3" style="text-align: right"> <b>Total </b> </td>
                                        <td> <b>{{$user->total_amount}} tk.</b> </td>
                                    </tr>   
                                </table>


                                <table  class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Tran. ID</th>
                                        <th>Payment via</th>
                                        <th>Amount</th>
                                    </tr>
                                    @foreach($tran as $id=>$trans)
                                    <tr>
                                        <td>{{$id+1}}</td>
                                        <td>{{$trans->bank_txn}}</td>
                                        <td>{{$trans->card_type}}</td>
                                        <td>{{$trans->amount}} tk.</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div> 
                    </div>
                
                </div>   
            </div>
        </div>
            
    </section>
    

	


</body>
</html>