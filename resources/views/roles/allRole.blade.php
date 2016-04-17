@extends('layouts.master')
@section('title', 'Amar Jobs | All Role')

@section('content')

<button type="button" class="btn btn-success badge" data-toggle="modal" data-target="#myModal">Add New Role</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route' => 'saveRole', 'class' => 'form-horizontal',  'id'=> 'add-form', 'files' => true)) !!}

            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">
                    {!! Form::label('role', 'Role') !!}
                </label>
                <div class="col-sm-6">
                    {!! Form::text('role','', array('class' => 'form-control')) !!}
                </div>
                <div class="col-sm-3">
                     {!! Form::submit('Add Role!', array('class' => 'btn btn-success pull-right')) !!}
                </div>
            </div>


        {!! Form::close() !!}
      </div>
    </div>

  </div>
</div>

    @if(count($roles))
        <table id="example2" class="table table-bordered table-hover" width="100%">

            <thead>
            <tr>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->role}}</td>
                    <td><a class="btn btn-info badge" href="{{route('editRole',$role->id)}}">Edit</a> | <a class="btn btn-danger badge" href="{{route('deleteRole',$role->id)}}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>

        {{$roles->links()}}

    @endif

@endsection