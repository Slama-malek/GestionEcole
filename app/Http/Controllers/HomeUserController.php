<?php

namespace App\Http\Controllers;
use DB;
use App\Event;
use App\Gallery;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
   public  function index()
   {
    $sm1=DB::table('slider_images')->where('slider_images.sliderid','=','1')->get();
    $sm2=DB::table('slider_images')->where('slider_images.sliderid','=','2')->get();
    $sm3=DB::table('slider_images')->where('slider_images.sliderid','=','3')->get();
    $sm4=DB::table('slider_images')->where('slider_images.sliderid','=','4')->get();
    $sm5=DB::table('slider_images')->where('slider_images.sliderid','=','5')->get();

    $events = Event::orderBy('created_at', 'desc')->paginate(6);


    $galleries = Gallery::orderBy('created_at', 'desc')->paginate(5);
    


    return view('user.home')->with(compact('sm1','sm2','sm3','sm4','sm5','events','galleries'));
   }
   
}
