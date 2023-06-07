   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">

        <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
        rel="stylesheet"
        />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {!! SEO::generate() !!}

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-EVX7CGZWCM"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-EVX7CGZWCM');
        </script>
    </head>


<header  class="my-6 ">
    <div class=" container z-50 px-2 sm:px-8 lg:px-10 xl:px-10 mx-auto">
            <div class="header-wrapper flex items-center justify-between">

                <div class="header-logo">
                    <h1 class="font-semibold lg:ml-12 text-black leading-relaxed text-lg">
                      <a class="sm:pl-4 ml-4" href="/">Radi Pets</a>
                    </h1>
                </div>

                <div class="toggle md:hidden">
                    <button aria-label="Name" >
                        <svg
                            id="navmobile"
                            class="h-6 w-6 fill-current text-black"
                            fill="none" strokeLinecap="round"
                            strokeLinejoin="round" strokeWidth="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="navbar hidden md:block ">
                    <ul class="flex space-x-8 text-sm font-semibold">
                      <li> <a href="/results">Lugares</a></li>
                      <li> <a href="/adoptions">En adopción</a></li>
                      <li> <a href="/lost">Desaparecidos</a></li>
                      <li> <a href="/org">Albergues</a></li>
                      {{-- <li> <a href="/placas">Placas</a></li> --}}

                      <!-- <li> <a href="/clients">Clientes</a></li>
                        <li> <a href="/partners">Socios</a></li>
                        <!-- <li> <a href="/blogs">Blog</a></li> -->

                        @auth
                            <li>
                                <a href="/dashboard" class="cta bg-purple-900 hover:bg-purple-600 px-5 py-3 rounded text-white font-normal">Inicio</a>
                            </li>
                        @else
                            <li>
                                <a href="/login" class="cta bg-purple-900 hover:bg-purple-600 px-5 py-3 rounded text-white font-normal">Iniciar sesión</a>
                            </li>
                        @endauth
                    </ul>
                </div>

            </div>
        </div>

            <ul id="navbar" class="z-50 hidden bg-white w-full h-screen max-h-screen absolute flex flex-col p-3 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">

                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/results" >Lugares</a>
                </li>

                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/adoptions" >En adopción</a>
                </li>

                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/lost" >Desaparecidos</a>
                </li>
                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/org" >Albergues</a>
                </li>

                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/placas" >Placas</a>
                </li>

                <li>
                </li>

                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/terms">Terminos y condiciones</a>
                </li>

                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/privacy">Privacidad</a>
                </li>
                <li>
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4" href="/contact">Contactanos</a>
                </li>
                <li>
                    @auth
                        <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4 text-purple-900 font-bold" href="/dashboard">Inicio</a>
                    @else
                    <a  class="block px-4 py-2 ml-6 md:p-2 lg:px-4 text-purple-900 font-bold" href="/login">Inicia sesión</a>
                    @endauth
                </li>
            </ul>
</header>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    function blockAdblockUser() {
    if ($('.myTestAd').height() == 0) {
        window.location = 'http://example.com/AdblockNotice.html';
    }
}

$(document).ready(function(){
    blockAdblockUser();
});
</script>

<script>
    $('#navmobile').on('click',function(){
        console.log($("#navbar"));
        if($("#navbar").hasClass('hidden')){
            $("#navbar").removeClass('hidden');
        }else{
            $("#navbar").addClass('hidden');
        }
    });
</script>
