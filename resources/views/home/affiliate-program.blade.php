

@include('layouts.nav')

@auth
<div class="grid grid-cols-12 ">
    <div class="col-span-12 md:col-span-4 p-2 ">
        <div class="flex h-52  max-w-md overflow-hidden bg-white rounded-lg shadow-lg">

            <div class="w-full p-4">
                <h1 class="text-2xl font-bold text-gray-900">
                    Comparte este Link
                </h1>
                <p class="mt-2 text-sm text-gray-600" id="p1">
                    https://www.radi.pet/placas-buy?aid={{Auth::user()->setHiddenId()}}
                </p>

                <div class="flex justify-between mt-3 item-center">
                    <h1 class="text-xl font-bold text-gray-700">
                        Gana dinero con el código
                    </h1>
                    <button onclick="copyToClipboard('#p1')" class="px-3 py-2 text-xs font-bold text-white uppercase bg-gray-800 rounded">
                        Copiar
                    </button>
                </div>
                <p class="text-green-900 font-bold hidden" id="copy">
                    Se copio el texto!
                </p>
            </div>
        </div>

    </div>

    <div class="col-span-12 md:col-span-4 p-2">
        <div class="px-12 py-8 h-52  bg-white shadow-lg rounded-2xl dark:bg-gray-800">
            <div class="flex items-center">
                <span class="relative p-4 bg-purple-200 rounded-xl">
                    <svg width="40" fill="currentColor" height="40" class="absolute h-4 text-purple-500 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-black text-md dark:text-white">
                    Ganancias
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="my-8 text-5xl font-bold text-left text-gray-700 dark:text-gray-100">
                    $ {{$amount}}
                    <span class="text-sm">
                        MXN
                    </span>
                </p>

            </div>
        </div>
    </div>
    <div class="col-span-12 md:col-span-4 p-2">


<div class="relative h-52 w-full p-4 overflow-hidden bg-white shadow-lg rounded-xl md:w-72 dark:bg-gray-800">
    <a href="#" class="block  ">
        <div class="flex items-center w-full">
            <a href="#" class="relative block">
                <img alt="profil" src="https://i.ibb.co/K5QgHVj/Nombre-de-tu-mascota-4.png" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col items-center ml-2">
                <span class="dark:text-white">
                    Recompensa: Placa de identificación gratis
                </span>
            </div>

        </div>
        <div class="flex items-center justify-between my-2 mt-12">
            <p class="text-sm text-gray-300">
                {{$count}}/10 Para recibir una placa gratis
            </p>
            {{-- <p class="text-sm text-gray-300">
                {{$amount}}/10 Para recibir una placa gratis
            </p> --}}
        </div>
        <div class="w-full h-2 bg-blue-200 rounded-full">
            <div class="w-2/12 h-full text-xs text-center text-white bg-blue-600 rounded-full">
            </div>
        </div>
    </a>
</div>


    </div>
</div>


