@extends('frontend.layout.master')
@section('content')

                        <!-- main content section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="head-reg my-5 text-center box-reg">
                                    <p>Event Section</p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-8 offset-md-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 event-box">

                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Spouse
                                            </label>
                                        </div>
                                        <form class="row g-3 box-event">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Age</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">T-shirt Size</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example">
                                                        <option selected>s</option>
                                                        <option value="1">m</option>
                                                        <option value="2">l</option>
                                                        <option value="3">xl</option>
                                                        <option value="3">xxl</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </form>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Number of children
                                            </label>
                                        </div>
                                        <form class="row g-3 box-event">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Age</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">T-shirt Size</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example">
                                                        <option selected>s</option>
                                                        <option value="1">m</option>
                                                        <option value="2">l</option>
                                                        <option value="3">xl</option>
                                                        <option value="3">xxl</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </form>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Number of Drivers
                                            </label>
                                        </div>
                                        <form class="row g-3 box-event">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Age</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Number of guest
                                            </label>
                                        </div>
                                        <form class="row g-3 box-event">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Age</label>
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">T-shirt Size</label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example">
                                                        <option selected>s</option>
                                                        <option value="1">m</option>
                                                        <option value="2">l</option>
                                                        <option value="3">xl</option>
                                                        <option value="3">xxl</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </form>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="">Total Participent</label>
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="">Total Amount</label>
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="mb-2">
                                                <button type="button" class="btn btn-outline-danger">Cancel</button>
                                                 <button type="button" class="btn btn-outline-secondary">Edit</button>
                                                <button type="button" class="btn btn-outline-info">submit</button>
                                                
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
@endsection