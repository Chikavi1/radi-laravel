@include('layouts.nav')
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
{!! Form::open(['route' => ['cart.add']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

<section class="py-20 font-poppins ">
    <div class="max-w-6xl px-4 mx-auto">
    <div class="flex flex-wrap mb-24 -mx-4">
    <div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
    <div class="sticky top-0 z-50 overflow-hidden -mt-20 md:mt-2">
    <div class=" mb-6 lg:mb-10  ">

        <div id="side1" class="hidden -z-10">
            <img id="imagemain2" class="object-cover hidden w-full" src="{{asset('img/placa-logo.png')}}" alt="black">
            <img id="imagemain5" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/nDW0HyW/Nombre-de-tu-mascota-6.png" alt="pink">
            <img id="imagemain1" class="z-0 object-cover hidden w-full h-full " src="https://i.ibb.co/K5QgHVj/Nombre-de-tu-mascota-4.png" alt="purple">
            <img id="imagemain3" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/d6kM24J/Nombre-de-tu-mascota-7.png" alt="red">
            <img id="imagemain4" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/BGN992R/Nombre-de-tu-mascota-8.png" alt="green">
        </div>

        <div id="side2" class="hidden">
                <img id="imagetype1" class="object-cover hidden w-full  " src="https://i.ibb.co/nQdTtCR/logos-para-las-placas-3.png" alt="radi pets">
                <img id="imagetype2" class="object-cover hidden w-full   " src="https://i.ibb.co/pz2Zh9Q/logos-para-las-placas-8.png" alt="custom">
        </div>

    </div>

    <div class="hidden md:block px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
    <div class="flex items-center justify-center mt-6">
    <span class="mr-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 text-blue-700 dark:text-gray-400 bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
    </svg>
    </span>
    <div>
    <h2 class="text-sm font-bold text-gray-700 lg:text-lg ">
        ¿Tienes dudas de como funciona la placa con código QR?
    </h2>
    <a class="text-xs text-blue-400 lg:text-sm dark:text-blue-200" href="/placas">
        Mira la información de la placa
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="w-full px-4 md:w-1/2">
    <div class="lg:pl-20">
    <div class="mb-6 ">
    <span class="hidden md:block text-red-500 dark:text-red-200">Nuevo</span>
    <h2 class="text-xl -mt-16 max-w-xl md:mt-2 mb-4 md:text-5xl font-bold font-heading">
    Placa de identificación Radi Pets
    </h2>
    <p  id="price" class="max-w-md mb-4 text-3xl text-green-500 font-bold">
    239.00  MXN
    </p>
    {{-- <div class="">
    <p class="mb-4 text-lg font-semibold dark:text-gray-400">Selecciona un color</p>
    <div class="grid grid-cols-2 gap-4 pb-4 border-b-2 border-gray-300 lg:grid-cols-3 dark:border-gray-600">
        <div>
        {{-- <button type="button" id="btn1" class="flex btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200 ">
        <div>
        <div style="background: #004AAD;" class="w-8 h-8 mx-auto mb-2 rounded-full bg-emerald-400">
        </div>
        <p class="text-xs text-center text-gray-700 dark:text-gray-400">
            Azul
        </p>
        </div>
        </button> --}
        </div>
    <div>
    <button type="button" id="btn2" class="  btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200 ">
    <div>
    <div style="background: #232323;" class="w-8 h-8 mx-auto mb-2 bg-gray-700 rounded-full dark:bg-gray-600">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Negro
    </p>
    </div>
    </button>
    </div>
    <div>
    <button type="button" id="btn3" class=" btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200">
    <div>
    <div style="background: #d82329;"  class="w-8 h-8 mx-auto mb-2 bg-red-500 rounded-full">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Rojo
    </p>
    </div>
    </button>
    </div>
    <div> --}}
    {{-- <button type="button" id="btn4" class="flex btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200">
    <div>
    <div style="background: #0D5F6D;" class="w-8 h-8 mx-auto mb-2 rounded-full bg-stone-200">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Verde
    </p>
    </div>
    </button>
    </div>
    <div>
    <button type="button" id="btn5" class="flex btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200">
    <div>
    <div style="background: #ff7ebf;"  class="w-8 h-8 mx-auto mb-2 bg-blue-200 rounded-full">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Rosa
    </p>
    </div>
    </button> --}}
    {{-- </div>
    </div>
    </div> --}}
    <div class="mt-6">
    <p class="mb-2 text-lg font-semibold dark:text-gray-400">Selecciona una opción</p>
    <a href="#" class="text-blue-500 hover:underline dark:text-gray-400">
        ¿Qué modelo te gustaría tener?</a>
    <div class="grid grid-cols-2 gap-4 pb-4 mt-2 mb-4    lg:grid-cols-3 ">
    <div>
    <button type="button"  id="btnmodel1" class="btnmodels flex btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200">
    <div>
    <div class=" mb-2 font-semibold dark:text-gray-400">
        Modelo <br>
        Radi Pets
    </div>

    </div>
    </button>
    </div>
    <div>
    <button type="button" id="btnmodel2" class="btnmodels flex flex btncolor items-center justify-center w-full h-full py-4 border-2  dark:hover:border-green-200 hover:border-green-200">
    <div>
    <div  class=" mb-2 font-semibold dark:text-gray-400">
        Modelo <br>
        Personalizado
    </div>
    <p class="px-2 text-xs font-medium text-center text-gray-700 dark:text-gray-400">

    </p>
    </div>
    </button>
</div>


</div>

    <input type="text" name="pet_name" id="inputname" class="hidden rounded-lg bg-gray-100 border-transparent flex-1 appearance-none border border-gray-500 w-full py-2 px-4  text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
     placeholder="Ingresa el nombre de tu mascota (Max 8 caracteres).">
    </div>
    <div class="mt-6">


        <p id="availabled" class="mb-2 text-sm dark:text-gray-400 font-bold">Disponible</p>
    </div>
    <div class="mt-6 ">
    <div class="flex flex-wrap items-center">
    <span class="mr-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 text-gray-700 dark:text-gray-400 bi bi-truck" viewBox="0 0 16 16">
    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
    </svg>
    </span>
    <h2 class="text-lg font-bold text-gray-700 dark:text-gray-400">Envio</h2>
</div>
    <div class="px-7">
    <p class="mb-2 text-sm dark:text-gray-400">Envio gratis en México de 3-7 dias</p>
    </div>
    </div>

    <div class="flex flex-wrap items-center">
        <span class="mr-2">
            <svg fill="#000000" height="16" width="16" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 214.27 214.27" xml:space="preserve">
       <g>
           <path d="M196.926,55.171c-0.11-5.785-0.215-11.25-0.215-16.537c0-4.142-3.357-7.5-7.5-7.5c-32.075,0-56.496-9.218-76.852-29.01
               c-2.912-2.832-7.546-2.831-10.457,0c-20.354,19.792-44.771,29.01-76.844,29.01c-4.142,0-7.5,3.358-7.5,7.5
               c0,5.288-0.104,10.755-0.215,16.541c-1.028,53.836-2.436,127.567,87.331,158.682c0.796,0.276,1.626,0.414,2.456,0.414
               c0.83,0,1.661-0.138,2.456-0.414C199.36,182.741,197.954,109.008,196.926,55.171z M107.131,198.812
               c-76.987-27.967-75.823-89.232-74.79-143.351c0.062-3.248,0.122-6.396,0.164-9.482c30.04-1.268,54.062-10.371,74.626-28.285
               c20.566,17.914,44.592,27.018,74.634,28.285c0.042,3.085,0.102,6.231,0.164,9.477C182.961,109.577,184.124,170.844,107.131,198.812
               z"/>
           <path d="M132.958,81.082l-36.199,36.197l-15.447-15.447c-2.929-2.928-7.678-2.928-10.606,0c-2.929,2.93-2.929,7.678,0,10.607
               l20.75,20.75c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.732,5.303-2.196l41.501-41.5
               c2.93-2.929,2.93-7.678,0.001-10.606C140.636,78.154,135.887,78.153,132.958,81.082z"/>
       </g>
       </svg>
        </span>
        <h2 class="text-lg font-bold text-gray-700 dark:text-gray-400">Garantia de reemplazo</h2>
    </div>
    <div class="px-7">
        <p class="mb-2 text-sm dark:text-gray-400">Compra una vez tu placa y despreocupate de volver a comprar</p>
        </div>

    <div class="mt-6 ">
        <input type="hidden" name="color" id="inputcolor">
        <input type="hidden" name="model" id="inputmodel">
        <button type="submit" class="mb-4 w-full px-4 py-2 font-bold text-white bg-blue-800 lg:w-96 hover:bg-blue-500">
                Agregar al carrito
            </button>
            <a target="_blank" href="/affiliate-program" class="pt-4 text-blue-400 font-bold">Genera ingresos adicionales al convertirte en afiliado de Radi Pets </a>
    </div>

    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    {!! Form::close() !!}

    @include('layouts.footer')


    <script>
        var color = 2;
        var type  = 1;
        var side  = 1;


        $("#side1").removeClass('hidden')
        $("#imagemain2").removeClass('hidden')
        $("#imagemain1").addClass('animate__animated animate__rollIn')
        $("#btn1").addClass('border-green-400')
        $("#btnmodel1").addClass('border-green-400')
        $("#inputcolor").val(color);
        $("#inputmodel").val(type);


        $("#btn1").on('click', () => {
            transactionColor(1)
        });
        $("#btn2").on('click', () => {
            transactionColor(2)
        });
        $("#btn3").on('click', ()=>{
            transactionColor(3)
        });
        $("#btn4").on('click', ()=>{
            transactionColor(4)
        });

        $("#btn5").on('click', ()=>{
            transactionColor(5)
        });

        $("#btnmodel1").on('click', ()=>{
            $("#imagetype1").attr("src","https://i.ibb.co/nQdTtCR/logos-para-las-placas-3.png");

            console.log(type);
            transactionType(1);

            if(color == 1){
                $("#imagetype1").attr("src","https://i.ibb.co/nQdTtCR/logos-para-las-placas-3.png");
            }else if(color == 2){
                $("#imagetype1").attr("src","{{asset('img/placa-logo.png')}}");
            }else if(color == 3){
                $("#imagetype1").attr("src","https://i.ibb.co/zJBT5NG/logos-para-las-placas-4.png");
            }else if(color == 4){
                $("#imagetype1").attr("src","https://i.ibb.co/80JPSFw/logos-para-las-placas-6.png");
            }else if(color == 5){
                $("#imagetype1").attr("src","https://i.ibb.co/LphMJ45/logos-para-las-placas-7.png");
            }


            $("#price").text("239.00 MXN");
            $("#availabled").text("Disponible").addClass('text-700-green');
            $("#inputname").addClass('hidden')
            $("#inputname").removeAttr('required');
        });

        $("#btnmodel2").on('click', ()=>{
            transactionType(2);
            if(color == 1){
                $("#imagetype2").attr("src","https://i.ibb.co/pz2Zh9Q/logos-para-las-placas-8.png");
            }else if(color == 2){
                $("#imagetype2").attr("src","{{asset('img/placa-per.png')}}");
            }else if(color == 3){
                $("#imagetype2").attr("src","https://i.ibb.co/gymmpnC/logos-para-las-placas-10.png");
            }else if(color == 4){
                $("#imagetype2").attr("src","https://i.ibb.co/7k80Bnw/logos-para-las-placas-11.png");
            }else if(color == 5){
                $("#imagetype2").attr("src","https://i.ibb.co/VtbM0Qc/logos-para-las-placas-12.png");
            }
            $("#price").text("289.00 MXN");
            $("#availabled").text("Tarda 2-7 dias más (dependiendo de la demanda)");
            $("#inputname").removeClass('hidden')
            $("#inputname").attr('required','true');


        });

        function transactionColor(id){
            $(".btncolor").removeClass('border-green-400');
            $("#btn"+id).addClass('border-green-400');

            side = 1;
            $("#side1").removeClass('hidden')
            $("#side2").addClass('hidden');
            $("#inputcolor").val(id);



            if(id != color){
                $("#imagemain"+color).addClass('animate__animated animate__rollOut')
                setTimeout(() => {
                    $("#imagemain"+color).removeClass('animate__animated animate__rollOut')
                    $("#imagemain"+id).removeClass('hidden')
                    $("#imagemain"+color).addClass('hidden')
                    $("#imagemain"+id).addClass('animate__animated animate__rollIn')
                    color = id;
                }, 600);
            }
        }

        function transactionType(id){
            $(".btnmodels").removeClass('border-green-400');

            $("#btnmodel"+id).addClass('border-green-400');
            side = 2;
            $("#side1").addClass('hidden');
            $("#inputmodel").val(id);
            $("#side2").removeClass('hidden');

            if(id != type){
                $("#imagetype"+type).addClass('animate__animated animate__flipOutY')
                setTimeout(() => {
                    $("#imagetype"+type).removeClass('animate__animated animate__flipOutY')
                    $("#imagetype"+id).removeClass('hidden')
                    $("#imagetype"+type).addClass('hidden')
                    $("#imagetype"+id).addClass('animate__animated animate__flipInY')
                    type = id;
                }, 600);
            }
        }
    </script>


