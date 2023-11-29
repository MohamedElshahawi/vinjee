@extends('dashboard.layouts.master')

@section('title')
User Info
@endsection


@section('css')

@endsection






@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users') }}"> Back <i class="icon icon-back"></i></a>
        </div>
    </div>
</div>
<br>



<div class="row justify-content-md-center gutters">
    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">


        <div class="form-block">
                <div class="form-block-header">
                    <h5>{{ ucfirst($user->name) }}</h5>
                    <h6>{{  $user->getRoleNames() [0]}}</h6>
                </div>
                <div class="form-block-body">

            <h5>Email : {{$user->email}} </h5>

            <h5>created at : {{$user->created_at}}</h5>

            </div>

        </div>
</div>







@endsection








@section('scripts')

@endsection
