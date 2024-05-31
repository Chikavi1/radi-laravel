@if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

@if($pet->status == 0)

    <div class="bg-black px-4 py-3 text-white">
        <p class="text-center text-sm font-medium">
            <i class="fa-solid fa-ribbon text-white"></i> Mascota Fallecida
        </p>
    </div>
@elseif($pet->status == 2 && $pet->id_organization && $pet->id_user)
<div class="bg-green-800 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        <i class="fa-solid fa-medal text-white"></i> Mascota Adoptada en Radi Pets
    </p>
</div>
@endif
<script src="https://js.stripe.com/v3/"></script>

@include('layouts.nav')




@if($pet)

  <div >
    <div class="grid grid-cols-12 ">
      <div class="col-span-12 md:col-span-10 md:col-start-2 xl:col-span-8 xl:col-start-3  lg:px-20">
        <img src="{{$pet->photo}}" class="md:object-cover md:w-5/6 md:h-96 md:mx-auto w-full md:rounded-md" alt="profile image">
        <div class="p-4">

           <div class="grid grid-cols-12 mt-4">
            <div class="col-span-8">
                <h2 class="text-3xl font-bold capital text-gray-800 ">{{$pet->name}}</h2>
            </div>
            <div class="col-span-4">
                <button onClick="openModal()" type="button" class="py-2 px-4 flex justify-center items-center  bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                    <i class="fa-solid fa-heart"></i>
                    &nbsp;
                    Apoyar
                </button>
            </div>
           </div>



          @if($pet->status == 2)
          @if($pet->status == 2 && $pet->id_organization && $pet->id_user)
            <p class="font-bold text-green-800 text-xl ">Mascota Adoptada </i></p>

             @else
                <p class="font-bold text-green-800 text-xl ">Esta en adopción</p>
             @endif
          @elseif($pet->status == 3)
            <p class="font-bold text-red-800 text-xl ">Desaparecido</p>
          @elseif($pet->status == 0)
            <p class="font-bold text-black text-xl ">Fallecío</p>
          @endif
         <div class="mt-4">
            @auth
                @if(Auth::user()->id == $pet->id_user && $pet->status != 0)
                    <a href="/pet/{{$hash}}/edit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <span>Editar información</span>
                    </a>
                    @if( $pet->status != 0 &&  $pet->status != 3)
                    <a href="/lost/create" class="bg-red-300 hover:bg-red-400 text-red-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <span><i class="fa-solid fa-triangle-exclamation"></i>  Reportar desaparición</span>
                    </a>
                    @endif
                @endif
            @endauth
          </div>

        @if($pet->status == 0)

            <div
                class="relative flex items-start justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8">
                <div class="pt-4 text-gray-500">
                    <i class="fa-solid fa-ribbon text-4xl "></i>

                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl">
                    Para mi
                    @if($pet->gender == 1)
                            <span>
                                querido
                            </span>
                        @else
                            <span>
                                querida
                            </span>
                        @endif
                    {{$pet->name}}
                    </h3>

                    <p class="mt-2">Siempre serás mi fiel
                        @if($pet->gender == 1)
                            <span>
                                compañero
                            </span>
                        @else
                            <span>
                                compañera
                            </span>
                        @endif
                    tu partida deja un gran vacío en mi corazón. Recordaremos a {{$pet->name}} con cariño y aprecio, con grandes momentos que
                    @if($pet->gender == 1)
                        <span>él</span>
                    @else
                        <span>
                            ella
                        </span>
                    @endif
                    me brindo durante nuestro tiempo juntos. Descansa en paz, mi
                    @if($pet->gender == 1)
                        <span>
                            querido
                        </span>
                    @else
                        <span>
                            querida
                        </span>
                    @endif
                    {{$pet->name}}.</p>
                </div>
            </div>
        @endif
          <p class="mt-4 font-bold text-2xl">Descripción</p>
          <p class="capital">{{$pet->description}}</p>



<ul class=" mt-6 flex flex-wrap text-sm font-medium text-center menu">
    <li class="mr-2">
        <a id="menu-info" class="inline-block p-4 font-bold bg-white rounded-t-lg active ">
            Información
        </a>
    </li>
    <li class="mr-2">
        <a id="menu-message" class="inline-block p-4 rounded-t-lg font-bold">
            Mensajes
        </a>
    </li>
    <li class="mr-2">
        <a id="menu-moments" class="inline-block p-4 rounded-t-lg font-bold">
            Momentos
        </a>
    </li>
