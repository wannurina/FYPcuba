@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="{{URL::asset('css/login.css')}}" type="text/css" /><!-- Style-CSS -->
<!-- /form-26-section -->
    <section class="form-26">        
        <div class="form-26-mian">
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
            
            <div class="layer">
                <div class="wrapper">
                    <div class="form-inner-cont">
                            
                            <div class="forms-26-info">
                                <h2>IIUM Vehicle Registration System</h2>
                                <p>Login as Contractor</p>
                            </div>

                            <div class="form-right-inf">
                                <form method="POST" action="{{ route('contractors.login') }}">
                                    @csrf
                                    <div class="forms-gds1 editContent" data-selector=".editContent" style="">
                                        <div class="form-group row">
                                            <label for="contractor_no" class="col-md-4 col-form-label text-md-right">{{ __('Contractor No') }}</label>

                                            <div class="col-md-6">
                                                <input id="contractor_no" type="contractor_no" class="form-control @error('contractor_no') is-invalid @enderror" name="contractor_no" value="{{ old('contractor_no') }}" required autocomplete="contractor_no" autofocus>

                                                @error('contractor_no')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row  ">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary" >
                                                Login</a></button>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <h6 class="already editContent" data-selector=".editContent" style="outline: none; cursor: inherit;"><a href="{{ url('/') }}"> Not a contractor?</a></h6>
                                </form>
                            </div>

                    </div>
                    <div class="copyright text-center">
                        <p>© <?php echo date("Y");?> All rights reserved | Designed by Zu and Ina</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
 

@endsection
