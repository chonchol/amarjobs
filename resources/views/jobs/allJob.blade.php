@extends('layouts.master')
@section('title', 'Amar Jobs | All Job')

@section('content')
    <a class="btn btn-success badge" href="{{route('addJob')}}">Add New Job</a>
    @if(count($jobs))
        <table id="example2" class="table table-bordered table-hover" width="100%">

            <thead>
            <tr>
                <th>Job Title</th>
                <th>Job Summary</th>
                <th>Job Type</th>
                <th>Job Location</th>
                <th>App. End Date</th>
                <th>Salary</th>
                <th>Number of Position</th>
                <th>Min. Experience</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)

                <tr>
                    <td>{{$job->jobTitle}}</td>
                    <td>{{$job->jobSummary}}</td>
                    <td>{{$job->jobType}}</td>
                    <td>{{$job->jobLocation}}</td>
                    <td>{{$job->applicationEndDate}}</td>
                    <td>{{$job->salary}}</td>
                    <td>{{$job->numberOfPosition}}</td>
                    <td>{{$job->minimumExperience}}</td>
                    <td><a class="btn btn-info badge" href="{{route('editJob',$job->id)}}">Edit</a> | <a class="btn btn-danger badge" href="{{route('deleteJob',$job->id)}}">Delete</a></td>
                </tr>

            @endforeach
        </tbody>
    </table>

        {{$jobs->links()}}

    @endif

@endsection