<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use App\Coef;
use DB;
use App\EnseignantMatiere;
use Illuminate\Support\Facades\Validator;
class MatieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $coef = Coef::all();
        $mat = Matiere::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.matieres.index')->with(compact('mat','coef'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matieres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom_m' => 'required|alpha_num',
            
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $nom=DB::table('matieres')->where('matieres.nom_m','=',$request->get('nom_m'))->first();
        if($nom!=null){
            return back()->with('err', 'Matiére est déja existe ');
        }
        $matieres = new Matiere;
        
        $matieres->nom_m = $request->input('nom_m');
       
        $matieres->save();
        
        return redirect('/admin/matieres')->with('success', 'Matiere est ajoutée avec succées !');
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
        $matiere = Matiere::find($id);
        $coef = Coef::all();

        return view('admin.matieres.edit')->with(compact('matiere','coef'));
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
        $matieres = Matiere::find($id);
        $this->validate($request, [
            'nom_m' => 'required',
            
            
            
        ]);
        $matieres->nom_m = $request->input('nom_m');
       
        $matieres->save();
        return redirect('/admin/matieres')->with('success' , 'Matiére est modifiée avec succées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_m)
    {
        $matieres = Matiere::find($id_m);
        $matieres->delete();
        return back()->with('info', 'Matiére est supprimée avec succées ');
    }
    public function ajout($id)
    {
        $mat = Matiere::all();
        $ensgs=DB::table('enseignants')->join('users' , 'users.id' ,'=' ,'enseignants.id_en')
        
        ->where('enseignants.id_en' ,'=' , $id)
        ->select('users.name' , 'users.email' ,'enseignants.id_en' )
        ->first();
        return view('admin.matieres.ajoutMatiere')->with(compact('ensgs' , 'mat'));
    }
    public function ajoutMatiere(Request $request ,$id)
    {
        
        $ens = new EnseignantClasse ;
          
        $ens->ens_id = $id;
        $ens->classe_id = $request->input('classes');
        $ens->mat_id = $request->input('matieres');
        $ens->groupe_id = $request->input('groupes');

        $ens->save();
        
        return back();
        
    }
}
