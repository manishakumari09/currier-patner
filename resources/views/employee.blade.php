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
            if ($(this).val() == "Y") {
                $("#PPManager").show();
            } else {
                $("#PPManager").hide();
            }
        });
    });

</script>
<script>
$(document).ready(function() {

$('.datepicker').datetimepicker({
    format: 'dd/mm/yyyy'
});
});
</script>

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
                            <div class="card-body p-0">
                                <form>
                                    <div class="p-3">
                                    <div class="p-3">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Employee Code</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">First Name</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Last Name</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Gender</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Others</option>
                                                    <option>Not to say</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Religion</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Marital Status</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="">single</option>
                                                    <option>Married</option>
                                                    <option>divorced</option>
                                                    <option>widowed</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Date Of Birth</label>
                                                <input type="date" id="datepicker" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label">Email Id</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputAddress">
                                            </div>
                                        <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Phone No</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Address 1</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">District</label>
                                                <select id="inputState" class="form-control">
                                                <option value="">select district</option>
                                                    <option value="">Bihar</option>
                                                    <option>Jharkhand</option>
                                                    <option>Karnataka</option>
                                                    <option>West Bengal</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Zone</label>
                                                <select id="inputState" class="form-control">
                                                <option value="">select zone</option>
                                                    <option value="">Bokaro</option>
                                                    <option>Ranchi</option>
                                                    <option>Jamshedpur</option>
                                                    <option>Dhanbad</option>
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
                                                    <label for="employeeType" class="form-label required">Employee
                                                        Type</label>
                                                    <select id="employeeType" class="form-control" name="role" required>
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
                                        <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Pickup Point</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="">select pickup point</option>
                                                    <option value="">AAdrash Nagar</option>
                                                    <option>Lalpur</option>
                                                    <option>Sail city</option>
                                                    <option>Sec 5</option>
                                                </select>
                                            </div>
                                        <div class="form-group col-md-4">
                                                <label for="inputState" class="form-label required">Date Of Joining</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="EmployeeType" class="form-label required">EmployeeType</label>
                                                <select id="employeetype" class="form-control">
                                                    <option>select employee type</option>
                                                    <option value="N">Pick Up Point Manager</option>
                                                    <option value="Y">Delivery Boy</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">

                                        <div class="form-group col-md-4" id="PPManager" style="display: none">
                                                <label for="otherField" class="form-label required">Pickup Point Manager</label>
                                                <select id="otherField" class="form-control">
                                                    <option value="">select pickup Point Manager</option>
                                                    <option value="">Manisha</option>
                                                    <option>Souvik</option>
                                                    <option value="">Ajeet</option>
                                                </select>
                                            </div>


                                    </div>
                                    </div>



                                    </div>
                                    <div class="bottom-btn p-3">
                                        <button type="button" class="btn btn-info btn-sm pl-4 pr-4">Submit</button>
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
                                        <table id="table"  class="table table-bordered table-hover dt-responsive">
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
</div>
@endsection

@push('js')

@endpush