</ul>


    <div id="information" class="hidden">
        <h2 class="text-xl text-center px-5 my-6 font-bold">Información</h2>


        @if($pet->status == 3 && $pet->losts)
            <article class="flex bg-white transition hover:shadow-xl my-12">
                <div class="hidden sm:block sm:basis-56">
                    <div id="mapa" class="col-span-12 h-80" style="border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">

                    </div>
                </div>

                <div class="flex flex-1 flex-col justify-between">
                  <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                    <a href="#">
                      <h3 class="font-bold uppercase font-bold text-red-900">
                       Se encuentra desaparecido
                      </h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        Si sabes información del paradero de la mascota, puedes contactarte o ver más información del reporte de desaparición.
                    </p>

                  </div>

                  <div class="sm:flex sm:items-end sm:justify-end">
                    <a
                    target="_blank"
                    href="/lost/{{$pet->losts->setHiddenId()}}"
                      class="block bg-red-600 px-5 py-3 text-center text-xs font-bold uppercase text-white transition hover:bg-red-700"
                    >
                      Ver más información
                    </a>
                  </div>
                </div>
              </article>

        @endif



          @if($pet->organizations && !$pet->id_user)
            <article class="flex bg-white transition hover:shadow-xl my-12">


                <div class="hidden sm:block sm:basis-56">
                <img
                    alt="Guitar"
                    src="{{$pet->organizations->photo}}"
                    class="aspect-square h-62 w-52 object-cover"
                />
                </div>

                <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                    <a href="#">
                    <h3 class="font-bold uppercase text-gray-900">
                        Adopta a {{ $pet->name }}
                    </h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        Para adoptar a esta mascota ponte en contacto con el albergue/refugio
                        <a class="font-bold text-blue-900" target="_blank" href="/org/{{$pet->organizations->setHiddenId()}}">
                            {{$pet->organizations->name}}
                        </a>
                    </p>
                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 font-bold">
                        Importante:
                        @if($pet->organizations->recovery_fee)
                            <span>
                                Cuota de recuperacion de {{ $pet->organizations->recovery_fee }} MXN
                            </span>
                        @else
                            <span>
                                Sin Cuota de recuperación
                            </span>
                        @endif
                    </p>
                </div>

                <div class="sm:flex sm:items-end sm:justify-end">
                    <a
                    href="tel:{{$pet->organizations->cellphone}}"
                    class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400"
                    >
                    Contactar
                    </a>
                </div>
                </div>
            </article>
          @endif



          <div class="grid gap-2 grid-cols-12 mt-4">
            <div  class=" col-span-6">
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
            <div class="col-span-6">
              <div  class="rounded-2xl bg-gradient-to-r from-red-900 via-red-900 to-red-900 p-1 shadow-xl">
                <a target="_blank"  class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                  <div class="">
                      @if($pet->specie == 2)
                        <i class="fa-solid fa-paw"></i>
                        <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                        Tamaño
                        </h3>
                        @switch($pet->size)
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
                        {{$pet->weight}} KG
                    @endif
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="grid gap-2 grid-cols-12 mt-4">
            <div  class=" col-span-6">
              <div class="rounded-2xl bg-gradient-to-r from-blue-900 via-blue-900 to-blue-900 p-1 shadow-xl">
                <a target="_blank" class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                  <div class="">
                    <i class="fa-solid fa-venus-mars"></i>
                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                      Género
                    </h3>
                    @if ($pet->gender == 1)
                        <p class="mt-2 text-sm text-gray-500">
                        Macho
                        </p>
                    @else
                        <p class="mt-2 text-sm text-gray-500">
                        Hembra
                        </p>
                    @endif
                  </div>
                </a>
              </div>
            </div>
            <div class=" col-span-6">
              <div  class="rounded-2xl bg-gradient-to-r from-yellow-500 via-yellow-500 to-yellow-500 p-1 shadow-xl">
                <a target="_blank"  class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                  <div class="">
                    <i class="fa-regular fa-circle"></i>
                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                      Especie
                    </h3>
                    @if ($pet->specie == 1)
                        <p *ngIf="$pet->specie == 1" class="mt-2 text-sm text-gray-500">
                        Gato
                        </p>
                    @else
                        <p *ngIf="$pet->specie == 2" class="mt-2 text-sm text-gray-500">
                        Perro
                        </p>
                    @endif

                  </div>
                </a>
              </div>
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
                            ¡Comparte su perfil para que más personas conozcan a {{$pet->name}}!
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
                            https://radi.pet/pet/{{$hash}}
                        </p>
                        <button  type="button" onclick="copyToClipboard('#p1')" class="mt-2 border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700 text-white font-bold py-2 px-4 rounded-full">
                            Copiar
                        </button>
                        </div>

                <dl class="mt-6 flex gap-4 sm:gap-6">
                <div class="flex flex-col-reverse">
                    <dt class="text-sm font-medium text-gray-600">Redes Sociales</dt>

                    <div class="sharing-buttons flex flex-wrap">
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share on Facebook">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Facebook</title>
                            <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}&amp;text=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A" aria-label="Share on Twitter">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Twitter</title>
                            <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://wa.me/?text=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A%20https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share on Whatsapp" draggable="false">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Whatsapp</title>
                            <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A&amp;url=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share on Telegram" draggable="false">
                          <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Telegram</title>
                            <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                            </path>
                          </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="mailto:?subject=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A&amp;body=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share by Email" draggable="false">
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


        </div>
    </div>

    <div id="messages" class="hidden">
        <h2 class="text-xl text-center px-5 font-bold">Mensajes</h2>

        <div class="container flex my-6 flex-col items-center justify-center w-full mx-auto bg-white rounded-lg shadow ">
            <ul class="flex flex-col divide-y divide">
                <li class="flex flex-row">
                    <div class="flex items-center flex-1 p-4 cursor-pointer select-none">

                        <div class="flex-1 pl-1 mr-16">
                            <div class="font-medium">
                                Luis Rojas
                            </div>
                            <div class="text-sm">
                                Que chingue su madre el america xdxd
                            </div>
                        </div>
                        <div class="text-xs">
                            27/05/2024 5:00 PM
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>

    <div id="moments" class="text-center hidden">
        <h2 class="text-xl px-8 font-bold">Momentos</h2>

        <h2 class="text-center p-6 ">Para ver los momentos y más información necesitas verlo en la app</h2>

        <button class=" px-6 py-2 m-4 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
            Descargar App
        </button>

        {{-- <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1613545325278-f24b0cae1224?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-56 w-full rounded-md object-cover"
            />

            <div class="mt-2">
              <dl>
                <div>
                  <dt class="sr-only">Price</dt>

                  <dd class="text-sm text-gray-500">25 de junio del 2032</dd>
                </div>

                <div>

                  <dd class="font-medium">Visitando a miaughenin</dd>
                </div>
              </dl>


            </div>
          </a> --}}

    </div>

    </div>

    </div>


    <section  class="flex items-center justify-center bg-white">
        <div id="modalOverlay" style="display:none;">
            <div id="modal" class="rounded-2xl max-w-xl">
                <div class="flex py-2 w-full items-center justify-center border-b">
                        <h1 class="pt-4 text-xl text-black font-semibold text-center pb-4">Apoyar a {{ $pet->name }}</h1>
                        <button id="close" class="m-4 absolute top-0 right-1 hover:bg-gray-200 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-black" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                </div>
                <div class="p-4">
                    <form id="payment-form">
                        @csrf
                        <div class="rounded-lg ">
                            <div  >

                                <div class="mt-6">
                                    <div class="w-full space-y-6">
                                        <div class="w-full">
                                            <div class=" relative ">
                                                <div class="grid grid-cols-12">
                                                    <p class="col-span-3 opcion" data-valor="50">50</p>
                                                    <p class="col-span-3 opcion" data-valor="100">100</p>
                                                    <p class="col-span-3 opcion" data-valor="200">200</p>
                                                    <p class="col-span-3 opcion" id="opcion-otro">Otro</p>
                                                </div>
                                            </div>

                                            <div class="w-full">
                                                <div class="relative"  id="input-otro" style="display: none;margin-top:1em;">
                                                    <input type="number" id="input-cantidad" min="10" placeholder="Ingrese la cantidad" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                </div>
                                                <div id="error-message" class="text-red-500 mt-2"></div>

                                                </div>
                                                <div class=" relative mt-3">
                                                    <input required  name="name" type="text" id="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre"/>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class=" relative ">
                                                        <input required name="message" type="text" id="message" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Mensaje"/>
                                                        </div>
                                                    </div>
                                                    <div id="card-element" style="padding: 2em 0em;">
                                                    </div>
                                                    <div id="card-errors" role="alert"></div>
                                                  </div>
                                                        <span class="mt-2 block w-full rounded-md shadow-sm">
                                                            <button  type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                                Apoyar
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="my-3 text-green-600 text-center font-bold">Total <span id="total">100</span>$ <span id="nt-total"></span>  MXN</p>
                                        <div class="px-4 py-6 border-t-2 border-gray-200  sm:px-10">
                                            <p class="text-xs leading-5 text-gray-500">
                                                Tu Apoyo será para comprar alimentos.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </form>
            </div>
        </div>
