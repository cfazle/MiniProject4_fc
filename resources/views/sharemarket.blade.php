@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<body>
<div class="container">
    <h2 >Laravel Column Sorting With Pagination</h2><br/>
    <form method="post" action="{{url('/sharemarket/store')}}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Company Name:</label>
            <div class="col-md-2">
                <input id="companyname" type="text" class="form-control" name="companyname">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Price:</label>
            <div class="col-md-2">
                <input id="price" type="text" class="form-control" name="price">
            </div>
        </div>
        <div class=" form-group row">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
@endsection