@else

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
            href="/register"
            style="background: #0D5E6C;"
            class="inline-flex items-center justify-center  text-white w-full h-12 px-6 mb-3 font-medium tracking-wide  transition duration-200 rounded shadow-md md:w-auto md:mr-4 md:mb-0 bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            <span class="mr-3">Registrate gratis</span>

          </a>
        </div>
      </div>
      <div class="relative lg:w-1/2">
        <img class="rounded-lg hidden lg:inline-block object-cover w-full h-56 shadow-lg sm:h-96" src="https://images.unsplash.com/photo-1543269866-487350d6fa5e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="" />

      </div>
    </div>
  </div>



  <div class="grid grid-cols-12 gap-4 p-6 mb-12">
    <div class="col-span-12 md:col-span-12 md:col-span-4">
            <div style="background: #0D5E6C;" class="hover:-translate-y-1 hover:scale-150 duration-500 relative w-full p-4 overflow-hiddenshadow-lg rounded-2xl">
                <img alt="moto" src="https://i.ibb.co/z715HdP/Post-facebook-venta-de-producto-comercial-moderno-gris-9.png" class="rounded-xl w-full  mb-4 -right-20 -bottom-8"/>
                <div class="w-full">
                    <p class="mb-2 text-lg font-medium text-white">
                        Comparte tu link
                    </p>
                    <p class="text-xs w-full text-gray-200">
                        Comparte tu enlace de compra con tu código, ¡y gana dinero sin esfuerzo! Las compras realizadas a través de tu enlace en las próximas 3 semanas te generarán ganancias. ¡Así de sencillo!
                </div>
            </div>

    </div>
    <div class="col-span-12 md:col-span-4">
            <div style="background: #CADBDF;" class="hover:-translate-y-1 hover:scale-150  duration-500 relative w-full p-4 overflow-hidden shadow-lg rounded-2xl">
                <img alt="moto" src="https://i.ibb.co/Fm89QrZ/Post-facebook-venta-de-producto-comercial-moderno-gris-10.png" class="rounded-xl w-full object-cover  mb-4 -right-20 -bottom-8"/>
                <div class="w-full">
                    <p class="mb-2 text-lg font-medium text-black">
                       Recibe premios
                    </p>
                    <p class="text-xs w-full text-gray-700">
                      Al inicio si vendes 2 placas te regalamos una con un valor de 289 MXN. Y eso no es todo: por cada 10 placas adicionales que vendas, también te obsequiamos una. Tienes la libertad de venderla y ganar más o quedártela como desees.

                </div>
            </div>

    </div>
    <div class="col-span-12 md:col-span-4">
            <div style="background:#000000" class="hover:-translate-y-1 hover:scale-150   duration-500 relative w-full p-4 overflow-hiddeshadow-lg rounded-2xl">
                <img alt="moto" src="https://i.ibb.co/pWYqzXh/Post-facebook-venta-de-producto-comercial-moderno-gris-11.png" class="rounded-xl   h-42 mb-4 -right-20 -bottom-8"/>
                <div class="w-full">
                    <p class="mb-2 text-lg font-medium text-white">
                        Sin inversiones ni riesgos
                    </p>
                    <p class="text-xs w-full text-gray-200">

                        Si eres estudiante o buscas ingresos extra, esta oportunidad es ideal para ti. No hay requisitos particulares, genera ingresos mientras colaboras en la identificación de mascotas y en la reducción de casos de desapariciones.                    </p>
                </div>
            </div>
    </div>
</div>


<div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col mb-6 lg:flex-row md:mb-10">
      <div class="lg:w-1/2">
        <h2 class="max-w-md mb-6 font-sans text-3xl  tracking-tight text-gray-900 sm:text-4xl sm:leading-none xl:max-w-lg">
           Gana <b>dinero desde casa </b> con las Placas de Identificación.
        </h2>
      </div>
      <div class="lg:w-1/2">
        <p class="text-base text-gray-700 md:text-lg">

