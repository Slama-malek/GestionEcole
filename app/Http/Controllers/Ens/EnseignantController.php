<?php

namespace App\Http\Controllers\Ens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Presence;
use App\User;
use App\Note;
class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $ensgs = DB::table('enseignant_classes')->join('classes' , 'enseignant_classes.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'enseignant_classes.groupe_id' ,'=' ,'groupes.id_g')
        ->join('users' , 'enseignant_classes.ens_id' ,'=' ,'users.id')
        ->join('enseignants' , 'enseignant_classes.ens_id' ,'=' ,'enseignants.id_en')
        ->join('matieres' , 'enseignant_classes.mat_id' ,'=' ,'matieres.id_m')
        ->where('enseignants.id_en' , '=' ,Auth::user()->id )

        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' ,'users.name','matieres.id_m' ,'matieres.nom_m')
        ->distinct()
        ->get();   


        $cours = DB::table('cours')->where('cours.ens_id' , '=' , Auth::user()->id)
        ->join('matieres' ,'matieres.id_m' ,'=' ,'cours.mat_id')
        ->select('matieres.nom_m' , 'cours.nom_co' , 'cours.file','cours.created_at')
        ->paginate(3);
        return view('Enseignant.dashboard')->with(compact('ensgs' ,'cours'));
        
        
    }
    public function eleves($classe , $groupe ,$mat)
    {
        $matiere = DB::table('matieres')->where('id_m' , '=' , $mat)
        ->select('matieres.nom_m' , 'matieres.id_m')->first();

        $eleves = DB::table('eleve_classes')->join('classes' , 'eleve_classes.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'eleve_classes.eleve_id' ,'=' ,'eleves.id')
       
        //->where('enseignants.id_en' , '=' ,Auth::user()->id )
         ->where('classes.id_c' ,'=' , $classe)
         ->where('groupes.id_g' ,'=' , $groupe)
        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' , 'eleves.nom' ,'eleves.prenom', 'eleves.id' )
        ->distinct()
        ->get(); 

        $eleve = DB::table('eleve_classes')->join('classes' , 'eleve_classes.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'eleve_classes.eleve_id' ,'=' ,'eleves.id')
       
        //->where('enseignants.id_en' , '=' ,Auth::user()->id )
         ->where('classes.id_c' ,'=' , $classe)
         ->where('groupes.id_g' ,'=' , $groupe)
        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' , 'eleves.nom' ,'eleves.prenom', 'eleves.id' )
        ->distinct()
        ->first();
        
        return view('Enseignant.eleves')->with(compact('eleves' , 'eleve','matiere'));
    }
    public function presence( Request $request , $classe, $groupe  ,$mat)
    {
        $date = date('Y-m-d');
       
        $ens = User::findOrFail(auth()->user()->id);
        $dataexist = Presence::whereDate('date',$date)
                                ->where('classe_id',$classe)
                                ->where('groupe_id',$groupe)
                                ->where('mat_id',$mat)
                                ->get();

        if (count($dataexist) !== 0 ) {
            return back()
            ->with('success','Présence est déjà prise!
            ');

        }
        $request->validate([
           
            'presences'   => 'required'
        ]);
        foreach ($request->presences as $eleve => $presence) {

            if( $presence == 'present' ) {
                $status = true;
            } else if( $presence == 'absent' ){
                $status = false;
            }

            // Presence::create([
            //     'classe_id'  => $classe,
            //     'ens_id'     => $request->ens,
            //     'eleve_id'   => $request->eleve,
            //     'date'       => $date,
            //     'status'     => $status
            // ]);
            $presence = new Presence ;
            $presence->classe_id = $classe;
            $presence->groupe_id = $groupe;
            $presence->ens_id = $request->ens;
            $presence->eleve_id = $eleve;
            $presence->mat_id = $mat;
            $presence->date = $date;
            $presence->status = $status;
            $presence->save();
        }

        return redirect('/ens/presences/'.$classe.'/'.$groupe.'/'.$mat)->with('info' ,'Présence enregistrée avec success! ');

    }
    public function listePresence($classe , $groupe ,$mat)
    {
        $matiere = DB::table('matieres')->where('id_m' , '=' , $mat)
        ->select('matieres.nom_m' , 'matieres.id_m')->first();
        
        $presence = DB::table('presences')->join('classes' , 'presences.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'presences.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'presences.eleve_id' ,'=' ,'eleves.id')
       
         ->where('presences.classe_id','=',$classe)
         ->where('presences.groupe_id','=',$groupe)
         ->where('presences.mat_id','=',$mat)
        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' , 'eleves.nom' ,'eleves.prenom', 'eleves.id' ,'presences.status','presences.date')
       
        ->distinct()
        ->get(); 

        $eleves = DB::table('eleve_classes')->join('classes' , 'eleve_classes.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'eleve_classes.eleve_id' ,'=' ,'eleves.id')
       ->join('presences' ,'eleve_classes.eleve_id' ,'=' ,'presences.eleve_id')
        //->where('enseignants.id_en' , '=' ,Auth::user()->id )
         ->where('classes.id_c' ,'=' , $classe)
         ->where('groupes.id_g' ,'=' , $groupe)
        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' ,'presences.status', 'eleves.nom' ,'eleves.prenom', 'eleves.id' )
        ->distinct()
        ->get(); 
       
        $pdate = DB::table('presences')->join('classes' , 'presences.classe_id' ,'=' ,'classes.id_c' )
        ->join('groupes' , 'presences.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'presences.eleve_id' ,'=' ,'eleves.id')
       
         ->where('presences.classe_id','=',$classe)
         ->where('presences.groupe_id','=',$groupe)
         ->where('presences.mat_id','=',$mat)
         ->select('classes.id_c' , 'presences.mat_id' ,'groupes.id_g' ,'presences.date','classes.nom_c', 'groupes.nom_g')
         ->groupBy('presences.date', 'presences.mat_id', 'groupes.id_g', 'classes.id_c')
         ->orderByDesc('presences.date')
         ->get();

         $eleve = DB::table('eleve_classes')->join('classes' , 'eleve_classes.classe_id' ,'=' ,'classes.id_c')
         ->join('groupes' , 'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
         
         ->join('eleves' , 'eleve_classes.eleve_id' ,'=' ,'eleves.id')
        
         //->where('enseignants.id_en' , '=' ,Auth::user()->id )
          ->where('classes.id_c' ,'=' , $classe)
          ->where('groupes.id_g' ,'=' , $groupe)
         ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' , 'eleves.nom' ,'eleves.prenom', 'eleves.id' )
         ->distinct()
         ->first();
        return view('Enseignant.presences')->with(compact('matiere','eleves', 'eleve','pdate','presence'));
    }
    public function notes($classe , $groupe ,$mat)
    {
        $matiere = DB::table('matiere_classes')
        ->join('matieres' , 'matieres.id_m' , '=' ,'matiere_classes.mat_id')
        ->join('coefs' , 'coefs.id_coef' ,'=' ,'matiere_classes.coef_id')
        ->where('matiere_classes.mat_id' , '=' , $mat)
        ->select('matieres.nom_m' , 'matieres.id_m','coefs.id_coef','coefs.nom_coef')->first();
        
        $eleves = DB::table('eleve_classes')->join('classes' , 'eleve_classes.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'eleve_classes.eleve_id' ,'=' ,'eleves.id')
       

        ->where('classes.id_c' ,'=' , $classe)
        ->where('groupes.id_g' ,'=' , $groupe)
        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' , 'eleves.nom' ,'eleves.prenom', 'eleves.id' )
        ->distinct()
        ->get(); 
        $eleve = DB::table('eleve_classes')->join('classes' , 'eleve_classes.classe_id' ,'=' ,'classes.id_c')
        ->join('groupes' , 'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('eleves' , 'eleve_classes.eleve_id' ,'=' ,'eleves.id')
       
        //->where('enseignants.id_en' , '=' ,Auth::user()->id )
         ->where('classes.id_c' ,'=' , $classe)
         ->where('groupes.id_g' ,'=' , $groupe)
        ->select('classes.id_c' , 'classes.nom_c' ,'groupes.id_g' , 'groupes.nom_g' , 'eleves.nom' ,'eleves.prenom', 'eleves.id' )
        ->distinct()
        ->first();
        return view('Enseignant.notes.index')
        ->with(compact('eleves','matiere' ,'eleve'));
    }
    public function addNotes(Request $request , $classe , $groupe ,$mat)
    {
        
        
        $request->validate([
           
            'note'   => 'required|max:20 |min:0 '
        ]);
        foreach ($request->note as $eleve => $nt) {
            
           
        $nt = new Note ;
        $nt->classe_id = $classe;
        $nt->groupe_id = $groupe;
        $nt->mat_id = $mat;
        $nt->ens_id = $request->ens;
        $nt->eleve_id = $eleve;
        $nt->note= $request->note[$eleve];
        $nt->note1= $request->notee[$eleve];
        $nt->coef_id =$request->coef;
        $nt->save();
       }
        
        return redirect('/ens/allnotes/'.$classe.'/'.$groupe.'/'.$mat)->with('info' , 'Les Notes sont ajoutés avec succés');
    }
    public function allnotes($classe , $groupe ,$mat)
    {
        $nts = DB::table('notes')->join('matieres' , 'notes.mat_id' ,'=' ,'matieres.id_m')
        ->where('notes.mat_id','=' ,$mat)
        ->join('eleves' ,'notes.eleve_id' ,'=' ,'eleves.id')
        ->join('classes' ,'notes.classe_id' ,'=' ,'classes.id_c')
        ->where('notes.classe_id','=' ,$classe)
        ->join('groupes' ,'notes.groupe_id' ,'=' ,'groupes.id_g')
        ->where('notes.groupe_id','=' ,$groupe)
        ->join('enseignants' ,'notes.ens_id' ,'=' ,'enseignants.id_en')
        ->where('notes.ens_id','=' ,Auth::user()->id)
->select('matieres.id_m' ,'matieres.nom_m' ,'notes.created_at' ,'eleves.id' ,'eleves.nom','eleves.prenom' ,'classes.id_c' ,'classes.nom_c' , 'groupes.id_g' ,'groupes.nom_g','notes.note','notes.note1')
->first();

/*******************************all notes *************************** */

       $note = DB::table('notes')->join('matieres' , 'notes.mat_id' ,'=' ,'matieres.id_m')
                                ->where('notes.mat_id','=' ,$mat)
                                ->join('eleves' ,'notes.eleve_id' ,'=' ,'eleves.id')
                                ->join('classes' ,'notes.classe_id' ,'=' ,'classes.id_c')
                                ->where('notes.classe_id','=' ,$classe)
                                ->join('groupes' ,'notes.groupe_id' ,'=' ,'groupes.id_g')
                                ->where('notes.groupe_id','=' ,$groupe)
                                ->join('enseignants' ,'notes.ens_id' ,'=' ,'enseignants.id_en')
                                ->where('notes.ens_id','=' ,Auth::user()->id)
        
                                ->select('matieres.id_m' ,'matieres.nom_m' ,'eleves.id' ,'eleves.nom','eleves.prenom' ,'classes.id_c' ,'classes.nom_c' , 'groupes.id_g' ,'groupes.nom_g','notes.note','notes.note1')
                               
                                ->get();
                                return view('Enseignant.notes.allNotes')->with(compact('note' ,'nts'));


    }
    public function tousnote()
    {
        $mat = DB::table('enseignant_classes')->join('matieres' , 'enseignant_classes.mat_id' ,'=' ,'matieres.id_m')
        
       
        // ->join('classes' ,'enseignant_classes.classe_id' ,'=' ,'classes.id_c')
        
        // ->join('groupes' ,'enseignant_classes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('enseignants' ,'enseignant_classes.ens_id' ,'=' ,'enseignants.id_en')
        ->where('enseignant_classes.ens_id','=' ,Auth::user()->id)
        
        ->select('matieres.id_m' ,'matieres.nom_m'  )
        ->distinct()
        ->get();

        $classes = DB::table('enseignant_classes')        
       
         ->join('classes' ,'enseignant_classes.classe_id' ,'=' ,'classes.id_c')
        
         ->join('enseignants' ,'enseignant_classes.ens_id' ,'=' ,'enseignants.id_en')
         ->where('enseignant_classes.ens_id','=' ,Auth::user()->id)
         ->select('classes.id_c' ,'classes.nom_c'  )
         ->distinct()
         ->get();
        //dd($note);
        $groupes = DB::table('enseignant_classes') 
        ->join('groupes' ,'enseignant_classes.groupe_id' ,'=' ,'groupes.id_g')
        ->join('enseignants' ,'enseignant_classes.ens_id' ,'=' ,'enseignants.id_en')
         ->where('enseignant_classes.ens_id','=' ,Auth::user()->id)
         ->select('groupes.id_g' ,'groupes.nom_g' )
         ->distinct()
         ->get();

        return view ('Enseignant.notes.notes')->with(compact('classes','mat' , 'groupes'));
    }
    public function recherche(Request $request)
    {
        $note = DB::table('notes')
        ->join('matieres' , 'notes.mat_id' ,'=' ,'matieres.id_m')
        
         ->join('classes' ,'notes.classe_id' ,'=' ,'classes.id_c')
        
        ->join('groupes' ,'notes.groupe_id' ,'=' ,'groupes.id_g')
        
        ->join('enseignants' ,'notes.ens_id' ,'=' ,'enseignants.id_en')
        ->where('notes.ens_id','=' ,Auth::user()->id)
        ->where('notes.mat_id','=' ,$request->matieres)
        ->where('notes.classe_id','=' ,$request->classes)
        ->where('notes.groupe_id','=' ,$request->groupes)
->select('groupes.id_g' ,'groupes.nom_g','classes.id_c' ,'classes.nom_c' ,'matieres.id_m' ,'matieres.nom_m','notes.eleve_id','notes.note')
        ->get();
        dd($request->all());
    }

    
    public function edit($id)
    {
        
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
