@extends('layouts.master')
@section('title', 'Amar Jobs | Add Profile')

@section('content')

    {!! Form::model('$profile',array('route' => 'updateProfile', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

    <div class="form-group">
        <input type='hidden' name='_method' value='put'>
        <input type='hidden' name='id' value='{!! $profile->id !!}'>
        <label for="firstName" class="col-sm-2 control-label">
            {!! Form::label('firstName', 'First Name') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('firstName',$profile->firstName, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="lastName" class="col-sm-2 control-label">
            {!! Form::label('lastName', 'Last Name') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('lastName',$profile->lastName, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="middleName" class="col-sm-2 control-label">
            {!! Form::label('middleName', 'Middle Name') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('middleName',$profile->middleName, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="DOB" class="col-sm-2 control-label">
            {!! Form::label('DOB', 'Date Of Birth') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::date('DOB',$profile->DOB, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="gender" class="col-sm-2 control-label">
            {!! Form::label('gender', 'Gender') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('gender',$profile->gender, array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="featuredProfile" class="col-sm-2 control-label">
            {!! Form::label('featuredProfile', 'Featured Profile') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('featuredProfile', $profile->featuredProfile,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">
            {!! Form::label('email', 'Email Address') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('email', $profile->email,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">
            {!! Form::label('phone', 'Phone Number') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('phone', $profile->phone,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="summary" class="col-sm-2 control-label">
            {!! Form::label('summary', 'Summary') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::textarea('summary', $profile->summary,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="profilePic" class="col-sm-2 control-label">
            {!! Form::label('profilePic', 'Profile Picture') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::file('profilePic', $profile->profilePic,array('class' => 'form-control')) !!}
        </div>
    </div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Update Profile!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
    {!! Form::close() !!}

@endsection