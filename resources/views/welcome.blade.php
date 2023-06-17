{{-- @if (Route::has('login'))
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
    @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
    @endauth
</div>
@endif --}}

@include('layouts.announs')
@include('layouts.nav')


<!-- <div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase"> </h2>
      <p class="mt-2 text-4xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        ¿Cómo te podemos ayudar en Radi Pets?
      </p>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
        Conoce los 3 perfiles que conforman a Radi Pets
      </p>
    </div>

    <section class="bg-white dark:bg-gray-900">
          <div class="container px-6 py-10 mx-auto">

              <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                  <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                      <span class="inline-block text-blue-500 dark:text-blue-400">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                          </svg>
                      </span>

                      <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Radi clientes</h1>

                      <p class="text-gray-500 dark:text-gray-300">
                        Para los amantes de su mascota, puedes registrar el perfil de tu mascota o adoptar una, salir a pasear con tu mascota y ayudar a las personas que perdieron una a encontrarla.
                      </p>

                      <a href="/clients" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                      </a>
                  </div>

                  <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                      <span class="inline-block text-blue-500 dark:text-blue-400">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                          </svg>
                      </span>

                      <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Radi Partners</h1>

                      <p class="text-gray-500 dark:text-gray-300">
                        Cualquier persona que brinde servicios a las mascotas desde veterinarios a lugares petfriendly, registrarte sin ningún costo, descubre todos los beneficios de registrar tu negocio con Radi Pets.
                      </p>

                      <a href="/partners" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                      </a>
                  </div>

                  <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                      <span class="inline-block text-blue-500 dark:text-blue-400">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                          </svg>
                      </span>

                      <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Radi Org</h1>

                      <!-- {/* Uno de los principales propósitos de esta plataforma, es motivar a la población a darle una segunda oportunidad a una mascota. */}
                      <p class="text-gray-500 dark:text-gray-300 py-3">
                        Si tienes o perteneces a un albergue o casa puente, puedes registrarte y administrar las mascotas que tienen en adopción.
                      </p>

                      <a href="/organizations" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
      </section>

  </div>
</div> -->

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5  md:flex-row flex-col items-center">

    <div class="md:px-20 lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font text-left sm:text-4xl text-3xl mb-4 font-bold text-gray-900">Una plataforma para los amantes de las mascotas.</h1>
      <p class="mb-8 text-left text-2xl font-medium">
        Crea el perfil de tu mascota gratis, encuentra lugares pet friendly, adopta a una mascota o apoya a los albergues, todo en un solo lugar.
      </p>

        @auth
        @else
        <div class="flex lg:flex-row md:flex-col">
            <a href="/login" class="bg-purple-800 text-white inline-flex py-3 px-5 rounded-lg items-center hover:bg-purple-700 focus:outline-none">

              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="title-font font-medium">Iniciar sesión </span>
              </span>
            </a>
            <a href="/register" class="bg-green-600 text-white inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-green-700 focus:outline-none">

              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="title-font font-medium">Registrarse</span>
              </span>
            </a>
          </div>
        @endauth

    </div>

    <div class="w-full">
      <img class="" alt="hero" src="{{asset('img/landing.png')}}">
    </div>
  </div>

</section>

{{--
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid row-gap-8 sm:grid-cols-3">
      <div class="text-center">
        <h6 class="text-5xl font-bold text-deep-purple-accent-400">+300</h6>
        <p class="font-bold">Lugares pet friendly</p>
      </div>
      <div class="text-center">
        <h6 class="text-5xl font-bold text-deep-purple-accent-400">3</h6>
        <p class="font-bold">Mascotas Encontradas</p>
      </div>

      <div class="text-center">
        <h6 class="text-5xl font-bold text-deep-purple-accent-400">4</h6>
        <p class="font-bold">Albergues</p>
      </div>
    </div>
  </div> --}}

