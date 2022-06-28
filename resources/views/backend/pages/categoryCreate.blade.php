@extends('backend.master')
@section('backend_content')
<form action="{{route('category.created')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Name</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Category Details</label>
        <input type="text" class="form-control" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
