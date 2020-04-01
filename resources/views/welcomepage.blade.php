@extends('layouts.app1')

@section('content')

<!-- /form-26-section -->
<section class="form-26">
      <div class="form-26-mian">
     <div class="layer">
   <div class="wrapper">
   <div class="form-inner-cont">
       <div class="forms-26-info">
          <h2>IIUM Vehicle Registration System</h2>
                     <p>Apply Your Sticker Now!</p>
       </div>
       <div class="form-right-inf">
        @guest('student') 
         <form action="{{route('students.login_form')}}">      <!-- to get to student login -->
             

              <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
                <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
                {{ __('Login As Student') }}</button>
              </div>
         </form>
         @endauth
         @auth('student')
              <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout as Student') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
         @endguest

         <form action="staff/login_form">
                  @csrf
                  <div class="forms-gds">
              <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
                <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
                  Login as Staff</button>
              </div>


         </form>

         <form action="contractor/login_form">
             @csrf
         <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
           <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
             Login as Contractor</button>
         </div></div>

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
