<?php

namespace App\Http\Controllers;

use App\Employee;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $employee = new Employee();
            $employee->employeeCode = $request->input('employeeCode');
            $employee->fName = $request->input('fName');
            $employee->lName = $request->input('lName');
            $employee->mName = $request->input('mName');
            $employee->gender = $request->input('gender');
            $employee->religion = $request->input('religion');
            $employee->maritalStatus = $request->input('maritalStatus');
            $employee->dateOfBirth = $request->input('dateOfBirth');
            $employee->email = $request->input('email');
            $employee->password = $request->input('password');
            $employee->phoneNo = $request->input('phoneNo');
            $employee->address1 = $request->input('address1');
            $employee->address2 = $request->input('address2');
            $employee->district = $request->input('district');
            $employee->zone = $request->input('zone');
            $employee->pickupPoint = $request->input('pickupPoint');
            $employee->dateOfJoining = $request->input('dateOfJoining');
            $employee->employeeType = $request->input('role');
            $employee->save();
            //code for insert data in the user table
            $name = $request->input('fName');
            $email = $request->input("email");
            $password = $request->input('password');
            $role = $request->input('role');
            DB::insert("insert into user_login (name,email,password,role) values (?,?,?,?)", [$name, $email, $password, $role]);
            return redirect()->back()->with('status', 'Registration Successful..!!');
        } catch (Exception $e) {
//                return redirect('/employee')->with('failed', "Failed to register please try after sometime !!");
            return redirect()->back()->with('status', 'Failed to register please try after sometime !!');
        }
    }

}