¡Genera ingresos sin necesidad de inversión inicial desde la comodidad de tu hogar vendiendo nuestras placas de identificación de Radi Pets! Todo lo que requieres es una conexión a Internet y tu determinación para tener éxito.
        </p>
      </div>
    </div>
    <div class="grid gap-8 row-gap-10 sm:grid-cols-2 lg:grid-cols-4">
      <div class="max-w-md">

        <h6 class="mb-2 font-semibold leading-5">Ingresos Adicionales</h6>
        <p class="mb-3 text-sm text-gray-900">
            Genera ingresos adicionales al promover un producto en crecimiento que es esencial para el cuidado de mascotas.
        </p>
      </div>
      <div class="max-w-md">

        <h6 class="mb-2 font-semibold leading-5">Apoyo y Recursos</h6>
        <p class="mb-3 text-sm text-gray-900">
            Acceso a material promocional, capacitación y soporte de ventas para ayudarte a tener éxito en tu emprendimiento.
        </p>
      </div>
      <div class="max-w-md">

        <h6 class="mb-2 font-semibold leading-5">Programa de Incentivos</h6>
        <p class="mb-3 text-sm text-gray-900">
            Participa en programas de incentivos con recompensas especiales, como placas gratuitas y bonificaciones por el rendimiento.        </p>
      </div>
      <div class="max-w-md">

        <h6 class="mb-2 font-semibold leading-5">Flexibilidad</h6>
        <p class="mb-3 text-sm text-gray-900">
            Trabaja a tu propio ritmo y establece tu horario de trabajo, lo que te brinda la flexibilidad de adaptar tu negocio a tus necesidades.
        </p>
      </div>
    </div>
  </div>


  <div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
      <div class="max-w-xl  md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">

        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          <span class="relative inline-block">

            Resuelve tus Dudas
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Conoce las preguntas frecuentes sobre ser afiliado de las Placas de Radi Pets
        </p>
      </div>
    </div>
    <div class="max-w-screen-xl sm:mx-auto">
      <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2">
        <div class="space-y-8">
          <div>
            <p class="mb-4 text-xl font-medium">
              ¿Cuánto es la comisión?
            </p>
            <p class="text-gray-700">
                La comisión que obtienes al compartir el enlace y cuando alguien realiza una compra equivale al 10.5% del total de la venta.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">¿Cómo funciona?</p>
            <p class="text-gray-700">

El enlace de afiliados de Radi Pets es tu clave para ganar comisiones. Regístrate, obtén tu enlace único y compártelo. Cuando alguien compra a través de tu enlace, ganas dinero. ¡Así de sencillo!            </p>
          </div>

          <div>
            <p class="mb-4 text-xl font-medium">¿Cuánto tiempo va a durar el programa de afiliados?</p>
            <p class="text-gray-700">
                ¡No dejes escapar esta oportunidad única! Nuestro programa de afiliados estará disponible solo hasta el 30 de noviembre. Cada día que pasa es una oportunidad perdida para ganar dinero extra. Regístrate ahora y comienza a generar ingresos mientras compartes tu amor por las mascotas.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
              ¿Qué información necesito para registrarme?
              </p>
             <p class="text-gray-700">
                Para unirte al programa, simplemente completa el registro gratuito en la plataforma proporcionando tu nombre, dirección de correo electrónico y número de teléfono.            </p>
          </div>
        </div>
        <div class="space-y-8">
          <div>
            <p class="mb-4 text-xl font-medium">¿Existen restricciones geográficas para convertirse en afiliado de Radi Pets?</p>
            <p class="text-gray-700">
              Radi Pets está abierto a afiliados en toda la República Mexicana, lo que significa que cualquier persona que se encuentre en México puede unirse al programa de afiliados sin restricciones geográficas.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
                ¿Cuánto puedo ganar como afiliado de las placas de identificación de Radi Pets?
            </p>
            <p class="text-gray-700">
              Al inicio si vendes 2 placas te regalamos una con un valor de 289 MXN. Y eso no es todo: por cada 10 placas adicionales que vendas, también te obsequiamos una. Tienes la libertad de venderla y ganar más o quedártela como desees.
              <br>
              En resumen, si vendes tan solo 12 placas de Radi Pets, podrías ganar aproximadamente 938 MXN sin necesidad de invertir dinero inicial y sin la presión de horarios estrictos. ¡Una oportunidad emocionante para generar ingresos a tu ritmo!
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
                ¿Hay un límite en la cantidad de placas de identificación que puedo vender como afiliado?
            </p>
            <p class="text-gray-700">
              ¡No hay límite en la cantidad de placas de identificación que puedes vender como afiliado de Radi Pets! Al contrario, premiamos y valoramos a las personas que logran vender más.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>



@include('layouts.footer')
@endauth


<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim($(element).text())).select();
        document.execCommand("copy");
        $temp.remove();
        $("#copy").removeClass('hidden');

    }
</script>
