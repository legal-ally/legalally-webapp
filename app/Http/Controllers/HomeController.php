<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
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
}
