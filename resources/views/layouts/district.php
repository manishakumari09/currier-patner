@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3> Add Data</h3>
            <br/>
            <form method="post" action="{{url('district')}}">
                <div class="form-group">
                    <input type="text" name="district_name" class="form-control" placeholder="District Name" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
            <!-- <table>
                <tr>
                    <td>id</td>
                    <td>District Name</td>
                </tr>
            </table> -->
        </div>
    </div>
@endsection


