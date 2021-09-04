<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reclams;
use App\User;
use App\Notifications\ReclamsNotification;

class ReclamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        
        return view('user.reclams');
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
        'nom_p' => 'required',
        'prenom_p' => 'required',
        
        'email' => 'required',
        'tel' => 'required ',
        'sujet' => 'required ',
        'message' => 'required ',
        ]);
        $reclams =  new Reclams ;
        $reclams->nom_p = $request->input('nom_p');
        $reclams->prenom_p = $request->input('prenom_p');
        $reclams->nom_e = $request->input('nom_e');
        $reclams->prenom_e = $request->input('prenom_e');
        $reclams->email = $request->input('email');
        $reclams->tel = $request->input('tel');
        $reclams->sujet= $request->input('sujet');
       
        $reclams->message = $request->input('message');

       // $user = user::find(1);
       // User::find(1)->notify(new ReclamsNotification);
       


        $reclams->save();
        return view('user.reclams');
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
