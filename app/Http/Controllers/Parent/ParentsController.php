<?php

namespace App\Http\Controllers\Parent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Eleve;
class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = DB::table('eleve_classes')
        ->join('eleves' ,'eleve_classes.eleve_id' ,'=' ,'eleves.id')
        ->join('classes' ,'eleve_classes.classe_id' ,'=' ,'classes.id_c')
       
        ->where('eleves.par_id' ,'=' , Auth::user()->id)
        ->select('eleves.nom' , 'eleves.prenom' ,'eleves.sexe' , 'eleves.id', 'eleves.date_naiss','classes.nom_c')
        ->get();

       
        return view('parents.dashboard')->with(compact('eleves'));
    }
    public  function eleve($id)
    {
        $eleve  = Eleve::find($id);
        $presence = DB::table('presences')
        ->join('eleves','presences.eleve_id','=' , 'eleves.id')
        ->join('classes','presences.classe_id','=' , 'classes.id_c')
        ->join('groupes','presences.groupe_id','=' , 'groupes.id_g')
        ->join('matieres','presences.mat_id','=' , 'matieres.id_m')
        ->join('users','presences.ens_id','=' , 'users.id')
        ->where('presences.eleve_id','=' ,$id)
        ->where('presences.status','=' ,0)
        ->select('eleves.nom' ,'classes.nom_c','groupes.nom_g' ,'presences.status' ,'users.name' ,'matieres.nom_m' ,'presences.date')
        ->get();
        return view('parents.detailEleve')->with(compact('eleve','presence'));
    } 
    public function cours($id)
    {
        $eleve  = Eleve::find($id);

        $classe  = DB::table('eleve_classes')
        ->where('eleve_classes.eleve_id','=',$id)
        //->select('eleve_classes.classe_id')
        ->first();
        $groupe  = DB::table('eleve_classes')
        ->where('eleve_classes.eleve_id','=',$id)
        ->select('eleve_classes.groupe_id')
        ->first();
        $matiere=DB::table('matiere_classes')
        
        ->join('matieres','matiere_classes.mat_id','=' , 'matieres.id_m')
        ->where('matiere_classes.classe_id','=',$classe->classe_id)
        
        ->select('matieres.nom_m' ,'matieres.id_m')
        ->distinct()
        ->get(); 
        return view('parents.cours')->with(compact('matiere','eleve'));
    }
    public function notes($id)
    {
        $eleve  = Eleve::find($id);
        $notes = DB::table('notes')
        
        ->join('matieres','notes.mat_id','=' , 'matieres.id_m')
        ->where('notes.eleve_id','=',$id)
        ->select('matieres.nom_m' ,'matieres.id_m','notes.note')
        ->get();
        return view('parents.notes')->with(compact('matiere','eleve','notes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
