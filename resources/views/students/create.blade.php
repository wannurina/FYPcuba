@extends('layouts.app2')

@section('content')

@if(isset($student))
<section class="form-26">
    <div class="form-26-mian">
        <div class="layer">
            <!-- Student Details -->
            <div class="container">
                <h3 class="display-4">Complete your Profile</h3>
                <form action="{{route('students.update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <!-- Name -->
                    <div class="form-group row mt-5">
                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Name" value="{{$student->Name}}" disabled>
                        </div>
                    </div>

                    <!-- Matric No & Passport NO/IC-->
                    <div class="form-group row">
                        <label for="MatricNo" class="col-sm-2 col-form-label">Matric No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="MatricNo" value="{{$student->MatricNo}}" disabled>
                        </div>

                        <label for="IC" class="col-sm-2 col-form-label">IC/Passport No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="IC_passport" value="{{$student->IC_passport}}" disabled>
                        </div>
                    </div>
                    <!-- Kuliyyah & Level-->
                    <div class="form-group row">
                        <label for="Kuliyyah" class="col-sm-2 col-form-label">Kuliyyah</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="Kuliyyah" value="{{$student->Kuliyyah}}" disabled>
                        </div>

                        <label for="Level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="Level" value="{{$student->Level}}" disabled>
                        </div>
                    </div>
                    <!-- USER NEED TO INPUT THEIR INFO -->
                    <!-- Address -->
                    <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Address" placeholder="Current Address">
                        </div>
                    </div>
                    <!-- Postcode,City,State -->
                    <div class="form-group row">
                        <label for="Postcode" class="col-sm-2 col-form-label">Postcode</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="Postcode" placeholder="Postcode">
                        </div>

                        <label for="City" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="City" placeholder="City">
                        </div>

                        <label for="State" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="State" placeholder="State">
                        </div>
                    </div>
                    <!-- Phone No & Email-->
                    <div class="form-group row">
                        <label for="PhoneNo" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="PhoneNo" placeholder="Phone number">
                        </div>

                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="Email" placeholder="Email">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>   
    </div>
</section>
@else
NO STUDENT 
@endif
@endsection