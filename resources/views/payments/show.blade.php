@extends('layouts.app3')

@section('content')
    <br><br><br>
        <!-- progress bar -->
        <div class="container">
            <ul class="progress_bar">
                <li>Profile</li>
                <li>Vehicle Information</li>
                <li class="active">Payment</li>
                <li>Confirmation</li>
                
            </ul>
        </div>
    <div class="header"><h3>Thank you! Your Application is Succesfully Registered. 

    <br><br><br>

    <center>Your Application will be reviewed by Osem first, 
    then we will notify you via email for further information. 
    Please wait until you get the notification from Osem.</center>
        <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row  ">
                            <div class="col-md-6">
                            <button type="submit" class="btn done">Done</button>
                            </div>
                </div>  
                </h3>
        </form>

@endsection