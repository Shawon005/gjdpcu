@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Table</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Table Details</li>
                </ol>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Table</h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.table.update',$table->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="title"  value="{{$table->title}}" required="">
                                <label for="exampleInputuname1">Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Category</label><br><br>
                                <select name="category" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="" >Select Category</option>
                                    <option value="Live"{{($table->category=='Live')?'selected':''}}>Live</option>
                                    <option value="Prod"{{($table->category=='Prod')?'selected':''}}>Prod</option>
                                    <option value="Magasin"{{($table->category=='Magasin')?'selected':''}}>Magasin</option>
                                </select>
                            </div>  
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Date</label><br><br>
                                <select name="date" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Category</option>
                                    <option value="MÅNDAG"{{($table->date=='MÅNDAG')?'selected':''}}>MÅNDAG</option>
                                    <option value="TISDAG"{{($table->date=='TISDAG')?'selected':''}}>TISDAG</option>
                                    <option value="ONSDAG"{{($table->date=='ONSDAG')?'selected':''}}>ONSDAG</option>
                                    <option value="TORSDAG"{{($table->date=='TORSDAG')?'selected':''}}>TORSDAG</option>
                                    <option value="FREDAG"{{($table->date=='FREDAG')?'selected':''}}>FREDAG</option>
                                    <option value="LÖRDAG"{{($table->date=='LÖRDAG')?'selected':''}}>LÖRDAG</option>
                                    <option value="SÖNDAG"{{($table->date=='SÖNDAG')?'selected':''}}>SÖNDAG</option>
                                </select>
                            </div>  
                            <div class="form-group m-b-40">
                            <input type="file" id="input-file-now-custom-1" name="image" class="dropify" data-default-file="{{$table->image}}" />
                                <label for="exampleInputuname2">Post Image</label>
                                <small class="text-danger">Image Should be 760X400</small>
                            </div> 
                            <!-- <div class="form-group m-b-40">
                                
                                <input type="description" class="form-control" id="exampleInputuname1" name="link"value="{{$table->link}}" required="">
                                <label for="exampleInputuname1">Link</label>
                            </div> -->
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control"{{$table->status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.table.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection