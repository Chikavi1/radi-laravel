@include('layouts.nav')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<section class="px-4 py-24 mx-auto max-w-7xl">
  <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
    <h1 class="ml-6 mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
      Guarda la información de tu <span class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">mascota</span> en un solo lugar
    </h1>

    <div class="text-center">
        <p class="text-sm" data-aos="fade-left" >Precio</p>
        <h2 class="text-4xl font-bold text-green-800">$389 MXN</h2>
        <p class="mb-8">Incluye envio en México</p>
        <a target="_blank" href="https://buy.stripe.com/5kAaH4amiaSa6SAdQR" class="w-full shadow-xl btn btn-primary bg-purple-800 px-8 py-4 text-white rounded-md btn-lg sm:w-auto">Comprar</a>
      </div>
    <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
      <!-- <a class="bg-purple-800 p-4 text-white inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" href="#">
        Comprar
      </a> -->
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

<section class="text-white bg-gray-900">
    <div class="flex flex-col items-stretch justify-between px-4 py-20 mx-auto max-w-7xl lg:flex-row sm:items-center">
      <div>
        <h2 class="mb-1 text-xl font-semibold text-left sm:text-2xl sm:text-center lg:text-left">Únete como distribuidor en placas de Radi Pets.</h2>
        <p class="mb-6 text-lg font-normal text-left text-gray-200 sm:text-xl lg:mb-0 sm:text-center lg:text-left">
          Únete como distribuidor y aprovecha los descuentos exclusivos <br> al comprar al por mayor las placas de Radi Pets. <br><br> Protege a las mascotas con estilo mientras haces crecer tu negocio. <br> ¡No pierdas esta oportunidad única!</p>
      </div>
      <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
        <a href="/contact" class="w-full btn bg-white px-4 py-6 text-center rounded-md text-black btn-lg sm:w-auto">Contactanos</a>
        {{-- <a href="#" class="w-full btn btn-outline-light btn-lg sm:w-auto">Book a demo</a> --}}
      </div>
    </div>
  </section>

<section class="px-4 py-20 mx-auto max-w-7xl lg:px-12" >
    <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-y-10 lg:gap-y-32 gap-x-10 lg:gap-x-24">
      <div>
        <h2 class="mb-3 text-3xl font-extrabold leading-tight tracking-tight text-center text-black sm:text-left md:text-4xl">Beneficios de la placa</h2>
        <p class="mb-6 text-lg text-center text-gray-600 sm:text-left md:text-xl">Conoce los beneficios de tener una placa de Radi Pets para sacarle el mayor provecho a la placa.</p>
        <div class="flex items-start">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700"><b>Identificación rápida y fácil:</b>  Si tu mascota se pierde, una placa de identificación con QR y NFC permite a cualquier persona que la encuentre identificar rápidamente a su mascota y ponerse en contacto con usted para devolverla a casa.</p>
        </div>
        <div class="flex items-start mt-4">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700"><b>Recibe notificaciones:</b>  Si tu mascota se llegara a perder, cuando alguien la escanee te llegara una notificación a tu teléfono.</p>
        </div>
        <div class="flex items-start mt-4">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700"><b>Fácil de actualizar:</b> Si necesita actualizar cualquier información en la placa de identificación, puede hacerlo fácilmente sin tener que reemplazar la placa en sí. Puede simplemente actualizar la información en línea y la información se actualizará automáticamente en la placa.</p>
        </div>
      </div>
      <div class="flex flex-col flex-grow space-y-5">
        <div class="flex items-start">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700"><b> Acceso a información importante:</b> Puede ingresar información sobre su mascota, como su nombre, dirección,información médica y cualquier otro dato que desee compartir.</p>
        </div>

        <!-- <div class="flex items-start">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700">Descuentos en establecimientos.</p>
        </div> -->



        <div class="flex items-start">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700"><b>Durabilidad:</b>  Las placas de identificación con QR y NFC están diseñadas para ser duraderas y resistentes a los elementos y a la actividad diaria de su mascota. </p>
        </div>
        <div class="flex items-start">
          <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 mt-1 mr-2 text-primary">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
          <p class="text-lg text-gray-700"><b>Ahorra tiempo:</b> Al proporcionar una forma fácil y rápida de identificar a su mascota, una placa de identificación con QR y NFC puede ahorrarle tiempo, dinero y preocupaciones al buscar a su mascota perdida.
      </div>

      </div>
    </div>
