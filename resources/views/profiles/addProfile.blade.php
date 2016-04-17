@extends('layouts.master')
@section('title', 'Amar Jobs | Add Profile')

@section('content')
@include('common.errors')
{!! Form::open(array('route' => 'saveProfile', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
{!! csrf_field() !!}
<div class="form-group">
    <label for="firstName" class="col-sm-2 control-label">
        {!! Form::label('firstName', 'First Name') !!}

    </label>
    <div class="col-sm-3">
        {!! Form::text('firstName','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="lastName" class="col-sm-2 control-label">
        {!! Form::label('lastName', 'Last Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('lastName','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="middleName" class="col-sm-2 control-label">
        {!! Form::label('middleName', 'Middle Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('middleName','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="DOB" class="col-sm-2 control-label">
        {!! Form::label('DOB', 'Date Of Birth') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::date('DOB','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="gender" class="col-sm-2 control-label">
        {!! Form::label('gender', 'Gender') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('gender','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="featuredProfile" class="col-sm-2 control-label">
        {!! Form::label('featuredProfile', 'Featured Profile') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('featuredProfile', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">
        {!! Form::label('email', 'Email Address') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('email', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="phone" class="col-sm-2 control-label">
        {!! Form::label('phone', 'Phone Number') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('phone', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="summary" class="col-sm-2 control-label">
        {!! Form::label('summary', 'Summary') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::textarea('summary', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="profilePic" class="col-sm-2 control-label">
        {!! Form::label('profilePic', 'Profile Picture') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::file('profilePic', '',array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Profile!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection