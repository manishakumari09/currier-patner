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
                            <form>
                                <div class="p-3">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="form-label">Zone Name</label>
                                            <input type="text" class="form-control" id="inputAddress">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="form-label">PinCode</label>
                                            <input type="text" class="form-control" id="inputAddress">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="form-label">District Name</label>
                                        <input type="text" class="form-control" id="inputAddress">
                                    </div>
                                </div>
                                <div class="bottom-btn p-3">
                                    <button type="button" class="btn btn-info btn-sm pl-4 pr-4">Submit</button>
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
            <th>Country</th>
            <th>State</th>
            <th>Zone Name</th>
            <th>Pincode</th>
            <th>District Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>India</td>
            <td>New Delhi</td>
            <td>vihar</td>
            <td>985487</td>
            <td>Sita Vihar</td>
            <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </td>
          </tr>
          <tr>
            <td>India</td>
            <td>Haryana</td>
            <td>vihar</td>
            <td>985487</td>
            <td>Sita Vihar</td>
            <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </td>
          </tr>
          <tr>
            <td>India</td>
            <td>Maharastra</td>
            <td>vihar</td>
            <td>985487</td>
            <td>Sita Vihar</td>
            <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </td>
          </tr>
          <tr>
            <td>India</td>
            <td>Gurgaon</td>
            <td>vihar</td>
            <td>985487</td>
            <td>Sita Vihar</td>
            <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </td>
          </tr>
          <tr>
            <td>India</td>
            <td>Cuttack</td>
            <td>vihar</td>
            <td>985487</td>
            <td>Sita Vihar</td>
            <td><i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </td>
          </tr>
          <tr>
            <td>India</td>
            <td>Banka</td>
            <td>vihar</td>
            <td>985487</td>
            <td>Sita Vihar</td>
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
