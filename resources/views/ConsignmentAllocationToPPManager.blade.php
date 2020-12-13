@extends('layouts.master')

@section('home')

@push('css')

@endpush

@section('content')
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script>
$(document).ready(function() {

$('.datepicker').datetimepicker({
    format: 'dd/mm/yyyy'
});
});
</script>
<section class="row pt-5">
    <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
        <div class="col-12 pt-4">
        <div class="row justify-content-end mb-3">
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        Consignment Allocation to Pickup Point Manager
                        </div>
                        <div class="card-body">
                        <table id="table"  class="table table-bordered table-hover dt-responsive">
                            <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Merchant Name</th>
                                <th>Tracking Id </th>
                                <th>Delivery Address</th>
                                <th>Zone</th>
                                <th>Consignment Amount</th>
                                <th>Pickup Point Manager</th>
                                <th>Delivery Charge</th>
                                <th>Total Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mk</td>
                                <td>45678</td>
                                <td>Ranchi Jharkhand-456789</td>
                                <td>Ranchi</td>
                                <td>300</td>
                                <td><select name="" id="">
                                <option value="0">Select</option>
                                    <option value="">Sushil</option>
                                    <option value="">Mohit</option>
                                    <option value="">Deep</option>
                                </select></td>
                                <td>40</td>
                                <td><textarea name="" id="" cols="15" rows="1" disabled>90</textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mk</td>
                                <td>45678</td>
                                <td>Ranchi Jharkhand-456789</td>
                                <td>Ranchi</td>
                                <td>300</td>
                                <td><select name="" id="">
                                    <option value="">Sushil</option>
                                    <option value="">Mohit</option>
                                    <option value="">Deep</option>
                                </select></td>
                                <td>40</td>
                                <td><textarea name="" id="" cols="15" rows="1" disabled>90</textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mk</td>
                                <td>45678</td>
                                <td>Ranchi Jharkhand-456789</td>
                                <td>Ranchi</td>
                                <td>300</td>
                                <td><select name="" id="">
                                    <option value="">Sushil</option>
                                    <option value="">Mohit</option>
                                    <option value="">Deep</option>
                                </select></td>
                                <td>40</td>
                                <td><textarea name="" id="" cols="15" rows="1" disabled>90</textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mk</td>
                                <td>45678</td>
                                <td>Ranchi Jharkhand-456789</td>
                                <td>Ranchi</td>
                                <td>300</td>
                                <td><select name="" id="">
                                    <option value="">Sushil</option>
                                    <option value="">Mohit</option>
                                    <option value="">Deep</option>
                                </select></td>
                                <td>40</td>
                                <td><textarea name="" id="" cols="15" rows="1" disabled>90</textarea></td>
                            </tr>

                            </tbody>

                        </table>
                        <div class="p-3">
                                    <button type="button" class="btn btn-info btn-sm pl-4 pr-4 mr-4">Submit</button>
                                    <button type="button" class="btn btn-danger btn-sm pl-4 pr-4">Reset</button>
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
