@include('layouts.nav')
@if ($message = Session::get('success'))
<section class="bg-green-900 text-white">
    <div
      class="mx-auto max-w-screen-xl px-4 py-32 lg:flex h-screen lg:items-center"
    >
    <img class="w-72 h-72 mx-auto" src="https://i.ibb.co/BGN992R/Nombre-de-tu-mascota-8.png" alt="">
      <div class="mx-auto max-w-3xl text-center">
        <h1
          class="text-white bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
        >
        {{ $message }}
        </h1>

        <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
            Agradecemos tu compra y queremos informarte que hemos enviado un correo electrónico con los detalles de tu envío. ¡Gracias por confiar en nosotros!        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
            href="/"
          >
           Ir al inicio
          </a>


        </div>
      </div>
    </div>
  </section>
  @endif


  @if ($message = Session::get('error'))
  <section class="bg-red-900 text-white">
    <div
      class="mx-auto max-w-screen-xl px-4 py-32 lg:flex h-screen lg:items-center"
    >
    <img class="w-72 h-72 mx-auto" src="https://i.ibb.co/d6kM24J/Nombre-de-tu-mascota-7.png" alt="">
      <div class="mx-auto max-w-3xl text-center">
        <h1
          class="text-white bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
        >
        {{ $message }}
        </h1>

        <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">

            Parece que se produjo un error al procesar el pago. Te recomendamos intentarlo nuevamente.
            </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
            href="/checkout"
          >
           Volver a intentar
          </a>


        </div>
      </div>
    </div>
  </section>
  @endif

