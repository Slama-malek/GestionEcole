<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Classe;
use App\Groupe;
use App\Matiere;
use App\EnseignantClasse;
class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    //    $classes= Classe::all();
    //   $groupes = DB::table('groupe_classes')->join('groupes' ,'groupe_classes.id' , '=' ,'groupes.id_g')
      
    //   ->select('groupes.id_g' ,'groupes.nom_g')
    //   ->get();

    //     $ensgs=DB::table('enseignants')->join('users' , 'enseignants.id_en' ,'=' , 'users.id')
    //     //->where('enseignants.id_en ' ,'=' , $id)
    //     ->select('users.name' , 'users.email' , 'users.id' , 'enseignants.id_en ' )
    //      ->first();
    //     return view('admin.enseignants.index')->with(compact('ensgs' , 'classes' ,'groupes'));
    // 
}
        public function ajout($ens)
        {
            $classEns=DB::table('enseignant_classes')->join('enseignants', 'enseignant_classes.ens_id','=','enseignants.id_en')
       ->join('classes', 'enseignant_classes.classe_id','=','classes.id_c')
       ->select( 'classes.id_c'  , 'classes.nom_c' ,'enseignants.id_en' , 'classes.id_c'  )
       ->where('enseignants.id_en' , '=' , $ens)
       ->get();

         return view('admin.enseignants.ajout')->with(compact('classEns'))  ;
        }
   
    
        public function addClassEns( Request $request ,$id  )
        {
            $this->validate($request, [
                'classe_id' => 'required',
                'groupe_id' => 'required',
                'mat_id' => 'required'
            ]);
 
           
         
                $ens = new EnseignantClasse ;
           
            
                $ens->ens_id = $id;
                $ens->classe_id = $request->input('classes');
                $ens->groupe_id = $request->input('groupes');
                $ens->mat_id = $request->input('matieres');
          
            
            
          
           
       
        $ens->save();
        

     return  redirect('/admin/enseignant/'.$id )->with('success','Ajout avec succés',compact('eleve'));
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
            'nom' => 'required',
           
        ]);
        $ens =  new Enseignant ;
        
        $ens->save();
        $ens->classes()->sync($request->classes);
        return view('admin.enseignants.enseignant.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $mat = Matiere::all();
        $ensgs=DB::table('enseignants')->join('users' , 'users.id' ,'=' ,'enseignants.id_en')
        
        ->where('enseignants.id_en' ,'=' , $id)
        ->select('users.name' , 'users.email' ,'enseignants.id_en' )
        ->first();
        

        // $classEns=DB::table('enseignant_classes')->join('enseignants', 'enseignant_classes.ens_id','=','enseignants.id_en')
        // ->join('classes', 'enseignant_classes.classe_id','=','classes.id_c')
        
        // ->select( 'classes.id_c'  , 'classes.nom_c' ,'enseignants.id_en' , 'classes.id_c' ,'enseignant_classes.classe_id' )
      
        // ->where('enseignants.id_en' , '=' , $id )
        // ->get();
       
      

        return view('admin.enseignants.index')->with(compact('ensgs' , 'classEns' ,'classes' ,'groupes','mat'));
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
     * @param  \Illuminate\Http\Request  /registerEnseignant$request
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
