@extends('layouts.master')
@section('title', 'Amar Jobs | Add Company')

@section('content')

{!! Form::open(array('route' => 'saveCompany', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

<div class="form-group">
    <label for="companyName" class="col-sm-2 control-label">
        {!! Form::label('companyName', 'Company Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('companyName','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="city" class="col-sm-2 control-label">
        {!! Form::label('city', 'City') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('city','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="district" class="col-sm-2 control-label">
        {!! Form::label('district', 'District') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('district','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="postcode" class="col-sm-2 control-label">
        {!! Form::label('postcode', 'Post Code') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::number('postcode','', array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="address" class="col-sm-2 control-label">
        {!! Form::label('address', 'Address') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('address','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="phone" class="col-sm-2 control-label">
        {!! Form::label('phone', 'Phone No') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('phone', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">
        {!! Form::label('email', 'Email Address') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::email('email', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="website" class="col-sm-2 control-label">
        {!! Form::label('website', 'Web Address') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('website', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="logo" class="col-sm-2 control-label">
        {!! Form::label('logo', 'Logo') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::file('logo', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Company!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection