<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
//        return $request->input();
        $email = $request->input("email");
        $password = $request->input("password");
        $loginCount = DB::Table('super_admin_logins')
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->count();
        if ($loginCount > 0) {
            $superAdminData = DB::select("select id,name from super_admin_logins where email='$email'");
            $superAdminName = $superAdminData[0]->name;
            $superAdminId = $superAdminData[0]->id;
            Session::put('superAdmin', ['email' => $email, 'superAdminName' => $superAdminName, 'superAdminId' => $superAdminId]);
            return view('welcome');
        } else {
            return redirect()->back()->with("error", "Email or Password may be wrong");
        }

    }


    public function logout(Request $request)
    {
        $request->session()->flush('superAdmin');
        return redirect('/admin');
    }

    public function dashboard()
    {
        return view('welcome');
    }
}
