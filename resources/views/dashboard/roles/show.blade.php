@extends('dashboard.layouts.master')

@section('title')
Roles
@endsection


@section('css')

@endsection






@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles') }}"> Back <i class="icon icon-back"></i></a>
        </div>
    </div>
</div>
<br>



<div class="row justify-content-md-center gutters">
    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">


        <div class="form-block">
                <div class="form-block-header">
                    <h5>{{ $role->name }}</h5>
                </div>
                <div class="form-block-body">


                        <div class="form-group">
                            <h5> <strong>Permissions:</strong></h5>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <label class="label btn-sm btn-secondary btn-rounded">{{ $v->name }}</label>
                                @endforeach
                            @endif
                        </div>

            </div>

        </div>
</div>
















{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Role</h2>
        </div>
        <div class="pull-right">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div> --}}
@endsection








@section('scripts')

@endsection
