@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Category')

@section('content')
<a class="btn btn-success badge" href="{{route('addCategory')}}">Add New Category</a>
@if(count($categories))
<table id="example2" class="table table-bordered table-hover" width="65%">
    
    <thead>
        <tr>
            <th># Index</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)

        <tr>
            <td>{{$category->sortInd}}</td>
            <td>{{$category->categoryName}}</td>
            <td><a class="btn btn-info badge bg-light-blue" href="{{route('editCategory',$category->id)}}">Edit</a> | <a class="btn btn-danger badge bg-red" href="{{route('deleteCategory',$category->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$categories->links()}}

@endif

@endsection