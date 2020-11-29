@extends('layouts.master')

@section('home')

    @push('css')

    @endpush

@section('content')

    <section class="row pt-5 form-font">
        <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
            <div class="col-12 pt-4 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card dist-form">
                            <div class="card-header">
                                <b>Employee</b> Form
                            </div>
                            <div class="card-body p-0">
                                <div class="row">
                                    {{-- Handling Error and Success Message --}}
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            {{ session('status') }}
                                        </div>
                                    @elseif(session('failed'))
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            {{ session('failed') }}
                                        </div>
                                    @endif
                                </div>
                                <form method="post" action="{{route('employee-register.store')}}">
                                    @csrf
                                    <div class="p-3">
                                        <div class="p-3">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="employeeCode" class="form-label required">Employee
                                                        Code</label>
                                                    <input type="text" class="form-control" id="employeeCode"
                                                           name="employeeCode" value="{{$employeeCode}}" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="fName" class="form-label required">First
                                                        Name</label>
                                                    <input type="text" class="form-control" name="fName" id="fName">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="mName" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control" id="mName"
                                                           name="mName">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="lName" class="form-label required">Last
                                                        Name</label>
                                                    <input type="text" class="form-control" name="lName" id="lName" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="gender" class="form-label required">Gender</label>
                                                    <select id="gender" class="form-control" name="gender" required>
                                                        <option value=""> Choose Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                        <option value="Not to say">Not to say</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="religion" class="form-label required">Religion</label>
                                                    <input type="text" class="form-control" id="religion"
                                                           name="religion" required>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="maritalStatus" class="form-label required">Marital
                                                        Status</label>
                                                    <select id="maritalStatus" class="form-control" required
                                                            name="maritalStatus">
                                                        <option value=""> Select Marital Status</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Divorced">divorced</option>
                                                        <option value="Widowed">widowed</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="dateOfBirth" class="form-label required">Date Of
                                                        Birth</label>
                                                    <input type="date" id="dateOfBirth" class="form-control" name="dateOfBirth" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="email" class="form-label required">Email Id</label>
                                                    <input type="text" class="form-control" id="email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="password" class="form-label required">Password</label>
                                                    <input type="password" class="form-control" id="password"
                                                           name="password">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="phoneNumber" class="form-label required">Phone No</label>
                                                    <input type="text" class="form-control" id="phoneNumber"
                                                           name="phoneNo">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="address1" class="form-label required">Address
                                                        1</label>
                                                    <input type="text" class="form-control" id="address1"
                                                           name="address1">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="address2" class="form-label">Address 2</label>
                                                    <input type="text" class="form-control" id="address2"
                                                           name="address2">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="district" class="form-label required">District</label>
                                                    <select id="district" class="form-control" name="district">
                                                        <option value="">select district</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="zone" class="form-label required">Zone</label>
                                                    <select id="zone" class="form-control" name="zone">
                                                        <option value="">select zone</option>
                                                        <option value="Bokaro">Bokaro</option>
                                                        <option value="Ranchi">Ranchi</option>
                                                        <option value="Jamshedpur">Jamshedpur</option>
                                                        <option value="Dhanbad">Dhanbad</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="pickupPoint" class="form-label required">Pickup
                                                        Point</label>
                                                    <select id="pickupPoint" class="form-control" name="pickupPoint">
                                                        <option value="">select pickup point</option>
                                                        <option value="AAdrash Nagar">AAdrash Nagar</option>
                                                        <option value="Lalpur">Lalpur</option>
                                                        <option value="Sail city">Sail city</option>
                                                        <option value="Sec 5">Sec 5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="dateOfJoining" class="form-label required">Date Of
                                                        Joining</label>
                                                    <input type="text" class="form-control" id="dateOfJoining"
                                                           name="dateOfJoining">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="employeeType" class="form-label required">Employee Type</label>
                                                    <select id="employeeType" class="form-control" name="role">
                                                        <option value="">Select Employee Type</option>
                                                        <option value="ROLE_PICKUP_POINT_MANAGER">Pick Up Point Manager </option>
                                                        <option value="ROLE_DELIVERY_BOY">Delivery Boy</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-btn p-3">
                                        <button type="submit" class="btn btn-info btn-sm pl-4 pr-4">Submit</button>
                                        <button type="reset" class="btn btn-danger btn-sm pl-4 pr-4">Reset</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Employee List
                            </div>
                            <div class="card-body">
                                <div id="table-wrapper">
                                    <div id="table-scroll">
                                        <table id="table" class="table table-bordered table-hover dt-responsive">
                                            <thead>
                                            <tr>
                                                <th class="required">First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Religion</th>
                                                <th>Marital Status</th>
                                                <th>Date Of Birth</th>
                                                <th>Email Id</th>
                                                <th>Phone No</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>District Name</th>
                                                <th>Zode Name</th>
                                                <th>PickUp Point Name</th>
                                                <th>Date Of Joining</th>
                                                <th>Employee Type</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Manisha</td>
                                                <td>Kumari</td>
                                                <td>Pandit</td>
                                                <td>Female</td>
                                                <td>Hindu</td>
                                                <td>Single</td>
                                                <td>5 aug, 1993</td>
                                                <td>mk8222305@gmail.com</td>
                                                <td>09372829173</td>
                                                <td>AAdrash nagar, lalpur</td>
                                                <td>Ranchi, Jharkhand, India</td>
                                                <td>Jharkhand</td>
                                                <td>Ranchi</td>
                                                <td>Lalpur</td>
                                                <td>03-11-2020</td>
                                                <td>Delivery Boy</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Manisha</td>
                                                <td>Kumari</td>
                                                <td>Pandit</td>
                                                <td>Female</td>
                                                <td>Hindu</td>
                                                <td>Single</td>
                                                <td>5 aug, 1993</td>
                                                <td>mk8222305@gmail.com</td>
                                                <td>09372829173</td>
                                                <td>AAdrash nagar, lalpur</td>
                                                <td>Ranchi, Jharkhand, India</td>
                                                <td>Jharkhand</td>
                                                <td>Ranchi</td>
                                                <td>Lalpur</td>
                                                <td>03-11-2020</td>
                                                <td>Delivery Boy</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Manisha</td>
                                                <td>Kumari</td>
                                                <td>Pandit</td>
                                                <td>Female</td>
                                                <td>Hindu</td>
                                                <td>Single</td>
                                                <td>5 aug, 1993</td>
                                                <td>mk8222305@gmail.com</td>
                                                <td>09372829173</td>
                                                <td>AAdrash nagar, lalpur</td>
                                                <td>Ranchi, Jharkhand, India</td>
                                                <td>Jharkhand</td>
                                                <td>Ranchi</td>
                                                <td>Lalpur</td>
                                                <td>03-11-2020</td>
                                                <td>Delivery Boy</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Manisha</td>
                                                <td>Kumari</td>
                                                <td>Pandit</td>
                                                <td>Female</td>
                                                <td>Hindu</td>
                                                <td>Single</td>
                                                <td>5 aug, 1993</td>
                                                <td>mk8222305@gmail.com</td>
                                                <td>09372829173</td>
                                                <td>AAdrash nagar, lalpur</td>
                                                <td>Ranchi, Jharkhand, India</td>
                                                <td>Jharkhand</td>
                                                <td>Ranchi</td>
                                                <td>Lalpur</td>
                                                <td>03-11-2020</td>
                                                <td>Delivery Boy</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Manisha</td>
                                                <td>Kumari</td>
                                                <td>Pandit</td>
                                                <td>Female</td>
                                                <td>Hindu</td>
                                                <td>Single</td>
                                                <td>5 aug, 1993</td>
                                                <td>mk8222305@gmail.com</td>
                                                <td>09372829173</td>
                                                <td>AAdrash nagar, lalpur</td>
                                                <td>Ranchi, Jharkhand, India</td>
                                                <td>Jharkhand</td>
                                                <td>Ranchi</td>
                                                <td>Lalpur</td>
                                                <td>03-11-2020</td>
                                                <td>Delivery Boy</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Manisha</td>
                                                <td>Kumari</td>
                                                <td>Pandit</td>
                                                <td>Female</td>
                                                <td>Hindu</td>
                                                <td>Single</td>
                                                <td>5 aug, 1993</td>
                                                <td>mk8222305@gmail.com</td>
                                                <td>09372829173</td>
                                                <td>AAdrash nagar, lalpur</td>
                                                <td>Ranchi, Jharkhand, India</td>
                                                <td>Jharkhand</td>
                                                <td>Ranchi</td>
                                                <td>Lalpur</td>
                                                <td>03-11-2020</td>
                                                <td>Delivery Boy</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush
