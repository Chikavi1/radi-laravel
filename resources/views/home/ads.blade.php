@include('layouts.nav')

<div class="mb-16">
    <div class="bg-gray-100">
      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              NUEVO
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            Atrae clientes con los anuncios de Radi Pets
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            ¡Atrae clientes con los anuncios de Radi Pets! <b>Desde 20 MXN</b> al día, llega a más amantes de las mascotas y haz crecer tu negocio.          </p>
        </div>
        <div class="flex items-center sm:justify-center">
          <button
            type="submit"
            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-green-900 transition duration-200 rounded shadow-md  focus:shadow-outline focus:outline-none"
          >
            Empezar ahora
          </button>
        </div>
      </div>
    </div>
    <div class="relative px-4 sm:px-0">
      <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
      <div class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
        <div class="inline-block p-8 text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full ">
            <i class="text-3xl w-10 h-10 text-deep-purple-accent-400 fa-solid fa-earth-americas"></i>
            {{-- <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg> --}}
          </div>
          <p class="font-bold tracking-wide text-gray-800">Mercado Amplio</p>
        </div>
        <div class="inline-block p-8 text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full ">
            {{-- <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg> --}}
            <i class="text-3xl w-10 h-10 text-deep-purple-accent-400 fa-solid fa-hand-holding-dollar"></i>
          </div>
          <p class="font-bold tracking-wide text-gray-800">Ahorra dinero</p>
        </div>
        <div class="inline-block p-8 text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full ">
            <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <p class="font-bold tracking-wide text-gray-800">Rápido</p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-green-300">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
        <div class="flex flex-col mb-16 sm:text-center sm:mb-0">

          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-black sm:text-4xl md:mx-auto">
             ¿Qué es Radi Ads?
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Radi Ads ofrece una solución publicitaria integrada en Radi Running, diseñada para aumentar la visibilidad de tus productos o servicios ante personas amantes de las mascotas.</p>
          </div>
          <div>
            <a
              href="/"
              class="inline-flex items-center justify-center h-12 px-6 font-semibold tracking-wide text-gray-900 transition duration-200 rounded shadow-md hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-deep-purple-accent-100 focus:shadow-outline focus:outline-none"
            >
             Comienza anunciar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="grid grid-cols-1 gap-20 px-4 py-24 mx-auto max-w-7xl lg:px-16 xl:px-24 md:grid-cols-2 lg:grid-cols-3">
    <div>
      <i class="text-5xl fa-solid  fa-arrow-trend-up w-12 h-12 mb-4 text-purple-700"></i>
      <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">Acceso a un mercado en auge</h3>
      <p class="text-base leading-relaxed text-gray-600">
        Radi Pets se encuentra en un mercado en crecimiento constante, con un aumento en la demanda de productos y servicios para mascotas. Al publicitar en Radi Ads, tendrás la oportunidad de llegar a una audiencia comprometida y en constante expansión, lo que puede traducirse en un mayor alcance y más oportunidades de negocio.      </p>
    </div>
    <div>
      <i class="text-5xl fa-solid fa-location-crosshairs w-12 h-12 mb-4 text-purple-700"></i>
      <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">Segmentación precisa</h3>
      <p class="text-base leading-relaxed text-gray-600">
        Radi Ads te permite dirigir tus anuncios a audiencias específicas dentro de la comunidad de Radi Pets. Con opciones de segmentación avanzada, como la ubicación geográfica, el comportamiento de compra y los intereses de los usuarios, puedes asegurarte de que tus anuncios lleguen a las personas adecuadas en el momento adecuado, aumentando así la efectividad de tus campañas publicitarias.
      </p>
    </div>
    <div>
      <i class="text-5xl fa-solid fa-eye w-12 h-12 mb-4 text-purple-700"></i>
      <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">Mayor visibilidad y reconocimiento de marca</h3>
      <p class="text-base leading-relaxed text-gray-600">
        Publicitar en Radi Ads te ofrece la oportunidad de aumentar la visibilidad de tu marca y sobresalir entre la competencia. Al colocar anuncios estratégicamente en la plataforma de Radi Pets, puedes llegar de manera efectiva a tu audiencia objetivo, lo que puede resultar en un mayor reconocimiento de marca y una mayor confianza por parte de los clientes potenciales.
      </p>
    </div>
  </section>


  <section class="px-4 py-24 mx-auto max-w-7xl">
    <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div>
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Haz que tu Negocio destaque en Radi Ads</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
          Ya sea que tengas una clínica veterinaria, vendas productos o servicios para mascotas, o simplemente tu público objetivo son los amantes de los animales, Radi Ads es el lugar ideal para anunciarte. ¡No importa si tu negocio está directamente relacionado con las mascotas o no, aquí tienes la oportunidad de llegar a tu audiencia objetivo y destacarte en el mercado!
        </p>
      </div>
      <img src="https://i.ibb.co/SsSrZqM/CARNAL-PULPO.png" alt="image ad">
    </div>
    <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div class="order-none md:order-2">
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Decide cuanto gastar</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
          En Radi Ads, tú tienes el poder de decidir cuánto gastar y por cuánto tiempo se mostrarán tus anuncios.
        </p>
      </div>
     <img src="https://images.ctfassets.net/h67z7i6sbjau/2YHPS3vBSfmCzdBbNajnS0/9ca76cd90eff08afd99d6e38874ae8dd/set-your-budget_ES_2x.png?fm=webp&q=85" alt="">
    </div>
  </section>


  <section class="text-white bg-gray-900">
    <div class="flex flex-col items-stretch justify-between px-4 py-20 mx-auto max-w-7xl lg:flex-row sm:items-center">
      <div>
        <h2 class="mb-1 text-xl font-semibold text-left sm:text-2xl sm:text-center lg:text-left">Invierte en tu negocio hoy mismo        </h2>
        <p class="mb-6 text-lg font-normal text-left text-gray-200 sm:text-xl lg:mb-0 sm:text-center lg:text-left">Aprovecha los precios y Llega a tu Audiencia con esta nueva Opción</p>
      </div>
      <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
        <a href="#" class="w-full px-2 py-4 bg-white text-black rounded-lg btn-lg sm:w-auto">Comenzar ahora</a>
      </div>
    </div>
  </section>