<section class="grid grid-cols-1 gap-0   bg-opacity-25 md:grid-cols-2">
  <div class="flex flex-col items-start justify-center px-4 py-24 lg:px-20">
    <h1 class="mb-6 text-4xl font-bold leading-tight text-blue-900 md:text-4xl lg:text-5xl">Descubre lugares Pet Friendly</h1>
    <p class="pr-0 mb-4 text-xl text-blue-800 tracking-relaxed lg:pr-16">Explora los destinos pet friendly cercanos y disfruta junto a tu mejor amigo de experiencias inolvidables.</p>
    <a href="/results" class="py-4 px-6 w-full text-center bg-green-800 mt-2 text-white rounded-md">Ver lugares</a>
    <a href="/pet-friendly-owners" class="py-4 px-2 text-purple-800 font-bold">Registrar lugar</a>

  </div>
  <div>
    <img
      src="https://radi-images.s3.us-west-1.amazonaws.com/radi-places.webp"
      alt="restaurant"
      class="lazyload object-cover mt-10 w-full h-64 bg-gray-100 md:h-full"
      loading="lazy"
    />
  </div>
</section>

<section class="px-4 py-24 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
      <h1 class="ml-6 mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
        Guarda la información de tu <span class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">mascota</span> en un solo lugar
      </h1>


      <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
        <!-- <a class="bg-purple-800 p-4 text-white inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" href="#">
          Comprar
        </a> -->
      </div>

      <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
        <a target="_blank" class=" inline-flex items-center rounded-md justify-center w-full mb-2 btn bg-purple-800 text-white py-4 px-6 btn-lg sm:w-auto sm:mb-0" href="https://checkout.stripe.com/c/pay/cs_live_b15EWeo3GObck2QJJfT2lGIQ9ozuoHroE9gMTwYS61dD81ZsY6v8Pqmvqf#fidkdWxOYHwnPyd1blppbHNgWjA0TnZEPHdHdTNwcnczdWp3dklgS308SVFsa2YwUGlJbGJJU2FkM3I3V1ZrXU9qaz13aUtKTU9OSVFxT0xUQFVmMFd2fTBsVXxxY0NtaUpTN3JwcUthX0BzNTVPM1x9anZdNCcpJ3VpbGtuQH11anZgYUxhJz8nMG5EZE0xZGhsZFZkM1ZEYVRXJyknd2BjYHd3YHdKd2xibGsnPydtcXF1PyoqNDcyKzUrNSs0Pz01NTUqJ3gl">
          Comprar

        </a>
        <a target="_blank" class="bg-gray-200 px-6 rounded-md py-4 inline-flex items-center justify-center w-full mb-2 btn btn-light btn-lg sm:w-auto sm:mb-0" href="/placas">
        Ver más

        </a>
      </div>
    </div>
    <div class="w-full mx-auto mt-20 text-center md:w-10/12">
      <div class="grid grid-cols-12 gap-2">
        <div class="col-span-12 md:col-span-4">
          <img src="https://radi-images.s3.us-west-1.amazonaws.com/radi-placa.jpeg" alt="radi image" class="ml-8 md:ml-0 mt-4 md:mt-0 w-72 h-96 rounded-lg shadow-2xl" />
        </div>
        <div class="col-span-12 md:col-span-4">
          <img src="https://radi-images.s3.us-west-1.amazonaws.com/Radi+placas+anuncio+(2).png" alt="radi image" class="ml-8 md:ml-0 mt-4 md:mt-0 object-cover  w-72 h-96 rounded-lg shadow-2xl" />
        </div>
        <div class="col-span-12 md:col-span-4">
          <img src="https://radi-images.s3.us-west-1.amazonaws.com/radi-placa-2.jpeg" alt="radi image" class="ml-8 md:ml-0 mt-4 md:mt-0 object-cover w-72 h-96 rounded-lg shadow-2xl" />
        </div>
      </div>
    </div>
  </section>




<div class="relative flex flex-col-reverse px-4 py-16 mx-auto lg:block lg:flex-col lg:py-32 xl:py-48 md:px-8 sm:max-w-xl md:max-w-full">
    <div class="z-0 flex justify-center h-full  overflow-hidden lg:pt-24 lg:pb-16 lg:pr-8 xl:pr-0   lg:absolute lg:justify-end lg:bottom-0 lg:left-0 lg:items-center">
      <img src="https://radi-images.s3.us-west-1.amazonaws.com/white+modern+minimalist+electronic+sale+facebook+cover+(1).png" class="object-cover object-right w-full h-auto lg:w-auto lg:h-full" alt="" />
    </div>
    <div class="relative flex justify-end max-w-xl mx-auto xl:pr-32 lg:max-w-screen-xl">
      <div class="mb-16 lg:pr-5 lg:max-w-lg lg:mb-0">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-green-900 uppercase rounded-full bg-teal-accent-400">
              Beta
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
           Mira las mascotas desaparecidas <br class="hidden md:block" />
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            ¡Sé el héroe de una mascota perdida! Con Radi Pets, puedes ayudar a otros a encontrar a sus queridos compañeros peludos. Uneté a esta comunidad hoy mismo y marca la diferencia.
          </p>
        </div>
        <form>

          <div class="flex items-center mt-4">
            <a
            href="/lost"
              type="submit"
              class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
            >
              Ver desaparecidos
          </a>
            {{-- <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Saber más</a> --}}
          </div>
        </form>
      </div>
    </div>
