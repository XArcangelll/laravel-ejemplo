@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')

    <section class="bg-gray-50 dark:bg-gray-900">

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                 <h1>Editar Curso</h1>
            </div>

            <div
                class=" w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">


                    @include('layouts.partials.messages')

                    <form class="space-y-4 md:space-y-6" method="post" action="{{ route('cursos.update',$curso) }}">
                        @method('put')
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nombre
                            </label>
                            <input  value="{{ old('name',$curso->name) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="name" id="name" type="text" placeholder="Nombre del Curso">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                                Slug
                            </label>
                            <input  value="{{ old('slug',$curso->slug) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="slug" id="slug" type="text" placeholder="Nombre del Slug">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                                Descripción
                            </label>
                            <textarea  id="descripcion" name="descripcion" rows="4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Descripción del curso" >{{ old('descripcion',$curso->descripcion)}}</textarea> {{-- si la validacion falla obtendre lo q estuvo en ese campo antes pero sino pues tendria lo del objeto en cuestion --}}
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">
                                Categoría
                            </label>
                            <input value="{{ old('categoria',$curso->categoria)}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="categoria" id="categoria" type="text" placeholder="Categoría del Curso">
                        </div>

                        <div class="mb-6">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una marca</label>
                            <select id="marca_id" name="marca_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Choose a country</option>
                                @foreach ($marcas as  $marca)
                                <option value="{{$marca->id}}" {{ old('marca_id',$curso->marca_id) == $marca->id ? 'selected' : '' }} >{{$marca->name}}</option>
                              
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-between">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Actualizar Curso
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>




@endsection
