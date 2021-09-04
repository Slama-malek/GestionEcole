<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;
use DB;
use App\Groupe;
use App\GroupeClasse;
use App\EleveClasse;
class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $groupe = Groupe::all();
        $eleves = Eleve::orderBy('created_at', 'desc')->paginate(5);

        $classEle=DB::table('eleve_classes')->join('eleves', 'eleve_classes.eleve_id','=','eleves.id')
        ->join('classes', 'eleve_classes.classe_id','=','classes.id_c')
        //->join('groupes', 'eleve_classes.groupe_id','=','groupes.id_g')
        //->where('eleve_classes.groupe_id','=',0)
        ->select('eleves.id', 'eleve_classes.groupe_id','classes.id_c' ,'classes.nom_c' , 'classes.nom_c' ,'eleves.id' , 'classes.id_c' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p','eleves.sexe' )
       ->paginate(5);

        // $eleves = DB::table('eleve_classes')
        // ->join('classes','eleve_classes.classe_id','=','classes.id_c')
        // ->join('eleves' , 'eleve_classes.eleve_id' ,'=' , 'eleves.id')
       
        // //->join('groupes','eleve_classes.groupe_id','=','groupes.id_g')                                   
                                       
        // ->select('classes.nom_c' ,'eleves.id' , 'classes.id_c' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p' )
          
        // ->get();

     
        
        return view('admin.eleves.eleves')->with(compact('eleves' ,'groupe' ,'classEle'));
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
       $eleve = DB::table('eleves')->where('eleves.id' , '=' , $id)->first();

       $classEle=DB::table('eleve_classes')->join('eleves', 'eleve_classes.eleve_id','=','eleves.id')
       ->join('classes', 'eleve_classes.classe_id','=','classes.id_c')
       ->select('eleves.id' , 'eleves.sexe','classes.id_c'  , 'classes.nom_c' ,'eleves.id' ,'eleve_classes.groupe_id', 'classes.id_c' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p' )
       ->where('eleves.id' , '=' , $id)
       ->first();
       
        //$eleves = Eleve::orderBy('created_at', 'desc')->paginate(5);
       /*
        $eleves = DB::table('eleve_classes')
        ->join('groupes','eleve_classes.groupe_id','=','groupes.id_g')
        ->join('classes' , 'eleve_classes.classe_id' ,'=' , 'classes.id')
        ->join('eleves' , 'eleve_classes.eleve_id' ,'=' , 'eleves.id')                                    
        ->where('eleves.id' , '=' , $id)                                
        ->select('classes.nom_c' ,'eleves.id'  ,'classes.id' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p' )
          
        ->get();*/
        //dd($eleves);
        
         return view('admin.eleves.show')->with(compact('eleve' , 'classEle'));
    }

    public function ajout($eleve , $classe) {
        $classEle=DB::table('eleve_classes')->join('eleves', 'eleve_classes.eleve_id','=','eleves.id')
       ->join('classes', 'eleve_classes.classe_id','=','classes.id_c')
       ->select( 'classes.id_c'  , 'classes.nom_c' ,'eleves.id' , 'classes.id_c' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p' )
       ->where('eleves.id' , '=' , $eleve)
       ->first();
        $groupe = DB::table('groupe_classes')->join('groupes','groupe_classes.groupe_id','=','groupes.id_g')
        ->where('groupe_classes.classe_id' ,'=' , $classe)
        ->select('groupes.nom_g','groupes.id_g' )
        ->get();
       
        $eleve = Eleve::find($eleve);
        return view ('admin.eleves.index')->with(compact('groupe','eleve' ,'classEle'));
    }
       public function addGroupeEleve( Request $request , $eleve , $classe)
        {
        
       
       $eleve = EleveClasse::find($eleve);
      
       
        $eleve->groupe_id = $request->input('groupes');
    
       
        $eleve->save();
        

     return  redirect('/admin/eleves' )->with(compact( 'eleve'));
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
