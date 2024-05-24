@include('layouts.nav')

<h2></h2>
<section
  class="relative text-white bg-cover bg-center bg-no-repeat"
    style="background-image:
    url('https://images.pexels.com/photos/5745275/pexels-photo-5745275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"
  >
  <div
    class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
  ></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
  >
    <div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
        <p>Beta</p>
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Radi Running
      </h1>

      <p class="mt-4 text-xl max-w-lg sm:text-xl/relaxed">
        Registra los paseos de tu mascota gratis y ayuda a localizar mascotas extraviadas
      </p>

      <div class="mt-8 flex flex-wrap gap-4">


        <div class="flex items-center space-x-3">
            <a target="_blank" href="https://apps.apple.com/mx/app/radi-running/id1666452318" class="w-32 transition duration-300 hover:shadow-lg">
              <img src="https://kitwind.io/assets/kometa/app-store.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
            </a>
            <a target="_blank" href="https://play.google.com/store/apps/details?id=pet.radi.running" class="w-32 transition duration-300 hover:shadow-lg">
              <img src="https://kitwind.io/assets/kometa/google-play.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
            </a>
          </div>
      </div>
    </div>
  </div>
</section>


<section class="px-4 py-24 mx-auto max-w-7xl">
    <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div>
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Lleva un registro de los paseos con tu mascota.</h2>
        <p class="mb-5 text-base  text-gray-600  text-left md:text-lg">
            ¡Haz que cada paseo cuente! Registra tus aventuras con tu mascota y crea recuerdos inolvidables mientras exploran juntos. Con nuestra app, llevar un registro de tus paseos nunca ha sido tan simple.
        </p>
        <a href="#" class="w-full text-green-800 btn btn-dark btn-lg sm:w-auto font-bold">            ¡Únete hoy y comienza a compartir tus momentos con tu fiel amigo!
        </a>
      </div>
      <div class="w-full h-full md:py-12 ">
        <img class="rounded-xl" src="https://radi-images.s3.us-west-1.amazonaws.com/rr1.png" alt="">
      </div>
    </div>
    <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div class="order-none md:order-2">
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Todo cerca de ti.</h2>
        <p class="mb-5 text-base text-gray-600 text-left md:text-lg">
            Descubre un mundo de posibilidades para ti y tu mascota. Encuentra fácilmente lugares <b>pet-friendly</b>, localiza <b>mascotas extraviadas</b>  y entérate de <b>eventos</b> cercanos. Con nuestra plataforma, estarás siempre conectado con la comunidad amante de los animales. ¡Explora, ayuda y únete hoy mismo!
        </p>
      </div>
      <div class="w-full h-full py-12">
        <img  class="rounded-xl w-full"  src="https://radi-images.s3.us-west-1.amazonaws.com/rr2.png" alt="">
      </div>
    </div>
  </section>



<div class="mt-8 p-4 mx-auto w-full md:w-3/4 rounded-md md:h-80 grid grid-cols-12  " style="background:#f7f4ed;">
    <div class="col-span-12 md:col-span-4 md:mt-4">
        <img class="mx-auto w-44" src="https://radi-images.s3.us-west-1.amazonaws.com/rr3.png" alt="">
    </div>
    <div class="col-span-12 md:col-span-8 p-4">
        <p class="text-3xl font-bold md:mt-12">La comunidad que ayuda a encontrar a mascotas desaparecidas.</p>
        <p class="mb-6 text-xl mt-4">Mientras sales a pasear, ayuda a las personas a encontrar a sus mascotas con esta aplicación.</p>
        <div class="flex items-center space-x-3">
            <a target="_blank" href="https://apps.apple.com/mx/app/radi-running/id1666452318" class="w-32 transition duration-300 hover:shadow-lg">
              <img src="https://kitwind.io/assets/kometa/app-store.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
            </a>
            <a target="_blank" href="https://play.google.com/store/apps/details?id=pet.radi.running" class="w-32 transition duration-300 hover:shadow-lg">
              <img src="https://kitwind.io/assets/kometa/google-play.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
            </a>
          </div>
    </div>
</div>


<h2 class="text-center  mt-12 font-bold text-3xl">Radi Running Premium</h2>
<p class="text-center text-xl px-4">Conoce las ventajas de tener Radi Premium</p>
<section class="grid grid-cols-1 gap-20 px-4 py-24 mx-auto max-w-7xl lg:px-16 xl:px-24 md:grid-cols-2 lg:grid-cols-3">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12 mb-4 text-purple-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
        />
      </svg>
      <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">Sin Anuncios, Sin Interrupciones</h3>
      <p class="text-base leading-relaxed text-gray-600">
        Con Radi Pets Premium, olvídate de los molestos anuncios que interrumpen tus paseos. Disfruta de una experiencia fluida y sin distracciones, concentrándote en lo que realmente importa: el tiempo de calidad con tu mascota.
      </p>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12 mb-4 text-purple-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"
        />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
      </svg>
      <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">Mantén Tu Racha</h3>
      <p class="text-base leading-relaxed text-gray-600">
        ¿Te encanta seguir una rutina de paseos con tu mascota? Con Radi Pets Premium, nunca perderás tu ritmo. La aplicación te ayuda a mantener una racha constante de paseos, motivándote a mantenerte activo y comprometido con el bienestar de tu peludo amigo.
      </p>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12 mb-4 text-purple-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
        />
      </svg>
      <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">Registro de Varias Mascotas</h3>
      <p class="text-base leading-relaxed text-gray-600">
        ¿Tienes más de una mascota para pasear? No hay problema. Radi Pets Premium te permite mantener un registro detallado de múltiples mascotas, facilitando la gestión de las necesidades individuales de cada una.
      </p>
    </div>
  </section>



  <div id="download" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
      <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
             Radi Pets
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
            Descarga Radi Pets Running
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            ¡Descarga nuestra app ahora mismo y comienza a disfrutar de todos los paseos con tu mascota!          </p>
        </div>
        <div class="flex items-center space-x-3">
          <a target="_blank" href="https://apps.apple.com/mx/app/radi-running/id1666452318" class="w-32 transition duration-300 hover:shadow-lg">
            <img src="https://kitwind.io/assets/kometa/app-store.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
          </a>
          <a target="_blank" href="https://play.google.com/store/apps/details?id=pet.radi.running" class="w-32 transition duration-300 hover:shadow-lg">
            <img src="https://kitwind.io/assets/kometa/google-play.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
          </a>
        </div>
      </div>
      <div class="flex items-center justify-center w-full">
        <div class="w-2/5">
          <img class="object-cover" src="https://radi-images.s3.us-west-1.amazonaws.com/rr5.png" alt="" />
        </div>
        <div class="w-5/12 -ml-16 lg:-ml-32">
          <img class="object-cover" src="https://radi-images.s3.us-west-1.amazonaws.com/rr4.png" alt="" />
        </div>
      </div>
    </div>
  </div>


<footer class="flex flex-col items-center justify-between px-4 py-2 mx-auto max-w-7xl md:flex-row">
    <h2 class="text-4xl font-bold p-4">Síguenos las huella</h2> <br>

    <div class="flex items-center space-x-6">

      <a href="https://www.instagram.com/radipets">
        <span class="sr-only">Instagram</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 2500" width="2500" height="2500" class="w-5 h-5" aria-hidden="true">
          <defs>
            <radialGradient id="0" cx="332.14" cy="2511.81" r="3263.54" gradientUnits="userSpaceOnUse">
              <stop offset=".09" stop-color="#fa8f21" />
              <stop offset=".78" stop-color="#d82d7e" />
            </radialGradient>
            <radialGradient id="1" cx="1516.14" cy="2623.81" r="2572.12" gradientUnits="userSpaceOnUse">
              <stop offset=".64" stop-color="#8c3aaa" stop-opacity="0" />
              <stop offset="1" stop-color="#8c3aaa" />
            </radialGradient>
          </defs>
          <path
            d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
            fill="url(#0)"
          />
          <path
            d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
            fill="url(#1)"
          />
        </svg>
      </a>
      <a href="https://facebook.com/radipetsmx">
        <span class="sr-only">Facebook</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="1298" height="2500" viewBox="88.428 12.828 107.543 207.085" class="w-5 h-5" aria-hidden="true">
          <path
            d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z"
            fill="#3c5a9a"
          />
        </svg>
      </a>
    </div>
</footer>

<p  class="md:ml-40 p-4">No te pierdas de nuestras actualizaciones, comparte tus paseos con #radirunning para compartir tus aventuras con tu mascota.</p>
  <div class="mt-8 grid grid-cols-12 gap-3  items-center justify-between px-4 mx-auto max-w-7xl md:flex-row">
    <div class="col-span-12 md:col-span-4">
        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
            <img
              alt=""
              src="https://images.pexels.com/photos/9956245/pexels-photo-9956245.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
              class="absolute inset-0 h-full w-full object-cover"
            />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
              <div class="p-4 sm:p-6">

                <a href="#">
                  <h3 class="mt-0.5 text-lg text-white">@Karen</h3>
                </a>

              </div>
            </div>
          </article>
    </div>
    <div class="col-span-12 md:col-span-4">
        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
            <img
              alt=""
              src="https://images.pexels.com/photos/38632/dog-race-fun-animal-38632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="absolute inset-0 h-full w-full object-cover"
            />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
              <div class="p-4 sm:p-6">

                <a href="#">
                  <h3 class="mt-0.5 text-lg text-white">@Valeria</h3>
                </a>

              </div>
            </div>
          </article>
    </div>
    <div class="col-span-12 md:col-span-4">
        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">


            <img
              alt=""
              src="https://images.pexels.com/photos/7210590/pexels-photo-7210590.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="absolute inset-0 h-full w-full object-cover"
            />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
              <div class="p-4 sm:p-6">

                <a href="#">
                  <h3 class="mt-0.5 text-lg text-white">@nicoleAvila</h3>
                </a>


              </div>
            </div>
          </article>
    </div>
</div>


<div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
      <div class="sm:col-span-2">
        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
          <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Radi Running</span>
        </a>
        <div class="mt-6 lg:max-w-sm">
          <p class="text-sm text-gray-800">
            ¡Disfruta tus paseos con tu mascota usando Radi Running!
                    </p>

        </div>
      </div>
      <div class="space-y-2 text-sm">
        <p class="text-base font-bold tracking-wide text-gray-900">Enlaces</p>
        <div class="flex">
          <a href="/download">
           Clientes
          </a>
        </div>
        <div class="flex">
          <a href="/business">
            Negocios
          </a>
        </div>
        <div class="flex">
         <a href="affiliate-program">
         Gana dinero
         </a>
        </div>
      </div>
      <div>
        <span class="text-base font-bold tracking-wide text-gray-900">Redes Sociales</span>
        <div class="flex items-center mt-1 space-x-3">

          <a href="https://facebook.com/radipetsmx" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
              <circle cx="15" cy="15" r="4"></circle>
              <path
                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
              ></path>
            </svg>
          </a>
          <a href="https://www.instagram.com/radipets" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
              <path
                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
              ></path>
            </svg>
          </a>
        </div>
        <p class="mt-4 text-sm text-gray-500">
          ¡Sigue nuestras huellas! y mantente al tanto de todo lo que tenemos para ti.
        </p>
      </div>
    </div>
    <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
      <p class="text-sm text-gray-600">
        © Copyright 2024 Radi Mascotas S.A DE C.V.
      </p>

    </div>
  </div>
