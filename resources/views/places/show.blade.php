<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
crossorigin="anonymous"></script>

    {{-- <div
    class="bg-indigo-600 px-4 py-3 text-white sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
  >
    <p class="text-center font-medium sm:text-left">
      ¡Gana premios con tus puntos en Radi Pets!
      <br class="sm:hidden" />
     Obten más funcionalidades y gana puntos.
    </p>

    <a
      class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-indigo-600 transition hover:bg-white/90 focus:outline-none focus:ring active:text-indigo-500 sm:mt-0"
      href="/download"
    >
      Descargar Radi Pets
    </a>
  </div> --}}

  @if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

  @include('layouts.nav')

  @if($place)
  <div class="md:px-16">
    <div class="grid grid-cols-12 gap-2 md:px-12 rounded-lg" style="border-bottom: 2px solid #cacdd1;">
      <div class="col-span-12 lg:col-span-5">
        <img class="w-full object-cover lg:mt-4 md:rounded-lg" src="{{$place->image}}">
      </div>
      <div class="col-span-12 lg:col-span-5 md:ml-6 ">
        <div style="padding: 1.5em;">
          <h2 class="text-2xl mt-6 md:mt-4 lg:mt-4">{{$place->title}}
            @if($place->verified)
              <i class="fa-regular fa-circle-check text-green-600"></i>
            @endif
          </h2>
          <p class="mb-2"><i class="fa-solid fa-location-dot text-blue-600" ></i> {{ $place->city }}</p>

          @if($place->place == 1)
            <small>Restaurant</small>
          @elseif($place->place == 2)
            <small>Hoteles</small>
          @elseif($place->place == 3)
            <small>Lugar Público</small>
          @endif



          <div class="mt-4">
            @if($place->facebook_url)
                <a href="{{$place->facebook_url}}" target="_blank">
                <i class="fa-brands fa-facebook text-2xl" style="color:#3b5998;"></i>
                </a>
            @endif

            @if($place->instagram_url)
              <a  href="{{$place->instagram_url}}" target="_blank">
                <i class="fa-brands fa-instagram text-2xl ml-2" style="color:#F56040;"></i>
              </a>
            @endif
          </div>
          @if($place->type == 1)
            <div class="md:hidden  px-4 w-32 py-2 mt-2 text-sm rounded-full text-indigo-500 border border-indigo-500  ">
            Desayunos
            </div>
          @endif
          @if($place->type == 2)
           <div class="md:hidden  px-4 w-32 py-2 mt-2 text-sm rounded-full text-indigo-500 border border-indigo-500  ">
            Comida mexicana
          </div>
          @endif
          @if($place->food_pets)
            <div *ngIf="$place->food_pets" class="md:hidden  px-4 w-48 py-2 mt-4 text-sm rounded-full text-indigo-500 border border-indigo-500  ">
                <i class="fa-solid fa-bone"></i> Comida para mascota
            </div>
          @endif

        <div class="card bg-base-100 shadow-md p-4 mt-4 md:mt-2 md:p-2 lg:mt-4 lg:p-4">
          <div class="card-body">
            <h2 class="card-title" class="text-xl font-bold text-orange-500 mt-4">Informacion importante</h2>
            @if($place->notes)
                <p *ngIf="$place->notes">{{$place->notes}}</p>
            @else
                @if($place->place == 1)
                    <span>Recuerda que cada usuario se hace responsable del cuidado de su mascota.</span>
                @elseif($place->place == 2)
                    <span>Recuerda que cada Hotel puede tener costos extras por el tamaño de la mascota, recomendamos marcar para consultar los precios.</span>
                @elseif($place->place == 3)
                    <span>Recuerda que es importante trae collar,correa y una bolsas para sus desechos.</span>
                @endif
            @endif
            </div>
        </div>

        <div class="grid grid-cols-12 gap-2 my-8 ">
          <div class="col-span-10 bg-black">
            <a href="{{$place->google_link}}" target="_blank">
              <p class="text-white p-2 text-center">
                <i class="fa-brands fa-google"></i> Maps
              </p>
            </a>
          </div>
          <div class="col-span-2 bg-purple-800 text-center text-white p-1" >
            <a href="tel:{{$place->cellphone}}">
              <i class="fa-solid fa-phone p-2"></i>
            </a>
          </div>
        </div>
        </div>
      </div>

    </div>

    <div class="px-6 md:mt-14">

      <div class="grid grid-cols-12 gap-2 md:pl-6">
        <div class="col-span-12 md:col-span-5 py-8  px-4">
          <h2 class="text-2xl font-bold mt-2">Descripción</h2>
          @if($place->description)
              <p class="p-4 text-gray-900 text-lg font-medium">{{ $place->description }}</p>
          @else
             <p *ngIf="!$place->description"  class="p-4">No cuenta con una descripción</p>
          @endif



        </div>
        <div class="col-span-12 md:col-span-5 py-8  px-4">
          <h2 class="text-2xl font-bold mt-2">Horarios</h2>

          @if($place->place == 2 || !is_array($schedule))
            <h2  class="p-4">No aplican Horarios</h2>
            @else

                <table class="w-full p-4 text-gray-800 leading-6" >
                    <tbody>
                    <tr >
                        <td>Lunes</td>
                        @if($schedule[0]["start"] != '00:00' && $schedule[0]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[0]["start"]}}  – {{$schedule[0]["end"]}}
                            </td>
                        @elseif($schedule[0]["start"] == '00:00' && $schedule[0]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[0]["start"] == '00:01' && $schedule[0]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Martes</td>
                        @if($schedule[1]["start"] != '00:00' && $schedule[1]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[1]["start"]}}  – {{$schedule[1]["end"]}}
                            </td>
                        @elseif($schedule[1]["start"] == '00:00' && $schedule[1]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[1]["start"] == '00:01' && $schedule[1]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Miercoles</td>
                        @if($schedule[2]["start"] != '00:00' && $schedule[2]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[2]["start"]}}  – {{$schedule[2]["end"]}}
                            </td>
                        @elseif($schedule[2]["start"] == '00:00' && $schedule[2]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[2]["start"] == '00:01' && $schedule[2]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        @if($schedule[3]["start"] != '00:00' && $schedule[3]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[3]["start"]}}  – {{$schedule[3]["end"]}}
                            </td>
                        @elseif($schedule[3]["start"] == '00:00' && $schedule[3]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[3]["start"] == '00:01' && $schedule[3]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        @if($schedule[4]["start"] != '00:00' && $schedule[4]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[4]["start"]}}  – {{$schedule[4]["end"]}}
                            </td>
                        @elseif($schedule[4]["start"] == '00:00' && $schedule[4]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[4]["start"] == '00:01' && $schedule[4]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Sabado</td>
                        @if($schedule[5]["start"] != '00:00' && $schedule[5]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[5]["start"]}}  – {{$schedule[5]["end"]}}
                            </td>
                        @elseif($schedule[5]["start"] == '00:00' && $schedule[5]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[5]["start"] == '00:01' && $schedule[5]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        @if($schedule[6]["start"] != '00:00' && $schedule[6]["end"] != '00:00')
                            <td class="text-right" >
                                {{$schedule[6]["start"]}}  – {{$schedule[6]["end"]}}
                            </td>
                        @elseif($schedule[6]["start"] == '00:00' && $schedule[6]["end"] == '00:00')
                            <td class="text-right" >
                                Descanso
                            </td>
                        @elseif($schedule[6]["start"] == '00:01' && $schedule[6]["end"] == '00:00')
                            <span class="text-right">
                                Siempre abierto
                            </span>
                        @endif
                    </tr>
                    </tbody>
                </table>
            @endif
        </div>

      </div>


      <div
      class="mt-4 relative block overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8"
  >
      <span
      class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-purple-800 via-purple-800 to-purple-800"
      ></span>

      <div class="sm:flex sm:justify-between sm:gap-4">
      <div>
          <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
          ¡Comparte su perfil para que más personas conozcan a {{$place->title}}!
          </h3>

          <p class="mt-1 text-xs font-medium text-gray-600">Recomendación</p>
      </div>

      <div class="hidden sm:block sm:shrink-0">
          <img
          alt="Radi Pets"
          src="{{asset('img/default-circle.png')}}"
          class="h-16 w-16 rounded-lg object-cover shadow-sm"
          />
      </div>
      </div>

      <div class="mt-4">
      <p id="p1" class="max-w-[40ch] text-sm text-gray-500" id="text">
          https://radi.pet/places/{{$hash}}
      </p>
      <button onclick="copyToClipboard('#p1')" class="mt-2 border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700 text-white font-bold py-2 px-4 rounded-full">
          Copiar
      </button>
      </div>

<dl class="mt-6 flex gap-4 sm:gap-6">
<div class="flex flex-col-reverse">
  <dt class="text-sm font-medium text-gray-600">Redes Sociales</dt>

  <div class="sharing-buttons flex flex-wrap">
    <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fradi.pet%2Fplaces%2F{{$hash}}" aria-label="Share on Facebook">
      <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
        <title>Facebook</title>
        <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
        </path>
      </svg>
    </a>
    <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fradi.pet%2Fplaces%2F{{$hash}}&amp;text=%C2%A1Mira%20este%20lugar%20pet%20friendly%20llamado%20{{$place->title}}%2C%20te%20va%20a%20encantar!" aria-label="Share on Twitter">
      <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
        <title>Twitter</title>
        <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
        </path>
      </svg>
    </a>
    <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://wa.me/?text=%C2%A1Mira%20este%20lugar%20pet%20friendly%20llamado%20{{$place->title}}%2C%20te%20va%20a%20encantar!%20https%3A%2F%2Fradi.pet%2Fplaces%2F{{$hash}}" aria-label="Share on Whatsapp" draggable="false">
      <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
        <title>Whatsapp</title>
        <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
        </path>
      </svg>
    </a>
    <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=%C2%A1Mira%20este%20lugar%20pet%20friendly%20llamado%20{{$place->title}}%2C%20te%20va%20a%20encantar!&amp;url=https%3A%2F%2Fradi.pet%2Fplaces%2F{{$hash}}" aria-label="Share on Telegram" draggable="false">
      <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
        <title>Telegram</title>
        <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
        </path>
      </svg>
    </a>
    <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="mailto:?subject=%C2%A1Mira%20este%20lugar%20pet%20friendly%20llamado%20{{$place->title}}%2C%20te%20va%20a%20encantar!&amp;body=https%3A%2F%2Fradi.pet%2Fplaces%2F{{$hash}}" aria-label="Share by Email" draggable="false">
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




      <a href="{{$place->pdf_menu}}">
       @if($place->pdf_menu && $place->menu)
        <div class="grid grid-cols-12 p-4 rounded-xl shadow-md">
            <div class=" col-span-12  lg:col-span-4 md:ml-6" >
            <img  class="max-h-72 mx-auto rounded-xl" src="{{$place->menu}}" alt="">

            <!-- <div class="px-4 md:px-8">
                <div >
                </div>
                <div  *ngIf="!$place->pdf_menu && !$place->menu">
                <p class="text-center font-bold text-2xl my-4">Este establecimiento no cuenta con Menú</p>
                </div>
            </div> -->
            </div>
            <div class="col-span-12 lg:col-span-4 ml-6">
              <h2 class="text-2xl font-bold mt-6">Menú</h2>
              <p><i class="fa-solid fa-circle-info mt-2"></i> Haz clic en la imagen para ver el menú.</p>
              <p class="font-bold">Ver Menú</p>
            </div>
        </div>
      @endif
    </a>

      <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-12  md:ml-8 py-10">
          <div class="p-8 shadow-lg rounded-xl h-full" style="background-color: #030284;color:#fbfcf5;">
            <h3 class="text-xl font-bold pb-4">Más Informacion sobre {{$place->title}}</h3>

            <div class="grid grid-cols-2">
              <div class="col-span-2 md:col-span-1">
                  @if($place->payments_card)
                      <p><i class="fa-solid fa-check text-green-500"></i> Aceptan pagos con tarjeta</p>
                  @endif
                  <p class="pl-6">
                      @if($place->methods == 4)
                        <i  class="fa-brands fa-cc-mastercard text-2xl px-1"></i>
                        <i  class="fa-brands fa-cc-visa text-2xl px-1"></i>
                      @elseif($place->methods == 5)
                        <i  class="fa-brands fa-cc-amex text-2xl px-1"></i>
                      @endif
                  </p>
                  @if($place->parking)
                    <p class="py-2"><i class="fa-solid fa-check text-green-500"></i> Cuenta con estacionamiento</p>
                  @endif
                  @if($place->wifi)
                    <p class="py-2"><i class="fa-solid fa-check text-green-500"></i> Wifi gratis</p>
                  @endif
              </div>

              @if($place->place != 2)
                <div class="col-span-2 md:col-span-1">
                  @if($place->public == 1)
                    <p class="py-2" *ngIf="$place->public == 1"><i class="fa-solid fa-check text-green-500"></i> Para ir en Familia</p>
                  @elseif($place->public == 2)
                    <p class="py-2" *ngIf="$place->public == 2"><i class="fa-solid fa-check text-green-500"></i> Para ir en Grupo</p>
                  @else
                    <p class="py-2" *ngIf="$place->public == 3"><i class="fa-solid fa-check text-green-500"></i> Para ir con amigos</p>
                  @endif

                  @if($place->accessibility)
                      <p class="py-2" *ngIf="$place->accessibility  " ><i class="fa-solid fa-check text-green-500"></i> Acceso para silla de ruedas</p>
                  @endif

                  @if($place->enviroment)
                      <p class="py-2" *ngIf="$place->enviroment  "><i class="fa-solid fa-check text-green-500"></i> Terraza</p>
                  @endif
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="md:px-8">

        <section>
          <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <h2 class="text-xl font-bold sm:text-2xl"> Reseñas</h2>

            <!-- <div class="mt-4 flex items-center gap-4">
              <p class="text-3xl font-medium">
                3.8
                <span class="sr-only"> Average review score </span>
              </p>

              <div>
                <div class="flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-200"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-xs text-gray-500">Based on 48 reviews</p>
              </div>
            </div> -->


            @if(count($place->reviews) != 0)
                <div  class="mt-8 grid grid-cols-1 gap-x-16 gap-y-12 lg:grid-cols-2" >
                  @foreach ($place->reviews as $review)
                    <blockquote >
                        <header class="sm:flex sm:items-center sm:gap-4">
                        <img src="{{$review->users->photo}}" class="u-img w-12 h-12 rounded-full" alt="image">
                        <div class="flex">
                            <p class="text-yellow-400 font-bold">
                            {{$review->score}} / 10
                            </p>
                            <!-- <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-yellow-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                            </svg>
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-yellow-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                            </svg>
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-yellow-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                            </svg>
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-yellow-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                            </svg>
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-200"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                            </svg> -->
                        </div>
                        </header>

                        <p class="mt-2 text-gray-700 capital">
                        {{$review->comments}}
                        </p>

                        <footer class="mt-4">
                        <p class="capital text-xs text-gray-500"> <span class="font-semibold">{{ $review->users->name}}</span>  - {{ date('d/m/y', strtotime($review->date)) }}</p>
                        </footer>
                    </blockquote>
                  @endforeach

                </div>
            @else
                 <h2 class="text-center my-10 text-gray-800 text-2xl">No hay reseñas</h2>
            @endif

            <p class="text-center text-purple-700 font-bold my-14">
                <a href="/review/{{$hash}}">Agregar comentario</a>
            </p>

          </div>

        </section>


        {{-- <h2 class="text-center my-10 font-bold text-gray-500 py-12 px-6">¡Deja tu reseña y gana puntos! Descarga la app.</h2> --}}

        <div>
      </div>

      <div class="md:ml-6 ">

        <div class="w-full">

          {{-- <ng-adsense
          class="adsbygoogle w-full min-w-full bg-blue-600 "
          [adClient]="'ca-pub-7789760036582954'"
          [adSlot]="5321324498"
          [adFormat]="'auto'"
          [height]="208"
          [display]="'inline-block'"
          ></ng-adsense> --}}
        </div>



        <div class="text-center mt-4 ">
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-7789760036582954"
              data-ad-slot="5321324498"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>

          </div>

        <h2 class="text-xl font-bold sm:text-2xl mb-6"> Ubicación</h2>


        <div class="grid grid-cols-12 gap-2">
          <div class="col-span-12  lg:col-span-6">


            <div id="mapa" class="col-span-12 h-64" style="border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">

            </div>

            {{-- <div class="rounded-lg" style="width: 100%;height: 22em;" leaflet
            [leafletOptions]="options"
            (leafletMapReady)="onMapReady($event)"
            ></div> --}}

          </div>
          <div class="col-span-12 lg:col-span-5">
            <p class="font-bold text-2xl mt-4">Dirección</p>
            <p class="text-gray-600">{{ $place->address }}</p>
            <a href="{{$place->google_link}}" target="_blank" class="text-purple-800 font-bold">Ver en maps</a>
          </div>
        </div>


        <div class="col-span-12 text-center md:col-span-3 p-4">
          <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-7789760036582954"
          data-ad-slot="5321324498"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
        </div>



      </div>


      <section class="px-0 py-12 mx-auto max-w-7xl sm:px-4">
        <div class="grid items-center grid-cols-1 gap-10 px-4 py-6 overflow-hidden text-green-900 bg-green-100 border-green-100 rounded-none card card-body sm:rounded-lg md:px-10 md:grid-cols-5 lg:gap-0">
          <div class="col-span-1 md:col-span-3">
            <h2 class="mb-3 text-2xl font-normal leading-tight lg:text-3xl">¿Tienes un lugar pet friendly o conoces a alguien que tenga uno?</h2>
            <p class="mb-6 text-sm font-semibold lg:text-base">Puedes registrarte y mostrar el perfil de tu establecimiento como este totalmente gratis.</p>
            <a href="/pet-friendly-owners" class="w-full text-green-900 shadow btn btn-white btn-lg sm:w-auto">Registrate</a>
          </div>
          <div class="col-span-1 md:col-span-2">
            <img src="https://radi-images.s3.us-west-1.amazonaws.com/Ipad+impresiones+ios.png" class="w-full ml-0 select-none lg:ml-48" alt="Mac App" />
          </div>
        </div>
      </section>




      </div>

    </div>
  </div>
  @else
  <div  >
    <img style="padding: 7em;" class="mx-auto" src="../../../assets/img/shop.png" alt="shop">

    <div class="text-center">
      <h2 class=" text-xl">Ese establecimiento no existe</h2>
      <a href="/$place->" class="text-purple-800 font-bold ">Ver otros lugares</a>
    </div>

  </div>
@endif

@include('layouts.footer')


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script>

    $('.u-img').on('error',function() {
        alert('caca');
        $(this).attr('src', '{{asset('img/icon.png')}}').addClass('no-img');
    });


    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        $("#modalShare").addClass('hidden');

    }

    var latitude = {{$place->latitude}};
    var longitude = {{$place->longitude}};

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);


    var radiIcon = L.icon({
        iconUrl: '{{asset("img/radi-32.png")}}',
        iconSize: [20, 20]
    });

    L.marker([latitude,longitude], {icon: radiIcon}).addTo(map)
    .bindPopup('Aquí se encuentra');
</script>
