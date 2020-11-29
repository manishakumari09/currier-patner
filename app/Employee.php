<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = true;
    /**
     * @var string[]
     */
    protected $fillable = [
        'employeeCode','fName', 'lName','mName', 'gender','religion','maritalStatus','dateOfBirth','email','password','phoneNo','address1','address2','district','zone','pickupPoint','dateOfJoining','employeeType'
    ];
}
