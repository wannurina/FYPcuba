@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($staff))
    <table class="table">
        <thead>
            <tr>
                <th>Staff No</th>
                <th>Name</th>
                <th>IC/Passport No</th>
                <th>Department</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>City</th>
                <th>State</th>
                <th>Phone No</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> {{$staff->staff_no}} </td>
                <td> {{$staff->name}}</td>
                <td> {{$staff->ic_passport}}</td>
                <td> {{$staff->dept}}</td>
                <td> {{$staff->address}}</td>
                <td> {{$staff->postcode}}</td>
                <td> {{$staff->city}}</td>
                <td> {{$staff->state}}</td>
                <td> {{$staff->phone_no}}</td>
                <td> {{$staff->email}}</td>
            </tr>
        </tbody>
    </table>

    
    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
    @else
        NO STAFF DATA
    @endif
@endsection