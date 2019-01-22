@extends("layouts.app")
@section("content")
<div class="container">
<?php
#@alert(['type' => 'danger'])
 #       You are not allowed to access this resource!
#@endalert
?>
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
@if (count($tasks) === 1)
    I have one task!
@elseif (count($tasks) > 1)
    I have multiple tasks!
@else
    I don't have any tasks!
@endif
<br/><br/>
<form method="POST" action={{url('/task')}}>
{{csrf_field()}}
<div class="form-group">
<input type="text" class="form-control" name="task" placeholder="Enter Task">
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Add</button>
</div>
</form>
<hr/>

<h4>Show loops</h4>
@foreach ($tasks as $task)
    @if ($loop->parent)
        This is current loop.
    @endif
    <p>This is user {{ $task->id }}</p>
@endforeach

<h4>Incompleted</h4>
<ol>

@foreach($tasks as $task)
<li>{{ $task->task }}&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href ={{url('/'.$task->id.'/complete')}}>Mark As Completed</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href ={{url('/'.$task->id.'/delete')}}>Delete</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href ={{url('/'.$task->id.'/edit')}}>Edit</a></li><br>
@endforeach
</ol>
</ol>
<h4>Completed</h4>
@foreach($completed_tasks as $c_task)
<li>Completed &nbsp;{{ $c_task->task }}&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href ={{url('/'.$c_task->id.'/incomplete')}}>Mark As Incomplete</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href ={{url('/'.$c_task->id.'/delete')}}>Delete</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href ={{url('/'.$c_task->id.'/edit')}}>Edit</a></li>
@endforeach
</ol>
<br><br>

<h4>Date</h4>
@foreach($tasks as $task)
<?php echo ($task->task)." : Created At ".($task->created_at)->format('m/d/Y H:i')."  Updated At  ".($task->updated_at)->format('m/d/Y H:i')."<br/>"; ?>
@endforeach
<h4>Working environment</h4>
@env('local')
    The application is in the local environment...

@elseenv('testing')
    The application is in the testing environment...

@else
    The application is not in the local or testing environment...

@endenv



</div>
</div>

<?php
#@component('alert')
    #@slot('title')
    #    Forbidden
   # @endslot

    #You are not allowed to access this resource!
#@endcomponent

#@unless (Auth::check())
#You r not signed in
#@endunless
#@for($i=0;$i<10;$i++)
    #{{$i}}
#@endfor
?>
@endsection

