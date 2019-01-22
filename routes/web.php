<?php
use App\Task;
Route::get('/', "TaskController@index");
Route::post("/task", "TaskController@store");
Route::group(['prefix' => '{id}'],function(){
    Route::get("complete", "TaskController@complete");
    Route::get("incomplete", "TaskController@incomplete");
#Route::get("/{id}/delete", "TaskController@destroy");
    Route::get("edit", "TaskController@edit");
    Route::get("update", "TaskController@update");
    Route::get('delete',function($id){
    $task = Task::find($id);
    $task->delete();
    return Redirect::back()->with('message', "Task has been deleted");
    });
});
#Route::get("/{id}/complete", "TaskController@complete");
#Route::get("/{id}/incomplete", "TaskController@incomplete");
#Route::get("/{id}/delete", "TaskController@destroy");
#Route::get("/{id}/edit", "TaskController@edit");
#Route::get("/{id}/update", "TaskController@update");
Route::resource('tasks', 'TaskController');
#Route::get('/{id}/delete',function($id){
   # $task = Task::find($id);
   # $task->delete();
   # return Redirect::back()->with('message', "Task has been deleted");
#});

#Route::get('greeting', function () {
    #return view('welcome', ['name' => 'Liew']);
#});
#Route::group(['prefix' => 'aaa'], function() {
    #Route::get("foo",function(){
    #    return 'Hello World';
    #});
    #Route::get("bar",function(){
    #    return 'Hello World';
    #});
#});''

?>
