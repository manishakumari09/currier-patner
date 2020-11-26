<?php

namespace App\Http\Controllers;

use App\MerchantLogin;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

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
//        return $request->input();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $loginQuery = DB::Table('merchant_registers')->where('email', '=', $email)->where('password', '=', $password)->count();
        if ($loginQuery > 0) {
            $request->session()->put('merchant', $email);
            return redirect('merchant-login/success-login');
        }
        return redirect()->back()->with('error','Invalid Email and  Password !');;
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
