@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($vehicle))
    <table class="table">
        <thead>
            <tr>
                <th>Vehicle Type</th>
                <th>Plate No</th>
                <th>Vehicle Model</th>
                <th>Color</th>
                <th>Documents</th>
                
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> {{$vehicle->type}}</td>
                <td> {{$vehicle->plate_no}} </td>
                <td> {{$vehicle->model}}</td>
                <td> {{$vehicle->color}}</td>
                <td> {{$vehicle->upload_docs}}</td>
                
            </tr>
        </tbody>
    </table>

    
    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
    @else
        NO VEHICLE DATA
    @endif
@endsection