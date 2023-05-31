
@include('layouts.nav')

<div class="md:px-20 mt-10">
    <h1 class="text-3xl font-bold px-4 text-gray-800">Listado de mascotas</h1>
    @if(count($pets) != 0)
    <div class="grid grid-cols-12 gap-3">
            @foreach ($pets as $pet)
                <div class="col-span-12 md:col-span-6 lg:col-span-4 p-4">
                    <a
                    href="/pet/{{$pet->setHiddenId()}}">
                    <article
                    class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm"
                    >
                    <img
                    alt="foto albergue"
                    src="{{$pet->photo}}"
                    class="h-56 w-full object-cover"
                    />

                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                        {{$pet->name}}
                        </h3>
                        @if($pet->status == 2)
                            <p class="text-green-400 font-bold" >Adopcion</p>
                        @elseif($pet->status == 3)
                            <p>Desaparecido</p>
                        @endif

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                        {{$pet->description}}
                    </p>

                    </div>
                    </article>
                    </a>
                </div>
            @endforeach
        </div>
        @else
             <h2 class="text-center font-bold text-2xl py-32">No hay mascotas por el momento.</h2>
        @endif

    {{ $pets->links() }}

</div>




@include('layouts.footer')

