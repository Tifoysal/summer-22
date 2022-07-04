@extends('backend.master')
@section('backend_content')
    <h1>Create New Product</h1>
    <div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{route('store.product')}}" method="POST">
            @csrf
            <label for="">Product Name *</label>
            <input type="text" class="form-control" name="product_name" required>
            <label for="">Product Price *</label>
            <input type="number" class="form-control" name="product_price" required min="1">
            <label for="">Product Qty *</label>
            <input type="number" class="form-control" name="product_qty" required min="1">
            <label for="">Product Description (optional)</label>
            <input type="text" class="form-control" name="product_desc">

            <label for="">Select Category</label>
            <select class="form-select" aria-label="Default select example" name="category">

                @foreach($categories as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach

            </select>

            <button type="submit" class="btn btn-success">Create</button>

        </form>
    </div>

@endsection
