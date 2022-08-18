@extends('frontend.master')

@section('content')

    <div class="container pt-5">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-2 col-md-3 col-sm-4 col-7">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">42 Items</span>
                    </div>
                    <select name="" class="form-control form-control-sm">
                        <option value="">12</option>
                        <option value="">24</option>
                        <option value="">48</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 col-5 text-right order-md-1">
                <a href="#" class="btn btn-primary grid-view btn-sm">
                    <i class="fa fa-th-large"></i>
                </a>
                <a href="#" class="btn btn-primary list-view btn-sm">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <div class="col-md-3 order-md-0 mt-2 mt-md-0">
                <select class="form-control form-control-sm">
                    <option value="">Sort By</option>
                    <option value="">Popylar</option>
                    <option value="">Name</option>
                </select>
            </div>

        </div>
    </div>

    <div class="container">
        <hr/>
    </div>

    <div class="container">
        <div class="row">
<p>You are searching for : {{request()->product}}</p>
        @if($products->count()>0)
                    @foreach($products as $data)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="d-flex justify-content-between position-absolute w-100">
                                <div class="label-new">
                    <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <span class="ml-1">New</span>
                    </span>
                                </div>
                                <div class="label-sale">
                    <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
                      <i class="fa fa-tag" aria-hidden="true"></i>
                      <span class="ml-1">Sale</span>
                    </span>
                                </div>
                            </div>
                            <a href="#">
                                <img src="{{url('/uploads/products/'.$data->image)}}" class="card-img-top" alt="Product">
                            </a>
                            <div class="card-body px-2 pb-2 pt-1">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="h4 text-primary">BDT. {{$data->price}}</p>
                                    </div>
                                    <div>
                                        <a href="#" class="text-secondary lead" data-toggle="tooltip" data-placement="left"
                                           title="Compare">
                                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-warning d-flex align-items-center mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </p>
                                <p class="mb-0">
                                    <strong>
                                        <a href="#" class="text-secondary">{{$data->name}}</a>
                                    </strong>
                                </p>
                                <p class="mb-1">
                                    <small>
                                        <a href="#" class="text-secondary">Brands</a>
                                    </small>
                                </p>
                                <div class="d-flex mb-3 justify-content-between">
                                    <div>
                                        <p class="mb-0 small"><b>UPC: </b> 2310010</p>
                                        <p class="mb-0 small"><b>PART#: </b> 2121</p>
                                        <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="mb-0 small"><b>Free Shipping</b></p>
                                        <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
                                        <p class="mb-0 small"><b>REG: </b> $19.99</p>
                                        <p class="mb-0 small text-primary">
                                            <span class="font-weight-bold">Save</span> $20.00 (16%)
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="col px-0">
                                        <a href="{{route('add.to.cart',$data->id)}}" class="btn btn-outline-primary btn-block">
                                            Add To Cart
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="ml-2">
                                        <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left"
                                           title="Add to Wishlist">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            @else
            <p>কোন পণ্য পাওয়া যায়নি</p>
            @endif


{{$products->links()}}
        </div>
    </div>


    <div class="container">
        <hr/>
    </div>

    <div class="container pb-5">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-2 col-md-3 col-sm-4 col-7">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">42 Items</span>
                    </div>
                    <select name="" class="form-control form-control-sm">
                        <option value="">12</option>
                        <option value="">24</option>
                        <option value="">48</option>
                    </select>
                </div>
            </div>

            <div class="col-5 text-right">
                <a href="#" class="btn btn-primary grid-view btn-sm">
                    <i class="fa fa-th-large"></i>
                </a>
                <a href="#" class="btn btn-primary list-view btn-sm">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

        </div>
    </div>
@endsection
