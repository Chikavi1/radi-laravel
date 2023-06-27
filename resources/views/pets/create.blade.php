<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    {!! Form::open(['route' => ['pet.store']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

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
                                    <input type="text" placeholder="Ingresa el nombre de la mascota" name="name" id="name" required class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
                                </div>



                                <div class="md:col-span-5">

                                    <div class="card-body">
                                        <div id="image_demo" class="hidden mx-auto w-80 h-72"></div>
                                        <div id="uploaded_image" style="width:350px; margin-top:30px;"></div>
                                    </div>

                                    <label class="dark:text-white " for="image">Imagen *</label>

                                    <input
                                    type="hidden"
                                    name="base"
                                    id="base"/>

                                    {!! Form::file('image',['oninput'=>"$('#image_demo').removeClass('hidden');",'accept'=>'image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp','name' => 'image','id'=>'upload_image',
                                    'class'=>'block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400']); !!}

                                </div>




                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="birthday">Fecha de nacimiento *</label>
                                    <input
                                    value="2018-07-22"
                                    type="date"
                                    id="birthday"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="birthday"
                                    required
                                    placeholder="Fecha de nacimiento"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Descripción
                                    </label> <br>

                                    {!! Form::textarea('description', null, ["rows"=>"5","cols"=>"20",'id'=>'description','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}


                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Enfermedades cronicas
                                    </label> <br>
                                    {!! Form::textarea('chronic_disease', null, ["rows"=>"5","cols"=>"20",'id'=>'chronic_disease','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}
                                </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Información general</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                <div class="md:col-span-12">
                                <label class="dark:text-white " for="gender">Genero *</label>
                                {!! Form::select('gender', array('1' => 'Macho', '2' => 'Hembra'), null,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                </div>


                                <div class="md:col-span-12">
                                    <label class="dark:text-white " for="specie">Especie *</label>
                                    {!! Form::select('specie', array('1' => 'Gato', '2' => 'Perro'), null,['id'=>'specie','class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
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
                                <input
                                value="2018-07-22"
                                type="date"
                                id="datesterilized"
                                class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                name="datesterilized"
                                required
                                placeholder="Fecha de nacimiento"/>
                            </div>

                            <div class="md:col-span-12">
                                <label class="dark:text-white " for="payments_card">Raza</label>
                                <input required type="text" name="breeds" id="breeds" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"  placeholder="" />
                            </div>

                            <input required type="hidden" name="breed" id="breed" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />


                            <div class="md:col-span-12"  id="divsize">
                                <label class="dark:text-white " for="size">Tamaño</label>

                                {!! Form::select('size', array('mn' => 'Mini', 'sm' => 'Pequeño','md' => 'Mediano','lg' => 'Grande','xl' => 'Extra Grande'),null,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>


                            <div class="md:col-span-12" id="divneclacke">
                                <label class="dark:text-white " for="neclacke_color">Collar color</label>
                                {!! Form::select('neclacke_color', array('1' => 'Rojo (precaución)', '2' => 'Amarillo (Nervioso)','3' => 'Verde (Amigable)','4' => 'Naranja (No Amigable)','5' => 'Azul (Entrenado)','6'=> 'Blanco (Discapacidad)'), null,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>

                            <div class="md:col-span-12" id="divweight">
                                <label class="dark:text-white " for="weight">Peso</label>
                                {!! Form::select('weight', array('1' => '1 KG', '2' => '2 KG','3' => '3 KG','4' => '4 KG','5' => '5 KG','6' => '6 KG'), null,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>


                            </div>



                            <div class="md:col-span-5 text-right">
                                <div class="inline-flex items-end">
                                    <button id="send" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear</button>
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
    init()
    var w = $("#image_demo").width();
    var h = $("#image_demo").height();

    $image_crop = $('#image_demo').croppie({
       enableExif: true,
       viewport: {
        width: w-10, height: h-20,
         type:'square' //circle
       },
       url: "{{ asset('img/default.png')}}",
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




function runCat(){
    $("#divneclacke").addClass('hidden');
    $("#divsize").addClass('hidden');
    $("#divweight").removeClass('hidden');
    breeds('cat');
}

function runDog(){
    $("#divneclacke").removeClass('hidden');
    $("#divsize").removeClass('hidden');
    $("#divweight").addClass('hidden');
    breeds('dog');
}

    $("#specie").on('change',function(e){
        $("#breeds").val('');
        if(e.target.value == 1){
            runCat();

        }else{
            runDog();
        }
   });

   function init(){
        $("#divneclacke").addClass('hidden');
        $("#divsize").addClass('hidden');
        $("#divweight").removeClass('hidden');
        breeds('cat');
   }

  function breeds(breed){

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

</script>
