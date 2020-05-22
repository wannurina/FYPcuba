@extends('layouts.app2')
@section('content')
@if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif


    <div class="container">
        <br></br>
        <form action="{{route('payments.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Payment Details -->
            <div class="container">
                <div class="form_title_payment"><h3>Particulars for Payment Details</h3></div>
                
                <div class="Payment_info">
                
                                
                    <!-- Payment details -->
                    <div class="form-group row">
                        <label for="amount" class="col-sm-4 col-form-label">Amount of sticker paid</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="amount" placeholder="Amount">
                        </div>
                    </div>

                    <!-- documents upload -->
                    <div class="form-group row">
                        <label for="upload_receipt" class="col-sm-4 col-form-label">Uploads your receipt here</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="upload_receipt" placeholder="Document Uploads">
                        </div>
                        

                    </div>
                    <!-- buttons -->
                    <div class="form-group row">
                    
                        <div class="col-md-7">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>

                </div>
                
            </div>

        </form> 
        

   


    </div>

    

@endsection
