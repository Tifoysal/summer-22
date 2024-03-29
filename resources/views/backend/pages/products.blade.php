@extends('backend.master')

@section('backend_content')
<h1> Product List</h1>
{{-- @dd($product); --}}
<a href="{{route('form.product')}}" class="btn btn-primary">Create product</a>
<button class="btn btn-success" onclick="printdiv()">Print</button>
<div id="printTable">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($products as $data)
            <tr>
                <td scope="col">{{$data->id}}</td>
                <td scope="col">{{$data->name}}</td>
                <td scope="col">{{$data->category->name}}</td>
                <td scope="col">{{$data->price}}</td>
                <td scope="col">{{$data->quantity}}</td>
                <td scope="col">
                    <a href="">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{$products->links()}}
<script>
    function printdiv() {
        let printContents = document.getElementById('printTable').innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
