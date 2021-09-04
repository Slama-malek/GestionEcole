<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coef;
use DB;
use Illuminate\Support\Facades\Validator;
class CoefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $coef = DB::table('coefs')
        ->paginate(5);
        return view('admin.coef.index')->with(compact('coef'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coef.create');
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
            'nom_coef' => 'required|regex:/^\d*(\.\d{1})?$/',
            
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $nom=DB::table('coefs')->where('coefs.nom_coef','=',$request->get('nom_coef'))->first();
        if($nom!=null){
            return back()->with('err', 'Coefficient est déja existe ');
        }
        $coef = new Coef;
        $coef->nom_coef = $request->input('nom_coef');
       
        $coef->save();
        
        return redirect('/admin/coef')->with('success', 'Coefficient est ajouté avec succés !');
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
        $coef = Coef::find($id);
        return view('admin.coef.edit')->with(compact('coef'));
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
        $coef = Coef::find($id);
        // $this->validate($request, [
        //     'nom_coef' => 'required|integer|size:10',
            
            
        // ]);

        $validator = Validator::make($request->all(), [
            'nom_coef' => 'required|regex:/^\d*(\.\d{1})?$/',
            
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $coef->nom_coef = $request->input('nom_coef');
      
        $coef->save();
        return redirect('/admin/coef')->with('success' , 'Coef est modifiée avec succées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coef = Coef::find($id);
        $coef->delete();
        return back()->with('info', 'Coefficient est supprimé avec succées ');
    }
}
