<?php

namespace App\Http\Controllers;
use App\Task;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    // {
    //     //
    // }
    public function __invoke($id){
        $task = Task::find($id);
        return $task->task;
    }
}
