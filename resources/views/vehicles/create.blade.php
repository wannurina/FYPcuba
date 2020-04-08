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
                    <!-- vehicle Type -->
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label" name="type">Vehicle Type</label>
                        <div class="col-sm-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="car" name="type" class="custom-control-input" value="car">
                                <label class="custom-control-label" for="car">Car</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="motorcycle" name="type" class="custom-control-input" value="motorcycle">
                                <label class="custom-control-label" for="motorcycle">Motorcycle</label>
                            </div>
                            <!-- name=vehicle is the array. index 0 is car, index 1 is motorcycle -->  
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
                        </div>
                        

                    </div>
                    <div class="form-group row  ">
                        <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </div>  

                </div>
                
            </div>

        </form> 
        
    </div>

@endsection
