@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>

    @include('layouts.partials.messages')

<a href="{{route('cursos.create')}}">Crear Curso</a>

    @foreach ($cursos as $curso)
    {{-- laravel por defecto detectara $curso dependiendo de app provider por defecto siempre buscara
     por el id pero lo puedes cambiar en el provider route normalmente es $curso->id pero laravel detecta por si solo el $curso --}}
        <li><a href="{{route('cursos.show',$curso)}}">{{ $curso->name }}</a></li>
    @endforeach

    {{ $cursos->links() }}

@endsection
