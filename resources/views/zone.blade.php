@extends('layouts.master')

@section('home')

@push('css')

@endpush

@section('content')

<section class="row pt-5">
    <div class="container-fluid pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
        <div class="col-12 pt-4">
            <div class="row">
                <div class="col-6">
                    <div class="card dist-form">
                        <div class="card-header">
                            <b>Zone</b> Form
                        </div>
                        <div class="card-body p-0">
                            <form method="post" action="{{route('zone.store')}}">
                                @csrf
                                <div class="p-3">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="form-label">Zone Name</label>
                                            <input type="text" name="ZoneName" class="form-control" id="inputAddress">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="form-label">PinCode</label>
                                            <input type="text" name="PinCode" class="form-control" id="inputAddress">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group  col-md-6">
                                            <label class="form-label">District</label>
                                            <select class="form-control" name="DistrictId">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>

                                    </div>
                                    </div>
                                </div>
                                <div class="bottom-btn p-3">
                                    <button type="submit" name="submit" class="btn btn-info btn-sm pl-4 pr-4">Submit</button>
                                    <button type="button" class="btn btn-danger btn-sm pl-4 pr-4">Reset</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            Zone List
                        </div>
                        <div class="card-body">
                        <table id="table"  class="table table-bordered table-hover dt-responsive">
                            <thead>
                            <tr>
                                <th>Zone Name</th>
                                <th>PinCode</th>
                                <th>District</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($zones as $zone)
                                    <td>{{$zone->ZoneName}}</td>
                                    <td>{{$zone->PinCode}}</td>
                                    <td>{{$zone->DistrictId}}</td>
                                @endforeach
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
</section>
@endsection

@push('js')

@endpush
