@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($car))
    <div class="container">
    <br></br>
              
    <!-- Vehicle Details -->
    <div class="container">
        <div class="form_title"><h3>Particulars for Vehicle</h3></div>
        <form action="{{route('vehicles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="Vehicle_info">
                <div class="Vehicle_info_form">
                    <!-- car Type -->
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label" name="type">Vehicle Type</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="type" placeholder="Car" disabled>
                        </div>
                    </div>
                    <!-- plate no -->
                    <div class="form-group row">
                        <label for="plate_no" class="col-sm-2 col-form-label">Plate No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="plate_no" value="{{$car->plate_no}}" disabled>
                        </div>
                    </div>
                    <!-- car model -->
                    <div class="form-group row">
                        <label for="model" class="col-sm-2 col-form-label">Vehicle Model</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="model" value="{{$car->model}}" disabled>
                        </div>
                    </div>
                    <!-- car color -->
                    <div class="form-group row">
                        <label for="color" class="col-sm-2 col-form-label">Vehicle Color</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="color" value="{{$car->color}}" disabled>
                        </div>
                    </div>
                    <!-- documents upload -->
                    <div class="form-group row">
                        <label for="upload_docs" class="col-sm-2 col-form-label">Uploads</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="upload_docs" value="{{$car->upload_docs}}" disabled>
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="form-group row  ">
                        <div class="col-md-3">
                        <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
                        </div>
                        <div class="col-md-3">
                        <a class="btn btn-info" href="{{route('payments.show')}}">Proceed to Payment</a> </div>
                    </div>
                </div>
                <br></br>
            </div>
        </form>
    </div>

    @else
        NO VEHICLE DATA
    @endif
</div>    
@endsection