</section>




<style>
    #modalOverlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.4);
    z-index:9999;
    }

    #modal {
    position: fixed;
    width: 90%;
    top: 55%;
    left: 50%;
    text-align: center;
    background-color: #fafafa;
    box-sizing: border-box;
    opacity: 0;
    transform: translate(-50%,-50%);
    transition: all 300ms ease-in-out;
    }

    #modalOverlay.modal-open #modal {
    opacity: 1;
    top: 50%;
    }
    .activo{
        color: green;
        font-weight: bold !important;
        font-size: 1.1em;
    }
</style>

@else
  <div >
    <div class="text-center mt-40">

      <h1 class="text-orange-500">No existe mascota</h1>
      <a href="/" class="text-blue-400">Volver al inicio</a>
    </div>
  </div>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


<script>


    const opciones = document.querySelectorAll(".opcion");
    const opcionOtro = document.getElementById("opcion-otro");
    const inputOtro = document.getElementById("input-otro");
    const inputCantidad = document.getElementById("input-cantidad");
    const botonConfirmar = document.getElementById("boton-confirmar");

    $("#information").removeClass('hidden');

    $("#menu-info").on('click',()=>{
        $("#messages").addClass('hidden');
        $("#moments").addClass('hidden');
        $("#information").removeClass('hidden');

    })

    $("#menu-message").on('click',()=>{
        $("#information").addClass('hidden');
        $("#moments").addClass('hidden');
        $("#messages").removeClass('hidden');


    })

    $("#menu-moments").on('click',()=>{
        $("#information").addClass('hidden');
        $("#messages").addClass('hidden');
        $("#moments").removeClass('hidden');

    })

    opciones.forEach(function(opcion) {
        opcion.addEventListener("click", function() {
            // Remover la clase 'activo' de todas las opciones
            opciones.forEach(function(op) {
                op.classList.remove("activo");
            });

            var valor = $(this).data('valor');
            // Imprimir el valor en la consola
            console.log(valor);
            $('#total').text(valor);

            // Agregar la clase 'activo' a la opción seleccionada
            opcion.classList.add("activo");

            // Si se selecciona la opción "Otro", mostrar el input
            if (opcion === opcionOtro) {
                inputOtro.style.display = "block";
            } else {
                inputOtro.style.display = "none";
            }
        });
    });

    $('#input-cantidad').on('input', function() {
        var cantidad = $(this).val();
        if (cantidad < 10) {
            $('#error-message').text('El valor debe ser mayor o igual a 10');
            $('#total').text('');
        } else {
            $('#error-message').text('');
            $('#total').text(cantidad);
        }

    });



