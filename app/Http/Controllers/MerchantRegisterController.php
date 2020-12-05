<?php

namespace App\Http\Controllers;

use App\MerchantRegister;
use App\Zone;
use DB;
use Illuminate\Http\Request;

//for encrypting of password

class MerchantRegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $zones = Zone::all();
        return view('MerchantRegister', compact('zones'));
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
        $mregister = new MerchantRegister();
        $mregister->b_name = $request->b_name;
        $mregister->f_name = $request->f_name;
        $mregister->M_name = $request->M_name;
        $mregister->l_name = $request->l_name;
        $mregister->address = $request->address;
        $mregister->zone = $request->zone;
        $mregister->pincode = $request->pincode;
        $mregister->phone = $request->phone;
        $mregister->email = $request->email;
        $mregister->password = $request->password;
        $mregister->password_confirmation = $request->password_confirmation;
        $mregister->save();
        //code for insert data in the user table
        $name = $request->input('f_name');
        $email = $request->input("email");
//        for password encryption
//        $password = Crypt::encrypt($request->input('password'));
        $password = $request->input('password');
        $role = "ROLE_MERCHANT";
        $insertQuery = DB::insert("insert into user_login (name,email,password,role) values (?,?,?,?)", [$name, $email, $password, $role]);
        if ($insertQuery) {
            return redirect()->back()->with('message', 'Registration Successful..!!');
        }
        return redirect()->back()->with('message', 'Registration Successful..!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\MerchantRegister $merchantRegister
     * @return \Illuminate\Http\Response
     */
    public function show(MerchantRegister $merchantRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\MerchantRegister $merchantRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(MerchantRegister $merchantRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\MerchantRegister $merchantRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MerchantRegister $merchantRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\MerchantRegister $merchantRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(MerchantRegister $merchantRegister)
    {
        //
    }
}
