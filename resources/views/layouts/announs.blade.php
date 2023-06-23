<div
  class="bg-indigo-600 px-4 py-3 text-white sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">

  @php
     $variaty = rand(1, 4);
  @endphp

    @if($variaty == 1)
        <p class="text-center font-medium sm:text-left">
        Descarga la app, para tener todas las funcionalidades y generar puntos.
        </p>

        <a
            class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-indigo-600 transition hover:bg-white/90 focus:outline-none focus:ring active:text-indigo-500 sm:mt-0"
            href="/download">
            Descargar
        </a>
    @elseif($variaty == 2)
        <p class="text-center font-medium sm:text-left">
            Mira las mascotas desaparecidas, si lo necesitas crea un reporte gratis.
        </p>

        <a
            class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-indigo-600 transition hover:bg-white/90 focus:outline-none focus:ring active:text-indigo-500 sm:mt-0"
            href="/lost/create">
            Ver
        </a>
    @elseif($variaty == 3)
    <p class="text-center font-medium sm:text-left">
        Genera dinero con Radi pets, trabaja en tus tiempos libres.
    </p>

    <a
        class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-indigo-600 transition hover:bg-white/90 focus:outline-none focus:ring active:text-indigo-500 sm:mt-0"
        href="/placas-distribuidor">
        Ver más
    </a>
    @else
        <p class="text-center font-medium sm:text-left">
        Protege a tu mascota, guarda la información y recibe notificaciones si alguien la encuentra.
        </p>

        <a
            class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-indigo-600 transition hover:bg-white/90 focus:outline-none focus:ring active:text-indigo-500 sm:mt-0"
            href="/placas">
            Ver más
        </a>
    @endif
    {!! SEO::generate() !!}



  {{-- reporta la desaparicio --}}

  {{-- placa --}}
  {{-- <p class="text-center font-medium sm:text-left">
    Protege a tu mascota,guarda la información y recibe notificicaciones si alguien la encuentra.
    </p>

    <a
        class="mt-4 block rounded-lg bg-white px-5 py-3 text-center text-sm font-medium text-indigo-600 transition hover:bg-white/90 focus:outline-none focus:ring active:text-indigo-500 sm:mt-0"
        href="/placas">
        Ver más
    </a> --}}
</div>
