@extends('layouts.master')
@section('home')
    @push('css')
    @endpush
@section('content')
    <section class="row pt-5">
        <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
            <div class="col-12 pt-4">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card dist-form">
                            <div class="card-header">
                                <b>Consignment Entry</b> Form
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="card-body p-0">
                                <form method="POST" action="{{route('create-consignment.store')}}">
                                    @method('post')
                                    @csrf
                                    <div class="p-3">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="invoiceNo" class="form-label">Invoice No</label>
                                                <input type="text" class="form-control" name="invoiceNo" id="invoiceNo">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="customerName" class="form-label">Customer Name</label>
                                                <input type="text" class="form-control" name="customerName"
                                                       id="customerName">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="customerAddress" class="form-label">Customer Address</label>
                                                <textarea name="customerAddress" id="customerAddress"
                                                          class="form-control" cols="15" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="customerPhoneNumber" class="form-label">Customer Phone
                                                    no</label>
                                                <input type="number" min="0" class="form-control"
                                                       id="customerPhoneNumber"
                                                       name="customerPhoneNumber">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="productName" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" id="productName"
                                                       name="productName">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="productPrice" class="form-label">Product Price</label>
                                                <input type="number" min="0" class="form-control" id="productPrice"
                                                       name="productPrice">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="weight" class="form-label">Weight</label>
                                                <select id="weight" name="weight" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>500 gm</option>
                                                    <option>1 kg</option>
                                                    <option>1.5 kg</option>
                                                    <option>2 kg</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="deliveryCharge" class="form-label">Delivery Charge</label>
                                                <input type="number" min="0" class="form-control" id="deliveryCharge"
                                                       name="deliveryCharge">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="totalConsignmentAmount" class="form-label">Total
                                                    Amount</label>
                                                <input type="number" min="0" class="form-control"
                                                       id="totalConsignmentAmount"
                                                       readonly
                                                       name="totalConsignmentAmount" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="remarks" class="form-label">Remarks</label>
                                                <textarea name="remarks" id="remarks" class="form-control" cols="15"
                                                          rows="2"></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="ZoneId" class="form-label">Select Zone</label>
                                                <select name="zoneId" class="form-control" id="ZoneId">
                                                    <option value="">Select Zone</option>
                                                    @foreach ($zones as $zone)
                                                        <option value="{{ $zone->id }}">{{ $zone->zoneName }}</option>">
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-btn p-3">
                                        <button type="submit" name="submit" class="btn btn-info btn-sm pl-4 pr-4">
                                            Submit
                                        </button>
                                        <button type="reset" name="reset" class="btn btn-danger btn-sm pl-4 pr-4">
                                            Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Consignment Entry List
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Invoice No.</th>
                                        <th>Tracking Id</th>
                                        <th>Customer Name</th>
                                        <th>Customer Address</th>
                                        <th>Customer Phone no</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Weight</th>
                                        <th>Delivery Charge</th>
                                        <th>Total Amount</th>
                                        <th>Remarks</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($consignments as $consignment)
                                        <tr>
                                            <td>{{$consignment->invoiceNo}}</td>
                                            <td>{{$consignment->trackingId}}</td>
                                            <td>{{$consignment->customerName}}</td>
                                            <td>{{$consignment->customerAddress}}</td>
                                            <td>{{$consignment->customerPhoneNumber}}</td>
                                            <td>{{$consignment->productName}}</td>
                                            <td>{{$consignment->productPrice}}</td>
                                            <td>{{$consignment->weight}}</td>
                                            <td>{{$consignment->deliveryCharge}}</td>
                                            <td>{{$consignment->totalConsignmentAmount}}</td>
                                            <td>{{$consignment->remark}}</td>
                                            <!-- <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </td> -->
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
    </section>
@endsection

@push('js')

@endpush
