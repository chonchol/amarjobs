@extends('layouts.master')
@section('title', 'Amar Jobs | All Profile')

@section('content')
    <a class="btn btn-success badge" href="{{route('addProfile')}}">Add New Profile</a>
@if(count($profiles))
<table id="example2" class="table table-bordered table-hover" width="100%">
    
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Death Of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            <th>USER ID</th>
        </tr>
    </thead>
        <tbody>
    @foreach($profiles as $profile)

        <tr>
            <td>{{$profile->firstName}}</td>
            <td>{{$profile->lastName}}</td>
            <td>{{$profile->middleName}}</td>
            <td>{{$profile->DOB}}</td>
            <td>{{$profile->email}}</td>
            <td>{{$profile->phone}}</td>
            <td><a class="btn btn-info badge" href="{{route('editProfile',$profile->id)}}">Edit</a> | <a class="btn btn-danger badge" href="{{route('deleteProfile',$profile->id)}}">Delete</a></td>
            <td>{{$profile->userID}}</td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$profiles->links()}}

@endif

@endsection