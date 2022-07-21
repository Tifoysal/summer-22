@extends('backend.master')

@section('backend_content')
<h1>Customer List</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>


    @foreach($customers as $key=>$cat)

        <tr>
          <td>{{$key+1}}</td>
          <td>{{$cat->name}}</td>
          <td>{{$cat->email}}</td>
            <td>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-success" href="{{route('category.view',$cat->id)}}">View</a>
                <a  class="btn btn-danger" href="{{route('category.delete',$cat->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$customers->links()}}

@endsection
