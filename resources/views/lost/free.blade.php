@include('layouts.nav')

<section class="bg-white">
    <div class="lg:grid -mt-2 lg:min-h-screen lg:grid-cols-12">
      <section
        class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6"
      >
        <img
          alt="Night"
          src="https://images.unsplash.com/photo-1601758176175-45914394491c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
          class="absolute inset-0 h-full w-full object-cover opacity-80"
        />

        <div class="hidden lg:relative lg:block lg:p-12">
          <a class="block text-white" href="/">
            <span class="sr-only">Home</span>
            <img src="../img/logo-white.png" style="width: 3em;height:3em;" alt="">

          </a>

          <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
            Reporte de desaparición gratis
          </h2>

          <p class="mt-4 leading-relaxed text-white/90">
            Ayudamos a reunir a las familias con sus mascotas perdidas. ¡Obtén un reporte de desaparición gratis, solo por tiempo limitado!
          </p>
        </div>
      </section>

      <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
      >
        <div class="max-w-xl lg:max-w-3xl">
          <div class="relative -mt-16 block lg:hidden">
            <a
              class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-white text-blue-600 sm:h-20 sm:w-20"
              href="/"
            >
              <span class="sr-only">Home</span>
              <img src="../img/logo-blue.png" alt="">
            </a>

            <h1
              class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"
            >
            Reporte de desaparición gratis
            </h1>

            <p class="mt-4 leading-relaxed text-gray-500">
                Ayudamos a reunir a las familias con sus mascotas perdidas. ¡Obtén un reporte de desaparición gratis, solo por tiempo limitado!

            </p>
          </div>

          <form action="#" class="md:-mt-16 mt-6 grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label
                for="FirstName"
                class="block text-sm font-medium text-gray-700"
              >
                URL de la mascota
              </label>

              <input
                type="url"
                id="FirstName"
                name="first_name"
                placeholder="Ejemplo: https://radi.pet/pet/214904"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
            </div>
            <div class="col-span-6">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                  Correo electrónico
                </label>

                <input
                  type="email"
                  id="Email"
                  name="email"
                  placeholder="Correo electrónico del usuario de la mascota"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>
              <div class="col-span-6">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                  Fecha de desaparición
                </label>

                <input
                  type="date"
                  id="Email"
                  name="email"
                  placeholder="Correo electrónico del usuario de la mascota"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>
            <div class="col-span-6 sm:col-span-3">
              <label
                for="LastName"
                class="block text-sm font-medium text-gray-700"
              >
                Recompensa
              </label>

              <input
                type="number"
                id="LastName"
                name="last_name"
                placeholder="Ingresa la cantidad de recompensa"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
            </div>



            <div class="col-span-6 sm:col-span-3">
              <label
                for="Password"
                placeholder="Ingresa la descripción de como sucedieron los hechos y los "
                class="block text-sm font-medium text-gray-700"
              >
                Descripción de cómo se perdió
              </label>

              <textarea
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              ></textarea>

            </div>

            <div class="col-span-6 sm:col-span-3">
              <label
                for="PasswordConfirmation"
                class="block text-sm font-medium text-gray-700"
              >
                Ubicación
              </label>

              <div id="mapa" class="col-span-12 h-64 mt-2" style="z-index:0;border-radius:1em;min-height:10em; min-width:15em;">

              </div>

            </div>

            {{-- <div class="col-span-6">
              <label for="MarketingAccept" class="flex gap-4">
                <input
                  type="checkbox"
                  id="MarketingAccept"
                  name="marketing_accept"
                  class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm"
                />

                <span class="text-sm text-gray-700">
                  I want to receive emails about events, product updates and
                  company announcements.
                </span>
              </label>
            </div> --}}

            <div class="col-span-6">
              <p class="text-sm text-gray-500">
               Al enviar tu reporte, aceptas los
                <a href="/terms" target="_blank" class="text-gray-700 underline">
                  terminos y condiciones
                </a>
                y la
                <a href="/privacy" target="_blank" class="text-gray-700 underline">politica de privacidad</a>. Hay posibilidad de no ser gratis el reporte.
              </p>
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
              >
                Enviar Reporte
              </button>

              {{-- <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                Tienes alguna duda?
                <a href="#" class="text-gray-700 underline">Aquí</a>.
              </p> --}}
            </div>
          </form>
        </div>
      </main>
    </div>
  </section>



<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>



  <script>

    var latitude;
    var longitude;

    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };


    function success(pos) {
        const crd = pos.coords;
        console.log(crd);
        latitude  = crd.latitude;
        longitude = crd.longitude;
        $("#latitude").val(latitude);
        $("#longitude").val(longitude);

        var map = L.map('mapa').setView([latitude, longitude], 16);

L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
}).addTo(map);


var radiIcon = L.icon({
    iconUrl: '{{asset("img/target.png")}}',
    iconSize: [20, 20]
});

L.marker([latitude,longitude], {icon: radiIcon,draggable:true}).addTo(map)
.bindPopup('Aquí se perdió') .on('dragend', function(e) {
  $("#latitude").val(e.target._latlng.lat);
  $("#longitude").val(e.target._latlng.lng);
}).openPopup();

    }




    function error(err){

    }

    navigator.geolocation.getCurrentPosition(success, error, options);



  </script>


@include('layouts.footer')
