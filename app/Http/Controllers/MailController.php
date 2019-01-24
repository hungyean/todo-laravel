<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller
{
    //
    public function basic_email() {
        $data = array('name'=>"Liew");

        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('hungyean96gd@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('hungyean@goodsane.com','hungyean');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
}
