<div class="fixed hidden insert-0  bg-opacity-50 fixed overflow-y-auto h-screen w-full z-50	" id="modal">
    <div class="relative top-20 mx-auto p-5 border w-full md:w-1/2 shadow-lg rounded-md bg-white">
    <div class="mt-3 text-center">
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full">
            <img src="/img/logo-blue.png"  alt="">
        </div>
        <h3 class="text-lg leading-6 font-medium" style="color:#3b1687">Radi Pets</h3>
        <div class="mt-2 py-3">
    <!-- component -->
    <div>
    <section class="text-gray-700">
      <div class="container py-4 ">
        <div class="text-center mb-2">
          <h1 class="sm:text-3xl text-2xl font-medium text-center " style="color:#3b1687">
                Preguntas Frecuentes
          </h1>

        </div>
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
          <div class="w-full px-4 py-2 text-left">
            <details class="mb-4 ">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
               ¿Tiene costo adoptar?
              </summary>

              <span>
                La plataforma de Radi Pets, no te cobra por la adopción, sin embargo cada albergue o refugio pueden tener un couta de recuperación para mantenerse, el precio puede variar dependiendo del albergue.
              </span>
            </details>
            <details class="mb-4">
              <summary class="font-semibold bg-gray-200 rounded-md py-2 px-4">
                ¿Cuáles son los requisitos para adoptar?
              </summary>

              <span>
                <ul class="list-disc">
                    <li>
                        Ser mayor de edad es requisito para adoptar una mascota. Si eres menor, tu tutor o padre debe hacer la solicitud.</ul>
                    </li>
                <ul class="list-disc">
                    <li>
                        Comprobante de domicilio e identificación con foto.</ul>
                    </li>
                <ul class="list-disc">
                    <li>
                        Tener una cuenta en Radi Pets, si no tienes puedes crearla <a href="/register" class="text-purple-800">aqui</a> (es rápido y gratis) </ul>
                    </li>
                <ul class="list-disc">
                    <li>
                        Contestar un filtro por parte del albergue</ul>
                    </li>
              </span>
            </details>
            <details class="mb-4">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                ¿Cuanto tarda la solicitud de adopción?
              </summary>

              <span>El tiempo para aprobar la solicitud para adoptar una mascota puede variar según varios factores. En el mejor de los casos, el proceso puede llevar solo unos minutos si el responsable del refugio está disponible para asistirte de inmediato. Sin embargo, en algunos casos, el proceso puede llevar más tiempo debido a la situación particular del refugio o la organización.              </span>
            </details>
          </div>
          <div class="w-full px-4 py-2 text-left">
            <details class="mb-4">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                ¿Cómo funciona el proceso de adopción?
             </summary>

              <span class="px-4 py-2">El proceso de adopción de mascotas varía según la organización o refugio. Por lo general, implica completar una solicitud, una evaluación, una posible entrevista y una coincidencia con una mascota adecuada, se firma un contrato y se entrega la mascota, al finalizar el proceso se hace un seguimiento continuo.              </span>
            </details>
            <details class="mb-4">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
               ¿Cuál es la preparación en el hogar para adoptar?
              </summary>

              <span class="px-4 py-2">Preparación para adoptar una mascota: espacio adecuado, suministros necesarios, seguridad en el hogar, asignación de tiempo, investigación sobre la especie y preparación emocional. Brinda un entorno seguro y feliz para el bienestar a largo plazo de tu mascota.</p>
              </span>
            </details>
            <details class="mb-4">
              <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
               ¿Cómo funciona el seguimiento?
              </summary>

              <span class="px-4 py-2">El seguimiento de una adopción de mascota implica realizar un seguimiento periódico después de la adopción para garantizar el bienestar del animal. Esto puede incluir visitas domiciliarias, consultas telefónicas o correos electrónicos para evaluar la adaptación, proporcionar orientación y solucionar cualquier problema. El objetivo es asegurar que la mascota esté recibiendo el cuidado adecuado y brindar apoyo continuo al adoptante.</span>
            </details>
          </div>
        </div>
      </div>
    </section>
  </div>
        </div>
        <div class="items-center px-4 ">

            <button id="cancel-btn"  class="px-4  text-gray-800
                            text-base font-medium rounded-md w-full
                            shadow-sm  ">

            </button>
            <div class="p-6  flex items-center justify-center">
                <button id="ok-btn" class="px-4 py-2 bg-red-500 text-white
                text-base font-medium rounded-md w-full
                shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Cerrar
                </button>

            </div>



        </div>
    </div>

        </div>
    </div>
