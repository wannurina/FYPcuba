@extends('layouts.app2')

@section('content') 

<div class="container">
    <br><br>
    <div class="form_title_payment"><h3>Payment</h3></div>
    <div class="Payment_info">
        <form action="">
            <div class="form-group row">
                <label for="amount" class="col-sm-4 col-form-label">Amount (RM)</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="amount" 
                    value="{{$sticker_price ?? ''}}">
                </div>
            </div>
        </form>
    </div>



</div>
@endsection