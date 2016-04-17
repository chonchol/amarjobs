@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Category')

@section('content')
<a class="btn btn-success badge" href="{{route('addCategory')}}">Add New Category</a>
{!! Form::open(array('route' => 'saveCategory', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

<div class="form-group">
    <label for="sortInd" class="col-sm-2 control-label">
        {!! Form::label('sortInd', 'Sort Index') !!}
    </label>
    <div class="col-sm-2">
        {!! Form::number('sortInd','', array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="categoryName" class="col-sm-2 control-label">
        {!! Form::label('categoryName', 'Category Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('categoryName', '',array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Add Category!', array('class' => 'btn btn-success pull-right')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection