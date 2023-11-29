@extends('dashboard.layouts.master')

@section('title')
Edit Role
@endsection


@section('css')

@endsection






@section('content')



<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles') }}"> Back</a>
        </div>
    </div>
</div>

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



{!! Form::model($role, ['method' => 'PUT','route' => ['roles.update', $role->id]]) !!}
@csrf
								<!-- section container start -->
								<div class="section-container">
									<h6 class="section-title">Custom Checkboxes</h6>

									<div class="section-wrapper white left">



										<div class="row gutters">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                </div>


												<div class="custom-control custom-checkbox">
                                                    <div class="form-group">
                                                        <strong>Permission:</strong>
                                                        <br/>
                                                        @foreach($permission as $value)
                                                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                            {{ $value->name }}</label>
                                                        <br/>
                                                        @endforeach
                                                    </div>
												</div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
										</div>


									</div>
								</div>
								<!-- section container end -->
                                {!! Form::close() !!}




@endsection








@section('scripts')

@endsection
