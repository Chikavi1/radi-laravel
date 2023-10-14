

@include('layouts.nav')
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between lg:flex-row">
      <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Nuevo
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
            Únete al programa de afiliados de Radi Pets hoy
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            Gana dinero desde casa recomendando placas de identificación de mascotas con tecnología QR. Ayuda a proteger a las mascotas y genera ingresos adicionales promocionando esta solución innovadora.
        </p>
        </div>
        <div class="flex flex-col items-center md:flex-row">
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 mb-3 font-medium tracking-wide  transition duration-200 rounded shadow-md md:w-auto md:mr-4 md:mb-0 bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            <span class="mr-3">Registrate gratis</span>
            <svg width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4">
              <polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="4,4 22,4 19,14 4,14 "></polyline>
              <circle cx="4" cy="22" r="2" stroke-linejoin="miter" stroke-linecap="square" stroke="none" fill="currentColor"></circle>
              <circle cx="20" cy="22" r="2" stroke-linejoin="miter" stroke-linecap="square" stroke="none" fill="currentColor"></circle>
              <polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="1,1 4,4 4,14 2,18 23,18 "></polyline>
            </svg>
          </a>
        </div>
      </div>
      <div class="relative lg:w-1/2">
        <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://images.unsplash.com/photo-1543269866-487350d6fa5e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="" />
        <a href="/" aria-label="Play Video" class="absolute inset-0 flex items-center justify-center w-full h-full transition-colors duration-300 bg-gray-900 bg-opacity-50 group hover:bg-opacity-25">
          <div class="flex items-center justify-center w-16 h-16 transition duration-300 transform bg-gray-100 rounded-full shadow-2xl group-hover:scale-110">
            <svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z"
              ></path>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>



  <div class="grid grid-cols-12 gap-4 p-6 mb-12">
    <div class="col-span-12 md:col-span-4">
            <div class="hover:-translate-y-1 hover:scale-150 duration-500 relative w-full p-4 overflow-hidden bg-black shadow-lg rounded-2xl">
                <img alt="moto" src="https://i.ibb.co/XxVtwBL/Post-facebook-venta-de-producto-comercial-moderno-gris-2.png" class="rounded-xl w-full  mb-4 -right-20 -bottom-8"/>
                <div class="w-4/6">
                    <p class="mb-2 text-lg font-medium text-white">
                        Garantia de Radi Pets
                    </p>
                    <p class="text-xs text-gray-400">
                        En Radi Pets, respaldamos nuestros productos con una garantía sólida de 1 mes. Estamos comprometidos a brindar el mejor servicio a nuestros clientes.
                </div>
            </div>

    </div>
    <div class="col-span-12 md:col-span-4">
            <div class="hover:-translate-y-1 hover:scale-150  duration-500 relative w-full p-4 overflow-hidden bg-white shadow-lg rounded-2xl">
                <img alt="moto" src="https://i.ibb.co/qD4RCZR/Post-facebook-venta-de-producto-comercial-moderno-gris-1.png" class="rounded-xl w-full object-cover  mb-4 -right-20 -bottom-8"/>
                <div class="w-full">
                    <p class="mb-2 text-lg font-medium text-gray-800">
                       Seguridad en tu información
                    </p>
                    <p class="text-xs w-full text-gray-700">
                        Priorizamos la privacidad de nuestros usuarios. Seguimos altos estándares de seguridad de datos y nunca compartimos tu información de contacto la cual solo se comparte cuando alguien escanea el QR de tu mascota desaparecida.                    </p>

                </div>
            </div>

    </div>
    <div class="col-span-12 md:col-span-4">
            <div style="background:#0348ac" class="hover:-translate-y-1 hover:scale-150   duration-500 relative w-full p-4 overflow-hiddeshadow-lg rounded-2xl">
                <img alt="moto" src="https://i.ibb.co/GkS0mhF/Post-facebook-venta-de-producto-comercial-moderno-gris-3.png" class="rounded-xl   h-42 mb-4 -right-20 -bottom-8"/>
                <div class="w-4/6">
                    <p class="mb-2 text-lg font-medium text-white">
                        Diseño Único e Incomparable
                    </p>
                    <p class="text-xs text-gray-400">
                        Las placas de Radi Pets destacan por su diseño único, marcando la diferencia frente a las placas tradicionales y ofreciendo beneficios exclusivos en el mercado.
                    </p>
                </div>
            </div>
    </div>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col mb-6 lg:flex-row md:mb-10">
      <div class="lg:w-1/2">
        <h2 class="max-w-md mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none xl:max-w-lg">
          The quick, brown fox jumps over a lazy dog
        </h2>
      </div>
      <div class="lg:w-1/2">
        <p class="text-base text-gray-700 md:text-lg">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae. Sed ut unde omnis iste natus.
        </p>
      </div>
    </div>
    <div class="grid gap-8 row-gap-10 sm:grid-cols-2 lg:grid-cols-4">
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">The deep ocean</h6>
        <p class="mb-3 text-sm text-gray-900">
          A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I didn't even know we were calling him Big Bear.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">When has justice</h6>
        <p class="mb-3 text-sm text-gray-900">
          Rough pomfret lemon shark plownose chimaera southern sandfish kokanee northern sea robin Antarctic cod.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">Organically grow</h6>
        <p class="mb-3 text-sm text-gray-900">
          A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">A slice of heaven</h6>
        <p class="mb-3 text-sm text-gray-900">
          Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
  </div>


  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
          <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Brand new
          </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          <span class="relative inline-block">
            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
              <defs>
                <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135" height=".30">
                  <circle cx="1" cy="1" r=".7"></circle>
                </pattern>
              </defs>
              <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24"></rect>
            </svg>
            <span class="relative">The</span>
          </span>
          quick, brown fox jumps over a lazy dog
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
        </p>
      </div>
    </div>
    <div class="max-w-screen-xl sm:mx-auto">
      <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2">
        <div class="space-y-8">
          <div>
            <p class="mb-4 text-xl font-medium">
              The quick, brown fox jumps over a lazy dog?
            </p>
            <p class="text-gray-700">
              Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds.<br />
              <br />
              Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
              The first mate and his Skipper too will do?
            </p>
            <p class="text-gray-700">
              Well, the way they make shows is, they make one show. That show's called a pilot.<br />
              <br />
              Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs.Some don't, become nothing. She
              starred in one of the ones that became nothing.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">Is the Space Pope reptilian!?</p>
            <p class="text-gray-700">
              A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I didn't even know we were calling him Big Bear.
            </p>
          </div>
        </div>
        <div class="space-y-8">
          <div>
            <p class="mb-4 text-xl font-medium">How much money you got on you?</p>
            <p class="text-gray-700">
              The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest.<br />
              <br />
              Michael Knight a young loner on a crusade to champion the cause of the innocent. The helpless. The powerless in a world of criminals who operate above the law. Here he comes Here comes Speed Racer. He's a demon on wheels.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
              Galaxies Orion's sword globular star cluster?
            </p>
            <p class="text-gray-700">
              A business big enough that it could be listed on the NASDAQ goes belly up. Disappears!<br />
              <br />
              It ceases to exist without me. No, you clearly don't know who you're talking to, so let me clue you in.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
              When has justice ever been as simple as a rule book?
            </p>
            <p class="text-gray-700">
              This is not about revenge. This is about justice. A lot of things can change in twelve years, Admiral. Well, that's certainly good to know. About four years. I got tired of hearing how young I looked.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
