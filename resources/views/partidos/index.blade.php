@extends('layouts.plantilla')

@section('title','partidos')

@section('content')
{{-- <h1>Bienvenidos a la página de partidos</h1>
<a href="{{route('partidos.create')}}">Crear partido</a> --}}


<div class="bg-white text-center">
    <div class="text-4xl font-bold">
        Bienvenidos a la página de partidos
    </div>
    
</div>

<nav id="bar" class="flex justify-center ">
    <div class=" flex flex-col md:flex-row justify-center md:space-y-0 my-4 space-y-4  text-center text-gray-500">
        
        <a href="{{route('partidos.create')}}" class="mx-8 hover:text-red-900 {{route('partidos.create')}}">Crear partido</a>        
        
    </div>
</nav>

{{-- <ul>
    @foreach ($partidos as $partido)
        <li>
            
            <a href="{{route('partidos.show',$partido->id)}}">
         
               
                {{$partido->date}} -
                {{$partido->equipolocal->siglas}} - 
                {{$partido->local_goals}} -
                {{$partido->equipovisitante->siglas}} - 
                {{$partido->visitor_goals}}
               
                
            </a>
            

        </li>
        
    @endforeach
</ul>
    {{$partidos->links()}}
 --}}


    <div class="mt-2">
        <table class="mx-auto table-auto">
          <thead>
            <tr class="bg-gradient-to-r from-indigo-600 to-purple-600">
              <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Fecha</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-100  font-semibold">Local</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-100  font-semibold">Goles L</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Visitante</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Goles V</span>
              </th>
              <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Link</span>
              </th>
              
            </tr>
          </thead>
          <tbody class="bg-gray-200">
            
                @foreach ($partidos as $partido) 
                <tr class="bg-white border-b-2 border-gray-200">            
                    <td>             
                         <span class="text-center ml-2 font-semibold"> {{$partido->date}}</span>
                    </td> 
                    <td>             
                        <span class="text-left ml-16 font-semibold">  {{$partido->equipolocal->siglas}}</span>
                    </td> 
                    <td>             
                        <span class="text-left ml-16 font-semibold">  {{$partido->local_goals}}</span>
                    </td> 
                    <td>             
                        <span class="text-center ml-16 font-semibold"> {{$partido->equipovisitante->siglas}}</span>
                    </td> 
                    <td>             
                        <span class="text-center ml-16 font-semibold"> {{$partido->visitor_goals}}</span>
                    </td> 
                    <td>             
                        <span class="text-center ml-16 font-semibold"> <a href="{{route('partidos.show',$partido->id)}}">Ver</a></span>
                    </td> 

                </tr>                    
                @endforeach   
            
          </tbody>
        </table>
    </div> 
    {{$partidos->links()}} 
@endsection    