</div>




  <section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
        <div class="grid p-6 bg-gray-100 rounded place-content-center sm:p-8">
          <div class="max-w-md mx-auto text-center lg:text-left">
            <header>
              <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Albergues</h2>

              <p class="mt-4 text-gray-500">

¡Conoce nuestra iniciativa de apoyo a albergues! En Radi Pets queremos crear conciencia sobre los albergues y su importante labor en la comunidad. <br> Queremos destacar la importancia de estos refugios para las mascotas abandonadas.
              </p>
            </header>

            <a
            target="_blank"
              href="/org"
              class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-gray-900 border border-gray-900 rounded hover:shadow focus:outline-none focus:ring"
            >
              Ver más
            </a>
          </div>
        </div>

        <div class="lg:col-span-2 lg:py-8">
          <ul class="grid grid-cols-2 gap-4">
            @foreach($orgs as $org)
                <li>
                <a target="_blank" href="/org/{{$org->setHiddenId()}}" class="block group">
                    <img
                    src="{{$org->photo}}"
                    onerror="if (this.src != 'error.jpg') this.src = '{{asset('img/default.png')}}';"
                    alt="{{$org->title}}"
                    class="object-cover w-full rounded aspect-square"
                    />

                    <div class="mt-3">
                    <h3
                        class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                    >
                        {{$org->title}}
                    </h3>
                    </div>
                </a>
                </li>
            @endforeach
          </ul>
        </div>

      </div>
    </div>
  </section>

  <section class="text-white bg-gray-900">
    <div class="flex flex-col items-stretch justify-between px-4 py-20 mx-auto max-w-7xl lg:flex-row sm:items-center">
      <div>
        <h2 class="mb-1 text-xl font-semibold text-left sm:text-2xl sm:text-center lg:text-left">¿Listo para formar una alianza estratégica?</h2>
        <p class="mb-6 text-lg font-normal text-left text-gray-200 sm:text-xl lg:mb-0 sm:text-center lg:text-left">
            Si estás buscando oportunidades de crecimiento y colaboración, estás en el lugar adecuado.
          <br>  ¡Contáctanos ahora y comencemos a construir una alianza exitosa para las mascotas!</p>
      </div>
      <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
        <a href="/contact" class="w-full btn bg-white px-4 py-6 text-black btn-lg sm:w-auto">Contactanos</a>
        {{-- <a href="#" class="w-full btn btn-outline-light btn-lg sm:w-auto">Book a demo</a> --}}
      </div>
    </div>
  </section>


  <div class="md:px-20 my-10 mx-4">
      <h2 class="text-3xl">Preguntas Frecuentes</h2>
      <p class="my-4">¿Tienes más preguntas?  <br> Esperamos que esto responda cualquier pregunta que tenga sobre Radi Pets. Si no es así, puedes dejarnos tus dudas en nuestras redes sociales.</p>
      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a target="_blank" href="https://www.instagram.com/radipets/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a target="_blank" href="https://www.facebook.com/radipetsmx" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
      </div>
    </div>
  <div class="space-y-4 md:px-20">
    <details
      class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
      open
    >
      <summary class="flex cursor-pointer items-center justify-between gap-1.5">
        <h2 class="text-lg font-medium text-gray-900">
            ¿Qué es Radi Pets?
        </h2>

        <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd"
            />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Radi Pets es una plataforma gratuita diseñada para ayudar a los dueños de mascotas a encontrar lugares "pet friendly" en las principales ciudades de México. Además, en nuestra plataforma, puedes apoyar albergues locales y conocer a las mascotas que están en adopción en tu área.
      </p>
    </details>

    <details
    class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
  >
    <summary class="flex cursor-pointer items-center justify-between gap-1.5">
      <h2 class="text-lg font-medium text-gray-900">
        ¿Cómo puedo encontrar lugares pet friendly en Radi Pets?
      </h2>

      <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
            clip-rule="evenodd"
          />
        </svg>
      </span>
    </summary>

    <p class="mt-4 leading-relaxed text-gray-700">
        Es fácil encontrar lugares pet friendly en Radi Pets. Simplemente ingresa la ubicación que deseas explorar y selecciona las opciones que te interesan, como hoteles, restaurantes, lugares publicos, entre otros.
    </p>
  </details>
  <details
  class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
