@extends('layouts.app2')
@section('content')
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($staff))
    <!-- Staff Details -->
    <div class="container">
        <br><br>
        <div class="form_title"><h3>Particulars for Staff</h3></div>

        <div class="Staff_info">
            <h4>Your Profile is Completed</h4>
            <form action="{{route('staffs.update')}}" method="post">
                @csrf
                @method('PATCH')
                <!-- Name -->
                <div class="form-group row mt-5">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{$staff->name}}" disabled>
                    </div>
                </div>

                <!-- Staff No & Passport NO/IC-->
                <div class="form-group row">
                    <label for="staff_no" class="col-sm-2 col-form-label">Staff No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="staff_no" value="{{$staff->staff_no}}" disabled>
                    </div>

                    <label for="ic_passport" class="col-sm-2 col-form-label">IC/Passport No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="ic_passport" value="{{$staff->ic_passport}}" disabled>
                    </div>
                </div>
                <!-- Department -->
                <div class="form-group row">
                    <label for="dept" class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="dept" value="{{$staff->dept}}" disabled>
                    </div>

                </div>
                <!-- USER NEED TO INPUT THEIR INFO -->
                <!-- Address -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" value="{{$staff->address}}">
                    </div>
                </div>
                <!-- Postcode,City,State -->
                <div class="form-group row">
                    <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="postcode" value="{{$staff->postcode}}">
                    </div>

                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="city" value="{{$staff->city}}">
                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state" value="{{$staff->state}}">
                    </div>
                </div>
                <!-- Phone No & Email-->
                <div class="form-group row">
                    <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone_no" value="{{$staff->phone_no}}">
                    </div>

                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="email" value="{{$staff->email}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Update</button>
                
            </form>
            <form action="{{route('vehicles.create')}}" method="get">
                <input type="hidden" name="staff_dept" value="{{$staff->dept}}">
                <button class="btn btn-info" type="submit">Add Vehicle</button>
            </form>
        </div>
    </div>

    
</div>
    @else
        NO STAFF DATA
    @endif
@endsection