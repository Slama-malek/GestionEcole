<?php

namespace App\Http\Controllers\Ens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Cours;

class CoursController extends Controller
{
    public function index()
    {
        $cours = DB::table('cours')->where('cours.ens_id','=',Auth::user()->id)
        ->get();
        return view('Enseignant.cours.index')->with(compact('cours'));;
    }

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres = DB::table('enseignant_classes')
        ->where('enseignant_classes.ens_id','=',Auth::user()->id)
        ->join('matieres' , 'enseignant_classes.mat_id' ,'=' ,'matieres.id_m')
        ->select('matieres.nom_m' , 'matieres.id_m')
        ->distinct()
        ->get();
        $classes = DB::table('enseignant_classes')
        ->where('enseignant_classes.ens_id','=',Auth::user()->id)
        ->join('classes' , 'enseignant_classes.classe_id' ,'=' ,'classes.id_c')
        ->select('classes.nom_c' , 'classes.id_c')
        ->distinct()
        ->get();
        $groupes = DB::table('enseignant_classes')
        ->where('enseignant_classes.ens_id','=',Auth::user()->id)
        ->join('groupes' , 'enseignant_classes.groupe_id' ,'=' ,'groupes.id_g')
        ->select('groupes.nom_g' , 'groupes.id_g')
        ->distinct()
        ->get();

        $cours = DB::table('cours')->where('cours.ens_id','=',Auth::user()->id)
        ->get();
        return view('Enseignant.cours.create')->with(compact('matieres' , 'groupes','classes','cours'));
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
            'nom_co' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,xlx,csv',

        
            
        ]);
        $filenameWithExtension = $request->file('file')->getClientOriginalName();
        $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
        $path = $request->file('file')->storeAs('public/cours', $filenameToStore);
       
        $cours = new Cours;
        $cours->nom_co = $request->input('nom_co');
        $cours->description = $request->input('description');
        $cours->ens_id = Auth::user()->id;
        $cours->mat_id = $request->input('matieres');
        $cours->classe_id = $request->input('classes');
        $cours->groupe_id = $request->input('groupes');
        $cours->file = $filenameToStore;
        
        
        $cours->save();
        
        return back()->with('success' ,'Cours ajouté avec success! ');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cours = DB::table('cours')->where('cours.ens_id','=',Auth::user()->id)
        ->first();
        $cr = Cours::find($id);
        return view('Enseignant.cours.show')->with(compact('cours'));
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
        //
    }
}
