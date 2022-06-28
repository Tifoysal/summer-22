@extends('backend.master')
@section('backend_content')
<form action="{{route('store.product')}}" method="POST">
    @csrf
    <label for="">Product Name</label>
    <input type="text" class="form-control" name="product_name">
    <label for="">Product Price</label>
    <input type="number" class="form-control" name="product_price">
    <label for="">Product Qty</label>
    <input type="number" class="form-control" name="product_qty">
    <label for="">Product Desc</label>
    <input type="text" class="form-control" name="product_desc">
    <label for="">Product Weight</label>
    <input type="number" class="form-control" name="product_weight">
    <button type="submit" class="btn btn-success">Create</button>

</form>
@endsection