</section>

<section class="px-4 py-24 mx-auto max-w-7xl md:px-32">
    <div class="grid items-center w-full grid-cols-1 gap-0 mx-auto lg:grid-cols-11 lg:gap-24 xl:w-11/12">

      <div class="col-auto text-center md:col-span-5 lg:text-left">
        <h2 class="mb-3 text-3xl font-extrabold leading-tight tracking-tight text-center text-black sm:text-left md:text-4xl">¿Cómo funciona?</h2>
        <p class="mb-6 text-lg text-left text-gray-600 md:text-xl">Ingresa a nuestra app para registrar la información de tu mascota. <br> Después de enlazar la placa con el perfil de tu mascota, toda la información será mostrada a las personas que escanee la placa con el código QR. <br> La información podrás modificarla cuando tú desees. </p>

      </div>

      <div class="col-auto md:col-span-6" data-aos="zoom-out-down"
        data-aos-easing="linear"
        data-aos-duration="1500">
              <img src="https://radi-images.s3.us-west-1.amazonaws.com/radi-perfil.png" class="p-4" alt="">
        <!-- <img src="https://radi-images.s3.us-west-1.amazonaws.com/tag-radi.png" class="p-4" alt=""> -->
      </div>
    </div>
  </section>



<div class="m-4 container" data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1500">
  <section class="px-4 py-32 mx-auto max-w-7xl">
    <div class="w-full mx-auto lg:w-8/12 xl:w-5/12">
      <p class="mb-2 text-xs font-semibold tracking-wide text-gray-400 uppercase">Fácil y Rápido, Menos de 4 minutos</p>
      <h1 class="mb-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl">Descarga la app</h1>
      <p class="mb-5 text-base text-gray-500 md:text-lg">
        Con nuestra app, podrás mantener el historial clínico y la información de tu mascota en un solo lado, siempre seguro. Además, conocer lugares pet friendly cerca de ti y planificar paseos divertidos y seguros para tu mascota.
      <br>  ¡Descarga la app hoy y haz que tus salidas con tus mascotas sean una aventura!
        <!-- <p>Proximamente</p> -->
      <div class="get-app flex space-x-5 mt-10 justify-center md:justify-start">
        <a href="https://apps.apple.com/us/app/radi/id1637462305">
            <div class="apple bg-white shadow-md px-3 py-2 rounded-lg flex items-center space-x-4">
                <div class="logo">
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        width="419.955" height="512"
                        viewBox="0 0 419.955 512">
                        <g transform="translate(-46.022)">
                            <path d="M185.255,512c-76.2-.439-139.233-155.991-139.233-235.21,0-129.4,97.075-157.734,134.487-157.734,16.86,0,34.863,6.621,50.742,12.48,11.1,4.087,22.588,8.306,28.975,8.306,3.823,0,12.832-3.589,20.786-6.738,16.963-6.753,38.071-15.146,62.651-15.146h.146c18.354,0,74,4.028,107.461,54.272l7.837,11.777-11.279,8.511c-16.113,12.158-45.513,34.336-45.513,78.267,0,52.031,33.3,72.041,49.292,81.665,7.061,4.248,14.37,8.628,14.37,18.208,0,6.255-49.922,140.566-122.417,140.566-17.739,0-30.278-5.332-41.338-10.034-11.191-4.761-20.845-8.862-36.8-8.862-8.086,0-18.311,3.823-29.136,7.881C221.5,505.73,204.752,512,185.753,512Z"/><path d="M351.343,0c1.888,68.076-46.8,115.3-95.425,112.342C247.9,58.015,304.54,0,351.343,0Z"/>
                        </g>
                    </svg>
                </div>
                <div class="text">
                    <p class=" text-xs text-gray-600">Descargar en</p>
                    <p class=" text-xs font-semibold text-gray-900">Apple Store</p>
                </div>
            </div>
        </a>
        <a href='https://play.google.com/store/apps/details?id=pet.radi.radi' target="_blank" class="google bg-white shadow-md px-3 py-2 rounded-lg flex items-center space-x-4">
            <div class="image">
                <svg
                    class="w-6 h-6"
                    xmlns="http://www.w3.org/2000/svg"
                    width="436.057" height="469.847"
                    viewBox="0 0 436.057 469.847">
                    <g transform="translate(-16.896)">
                        <path d="M270.336,234.965,34.39,462.165A40.146,40.146,0,0,1,16.9,428.672V41.258A40.146,40.146,0,0,1,34.39,7.765Z" fill="#2196f3"/><path d="M352.9,155.6l-82.56,79.36L34.39,7.765a31.446,31.446,0,0,1,2.773-1.92A40.363,40.363,0,0,1,77.91,5.2Z" fill="#4caf50"/><path d="M452.95,234.965a40.791,40.791,0,0,1-21.333,36.267L352.9,314.325l-82.56-79.36L352.9,155.6l78.72,43.093A40.791,40.791,0,0,1,452.95,234.965Z" fill="#ffc107"/><path d="M352.9,314.325,77.91,464.725a40.9,40.9,0,0,1-40.747-.64,31.44,31.44,0,0,1-2.773-1.92l235.947-227.2Z" fill="#f44336"/>
                    </g>
                </svg>
            </div>
            <div class="text">
                <p class="text-xs text-gray-600" >Descarga Radi</p>
                <p class="text-xs font-semibold text-gray-900">Google play</p>
            </div>
        </a>
    </div>
    </div>
  </section>

  <div class="text-center mx-auto">
    <h2 class="mb-3 text-3xl font-extrabold leading-tight tracking-tight text-black md:text-4xl text-center">¿Como enlazar la placa con el perfil de mi mascota?</h2>

  </div>



