<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.club.index')->with(compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.club.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'nullable',
            'prix' => 'required',
            'age' => 'required',
            'size' => 'required',

            'image' => 'image|required|max:1999'
        ]);
        // Handling Storage
        
        $filenameWithExtension = $request->file('image')->getClientOriginalName();
        $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/images', $filenameToStore);
        $club = new Club;
        $club->nom = $request->input('nom');
        $club->prix = $request->input('prix');
        $club->age = $request->input('age');
        $club->size = $request->input('size');
        $club->horaire_debut = $request->input('horaired');
        $club->horaire_fin = $request->input('horairef');
        if ($request->has('description'))
            $club->description = $request->input('description');
        else
            $club->description = '';
        $club->image = $filenameToStore;
        
        $club->save();
        return redirect('/admin/club')->with('success', 'Le club a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::find($id);
            return view('admin.club.show')->with(compact('club'));
                
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = Club::find($id);
            
                return view('admin.club.edit')->with('club', $club);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $club = Club::find($id);
            
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'nullable',
            'prix' => 'required',
            'age' => 'required',
            'size' => 'required',

            'image' => 'image|required|max:1999'
        ]);
        // Handling Storage
        if ($request->hasFile('image')) {
            $filenameWithExtension = $request->file('image')->getClientOriginalName();
            $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
        }
        else {
            $filenameToStore = $club->image;
        }
        if ($filenameToStore != $club->image) {
            Storage::delete('storage/images/'.$club->image);
            $path = $request->file('image')->storeAs('storage/images/', $filenameToStore);
            $club->image = $filenameToStore;
        }
        $club->nom = $request->input('nom');
        
        $club->prix = $request->input('prix');
        $club->age = $request->input('age');
        $club->size = $request->input('size');
        $club->horaire_debut = $request->input('horaired');
        $club->horaire_fin = $request->input('horairef');
        if ($request->has('description'))
            $club->description = $request->input('description');
        else
            $club->description = '';

        $club->save();
        return redirect('/admin/club')->with('success', 'Le club a été modifié avec succès');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);
             
        $club->delete();
        return redirect('/admin/club')->with('info', 'Le club a été supprimé avec succès');
    }
}
