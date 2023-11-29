@extends('dashboard.layouts.master')

@section('title')
Create Product
@endsection


@section('css')
		{{-- <!-- Font Awesome CSS -->
		<!-- Info - Font Awesome Fonts are required for Wysiwyg Editor. -->
		<link href="{{asset('assets/dashboard/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet" />

		<!-- Wysiwyg CSS -->
        <link href="{{asset('assets/dashboard/vendor/summernote/summernote-bs4.css')}}" rel="stylesheet" /> --}}

@endsection






@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products') }}"> Back<i class="icon icon-back"></i></a>
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



{!! Form::open(array('route' => 'products.store','method'=>'POST' ,'enctype' => 'multipart/form-data')) !!}


<div class="row justify-content-md-center gutters">
    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">

        @csrf
        <div class="form-block">
                <div class="form-block-header">
                    <h5>Create New Product</h5>
                    <h6>Notice every thing under mantinace</h6>
                </div>
                <div class="form-block-body">

                            <!-- User Name-->
                    <div class="form-group row gutters">
                        <label for="name" class="col-sm-3 col-form-label text-right"> Name</label>
                        <div class="col-sm-9">

                            {!! Form::text('name', null, array('placeholder' => 'Product Name','class' => 'form-control')) !!}
                            @error('name')
                            <span class="mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>





                            <!-- summernote  -->
                            <div class="form-group row gutters">
                                <label for="email" class="col-sm-3 col-form-label text-right">Details</label>
                                <div class="col-sm-9">
                                    {!! Form::text('detail', null, array('placeholder' => 'Details','class' => 'form-control ')) !!}
                                    @error('detail')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12"  style="margin-left: 290px">
                                <div class="form-group row gutters">
                                    <p><code>Categories:</code></p>
                                    {!! Form::select('subcategories', $subcategories,[], array('class' => 'form-control','multiple')) !!}
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
                                    {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
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
                            <div class="form-block-body">

                            {{-- upload Product Images --}}
                                <div class="form-group row gutters">
                                    <label for="name" class="col-sm-3 col-form-label text-right"> Upload Images</label>
                                    <div class="col-sm-9">

                                        {!! Form::file('url[]', ['multiple' => true, 'class' => 'form-control']) !!}
                                        @error('url')
                                        <span class="mt-2" role="alert">
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
                                        {!! Form::number('sizes[' . $size->id . '][quantity]', null, array('placeholder' => $size->name ,'class' => 'form-control')) !!}
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
                            <button type="submit" id="submit" class="btn btn-success pull-right">Create</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>


            {!! Form::close() !!}



@endsection








@section('scripts')
		{{-- <!-- Summernote JS -->
        <script src="{{asset('assets/dashboard/vendor/summernote/summernote-bs4.js')}}"></script>
		<!-- Common JS -->
		<script src="js/common.js"></script>
        <script src="{{asset('assets/dashboard/js/common.js')}}"></script>
        <script>
			$(document).ready(function() {
	      $('.summernote').summernote({
	        height: 300,
	        tabsize: 2
	      });
	    });
		</script> --}}
@endsection
