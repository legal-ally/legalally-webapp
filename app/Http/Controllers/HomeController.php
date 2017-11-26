<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Mail;
use App\Requests;
use Illuminate\Session\Store;

class HomeController extends Controller
{
    public function getHome(Store $session)
    {
        return view('site.index');
    }

     public function getAbout(Store $session)
    {
        return view('site.about');
    }
    
    public function getServices(Store $session)
    {
        return view('site.services');
    }
	
	public function saveRequest(Request $request)
	{
	  //Requests::create($request->all());
	  
	  $data = $request->all();
	  $textMessage='new request data is| Name-> '.$request->input('name').'| Phone ->'.$request->input('contact').'| email->'.$request->input('email');
	  Mail::raw($textMessage,function($message)
	 {
     	$message->subject('LegalAlly- New Request');
		$message->from('admin@legalally.co.in', 'LegalAlly');
		$message->to('ankush.chowdhury@gmail.com');
	  });
	
      //Mail::send(['text'=>'mail'], $data, function($message) {
        // $message->to('mohitverma2323@gmail.com', 'Ankush Chowdhury')->subject('LegalAlly New Request Received');
      //});
	  
	  return view('site.done');
	  	
	}
}
