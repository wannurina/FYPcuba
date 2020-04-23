@extends('layouts.app2')
@section('content')
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($student))
    <div class="container">
        <br><br>
        <div class="form_title"><h3>Particulars for Student</h3></div>

        <div class="Student_info">
            <h4>Your Profile is Completed</h4>
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
                <!-- Address -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('address') is-danger @enderror" 
                        name="address" placeholder="Current Address"
                        value="{{$student->address }}" required autocomplete="address">

                        @error('address')
                        <p class="help is-danger">{{$errors->first('address')}}</p>
                        @enderror
                    </div>
                </div>
                <!-- Postcode,City,State -->
                <div class="form-group row">
                    <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('postcode') is-danger @enderror" 
                        name="postcode" placeholder="postcode" 
                        value="{{$student->postcode}}" required autocomplete="postcode">
                            
                        @error('postcode')
                        <p class="help is-danger">{{$errors->first('postcode')}}</p>
                        @enderror
                    </div>

                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('city') is-danger @enderror" 
                        name="city" placeholder="city" 
                        value="{{$student->city}}" required autocomplete="city">

                        @error('city')
                        <p class="help is-danger">{{$errors->first('city')}}</p>
                        @enderror
                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('state') is-danger @enderror" 
                        name="state" placeholder="state" 
                        value="{{$student->state}}" required autocomplete="state">

                        @error('state')
                        <p class="help is-danger">{{$errors->first('state')}}</p>
                        @enderror
                    </div>
                </div>
                <!-- Phone No & Email-->
                <div class="form-group row">
                    <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control @error('phone_no') is-danger @enderror" 
                        name="phone_no" placeholder="without (-)" 
                        value="{{$student->phone_no}}" required autocomplete="phone_no">

                        @error('phone_no')
                        <p class="help is-danger">{{$errors->first('phone_no')}}</p>
                        @enderror
                    </div>

                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control @error('email') is-danger @enderror" 
                        name="email" placeholder="email" 
                        value="{{$student->email}}" required autocomplete="email">

                        @error('email')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-info">Update</button>
                
            </form>
            <form action="{{route('vehicles.create')}}" method="get">
                <input type="hidden" name="student_level" value="{{$student->level}}">
                <button class="btn btn-info" type="submit">Add Vehicle</button>
            </form>
            
        </div>
    </div>
        
</div>
    @else
        NO STUDENT DATA
    @endif
@endsection