<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Auth;

class mailController extends Controller
{
   // public function send()
   // {
   // 	Mail::send(['text'=>'mail'],['name', 'text1'], function($message){
   // 		$message->to('olganik240998@gmail.com','text2')->subject('Обратная связь');
   // 		$message->from('olganik240998@gmail.com', Auth::user()->name);
   // 	});
   // 	return view('home');
   // }

   public function send_form(Request $request)
   {
    $name=$request->name;
    $email=$request->email;
    $msg=$request->msg;
    Mail::to('olganik240998@gmail.com')->send(new MailClass($name,$email,$msg));
   }
}
