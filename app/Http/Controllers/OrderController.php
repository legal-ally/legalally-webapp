<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;

class OrderController extends Controller
{
  public function saveBooking(Request $request)
  {
      return view('site.order', ['serviceRequested' => $request->input('service')]);
  }
}

?>