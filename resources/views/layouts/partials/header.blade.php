<header>
    {{-- <div class="container mx-auto">
        
        <h1>Equipos y partidos</h1>
    </div> --}}

    <div class="bg-white text-center">
        <div class="text-4xl font-bold">
            Equipos y partidos
        </div>
        
    </div>
    {{-- <ul>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">Home</a> </li>        
        <li><a href="{{route('equipos.index')}}" class="{{request()->routeIs('equipos.*') ? 'active':''}}">Equipos</a></li>
        <li><a href="{{route('partidos.index')}}" class="{{request()->routeIs('partidos.*') ? 'active':''}}">Partidos</a></li>        
        <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active':''}}">Nosotros</a></li>
    </ul> --}}
</header>


	<nav id="bar" class="flex justify-center ">
		<div class=" flex flex-col md:flex-row justify-center md:space-y-0 my-4 space-y-4  text-center text-gray-500">
            {{-- <a	href="/MarketPlace_AisModa/cart" class="mx-8 hover:text-red-900 active" aria-current="page"> Cart </a> --}}
            
            <a href="{{route('home')}}" class="mx-8 hover:text-red-900 {{request()->routeIs('home') ? 'active':''}}">Home</a>        
            <a href="{{route('equipos.index')}}" class="mx-8 hover:text-red-900 {{request()->routeIs('equipos.*') ? 'active':''}}">Equipos</a>
            <a href="{{route('partidos.index')}}" class="mx-8 hover:text-red-900 {{request()->routeIs('partidos.*') ? 'active':''}}">Partidos</a>        
            <a href="{{route('nosotros')}}" class="mx-8 hover:text-red-900 {{request()->routeIs('nosotros') ? 'active':''}}">Nosotros</a>
        </div>
	</nav>
