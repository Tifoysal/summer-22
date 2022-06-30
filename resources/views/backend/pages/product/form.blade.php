@extends('backend.master')
@section('backend_content')
    <h1>Create New Product</h1>
    <div>
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

            <select class="form-select" aria-label="Default select example" name="category">
                <option selected>Open this select menu</option>
                @foreach($categories as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach

            </select>

            <button type="submit" class="btn btn-success">Create</button>

        </form>
    </div>

@endsection
