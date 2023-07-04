<div class="fixed hidden insert-0 bg-gray-600 bg-opacity-50 fixed overflow-y-auto h-screen w-full z-50	" id="modal">
    <div class="relative top-20 mx-auto p-5 border w-full md:w-1/2 shadow-lg rounded-md bg-white">
    <div class="mt-3 text-center">
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-purple-100">
            <i class="fa-solid fa-paw"></i>
        </div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">Falleció mascota</h3>
        <div class="mt-2 px-7 py-3">
            <p class="text-sm text-gray-500">Lamentamos profundamente la situación. Lamentablemente, al declarar a tu mascota como fallecida, no sera posible revertir dicha acción.</p>
        </div>
        <div class="items-center px-4 py-3">

            <button id="cancel-btn"  class="px-4 py-2  text-gray-800
                            text-base font-medium rounded-md w-full
                            shadow-sm  ">
                Cancelar
            </button>
            {!! Form::open(['route' => ['pet.destroy',$pet->id]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
            {{ method_field('DELETE') }}

                <button id="ok-btn" class="px-4 py-2 bg-red-500 text-white
                text-base font-medium rounded-md w-full
                shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Si,Falleció.
                </button>
            {!! Form::close() !!}


        </div>
    </div>

        </div>
    </div>
</div>

<x-app-layout>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    {!! Form::open(['route' => ['pet.update',$pet->id],'method' => 'put'], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

        <div class="container max-w-screen-lg mx-auto py-12">
            <div>
                <h2 class="font-semibold text-xl dark:text-white text-gray-600 mt-6">Agrega Mascota </h2>
                <p class="text-gray-500 mb-6">* Campos obligatorios</p>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Información Basica del negocio</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Nombre de la mascota *</label>
                                    <input type="text" placeholder="Ingresa el nombre de la mascota" name="name" id="name" required class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$pet->name}}" />
                                </div>

                                <div class="md:col-span-5" id="imageview">

                                    <img class="mx-auto rounded-md" src="{{$pet->photo}}" alt="image pet">
                                    <p class="text-xl text-blue-800 text-center mt-2" id="changePhoto">Cambiar foto</p>
                                </div>

                                <div class="md:col-span-5 hidden" id="uploadimage">

                                    <div class="card-body">
                                        <div id="image_demo" class="mx-auto w-96 h-72"></div>
                                        <div id="uploaded_image" style="width:350px; margin-top:10px;"></div>
                                    </div>

                                    <label class="dark:text-white " for="image">Imagen *</label>

                                    <input
                                    type="hidden"
                                    name="base"
                                    id="base"/>

                                    {!! Form::file('image',['oninput'=>'pic.src=window.URL.createObjectURL(this.files[0])','accept'=>'image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp','name' => 'image','id'=>'upload_image','class'=>'min-dark:bg-gray-700 dark:text-white h-10 max-dark:bg-gray-700 dark:text-white h-10 dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                    <p class="text-xl text-red-800 text-center mt-2" id="cancelPhoto">Cancelar</p>


                                </div>

                                <div class="md:col-span-5 mt-28">
                                    <label class="dark:text-white" for="birthday">Fecha de nacimiento *</label>
                                    {{Form::date('birthday', Carbon\Carbon::parse($pet->birthday),[
                                    'required' => true,
                                    'id'=>'birthday',
                                    'class' => 'datelim dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50'])}}

                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Descripción
                                    </label> <br>

                                    {!! Form::textarea('description', $pet->description, ["rows"=>"5","cols"=>"20",'id'=>'description','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}


                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Enfermedades cronicas
                                    </label> <br>
                                    {!! Form::textarea('chronic_disease', $pet->chronic_disease, ["rows"=>"5","cols"=>"20",'id'=>'chronic_disease','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}
                                </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3"">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Beneficios</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                <div class="md:col-span-12">
                                <label class="dark:text-white " for="gender">Genero *</label>
                                {!! Form::select('gender', array('1' => 'Macho', '2' => 'Hembra'), $pet->gender,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                </div>


                                <div class="md:col-span-12">
                                    <label class="dark:text-white " for="specie">Especie *</label>
                                    {!! Form::select('specie', array('1' => 'Gato', '2' => 'Perro'), $pet->specie,['id'=>'specie','class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                </div>

                            <div class="md:col-span-12">
                                <label class="dark:text-white " for="sterilized">Mascota esterilizada?</label>
                                <select
                                    required
                                    name="sterilized" id="sterilized"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                    <option value="1">
                                        Sí
                                    </option>
                                    <option value="0">
                                        No
                                    </option>
                                </select>
                            </div>

                            <div class="md:col-span-12" id="divdatesterilized">
                                <label class="dark:text-white " for="datesterilized">Fecha de esterilizacion</label>

                                {{Form::date('datesterilized', Carbon\Carbon::parse($pet->sterelized_date),[
                                    'required' => true,
                                    'id'=>'datesterilized',
                                    'class' => 'datelim dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50'])}}

                            </div>

                            <div class="md:col-span-12">
                                <label class="dark:text-white">Raza</label>
                                <input required type="text" name="breeds" id="breeds" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                placeholder="Asegurate de dar clic al escribirlo" />
                            </div>

                            <input required
                            type="hidden"
                            value="{{$pet->breed}}"
                            name="breed" id="breed" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>


                            <div class="md:col-span-12"  id="divsize">
                                <label class="dark:text-white " for="size">Tamaño</label>

                                {!! Form::select('size', array('mn' => 'Mini', 'sm' => 'Pequeño','md' => 'Mediano','lg' => 'Grande','xl' => 'Extra Grande'), $pet->weight,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>


                            <div class="md:col-span-12" id="divneclacke">
                                <label class="dark:text-white " for="neclacke_color">Collar color</label>
                                {!! Form::select('neclacke_color', array('1' => 'Rojo (precaución)', '2' => 'Amarillo (Nervioso)','3' => 'Verde (Amigable)','4' => 'Naranja (No Amigable)','5' => 'Azul (Entrenado)','6'=> 'Blanco (Discapacidad)'), $pet->weight,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>

                            <div class="md:col-span-12" id="divweight">
                                <label class="dark:text-white " for="weight">Peso</label>
                                {!! Form::select('weight', array('1' => '1 KG', '2' => '2 KG','3' => '3 KG','4' => '4 KG','5' => '5 KG','6' => '6 KG'), $pet->weight,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>


                            </div>

                            <p class="my-4 dark:text-white">Otras opciones:</p>
                            <button type="button" id="open-btn" class="bg-red-800 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                <span>Fallecio</span>
                            </button>

                            <div class="md:col-span-5 text-right">


                                <div class="inline-flex items-end">
                                    <button id="send" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
</x-app-layout>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){

        birthday.max = new Date().toISOString().split("T")[0];
        datesterilized.max = new Date().toISOString().split("T")[0];
        // datesterilized.min = new Date("{{$pet->birthday}}]").toISOString().split("T")[0];

        // init();

    });


    $("#sterilized").on('change',function(e){
            if(e.target.value == 1){
                $("#divdatesterilized").removeClass('hidden');
            }else{
                $("#divdatesterilized").addClass('hidden');
            }
    });

    $("#changePhoto").on('click',function(e){
        $("#uploadimage").removeClass('hidden');
        $("#imageview").addClass('hidden');
    });

    $("#cancelPhoto").on('click',function(e){
        $("#imageview").removeClass('hidden');
        $("#uploadimage").addClass('hidden');

    });


    if({{$pet->specie}} == 1){
        runCat();
    }else{
        runDog();
    }

    function runCat(){
        $("#divneclacke").addClass('hidden');
        $("#divsize").addClass('hidden');
        $("#divweight").removeClass('hidden');
        mybreeds('cat');
    }

    function runDog(){
        $("#divneclacke").removeClass('hidden');
        $("#divsize").removeClass('hidden');
        $("#divweight").addClass('hidden');
        mybreeds('dog');
    }

    $("#specie").on('change',function(e){
        $("#breeds").val('');
            if(e.target.value == 1){
                runCat();
            }else{
                runDog();
            }
    });

//    function init(){
//         $("#divneclacke").addClass('hidden');
//         $("#divsize").addClass('hidden');
//         $("#divweight").removeClass('hidden');
//         breeds('cat');
//    }

  function mybreeds(breed){

    var url = '';
    if(breed == 'cat'){
        url = "{{ asset('json/cats.json')}}"
    }else{
        url = "{{ asset('json/dogs.json')}}"
    }

    var data = [];
    $.getJSON(url,function(result){
        $.each(result,function(index,val){
            data.push({label:val.name,id:val.id})
            if({{$pet->breed}} == val.id){
                $("#breeds").val(val.name);
            }
        });
    });

    $("#breeds").autocomplete({
        source: data,
        select: function(event, ui) {
        var e = ui.item;
        $("#breed").val(e.id);
        }
    });

  }


    let modal = document.getElementById('modal');
     let btn = document.getElementById('open-btn');
      let button = document.getElementById('ok-btn');
      let cancel = document.getElementById('cancel-btn');

      btn.onclick = function () {
              modal.style.display = 'block';
          };

          button.onclick = function () {
              modal.style.display = 'none';
          };

          cancel.onclick = function () {
              modal.style.display = 'none';
          };

      window.onclick = function (event) {
      if (event.target == modal) {
      modal.style.display = "none";
      }
      }

      var w = $("#image_demo").width();
        var h = $("#image_demo").height();

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: w-10, height: h-20,
                type:'square' //circle
            },
            url: "{{ ($pet->photo)?$pet->photo:'https://radi-images.s3.us-west-1.amazonaws.com/places/casavirreyes.JPG';}}",
            boundary:{
                width: w, height: h
            }
        });

        $('#upload_image').on('change', function(){
            var reader = new FileReader();

            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                url: event.target.result
                })
            }

            reader.readAsDataURL(this.files[0]);
            $('#uploadimage').show();
        });

        $('#send').click(function(event){
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response){
                    $("#base").val(response);
                    console.log(response);
            })
        });

  </script>