>
  <summary class="flex cursor-pointer items-center justify-between gap-1.5">
    <h2 class="text-lg font-medium text-gray-900">
        ¿Cómo puedo apoyar a los albergues en Radi Pets?
    </h2>

    <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
          clip-rule="evenodd"
        />
      </svg>
    </span>
  </summary>

  <p class="mt-4 leading-relaxed text-gray-700">
    Puedes apoyar a los albergues de varias maneras en Radi Pets. Puedes donar directamente a los albergues en la plataforma, compartir su información y difundir su mensaje en las redes sociales. Además, puedes encontrar mascotas en adopción y considerar adoptar una mascota de uno de los albergues asociados en la plataforma.
  </p>
</details>
<details
class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
>
<summary class="flex cursor-pointer items-center justify-between gap-1.5">
  <h2 class="text-lg font-medium text-gray-900">
    ¿Es gratuita la plataforma de Radi Pets?
  </h2>

  <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45"
      viewBox="0 0 20 20"
      fill="currentColor"
    >
      <path
        fill-rule="evenodd"
        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
        clip-rule="evenodd"
      />
    </svg>
  </span>
</summary>

<p class="mt-4 leading-relaxed text-gray-700">
    Sí, Radi Pets es completamente gratuita. Nos esforzamos por hacer que nuestra plataforma sea accesible para todos los dueños de mascotas y albergues asociados.
</p>
</details>

<details
class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
>
<summary class="flex cursor-pointer items-center justify-between gap-1.5">
  <h2 class="text-lg font-medium text-gray-900">
    ¿Cómo puedo encontrar mascotas en adopción en Radi Pets?
  </h2>

  <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45"
      viewBox="0 0 20 20"
      fill="currentColor"
    >
      <path
        fill-rule="evenodd"
        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
        clip-rule="evenodd"
      />
    </svg>
  </span>
</summary>

<p class="mt-4 leading-relaxed text-gray-700">
    En Radi Pets, puedes encontrar perfiles de mascotas en adopción en tu área. Solo necesitas ingresar la ubicación y seleccionar la opción "adopción de mascotas" en nuestra plataforma. Desde allí, puedes ver fotos de las mascotas, conocer su historia y ponerte en contacto con el albergue correspondiente para obtener más información.
</p>
</details>
    <details
      class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
    >
      <summary class="flex cursor-pointer items-center justify-between gap-1.5">
        <h2 class="text-lg font-medium text-gray-900">
            ¿Cómo puedo contactar a Radi Pets?
        </h2>

        <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd"
            />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Si tienes alguna pregunta o comentario, puedes ponerte en contacto con nosotros a través de nuestras redes sociales. También te invitamos a seguirnos en las redes sociales y ser parte de la comunidad Radi Pets.
      </p>
    </details>
  </div>


