@extends('dashboard.layouts.master')

@section('title')
Product Info
@endsection


@section('css')

@endsection






@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products') }}"> Back <i class="icon icon-back"></i></a>
        </div>
    </div>
</div>
<br>



<div class="row justify-content-md-center gutters">
    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">


        <div class="form-block">
                <div class="form-block-header">
                    <h5>{{ ucfirst($product->name) }}</h5>
                    <h6>Information</h6>
                </div>
                <div class="form-block-body">

            <h5> Product Name : {{$product->name}} </h5>
            <h6>Linked with Category : {{  $product->getSubcategoryName() }}</h6>

            <h6>Price : ${{$product->price}}</h6>

            <h6>Start Date : {{$product->created_at}}</h6>


            <hr>

            <div class="form-block-header">
                <h5>Product Details</h5>
                <h6></h6>
            </div>
            <p>{{$product->detail}}</p>

            </div>

<br>
<br>
<hr>
<br>
<br>


        								<!-- section container start -->
                                        <div class="section-container">
                                            <h6 class="section-title">Product Images</h6>
                                            <p class="section-desc">{{ ucfirst($product->name) }}</p>

                                            <div class="section-wrapper left">

                                                <div id="withIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        @foreach($product->productImage as $key => $image)
                                                            <li data-target="#withIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                                                        @endforeach
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        @foreach($product->productImage as $key => $image)
                                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                <img class="d-block w-100" src="{{ asset('public/images/' . $image->url) }}" alt="Product Image">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <a class="carousel-control-prev" href="#withIndicators" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#withIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>
                                            <br>
                                            <br>
                                            <hr>
                                            <br>
                                            <br>
                                            <div class="form-block-header">
                                                <h5>Product Stock</h5>
                                                <h6>Notice everything under maintenance</h6>
                                            </div>
                                            <div class="form-block-body">
                                                <!-- Size Name-->
                                                <div class="form-group row gutters">
                                                    @foreach ($sizes as $size)
                                                        <label for="name" class="col-sm-3 col-form-label text-right">{{ $size->name }}</label>
                                                        <div class="col-sm-9">
                                                            @if($product->stock)
                                                                @php
                                                                    $stock = $product->stock->where('size_id', $size->id)->first();

                                                                @endphp
                                                                @if($stock)
                                                              <strong><p>{{ $stock->quantity }}</p></strong>
                                                                @else
                                                                    <p>0</p>
                                                                @endif
                                                            @else
                                                                <p>0</p>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        <!-- section container end -->






@endsection








@section('scripts')

@endsection
