@extends('backend.master')

@section('backend_content')
<h1>Category Edit</h1>


<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    <label for="">Name:</label>
    <input name="name"  type="text" class="form-control" value="{{$category->name}}">
    <label for="">Status:</label>
    <select name="status" id="" class="form-control">
        <option @if($category->status == 'active') selected @endif value="active">Active</option>
        <option @if($category->status == 'inactive') selected @endif value="inactive">Inactive</option>
    </select>

    <label for="">Description:</label>
    <textarea name="description" id="" class="form-control" placeholder="Enter Description">
        {{$category->description}}
    </textarea>

    <button type="submit" class="btn btn-success"> Update </button>
</form>

@endsection
