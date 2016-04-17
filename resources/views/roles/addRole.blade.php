@extends('layouts.master')
@section('title', 'Amar Jobs | Add Role')

@section('content')

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success badge" data-toggle="modal" data-target="#myModal">Add Role</button>

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

@endsection