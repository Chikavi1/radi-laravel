@include('layouts.nav')


<div class="grid grid-cols-12 gap-4 ml-12">
    <div class="col-span-3">
        <div class="relative flex items-start justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8">
            <div class="pt-4 text-gray-500">
            <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">
                {{$user->name}} <i class="fa-solid fa-certificate"></i>
            </h3>
            <p>
                {{$user->gender}}
            </p>
            <p>{{$user->email}}</p>
            {{$user->birthday}} (22 años)

            <p class="mt-2 hidden text-sm sm:block">
                {{$user->city}}
            </p>

            </div>

            <span class="rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600">
                {{$user->points}}
            </span>
        </div>
    </div>
    <div class="col-span-8">

        <div class="relative flex items-start justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8">
            <div class="pt-4 text-gray-500">
                <h2 class="text-gray-700 text-xl">Comportamiento</h2>
                <p> 55     Paginas visitadas </p>
                <p>22 minutos en la pagina</p>
                <p>122 clicks</p>
                <p>3 objetivos</p>
                <p>22 enlaces compartidos</p>
            </div>


        </div>

    </div>
</div>


<div class="grid grid-cols-12 gap-4 ml-12 mt-10">
    <div class="col-span-3">

        <div class="relative flex items-start justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8">
            <div class="pt-4 text-gray-500">
                <h2 class="text-gray-700 text-xl">Compras y feedback</h2>
                <p class="text-red-600">No ha comprado placas</p>
                <p class="text-green-700">Ha comprado placa                </p>
                <p class="text-green-700">
                    Compro reporte de desaparicion
                </p>
                <p class="text-yellow-600">No ha comprado reporte de desaparación</p>
                <hr class=my-8>
                <p  class="text-green-700">
                    Dejo una reseña en lugar pet friendly
                </p>
                <p class="text-red-600">
                    No Dejo una reseña en lugar pet friendly
                </p>
                <p  class="text-green-700">
                    Dejo un feedback de la app
                </p>
                <p class="text-red-600">No ha dejado feedback</p>

            </div>
        </div>

    </div>
    <div class="col-span-4">

<div class=" items-start w-full justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8">
    <div class="pt-4 text-gray-500">

        <h2 class="text-gray-700 text-xl">Mascotas</h2>


        @if($user->pets)
        @php
            $dog = 0;
            $cat = 0;
        @endphp

        <div class="grid grid-cols-12">
            @foreach($user->pets as $pet)
            <div class="col-span-6 mt-4">
                <h2 class="text-gray-800 capital">{{$pet->name}}</h2>
                <p>{{ date('d/m/y', strtotime($pet->birthday)) }} (7 años)</p>
                @if($pet->specie == 1)
                    @php
                        $cat += 1;
                    @endphp
                    <p>Gato</p>
                @else
                        @php
                        $dog += 1;
                    @endphp
                    <p>Perro</p>
                @endif
                @if($pet->status)
                    @if($pet->id_organization)
                        <p class="text-green-600 font-bold">Adoptado</p>
                    @else
                        <p class="text-green-300">Vivo</p>
                    @endif
                @elseif($pet->status == 0)
                    <p class="text-red-700">Fallecio</p>
                @elseif($pet->status == 3)
                    <p class="text-orange-300">Desaparecido</p>
                @endif
                <i class="fa-solid fa-shield"></i>
                <i class="fa-solid fa-syringe"></i>
            </div>
            @endforeach
        </div>



        <div class="grid grid-cols-12 mt-6">
            <div class="col-span-4">
                <small class="text-gray-400">Total mascotas</small>
                <p>{{count($user->pets)}}</p>
            </div>
            <div class="col-span-4">
                <small class="text-gray-400">Total perros</small>
                <p>{{$dog}}</p>

            </div>
            <div class="col-span-4">

                <small class="text-gray-400">Total gatos</small>
                <p>{{$cat}}</p>
            </div>
        </div>


        @else
            <p>No ha creado perfil de mascota</p>
        @endif
    </div>

</div>

    </div>

    <div class="col-span-4">

<div class="relative flex items-start justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8">
    <div class="pt-4 text-gray-500">
        <h2 class="text-gray-700 text-xl">Preferencias</h2>
        <p>Configuracion de notificaciones</p>
       <p>{{$user->notifications}}</p>
       <p>Intereses</p>

       <p>{{$user->interest}}</p>

       <p>Moneda</p>
        <p>{{$user->currency}}</p>


    </div>
</div>
    </div>
</div>











