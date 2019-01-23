<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes =1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name','virat',$minutes));
        return $response;
    }
    public function getCookie(Request $request){
        $v = $request-> cookie('name');
        echo $v;
    }

    public function attachCookie(){
        return response()->json(['name'=>'liew']);
    }

}
