@extends('tasks.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Descrition task</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Description : {{ $tasks->description }}</h5>
        <p class="card-text">Status : {{ $tasks->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>