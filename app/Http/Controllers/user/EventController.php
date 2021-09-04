<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evenement;
use App\Sortie;
use DB;
use App\Club ;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Evenement::orderBy('created_at', 'desc')->paginate(10);
        return view('user.events.index')->with(compact('events' ) );
    }
    public function indexclubs()
    { $clubs=DB::table('clubs')
        ->paginate(5);
        //$clubs = Club::orderBy('created_at', 'desc')->paginate(10);
       return view('user.events.clubs')->with(compact('clubs') );
       
    }
    public function indexsorties()
    {
        
        $sorties = Sortie::orderBy('created_at', 'desc')->paginate(10);
        return view('user.events.sorties')->with(compact('sorties' ) );
    }
    public function indexClubDetail($id)
    {
        
        $club = Club::find($id);
        return view('user.events.clubdetail')->with(compact('club' ) );
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
        //
    }
}
