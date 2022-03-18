@extends('layouts.plantilla')

@section('title','editar equipo')

@section('content')
<h1>en esta página podras editar un equipo</h1>

<form action="{{route('equipos.update',$equipo)}}" method="POST">

    @csrf
    @method('put')
    
    <label for="">
        Nombre
        <br>
        <input type="text" name='nombre' value="{{$equipo->name}}">
        <br>
    </label>

    
    <label for="">
       Siglas
       <br>
        <input type="text" name='siglas' value="{{$equipo->siglas}}">
       <br>
    </label>
    
    <button type="submit">Actualizar formulario</button>

</form>
    
@endsection    

