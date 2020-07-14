<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Alert::success('Success Title', 'Success Message');
    return view('welcomepage');
    
});

Auth::routes();

//student punya
Route::get('students/login_form', 'StudentLoginController@login_form')->name('students.login_form');
Route::post('students/login', 'StudentLoginController@login')->name('students.login');
Route::get('students/create/{matric_no}', 'StudentController@create')->name('students.create');
Route::patch('students/update', 'StudentController@update')->name('students.update');

//staff punya
Route::get('staffs/login_form', 'StaffLoginController@login_form')->name('staffs.login_form');    
Route::post('staffs/login', 'StaffLoginController@login')->name('staffs.login');   
Route::get('staffs/create/{staff_no}', 'StaffController@create')->name('staffs.create');
Route::patch('staffs/update', 'StaffController@update')->name('staffs.update');      

//contractor punya
Route::get('contractors/login_form', 'ContractorLoginController@login_form')->name('contractors.login_form');    
Route::post('contractors/login', 'ContractorLoginController@login')->name('contractors.login');
Route::get('contractors/create/{contractor_no}', 'ContractorController@create')->name('contractors.create');
Route::patch('contractors/update', 'ContractorController@update')->name('contractors.update');
     
//vehicle punya
Route::get('vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('vehicles/store', 'VehicleController@store')->name('vehicles.store');
            // Route::get('vehicles/show', 'VehicleController@show')->name('vehicles.show');
Route::get('vehicles/show_car', 'VehicleController@store')->name('vehicles.show_car');
Route::get('vehicles/show_motorcycle', 'VehicleController@store')->name('vehicles.show_motorcycle');



//payment
Route::get('payments/create', 'PaymentController@create')->name('payments.create');
Route::post('payments/store', 'PaymentController@store')->name('payments.store');
Route::post('payments/show', 'PaymentController@show')->name('payments.show');
Route::patch('payments/update', 'PaymentController@update')->name('payments.update');

//debit
Route::get('debits/create', 'DebitController@create')->name('debits.create');
Route::post('debits/store', 'DebitController@store')->name('debits.store');
Route::post('debits/show', 'DebitController@show')->name('debits.show');
Route::get('confirmation', function(){
    return View('confirmation'); 
});
//osem
Route::get('/osem', function () {
    return view('auth.login');
});