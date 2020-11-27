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
                        Consignment Receiver
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
                                <th>Delivery Charge</th>
                                <th>Total Amount</th>
                                <th><input type="checkbox" name="" onclick="toggle(this);"  class="mr-2"/>Manager Status</th>
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
                                <td>50</td>
                                <td>350</td>
                                <td><input type="checkbox" name="" class="mr-2"/>Recieved</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mk</td>
                                <td>45678</td>
                                <td>Ranchi Jharkhand-456789</td>
                                <td>Ranchi</td>
                                <td>300</td>
                                <td>50</td>
                                <td>350</td>
                                <td><input type="checkbox" class="mr-2" />Recieved</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mk</td>
                                <td>45678</td>
                                <td>Ranchi Jharkhand-456789</td>
                                <td>Ranchi</td>
                                <td>300</td>
                                <td>50</td>
                                <td>350</td>
                                <td><input type="checkbox" name="" class="mr-2"/>Recieved</td>
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
