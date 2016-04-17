@extends('layouts.master')
@section('title', 'Amar Jobs | Update your Skills')

@section('content')

{!! Form::model($skill,array('route' => 'updateSkill', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}
<input type='hidden' name='_method' value='put'>
<input type='hidden' name='id' value='{!! $skill->id !!}'>
<div class="form-group">
    <label for="sortInd" class="col-sm-2 control-label">
        {!! Form::label('sortInd', 'Sort Index') !!}
    </label>
    <div class="col-sm-1">
        {!! Form::number('sortInd',$skill->sortInd, array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="skillName" class="col-sm-2 control-label">
        {!! Form::label('skillName', 'Skill Name') !!}
    </label>
    <div class="col-sm-6">
        {!! Form::text('skillName', $skill->skillName,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Update Skill!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection