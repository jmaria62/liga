@extends('layouts.plantilla')

@section('title','equipos')

@section('content')
{{-- <h1>Bienvenidos a la página de equipos</h1>
<a href="{{route('equipos.create')}}">Crear equipo</a> --}}

<div class="bg-white text-center">
    <div class="text-4xl font-bold">
        Bienvenidos a la página de equipos
    </div>
    
</div>

<nav id="bar" class="flex justify-center ">
    <div class=" flex flex-col md:flex-row justify-center md:space-y-0 my-4 space-y-4  text-center text-gray-500">
        {{-- <a	href="/MarketPlace_AisModa/cart" class="mx-8 hover:text-red-900 active" aria-current="page"> Cart </a> --}}
        
        <a href="{{route('equipos.create')}}" class="mx-8 hover:text-red-900 {{route('equipos.create')}}">Crear equipo</a>        
        
    </div>
</nav>





{{-- <ul>
    @foreach ($equipos as $equipo)
        <li>           
            
            <a href="{{route('equipos.show',$equipo->id)}}">{{$equipo->name}}</a>

        </li>
        
    @endforeach
</ul>
    {{$equipos->links()}} --}}




    <div class="mt-2">
        <table class="mx-auto table-auto">
          <thead>
            <tr class="bg-gradient-to-r from-indigo-600 to-purple-600">
              <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Nombre</span>
              </th>
              
            </tr>
          </thead>
          <tbody class="bg-gray-200">
            
                @foreach ($equipos as $equipo) 
                <tr class="bg-white border-b-2 border-gray-200">            
                    <td>             
                         <span class="text-center ml-2 font-semibold"> <a href="{{route('equipos.show',$equipo->id)}}">{{$equipo->name}}</a></span>
                    </td> 
                </tr>                    
                @endforeach   
            
          </tbody>
        </table>
    </div> 
    {{$equipos->links()}}  
@endsection    


