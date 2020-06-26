@extends('layouts.app2')

@section('content')

    <div class="container">
            <br><br>
            <!-- progress bar -->
            <div class="container">
                <ul class="progress_bar">
                    <li>Profile</li>
                    <li class="active">Vehicle Information</li>
                    <li>Payment</li>
                    <li>Confirmation</li>
                </ul>
            </div>
            <br><br><br><br>
            dept_company: {{dump(Session::get('dept_company'))}}
            student_level: {{dump(Session::get('student_level'))}}
        <form action="{{route('vehicles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Vehicle Details -->
            <div class="container">
                <div class="form_title"><h3>Particulars for Vehicle</h3></div>

                <div class="Vehicle_info">
                    <div class="Vehicle_info_form">
                        <!-- vehicle Type -->
                        <div class="form-group row">
                            <label for="type" class="col-sm-2 col-form-label" name="type">Vehicle Type</label>
                            <div class="col-sm-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                    {{$mystudent_level = Session::get('student_level')}}
                                    
                                    @if( isset($mystudent_level) )
                                        @if($mystudent_level != 4 )
                                            <input type="radio" id="car" name="type" 
                                            class="custom-control-input" 
                                            value="car" disabled>
                                            <!-- @error('type')
                                            <p class="help is-danger">{{$errors->first('type')}}</p>
                                            @enderror -->
                                        @else
                                            <input type="radio" id="car" name="type" 
                                            class="custom-control-input" 
                                            value="car">
                                        @endif
                                    @endif

                                    {{ $mydept_company = Session::get('dept_company')}}
                                    @if(isset($mydept_company))
                                        <input type="radio" id="car" name="type" 
                                        class="custom-control-input" value="car">
                                    @endif
                                    
                                    {{ $staff_dept = Session::get('staff_dept')}}
                                    @if(isset($staff_dept))
                                        <input type="radio" id="car" name="type" 
                                        class="custom-control-input" value="car">
                                    @endif
                                        <label class="custom-control-label" for="car">Car</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="motorcycle" name="type" 
                                    class="custom-control-input" value="motorcycle">
                                    <label class="custom-control-label" for="motorcycle">Motorcycle</label>
                                </div>
                                <!-- name=vehicle is the array. index 0 is car, index 1 is motorcycle -->
                                <p style="font-size:13px;color:blue;">For Students: Only Final Year UG Students and PG Students are allowed to apply for car stickers</p>  
                            </div>
                        </div>
                        
                        <!-- plate no -->
                        <div class="form-group row">
                            <label for="plate_no" class="col-sm-2 col-form-label">Plate No</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="plate_no" placeholder="Plate No / Registration No">
                            </div>
                        </div>
                        <!-- vehicle model -->
                        <div class="form-group row">
                            <label for="model" class="col-sm-2 col-form-label">Vehicle Model</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="model" placeholder="Model">
                            </div>
                        </div>
                        <!-- vehicle color -->
                        <div class="form-group row">
                            <label for="color" class="col-sm-2 col-form-label">Vehicle Color</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="color" placeholder="Color">
                            </div>
                        </div>
                        <!-- <h6>Documents</h6> -->
            
                        <!-- license upload -->
                        <div class="form-group row">
                            <label for="upload_license" class="col-sm-2 col-form-label">Driving License</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="upload_license">                               
                            </div>
                        </div>
                        <!-- roadtax upload -->
                        <div class="form-group row">
                            <label for="upload_roadtax" class="col-sm-2 col-form-label">Roadtax</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="upload_roadtax">                               
                            </div>
                        </div>
                        <!-- button submit -->
                        <div class="form-group row  ">
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                        </div>  
                    </div>
                </div>
                
            </div>

        </form> 
        
    </div>

@endsection
<!-- <ol style="font-size:13px;color:blue;float:left;">
Please enclose the photocopy of the following documents:
<li>Matric Card / Staff Card / Contractor Card</li>
<li>Valid Driving License</li>
<li>Road Tax</li>
</ol>
<p style="font-size:13px;color:red;float:left;">Instructions: </p>
<p style="font-size:13px;color:blue;float:left;">Put the documents in ONE pdf file. </p> -->