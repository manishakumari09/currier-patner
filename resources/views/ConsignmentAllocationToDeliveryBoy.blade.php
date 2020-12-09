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
                                Consignment Allocation to Delivery Boy
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
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
                                        <th>Assign Delivery Boy</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1?>
                                    @foreach($consignments as $consignment)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$consignment->merchantFirstName}} {{$consignment->merchantMiddleName}} {{$consignment->merchantLastName}}</td>
                                            <td>{{$consignment->trackingId}}</td>
                                            <td>{{$consignment->customerAddress}}</td>
                                            <td>{{$consignment->zone}}</td>
                                            <td>{{$consignment->productPrice}}</td>
                                            <td>{{$consignment->deliveryCharge}}</td>
                                            <td>{{$consignment->totalConsignmentAmount}}</td>
                                            <td>
                                                <a href="#" data-toggle="modal"
                                                   data-target="#myModal{{$consignment->cId}}" type="button"
                                                   class="btn btn-info btn-sm pl-4 pr-4 mr-4">
                                                    Assign
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--                                <div class="p-3">--}}
                                {{--                                    <button type="button" class="btn btn-info btn-sm pl-4 pr-4 mr-4">Submit</button>--}}
                                {{--                                    <button type="button" class="btn btn-danger btn-sm pl-4 pr-4">Reset</button>--}}
                                {{--                                </div>--}}
                            <!-- Consignment Assignment to delivery boy Modal -->
                                @foreach($consignments as $consignment)
                                    <div class="modal fade" id="myModal{{$consignment->cId}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Assign To Delivery Boy</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        &times;
                                                    </button>

                                                </div>
                                                <form method="post"
                                                      action="/assign-consignment-to-delivery-boy{{$consignment->cId}}"
                                                      role="form">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="assign" class="form-label">Assign to
                                                                Delivery Boy</label>
                                                            <input type="text" value="{{$consignment->cId}}">
                                                            <select class="form-control" name="deliveryBoyId"
                                                                    id="assign" required>
                                                                <option value="">Select Delivery Boy</option>
                                                                @foreach($employees as $employee)
                                                                    <option
                                                                        value="{{$employee->id}}">{{$employee->fName}} {{$employee->mName}} {{$employee->lName}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group float-right">
                                                            <button type="submit"
                                                                    class="btn btn-info btn-sm pl-4 pr-4 "
                                                                    name="update">Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- End of Consignment Assignment to delivery Boy Modal -->
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
