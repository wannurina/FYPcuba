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
    return view('welcome');
});

Route::get('showloginStaff', 'StaffLoginController@showlogin')->name('showloginStaff');    
Route::get('showregisterStaff', 'StaffLoginController@showregister')->name('showregisterStaff');
Route::post('staff_login', 'StaffLoginController@login')->name('staff_login');    
Route::post('staff_register', 'StaffLoginController@register')->name('staff_register');    



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');