@extends('frontend.master')


@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('registration.do')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name:</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

@endsection