<div class="max-w-screen-xl mx-auto mt-20 py-20">
   <h2 class="text-center mb-8 font-bold text-2xl text-gray-600">Nuestros aliados</h2>
  <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
      <!-- <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
          <svg class="h-12 text-gray-500 fill-current dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 266 100"><path fill="none" d="M0 0h266v100H0z"></path><path d="M140.021 49.597c-1.784 0-3.07.585-4.374 1.181v13.486c1.249.119 1.965.119 3.15.119 4.282 0 4.869-1.961 4.869-4.699v-6.441c0-2.022-.671-3.646-3.645-3.646zm-28.438-.736c-2.971 0-3.649 1.631-3.649 3.651v1.135h7.294v-1.135c0-2.02-.678-3.651-3.645-3.651zm-55.09 14.037c0 1.598.754 2.428 2.418 2.428 1.785 0 2.842-.582 4.145-1.18v-3.199h-3.903c-1.848 0-2.66.344-2.66 1.951zm111.191-13.301c-2.976 0-4.007 1.624-4.007 3.646v7.379c0 2.027 1.031 3.656 4.007 3.656 2.968 0 4.007-1.629 4.007-3.656v-7.379c-.001-2.022-1.04-3.646-4.007-3.646zM41.909 71.172h-8.748V49.998H28.79v-7.296h4.372V38.32c0-5.953 2.467-9.492 9.479-9.492h5.838v7.298H44.83c-2.73 0-2.91 1.02-2.91 2.923l-.011 3.652h6.61l-.773 7.296h-5.837v21.175zm29.897.055h-7.291l-.315-1.844c-3.329 1.844-6.3 2.143-8.26 2.143-5.347 0-8.193-3.572-8.193-8.512 0-5.828 3.321-7.908 9.262-7.908h6.047v-1.26c0-2.975-.341-3.848-4.916-3.848h-7.48l.731-7.296h8.176c10.038 0 12.239 3.171 12.239 11.203v17.322zm24.793-20.694c-4.537-.778-5.84-.949-8.023-.949-3.921 0-5.106.865-5.106 4.195v6.299c0 3.33 1.185 4.199 5.106 4.199 2.183 0 3.486-.174 8.023-.955v7.117c-3.974.891-6.563 1.125-8.751 1.125-9.392 0-13.125-4.939-13.125-12.074v-5.111c0-7.141 3.733-12.089 13.125-12.089 2.188 0 4.777.235 8.751 1.13v7.113zm27.376 8.957h-16.042v.588c0 3.33 1.186 4.199 5.106 4.199 3.524 0 5.675-.174 10.204-.955v7.117c-4.368.891-6.644 1.125-10.929 1.125-9.393 0-13.128-4.939-13.128-12.074v-5.844c0-6.243 2.771-11.356 12.396-11.356s12.393 5.054 12.393 11.356v5.844zm28.437.135c0 6.896-1.971 11.926-13.911 11.926-4.312 0-6.841-.379-11.6-1.111V31.02l8.745-1.459V43.35c1.89-.702 4.336-1.059 6.562-1.059 8.746 0 10.203 3.921 10.203 10.222v7.112zm28.033.15c0 5.949-2.456 11.719-12.732 11.719-10.281 0-12.783-5.77-12.783-11.719v-5.744c0-5.952 2.502-11.723 12.783-11.723 10.276 0 12.732 5.771 12.732 11.723v5.744zm28.014 0c0 5.949-2.459 11.719-12.733 11.719-10.281 0-12.783-5.77-12.783-11.719v-5.744c0-5.952 2.502-11.723 12.783-11.723 10.274 0 12.733 5.771 12.733 11.723v5.744zm28.749 11.397h-9.479l-8.017-13.383v13.383h-8.748V31.019l8.748-1.459v25.849l8.017-12.707h9.479l-8.752 13.867 8.752 14.603zm-41.512-21.575c-2.971 0-4.002 1.624-4.002 3.646v7.379c0 2.027 1.031 3.656 4.002 3.656 2.967 0 4.017-1.629 4.017-3.656v-7.379c0-2.022-1.05-3.646-4.017-3.646zm46.505 16.581c1.473 0 2.646 1.201 2.646 2.701 0 1.523-1.174 2.711-2.657 2.711-1.476 0-2.673-1.188-2.673-2.711 0-1.5 1.197-2.701 2.673-2.701h.011zm-.011.42c-1.187 0-2.158 1.021-2.158 2.281 0 1.283.972 2.291 2.169 2.291 1.198.012 2.155-1.008 2.155-2.279s-.957-2.293-2.155-2.293h-.011zm-.503 3.853h-.48v-3.014c.252-.035.492-.07.852-.07.456 0 .754.096.937.227.177.133.272.336.272.623 0 .398-.262.637-.585.734v.023c.263.049.442.287.503.73.07.469.143.648.19.746h-.503c-.071-.098-.144-.373-.204-.77-.07-.383-.264-.527-.648-.527h-.333v1.298zm0-1.668h.348c.394 0 .729-.145.729-.518 0-.264-.19-.527-.729-.527-.157 0-.266.012-.348.023v1.022z"></path></svg>
      </div> -->

       <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
        <img  class="lazyload h-16 text-gray-500 fill-current dark:text-gray-300" src="https://i.ibb.co/rZ7CW3N/retozapopan-removebg-preview.png" alt="">
      </div>

      <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
        <img class="lazyload h-10 mt-2 text-gray-500 fill-current dark:text-gray-300"  src="https://pages.awscloud.com/rs/112-TZM-766/images/SU%20Programs%402x.png" alt="">
        <!-- <svg class="h-8 mt-2 text-gray-500 fill-current dark:text-gray-300" viewBox="0 0 398 120" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M247.292 94.106C224.124 111.016 190.526 120 161.608 120c-40.544 0-77.046-14.822-104.673-39.476-2.164-1.936-.235-4.583 2.369-3.082 29.806 17.15 66.66 27.475 104.731 27.475 25.677 0 53.906-5.271 79.884-16.163 3.923-1.646 7.21 2.545 3.373 5.352"></path><path d="M256.533 82.534c-2.965-3.771-19.551-1.787-27.003-.897-2.254.277-2.605-1.692-.57-3.122 13.233-9.265 34.922-6.587 37.447-3.487 2.54 3.13-.666 24.802-13.073 35.147-1.91 1.59-3.718.744-2.877-1.357 2.782-6.952 9.04-22.505 6.076-26.284zM230.05 13.058V4.063c.015-1.378 1.04-2.29 2.291-2.283l40.493-.007c1.295 0 2.335.94 2.335 2.268v7.726c-.015 1.29-1.113 2.983-3.053 5.668l-20.97 29.843c7.78-.182 16.022.985 23.093 4.939 1.596.897 2.027 2.217 2.152 3.516v9.607c0 1.32-1.457 2.86-2.987 2.057-12.458-6.507-29-7.214-42.776.08-1.405.745-2.884-.765-2.884-2.086v-9.133c0-1.459.03-3.961 1.508-6.186l24.302-34.738h-21.162c-1.295 0-2.327-.927-2.342-2.276zM82.354 69.294H70.042c-1.171-.08-2.108-.956-2.203-2.072l.014-63.006c0-1.262 1.062-2.268 2.38-2.268L81.71 1.94c1.2.059 2.159.963 2.232 2.116v8.221h.234C87.163 4.326 92.8.613 100.39.613c7.708 0 12.539 3.713 15.98 11.664C119.361 4.326 126.14.613 133.393.613c5.175 0 10.804 2.123 14.251 6.893 3.916 5.311 3.111 12.993 3.111 19.755l-.015 39.764c0 1.255-1.061 2.262-2.379 2.262h-12.304c-1.23-.08-2.203-1.05-2.203-2.262l-.007-33.41c0-2.648.234-9.28-.344-11.796-.923-4.246-3.675-5.435-7.24-5.435-2.986 0-6.09 1.985-7.356 5.165-1.266 3.188-1.15 8.484-1.15 12.066v33.403c0 1.255-1.06 2.262-2.378 2.262h-12.297c-1.237-.08-2.21-1.051-2.21-2.262l-.015-33.41c0-7.025 1.142-17.362-7.59-17.362-8.858 0-8.506 10.074-8.506 17.362l-.007 33.403c-.022 1.276-1.084 2.283-2.401 2.283zm227.788-55.82c-9.084 0-9.662 12.328-9.662 20.017s-.117 24.131 9.545 24.131c9.545 0 10.006-13.262 10.006-21.345 0-5.303-.234-11.664-1.845-16.705-1.383-4.377-4.143-6.098-8.044-6.098zM310.025.613c18.284 0 28.173 15.647 28.173 35.533 0 19.222-10.92 34.468-28.173 34.468-17.933 0-27.712-15.647-27.712-35.132C282.305 15.86 292.2.612 310.025.612zm51.882 68.681h-12.275c-1.23-.08-2.211-1.05-2.211-2.261l-.015-63.028c.103-1.16 1.12-2.057 2.365-2.057l11.426-.008c1.076.059 1.961.788 2.188 1.766v9.636h.234c3.448-8.622 8.279-12.73 16.785-12.73 5.519 0 10.92 1.992 14.375 7.427C398 13.072 398 21.556 398 27.662v39.64c-.14 1.117-1.142 1.985-2.364 1.985h-12.349c-1.141-.073-2.064-.912-2.188-1.984V33.097c0-6.894.805-16.968-7.708-16.968-2.993 0-5.753 1.984-7.13 5.033-1.72 3.845-1.953 7.69-1.953 11.935v33.928c-.03 1.262-1.091 2.27-2.401 2.27zm-151.715-.16c-.813.73-1.991.78-2.913.284-4.092-3.385-4.824-4.953-7.064-8.177-6.756 6.864-11.543 8.921-20.305 8.921-10.372 0-18.438-6.376-18.438-19.134 0-9.965 5.424-16.742 13.139-20.061 6.683-2.925 16.023-3.458 23.167-4.253v-1.598c0-2.925.234-6.375-1.5-8.9-1.501-2.26-4.378-3.195-6.918-3.195-4.692 0-8.871 2.4-9.904 7.375-.212 1.11-1.024 2.204-2.137 2.262l-11.938-1.291c-1.01-.234-2.13-1.029-1.838-2.568C166.288 4.362 179.37 0 191.087 0c5.995 0 13.827 1.59 18.556 6.113 5.995 5.58 5.416 13.021 5.416 21.126v19.127c0 5.756 2.401 8.28 4.648 11.373.79 1.116.967 2.444-.036 3.26-2.518 2.102-6.983 5.968-9.443 8.15l-.036-.015zm-12.414-29.931v-2.656c-8.908 0-18.322 1.897-18.322 12.35 0 5.319 2.767 8.908 7.488 8.908 3.455 0 6.566-2.123 8.528-5.58 2.423-4.254 2.306-8.237 2.306-13.022zM48.72 69.133c-.813.73-1.991.781-2.913.285-4.092-3.385-4.824-4.953-7.064-8.177-6.763 6.864-11.55 8.921-20.305 8.921C8.06 70.162 0 63.786 0 51.028c0-9.965 5.417-16.742 13.139-20.061 6.683-2.925 16.015-3.458 23.16-4.253v-1.598c0-2.925.233-6.375-1.501-8.9-1.5-2.26-4.377-3.195-6.91-3.195-4.7 0-8.879 2.4-9.904 7.375-.212 1.11-1.024 2.204-2.137 2.262L3.91 21.367c-1.01-.234-2.13-1.029-1.845-2.568C4.81 4.362 17.89.007 29.615.007c5.995 0 13.827 1.59 18.556 6.113 5.995 5.581 5.416 13.022 5.416 21.126v19.128c0 5.755 2.401 8.28 4.648 11.372.79 1.116.967 2.444-.036 3.261-2.518 2.101-6.99 5.967-9.45 8.148l-.03-.021zm-12.422-29.93v-2.656c-8.908 0-18.32 1.897-18.32 12.35 0 5.319 2.766 8.908 7.487 8.908 3.462 0 6.573-2.123 8.528-5.58 2.422-4.254 2.305-8.237 2.305-13.022z"></path></g></svg> -->
      </div>

       <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
         <img class="lazyload h-16 mt-1 text-gray-500 fill-current dark:text-gray-300" src="https://santamarinasteta.mx/wp-content/uploads/2020/10/s-sLogo.png" alt="">
      </div>

       <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
        <img  class="lazyload h-16 text-gray-500 fill-current dark:text-gray-300" src="https://53.fs1.hubspotusercontent-na1.net/hubfs/53/web-color-startups-leftaligned.png" alt="">
      </div>
  </div>
