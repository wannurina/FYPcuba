@extends('layouts.app2')

@section('content')

@if(isset($payment))

    <!--Payment Details -->
    <div class="container">
        <br><br>
        <center><div class="form_title_payment"><h3>Your application is successfully registered. You can collect your sticker at OSEM during working hours.</h3></div></center>

        <div class="Payment_info">
        <div><center><h3>Please take note your transaction ID for collection sticker purpose.</h3></center></div>

            <form action="{{route('payments.update')}}" method="post">
                @csrf
                @method('PATCH')
                <!-- Transaction ID -->
                <div class="form-group row mt-5">
                    <label for="id" class="col-sm-4 col-form-label">Your transaction ID</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="id" value="00{{$payment->id}}" disabled>
                    </div>
                </div>

                <center> <button type="submit" href="{{route('logout')}}" class="btn btn-info" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</button></center>
                   
        </form>
        </div>
    </div>
    <br>
            
@else
NO TRANSACTION ID
@endif
@endsection