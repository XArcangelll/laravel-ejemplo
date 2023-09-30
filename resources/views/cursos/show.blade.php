
@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('content')

@include('layouts.partials.messages')

<h1>Show {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a los cursos</a>
{{-- en el $curso buscara por el slug recuerda en el model curso lo configuras por defecto ahora sera por name mas declarativo tendiras q pasar $curso->id pero tendrias q modificar algunas cosas --}}
<a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
<p><strong>Categoria : {{$curso->categoria}}</strong></p>
<p>{{$curso->descripcion}}</p>
<form action="{{route('cursos.destroy',$curso)}}" method="POST">
    @method('delete')
    @csrf

    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Eliminar</button>

</form>
@endsection

       