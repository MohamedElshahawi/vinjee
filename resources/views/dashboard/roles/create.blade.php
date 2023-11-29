@extends('dashboard.layouts.master')

@section('title')
Create Role
@endsection


@section('css')

@endsection






@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles') }}"> Back</a>
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

{{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!} --}}






{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
@csrf

								<!-- section container start -->
								<div class="section-container">
									<h6 class="section-title">Create New Role</h6>

									<div class="section-wrapper white left">

                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div>

										<div class="row gutters">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <div class="form-group">
                                                <h5><strong>Permission:</strong></h5>
                                                    <br/>
                                                    <div class="custom-control custom-checkbox">

                                                    @foreach($permission as $value)
                                                        <label>{{ Form::checkbox('permission[]', $value->name, false, array('class' => 'name')) }}
                                                        {{ $value->name }}</label>
                                                    <br/>
                                                    @endforeach
                                                </div>

                                                </div>
											</div>

										</div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
									</div>
								</div>
								<!-- section container end -->
                                {!! Form::close() !!}

@endsection








@section('scripts')

@endsection
