@extends('layouts.master')
@section('title', 'Amar Jobs | All Job Skill')

@section('content')
    <a class="btn btn-success badge" href="{{route('addSkill')}}">Add New Skill</a>
@if(count($skills))
<table id="example2" class="table table-bordered table-hover" style="width:65%!important">
    
    <thead>
        <tr>
            <th># Index</th>
            <th>Skill Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($skills as $skill)

        <tr>
            <td>{{$skill->sortInd}}</td>
            <td>{{$skill->skillName}}</td>
            <td><a class="btn btn-info badge bg-light-blue" href="{{route('editSkill',$skill->id)}}">Edit</a> | <a class="btn btn-danger badge bg-red" href="{{route('deleteSkill',$skill->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$skills->links()}}

@endif

@endsection