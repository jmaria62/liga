@extends('layouts.plantilla')

@section('title','crear equipo')

@section('content')
{{-- <h1>en esta página podras crear un equipo</h1> --}}

<div class="bg-white text-center">
    <div class="text-4xl font-bold">
       Crear equipo
    </div>
    
</div>




{{-- <form action="{{route('equipos.store')}}" method="POST">

    @csrf
    
    <label for="">
        Nombre
        <br>
        <input type="text" name='nombre' value="{{old('nombre')}}">
        <br>
    </label>
    @error('nombre')
    
    <small>
        *{{$message}}
    </small>
    <br>
        
    @enderror

    
    <label for="">
       Siglas
       <br>
        <input type="text" name='siglas' value="{{old('siglas')}}">
       <br>
    </label>

    @error('siglas')
    
    <small>
        *{{$message}}
    </small>
    <br>
        
    @enderror
    
   
    <button type="submit">Enviar formulario</button>

</form> --}}



<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>

            <form  action="{{route('equipos.store')}}" method="POST">

                @csrf

                {{-- <h2 class="text-2xl font-bold ">Submit your application</h2>
                <p class="my-4 opacity-70">Adipisicing elit. Quibusdam magnam sed ipsam deleniti debitis laboriosam praesentium dolorum doloremque beata.</p> --}}
                <hr class="my-6">
                <label class="uppercase text-sm font-bold opacity-70">Nombre</label>
                <input type="text" name='nombre' value="{{old('nombre')}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                @error('nombre')
                    <small>
                        *{{$message}}
                    </small>
                     <br>        
                 @enderror

                <label class="uppercase text-sm font-bold opacity-70">Siglas</label>
                <input type="text" name='siglas' value="{{old('siglas')}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                @error('siglas')
                    <small>
                        *{{$message}}
                    </small>
                    <br>
                @enderror

                <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
            </form>

        </div>
    </div>
</div>
    
@endsection    

