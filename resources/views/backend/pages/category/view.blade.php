@extends('backend.master')

@section('backend_content')
<h1>Category View</h1>

<input type="text" readonly class="form-control" value="{{$category->name}}">
<input type="text" readonly class="form-control" value="{{$category->status}}">


@endsection
