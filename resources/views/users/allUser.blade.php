@extends('layouts.master')
@section('title', 'Amar Jobs | All Users')

@section('content')
    <a class="btn btn-success badge" href="{{route('addUser')}}">Add New User</a>
@if(count($users))
<table id="example2" class="table table-bordered table-hover" width="100%">
    
    <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Actions</th>
        </tr>
    </thead>
        <tbody>
    @foreach($users as $user)

        <tr>
            <td>{{$user->userName}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td><a class="btn btn-info badge" href="{{route('editUser',$user->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>  <a class="btn btn-danger badge" href="{{route('deleteUser',$user->id)}}"><i class="glyphicon glyphicon-remove"></i></a>  <a class="btn btn-warning badge" href="{{route('deactiveUser',$user->id)}}"><i class="glyphicon glyphicon-arrow-down"></i></a>  <a class="btn btn-success badge" href="{{route('activeUser',$user->id)}}"><i class="glyphicon glyphicon-arrow-up"></i></a></td>
        </tr>

    @endforeach
    </tbody>
</table>

{{$users->links()}}

@endif

@endsection