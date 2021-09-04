<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Eleve;
use App\Enseignant;
use App\Tuteur;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table('users')
        ->orderBy('created_at', 'desc')
                            ->paginate(5);
       $eleves = Eleve::orderBy('created_at', 'desc')->paginate(5);
                            
  
        return view('admin.user',compact('users','eleves'));
    }
    /**verifier l enseignant */
    public function enseignantsaverifier()
    {
        $users=DB::table('users')
        ->where('usertype' , '=','enseignant' )
        //->select('usertype' , 'verif' , 'id','name' ,'email' )
        ->whereNull('verif')
                            ->get();
       
  
        return view('admin.enseignants.enseignantsAverifier',compact('users'));
    }
    public function verifier($id)

    {
         $user = User::find($id);
         $ensg = new Enseignant ;
         $ensg->id_en = $id;
         $ensg->save();
         $user->verif = "parent";
         $user->save();
        return redirect('/admin/enseignantsAverifier')->with('success', 'Enseignant est bien verifié ');
        
    }

    public function  enseignantsVerifier()
    {
        $users=DB::table('enseignants')
        ->join('users' , 'enseignants.id_en' ,'=' , 'users.id')
        
        ->select('users.name' , 'enseignants.id_en' ,'users.email' , 'users.id' )
        ->paginate(5);
       

return view('admin.enseignants.enseignantVerifier',compact('users'));
    }





    /** *********** verifier parent ********************************** */

    public function ParentAverifier()
    {
        $users=DB::table('users')
        ->where('usertype' , '=','parent' )
        //->select('usertype' , 'verif' , 'id','name' ,'email' )
        ->whereNull('verif')
                            ->get();
       
  
        return view('admin.parents.parentAverifier',compact('users'));
    }


     /** *********** les parents verifiés  ********************************** */

     public function Parentverifier()
     {
         $users=DB::table('users')
         ->where('usertype' , '=','parent' )
         //->select('usertype' , 'verif' , 'id','name' ,'email' )
         ->where('verif' ,'=','parent')
                             ->get();
        
   
         return view('admin.parents.parentsVerifiés',compact('users'));
     }
    public function verifierParent($id)

    {
         $user = User::find($id);
         $par = new Tuteur ;
         $par->id_p = $id;
         $par->save();
         $user->verif = "parent";
         $user->save();
        return redirect('/admin/parentAverifier')->with('success', 'Parent est bien verifié ');
        
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
        $user=User::find($request->get('id'));
        $user->delete();
        
    }
}
