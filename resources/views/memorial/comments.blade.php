@include('layouts.nav')

@if($comment)
    <h2 class="m-5">Tu comentario</h2>
    <article class="m-4 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
            <div>
                <p class="mt-1 text-sm text-gray-700">
                    {{ date('d/m/Y', strtotime($comment->createdAt)) }}
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

    <p class="text-center">

        <a  href="/memorial/{{$hash}}" class=" mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Regresar al memorial
        </a>
    </p>

@else
    <div class="mx-4" >
        {!! Form::open(['route' => ['home.createCommment']], ['class' => 'grid grid-cols-6 gap-4 mt-12' ,'files' => true]) !!}
            <h2>Agrega unas palabras de aliento.</h2>
            <input type="hidden" name="hash" value="{{$hash}}">
            <textarea required class="flex-1 mt-4 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="comment" placeholder="Ingresa unas palabras" name="text" rows="5" cols="40"></textarea>


            <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Enviar
            </button>
        {!! Form::close() !!}

    </div>
@endif


