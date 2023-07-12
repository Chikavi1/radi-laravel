@include('layouts.nav')

<section>
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
      <div
        class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full"
      >
        <img
          alt="Party"
          src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
          class="absolute inset-0 h-full w-full object-cover"
        />
      </div>

      <div class="lg:py-24">
        <h2 class="text-3xl font-bold sm:text-4xl">
          Se parte de la comunidad
        </h2>


          <p class="mt-4 text-gray-600 text-xl">
          Si eres dueño de un restaurante o hotel que es amigable con las mascotas, ¡queremos que seas parte de nuestra comunidad! <br>
          <br>
          En Radi Pets, nos enorgullece ofrecer un espacio donde los dueños de mascotas pueden encontrar lugares que acogen a sus compañeros peludos.
          <br><br>
          Al ser parte de nuestra comunidad, tendrás la oportunidad de llegar a un público diverso y leal de clientes que buscan un ambiente amigable con las mascotas para disfrutar de una experiencia única.
        </p>

        <a
          target="_blank" href="/places-register"
          class="mt-8 inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
        >
          <span class="text-sm font-medium">Empezar </span>

          <svg
            class="ml-3 h-5 w-5"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="px-4 py-20 mx-auto max-w-7xl lg:px-12" >
  <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-y-10 lg:gap-y-32 gap-x-10 lg:gap-x-24">
    <div>
      <h2 class="mb-3 text-3xl font-extrabold leading-tight tracking-tight text-center text-black sm:text-left md:text-4xl">Requisitos para ser parte</h2>
      <p class="mb-6 text-lg text-center text-gray-600 sm:text-left md:text-xl">Conoce los requisitos para ser parte de Radi pets, por el momento recibimos solicitudes de restaurantes, hoteles, y lugares públicos.</p>
    </div>
    <div class="flex flex-col flex-grow space-y-5">
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Tu negocio debe de aparecer en Google Maps.</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Contar con teléfono.</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Contar con una imagen de la fachada del negocio.</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Cuenta de Facebook o Instagram (opcional).</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Descripción de tu negocio en menos de 250 caracteres.</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Tener tus horarios establecidos (Restaurantes).</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Agregar Menú en PDF (Restaurantes, opcional).</p>
      </div>
      <div class="flex items-start">
        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-lg text-gray-700">Agregar información sobre:</p>
      </div>
      <div class="flex items-start">
        <p class="text-lg text-gray-700 ml-8">Métodos de pago. (Restaurantes)</p>
      </div>
      <div class="flex items-start">
        <p class="text-lg text-gray-700 ml-8">Si cuentan con estacionamiento y wifi.</p>
      </div>
      <div class="flex items-start">
        <p class="text-lg text-gray-700 ml-8">Lugar acondicionado para personas con silla de ruedas. </p>
      </div>

      <div class="flex items-start">
        <p class="text-lg text-gray-700 ml-8">Público dirigido y temática (Restaurantes).</p>
      </div>

    </div>
  </div>
</section>



<section>
  <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
      <div class="bg-green-800 p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="mx-auto max-w-xl text-center">
          <h2 class="text-2xl font-bold text-white md:text-3xl">
            Además, el registro en Radi Pets es totalmente gratuito.
          </h2>

          <p class="hidden text-white/90  sm:block text-2xl mt-16">
            ¡Así es, no hay <b>costo</b> alguno para unirte a nuestra plataforma y comenzar a <b>conseguir</b>  más clientes!
          </p>

          <div class="mt-4 md:mt-8">
            <a
              target="_blank" href="/places-register"
              class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-blue-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
            >
              ¡Registrarme Gratis!
            </a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
        <img
          alt="dueña y perro"
          src="https://images.unsplash.com/photo-1525983360072-2ebda055ba40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
          class="h-40 w-full object-cover sm:h-56 md:h-full"
        />

        <img
          alt="dueña y perro"
          src="https://images.unsplash.com/photo-1548858806-e064cf9872c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHBldCUyMGZyaWVuZGx5fGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=500&q=60"
          class="h-40 w-full object-cover sm:h-56 md:h-full"
        />
      </div>
    </div>
  </div>
</section>

