@include('layouts.nav')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
crossorigin="anonymous"></script>
<div class="grid-cols-12 mx-4 md:mx-24">
    <div class="grid grid-cols-12">

      <div class="col-span-7 md:col-span-4 md:col-start-3">
        <input required type="text" name="cities" id="cities" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  placeholder="" />
      </div>

      <div class="col-span-5 md:col-span-4 inline-block ml-2">
        <select id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" >
          <option value="1">Restaurantes</option>
          <option value="2">Hoteles</option>
          <option value="3">Lugar Público</option>
          <option value="0">Todos</option>
        </select>
      </div>
    </div>

    <div class="grid grid-cols-12">
      <div class="col-span-12 md:col-span-8 md:col-start-3">
          <button id="btnSearch"  type="button" class="mt-2 py-2 px-24 flex justify-center $items-center  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
            Buscar
          </button>
      </div>
    </div>
  </div>



  <div *ngIf="!loading" class="grid-cols-12 grid mt-4">

      <div class="col-span-12 p-6 lg:col-span-6">
        <div class="p-2 ">
            <div class="mt-2">
              <div class="grid grid-cols-12 gap-2">
                @foreach($places as $item)
                    <div class="col-span-12 md:col-span-6 lg:col-span-12" *ngFor="let $item of places;let i = index">
                    <a href="/places/{{$item->setHiddenId()}}" target="_blank" >
                        <div class="p-4 rounded-lg my-4" style="border: 1px solid #b9cef3;" >
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 md:col-span-4">
                            <img class="lazyload rounded-lg " src="{{$item->image}}" alt="image">
                            </div>
                            <div class="col-span-12 mt-2 md:col-span-8 ml-2 md:ml-4">
                            <h2 class="font-bold text-xl">{{$item->title}}</h2>
                            <p class="text-gray-600">{{$item->city}}</p>
                            <p style="font-size: .85em;" class="text-gray-400">{{ $item->address }}</p>
                            <div class="grid grid-cols-4 mt-4 text-center">
                                <div class="col-span-2 text-green-400" *ngIf="$item->parking">
                                <img src="{{asset('img/parking.png')}}" class="mx-auto" alt="parking">
                                <p class="font-bold md:hidden">Estacionamiento</p>
                                </div>
                                <div class="col-span-1" *ngIf="$item->wifi">
                                <img src="{{asset('img/wifi.png')}}" class="mx-auto" alt="wifi">
                                <p class="md:hidden">
                                    Wifi</p>
                                </div>
                                <div class="col-span-1" *ngIf="$item->accessibility">
                                <img src="{{asset('img/discapacitado.png')}}" class="mx-auto" alt="accesibilidad">
                                <p class="md:hidden">
                                    Habilitado</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </a>
                        @if( $loop->index == 2)
                                <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-client="ca-pub-7789760036582954"
                                data-ad-slot="5321324498"
                                data-ad-format="auto"
                                data-full-width-responsive="true"></ins>
                        @endif
                        @if( $loop->index == 7)
                                <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-client="ca-pub-7789760036582954"
                                data-ad-slot="5321324498"
                                data-ad-format="auto"
                                data-full-width-responsive="true"></ins>
                        @endif

                    </div>
                @endforeach
              </div>

              <div class="col-span-12 md:col-span-6 lg:col-span-12">
                <a target="_blank" href="/pet-friendly-owners">
                  <div class="p-4 rounded-lg my-4" style="border: 1px solid #b9cef3;" >
                    <div class="grid grid-cols-12">
                      <div class="col-span-12 md:col-span-4">
                        <img class="rounded-lg w-28 h-28" src="{{asset('img/icon.png')}}"  alt="image">
                      </div>
                      <div class="col-span-12 mt-2 md:col-span-8 ml-2 md:ml-4">
                        <h2 class="font-bold text-xl">¿No encuentras lugares?</h2>
                        <p class="text-gray-600">Agrega lugares</p>

                      </div>
                    </div>
                  </div>
                </a>

              </div>

            </div>

        </div>


      </div>

      <div class="w-full mt-14 sticky top-0 col-span-6 h-screen min-h-screen hidden md:block" >

        <div
        id="mapa"
        style="width: 100%;height: 100%;border-radius: 1em 0em;" ></div>

        <!-- <div id="map" style="width: 100%;height: 100%;">

        </div> -->

      </div>


  </div>

  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


  <script>
    var latitude;
    var longitude;
    url = "{{ asset('json/cities.json')}}"
    init();

    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    function getCountryByCode(data,code) {
        return data.filter(
            function(data){ return data.latitude == code }
        );
    }

    function init(){
        if(getUrlVars()["type"]){
            $('#type').val(getUrlVars()["type"]);
        }else{
            $('#type').val(1);
        }

        if(getUrlVars()["lat"] && getUrlVars()["lng"]){
            $.getJSON(url,function(data){
              var info = getCountryByCode(data,getUrlVars()["lat"]);
              if(info.length != 0){
                  $("#cities").val(info[0].title);
              }else{
                $("#cities").val('Ubicación Personalizada');
              }
        });




        }else{
            $("#cities").val('Guadalajara');
        }


    }

        $("#btnSearch").on('click',function(){
            var type = $("#type").val()
            console.log(latitude,longitude,type);
            location.href = 'results?lat='+latitude+'&lng='+longitude+'&type='+type;
        })

        var data = [];


        $.getJSON(url,function(result){
            $.each(result,function(index,val){
                data.push({label:val.title, lat:val.latitude, lng:val.longitude})
            });
        });

        $("#cities").autocomplete({

        source: data,
        select: function(event, ui) {
            var e = ui.item;
            console.log(e);
            latitude = e.lat;
            longitude = e.lng;
            $("#breed").val(e.id);
        }
    });

    var latitude = "{{$latitude}}";
    var longitude = "{{$longitude}}";

    var map = L.map('mapa').setView([latitude, longitude], 12);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);


    var radiIcon = L.icon({
        iconUrl: '{{asset("img/radi-32.png")}}',
        iconSize: [20, 20]
    });

    @foreach ($places as $place)
        L.marker([{{$place->latitude}},{{$place->longitude}}], {icon: radiIcon}).bindPopup("<div class='w-60 max-w-60'><img class='rounded-lg mb-2' src='{{ $place->image }}'><b> {{$place->title}}</b><br><p class='text-center text-white'><a target='_blank' href='places/{{$place->setHiddenId()}}'> Ver más </a><p></div>").addTo(map);
    @endforeach

    async function detectAdBlock() {
        let adBlockEnabled = false
        const googleAdUrl = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
        try {
            await fetch(new Request(googleAdUrl)).catch(_ => adBlockEnabled = true)
        } catch (e) {
            adBlockEnabled = true
        } finally {
            console.log(`AdBlock Enabled: ${adBlockEnabled}`)
        }
    }

  detectAdBlock();



</script>
