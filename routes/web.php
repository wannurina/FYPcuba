<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcomepage');
});
// Route::get('/example', function () {
//     return view('students.create');
// });
Auth::routes();

//student punya
Route::get('students/form', 'StudentController@index')->name('students.form');
Route::get('students/login_form', 'StudentLoginController@login_form')->name('students.login_form');
Route::post('students/login', 'StudentLoginController@login')->name('students.login');
Route::get('students/create/{MatricNo}', 'StudentController@create')->name('students.create');
Route::patch('students/update', 'StudentController@update')->name('students.update');



//vehicle punya
Route::get('vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('vehicles/store', 'VehicleController@store')->name('vehicles.store');

//staff punya
Route::get('staff/form', 'StaffController@index')->name('staff.form');
Route::get('staff/login_form', 'StaffLoginController@login_form')->name('staff.login_form');    
Route::post('staff/login', 'StaffLoginController@login')->name('staff.login');       

