
@extends('layouts.plantilla')

@section('title','equipo '.$equipo)

@section('content')

{{-- <h1>bienvenidos al equipo {{$equipo->name}}</h1>
<a href="{{route('equipos.index')}}">Volver a equipos</a>
<br>
<a href="{{route('equipos.edit',$equipo)}}">Editar equipo</a> --}}

<div class="bg-white text-center">
    <div class="text-4xl font-bold">        
        Bienvenidos al equipo {{$equipo->name}}
    </div>
    
</div>

<nav id="bar" class="flex justify-center ">
    <div class=" flex flex-col md:flex-row justify-center md:space-y-0 my-4 space-y-4  text-center text-gray-500">
      
        <a href="{{route('equipos.index')}}" class="mx-8 hover:text-red-900 ">Volver a equipos</a> 
        <a href="{{route('equipos.edit',$equipo)}}" class="mx-8 hover:text-red-900">Editar equipo</a> 
        <form action="{{route('equipos.destroy',$equipo)}}" method="POST"  class="mx-8 hover:text-red-900"  >
            @csrf
            @method('delete')
            <button type="submit">Eliminar Equipo</button>
        </form>
        
    </div>
</nav>


<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>

           
               
                <hr class="my-6">
                <label class="uppercase text-sm font-bold opacity-70">Nombre</label>
                <input type="text" name='nombre' value="{{$equipo->name}}" class="readonly p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                

                <label class="uppercase text-sm font-bold opacity-70">Siglas</label>
                <input type="text" name='siglas' value="{{$equipo->siglas}}" class="readonly p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
               

        </div>
    </div>
</div>
    


{{-- <form action="{{route('equipos.destroy',$equipo)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
     --}}

     
@endsection    

