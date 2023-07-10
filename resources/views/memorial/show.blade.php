@include('layouts.nav')

<div class="hidden md:block">
    <section class="bg-gray-50">
        <div
        class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
        >
        {{-- <div class="mx-auto">
            <div id="download">
                {!! QrCode::size(250)->style('dot')->eye('circle')->backgroundColor(255,255,255)->color(0,0,0)->generate('https://radi.pet/download') !!}
            </div>

            <div  id="memorial" class="hidden">
                {!! QrCode::size(250)->style('dot')->eye('circle')->backgroundColor(255,255,255)->color(0,0,0)->generate('https://radi.pet/memorial/'.$hash) !!}
            </div>
        </div> --}}

        <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                {{-- Descarga la app --}}
                Ingresa desde tu celular
            </h1>

            <p class="mt-4 sm:text-xl/relaxed text-left">
                Lo sentimos, por el momento solo se puede ver en la versión móvil.
                {{-- o descargar la app. <br><br>
                Una vez escaneado el codigo qr y bajada la app.haz click en mostrar QR memorial para escanearlo e ir al memorial directo de la app. --}}
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
              {{-- <button
                id="button"
                class="block w-full rounded bg-red-600 px-12 py-3 text-sm font-medium text-white shadow  focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
              >
                Mostrar QR memorial
              </button> --}}

            </div>
          </div>
        </div>
      </section>

    {{-- <img src="" alt=""> --}}
</div>

