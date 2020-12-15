@extends('layouts.master')

@section('home')

@push('css')

@endpush

@section('content')
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script>
    $(function () {
        $("#employeetype").change(function () {
            if ($(this).val() == "ROLE_DELIVERY_BOY") {
                $("#PPManager").show();
            } else {
                $("#PPManager").hide();
            }
        });
    });

</script>
<script>
    $(document).ready(function () {

        $('.datepicker').datetimepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>
@if(empty(Session::has('superAdmin')))
    <script>
        alert("Please login to access this page ");
        window.location = "/admin";
    </script>
@endif
<section class="row pt-5 form-font">
    <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
        <div class="col-md-12">
            <div class="row justify-content-end">
                <div class="col-md-2 p-0">
                    <input type="text" class="form-control datepicker" data-provide="datepicker">
                </div>
                <div class="col-md-3">
                    <select id="inputState" class="form-control">
                        <option selected>select user</option>
                        <option>Ram</option>
                        <option>Sushil</option>
                        <option>Deep</option>
                        <option>manisha</option>
                    </select>
                </div>
                <div class="col-md-1 p-0">
                    <button class="btn btn-primary">Filter</button>
                </div>


            </div>
            <div class="row">
                <div class="col-12 pt-4 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card dist-form">
                                <div class="card-header">
                                    <b>Employee</b> Form
                                </div>
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
                                <div class="card-body p-0">
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
                                                        <input type="text" class="form-control" name="fName" id="fName"
                                                               required>
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
                                                        <input type="text" class="form-control" name="lName" id="lName"
                                                               required>
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
                                                        <label for="religion"
                                                               class="form-label required">Religion</label>
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
                                                        <input type="date" id="dateOfBirth" class="form-control"
                                                               name="dateOfBirth" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="email" class="form-label required">Email Id</label>
                                                        <input type="text" class="form-control" id="email" name="email"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="password"
                                                               class="form-label required">Password</label>
                                                        <input type="password" class="form-control" id="password"
                                                               name="password" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="phoneNumber" class="form-label required">Phone
                                                            No</label>
                                                        <input type="text" class="form-control" id="phoneNumber"
                                                               name="phoneNo">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="address1" class="form-label required">Address
                                                            1</label>
                                                        <input type="text" class="form-control" id="address1"
                                                               name="address1" required>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="address2" class="form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="address2"
                                                               name="address2">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="district"
                                                               class="form-label required">District</label>
                                                        <select id="district" class="form-control" name="district"
                                                                required>
                                                            <option value="">select district</option>
                                                            @foreach($districts as $district)
                                                                <option
                                                                    value="{{$district->id}}">{{$district->District}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="zone" class="form-label required"
                                                               required>Zone</label>
                                                        <select id="zone" class="form-control" name="zone">
                                                            <option value="">select zone</option>
                                                            @foreach($zones as $zone)
                                                                <option
                                                                    value="{{$zone->id}}">{{$zone->zoneName}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="pickupPoint" class="form-label required">Pickup
                                                            Point</label>
                                                        <select id="pickupPoint" class="form-control" name="pickupPoint"
                                                                required>
                                                            <option value="">select pickup point</option>
                                                            @foreach($pickupPointAreas as $pickupPointArea)
                                                                <option
                                                                    value="{{$pickupPointArea->id}}">{{$pickupPointArea->pickupPointName}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="dateOfJoining" class="form-label required">Date Of
                                                            Joining</label>
                                                        <input type="date" class="form-control" id="dateOfJoining"
                                                               name="dateOfJoining" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="employeetype" class="form-label required">Employee
                                                            Type</label>
                                                        <select id="employeetype" class="form-control" name="role"
                                                                required>
                                                            <option value="">Select Employee Type</option>
                                                            <option value="ROLE_PICKUP_POINT_MANAGER">Pick Up Point
                                                                Manager
                                                            </option>
                                                            <option value="ROLE_DELIVERY_BOY">Delivery Boy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4" id="PPManager" style="display: none">
                                                <label for="otherField" class="form-label required">Pickup Point
                                                    Manager</label>
                                                <select id="otherField" class="form-control"
                                                        name="pickupPointManagerId">
                                                    <option value="">Select Pickup Point Manager</option>
                                                    @foreach($pickPointManager as $pickPointManager)
                                                        <option
                                                            value="{{$pickPointManager->id}}">{{$pickPointManager->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="bottom-btn p-3">
                                            <button type="submit" class="btn btn-info btn-sm pl-4 pr-4">Submit</button>
                                            <button type="button" class="btn btn-danger btn-sm pl-4 pr-4">Reset</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
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
                                            <th>Employee Code</th>
                                            <th>First Name</th>
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
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td>{{$employee->employeeCode}}</td>
                                                <td>{{$employee->fName}}</td>
                                                <td>{{$employee->mName}}</td>
                                                <td>{{$employee->lName}}</td>
                                                <td>{{$employee->gender}}</td>
                                                <td>{{$employee->religion}}</td>
                                                <td>{{$employee->maritalStatus}}</td>
                                                <td>{{$employee->dateOfBirth}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->phoneNo}}</td>
                                                <td>{{$employee->address1}}</td>
                                                <td>{{$employee->address2}}</td>
                                                <td>{{$employee->district}}</td>
                                                <td>{{$employee->zone}}</td>
                                                <td>{{$employee->pickupPoint}}</td>
                                                <td>{{$employee->dateOfJoining}}</td>
                                                <td>{{$employee->employeeType}}</td>
                                                <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                        @endforeach
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
@endsection

@push('js')

@endpush
