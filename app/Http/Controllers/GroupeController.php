<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Groupe;
use App\Classe;
use App\GroupeClasse;


class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes=DB::table('groupes')
        ->paginate(5);
        return view('admin.groupe.index')->with(compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groupe.create');
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
            'nom_g' => 'required',
            
        ]);
        $groupes = new Groupe;
        $groupes->nom_g = $request->input('nom_g');
        $groupes->save();
        return redirect('/admin/groupe')->with('success', 'The class has been created successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $groupe = Groupe::find($id);
        return view('admin.groupe.show')->with(compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $groupeClass = DB::table('groupe_classes')->where('classe_id' , '=' , $id )
        ->get();
        $groupeClass->delete();
        return redirect('/admin/classes')->with('success', 'The class has been deleted successfully');
    }
}