</div>


@include('layouts.footer')


  <!-- <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">

          <span class="relative">Con cada</span>
        </span>
        compra, ayudas a que más mascotas encuentren un nuevo Hogar.
      </h2>

    </div>
    <div class="mx-auto lg:max-w-2xl">
      <div class="relative w-full transition-shadow duration-300 hover:shadow-xl">
        <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="https://i.ibb.co/16rz6br/animals-1.jpg" alt="" />
      </div>
    </div>
  </div> -->

<!--
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
      <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5" >
        <div class="max-w-xl mb-6" >
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              ¡Pruebalo ya!
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
            Todo lo que necesitas para el cuidado de tu <span class="inline-block text-purple-400"> mascota</span><br class="hidden md:block" />
            en una
            <span class="inline-block text-purple-400"> app</span>
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            Descarga la app y descubre todo lo asombroso que puede hacer para tu mascota.         </p>
          </div>
        <!-- <div class="flex items-center space-x-3">
          <!-- <a href="/" class="w-32 transition duration-300 hover:shadow-lg">
            <img src="https://kitwind.io/assets/kometa/app-store.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
          </a> --
          <a href="https://play.google.com/store/apps/details?id=pet.radi.radi" class="w-32 transition duration-300 hover:shadow-lg">
            <img src="https://kitwind.io/assets/kometa/google-play.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
          </a>
        </div> --
      </div>
      <div class="flex items-center justify-center lg:w-1/2">
        <div class="w-2/5">
          <img class="object-cover"  src="https://i.ibb.co/L6nbrdM/Captura-de-pantalla-2022-06-26-20-18-03-iphone13blue-portrait-removebg-preview.png" alt="" />
        </div>
        <div class="w-5/12 -ml-16 lg:-ml-32">
          <img class="object-cover"  src="https://i.ibb.co/YRXSbKP/Captura-de-pantalla-2022-06-26-20-24-58-iphone13blue-portrait-removebg-preview.png" alt="" />
        </div>
      </div>
    </div>
