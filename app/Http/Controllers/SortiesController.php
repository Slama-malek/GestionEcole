<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sortie;

class SortiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorties = Sortie::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.sorties.index')->with(compact('sorties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'titre' => 'required',
            'description' => 'nullable',
            'prix' => 'required',
            

            'image' => 'image|required|max:1999'
        ]);
        // Handling Storage
        
        $filenameWithExtension = $request->file('image')->getClientOriginalName();
        $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/images', $filenameToStore);
        $sortie = new Sortie;
        $sortie->titre = $request->input('titre');
        $sortie->prix = $request->input('prix');
        $sortie->telephone = $request->input('telephone');

        
        $sortie->date_s = $request->input('date_s');
        
        if ($request->has('description'))
            $sortie->description = $request->input('description');
        else
            $sortie->description = '';
        $sortie->image = $filenameToStore;
        
        $sortie->save();
        return redirect('/admin/sortie')->with('success', 'La sortie a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sortie = Sortie::find($id);
            return view('admin.sorties.show')->with(compact('sortie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sortie = Sortie::find($id);
        return view('admin.sorties.edit')->with(compact('sortie'));
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
        $sortie = Sortie::find($id);
            
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'nullable',
            'prix' => 'required',
          

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
            $filenameToStore = $sortie->image;
        }
        if ($filenameToStore != $sortie->image) {
            Storage::delete('storage/images/'.$sortie->image);
            $path = $request->file('image')->storeAs('storage/images/', $filenameToStore);
            $sortie->image = $filenameToStore;
        }
        $sortie->titre= $request->input('titre');
        
        $sortie->prix = $request->input('prix');
       
        $sortie->telephone = $request->input('telephone');
        $sortie->date_s = $request->input('date_s');
       
        if ($request->has('description'))
            $sortie->description = $request->input('description');
        else
            $sortie->description = '';

        $sortie->save();
        return redirect('/admin/sortie')->with('success', 'Le sortie a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sortie = Sortie::find($id);
             
        $sortie->delete();
        return redirect('/admin/sortie')->with('info', 'La sortie a été suppriméé avec succès');
    }
}
