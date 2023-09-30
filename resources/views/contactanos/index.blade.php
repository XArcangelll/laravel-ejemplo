
@extends('layouts.plantilla')

@section('title','Contáctanos')

@section('content')


<section class="bg-gray-50 dark:bg-gray-900">

    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

        <div class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
             <h1>Déjanos un mensaje</h1>
        </div>

        <div
            class=" w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

            

                <form class="space-y-4 md:space-y-6" method="post" action="{{ route('contactanos.store') }}">

                  
                    @include('layouts.partials.messages')
               
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name"  >
                            Nombre
                        </label>
                        <input value="{{old('name')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="name" id="name" type="text" placeholder="Nombre">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="correo"  >
                            Correo
                        </label>
                        <input value="{{old('correo')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="correo" id="correo" type="text" placeholder="Email de contácto">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mensaje">
                            Descripción
                        </label>
                        <textarea  id="mensaje" name="mensaje" rows="4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Descripción del curso" >{{old('mensaje')}}</textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Enviar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>

{{-- @if (session('success'))

<script>
    alert("{{session('success')}}");
</script>
    
@endif  --}}




@endsection

       