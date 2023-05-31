@include('layouts.nav')

    {!! Form::open(['route' => ['lost.destroy',$hash]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
    {{ method_field('DELETE') }}
        <div class="grid grid-cols-12 gap-4 ">
            <div class="md:col-span-6 col-span-12 md:col-start-4 md:shadow-lg p-4">
                <h2 class="font-bold text-3xl">Finalizar Reporte</h2>
                <p class="font-bold text-gray-800">Para finalizar el reporte, indicanos donde encontraste a tu mascota.</p>
                <p>Este formulario es opcional, sirve para mejorar el sistema</p>
                <div id="mapa" class="col-span-12 h-64 mt-2 bg-red-900" style="border-radius:1em;min-height:10em; min-width:15em;">
                </div>

                <input type="hidden" name="finish_latitude" id="finish_latitude">
                <input type="hidden" name="finish_longitude" id="finish_longitude">

                <h2 class="mt-4 font-bold text-gray-800">¿Qué te gustaría agregar a esta función para mejorarla?</h2>
                {!! Form::textarea('feedback', null, ["rows"=>"5","cols"=>"20",'id'=>'description','class' => 'border mt-4 rounded px-4 w-full bg-gray-50']); !!}

                <h2 class="mt-4 font-bold text-gray-800">¿Cómo clasificarías la función de reportar la desaparición?</h2>
                <div class="md:col-span-12">
                    {!! Form::select('functional', array('eficiente' => 'Fue eficiente', 'ayudo' => 'Me ayudo','no sirvio' => 'No me sirvio'), null,['class' => 'h-10 border rounded px-4 w-full bg-gray-50']); !!}
                    </div>


                    <div class="md:col-span-5 text-right">
                        <div class="inline-flex items-end">
                            <button id="send" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Finalizar</button>
                        </div>
                    </div>

            </div>

        </div>
    {!! Form::close() !!}

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


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
        $("#finish_latitude").val(latitude);
        $("#finish_longitude").val(longitude);

        console.log(latitude,longitude);
        var map = L.map('mapa').setView([latitude, longitude], 16);

        L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
        }).addTo(map);


        var radiIcon = L.icon({
            iconUrl: '{{asset("img/target-green.png")}}',
            iconSize: [20, 20]
        });

        L.marker([latitude,longitude], {icon: radiIcon,draggable:true}).addTo(map)
        .bindPopup('Aquí se encontro') .on('dragend', function(e) {
            $("#latitude").val(e.target._latlng.lat);
            $("#longitude").val(e.target._latlng.lng);
        })

    }

    function error(err){

    }

    navigator.geolocation.getCurrentPosition(success, error, options);



</script>
