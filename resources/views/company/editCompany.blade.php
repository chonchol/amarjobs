@extends('layouts.master')
@section('title', 'Amar Jobs | Add Profile')

@section('content')

    {!! Form::model('$company',array('route' => 'updateCompany', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

    <div class="form-group">
        <input type='hidden' name='_method' value='put'>
        <input type='hidden' name='id' value='{!! $company->id !!}'>
        <label for="companyName" class="col-sm-2 control-label">
            {!! Form::label('companyName', 'Company Name') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('companyName',$company->companyName, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            {!! Form::label('city', 'City') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('city',$company->city, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="district" class="col-sm-2 control-label">
            {!! Form::label('district', 'District') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('district',$company->district, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="postcode" class="col-sm-2 control-label">
            {!! Form::label('postcode', 'Date Of Birth') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::number('postcode',$company->postcode, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">
            {!! Form::label('address', 'Address') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('address',$company->address, array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">
            {!! Form::label('phone', 'Phone No') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('phone', $company->phone,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">
            {!! Form::label('email', 'Email Address') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::email('email', $company->email,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="website" class="col-sm-2 control-label">
            {!! Form::label('website', 'Web Address') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::text('website', $company->website,array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="logo" class="col-sm-2 control-label">
            {!! Form::label('logo', 'Logo') !!}
        </label>
        <div class="col-sm-3">
            {!! Form::file('logo', $company->logo,array('class' => 'form-control')) !!}
        </div>
    </div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Update Company!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
    {!! Form::close() !!}

@endsection