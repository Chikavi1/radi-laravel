
@include('layouts.nav')
@if($losts->onFirstPage())
    <div class="relative px-4 pt-16 mx-auto lg:py-32 md:px-8 xl:px-20 sm:max-w-xl md:max-w-full">
        <div class="max-w-xl mx-auto lg:max-w-screen-xl">
        <div class="mb-16 lg:max-w-lg lg:mb-0">
            <div class="max-w-xl mb-6">
            <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Radi Pets
                </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Encuentra a tu mascota: Únete a nuestra comunidad <br class="hidden md:block" />
                para localizar a tu mascota
            </h2>
            <p class="text-xl text-gray-700 md:text-lg">
                <span class="line-through"> Reporta la desaparición de tu mascota desde 249.99  mxn</span>.
                Genera tu reporte <span class="font-bold text-green-800 capitalize">gratis</span>, por tiempo <span class="font-bold">limitado</span>.
            </p>
            </div>
            <div class="flex items-center">
            <a
                href="/lost/create"
                class="inline-flex bg-purple-500 text-white items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide  transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
            >
            Crear reporte
            </a>
            {{-- <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Saber más</a> --}}
            </div>
        </div>
        </div>
        <div class="hidden lg:flex justify-center h-full overflow-hidden lg:w-2/3 xl:w-1/2 lg:absolute lg:justify-start lg:bottom-0 lg:right-0 lg:items-end">
        <img src="{{asset('img/lost.png')}}" class="object-cover object-top w-full h-64 max-w-xl  rounded lg:ml-32 xl:ml-8  lg:h-auto lg:max-w-screen-md" alt="" />
        </div>
    </div>
@endif
<div class="md:px-20">
    {{-- <a href="/lost/create" class="my-8 mx-4  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Crear reporte
    </a> --}}
    <h1 class="text-3xl font-bold px-4 text-gray-800 mt-4">Últimos desaparecidos</h1>
    <p class="ml-4 mb-4">Para ver las mascotas desaparecidas cerca de tu área, te recomendamos <a href="/download" class="font-bold text-purple-800">descargar la app</a>.</p>
    @if(count($losts) != 0)
    <div class="grid grid-cols-12 gap-3">
            @foreach ($losts as $lost)
                <div class="col-span-12 md:col-span-6 lg:col-span-4 p-4">
                    <a
                    target="_blank"
                    href="/lost/{{$lost->setHiddenId()}}">
                    <article
                    class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm"
                    >
                    <img
                    alt="foto de la mascota"
                    src="{{$lost->pet->photo ?? '/img/default.png'}}"
                    class="h-56 w-full object-cover"
                    />

                    <div class="p-4 sm:p-6">
                        <h3 class="capital text-lg font-medium text-gray-900">
                            {{$lost->pet->name ?? 'Sin nombre'}}
                        </h3>
                            <p>Se perdió {{ Carbon\Carbon::parse($lost->date)->diffForHumans()}}</p>
                    @if($lost->description)
                        <p class="truncate  mt-2 line-clamp-3 text-sm/relaxed text-gray-500 capital">
                            {{$lost->note}}
                        </p>
                    @else
                        <p class="truncate  mt-2 line-clamp-3 text-sm/relaxed text-gray-500 capital">
                           Sin descripción
                        </p>
                    @endif


                    </div>
                    </article>
                    </a>
                </div>
            @endforeach
        </div>
        @else
             <h2 class="text-center font-bold text-2xl py-32">No hay mascotas por el momento.</h2>
        @endif

    {{ $losts->links() }}

</div>

@include('layouts.footer')