<div class="md:hidden">
    <div class="grid grid-cols-12">
        <div class="col-span-6">
            <img class="mx-10" src="{{$memorial->main_photo}}" style="border-radius: 50%;width: 7em;height: 7em;" alt="">
        </div>
        <div class="col-span-6 text-center mr-8 mt-4">
            <h2 class="text-xl">En memoria de</h2>
            <h1 class="text-3xl" style="color:#f1b590">{{$memorial->pets->name}}</h1>
            <p class="text-md"> {{ date('Y', strtotime($memorial->pets->birthday)) }} -  {{ date('Y', strtotime($memorial->pets->date_death)) }} </p>
        </div>
    </div>

    <article class="mx-4 mt-12 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
        <div
            class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
        >

        </div>

        <div>
            <h3 class="mt-4 text-lg font-medium sm:text-xl">
            <p class="hover:underline">Carta para {{$memorial->pets->name}}</p>
            </h3>

            <p class="mt-1 text-sm text-gray-700">
            {{$memorial->letter}}
            </p>

        </div>
        </div>
    </article>

    <h2 class="ml-4 text-xl font-bold my-4">Perfil</h2>

    <article class="mx-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">


    <div class="grid grid-cols-12">
        <div class="col-span-6 text-center mt-4">
            <p class="mt-1 text-sm text-gray-700">
                Nacimiento
            </p>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <p class="font-bold"> {{ date('d/m/Y', strtotime($memorial->pets->birthday)) }}</p>
            </h3>
        </div>

        <div class="col-span-6 text-center mt-4">
            <p class="mt-1 text-sm text-gray-700">
                Fallecimiento
            </p>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <p class="font-bold"> {{ date('d/m/Y', strtotime($memorial->pets->date_death)) }}</p>
            </h3>
        </div>

        <div class="col-span-6 text-center mt-10">
            <p class="mt-1 text-sm text-gray-700">
                Género
            </p>

            @if($memorial->pets->gender == 1)
                <h3 class="mt-4 text-lg font-medium font-bold sm:text-xl">
                    Macho
                </h3>
            @else
                <h3 class="mt-4 text-lg font-medium font-bold sm:text-xl">
                    Hembra
                </h3>
            @endif
        </div>
        <div class="col-span-6 text-center mt-10">
            <p class="mt-1 text-sm text-gray-700">
            Especie
            </p>

            @if($memorial->pets->specie == 1)
                <h3 class="mt-4 text-lg font-medium font-bold sm:text-xl">
                    Gato
                </h3>
            @else
                <h3 class="mt-4 text-lg font-medium font-bold sm:text-xl">
                    Perro
                </h3>
            @endif
        </div>
    </div>

    <p class="text-center mt-6">
        <a target="_blank" href="/pet/{{$memorial->pets->setHiddenId()}}" class="text-center mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Ver Perfil
        </a>
    </p>
    </article>


    @if(!$memorial->comments_disabled)

        <div class="grid grid-cols-12">
            <div class="col-span-8">
                <h2 class="ml-4 text-xl font-bold my-4">Condolencias</h2>
            </div>
            <div  class="col-span-4 text-right pr-4">
                <h2 id="commentshidden" class="ml-4 text-xl  my-4">
                    <i id="iconComments" class="fa-solid fa-chevron-up"></i>
                </h2>
            </div>
        </div>

        <div id="divComments">
            <article class="m-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
                <div class="flex items-start sm:gap-8">
                    <div>
                        <h3 class="mt-4 text-lg font-medium sm:text-xl">
                        <p class="font-bold">Regalale unas palabras de aliento</p>
                        </h3>
                        <p class="mt-6">
                            <a  href="/memorial/{{$memorial->setHiddenId()}}/comments" class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Escribir condolencia
                            </a>
                        </p>
                        {{-- <p>Escribe una condolencia</p> --}}
                    </div>
                </div>
            </article>

            @forelse($memorial->comments as $comment )
                <article class="m-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
                    <div class="flex items-start sm:gap-8">
                    <div>
                        <p class="mt-1 text-sm text-gray-700">
                        {{$comment->date}}
                        </p>
                        <h3 class="mt-4 text-lg capital font-medium sm:text-xl">
                            {{$comment->text}}
                        </h3>

                    </div>
                    </div>
                    <p style="text-align: right !important " class="mt-1  text-gray-700">
                    - {{$comment->user->name}}
                    </p>
                </article>
            @empty
                {{-- <article class="m-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
                    <div class="flex items-start sm:gap-8">
                        <div>
                            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                            <p class="font-bold">No hay condolencias para mostrarte por el momento</p>
                            </h3>
                            {{-- <p>Escribe una condolencia</p> --}
                        </div>
                    </div>
                </article> --}}
            @endforelse
        </div>
    @endif

    @if(!$memorial->question_disabled)
        <div class="grid grid-cols-12">
            <div class="col-span-8">
                <h2 class="ml-4 text-xl font-bold my-4">Conoce a {{$memorial->pets->name}} con preguntas</h2>
            </div>
            <div  class="col-span-4 text-right pr-4">
                <h2 id="questionshidden" class="ml-4 text-xl my-4">
                    <i id="iconQuestions" class="fa-solid fa-chevron-up"></i>
                </h2>
            </div>
        </div>

        <div id="divQuestions">
            @forelse($questions as $question )
                <article class="m-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
                    <div class="flex items-start sm:gap-8">
                        <div >
                            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                            <p class="font-bold">{{$question['q']}}</p>
                            </h3>

                            <p class="mt-1 text-sm text-gray-700">
                                {{$question['r']}}
                            </p>

                        </div>
                    </div>
                </article>
            @empty
            <article class="m-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
                <div class="flex items-start sm:gap-8">
                    <div>
                        <h3 class="mt-4 text-lg font-medium sm:text-xl">
                        <p class="font-bold">No hay preguntas</p>
                        </h3>
                    </div>
                </div>
            </article>
            @endforelse
        </div>
    @endif

    <h2 class="ml-4 text-3xl font-bold my-4">Recuerdos</h2>

    @foreach($memorial->photos as $photo )
        <div class="my-4" data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1500">
            <img src="{{$photo->photo}}" alt="image">
            <p class="m-4 font-bold capital ">
                {{$photo->text}}
            </p>
        </div>

    @endforeach

    <div class="text-center my-24">
            <p><i class="text-3xl fa-solid fa-infinity"></i></p>
            <h1 class="text-2xl">Hasta siempre {{$memorial->pets->name}}</h1>
            <p class="text-center">¡Gracias por ser parte de mi vida!</p>
            <button id="buttonShare" class="mt-4 bg-black hover:bg-black text-white font-bold py-2 px-4 rounded-full">
                Compartir historia
            </button>



                <div
                    id="share"
                    class="hidden m-4  relative overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8">
                    <span
                    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-black via-black to-black"
                    ></span>

                    <div class="sm:flex sm:justify-between sm:gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-black sm:text-xl">
                        Comparte el memorial de {{$memorial->pets->name}} </h3>
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
                        https://radi.pet/memorial/{{$hash}}
                    </p>
                    <button onclick="copyToClipboard('#p1')" class="mt-2 border-black bg-black hover:bg-black hover:border-black text-white font-bold py-2 px-4 rounded-full">
                        Copiar
                    </button>
                    </div>

                    <dl class="mt-6 flex gap-4 sm:gap-6">
                    <div class="flex flex-col-reverse">
                    <dt class="text-sm font-medium text-gray-600">Redes Sociales</dt>

                    <div class="sharing-buttons flex flex-wrap">
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-black bg-black hover:bg-black hover:border-black" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.radi.pet%2Fmemorial%2F%7B%7B%24hash%7D%7D" aria-label="Share on Facebook">
                        <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Facebook</title>
                            <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                            </path>
                        </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-black bg-black hover:bg-black hover:border-black" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.radi.pet%2Fmemorial%2F%7B%7B%24hash%7D%7D&amp;text=Conoce%20la%20historia%20de%20%7B%7B%24memorial-%3Epets-%3Ename%7D%7D" aria-label="Share on Twitter">
                        <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Twitter</title>
                            <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                            </path>
                        </svg>
                        </a>
                        <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-black bg-black hover:bg-black hover:border-black" target="_blank" rel="noopener" href="https://wa.me/?text=Conoce%20la%20historia%20de%20%7B%7B%24memorial-%3Epets-%3Ename%7D%7D%20https%3A%2F%2Fwww.radi.pet%2Fmemorial%2F%7B%7B%24hash%7D%7D" aria-label="Share on Whatsapp" draggable="false" style="">
                        <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                            <title>Whatsapp</title>
                            <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                            </path>
                        </svg>
                        </a>
                    </div>
                        </div>
                    </dl>
                    </div>
                </div>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

<script>
    $("#commentshidden").on('click',function(){
        if( $("#divComments").hasClass('hidden')){
            $("#divComments").removeClass('hidden');
            $("#iconComments").addClass('fa-chevron-up');
            $("#iconComments").removeClass('fa-chevron-down');
        }else{
            $("#divComments").addClass('hidden');
            $("#iconComments").addClass('fa-chevron-down');
            $("#iconComments").removeClass('fa-chevron-up');
        }
    });

    $("#questionshidden").on('click',function(){
        if( $("#divQuestions").hasClass('hidden')){
            $("#divQuestions").removeClass('hidden');
            $("#iconQuestions").addClass('fa-chevron-up');
            $("#iconQuestions").removeClass('fa-chevron-down');
        }else{
            $("#divQuestions").addClass('hidden');
            $("#iconQuestions").addClass('fa-chevron-down');
            $("#iconQuestions").removeClass('fa-chevron-up');
        }
    });

    $("#buttonShare").on('click',function(){
        $("#share").removeClass('hidden');
        $("#buttonShare").addClass('hidden');

    });

    $("#button").on("click",function(){
        $("#download").addClass('hidden');
        $("#memorial").removeClass('hidden');
        $("#button").addClass('hidden');

    });

    function copyToClipboard(element) {
        console.log($.trim($(element).text()));
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim($(element).text())).select();

        document.execCommand("copy");
        $temp.remove();
        $("#modalShare").addClass('hidden');

    }

</script>

