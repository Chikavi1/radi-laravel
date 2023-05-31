@include('layouts.nav')

<div class="grid grid-cols-12 gap-2">
    <div class="md:col-start-5 col-span-12 md:col-span-4  mx-4 ">

    @if($request)
    <div class="mt-8" style="background:#115e38;padding:2em;color:white;">
        <h2 class="text-center text-3xl">
            <i class="fa-solid fa-certificate"></i>
            <br>
            <span style="margin-top:2em;">
                Código verificado
            </span>
        </h2>
    </div>
    <div class="shadow-lg p-4">
        <small class="text-gray-600">Nombre de la mascota</small>
        <h2 class="mb-2">{{$request->pets->name}}</h2>
        <small class="text-gray-600 mt-4">Nacimiento</small>
        <h2 class="mb-2">{{ date('d/M/y', strtotime($request->pets->birthday)) }}</h2>
        <small class="text-gray-600 mt-4">Adoptado desde </small>
        <h2 class="mb-2">{{ date('d/M/y', strtotime($request->finish_date)) }}</h2>
        <small class="text-gray-600 mt-4">Dueño</small>
        <p class="mb-2 capital">
            {{$request->users->name}}
        </p>
        <small class="text-gray-600 mt-4">Albergue</small>
        <p class="capital"><a target="_blank" href="/org/{{$request->orgs->setHiddenId()}}" class="text-purple-800 underline">{{$request->orgs->name}}</a> </p>

    </div>
    @else

        <div  class="mt-8" style="background: #dc3055;padding:2em;color:white;">
            <h2 class="text-center text-3xl">
                <i class="fa-solid fa-circle-exclamation"></i>
                <br>
                Código No válido</h2>
        </div>
        <div class="shadow-lg">
            <h2 class="text-center text-gray-700 font-bold py-10">No existe adopción con ese código</h2>
        </div>

    @endif

    </div>
</div>
