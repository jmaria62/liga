@extends('layouts.plantilla')

@section('title','crear partidos')

@section('content')
{{-- <h1>en esta página podras crear un partido</h1> --}}
<div class="bg-white text-center">
    <div class="text-4xl font-bold">
       Crear partido
    </div>
    
</div>

<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>

<form action="{{route('partidos.store')}}" method="POST">
    @csrf

    <label class="uppercase text-sm font-bold opacity-70">
        Fecha
        <br>
        <input type="date" name="fecha" id="" value="{{old('fecha')}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
        <br>
    </label>
    @error('fecha')    
        <small>
            *{{$message}}
        </small>
        <br>        
    @enderror


    <label class="uppercase text-sm font-bold opacity-70">
        Equipo local
        <br>
        <select name="localId" id="">
            @foreach ( $equipos as $equipo)
            <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                
            @endforeach
        </select>
        <br>
       
    </label>
    @error('localId')    
        <small>
            *{{$message}}
        </small>
        <br>        
    @enderror

    <label class="uppercase text-sm font-bold opacity-70">
        Goles local
        <br>
        <input type="text" name="golesLocal" value="{{old('golesLocal',0)}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
       <br>
    </label>
    @error('golesLocal')    
        <small>
            *{{$message}}
        </small>
        <br>        
    @enderror


    

    <label class="uppercase text-sm font-bold opacity-70">
        Equipo visitante
        <br>
        <select name="visitanteId" id="">
            @foreach ( $equipos as $equipo)
            <option value="{{$equipo->id}}">{{$equipo->name}}</option>
                
            @endforeach
        </select>
        <br>
       
    </label>
    @error('visitanteId')    
        <small>
            *{{$message}}
        </small>
        <br>        
    @enderror

    <label class="uppercase text-sm font-bold opacity-70">
        Goles visitante
        <br>
        <input type="text" name='golesVisitante' value="{{old('golesVisitante',0)}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
       <br>
    </label>
    @error('golesVisitante')    
        <small>
            *{{$message}}
        </small>
        <br>        
    @enderror

    <br>
    {{-- <button type="submit">Enviar formulario</button> --}}
    <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
   


</form>
</div>
</div>
</div>




@endsection    


