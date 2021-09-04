<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.test');
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
            ]);
            $test =  new Test ;

          
        $test->nom = $request->input('nom');
        $test->prenom = $request->input('prenom');
        $test->date_naiss = $request->input('date_naiss');
        $test->lieu_naiss = $request->input('lieu_naiss');
        
        $test->nom_p = $request->input('nom_p');
        $test->prenom_p = $request->input('prenom_p');
        $test->add_p = $request->input('add_p');
        $test->tel_p = $request->input('tel_p');
        $test->gsm_p = $request->input('gsm_p');
        $test->profession_p = $request->input('profession_p');
        $test->email_p = $request->input('email_p');

        $test->nom_m = $request->input('nom_m');
        $test->prenom_m = $request->input('prenom_m');
        $test->add_m = $request->input('add_m');
        $test->tel_m = $request->input('tel_m');
        $test->gsm_m = $request->input('gsm_m');
        $test->profession_m = $request->input('profession_m');
        $test->email_m = $request->input('email_m');
        $test->save();
        return 'ok';
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
