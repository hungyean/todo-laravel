@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel CRUD - EDIT </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Update Task</h2><br  />
        <form method="post" action="{{action('TaskController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="name">Task:</label>
            <input type="text" class="form-control" name="task" value="{{$task->task}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection