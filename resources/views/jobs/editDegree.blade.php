@extends('layouts.master')
@section('title', 'Amar Jobs | Update Degrees')

@section('content')

{!! Form::model($degree,array('route' => 'updateDegree', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
<input type='hidden' name='_method' value='put'>
<input type='hidden' name='id' value='{!! $degree->id !!}'>
<div class="form-group">
    <label for="sortInd" class="col-sm-2 control-label">
        {!! Form::label('sortInd', 'Sort Index') !!}
    </label>
    <div class="col-sm-2">
        {!! Form::number('sortInd',$degree->sortInd, array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="degreeName" class="col-sm-2 control-label">
        {!! Form::label('degreeName', 'Category Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('degreeName', $degree->degreeName,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Update Degree!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection