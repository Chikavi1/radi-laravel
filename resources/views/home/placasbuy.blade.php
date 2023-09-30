@include('layouts.nav')
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<section class="py-20 font-poppins ">
    <div class="max-w-6xl px-4 mx-auto">
    <div class="flex flex-wrap mb-24 -mx-4">
    <div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
    <div class="sticky top-0 z-50 overflow-hidden -mt-20 md:mt-2">
    <div class=" mb-6 lg:mb-10  ">

        <div id="side1" class="hidden -z-10">
            <img id="imagemain1" class="z-0 object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/jDGpDYN/1.png" alt="purple">
            <img id="imagemain2" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/Bj38GHv/2.png" alt="black">
            <img id="imagemain3" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/z8jDHfK/3.png" alt="red">
            <img id="imagemain4" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/m4hd0fc/4.png" alt="green">
            <img id="imagemain5" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/BcJKpXp/5.png" alt="pink">
        </div>

        <div id="side2" class="hidden">
                <img id="imagetype1" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/xLmDRvh/Nombre-de-tu-mascota-1.png" alt="radi pets">
                <img id="imagetype2" class="object-cover hidden w-full lg:h-1/2 " src="https://i.ibb.co/hBHk2My/Nombre-de-tu-mascota-2.png" alt="custom">
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
    <a class="text-xs text-blue-400 lg:text-sm dark:text-blue-200" href="#">
    Mira nuestra sección de preguntas frecuentes o contactanos
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
    <p  id="price" class="max-w-md mb-4 text-green-500 font-bold">
    $289.99  MXN
    </p>
    <div class="">
    <p class="mb-4 text-lg font-semibold dark:text-gray-400">Selecciona un color</p>
    <div class="grid grid-cols-2 gap-4 pb-4 border-b-2 border-gray-300 lg:grid-cols-3 dark:border-gray-600">
    <div>
    <button id="btnpurple" class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-500 hover:border-blue-400">
    <div>
    <div style="background: #5148e0;" class="w-8 h-8 mx-auto mb-2 rounded-full bg-emerald-400">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Morado
    </p>
    </div>
    </button>
    </div>
    <div>
    <button id="btnblack" class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-500 hover:border-blue-400">
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
    <button id="btnred" class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-500 hover:border-blue-400">
    <div>
    <div style="background: #d82329;"  class="w-8 h-8 mx-auto mb-2 bg-red-500 rounded-full">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Rojo
    </p>
    </div>
    </button>
    </div>
    <div>
    <button id="btngreen" class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-500 hover:border-blue-400">
    <div>
    <div style="background: #039a6b;" class="w-8 h-8 mx-auto mb-2 rounded-full bg-stone-200">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Verde
    </p>
    </div>
    </button>
    </div>
    <div>
    <button id="btnpink" class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-500 hover:border-blue-400">
    <div>
    <div style="background: #ff7ebf;"  class="w-8 h-8 mx-auto mb-2 bg-blue-200 rounded-full">
    </div>
    <p class="text-xs text-center text-gray-700 dark:text-gray-400">
        Rosa
    </p>
    </div>
    </button>
    </div>
    </div>
    </div>
    <div class="mt-6">
    <p class="mb-2 text-lg font-semibold dark:text-gray-400">Selecciona una opción</p>
    <a href="#" class="text-blue-500 hover:underline dark:text-gray-400">
    Que tecnologia te gustaria tener?</a>
    <div class="grid grid-cols-2 gap-4 pb-4 mt-2 mb-4 border-b-2 border-gray-300 lg:grid-cols-3 dark:border-gray-600">
    <div>
    <button class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-600 hover:border-blue-400">
    <div>
    <div id="btnradimodel" class="mb-2 font-semibold dark:text-gray-400">
        Modelo <br>
        Radi Pets
    </div>

    </div>
    </button>
    </div>
    <div>
    <button class="flex items-center justify-center w-full h-full py-4 border-2 border-gray-300 dark:hover:border-blue-400 dark:border-gray-600 hover:border-blue-400">
    <div>
    <div id="btncustommodel" class="mb-2 font-semibold dark:text-gray-400">
        Modelo <br>
        Personalizado
    </div>
    <p class="px-2 text-xs font-medium text-center text-gray-700 dark:text-gray-400">

    </p>
    </div>
    </button>
    </div>


    </div>
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

    <div class="mt-6 ">
        {!! Form::open(['route' => ['cart.add']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
            <button class="w-full px-4 py-2 font-bold text-white bg-blue-800 lg:w-96 hover:bg-blue-500">
                Agregar al carrito
            </button>
        {!! Form::close() !!}

    </div>

    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    @include('layouts.footer')


    <script>
        var color = 1;
        var type  = 1;
        var side  = 1;
        $("#side1").removeClass('hidden')
        $("#imagemain1").removeClass('hidden')
        $("#imagemain1").addClass('animate__animated animate__rollIn')



        $("#btnpurple").on('click', () => {
            transactionColor(1)
        });
        $("#btnblack").on('click', () => {
            transactionColor(2)
        });
        $("#btnred").on('click', ()=>{
            transactionColor(5)
        });
        $("#btngreen").on('click', ()=>{
            transactionColor(4)
        });
        $("#btnpink").on('click', ()=>{
            transactionColor(3)
        });

        $("#btnradimodel").on('click', ()=>{
            transactionType(1);
            $("#price").text("269.00 MXN");
            $("#availabled").text("Disponible").addClass('text-700-green');
        });

        $("#btncustommodel").on('click', ()=>{
            transactionType(2);
            $("#price").text("299.00 MXN");
            $("#availabled").text("Tarda 2-7 dias más (dependiendo de la demanda)");

        });

        function transactionColor(id){
            side = 1;
            $("#side1").removeClass('hidden')
            $("#side2").addClass('hidden');

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
            side = 2;
            console.log(id);
            $("#side2").removeClass('hidden');
            $("#side1").addClass('hidden');

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


