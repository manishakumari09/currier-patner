<?php

namespace App\Http\Controllers;

use App\MerchantLogin;
use Auth;
use DB;
use Illuminate\Http\Request;
use Session;
use Validator;

class MerchantLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('MerchantLogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\MerchantLogin $merchantLogin
     * @return \Illuminate\Http\Response
     */
    public function show(MerchantLogin $merchantLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\MerchantLogin $merchantLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(MerchantLogin $merchantLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\MerchantLogin $merchantLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MerchantLogin $merchantLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\MerchantLogin $merchantLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(MerchantLogin $merchantLogin)
    {
        //
    }

    function checkLogin(Request $request)
    {
////        return $request->input();
////        $this->validate($request, [
////            'email' => 'required|email',
////            'password' => 'required'
////        ]);
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $loginQuery = DB::Table('merchant_registers')->where('email', '=', $email)->where('password', '=', $password)->count();
//        if ($loginQuery > 0) {
//            $request->session()->put('merchant', $email);
//            return redirect('merchant-login/success-login');
//        }
//        return redirect()->back()->with('errors', 'Invalid Email and  Password !');;
        //        return $request->input();
        $email = $request->input('email');
        $password = $request->input('password');
        $Count = DB::Table('user_login')
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->count();
        if ($Count > 0) {
            $sessionData = DB::select("select id,name,email,role from user_login where email='$email'");
//            $name = $sessionData[0]->name;
            $id = $sessionData[0]->id;
            $role = $sessionData[0]->role;
            $email = $sessionData[0]->email;
            if ($role == "ROLE_MERCHANT") {
                $merchantSessionData = DB::select("select id,f_name,m_name,l_name,email from merchant_registers where email='$email'");
                Session::put('merchant', ['email' => $merchantSessionData[0]->email, 'name' =>  $merchantSessionData[0]->fName.' '.$merchantSessionData[0]->mName.' '.$merchantSessionData[0]->lName, 'id' => $merchantSessionData[0]->id, 'role' => $role]);
                return redirect('/MerchantDashboard');
            } else if ($role == "ROLE_PICKUP_POINT_MANAGER") {
                $pickupPointManagerSessionData = DB::select("select id,fName,lName,mName,email employeeType from employees where email='$email'");
                Session::put('pp_manager', ['email' => $email, 'name' => $pickupPointManagerSessionData[0]->fName.' '.$pickupPointManagerSessionData[0]->mName.' '.$pickupPointManagerSessionData[0]->lName, 'id' => $pickupPointManagerSessionData[0]->id, 'role' => $pickupPointManagerSessionData[0]->employeeType]);
                return redirect('/PPManagerDashboard');
            } else if ($role == 'ROLE_DELIVERY_BOY') {
                $deliveryBoySessionData = DB::select("select id,fName,lName,mName,email employeeType from employees where email='$email'");
                Session::put('delivery_boy', ['email' => $email, 'name' =>  $deliveryBoySessionData[0]->fName.' '.$deliveryBoySessionData[0]->mName.' '.$deliveryBoySessionData[0]->lName, 'id' => $id, 'role' => $role]);
                return redirect('/DeliveryBoyDashboard');
            } else {
                return redirect()->back()->with("error", "Email or Password may be wrong");
            }
        } else {
            return redirect()->back()->with("error", "Email or Password may be wrong");
        }

    }

    function successLogin()
    {
        return view('successlogin');
    }


    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('merchant-login');
    }

}