</div>



@include('layouts.nav')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
crossorigin="anonymous"></script>

@if($org)
    <div >
        <div class="grid grid-cols-12">
        <div class=" col-span-12 md:col-span-10 md:col-start-2 xl:col-span-8 xl:col-start-3  lg:px-20">
            <img src="{{$org->cover}}" onerror="if (this.src != 'error.jpg') this.src = '{{asset('img/default.png')}}';" class="rounded-lg mt-2 w-full object-cover md:max-h-96" alt="cover image">
            <img src="{{$org->photo}}" onerror="if (this.src != 'error.jpg') this.src = '{{asset('img/default-circle.png')}}';" class="w-32 h-32 rounded-full" style="margin-top:-5em;margin-left:1em;" alt="profile image">
            <div class="p-4">

            <h2 class="text-3xl font-bold capital text-gray-800 ">{{$org->name}}
                @if($org->verified)
                    <i class="fa-solid fa-circle-check text-green-700" ></i>
                @endif
            </h2>
            <div class="mt-4">

            <a href="tel:{{$org->cellphone}}">
                <i class="fa-solid fa-phone text-gray-700"></i>
            </a>

            <a  href="mailto:{{$org->email}}" class="ml-4 ">
                <i class="fa-solid fa-envelope text-gray-700"></i>
            </a>

            </div>
            <p class="mt-4 font-bold text-2xl">Descripción</p>
            <p>{{$org->description}}</p>
            <div class="mt-4">
                @if($org->volunteers)
                    <ul class="pt-1"><i class="fa-solid fa-hand-holding-heart text-gray-700"></i> Aceptan voluntarios</ul>
                @else
                    <ul class="pt-1"><i class="fa-solid fa-hand-holding-heart text-gray-700"></i> No Aceptan voluntarios</ul>
                @endif

                <ul class="pt-1"><i class="fa-sharp fa-solid fa-calendar-days text-gray-700"></i>  Creado desde el {{  date('d/M/y', strtotime($org->createdAt)) }}</ul>
                @if($org->main_link)
                    <ul class="pt-1"><i class="fa-solid fa-circle-dollar-to-slot text-gray-700"></i> Aceptan donativos</ul>
                @else
                    <ul class="pt-1"><i class="fa-solid fa-circle-dollar-to-slot text-gray-700"></i> No aceptan donativos por el momento</ul>
                @endif
                <ul class="pt-1"><i class="fa-sharp fa-solid fa-face-smile text-gray-700"></i> Fundada por {{$org->person_name}}</ul>

                @if($org->recovery_fee)
                    <ul class="pt-1"><i class="fa-solid fa-heart text-gray-700"></i> Cuota de recuperación de {{$org->recovery_fee}} MXN</ul>
                @else
                <ul class="pt-1"><i class="fa-solid fa-heart text-gray-700"></i> Sin cuota de recuperación</ul>
                @endif
            </div>

            @if($org->main_link)
                <a target="_blank" href="{{$org->main_link}}" class="text-white mt-4 bg-purple-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                    Apoyar
                </a>
            @endif

            <div
        class="mt-4 relative block overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8"
    >
        <span
        class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-purple-800 via-purple-800 to-purple-800"
        ></span>

        <div class="sm:flex sm:justify-between sm:gap-4">
        <div>
            <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
            ¡Comparte su perfil para llegar a más personas!
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
            https://radi.pet/org/{{$hash}}
        </p>
        <button onclick="copyToClipboard('#p1')" class="mt-2 border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700 text-white font-bold py-2 px-4 rounded-full">
            Copiar
        </button>
        </div>

        <dl class="mt-6 flex gap-4 sm:gap-6">
        <div class="flex flex-col-reverse">
            <dt class="text-sm font-medium text-gray-600">Redes Sociales</dt>


            <div class="sharing-buttons flex flex-wrap">
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fradi.pet%2Forg%2F{{$hash}}" aria-label="Share on Facebook">
                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Facebook</title>
                    <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                    </path>
                  </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fradi.pet%2Forg%2F{{$hash}}&amp;text=Descubre%20el%20perfil%20de%20{{$org->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!" aria-label="Share on Twitter">
                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Twitter</title>
                    <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                    </path>
                  </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://wa.me/?text=Descubre%20el%20perfil%20de%20{{$org->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!%20https%3A%2F%2Fradi.pet%2Forg%2F{{$hash}}" aria-label="Share on Whatsapp" draggable="false">
                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Whatsapp</title>
                    <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                    </path>
                  </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Descubre%20el%20perfil%20de%20{{$org->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!&amp;url=https%3A%2F%2Fradi.pet%2Forg%2F{{$hash}}" aria-label="Share on Telegram" draggable="false">
                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Telegram</title>
                    <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                    </path>
                  </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="mailto:?subject=Descubre%20el%20perfil%20de%20{{$org->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!&amp;body=https%3A%2F%2Fradi.pet%2Forg%2F{{$hash}}" aria-label="Share by Email" draggable="false">
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



    <div class="mt-4 w-full h-64 rounded-md mx-auto text-center">
        <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7789760036582954"
                data-ad-slot="5321324498"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
    </div>


    <p class=" font-bold text-2xl mt-12">Social</p>
        @if($social_media)
                <div>
                    <p>Para ver las fotos y saber más puedes seguirlos en sus redes sociales</p>
                    <div class="grid gap-2 grid-cols-12 mt-4">
                        @if($social_media->instagram)
                            <div   class="md:col-span-4 col-span-6">
                                <div class="rounded-2xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-1 shadow-xl">
                                <a target="_blank" class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" href="{{$social_media->instagram}}">
                                    <div class="">
                                    <i class="fa-brands fa-instagram"></i>
                                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                                        Instagram
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Seguir
                                    </p>
                                    </div>
                                </a>
                                </div>
                            </div>
                        @endif
                        @if($social_media->facebook)
                            <div class="md:col-span-4 col-span-6">
                                <div  class="rounded-2xl bg-gradient-to-r from-blue-500 via-blue-500 to-blue-500 p-1 shadow-xl">
                                <a target="_blank"  class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" href="{{$social_media->facebook}}">
                                    <div class="">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                                        Facebook
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Seguir
                                    </p>
                                    </div>
                                </a>
                                </div>
                            </div>
                        @endif

                    </div>

                </div>

        @else
            <h2 class="text-center text-gray-900 font-bold py-12">Este albergue no ha agregado sus redes sociales.</h2>
        @endif



            <p class="mt-4 font-bold text-2xl">Otras formas de apoyar</p>


            <div class="grid gap-4 grid-cols-12 mt-4">
                @if($org->wishlist)
                    <div class="col-span-6">
                        <div class="rounded-2xl bg-gradient-to-r from-orange-300 via-orange-400 to-orange-500 p-1 shadow-xl">
                            <a class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" href="{{$org->wishlist}}">
                            <div class="">
                                <i class="fa-brands fa-amazon"></i>
                                <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                                Amazon
                                </h3>
                                <p class="mt-2 text-sm text-gray-500">
                                Ver lista
                                </p>
                            </div>
                            </a>
                        </div>
                    </div>
                @else
                <div class="col-span-6">
                    <div class="rounded-2xl bg-gradient-to-r from-orange-300 via-orange-400 to-orange-500 p-1 shadow-xl">
                        <div class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8 text-gray-900 font-bold" >
                           No tiene link de lista de deseos
                        </div>
                    </div>
                </div>
                @endif

                @if($org->bank_card != '' || $org->bank_account != '')
                    <div class="col-span-6">
                        <div class="rounded-2xl bg-gradient-to-r from-red-500 via-red-500 to-red-500 p-1 shadow-xl">
                            <div class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" >
                            <div class="">
                                <i class="fa-solid fa-building-columns"></i>
                                <h3 class="text-lg font-bold text-gray-900 sm:text-xl capital">
                                {{$org->bank_name}}
                                </h3>
                                <p class="mt-2 text-sm text-gray-500">
                                {{$org->bank_card}}
                                </p>
                                <p class="mt-2 text-sm text-gray-500">
                                {{$org->bank_account}}
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                @else
                <div class="col-span-6">
                    <div class="rounded-2xl bg-gradient-to-r from-red-500 via-red-500 to-red-500 p-1 shadow-xl">
                        <div class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8 text-gray-900 font-bold" >
                                <h2>No tiene configurado cuenta de banco</h2>
                        </div>
                    </div>
                </div>

                    @endif
                </div>

         <a id="open-btn" class="mt-4 block rounded-xl border border-gray-800 bg-gray-900 p-4 shadow-xl sm:p-6 lg:p-8">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10 text-blue-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                />
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                />
            </svg>

            <h3 class="mt-3 text-lg font-bold text-white sm:text-xl">
                ¿Tienes dudas?
            </h3>

            <p class="mt-4 text-sm text-gray-300">
            Si tienes alguna dudas sobre los requisitos y procedimientos de adopción, puedes dar click en esta tarjeta para ver las preguntas frecuentes a la hora de adoptar.
            </p>
         </a>

            <p class="mt-20 font-bold text-2xl">Mascotas</p>
            @if(count($pets) != 0)
            <div class="grid gap-4 grid-cols-12 mt-4">
                @foreach($pets as $pet)
                    <div class="col-span-12 md:col-span-6" >
                        <a                             target="_blank"
                        href="/pet/{{$pet->setHiddenId()}}" class="hover:cursor-pointer block rounded-lg p-4 shadow-sm shadow-indigo-100">
                            <img
                            alt="Home"
                            src="{{$pet->photo}}"
                            onerror="if (this.src != 'error.jpg') this.src = '{{asset('img/default.png')}}';"
                            class="h-56 w-full rounded-md object-cover"
                            />

                            <div class="mt-2">
                            <dl>

                                <div>
                                <dt class="sr-only">nombre</dt>

                                <dd class="font-medium capitalize">{{$pet->name}}</dd>
                                </div>
                            </dl>

                            <div class="mt-6 flex items-center gap-8 text-xs">
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">

                                <div class="mt-1.5 sm:mt-0">
                                    <p class="text-gray-500">Especie</p>
                                    @if($pet->specie == 1)
                                        <p class="font-medium">Gato</p>
                                    @else
                                        <p class="font-medium">Perro</p>
                                    @endif

                                </div>
                                </div>

                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">

                                <div class="mt-1.5 sm:mt-0">
                                    <p class="text-gray-500">Género</p>
                                    @if($pet->gender == 1)
                                    <p class="font-medium">Hembra</p>
                                @else
                                    <p class="font-medium" >Macho</p>
                                @endif
                                </div>
                                </div>

                                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">

                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {!! $pets->render() !!}
            </div>

            @else
                <div >
                    <h2 class="text-center text-gray-600 font-bold py-20">No tiene mascotas por el momento.</h2>
                </div>

            @endif



            <div class="mt-4 w-full h-64 rounded-md mx-auto text-center">
                <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-7789760036582954"
                        data-ad-slot="5321324498"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
            </div>

            <p class="my-4 font-bold text-2xl">Ubicación</p>

            <div id="mapa" class="col-span-12 h-64" style="z-index:0;border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">
            </div>

            <p class="mt-4 font-bold">Dirección:</p>
            <p >{{$org->address}}</p>

            </div>
        </div>

        </div>
        <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="bg-purple-600 p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="mx-auto max-w-xl text-center">
                <h2 class="text-2xl font-bold text-white md:text-3xl">
                    ¿Tienes un albergue?
                </h2>

                <p class="dark:text-white text-left text-white  sm:mt-4 ">
                    Si tienes un albergue y deseas registrarlo, ¡es muy sencillo! Solo tienes que enviarnos un mensaje y nosotros nos encargaremos de validar tu solicitud de manera totalmente gratuita.            </p>

                <div class="mt-4 md:mt-8">
                    <a
                    href="https://www.instagram.com/radipets/"
                    class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-blue-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
                    >
                    Registrarme
                    </a>
                </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                <img
                alt="Student"
                src="https://images.unsplash.com/photo-1675701918017-fda8f5bcbf90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
                class="h-40 w-full object-cover sm:h-56 md:h-full"
                />

                <img
                alt="Student"
                src="https://images.unsplash.com/photo-1596383924439-4d410af270f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1150&q=80"
                class="h-40 w-full object-cover sm:h-56 md:h-full"
                />
            </div>
            </div>
        </div>
        </section>

    </div>
@else
    <div>
        <div class="text-center mt-40 my-32">

        <h1 class="text-orange-500">No existe el albergue</h1>
        <a href="/" class="text-blue-400">Volver al inicio</a>
        </div>
    </div>
@endif


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script>

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        $("#modalShare").addClass('hidden');

    }


    var latitude = {{$org->latitude}};
    var longitude = {{$org->longitude}};

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    L.marker([latitude,longitude]).addTo(map)
    .bindPopup('Aquí se encuentra');
</script>

<script>
    let modal = document.getElementById('modal');
     let btn = document.getElementById('open-btn');
      let button = document.getElementById('ok-btn');
      let cancel = document.getElementById('cancel-btn');

      btn.onclick = function () {
              modal.style.display = 'block';
          };

          button.onclick = function () {
              modal.style.display = 'none';
          };

          cancel.onclick = function () {
              modal.style.display = 'none';
          };

      window.onclick = function (event) {
      if (event.target == modal) {
      modal.style.display = "none";
      }
      }
</script>
@include('layouts.footer')

