@extends("layouts.app")
@section("content")
<div class="container">
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Done !!! </strong>{{ session()->get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<div class="col-md-6">
<h1>Todo List</h1>
<form method="POST" action={{url('/task')}}>
{{csrf_field()}}
<div class="form-group">
<input type="text" class="form-control" name="task" placeholder="Enter Task">
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Add</button>
</div>
</form>
<hr>
<ol>
@foreach($tasks as $task)
<li>{{ $task->task }}&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href ={{url('/'.$task->id.'/complete')}}>Mark As Completed</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href ={{url('/'.$task->id.'/delete')}}>Delete</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href ={{url('/'.$task->id.'/edit')}}>Edit</a></li><br>
@endforeach
</ol>
<h4>Completed</h4>
<ol>
@foreach($completed_tasks as $c_task)
<li>{{ $c_task->task }}&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href ={{url('/'.$c_task->id.'/incomplete')}}>Mark As Incomplete</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href ={{url('/'.$c_task->id.'/delete')}}>Delete</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href ={{url('/'.$c_task->id.'/edit')}}>Edit</a></li>
@endforeach
</ol>
</div>
</div>
@endsection