@include('layouts.nav')



    <div class="grid grid-cols-12">
        <div class="md:col-span-3"></div>
        <div class="col-span-12 md:col-span-6">
            <div class="h-72 md:rounded-md z-10" style="background: #452828">
                <div class="grid grid-cols-12">
                    <div class="col-span-4">
                        <img class="m-6 w-24 h-24 md:w-40 md:h-40 rounded-full mt-16 md:mt-2" src="https://i.ibb.co/VYFgGTs/313415142-528083012658977-8498527970720641866-n.png" alt="imagen">
                    </div>
                    <div class="col-span-8">
                        <h1 class="text-xl md:text-4xl text-white text-center mt-24 md:mt-16">La manada de leo</h1>
                    </div>
                </div>
            </div>
            <div class="-mt-16  shadow-md p-4 mx-4 md:mx-12 bg-white rounded-xl">

                <div class="inline-block mt-4">
                    <a href="/" class="text-2xl my-2"><i class="fa-brands fa-instagram"></i></a>
                    <a href="/" class="text-2xl my-2"><i class="fa-brands fa-facebook"></i></a>
                    <a href="/" class="text-2xl my-2"><i class="fa-regular fa-window-maximize"></i></a>
                </div>
                <h2 class="mt-2 font-bold">Escuela canina</h2>
                <p class="mt-4">Ayudamos Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam tenetur consequuntur commodi perspiciatis nihil incidunt! Corporis consequuntur eius perferendis deleniti!</p>
                <h2 class="mt-10 text-xl font-bold">Promociones</h2>
                    <div class="grid grid-cols-12 mt-12">
                        <div class="col-span-12 md:col-span-6">
                                <a href="#">
                                <img src="https://www.benitomoda.mx/cdn/shop/products/playeraformula1paraperro_900x.jpg?v=1676003046" class="object-cover w-full h-56 mb-5 bg-center rounded" alt="Kutty" loading="lazy" />
                                </a>
                                <h2 class="mb-2 text-lg font-semibold text-gray-900">
                                <a href="#" class="text-gray-900 hover:text-purple-700">Why is Mental Health one of the Important Issues to Address?</a>
                                </h2>
                                <p class="mb-3 text-sm font-normal text-gray-500">
                                Mental health was one of the under spoken topics before this lockdown. After sitting at home for about six months I realized that this is one of the important issues to address not only in the
                                work sector but also in daily living.
                                </p>
                                <p class="mb-3 text-sm font-normal text-gray-500">
                                <a href="#" class="font-medium text-gray-900 hover:text-purple-700">Praveen Juge</a>
                                • April 16, 2020
                                </p>
                        </div>
                    </div>

                <p class="my-20 text-center">Por el momento no cuenta con promociones</p>
                <h2 class="mt-12 text-xl font-bold">Eventos</h2>
                <div class="grid grid-cols-12 mt-12">
                    <div class="col-span-12 md:col-span-6">
                            <a href="#">
                            <img src="https://www.benitomoda.mx/cdn/shop/products/playeraformula1paraperro_900x.jpg?v=1676003046" class="object-cover w-full h-56 mb-5 bg-center rounded" alt="Kutty" loading="lazy" />
                            </a>
                            <h2 class="mb-2 text-lg font-semibold text-gray-900">
                            <a href="#" class="text-gray-900 hover:text-purple-700">Why is Mental Health one of the Important Issues to Address?</a>
                            </h2>
                            <p class="mb-3 text-sm font-normal text-gray-500">
                            Mental health was one of the under spoken topics before this lockdown. After sitting at home for about six months I realized that this is one of the important issues to address not only in the
                            work sector but also in daily living.
                            </p>
                            <p class="mb-3 text-sm font-normal text-gray-500">
                            <a href="#" class="font-medium text-gray-900 hover:text-purple-700">Praveen Juge</a>
                            • April 16, 2020
                            </p>
                    </div>

                </div>

                <p class="my-20 text-center">Por el momento no cuenta con eventos</p>

                <h2 class="mt-12 text-xl font-bold">Ubicación</h2>
                <div id="mapa" class="col-span-12 h-72 mt-2" style="z-index:0;border-radius:1em;min-height:10em; min-width:15em;">
                </div>
                <p class="mt-4 font-bold">Dirección

                </p>
                <p>Lomas de san miguel</p>

            {{-- comparte el link --}}

                <div
                            class="mt-16 relative block overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8"
                        >
                            <span
                            class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-purple-700 via-purple-700 to-purple-700"
                            ></span>

                            <div class="sm:flex sm:justify-between sm:gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-purple-900 sm:text-xl">
                                Comparte este link para que más personas conozcan a {{$business}} </h3>

                                <p class="mt-1 text-xs font-medium text-gray-600">Recomendación</p>
                            </div>

                            <div class="hidden sm:block sm:shrink-0">
                                <img
                                alt="Radi Pets"
                                src="{{asset('img/default-circle.png')}}"
                                class="h-16 w-16 md:rounded-lg object-cover shadow-sm"
                                />
                            </div>
                            </div>

                            <div class="mt-4">
                            <p id="p1" class="max-w-[40ch] text-sm text-gray-500" id="text">
                                https://radi.pet/lost/{{$hash}}
                            </p>
                            <button onclick="copyToClipboard('#p1')" class="mt-2 border-purple-700 bg-purple-700 hover:bg-purple-700 hover:border-purple-700 text-white font-bold py-2 px-4 rounded-full">
                                Copiar
                            </button>
                            </div>

                    <dl class="mt-6 flex gap-4 sm:gap-6">
                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-600">purplees Sociales</dt>

                        <div class="sharing-buttons flex flex-wrap">
                            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-700 bg-purple-700 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share on Facebook">
                            <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                <title>Facebook</title>
                                <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                                </path>
                            </svg>
                            </a>
                            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-700 bg-purple-700 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash}}&text=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$business}}" aria-label="Share on Twitter">
                            <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                <title>Twitter</title>
                                <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                                </path>
                            </svg>
                            </a>
                            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-700 bg-purple-700 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://wa.me/?text=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$business}}%20https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share on Whatsapp" draggable="false">
                            <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                <title>Whatsapp</title>
                                <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                                </path>
                            </svg>
                            </a>
                            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-700 bg-purple-700 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$business}}url=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share on Telegram" draggable="false">
                            <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                <title>Telegram</title>
                                <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                                </path>
                            </svg>
                            </a>
                            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-700 bg-purple-700 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="mailto:?subject=Ay%C3%BAdame%20a%20encontrar%20a%20mi%20mascota%2C%20por%20favor%20se%20llama%20{{$business}}body=https%3A%2F%2Fradi.pet%2Flost%2F{{$hash }}" aria-label="Share by Email" draggable="false">
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

                <a href="/download">
                    <div class="mt-10 relative w-full p-4 overflow-hidden bg-white shadow-lg rounded-2xl">
                        <img alt="moto" src="/img/landing.png" class="absolute w-82 h-40 mb-4 -right-20 -bottom-8"/>
                        <div class="w-4/6">
                            <p class="mb-2 text-lg font-medium text-gray-800">
                                Descubre<br> más
                            </p>
                            <p class="text-xs text-gray-400">
                                Descarga la app <br> para ver más.
                            </p>
                            <p class="text-xl font-medium text-indigo-500 mt-2">
                                Descargar
                            </p>
                        </div>
                    </div>
                </a>

</div>
</div>

        <div class="col-span-3  hidden md:block">
            <div class="sticky right-0 top-0 w-full">
                <div class="w-52 ml-auto">
                    <div class="p-6 rounded-xl mr-4 shadow-xl">
                        {!! QrCode::size(150)->style('dot')->eye('circle')->backgroundColor(255,255,255)->color(0,0,0)->generate('https://radi.pet/download') !!}
                        <p class="text-center font-bold mt-2">Descarga la App</p>
                    </div>
                </div>
              </div>
        </div>
        </div>







<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script>
    latitude = 20.6182329
    longitude = -103.2974992
    var map = L.map('mapa').setView([latitude, longitude], 16);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    var radiIcon = L.icon({
        iconUrl: '{{asset("img/target.png")}}',
        iconSize: [20, 20]
    });

    L.marker([latitude,longitude], {icon: radiIcon}).addTo(map)
    .bindPopup('Ubicación') .on('dragend', function(e) {
    $("#latitude").val(e.target._latlng.lat);
    $("#longitude").val(e.target._latlng.lng);
    }).openPopup();
</script>

{{-- @include('layouts.footer') --}}
