@extends('layouts.plantilla')

@section('title','editar partido')

@section('content')
<h1>En esta página podras editar un partido</h1>


<form action="{{route('partidos.update',$partido)}}" method="POST">
   
    @csrf
    @method('put')

    <label for="">
        Fecha
        <br>
        <input type="text" name="fecha" value="{{$partido->date}}" id="">
        <br>
    </label>
    <label for="">
        Equipo local
        <br>
        <select name="localId" id="">
            <option value="{{$partido->local_id}}">{{$partido->equipolocal->name}}</option>
            @foreach ( $equipos as $equipo)
            <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                
            @endforeach
        </select>
        <br>
       
    </label>
    <label for="">
        Goles local
        <br>
        <input type="text" name="golesLocal" value="{{$partido->local_goals}}">
       <br>
    </label>

    <label for="">
        Equipo visitante
        <br>
        <select name="visitanteId" id="">
            <option value="{{$partido->visitor_id}}">{{$partido->equipovisitante->name}}</option>
            @foreach ( $equipos as $equipo)
            <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                
            @endforeach
        </select>
        <br>
       
    </label>
    <label for="">
        Goles visitante
        <br>
        <input type="text" name='golesVisitante' value="{{$partido->visitor_goals}}">
       <br>
    </label>
    <br>
    <button type="submit">Actualizar formulario</button>
   


</form>
    
@endsection    


