<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use App\Photo;
use App\User;
use App\Eleve;
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
        $eleves = Eleve::orderBy('created_at', 'desc')->paginate(5);

        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(5);
        //$date=DB::table('galleries')->get();
        
        return view('admin.galleries.index')->with(compact('galleries','eleves' ) );
    }

    public function show($id) {
            $gallery = Gallery::find($id);
            return view('admin.galleries.show')->with(compact('gallery'));
                
               
    }

    public function create() {
        $eleves = Eleve::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.galleries.create')->with(compact('eleves' ) );
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
                    Storage::delete('app/storage/gallery_images/'.$gallery->cover_image);
                    $path = $request->file('cover_image')->storeAs('app/storage/gallery_images/', $filenameToStore);
                    $gallery->cover_image = $filenameToStore;
                }
                $gallery->name = $request->input('name');
                if ($request->has('description'))
                    $gallery->description = $request->input('description');
                else
                    $gallery->description = '';
                $gallery->save();
                return redirect('/admin/gallery')->with('success', 'La photo a été mise à jour avec succès');
            
            
        
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
                return redirect('/admin/gallery')->with('info', 'La photo a été supprimée avec succès');
            //} 
        }
        public function search(Request $request) {
            // // $galleries = DB::table('galleries')->where('galleries.name' , '=' , $request->input('matieres'))     
    
      
            // // ->paginate(5);

            //  $galleries = Gallery::orderBy('created_at', 'desc')->paginate(5);
            // return view('admin.galleries.index')->with(compact('galleries' ) );
        }
        
        
    }






