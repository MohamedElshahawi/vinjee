@extends('dashboard.layouts.master')

@section('title')
Edit Size
@endsection


@section('css')

@endsection






@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('sizes') }}"> Back</a>
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



{!! Form::model($size, ['method' => 'PUT','route' => ['sizes.update', $size->id]]) !!}



                                <div class="row justify-content-md-center gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">

                                        @csrf
                                        <div class="form-block">
                                                <div class="form-block-header">
                                                    <h5>Edit Size</h5>
                                                    <h6>You should Choose Uniqe Size Name</h6>
                                                </div>
                                                <div class="form-block-body">

                                                            <!-- SubCategory Name-->
                                                    <div class="form-group row gutters">
                                                        <label for="name" class="col-sm-3 col-form-label text-right">Size Name</label>
                                                        <div class="col-sm-9">

                                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                            @error('name')
                                                            <span class="mt-2" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="form-group row gutters">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <button type="submit" id="submit" class="btn btn-success pull-right">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                                {!! Form::close() !!}

@endsection