<section class="px-4 pt-20 pb-24 mx-auto max-w-7xl md:px-2 lg:px-16">
  <div class="grid grid-cols-1 gap-24 md:grid-cols-2">
    <div>
      <h1 class="mb-6 text-2xl font-light text-gray-900 md:text-3xl">Preguntas Frecuentes</h1>
      <p class="mt-10 mb-3 font-semibold text-gray-900">¿Cuál es el costo?</p>
      <p class="text-gray-600">
       Ninguno, el registro del perfil de tu negocio en Radi Pets es totalmente gratuito.
      </p>
      <p class="mt-10 mb-3 font-semibold text-gray-900">¿Por qué debería de usar Radi pets?</p>
      <p class="text-gray-600">
        Es una manera de ganar clientes y de promocionar tu negocio de forma gratuita.
      </p>
      <p class="mt-10 mb-3 font-semibold text-gray-900">¿De qué depende de que mi perfil sobresalga de otros?</p>
      <p class="text-gray-600">
        Depende de muchos factores, entre los cuales, las distancia del usuario y tu negocio, entre más información ingreses, más tiempo permanecen los usuarios y tienes mayor probabilidad de que te escojan, al igual, si más usuarios hacen reseñas de tu negocio, generas más seguridad y mayor probabilidad de que se decidan por tu negocio.
      </p>
    </div>
    <div>
      <p class="mt-10 mb-3 font-semibold text-gray-900">¿Dónde está disponible Radi Pets?</p>
      <p class="text-gray-600">
        Por el momento está disponible en México, en las principales ciudades se están registrando, en caso de que no haber cobertura de radi por tu ciudad puedes registrar en lista de espera y entre más restaurantes, hoteles o parques hayan registrado se dará prioridad para tener cobertura en cuanto antes.
      </p>
      <p class="mt-10 mb-3 font-semibold text-gray-900">¿Cómo puedo ayudar a Radi Pets?</p>
      <p class="text-gray-600">
       Puedes ayudarnos compartiendo a la mayor cantidad de personas la app o si gustas puedes hacer alguna de estas opciones:
        <br> <br>
       <a target="_blank"  href="/placas" class="font-bold text-purple-600">Comprar una placa</a> de identificación.
       <br>
          <!--  Ser <a target="_blank"  href="https://web.whatsapp.com/send/?phone=523317642715&text=Quiero%20ser%20distribuidor%20de%20placas" class="font-bold text-purple-600">distribuidor</a>  de placas.
        <br> -->
        <a target="_blank"  href="https://checkout.stripe.com/c/pay/cs_live_a10P1NuHY1PZV4sMskGmVKCia0UdTjSxdBzJlAphGPok3vPB5S4kfPNYT3#fidkdWxOYHwnPyd1blppbHNgWjA0TnZEPHdHdTNwcnczdWp3dklgS308SVFsa2YwUGlJbGJJU2FkM3I3V1ZrXU9qaz13aUtKTU9OSVFxT0xUQFVmMFd2fTBsVXxxY0NtaUpTN3JwcUthX0BzNTVPM1x9anZdNCcpJ3VpbGtuQH11anZgYUxhJz8nZks3MGhONUlMYTVsN0ZuYFBQJ3gl" class="font-bold text-purple-600">Apoyar</a> el desarrollo.
      </p>
     </div>
  </div>

</section>


<div class="px-6 py-6 mx-4 my-4 bg-green-700 rounded-lg dark:bg-green-800 md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
  <div class="xl:w-0 xl:flex-1">
      <h2 class="text-2xl font-extrabold leading-8 tracking-tight text-white sm:text-3xl sm:leading-9">
        No pierdas la oportunidad de destacarte entre la multitud </h2>
      <p class="max-w-3xl mt-3 text-lg leading-6 text-indigo-200">
        Y ser reconocido como un lugar amigable con las mascotas. Únete a Radi Pets hoy mismo y comienza a atraer a nuevos clientes que valoran la inclusión de sus mascotas en sus actividades diarias. ¡Te esperamos!            </p>
  </div>
  <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
      <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
          <a  href="/places-register" class="flex items-center justify-center w-full px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-500 border border-transparent rounded-md hover:bg-green-400 focus:outline-none focus:bg-green-400">
              Registrarme
          </a>
      </div>

  </div>
</div>

@include('layouts.footer')

