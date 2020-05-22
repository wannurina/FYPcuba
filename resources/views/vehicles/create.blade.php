@extends('layouts.app2')

@section('content')

    <div class="container">
        <br></br>
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
                                    
                                    @if(isset($student_level))
                                        @if($student_level != 4 )
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
                                        @if(isset($dept_company))
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

                        <!-- documents upload -->
                        <div class="form-group row">
                            <label for="upload_docs" class="col-sm-2 col-form-label">Uploads</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="upload_docs" placeholder="Document Uploads">
                                <ol style="font-size:13px;color:blue;float:left;">
                                Please enclose the photocopy of the following documents:
                                    <li>Matric Card / Staff Card / Contractor Card</li>
                                    <li>Valid Driving License</li>
                                    <li>Road Tax</li>
                                </ol>
                                <p style="font-size:13px;color:red;float:left;">Instructions: </p>
                                <p style="font-size:13px;color:blue;float:left;">Put the documents in ONE pdf file. </p>
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
