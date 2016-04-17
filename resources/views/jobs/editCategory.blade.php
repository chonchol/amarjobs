@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Category')

@section('content')

{!! Form::model($category,array('route' => 'updateCategory','method'=>'post', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

<div class="form-group">
    <input type='hidden' name='_method' value='put'>
    <input type='hidden' name='id' value='{!! $category->id !!}'>
    <label for="sortInd" class="col-sm-2 control-label">
        {!! Form::label('sortInd', 'Sort Index') !!}
    </label>
    <div class="col-sm-2">
        {!! Form::number('sortInd',$category->sortInd, array('class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <label for="categoryName" class="col-sm-2 control-label">
        {!! Form::label('categoryName', 'Category Name') !!}
    </label>
    <div class="col-sm-3">
        {!! Form::text('categoryName', $category->categoryName,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-3">
        {!! Form::submit('Update Category!', array('class' => 'btn btn-success')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection