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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/district', function () {
    return view('district');
});
Route::get('/zone', function () {
    return view('zone');
});
Route::get('/pickup', function () {
    return view('pickup');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/super-admin', function () {
    return view('super_admin');
});
// Route::get('home', 'HomeController@index');
// Route::post('/districts', 'DistrictController@show');