</div> -->


    <!-- <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

        <div class="grid gap-5 row-gap-10 lg:grid-cols-2">
        <div>
            <img class="object-cover w-full h-56 rounded-lg shadow-lg sm:h-96" src="https://images.pexels.com/photos/1378849/pexels-photo-1378849.jpeg?auhref=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
          </div>
          <div class="flex flex-col justify-center">
            <div class="max-w-xl mb-6">
              <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Sé el mejor cuidador de tu mascota.
                <span class="relative px-1">
                  <div class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-teal-accent-400"></div>
                  <span class="relative inline-block text-deep-purple-accent-400"></span>
                </span>
              </h2>
              <p class="text-base text-gray-700 md:text-lg">
              Esté preparado para ser el mejor cuidador de su mascota. Teniendo los cuidados adecuados y sabiendo cuál es la responsabilidad de cada mascota.
          <br/> <br/>
          Quieres que tu mascota sea feliz y saludable, ¿verdad? Entonces averigua cómo podemos mejorar la vida de su mascota juntos.     </p>
            </div>
            <p class="mb-4 text-sm font-bold tracking-widest uppercase">Beneficios</p>
            <div class="grid space-y-3 sm:gap-2 sm:grid-cols-2 sm:space-y-0">
              <ul class="space-y-3">
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                 Perfil personalizado de las mascotas.
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Recordatorios de medicamentos y de visitas al médico.
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Podrás reportar a tu mascota perdida en caso de extravío.
                </li>
              </ul>
              <ul class="space-y-3">
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Todo el historial de tu mascota en un click.
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Descuentos en tus reservaciones.
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  En caso de una emergencia médica, podrás encontrar a tu veterinario más cercano.                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="mx-auto sm:text-center lg:max-w-2xl">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
              <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Próximamente
              </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
              <span class="relative inline-block">

              </span>
              Apoyo a las organizaciones         </h2>
            <p class="text-base text-gray-700 md:text-lg">
            Apoya a las organizaciones y albergues que ayudan a las mascotas

            </p>
          </div>
          <div class="mb-4 transition-shadow duration-300 hover:shadow-xl lg:mb-6">
            <img
              class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96"
              src="https://images.pexels.com/photos/7474467/pexels-photo-7474467.jpeg?auhref=compress&cs=tinysrgb&dpr=2&h=650&w=940"
              alt=""
            />
          </div>
          <p class="max-w-xl mb-4 text-base text-gray-700 sm:mx-auto">
            Podrás agradecerle a las personas detrás de todas esas organizaciones, así como también podrás donar, adoptar, compartir las mascotas que tienen en albergues de toda la plataforma.
                    </p>
          <a
            href="/organizations"
            class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800"
          >
            Leer más
            <svg
              class="inline-block w-3 ml-2"
              fill="currentColor"
              viewBox="0 0 12 12"
            >
              <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z" />
            </svg>
          </a>
        </div>
      </div> -->