<div class="md:px-24">
  <div data-aos="fade-right"
    data-aos-easing="linear"
    data-aos-duration="1500" class="lg:mt-24 relative flex flex-col py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="flex flex-col items-start w-full max-w-xl px-4 mx-auto lg:px-8 lg:max-w-screen-xl">
      <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Paso 1
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
            Regístrate o ingresa a tu cuenta
          </h2>
            <p class="text-base text-gray-700 md:text-lg">
            Una vez descargada la aplicación, ingresa a tu cuenta o regístrate, es fácil y totalmente gratis.
            </p>
        </div>

      </div>
    </div>
    <div class="inset-y-0 right-0 w-full max-w-xl px-4 mx-auto lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img
        class="object-cover w-full rounded lg:rounded-none lg:shadow-none sm:h-96 lg:h-full"
        src="https://i.ibb.co/GdM1Dfg/tutorial-placas-1.png"
        alt=""
      />
    </div>
  </div>

  <div data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1500"  class="lg:mt-24  relative flex flex-col py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="flex flex-col items-start w-full max-w-xl px-4 mx-auto lg:px-8 lg:max-w-screen-xl">
      <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Paso 2
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          Agrega el perfil de tu mascota
          </h2>
            <p class="text-base text-gray-700 md:text-lg">
              En el menú de <b>Mi cuenta</b> podrás ver la sección de mascotas y ahí podrás agregar más perfiles o ver el de una mascota en específico.
              Dirige al perfil de la mascota que quieras sincronizar con la placa.
            </p>
        </div>

      </div>
    </div>
    <div class="inset-y-0 right-0 w-full max-w-xl px-4 mx-auto lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img
        class="object-cover w-full rounded lg:rounded-none lg:shadow-none sm:h-96 lg:h-full"
        src="https://i.ibb.co/BK0BT0t/tutorial-placas-2.png"
        alt=""
      />
    </div>
  </div>


  <div data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1500" class="lg:mt-24 relative flex flex-col py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="flex flex-col items-start w-full max-w-xl px-4 mx-auto lg:px-8 lg:max-w-screen-xl">
      <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Paso 3
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        Ve al perfil de tu mascota
          </h2>
            <p class="text-base text-gray-700 md:text-lg">
              Haz clic en el botón que se encuentra en tu esquina inferior derecha y se mostrara el siguiente menú, selecciona la opción de <b>Ver Identificador.</b>
            </p>
        </div>

      </div>
    </div>
    <div class="inset-y-0 right-0 w-full max-w-xl px-4 mx-auto lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img
        class="object-cover w-full rounded lg:rounded-none lg:shadow-none sm:h-96 lg:h-full"
        src="https://i.ibb.co/pvdW6y6/tutorial-placas.png"
        alt="step 3"
      />
    </div>
  </div>

  <div data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1500" class="lg:mt-24 relative flex flex-col py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="flex flex-col items-start w-full max-w-xl px-4 mx-auto lg:px-8 lg:max-w-screen-xl">
      <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Paso 4
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Sincroniza la cuenta de tu mascota con la placa</h2>
            <p class="text-base text-gray-700 md:text-lg">
              Una vez dado clic en <b>ver identificador</b>, das clic en emparejar, se abrirá tu cámara y lo único que tendrás que hacer es escanear el código QR que está en la placa, si la placa no ha sido sincronizada con otra cuenta se mostrará un mensaje de verificado.          </p>
        </div>

      </div>
    </div>
    <div class="inset-y-0 right-0 w-full max-w-xl px-4 mx-auto lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img
        class="object-cover w-full rounded lg:rounded-none lg:shadow-none  lg:h-full"
        src="https://i.ibb.co/2Mpg1Q7/tutorial-placas.png"
        alt="step 4"
      />
    </div>
  </div>

  <div  data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1500" class="lg:mt-24 relative flex flex-col py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="flex flex-col items-start w-full max-w-xl px-4 mx-auto lg:px-8 lg:max-w-screen-xl">
      <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
          Paso Final
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
              Listo, se ha sincronizado el perfil y la placa        </h2>
            <p class="text-base text-gray-700 md:text-lg">
              Se ha sincronizado el perfil exitosamente, gracias por utilizar la app de Radi.
            </p>
        </div>

      </div>
    </div>
    <div class="inset-y-0 right-0 w-full max-w-xl px-4 mx-auto lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img
        class="object-cover w-full rounded lg:rounded-none lg:shadow-none sm:h-96 lg:h-full"
        src="https://i.ibb.co/7rHcdvM/tutorial-placas-1.png"
        alt="finish"
      />
    </div>
  </div>

  <div class=" py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between lg:flex-row">
      <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              Video
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          Ve nuestro tutorial
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            Si tienes alguna duda o recomendación, puedes contactarnos.
          </p>
        </div>
        <div class="flex flex-col items-center md:flex-row">
          <a
            href="
            https://wa.link/bk0q7i"
            class="inline-flex items-center justify-center w-full h-12 px-6 mb-3 font-medium tracking-wide text-black transition duration-200 rounded shadow-md md:w-auto md:mr-4 md:mb-0 bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            <span class="mr-3">Contactanos</span>

          </a>
        </div>
      </div>
      <div class="relative w-full lg:w-1/2">
        <iframe class="w-full bg-black" height="300" src="https://www.youtube.com/embed/CcJVA6suGpc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
  </div>
</div>

</div>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
  </script>

@include('layouts.footer')
