
@if($lost->status == 2)
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        Mascota encontrada
    </p>
  </div>
@else
  <div class="bg-red-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        Mascota Desaparecida
    </p>
  </div>
@endif
@include('layouts.nav')

<!---Modal -->


<div >
    <div class="grid grid-cols-12 ">
      <div class="col-span-12 md:col-span-10 md:col-start-2 xl:col-span-8 xl:col-start-3  lg:px-20">


        <div class="p-4">

          <h2 class="text-3xl font-bold capital text-gray-800 mt-4">{{$lost->pet->name}}</h2>

          @if($lost->status == 2)
            <p class="font-bold text-green-800 text-xl ">Encontrado</p>
          @elseif($lost->status == 1)
            <p class="font-bold text-red-800 text-xl ">En busqueda</p>
          @elseif($lost->status == 0)
            <p class="font-bold text-red-800 text-xl ">Sin encontrar</p>
          @endif


            @auth
                @if(Auth::user()->id == $lost->id_user_report)
                    @if($lost->status == 1)
                    <a href="/losts/poster?id={{$lost->setHiddenId()}}" target="_blank" class="text-white my-6 bg-blue-800 px-4 py-2 rounded-md font-bold text-xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" ><i class="fa-solid fa-download mr-4"></i> Descargar afiche</button>


                        <a href="/losts/finish/{{$hash}}" class="bg-green-300 hover:bg-green-400 ml-2 text-green-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            <span>Encontre a mi mascota</span>
                        </a>
                    @endif
                @endif
            @endauth
            <p class="mt-4 font-bold">
                Información de la desaparición
            </p>

            <p>{{ $lost->note }}</p>

            @if($lost->rewards)
                <p class="mt-4 text-2xl">Se ofrece recompensa</p>
            @endif


         <div class="mt-4">
            @if($lost->status == 1)
            <div id="mapa" class="col-span-12 h-80" style="z-index: 0;border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">
            </div>

            <div class="flex flex-col gap-4">
                <div>
                    <div class="block p-4  bg-white rounded-lg shadow w-full">
                        <h2>Probabilidad de encontrarlo</h2>
                        <div   id="lower"  class="hidden w-full h-4 bg-gray-400 rounded-full mt-3">
                            <div class="w-1/3 h-full text-center text-xs text-white bg-red-800 rounded-full">
                                Muy Baja
                            </div>
                        </div>

                        <div  id="low"  class="hidden w-full h-4 bg-gray-400 rounded-full mt-3">
                            <div class="w-2/5 h-full text-center text-xs text-white bg-red-500 rounded-full">
                               Baja
                            </div>
                        </div>

                        <div id="medium" class="hidden w-full h-4 bg-gray-400 rounded-full mt-3">
                            <div class="w-3/5 h-full text-center text-xs text-white bg-yellow-500 rounded-full">
                               Mediana
                            </div>
                        </div>

                        <div id="good"  class="hidden w-full h-4 bg-gray-400 rounded-full mt-3">
                            <div class="w-4/5 h-full text-center text-xs text-white bg-green-300 rounded-full">
                                Buena
                            </div>
                        </div>

                        <div id="high" class="hidden w-full h-4 bg-gray-400 rounded-full mt-3">
                            <div  class="w-11/12 h-full text-center text-xs text-white bg-green-800 rounded-full">
                                Alta
                            </div>
                        </div>

                        <p class="text-gray-700 text-xs	mt-2">Ten en cuenta que estas probabilidades son solo una guía general y pueden variar según factores como el tipo de mascota, el entorno en el que se perdió, la hora del día, entre otros. </p>
                    </div>
                </div>
            </div>

                <a target="_blank" href="tel:{{$lost->cellphone}}" class="text-white my-6 bg-purple-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                    Comunicarme
                </a>

            @endif
          </div>


          <p class="mt-4 font-bold text-2xl">Descripción de la mascota</p>
          <p class="capital">{{$lost->pet->description}}</p>

          <div class="grid gap-2 grid-cols-12 mt-4">
            <div  class="col-span-6 md:col-span-3">
              <div class="rounded-2xl bg-gradient-to-r from-blue-400 via-blue-400 to-blue-400 p-1 shadow-xl">
                <a target="_blank" class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                  <div class="">
                    <i class="fa-solid fa-calendar"></i>
                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                      Edad
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                      {{$age}}
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-span-6 md:col-span-3">
              <div  class="rounded-2xl bg-gradient-to-r from-red-900 via-red-900 to-red-900 p-1 shadow-xl">
                <a target="_blank"  class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                  <div class="">
                    @if($lost->pet->specie == 2)
                        <i class="fa-solid fa-paw"></i>
                        <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                        Tamaño
                        </h3>
                        @switch($lost->pet->size)
                        @case('mn')
                            <span class="status">Mini</span>
                        @break
                        @case('sm')
                            <span class="status">Pequeño</span>
                        @break
                        @case('md')
                            <span class="status">Mediano</span>
                        @break
                        @case('lg')
                            <span class="status">Grande</span>
                        @break
                        @case('xl')
                            <span class="status">Extra Grande</span>
                        @break
                        @default
                            <span class="status">N/A</span>
                    @endswitch
                    @else
                        <i class="fa-solid fa-weight-hanging"></i>
                        <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                        Peso
                        </h3>
                        {{$lost->pet->weight}} KG
                    @endif


                  </div>
                </a>
              </div>
            </div>

            <div  class=" col-span-6 md:col-span-3">
                <div class="rounded-2xl bg-gradient-to-r from-blue-900 via-blue-900 to-blue-900 p-1 shadow-xl">
                  <a target="_blank" class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                    <div class="">
                      <i class="fa-solid fa-venus-mars"></i>
                      <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                        Género
                      </h3>
                      @if ($lost->pet->gender == 1)
                          <p  class="mt-2 text-sm text-gray-500">
                          Macho
                          </p>
                      @else
                          <p   class="mt-2 text-sm text-gray-500">
                          Hembra
                          </p>
                      @endif
                    </div>
                  </a>
                </div>
              </div>
              <div class=" col-span-6 md:col-span-3">
                <div  class="rounded-2xl bg-gradient-to-r from-yellow-500 via-yellow-500 to-yellow-500 p-1 shadow-xl">
                  <a target="_blank"  class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                    <div class="">
                      <i class="fa-regular fa-circle"></i>
                      <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                        Especie
                      </h3>
                      @if ($lost->pet->specie == 1)
                          <p *ngIf="$lost->pet->specie == 1" class="mt-2 text-sm text-gray-500">
                          Gato
                          </p>
                      @else
                          <p *ngIf="$lost->pet->specie == 2" class="mt-2 text-sm text-gray-500">
                          Perro
                          </p>
                      @endif

                    </div>
                  </a>
                </div>
              </div>
          </div>

          <div class="grid gap-2 grid-cols-12 mt-4">

          </div>

        @if($lost->status == 1)
            <div
                        class="mt-4 relative block overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8"
                    >
                        <span
                        class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-red-700 via-red-700 to-red-700"
                        ></span>

                        <div class="sm:flex sm:justify-between sm:gap-4">
                        <div>
                            <h3 class="text-lg font-bold text-red-900 sm:text-xl">
                            Comparte este link para que más personas sepan que desapareció {{$lost->pet->name}} </h3>

                            <p class="mt-1 text-xs font-medium text-gray-600">Recomendación</p>
                        </div>

                        <div class="hidden sm:block sm:shrink-0">
                            <img
                            alt="Radi Pets"
                            src="{{asset('img/default-circle.png')}}"
                            class="h-16 w-16 md:rounded-lg object-cover shadow-sm"
                            />
                        </div>
                        </div>

                        <div class="mt-4">
                        <p id="p1" class="max-w-[40ch] text-sm text-gray-500" id="text">
                            https://radi.pet/lost/{{$hash}}
                        </p>
                        <button onclick="copyToClipboard('#p1')" class="mt-2 border-red-700 bg-red-700 hover:bg-red-700 hover:border-red-700 text-white font-bold py-2 px-4 rounded-full">
                            Copiar
                        </button>
                        </div>

                <dl class="mt-6 flex gap-4 sm:gap-6">
                <div class="flex flex-col-reverse">
                    <dt class="text-sm font-medium text-gray-600">Redes Sociales</dt>

                    <div class="sharing-buttons flex flex-wrap">
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-red-700 bg-red-700 hover:bg-red-700 hover:border-red-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share on Facebook">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Facebook</title>
                            <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-red-700 bg-red-700 hover:bg-red-700 hover:border-red-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash}}&text=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$lost->pet->name}}" aria-label="Share on Twitter">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Twitter</title>
                            <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-red-700 bg-red-700 hover:bg-red-700 hover:border-red-700" target="_blank" rel="noopener" href="https://wa.me/?text=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$lost->pet->name}}%20https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share on Whatsapp" draggable="false">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Whatsapp</title>
                            <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-red-700 bg-red-700 hover:bg-red-700 hover:border-red-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$lost->pet->name}}url=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share on Telegram" draggable="false">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Telegram</title>
                            <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-red-700 bg-red-700 hover:bg-red-700 hover:border-red-700" target="_blank" rel="noopener" href="mailto:?subject=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$lost->pet->name}}body=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share by Email" draggable="false">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Email</title>
                            <path d="M464 64a48 48 0 0 1 29 86L275 314c-11 8-27 8-38 0L19 150a48 48 0 0 1 29-86h416zM218 339c22 17 54 17 76 0l218-163v208c0 35-29 64-64 64H64c-35 0-64-29-64-64V176l218 163z">
                            </path>
                          </svg>
                        </a>
                      </div>
                </div>
                </dl>
            </div>
        @endif
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="fixed inset-x-0 bottom-0 p-4">
    <div class="relative max-w-xl rounded-lg bg-gray-100 p-6 shadow-sm">
      <button
        type="button"
        class="absolute -end-1 -top-1 rounded-full border border-gray-200 bg-white p-1 text-gray-400"
      >
        <span class="sr-only">Close</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3 w-3"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"
          />
        </svg>
      </button>

      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2" style="z-index: 10000;">
        <img
          alt="Laptop"
          src="https://images.unsplash.com/photo-1587614382346-4ec70e388b28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
          class="h-full w-full rounded-xl object-cover"
        />

        <div>
          <h2 class="text-lg font-medium">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          </h2>

          <p class="mt-4 text-sm text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            eos. Inventore dolor delectus commodi laudantium adipisci, illum amet
            itaque optio!
          </p>

          <div class="mt-6 sm:text-right">
            <a
              href="#"
              class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
            >
              Find out more
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


