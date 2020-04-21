<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use App\Photo;
use App\User;
use DB;

class GalleriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    */

    public function index() {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);
        //$date=DB::table('galleries')->get();
        return view('admin.galleries.index')->with(compact('galleries' , 'date') );
    }

    public function show($id) {
            $gallery = Gallery::find($id);
            return view('admin.galleries.show')->with('gallery', $gallery)
                ->with('photos', Photo::where('gallery_id', $gallery->id)->paginate(12));
               
    }

    public function create() {
        return view('admin.galleries.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'cover_image' => 'image|required|max:1999'
        ]);
        // Handling Storage
        $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();
        $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/gallery_images', $filenameToStore);
        $gallery = new Gallery;
        $gallery->name = $request->input('name');
        if ($request->has('description'))
            $gallery->description = $request->input('description');
        else
            $gallery->description = '';
        $gallery->cover_image = $filenameToStore;
        
        $gallery->save();
        return redirect('/admin/gallery')->with('success', 'The gallery has been created successfully');
    }
    
    public function edit($id) {
        
            $gallery = Gallery::find($id);
            
                return view('admin.galleries.edit')->with('gallery', $gallery);
        
    }
    public function update(Request $request, $id) {
        
            $gallery = Gallery::find($id);
            
                $this->validate($request, [
                    'name' => 'required',
                    'description' => 'nullable',
                    'cover_image' => 'image|nullable|max:1999'
                ]);
                // Handling Storage
                if ($request->hasFile('cover_image')) {
                    $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();
                    $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    $extension = $request->file('cover_image')->getClientOriginalExtension();
                    $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
                }
                else {
                    $filenameToStore = $gallery->cover_image;
                }
                if ($filenameToStore != $gallery->cover_image) {
                    Storage::delete('public/gallery_images/'.$gallery->cover_image);
                    $path = $request->file('cover_image')->storeAs('public/gallery_images', $filenameToStore);
                    $gallery->cover_image = $filenameToStore;
                }
                $gallery->name = $request->input('name');
                if ($request->has('description'))
                    $gallery->description = $request->input('description');
                else
                    $gallery->description = '';
                $gallery->save();
                return redirect('/admin/gallery')->with('success', 'The gallery has been updated successfully');
            
            
        
    }
    public function destroy(Request $requset, $id) {
        
            $gallery = Gallery::find($id);
           
                //Storage::delete('public/gallery_images/'.$gallery->cover_image);
                /*
                foreach($gallery->photos as $photo) {
                    Storage::delete('public/gallery_photos/'.$photo->image);
                    $photo->delete();
                    */
                   
                $gallery->delete();
                return redirect('/admin/gallery')->with('success', 'The gallery has been deleted successfully');
            //} 
        }
        
    }






