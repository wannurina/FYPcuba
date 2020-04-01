@extends('layouts.app2')

@section('content')
 <!-- <link rel="stylesheet" href="{{URL::asset('css/styling.css')}}" type="text/css" /> -->
<section class="form-26">
    <div class="form-26-mian">
        <div class="layer">

            <div class="container">
               <br></br>
                <form action="{{route('vehicles.store')}}" method="POST">
                    @csrf
                    <!-- Vehicle Details -->
                    <div class="container">
                        <div class="form_title"><h3>Particulars for Vehicle</h3></div>
                        

                        <div class="Vehicle_info">
                            <!-- vehicle Type -->
                            <div class="form-group row">
                                <label for="veh_type" class="col-sm-2 col-form-label">Vehicle Type</label>
                                <div class="col-sm-4">

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="car" name="vehicle" class="custom-control-input">
                                        <label class="custom-control-label" for="car">Car</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="motorcycle" name="vehicle" class="custom-control-input">
                                        <label class="custom-control-label" for="motorcycle">Motorcycle</label>
                                    </div>
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
                                <label for="veh_model" class="col-sm-2 col-form-label">Vehicle Model</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="veh_model" placeholder="Model">
                                </div>
                            </div>
                            <!-- vehicle color -->
                            <div class="form-group row">
                                <label for="veh_color" class="col-sm-2 col-form-label">Vehicle Color</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="veh_color" placeholder="Color">
                                </div>
                            </div>

                            

                            

                            <!-- documents upload -->
                            <div class="form-group row">
                                <label for="docs_upload" class="col-sm-2 col-form-label">Uploads</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Document Uploads">
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
        </div>   
    </div>       
</section>
@endsection
