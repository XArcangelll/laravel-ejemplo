<header>
    <ul class="flex">
      <li class="mr-6">
        <a class="{{request()->routeIs('home') ? 'inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white' : 'text-blue-500 hover:text-blue-800'}}" href="{{route('home')}}">Home</a>
    
      </li>
      <li class="mr-6">
        <a class="{{request()->routeIs('cursos.*') ? 'inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white' : 'text-blue-500 hover:text-blue-800'}}" href="{{route('cursos.index')}}">Cursos</a>
      </li>
      <li class="mr-6">
        <a class=" {{request()->routeIs('nosotros') ? 'inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white' : 'text-blue-500 hover:text-blue-800'}}" href="{{route('nosotros')}}">Nosotros</a>
      </li>
      <li class="mr-6">
        <a class=" {{request()->routeIs('contactanos.index') ? 'inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white' : 'text-blue-500 hover:text-blue-800'}}" href="{{route('contactanos.index')}}">Contáctanos</a>
      </li>
    </ul>
   </header>