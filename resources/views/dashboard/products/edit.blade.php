@extends('dashboard.layouts.master')

@section('title')
Edit Product
@endsection


@section('css')

@endsection






@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('subcategories') }}"> Back</a>
        </div>
    </div>
</div>
<br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif



{!! Form::model($product, ['method' => 'PUT', 'route' => ['products.update', $product->id], 'enctype' => 'multipart/form-data']) !!}



                                <div class="row justify-content-md-center gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">

                                        @csrf
                                        <div class="form-block">
                                                <div class="form-block-header">
                                                    <h5>Edit Product</h5>
                                                    <h6>You should Choose any Sub Category Linked with  Proudct</h6>
                                                </div>
                                                <div class="form-block-body">

                                                            <!-- Product Name-->
                                                    <div class="form-group row gutters">
                                                        <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
                                                        <div class="col-sm-9">

                                                            {!! Form::text('name', $product->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                            @error('name')
                                                            <span class="mt-2" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                        <!-- Product Detail-->
                                                    <div class="form-group row gutters">
                                                        <label for="name" class="col-sm-3 col-form-label text-right">Detail</label>
                                                        <div class="col-sm-9">

                                                            {!! Form::text('detail', $product->detail, array('placeholder' => 'Detail','class' => 'form-control')) !!}
                                                            @error('detail')
                                                            <span class="mt-2" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12"  style="margin-left: 290px">
                                                        <div class="form-group row gutters">
                                                            <p><code>Categories:</code></p>
                                                            {!! Form::select('subcategories', $subcategory, $product->subcategory_id, array('class' => 'form-control')) !!}
                                                            @error('categories')
                                                            <span class="mt-2" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                            <!-- Price  -->
                                            <div class="form-group row gutters">
                                                <label for="price" class="col-sm-3 col-form-label text-right">Price</label>
                                                <div class="col-sm-9">
                                                    {!! Form::number('price', $product->price, array('placeholder' => 'Price','class' => 'form-control')) !!}
                                                    @error('price')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <br>
                                            <br>
                                            <hr>


                                            <div class="form-block-header">
                                                <h5>Add New Images</h5>
                                                <h6>Notice every thing under mantinace</h6>
                                            </div>
                                            <br>
                                            <!-- Image Upload -->
                                            <div class="form-group row gutters">
                                                <label for="url" class="col-sm-3 col-form-label text-right">Images</label>
                                                <div class="col-sm-9">
                                                    {!! Form::file('url[]', ['multiple' => 'multiple', 'class' => 'form-control']) !!}
                                                    @error('url')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <br>
                                            <hr>
                                            <br>

                                            <div class="form-block-header">
                                                <h5>Product Stock</h5>
                                                <h6>Notice every thing under mantinace</h6>
                                            </div>
                                            <div class="form-block-body">
                                                <!-- Size Name-->
                                                <div class="form-group row gutters">
                                                    @foreach ($sizes as $size)
                                                        <label for="name" class="col-sm-3 col-form-label text-right">{{ $size->name }}</label>
                                                        <div class="col-sm-9">
                                                            {!! Form::hidden('sizes[' . $size->id . '][size_id]', $size->id) !!}
                                                            {!! Form::number('sizes[' . $size->id . '][quantity]', $product->stock->where('size_id', $size->id)->first()->quantity ?? 0, array('placeholder' => $size->name, 'class' => 'form-control')) !!}
                                                            @error('sizes.' . $size->id . '.quantity')
                                                                <span class="mt-2" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    @endforeach
                                                </div>




                                                    <div class="form-group row gutters">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <button type="submit"  id="submit" class="btn btn-success pull-right">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                                {!! Form::close() !!}
@endsection








@section('scripts')

@endsection
