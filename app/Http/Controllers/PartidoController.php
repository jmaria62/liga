<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Team;


class PartidoController extends Controller
{
    
    public function index(){
        
        $partidos = Partido::paginate();       
        return view('partidos.index',compact('partidos'));

    }
    public function create(){
        
        $equipos = Team::all();
        return view('partidos.create',compact('equipos'));
    }

    public function store(Request $request){
       
               
        
        $request->validate([
            'golesLocal' => 'required',
            'golesVisitante' => 'required',
            'fecha' => 'required'
        ]);

        $partido = new Partido();

        $partido->date          = $request->fecha;
        $partido->local_id      = $request->localId;
        $partido->local_goals   = $request->golesLocal;
        $partido->visitor_id    = $request->visitanteId;
        $partido->visitor_goals = $request->golesVisitante;

        //return $partido;

        $partido->save();      

        return redirect()->route('partidos.show',$partido);

    }
    public function show($id){
        $partido = Partido::find($id);
        return view('partidos.show',['partido'=>$partido]);

    }

    public function edit(Partido $partido){
      
        //return $partido;
        $equipos = Team::all();    
    
        return view('partidos.edit',compact('partido'),compact('equipos'));

    }

    public function update(Request $request,Partido $partido){
        //return $request;
        //return $partido;
      

        $partido->date = $request->fecha;
        $partido->local_id = $request->localId;
        $partido->visitor_id = $request->visitanteId;
        $partido->local_goals = $request->golesLocal;
        $partido->visitor_goals = $request->golesVisitante;



        $partido->save();

        return redirect()->route('partidos.show',$partido);
    }

    public function destroy(Partido $partido){

        $partido->delete();
        return redirect()->route('partidos.index');

    }
}

