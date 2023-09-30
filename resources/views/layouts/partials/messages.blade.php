@if (isset($errors) && count($errors) > 0)
    
<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
 
    <ul class="list-inside list-disc">
        @foreach ($errors->all() as $error )
   
          <li> <span class="font-medium">{{$error}}</span></li> 
    
        @endforeach
    </ul>

  </div>
    
@endif
{{-- 
@error('name')
    {{$message}} por si quieres q sea mas declarativo en cuestion de errores 
@enderror --}}

@if (Session::get('success',false))

@php
    $data = Session::get('success');
@endphp

    @if (is_array($data))
            @foreach ($data as $message)
                    <div class="alert alert-success">
                            <i class="fa fa-check"></i>
                            {{$message}}
                    </div>
            @endforeach
        @else
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">{{$data}}</span> 
            </div>
          </div>
    @endif
    
@endif