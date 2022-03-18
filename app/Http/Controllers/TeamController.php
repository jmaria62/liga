<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Hamcrest\Text\IsEqualIgnoringWhiteSpace;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    //
    public function index(){
        $equipos = Team::paginate();
        //return $equipos;
        return view('equipos.index',compact('equipos'));
    }
    public function create(){
        return view('equipos.create');
    }
    public function store(Request $request){
    $request->validate([
        'nombre'=> 'required',
        'siglas' => 'required'
    
    ]);

        $equipo = new Team();
        $equipo->name = $request->nombre;
        $equipo->siglas = $request->siglas;

        $equipo->save();

        return redirect()->route('equipos.show',$equipo);

    }
    public function show($id){
        $equipo = Team::find($id);
        return view('equipos.show',['equipo'=>$equipo]);
        

    }

    public function edit(Team $equipo){
        //$equipo = Team::find($id);
        //return $equipo;
        return view('equipos.edit',['equipo'=>$equipo]);

    }

    public function update(Request $request,Team $equipo){
        //return $request;
        $equipo->name = $request->nombre;
        $equipo->siglas = $request->siglas;

        $equipo->save();

        return redirect()->route('equipos.show',$equipo);
    }

    public function destroy(Team $equipo){

        $equipo->delete();
        return redirect()->route('equipos.index');

    }
}
