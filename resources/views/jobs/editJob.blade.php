@extends('layouts.master')
@section('title', 'Amar Jobs | Add Job')

@section('content')

{!! Form::open(array('route' => 'updateJob', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

<div class="form-group">
    <label for="jobTitle" class="col-sm-2 control-label">
        {!! Form::label('jobTitle', 'Job Title') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('jobTitle',$job->jobTitle, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobSummary" class="col-sm-2 control-label">
        {!! Form::label('jobSummary', 'Job Summary') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::textarea('jobSummary',$job->jobSummary, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobDescription" class="col-sm-2 control-label">
        {!! Form::label('jobDescription', 'Job Description') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('jobDescription',$job->jobDescription, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobType" class="col-sm-2 control-label">
        {!! Form::label('jobType', 'Job Type') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('jobType',$job->jobType, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="jobLocation" class="col-sm-2 control-label">
        {!! Form::label('jobLocation', 'Job Location') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('jobLocation',$job->jobLocation, array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="applicationEndDate" class="col-sm-2 control-label">
        {!! Form::label('applicationEndDate', 'Application End Date') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::date('applicationEndDate', $job->applicationEndDate,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="salary" class="col-sm-2 control-label">
        {!! Form::label('salary', 'Salary') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::number('salary', $job->salary,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="applicationInstruction" class="col-sm-2 control-label">
        {!! Form::label('applicationInstruction', 'Application Instruction') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('applicationInstruction', $job->applicationInstruction,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="featuredJob" class="col-sm-2 control-label">
        {!! Form::label('featuredJob', 'Featured Job') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('featuredJob', $job->featuredJob,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="numberOfPosition" class="col-sm-2 control-label">
        {!! Form::label('numberOfPosition', 'Number of Position') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::number('numberOfPosition', $job->numberOfPosition,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="minimumExperience" class="col-sm-2 control-label">
        {!! Form::label('minimumExperience', 'Min. Experience (yr)') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::number('minimumExperience', $job->minimumExperience,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="minimumAge" class="col-sm-2 control-label">
        {!! Form::label('minimumAge', 'Minmum Age') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::number('minimumAge', $job->minimumAge,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label for="others" class="col-sm-2 control-label">
        {!! Form::label('others', 'Others') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('others', $job->others,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Update Job!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection