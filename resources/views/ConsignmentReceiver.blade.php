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
                                Consignment Receiver (New)
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
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-hover dt-responsive">
                                    <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Merchant Name</th>
                                        <th>Tracking Id</th>
                                        <th>Delivery Address</th>
                                        <th>Zone</th>
                                        <th>Consignment Amount</th>
                                        <th>Delivery Charge</th>
                                        <th>Total Amount</th>
                                        {{--                                        <th><input type="checkbox" name="" onclick="toggle(this);" class="mr-2"/>Manager--}}
                                        {{--                                            Status--}}
                                        {{--                                        </th>--}}
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--                            <tr>--}}
                                    {{--                                <td>1</td>--}}
                                    {{--                                <td>Mk</td>--}}
                                    {{--                                <td>45678</td>--}}
                                    {{--                                <td>Ranchi Jharkhand-456789</td>--}}
                                    {{--                                <td>Ranchi</td>--}}
                                    {{--                                <td>300</td>--}}
                                    {{--                                <td>50</td>--}}
                                    {{--                                <td>350</td>--}}
                                    {{--                                <td><input type="checkbox" name="" class="mr-2"/>Recieved</td>--}}
                                    {{--                            </tr>--}}
                                    <?php $i = 0; ?>
                                    @foreach($consignments as $consignment)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$consignment->f_name}} {{$consignment->M_name}} {{$consignment->l_name}}</td>
                                            <td>{{$consignment->trackingId}}</td>
                                            <td>{{$consignment->customerAddress}}</td>
                                            <td>{{$consignment->zoneName}}</td>
                                            <td>{{$consignment->productPrice}}</td>
                                            <td>{{$consignment->deliveryCharge}}</td>
                                            <td>{{$consignment->totalConsignmentAmount}}</td>
                                            {{--                                            <td><input type="checkbox" name="" class="mr-2"/>Recieved</td>--}}
                                            <td><a href="#" data-toggle="modal"
                                                   data-target="#exampleModal{{$consignment->cId}}"
                                                   class="btn btn-info btn-sm">
                                                    Change Status
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--  Change Received Status modal--}}
                                @foreach($consignments as $consignment)
                                    <div class="modal fade" id="exampleModal{{$consignment->cId}}" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Received
                                                        Status</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post"
                                                      action="/change-consignment-received-status{{$consignment->cId}}">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="cId" id="cId"
                                                               value="{{$consignment->cId}}">
                                                        <select class="form-control" name="managerStatus"
                                                                id="assign"
                                                                required>
                                                            <option value="1">Received</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- end of  Change Received Status Modal--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row pt-5">
        <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
            <div class="col-12 pt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Consignment Received By You
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-hover dt-responsive">
                                    <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Merchant Name</th>
                                        <th>Tracking Id</th>
                                        <th>Delivery Address</th>
                                        <th>Zone</th>
                                        <th>Consignment Amount</th>
                                        <th>Delivery Charge</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0; ?>
                                    @foreach($consignmentsReceived as $con)
                                        <tr>

                                            <td>{{++$i}}</td>
                                            <td>{{$con->f_name}} {{$con->M_name}} {{$con->l_name}}</td>
                                            <td>{{$con->trackingId}}</td>
                                            <td>{{$con->customerAddress}}</td>
                                            <td>{{$con->zoneName}}</td>
                                            <td>{{$con->productPrice}}</td>
                                            <td>{{$con->deliveryCharge}}</td>
                                            <td>{{$con->totalAmount}}</td>
                                            <td>
                                                @if($con->managerStatus  == 1) {{"Received"}}
                                                @else {{"Not Received"}}
                                                @endif
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
    </section>
@endsection

@push('js')
@endpush
