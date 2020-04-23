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
                                <p>Login as Student</p>
                            </div>

                            <div class="form-right-inf">
                                <form method="POST" action="{{ route('students.login') }}">
                                    @csrf
                                    <div class="forms-gds1 editContent" data-selector=".editContent" style="">
                                        <div class="form-group row">
                                            <label for="matric_no" class="col-md-4 col-form-label text-md-right">{{ __('Matric No') }}</label>

                                            <div class="col-md-6">
                                                <input id="matric_no" type="matric_no" 
                                                class="form-control @error('matric_no') is-invalid @enderror" 
                                                name="matric_no" value="{{ old('matric_no') }}" 
                                                required autocomplete="matric_no" autofocus>

                                                @error('matric_no')
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
                                    
                                    <h6 class="already editContent" data-selector=".editContent" style="outline: none; cursor: inherit;"><a href="{{ url('/') }}"> Not a student?</a></h6>
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
