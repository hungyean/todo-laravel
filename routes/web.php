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

Route::get('task/{id}',function($id){
    $task = Task::find($id);
    return 'Task'.$task->id.'<br/>'.$task->task;
});
// Route::get('tasks/{id?}',function($id = 16){
//     $task = Task::find($id);
//     return $task->task;
// });
Route::get('user/{name?}',function($name = "Liew"){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('search/{search}',function($search){
    return $search;
})->where('search','.*');

Route::get('lalal/{id}/ajajaj',function($id){
    return 'sssss';
})->name('ajajaj');


Route::middleware(['first','second'])->group(function(){
    Route::get('/a',function(){
        return "Unimas";
    });
    Route::get('j/j',function(){
        return "Ac Milan";
    });
});

// Route::get('profile/{id}',function(App\Task $task){
//     return "goodsane";
// });
#Route::get("we",function(){
 #   return 'hello world';
#});
#Route::get("no",function(){
 #   return 'no';
#});
#Route::view('we','we');
#Route::permanentRedirect('we','no');
#Route::redirect('we','no',301);
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
Route::name('rt.')->group(function(){
    Route::get('rts',function(){
        return "admin using";
    });
});

Route::prefix('uu')->group(function(){
    Route::get('us',function(){
        return "ACM";
    });
});

Route::middleware('auth:api','throttle:60,1')->group(function(){
    Route::get('/hungyean',function(){
        return "acm";
    });
});

Route::get('api/tasks/{task}',function(App\Task $task){
    return $task->id.'<br>'.$task->task;
});

Route::get('/tasks/{task}',function(App\Task $task){
    return $task->task;
})


// $route = Route::current();
// $name = Route::currentRouteName();
// $action = Route::currentRouteAction();


?>
