<?php

namespace App\Http\Controllers\user;
use App\Notifications\InscriEleve;
use \Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classe;
use App\Eleve;
use App\User;
use Auth;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::all();
        
        return view('user.inscription')->with(compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        $classes = Classe::all();
        
        return view('user.inscription')->with(compact('classes'));
        */
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
            'prenom' => 'required',
            'lieu_naiss' => 'required ',
            'date_naiss' => 'required ',
            'lieu_naiss' => 'required ',

            'nom_p' => 'required ',
            'prenom_p' => 'required ',
            'add_p' => 'required ',
            
            'gsm_p' => 'required ',
            'profession_p' => 'required ',
            'email_p' => 'required ',

            'nom_m' => 'required ',
            'prenom_m' => 'required ',
            'add_m' => 'required ',
            
            'gsm_m' => 'required ',
            'profession_m' => 'required ',
            'email_m' => 'required ',
            'classes'  => 'required ',
            'sexe'  => 'required '
            

            
            
        ]);
        $eleves =  new Eleve ;
        $eleves->nom = $request->input('nom');
        $eleves->prenom = $request->input('prenom');
        $eleves->lieu_naiss = $request->input('lieu_naiss');
        $eleves->date_naiss = $request->input('date_naiss');

       

        $eleves->nom_p = $request->input('nom_p');
        $eleves->prenom_p = $request->input('prenom_p');
        $eleves->add_p = $request->input('add_p');
        $eleves->tel_p = $request->input('tel_p');
        $eleves->gsm_p = $request->input('gsm_p');
        $eleves->profession_p = $request->input('profession_p');
        $eleves->email_p = $request->input('email_p');

        $eleves->nom_m = $request->input('nom_m');
        $eleves->prenom_m = $request->input('prenom_m');
        $eleves->add_m = $request->input('add_m');
        $eleves->tel_m = $request->input('tel_m');
        $eleves->gsm_m = $request->input('gsm_m');
        $eleves->profession_m = $request->input('profession_m');
        $eleves->email_m = $request->input('email_m');
        if($request->input('sexe') == "F" )
        {
            $eleves->sexe=1;
        }
        
        else
        {
            $eleves->sexe=0;
        }
        
        $eleves->par_id = Auth::user()->id;
       

       // $user = user::find(1);
       // User::find(1)->notify(new InscriEleve);
        
        $eleves->notify(new InscriEleve);
 
        $eleves->save();
        $eleves->classes()->sync($request->classes);
        return view('user.ajoutEleve');
       

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
