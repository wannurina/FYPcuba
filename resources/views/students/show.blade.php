@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($student))
    <table class="table">
        <thead>
            <tr>
                <th>Matric No</th>
                <th>Name</th>
                <th>Kuliyyah</th>
                <th>Level</th>
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
                <td> {{$student->MatricNo}} </td>
                <td> {{$student->Name}}</td>
                <td> {{$student->Kuliyyah}}</td>
                <td> {{$student->Level}}</td>
                <td> {{$student->Address}}</td>
                <td> {{$student->Postcode}}</td>
                <td> {{$student->City}}</td>
                <td> {{$student->State}}</td>
                <td> {{$student->PhoneNo}}</td>
                <td> {{$student->Email}}</td>
            </tr>
        </tbody>
    </table>

    
    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
    @else
        NO STUDENT DATA
    @endif
@endsection