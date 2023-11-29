@extends('dashboard.layouts.master')

@section('title')
Edit User
@endsection


@section('css')

@endsection






@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users') }}"> Back<i class="icon icon-back"></i></a>
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


{!! Form::model($user, ['method' => 'PUT','route' => ['users.update', $user->id]]) !!}


<div class="row justify-content-md-center gutters">
    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">

        <div class="form-block">
                <div class="form-block-header">
                    <h5>Edit User</h5>
                    <h6>Lorem ipsum fill all fields</h6>
                </div>
                <div class="form-block-body">

                            <!-- User Name-->
                    <div class="form-group row gutters">
                        <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
                        <div class="col-sm-9">

                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            @error('name')
                            <span class="mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                            <!-- Email Address -->
                    <div class="form-group row gutters">
                        <label for="email" class="col-sm-3 col-form-label text-right">Email</label>
                        <div class="col-sm-9">
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row gutters">
                        <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
                        <div class="col-sm-9">
                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>




                    <div class="form-group row gutters">
                        <label for="password_confirmation" class="col-sm-3 col-form-label text-right">Confirm Password</label>
                        <div class="col-sm-9">
                            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12"  style="margin-left: 290px">
                        <div class="form-group row gutters">
                            <p><code>Role:</code></p>
                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                        </div>
                    </div>



                    <div class="form-group row gutters">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" id="submit"  class="btn btn-success pull-right">Save</button>
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
