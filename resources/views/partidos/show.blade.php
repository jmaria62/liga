@extends('layouts.plantilla')

@section('title','partido '. $partido->id)

@section('content')

{{-- <h1>bienvenidos al partido {{$partido->id}}</h1> --}}

<div class="bg-white text-center">
    <div class="text-4xl font-bold">        
        Bienvenidos al partido {{$partido->id}}
    </div>
    
</div>

{{-- <a href="{{route('partidos.index')}}">Volver a partidos</a>
<a href="{{route('partidos.edit',$partido)}}">Editar partido</a> --}}

<nav id="bar" class="flex justify-center ">
    <div class=" flex flex-col md:flex-row justify-center md:space-y-0 my-4 space-y-4  text-center text-gray-500">
      
        <a href="{{route('partidos.index')}}" class="mx-8 hover:text-red-900 ">Volver a partidos</a> 
        <a href="{{route('partidos.edit',$partido)}}" class="mx-8 hover:text-red-900">Editar partido</a> 
        <form action="{{route('partidos.destroy',$partido)}}" method="POST"  class="mx-8 hover:text-red-900"  >
            @csrf
            @method('delete')
            <button type="submit">Eliminar Partido</button>
        </form>
        
    </div>
</nav>




 {{--
<p><strong>Fecha: </strong>{{ $partido->date}}</p>

<p><strong>Equipo local:</strong>{{ $partido->equipolocal->name}} <strong> Goles: </strong> {{ $partido->local_goals}} </p>
<p><strong>Equipo visitante:</strong>{{ $partido->equipovisitante->name}} <strong> Goles: </strong> {{ $partido->visitor_goals}}</p> --}}





<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>


    <label class="uppercase text-sm font-bold opacity-70">
        Fecha
        <br>
        <input type="text" name="fecha" id="" value="{{$partido->date}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
        <br>
    </label>
    

   
    <label class="uppercase text-sm font-bold opacity-70">
        Equipo local
        <br>
        <input type="text" name="golesLocal" value="{{ $partido->equipolocal->name}}" class="readonly p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
       <br>
    </label> 
   

    <label class="uppercase text-sm font-bold opacity-70">
        Goles local
        <br>
        <input type="text" name="golesLocal" value="{{$partido->local_goals}}" class="readonly p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
       <br>
    </label> 

    <label class="uppercase text-sm font-bold opacity-70">
        Equipo visitante
        <br>
        <input type="text" name="golesLocal" value="{{ $partido->equipovisitante->name}}" class="readonly p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
       <br>
    </label> 
   
    

    
    
    <label class="uppercase text-sm font-bold opacity-70">
        Goles visitante
        <br>
        <input type="text" name='golesVisitante' value="{{$partido->visitor_goals}}" class="readonly p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
       <br>
    </label>
    
    


</div>
</div>
</div>

{{-- <form action="{{route('partidos.destroy',$partido)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form> --}}
    
    
@endsection 

