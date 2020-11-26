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
