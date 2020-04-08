@extends('layouts.app2')

@section('content')

    @if(isset($student))

        <!-- Student Details -->
        <div class="container">
            <br><br>
            <div class="form_title"><h3>Particulars for Student</h3></div>

            <div class="Student_info">
                <h4>Complete your Profile</h4>
                <form action="{{route('students.update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <!-- Name -->
                    <div class="form-group row mt-5">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{$student->name}}" disabled>
                        </div>
                    </div>

                    <!-- Matric No & Passport NO/IC-->
                    <div class="form-group row">
                        <label for="matric_no" class="col-sm-2 col-form-label">Matric No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="matric_no" value="{{$student->matric_no}}" disabled>
                        </div>

                        <label for="ic_passport" class="col-sm-2 col-form-label">IC/Passport No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ic_passport" value="{{$student->ic_passport}}" disabled>
                        </div>
                    </div>
                    <!-- Kuliyyah & Level-->
                    <div class="form-group row">
                        <label for="kuliyyah" class="col-sm-2 col-form-label">Kuliyyah</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="kuliyyah" value="{{$student->kuliyyah}}" disabled>
                        </div>

                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="level" value="{{$student->level}}" disabled>
                        </div>
                    </div>
                    <!-- USER NEED TO INPUT THEIR INFO -->
                    <!-- Address -->
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" placeholder="Current Address">
                        </div>
                    </div>
                    <!-- Postcode,City,State -->
                    <div class="form-group row">
                        <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="postcode" placeholder="postcode">
                        </div>

                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="city" placeholder="city">
                        </div>

                        <label for="state" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="state" placeholder="state">
                        </div>
                    </div>
                    <!-- Phone No & Email-->
                    <div class="form-group row">
                        <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="phone_no" placeholder="without (-)">
                        </div>

                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="email" placeholder="email">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
        <br>
                
    @else
    NO STUDENT 
    @endif
@endsection