</div>

  @include('layouts.footer')


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<script>

function downloadImage(url, name){
                  fetch(url)
                    .then(resp => resp.blob())
                    .then(blob => {
                        const url = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.style.display = 'none';
                        a.href = url;
                        // the filename you want
                        a.download = name;
                        document.body.appendChild(a);
                        a.click();
                        window.URL.revokeObjectURL(url);
                    })
                    .catch((error) => {console.log(error);alert('An error sorry')});
            }

    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };

    function success(pos){

    const crd = pos.coords;

    distanceBeetwen = calcCrow(crd.latitude,crd.longitude,latitude,longitude).toFixed(1);

        console.log(distanceBeetwen);
        if(distanceBeetwen < 1){
            $("#high").removeClass('hidden');
        }else if(distanceBeetwen < 1.5){
            $("#good").removeClass('hidden');
        }else if(distanceBeetwen < 3){
            $("#medium").removeClass('hidden');
        }else if(distanceBeetwen < 5.5){
            $("#low").removeClass('hidden');
        }else if(distanceBeetwen < 8){
            $("#lower").removeClass('hidden');
        }

        L.marker([crd.latitude,crd.longitude], {icon: mylocation}).addTo(map).bindPopup('Tu úbicación');

    }

    function error(err) {
    }

    function calcCrow(lat1, lon1, lat2, lon2) {
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
      var d = R * c;
      return d;
    }

    // Converts numeric degrees to radians
    function toRad(Value)
    {
        return Value * Math.PI / 180;
    }

    @if($lost->latitude)
    var latitude = {{$lost->latitude}};
    var longitude = {{$lost->longitude}};

    var map = L.map('mapa').setView([latitude, longitude], 14);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    var radiIcon = L.icon({
        iconUrl: '{{asset("img/target.png")}}',
        iconSize: [20, 20]
    });

    var mylocation = L.icon({
        iconUrl: '{{asset("img/circle-solid.png")}}',
        iconSize: [20, 20]
    });



    L.marker([latitude,longitude], {icon: radiIcon}).addTo(map)
    .bindPopup('Aquí se perdío');

    L.circle({lat: latitude, lng: longitude}, {
          color: 'red',
          radius: 900,
          fillColor: 'red',
          opacity: 0.5
        }).addTo(map);

    navigator.geolocation.getCurrentPosition(success, error, options);
    @endif






    function copyToClipboard(element) {
        console.log($.trim($(element).text()));
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim($(element).text())).select();

        document.execCommand("copy");
        $temp.remove();
        $("#modalShare").addClass('hidden');

    }

</script>


