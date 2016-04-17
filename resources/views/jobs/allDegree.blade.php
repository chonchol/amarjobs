@extends('layouts.master')
@section('title', 'Amar Jobs | All Degree')

@section('content')
<a class="btn btn-success badge" href="{{route('addDegree')}}">Add New Degree</a>
@if(count($degrees))
<table id="example2" class="table table-bordered table-hover" style="width:65%!important">
    
    <thead>
        <tr>
            <th># Index</th>
            <th>Degree Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($degrees as $degree)

        <tr>
            <td>{{$degree->sortInd}}</td>
            <td>{{$degree->degreeName}}</td>
            <td><a class="btn btn-info badge bg-light-blue" href="{{route('editDegree',$degree->id)}}">Edit</a> | <a class="btn btn-danger badge bg-red" href="{{route('deleteDegree',$degree->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$degrees->links()}}

@endif

@endsection