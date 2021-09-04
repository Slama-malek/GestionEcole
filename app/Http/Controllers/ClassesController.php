<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Classe;
use App\Matiere;
use App\Coef;

use App\Groupe;
use App\GroupeClasse;
use App\MatiereClasse;
use Illuminate\Support\Facades\Validator;
class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=DB::table('classes')
        ->paginate(5);
        return view('admin.classes.index')->with(compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupe = Groupe::all();
        return view('admin.classes.create')->with(compact('groupe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $validator = Validator::make($request->all(), [
            'nom_c' => 'required|alpha_num',
            
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $nom=DB::table('classes')->where('classes.nom_c','=',$request->get('nom_c'))->first();
        if($nom!=null){
            return back()->with('err', 'Nom du classe est déja existe ');
        }
        
        $classes = new Classe;
        $classes->nom_c = $request->input('nom_c');
        
        $classes->save();
        
        return redirect('/admin/classes')->with('success', 'La classe a été créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
       
        $classe = DB::table('classes')->where('classes.id_c' , '=' , $id)->first();

        $groupe = Groupe::all();
       $classGrp = DB::table('groupe_classes')
        
        ->join('groupes','groupe_classes.groupe_id','=','groupes.id_g')
        ->join('classes' , 'groupe_classes.classe_id' ,'=' , 'classes.id_c')
                                                
        ->where('classes.id_c' , '=' , $id)     
    
      
        ->paginate(5);
        
        return view('admin.classes.show')->with(compact( 'groupe' ,'classGrp','classe'));
    }
    public function ajoutGroupeClass(Request $request,$id)
    {
        //$classe = Classe::find($id);
        
        $classe = new GroupeClasse;

        $classe->classe_id = $id;
        $classe->groupe_id = $request->input('groupe');
    
       
        $classe->save();
        return  redirect('/admin/class/'.$id)->with('success', 'Groupe est ajouté avec succées');

        
    }
    public function ajout($id)
    {
        $matiere = Matiere::all();

        $classe = DB::table('classes')->where('classes.id_c' , '=' , $id)->first();

        $coef = Coef::all();
       $classMat = DB::table('matiere_classes')
        
        ->join('matieres','matiere_classes.mat_id','=','matieres.id_m')
        ->join('classes' , 'matiere_classes.classe_id' ,'=' , 'classes.id_c')
        ->join('coefs' , 'matiere_classes.coef_id' ,'=' , 'coefs.id_coef')

                                                
        ->where('classes.id_c' , '=' , $id)     
    
      
        ->paginate(5);
        return view('admin.classes.matiere')->with(compact('matiere' ,'coef' ,'classMat','classe'));
    }
    public function ajoutMatiereClass(Request $request,$id)
    {
        //$classe = Classe::find($id);
        $nom=DB::table('matiere_classes')->where('matiere_classes.mat_id','=',$request->get('matieres'))->first();
        if($nom!=null){
            return back()->with('err', 'Matiére est déja existe ');
        }
        $classe = new MatiereClasse ;

        $classe->classe_id = $id;
        $classe->mat_id = $request->input('matieres');
        $classe->coef_id = $request->input('coef');

    
       
        $classe->save();
     return  redirect('/admin/classe/matiere/'.$id)->with('success', 'Matiére est ajouteé avec succées');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $classe = Classe::find($id);
        return view('admin.classes.edit')->with(compact('classe'));
    }
    public function editm($id)
    { $classem = MatiereClasse::find($id);
        $mat=DB::table('matiere_classes')->join('matieres', 'matiere_classes.mat_id','=','matieres.id_m')
        ->join('coefs', 'matiere_classes.coef_id','=','coefs.id_coef')
        ->where('matiere_classes.id' , '=' , $id)
        ->select('matieres.nom_m','coefs.nom_coef')
        ->first();
     
        $matiere = Matiere::all();
        $coef = Coef::all();
        return view('admin.classes.editmatiere')->with(compact('matiere','coef','classem','mat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatem(Request $request, $id)
    {
        $classem = MatiereClasse::find($id);
        $this->validate($request, [
            'matieres' => 'required',
            'coef' => 'required',
            
        ]);
        $classem->mat_id = $request->input('matieres');
        $classem->coef_id = $request->input('coef');
        $classem->save();
        return redirect('/admin/classe-matiere/'.$id)->with('success', 'Matiére est modifiée avec succées');

    }
    public function update(Request $request, $id)
    {
        $classes = Classe::find($id);
        $this->validate($request, [
            'nom_c' => 'required',
            
        ]);
        $classes->nom_c = $request->input('nom_c');
        $classes->save();
        return redirect('/admin/classes')->with('info', 'Classe est modifiée avec succées');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_c)
    {    $classe = Classe::find($id_c);
        $classe->delete();
        return back()->with('info', 'La classe est supprimée avec succés ');
       
    }
    public function destroym($id)
    {    $classem = MatiereClasse::find($id);
        $classem->delete();
        return back()->with('info', 'La matiére est supprimée avec succés ');
       
    }
    public function destroygrp($id)
    {    $classeg = GroupeClasse::find($id);
        $classeg->delete();
        return back()->with('info', 'Le groupe est supprimé avec succés ');
       
    }
}
