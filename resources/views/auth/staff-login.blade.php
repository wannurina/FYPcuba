@extends('layouts.app1')
<link rel="stylesheet" href="css/login.css" type="text/css" media="all" /><!-- Style-CSS -->
@section('content')

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
                     <p>Login as Staff</p>
                 </div>
                 <div class="form-right-inf">
                      <form method="POST" action="{{ route('staff.login') }}">
                          @csrf
                          <div class="forms-gds1 editContent" data-selector=".editContent" style="">
                            <div class="form-group row">
                                <label for="StaffNo" class="col-md-4 col-form-label text-md-right">{{ __('Staff No') }}</label>

                                <div class="col-md-6">
                                    <input id="StaffNo" type="StaffNo" class="form-control @error('StaffNo') is-invalid @enderror" name="StaffNo" value="{{ old('StaffNo') }}" required autocomplete="StaffNo" autofocus>

                                    @error('StaffNo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                    Login</a></button>
                                  </div>
                              </div>
                          </div>
                          <h6 class="already editContent" data-selector=".editContent" style="outline: none; cursor: inherit;"><a href="{{ url('/') }}"> Not a staff?</a></h6>
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
