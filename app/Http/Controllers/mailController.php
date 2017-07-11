<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'],['name'=>'Lyhor'],function ($message){
            $message->attach('http://127.0.0.1:8000/getPDF');
           $message->to('gaaralove79@gmail.com','To Gaara')
                    ->subject('Test email');
            $message->from('meilyhor07@gmail.com','lyhor');
        });
    }
}