// var stripe = Stripe('pk_live_51KsA9rBp6uwr6porsLeNx9LTinc5UlLigLVda6w2RSnXJon8rlNOHJKLTtJIQEPc5Rsx5iPytfFhlOV2wutNdZEv00J6YxosX1');
var stripe = Stripe('pk_test_51KsA9rBp6uwr6porp9J8YwjOQER0i3Yakw8ovYpZU7H0GqwTZCNrnsUAetok7Giot72v8pHAKpWAFyLjVBBLYO0x00DIFUA2qm');

// Crea un elemento de pago de Stripe
var elements = stripe.elements();
var cardElement = elements.create('card');

// Monta el elemento de pago en el DOM
cardElement.mount('#card-element');

// Maneja el envío del formulario
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    const cantidad = parseInt(inputCantidad.value);
        if (!isNaN(cantidad) && cantidad >= 10) {
            console.log("Cantidad ingresada:", cantidad);
        } else {
            console.log("Ingrese una cantidad válida (mínimo 10 pesos)");
        }

    stripe.createPaymentMethod({
        type: 'card',
        card: cardElement,
    }).then(function(result) {
        if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            fetch('/support-pet', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    payment_method: result.paymentMethod.id,
                    pet_id: {{$pet->id}},
                    name:  $("#name").val(),
                    message: $("#message").val(),
                    amount: $("#total").text()
                }),
            }).then(function(response) {
                return response.json();
            }).then(function(data) {
                console.log(data);
            });
        }
    });
});

    function openModal(){
         $('#modalOverlay').show().addClass('modal-open');
    }

    $('#close').click(function() {
        var modal = $('#modalOverlay');
        modal.removeClass('modal-open');
        setTimeout(function() {
            modal.hide();
        },200);
    });

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim($(element).text())).select();
        document.execCommand("copy");
        $temp.remove();
        $("#modalShare").addClass('hidden');
    }

    @if($pet->losts)
        var map = L.map('mapa',{ zoomControl: false }).setView([ {{$pet->losts->latitude}} , {{$pet->losts->longitude}} ], 14);
        L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
        }).addTo(map);

        var radiIcon = L.icon({
            iconUrl: '{{asset("img/target.png")}}',
            iconSize: [20, 20]
        });

        L.marker([{{$pet->losts->latitude}},{{$pet->losts->longitude}}], {icon: radiIcon}).addTo(map);


        map.dragging.disable();
        map.touchZoom.disable();
        map.doubleClickZoom.disable();
        map.scrollWheelZoom.disable();
        map.boxZoom.disable();
        map.keyboard.disable();
    @endif


</script>

    @include('layouts.footer')
