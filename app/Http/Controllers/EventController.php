<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event ;
use App\Evenement ; 
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Evenement::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.event.index')->with(compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
                'description' => 'nullable',
                
                'location' => 'required',
                'telephone' => 'required|max:8',
               
    
                'image' => 'image|required|max:1999'
            ]);
            // Handling Storage
            if(($request->input('dated'))>($request->input('datef')))
            return redirect('/admin/evenement')->with('err', 'donner date valide');

            $filenameWithExtension = $request->file('image')->getClientOriginalName();
            $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('storage/images/', $filenameToStore);
            $event = new Evenement;
            $event->titre = $request->input('nom');
           
            $event->telephone = $request->input('telephone');
            $event->location = $request->input('location');
            $event->prix = $request->input('prix');
            $event->dated = $request->input('dated');
            $event->datef = $request->input('datef');
            $event->heured = $request->input('horaired');
            $event->heuref = $request->input('horairef');
            if ($request->has('description'))
                $event->description = $request->input('description');
            else
                $event->description = '';
            $event->image = $filenameToStore;
            
            $event->save();
            return redirect('/admin/evenement')->with('success', 'L événement a été créé avec succès');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Evenement::find($id);
            return view('admin.event.show')->with(compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Evenement::find($id);
            
                return view('admin.event.edit')->with('event', $event);
        
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
        $event = Evenement::find($id);
            
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'nullable',
            'prix' => 'required',
            

            'image' => 'image|required|max:1999'
        ]);
        // Handling Storage
        if ($request->hasFile('image')) {
            $filenameWithExtension = $request->file('image')->getClientOriginalName();
            $filenameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filenameWithoutExtension.'_'.time().'.'.$extension;
        }
        else {
            $filenameToStore = $event->image;
        }
        if ($filenameToStore != $event->image) {
            Storage::delete('storage/images/'.$event->image);
            $path = $request->file('image')->storeAs('storage/images/', $filenameToStore);
            $event->image = $filenameToStore;
        }
        $event->titre = $request->input('nom');
        $event->telephone = $request->input('telephone');
        $event->location = $request->input('location');
        $event->prix = $request->input('prix');
        $event->dated = $request->input('dated');
        $event->datef = $request->input('datef');
        $event->heured = $request->input('horaired');
        $event->heuref = $request->input('horairef');
        if ($request->has('description'))
            $event->description = $request->input('description');
        else
            $event->description = '';

        $event->save();
        return redirect('/admin/evenement')->with('success', 'L Evénement a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Evenement::find($id);
             
        $event->delete();
        return redirect('/admin/evenement')->with('info', 'L événement a été supprimé avec succès');
    }
}
