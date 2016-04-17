@extends('layouts.master')
@section('title', 'Amar Jobs | Add Skills')

@section('content')

{!! Form::open(array('route' => 'saveSkill', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

<div class="form-group">
    <label for="sortInd" class="col-sm-2 control-label">
        {!! Form::label('sortInd', 'Sort Index') !!}
    </label>
    <div class="col-sm-2">
        {!! Form::number('sortInd','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="skillName" class="col-sm-2 control-label">
        {!! Form::label('skillName', 'Skill Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('skillName', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Skill!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection