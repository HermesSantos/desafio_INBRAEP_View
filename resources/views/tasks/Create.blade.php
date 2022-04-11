@extends('tasks.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tasks Page</div>
  <div class="card-body">
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop