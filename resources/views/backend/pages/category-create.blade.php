@extends('backend.master')
@section('backend_content')

<h1>Create New Category</h1>

<form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Enter Name: </label>
        <input name="category_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Category Name">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Enter Description</label>
        <textarea class="form-control" name="description" id="" placeholder="Enter Description"></textarea>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Upload Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-success" >Submit</button>
</form>
    @endsection
