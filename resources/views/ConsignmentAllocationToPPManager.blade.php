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
@if(empty(Session::has('superAdmin')))
    <script>
        alert("Please login to access this page ");
        window.location = "/admin";
    </script>
@endif
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
                            <table id="table" class="table table-bordered table-hover table-responsive">
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
                                    <th> Assign Pickup Point Manager</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Merchant Name</th>
                                    <th>Tracking Id</th>
                                    <th>Delivery Address</th>
                                    <th>Zone</th>
                                    <th>Consignment Amount</th>
                                    <th>Delivery Charge</th>
                                    <th>Total Amount</th>
                                    <th>Assign Pickup Point Manager</th>
                                </tr>
                                </tfoot>
                                <tbody>
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
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#exampleModal{{$consignment->cId}}"
                                               class="btn btn-info btn-sm pl-4 pr-4 mr-4 btn-sm">
                                                <i class="fa fa-reply"></i> Assign To PP Manager
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--  Assign to pp manager modal--}}
                            @foreach($consignments as $consignment)
                                <div class="modal fade" id="exampleModal{{$consignment->cId}}" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Assign to PP
                                                    Manager</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post"
                                                  action="/assign-consignment-to-pp-manager{{$consignment->cId}}">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="cId" id="cId"
                                                           value="{{$consignment->cId}}">
                                                    <select class="form-control" name="pickupPointManagerId" id="assign"
                                                            required>
                                                        <option value="">Select PP Manager</option>
                                                        @foreach($ppManager as $ppManagers)
                                                            <option
{{--                                                                value="{{$ppManager->ppId}}">{{$ppManager->ppFirstName}} {{$ppManager->ppMiddleName}} {{$ppManager->ppLastName}}--}}
                                                                value="{{$ppManagers->ppId}}">{{$ppManagers->ppFirstName}} {{$ppManagers->ppMiddleName}} {{$ppManagers->ppLastName}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Assign To PP
                                                        Manager
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- end of  Assign to pp manager modal--}}
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
