@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($contractor))
    <table class="table">
        <thead>
            <tr>
                <th>Contractor No</th>
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
                <td> {{$contractor->contractor_no}} </td>
                <td> {{$contractor->name}}</td>
                <td> {{$contractor->ic_passport}}</td>
                <td> {{$contractor->dept_company}}</td>
                <td> {{$contractor->address}}</td>
                <td> {{$contractor->postcode}}</td>
                <td> {{$contractor->city}}</td>
                <td> {{$contractor->state}}</td>
                <td> {{$contractor->phone_no}}</td>
                <td> {{$contractor->email}}</td>
            </tr>
        </tbody>
    </table>

    
    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
    @else
        NO CONTRACTOR DATA
    @endif
@endsection