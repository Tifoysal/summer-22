@extends('backend.master')

@section('backend_content')
<h1>Category List</h1>

<a href="{{route('category.create')}}" class="btn btn-success">Create Category</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Details</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>


    @foreach($category_data as $key=>$cat)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$cat->name}}</td>
          <td>{{$cat->description}}</td>
            <td>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-success" href="">View</a>
                <a  class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$category_data->links()}}

@endsection
