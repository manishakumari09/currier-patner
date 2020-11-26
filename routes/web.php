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
// Route::get('/wel', function () {
//     return view('welcome');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/district', function () {
    return view('district');
});
Route::get('/zone', function () {
    return view('zone');
});
// Route::post('zone_submit','ZoneController@store');

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
// Route::get('/zone', 'ZoneController@allList');
// Route::get('/zone', 'ZoneController@zones');
// Route::post('/zone', 'ZoneController@store')->name('zone.store');


Route::get('/merchant-login', function () {
    return view('MerchantLogin');
});
Route::get('/merchant-register', function () {
    return view('MerchantRegister');
});
// Route::get('/merchantregister_create', 'MerchantRegisterController@create');
// Route::get('merchantregister_submit', 'MerchantRegisterController@store');
Route::get('/merchantregister_create', 'MerchantRegisterController@index');
Route::post('/merchantregister_create', 'MerchantRegisterController@store')->name('merchantregister.store');


// Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@do']);


Route::get('login', 'Auth\LoginController@login')->name('login');

Route::get('/district', 'DistrictController@show');
Route::post('/district_submit', 'DistrictController@store');

/**
 * Developer by Ajeet Yadav
 */
Route::get('/merchant-login', 'MerchantLoginController@index');
Route::post('/merchant-login/check-login', 'MerchantLoginController@checkLogin');
Route::get('/merchant-login/success-login', 'MerchantLoginController@successLogin');
//check weather the user is logged in or not
//Route::get('merchant-login/success-login/', function () {
//    if (!session()->has('merchant')) {
//        return redirect('/merchant-login');
//    } else {
//        return redirect('/merchant-login/success-login');
//    }
//});
Route::get('/merchant-login/logout', 'MerchantLoginController@logout');

