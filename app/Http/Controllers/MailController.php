<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"Mohit Verma");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('mohitverma2323@gmail.com', 'dope')->subject
            ('Laravel Basic Testing Mail');
      });
      echo "Basic Email Sent. Check your inbox.";
   }

}