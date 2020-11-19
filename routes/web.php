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
// Route::get('/zone', function () {
//     return view('zone');
// });
Route::post('zone_submit','ZoneController@store');
Route::get('/pickup', function () {
    return view('pickup');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/super-admin', function () {
    return view('super_admin');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/consignment-entry', function () {
    return view('ConsigmentEntry');
});
Route::get('/consignment-allocation-to-pp-manager', function () {
    return view('ConsignmentAllocationToPPManager');
});
Route::get('/consignment-receiver', function () {
    return view('ConsignmentReceiver');
});
Route::get('/consignment-allocation-to-delivery-boy', function () {
    return view('ConsignmentAllocationToDeliveryBoy');
});
Route::get('/consignment-received-by-delivery-boy', function () {
    return view('ConsignmentReceivedByDeliveryBoy');
});
Route::get('/', 'ZoneController@allList');
Route::get('/zone', 'ZoneController@zones');
Route::post('/zone', 'ZoneController@store')->name('zone.store');
// Route::get('home', 'HomeController@index');
// Route::post('/districts', 'DistrictController@show');
