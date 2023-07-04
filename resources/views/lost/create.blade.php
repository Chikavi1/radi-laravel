@if ($message = Session::get('error'))
<div class="bg-red-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@else
@include('layouts.announs')

@endif



<x-app-layout>


<section>
    <h1 class="sr-only">Checkout</h1>

    <div class="mx-auto grid max-w-screen-2xl grid-cols-1 md:grid-cols-2">
      <div class="bg-gray-50 py-12 md:py-24">
        <div class="mx-auto max-w-lg space-y-8 px-4">
          <div class="flex items-center gap-4">

            <h2 class="font-medium text-2xl text-gray-900">Reporte de desaparición en Radi Pets</h2>
          </div>

          <div>
            <p style="text-decoration: line-through;color:rgb(231, 101, 101);" class="text-sm font-medium text-red-900 line-through	">
                $249.99 MXN
            </p>
            <p class="text-2xl font-bold tracking-tight  text-green-900">
             Gratis
            </p>

        </div>

        <div class="hidden md:block">
              <section class="px-4  mx-auto max-w-7xl">
               <div class="grid grid-cols-12 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4   lg:gap-x-24 gap-y-8">

                <div class="col-span-4">
                    <div class="flex items-center justify-center w-8 h-8  text-green-800 rounded-full">
                        <i class="fa-solid fa-money-bill"></i>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900">Ahorra dinero y tiempo</h3>
                    <p class="text-sm text-gray-500">Con la alerta de desaparición de Radi Pets, ahorrarás tiempo y dinero que tendrías que gastar en colocar carteles.</p>
                </div>

                  <div  class="col-span-4">
                    <div class="flex items-center justify-center w-8 h-8  text-blue-800 rounded-full">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900">Rápida difusión</h3>
                    <p class="text-sm text-gray-500"> Tan pronto como registres la desaparición en la plataforma, se notificará a todos los usuarios cercanos que tengan la aplicación instalada y te brindarán información sobre el avistamiento de tu mascota.</p>
                  </div>

                  <div  class="col-span-4">
                    <div class="flex items-center justify-center w-8 h-8  text-yellow-600   rounded-full">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900">Ayuda</h3>
                    <p class="text-sm text-gray-500">Los demas usuarios al ingresar vera donde se perdió con el mapa y ver la probabilidad de encontrarla.</p>
                  </div>

                  <div  class="col-span-4">
                    <div class="flex items-center justify-center w-8 h-8  text-purple-600 rounded-full">
                      <i class="fa-solid fa-paw"></i>
                    </div>
                    <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900">Apoyo</h3>
                    <p class="text-sm text-gray-500">Al comprar en Radi Pets, estás apoyando a mejorar la plataforma para los albergues y contribuyendo a que más animales sean atendidos y adoptados.</p>
                  </div>

                </div>
              </section>

            </div>
        </div>

      </div>

      <div class="bg-white py-4 md:py-24">
        <div class="mx-auto max-w-lg px-4 lg:px-8 mt-4">
            {!! Form::open(['route' => ['lost.store']], ['class' => 'grid grid-cols-6 gap-4 mt-12' ,'files' => true]) !!}
            @csrf
            @if(count($pets)!= 0)

            <h3 class="block text-xl font-medium text-gray-700">
                Mueve el punto rojo para señalar donde fue la última vez que viste a tu mascota.
            </h3>
            <div id="mapa" class="col-span-12 h-64 mt-2" style="z-index:0;border-radius:1em;min-height:10em; min-width:15em;">

            </div>


            <div class="col-span-6 mt-2">
                <label for="Phone" class="block text-xs font-medium text-gray-700">
                  Mascota
                </label>
                    {!! Form::select('id_pet',$pets,null,['required'=>'true','class' => 'mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm']); !!}



            </div>

            <div class="col-span-6">
                <label for="Phone" class="mt-2 block text-xs font-medium text-gray-700">
                  Descripción de como se perdió
                </label>

                <textarea
                  id="Phone"
                  name="description"
                  required
                  placeholder="Ingresa la información de donde y como se perdió"
                  class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"></textarea>
            </div>

            <div class="col-span-6">
                <label for="Phone" class="block text-xs font-medium text-gray-700">
                  Teléfono
                </label>

                <input
                  type="tel"
                  id="Phone"
                  name="cellphone"
                  required
                  placeholder="Ingresa teléfono"
                  value="{{Auth::user()->phone}}"
                  maxlength="10"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                  class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                />
            </div>

            <div class="col-span-6">
                <label for="Phone" class="block text-xs mt-4 font-medium text-gray-700">
                  Recompensa (MXN)
                </label>

                <input
                  type="text"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                  id="Phone"
                  name="rewards"
                  maxlength="5"
                  placeholder="Ingresa la recompensa que daras (no se cobrara)."
                  class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                />
              </div>

              <div class="col-span-6">
                <label for="Phone" class="block text-xs mt-4 font-medium text-gray-700">
                  Dia de desaparición
                </label>
                {{Form::date('date', \Carbon\Carbon::now(), ['max'=>\Carbon\Carbon::now(),'class' => 'mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm'])}}

              </div>



                {{-- <fieldset class="col-span-6 mt-2">
                <legend class="block text-sm font-medium text-gray-700">
                Detalles de la tarjeta
                </legend>

                <div class="mt-1 -space-y-px rounded-md bg-white shadow-sm">
                    <div>
                    <label for="CardNumber" class="sr-only"> Card Number </label>

                    <input
                        type="text"
                        name="card_no"
                        required
                        autocomplete="false"
                        maxlength="16"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                        placeholder="Número de tarjeta"
                        class="relative mt-1 w-full rounded-t-md border-gray-200 focus:z-10 sm:text-sm"
                    />
                    </div>
                    --}}
                <input
                type="hidden"
                id="latitude"
                name="latitude"
              />

              <input
                type="hidden"
                id="longitude"
                name="longitude"
              />
                    {{--
                    <div class="flex">
                    <div class="flex-1">
                        <label for="CardExpiry" class="sr-only">Mes Expiración</label>




                        {!! Form::select('ccExpiryMonth',
                        $months,
                        null,['required'=>'true','class' => 'relative w-full rounded-ee-md border-gray-200 focus:z-10 sm:text-sm']); !!}


                    </div>

                    <div class="-ms-px flex-1">
                        <label for="CardCVC" class="sr-only"> Año Expiración</label>


                        {!! Form::select('ccExpiryYear',
                        $years,
                        null,['required'=>'true','class' => 'relative w-full rounded-ee-md border-gray-200 focus:z-10 sm:text-sm']); !!}


                    </div>
                    </div>
                    <div class="-ms-px flex-1">
                        <label for="CardCVC" class="sr-only"> CVC de la tarjeta </label>

                        <input
                        type="text"
                        required
                        maxlength="4"
                        name="cvvNumber"
                        placeholder="CVC"
                        class="relative w-full rounded-ee-md border-gray-200 focus:z-10 sm:text-sm"
                        />

                    </div>
                </div>
                </fieldset> --}}



            <div class="col-span-6">
              <button
                class="block w-full mt-2 rounded-md bg-black px-4 py-2 text-sm text-white transition hover:shadow-lg"
              >
                Generar reporte
              </button>
            </div>
            @else
                <div class="my-8 text-center">
                    <h2 class="text-6xl text-red-900 mb-4"><i class="fa-solid fa-triangle-exclamation"></i></h2>
                    <p class="text-red-800">Necesitas tener el perfil de una mascota.</p>
                    <p>Puedes crear tu mascota <a href="/pet/create" class="text-purple-900 font-bold">aquí</a></p>
                </div>
            @endif
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </section>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


  <script>

    var latitude;
    var longitude;

    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };


    function success(pos) {
        const crd = pos.coords;
        console.log(crd);
        latitude  = crd.latitude;
        longitude = crd.longitude;
        $("#latitude").val(latitude);
        $("#longitude").val(longitude);

        var map = L.map('mapa').setView([latitude, longitude], 16);

L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
}).addTo(map);


var radiIcon = L.icon({
    iconUrl: '{{asset("img/target.png")}}',
    iconSize: [20, 20]
});

L.marker([latitude,longitude], {icon: radiIcon,draggable:true}).addTo(map)
.bindPopup('Aquí se perdió') .on('dragend', function(e) {
  $("#latitude").val(e.target._latlng.lat);
  $("#longitude").val(e.target._latlng.lng);
}).openPopup();

    }

    $(function(){
        $('[type="date"]').prop('max', function(){
            return new Date().toJSON().split('T')[0];
        });
    });


    function error(err){

    }

    navigator.geolocation.getCurrentPosition(success, error, options);



  </script>

</x-app-layout>
