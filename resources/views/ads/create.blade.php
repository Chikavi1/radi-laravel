@include('layouts.nav')


<div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-screen-lg ">
      <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Publicidad en Radi Pets</h1>

      {{-- <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti
        inventore quaerat mollitia?
      </p> --}}

      <form action="#" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        <p class="text-center text-lg font-medium">Crea tu campaña publicitaria</p>
        <p>Titulo</p>
        <div>
          <div class="relative">
            <input
              type="text"
              required
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              placeholder="Titulo de la campaña"
            />
          </div>
        </div>

        <p>Link del anuncio</p>
          <div class="relative">
            <input
              type="url"
              required
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              placeholder="CTA"
            />
          </div>

          <p>Fecha de finalización del anuncio</p>
        <div>
            <label for="password" class="sr-only"></label>

            <div class="relative">
              <input
                type="date"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="Dias de la campaña"
              />


            </div>
        </div>

        <p>Categorias</p>
        <div>
            <div class="relative">
              <input
                type="password"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="Enter password"
              />

            </div>
        </div>

        <p>Ubicación</p>

        <label for="radiusSlider">Radio del Círculo:</label>

        <input type="range" id="radiusSlider" min="1000" max="20000" step="1000" value="100">

        <div id="map" style="height: 400px;"></div>


        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
          Crear anuncio
        </button>

      </form>
    </div>
  </div>



  <script>
    var map = L.map('map').setView([51.505, -0.09], 13); // Set map center and zoom level

    // Adding a base map
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
    }).addTo(map);

    // Creating a marker with initial position
    var marker = L.marker([51.505, -0.09], { draggable: true }).addTo(map);

    // Creating a circle indicating range
    var circle = L.circle([51.505, -0.09], {
      color: 'blue',
      fillColor: 'blue',
      fillOpacity: 0.2,
      radius: 2000 // Specify radius in meters
    }).addTo(map);

    // Function to update marker position, circle position, and get latitude and longitude
    function updateMarkerAndCirclePosition(e) {
      var newPosition = e.target.getLatLng();
      marker.setLatLng(newPosition);
      circle.setLatLng(newPosition);
      document.getElementById('lat').innerHTML = newPosition.lat.toFixed(6);
      document.getElementById('lng').innerHTML = newPosition.lng.toFixed(6);
    }

    document.getElementById('radiusSlider').addEventListener('input', function(e) {
    var newRadius = parseInt(e.target.value);
    circle.setRadius(newRadius);
  });

    // Event listener for marker movement
    marker.on('drag', updateMarkerAndCirclePosition);

    // Initial call to update marker position, circle position, and display latitude and longitude
    updateMarkerAndCirclePosition({ target: marker });

  </script>

<p>Latitud: <span id="lat"></span></p>
<p>Longitud: <span id="lng"></span></p>

