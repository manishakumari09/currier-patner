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

//Route::get('/super-admin', function () {
//    return view('super_admin');
//});


// Route::get('/zone', 'ZoneController@allList');
// Route::get('/zone', 'ZoneController@zones');
// Route::post('/zone', 'ZoneController@store')->name('zone.store');

##  Merchant ##
//Route::get('/merchant-login', function () {
//    return view('MerchantLogin');
//});
Route::get("/merchant-register", "MerchantRegisterController@index");
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

# Employee Section #
//Route::get('/employee', function () {
//    $zones = Zone::all();
//    $employeeCode = IdGenerator::generate(['table' => 'employees', 'field' => 'employeeCode', 'length' => 10, 'prefix' => 'EMP-']);
//    return view('employee', ['employeeCode' => $employeeCode], compact('zones'));
//});

Route::get("/employee", 'EmployeeController@index');
Route::post('/employee-registration', 'EmployeeController@store')->name('employee-register.store');

#consignment Section #
Route::get('/consignment-entry', 'ConsignmentController@index');
Route::post('/create-consignment', 'ConsignmentController@store')->name('create-consignment.store');


Route::get('/consignment-allocation-to-pp-manager', 'ConsignmentController@consignmentAllocationToPpManager');
#consignment assign to pp manager
Route::put('/assign-consignment-to-pp-manager{id}', 'ConsignmentController@assignToPPManager');


#consignment receiver
Route::get('/consignment-receiver', 'ConsignmentController@consignmentReceiver');
Route::put('/change-consignment-received-status{id}', 'ConsignmentController@changeConsignmentReceivedStatus');

#=======================================#
#consignment Allocation to delivery boy#
#========================================#
Route::get('/consignment-allocation-to-delivery-boy', 'ConsignmentController@consignmentAllocationToDeliveryBoy');
Route::put('/assign-consignment-to-delivery-boy{id}', 'ConsignmentController@assignConsignmentToDeliveryBoy');
Route::get('/consignment-received-by-delivery-boy', 'ConsignmentController@consignmentReceivedByDeliveryBoy');
Route::put('/change-received-status-of-delivery-boy{id}', 'ConsignmentController@changeReceivedStatusByDeliveryBoy');


#=======================================#
#SuperAdmin Section#
#========================================#
Route::get('/admin', 'SuperAdminController@index');
Route::post('/super-admin-login', 'SuperAdminController@login');
Route::get('/super-admin-dashboard', 'SuperAdminController@dashboard');
Route::get('/super-admin-logout', 'SuperAdminController@logout');
Route::get('/MerchantDashboard', function () {
    return view('MerchantDashboard');
});
Route::get('/PPManagerDashboard', function () {
    return view('PPManagerDashboard');
});
Route::get('/DeliveryBoyDashboard', function () {
    return view('DeliveryBoyDashboard');
});
Route::get('/CompanyDashboard', function () {
    return view('CompanyDashboard');
});



