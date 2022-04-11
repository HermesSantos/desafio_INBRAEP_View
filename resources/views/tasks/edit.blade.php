@extends('tasks.layout')
@section('content')
 
<div class="card">
  <div class="card-header">task Page</div>
  <div class="card-body">
      
      <form action="{{ url('task/' .$tasks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="description" id="description" value="{{$tasks->description}}" class="form-control"></br>
        <label>status</label></br>
        <input type="text" name="status" id="status" value="{{$tasks->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop