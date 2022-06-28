@extends('backend.master')

@section('backend_content')
<h1> Product List</h1>
{{-- @dd($product); --}}
<a href="{{route('form.product')}}" class="btn btn-primary">Create product</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Desc</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Weight</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($product as $data)
        <tr>
            <td scope="col">{{$data->id}}</td>
            <td scope="col">{{$data->product_name}}</td>
            <td scope="col">{{$data->product_desc}}</td>
            <td scope="col">{{$data->product_price}}</td>
            <td scope="col">{{$data->product_qty}}</td>
            <td scope="col">{{$data->product_weight}}</td>
            <td scope="col">{{$data->created_at}}</td>
            <td scope="col">{{$data->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
