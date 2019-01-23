<?php
use App\Task;
use Illuminate\Http\Request;
use Illuminat\Http\Response;
use App\Http\Middleware\CheckAge;
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

// Route::get('task/{id}',function($id){
//     $task = Task::find($id);
//     return 'Task'.$task->id.'<br/>'.$task->task;
// });
Route::get('task/22','TaskController@display');
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

Route::get('po/ut',function(){
    return "over";
});

// Route::get('/task/{id}','show');

Route::resources(
    [
        'photos' => 'PhotoController',
        'posts' => 'PostController'
    ]
);
// Route::get('/','TaskController@display');

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
});

// Route::get('/',function(){
//     return "dumps";
// })->middleware('web');
// $route = Route::current();
// $name = Route::currentRouteName();
// $action = Route::currentRouteAction();

// Route::get('/yugioh',function(){
//     $minutes = '60';
//     return response('Hello World')->cookie(
//         'name','value',$minutes
//     );
// });

Route::get('home',function(){
    $response = new Illuminate\Http\Response('Ac milan');
    $response->withCookie(cookie('name','value','minutes'));
    return $response;
    // return response('hello world',200)
    // ->header('Content-Type','text/plain');
});
Route::get('cookie/set','CookieController@setCookie');
Route::get('cookie/get','CookieController@getCookie');
Route::get('json','CookieController@attachCookie');
Route::get('/register',function(){
    return view('register');
});
Route::post('absa/fafa','UserRegistration@postRegistration');
Route::get('notme',function(){
        return response()->json([
            'name' => 'Liew',
            'age' => '56'

        ]);
});
Route::get('nothim',function(){
    return redirect()->away('https://www.google.com');
}
);

// Route::get('/',function(){
//     return view('new.redirect',['name'=>'Liew']);
//     //return view('new.redirect')->with('name','Liew');
// });
// Route::post('user/profile',function(){
//     return redirect('home')->with('status','profile updated???');
// });
Route::get('/test2',function(){
    return view('new.redirect');
});
Route::get('/test',function(){
    return view('new.test');
}
);

// Route::get('/oppo',function(){
//     return view('master');
// });
Route::get('oo','RedirectController@index');
Route::get('/rc',function(){
    return redirect()->action('RedirectController@index');
});

Route::get('helper',function(){
    return view('helpers.helper1');
});

ROutE::get('hlele',function(){
    // $array =[10,20,30];
    // $first = array_first($array, function($value,$key){
    //     return $value >= 15;
    // });
    // return $first;
//    $nrr = ['products'=>['desk'=>['price'=>100]]];
//    $nnrr = array_set($nrr,'products.desk.price',200);
//    return $nnrr;
   $data = ['products'=>['desk'=>['price'=>100]]];
   $adata = data_fill($data,'products.desk.price',200);
   return $adata;
})
?>
