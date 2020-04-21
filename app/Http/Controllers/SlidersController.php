<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SliderImage;

class SlidersController extends Controller
{
    public function index()
    {
    $sm1=DB::table('slider_images')->where('slider_images.sliderid','=','1')->get();
        $sm2=DB::table('slider_images')->where('slider_images.sliderid','=','2')->get();
        $sm3=DB::table('slider_images')->where('slider_images.sliderid','=','3')->get();
        $sm4=DB::table('slider_images')->where('slider_images.sliderid','=','4')->get();
        $sm5=DB::table('slider_images')->where('slider_images.sliderid','=','5')->get();
        return view('admin.sliders')->with(compact('sm1','sm2','sm3','sm4','sm5'));
    }
    public function store(Request $r)
    {
        //dd($r->hasfile('imgupload1'));
        if($r->hasfile('imgupload1'))
        {
            
            $image = $r->file('imgupload1');
            $file=$image->getClientOriginalName();
            $name= uniqid() . $file;
            $image->move('uploads/images/', $name);  
            
            $sm=new SliderImage();
            $sm->sliderid =  $r->get('slider');
            $sm->name =  $name;
            $sm->save();
            
            return redirect('/ads')->with('success','ajout effectué');
        } 
        
        return redirect('/ads')->with('error','operation echoué');
    }
    public function destroySld($id){
        $sm = SliderImage::find($id);
        $sm->delete();
        return redirect('/ads')->with('success','slider Image '.$id.' was deleted !');
 
    }
}
