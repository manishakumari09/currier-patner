@extends('layouts.master')

@section('home')

@push('css')

@endpush

@section('content')
<section class="row pt-5">
    <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
        <div class="col-12 pt-4">
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
