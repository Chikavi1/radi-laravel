<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>

@if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Mis Mascotas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-900 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-white text-gray-900 text-3xl">
                   Mis Mascotas
                </div>
                <div class="grid grid-cols-12 gap-4 px-4">
                    <div class="col-span-12  md:col-span-4">
                        <a href="/pet/create">

                        <article
                        class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                        >
                        <img
                        alt="Office"
                        src="{{ asset('img/default.png')}}"
                        class="h-56 w-full object-cover"
                        />

                        <div class="p-4 sm:p-6">
                            <h3 class="text-lg font-medium dark:text-white text-gray-900">
                                Agrega
                            </h3>

                            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                Agrega nueva mascota
                            </p>


                        </div>
                    </article>
                </a>

                    </div>
                    @foreach($pets as $pet)
                        <div class="col-span-12  md:col-span-4">

                            <a href="/pet/{{$pet->setHiddenId()}}">
                            <article
                            class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                            >
                            <img
                            alt="Office"
                            src="{{$pet->photo}}"
                            class="h-56 w-full object-cover"
                            />

                            <div class="p-4 sm:p-6">
                                <h3 class="truncate text-lg font-medium dark:text-white text-gray-900">
                                    {{$pet->name}}
                                </h3>

                                @if($pet->description)
                                    <p class="truncate mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        {{$pet->description}}
                                    </p>
                                @else
                                    <p class="truncate mt-2 line-clamp-3 text-sm/relaxed text-gray-500">Sin descripción</p>
                                @endif



                            </div>
                        </article>
                    </a>

                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
