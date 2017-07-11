<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class PDFController extends Controller
{
//    public function __construct()
//    {
//        
//    }

    public function getPDF(){
        PDF::loadView('pdf.customer')->save('D:\xampp\htdocs\CDRI_Project\public\pdf/customer.pdf');
        
        Mail::send(['text'=>'mail'],['name'=>'Lyhor'],function ($message){
            $message->attach('D:\xampp\htdocs\CDRI_Project\public\pdf\customer.pdf');
            $message->to('gaaralove79@gmail.com','To Gaara')
                ->subject('Test email');
            $message->from('meilyhor07@gmail.com','lyhor');
        });
        return view('success');
    }
}
