@extends('layouts.master')

@section('home')

@push('css')

@endpush

@section('content')
<script>
function showContent(){
    var selectBox = document.getElementById("selector");
    var userInput = selectBox.options[selectBox.selectedIndex].value;
    if (userInput == 'received'){
        document.getElementById('hcontent').style.visibility = 'visible';
    }
    else{
        document.getElementById('hcontent').style.visibility = 'hidden';
    }
    return false;
}
</script>
<section class="row pt-5">
    <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
        <div class="col-12 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        Consignment Received by Delivery Boy
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
                                <th>Delivery Boy Status</th>
                                <th>Payment Status</th>
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
                                <th><select name="" id="selector" onchange="return showContent();">
                                    <option value="">select</option>
                                    <option value="received">Received</option>
                                    <option value="pickedUp">Picked up</option>
                                    <option value="onTheWay">On the way</option>
                                    <option value="delivered">Delivered</option>
                                </select></th>
                                <div>
                                    <th id="hcontent" style="visibility: hidden;"><input type="checkbox" name="" class="mr-2" />paid</th>
                                </div>

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

