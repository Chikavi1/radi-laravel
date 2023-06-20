@include('layouts.nav')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<section class="px-4 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
        <h1 class="md:ml-6 mb-6 text-2xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
            Sé distribuidor de Radi Pets
        </h1>
        <h5 class="text-xl">¡Conviértete en distribuidor de placas QR y NFC de Radi Pets y descubre la libertad de ser tu propio jefe!
        </h5>

    </div>

</section>

<img src="{{asset('img/placa.png')}}" data-aos="fade-up"  data-aos-easing="linear"
data-aos-duration="1500"  class="mx-auto h-92" alt="">


<section class="px-4 mx-auto max-w-7xl">
    <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2  gap-x-10 md:gap-x-24">
      <div>
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Independencia financiera</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
            Como distribuidor, tú controlas tus ganancias. No hay límites para tu éxito y puedes establecer tus propios precios y estrategias de venta. <br><br> Olvídate de los horarios de oficina y las rutinas monótonas. Ser tu propio jefe te brinda la libertad de organizar tu tiempo como desees y trabajar desde donde quieras.
         </p>
        {{-- <a href="#" class="w-full btn btn-dark btn-lg sm:w-auto">Learn More</a> --}}
      </div>
      <img data-aos="fade-up-left"  data-aos-easing="linear"
      data-aos-duration="1500"  class="w-full h-full  " src="{{asset('img/finance.jpg')}}" alt="">
    </div>
    <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div class="order-none md:order-2">
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Crecimiento en una industria en auge</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
            La industria de las mascotas está experimentando un crecimiento acelerado y constante. Únete a ella y aprovecha el gran potencial de mercado para expandir tu negocio.
        </p>
      </div>
      <img src="{{asset('img/increase.jpg')}}"  data-aos="fade-up-right"  data-aos-easing="linear"
      data-aos-duration="1500" class="w-full h-full bg-gray-200">
    </div>
</section>

<section class="px-4 mx-auto max-w-7xl mt-10">
    <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2  gap-x-10 md:gap-x-24">
      <div>
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Apoyo y capacitación</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
            En Radi Pets, valoramos a nuestros distribuidores y nos aseguramos de proporcionarles todo el apoyo y la capacitación necesarios para alcanzar el éxito. Te brindaremos herramientas de marketing, materiales promocionales y asesoramiento personalizado para ayudarte a maximizar tus resultados.         </p>
        {{-- <a href="#" class="w-full btn btn-dark btn-lg sm:w-auto">Learn More</a> --}}
      </div>
      <img data-aos="fade-up-left"  data-aos-easing="linear"
      data-aos-duration="1500"  class="w-full h-full  " src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fGNhcGFjaXRhY2lvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div class="order-none md:order-2">
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Impacto positivo</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
            Al unirte a Radi Pets, estarás contribuyendo al bienestar y la seguridad de las mascotas. Ayudarás a crear conciencia sobre la importancia de la identificación y la conexión entre las mascotas y sus dueños.        </p>
      </div>
      <img src="https://images.unsplash.com/photo-1602308006427-f1c718609718?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"  data-aos="fade-up-right"  data-aos-easing="linear"
      data-aos-duration="1500" class="w-full h-full bg-gray-200">
    </div>
</section>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
          Precios
        </p>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">

        Precios justos
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        Conoce el listado de precios y la cantidad de placas, si quieres más de 20 placas, por favor contáctanos para darte un mejor precio.        </p>
    </div>

    <div class="grid grid-cols-12  gap-10">
        <div class="col-span-10 md:col-span-4">
            <div class="text-center">
                <div class="text-lg font-semibold">Basic</div>
                    <div class="flex items-center justify-center mt-2">
                    <div class="mr-1 text-5xl font-bold">$1399</div>
                    <div class="text-gray-700"> MXN</div>

                    </div>
                    <div class="mt-2 space-y-3">
                    <div class="text-gray-700">5 Placas QR y NFC</div>
                    <div class="text-gray-700">Envios gratis</div>

                    </div>
               </div>
              <a href="https://buy.stripe.com/14kg1o8ea2lE5OwdQS" class="inline-flex items-center justify-center w-full h-12 px-6 mt-6 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded shadow-md hover:bg-gray-900 focus:shadow-outline focus:outline-none">
                Comprar
              </a>
        </div>

        <div class="col-span-10 md:col-span-4">
            <div class="text-center">
                <div class="text-lg font-semibold">Start</div>
                    <div class="flex items-center justify-center mt-2">
                    <div class="mr-1 text-5xl font-bold">$2590</div>
                    <div class="text-gray-700"> MXN</div>

                    </div>
                    <div class="mt-2 space-y-3">
                    <div class="text-gray-700">10 Placas QR y NFC</div>
                    <div class="text-gray-700">Envios gratis</div>
                    </div>
               </div>
              <a href="https://buy.stripe.com/14kg1o8ea2lE5OwdQS" class="inline-flex items-center justify-center w-full h-12 px-6 mt-6 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded shadow-md hover:bg-gray-900 focus:shadow-outline focus:outline-none">
                Comprar
              </a>
        </div>
        <div class="col-span-10 md:col-span-4">
            <div class="text-center">
                <div class="text-lg font-semibold">Pro</div>
                    <div class="flex items-center justify-center mt-2">
                    <div class="mr-1 text-5xl font-bold">$4980</div>
                    <div class="text-gray-700"> MXN</div>

                    </div>
                    <div class="mt-2 space-y-3">
                    <div class="text-gray-700">20 Placas QR y NFC</div>
                    <div class="text-gray-700">Envios gratis</div>

                    </div>
               </div>
              <a href="https://buy.stripe.com/14kg1o8ea2lE5OwdQS" class="inline-flex items-center justify-center w-full h-12 px-6 mt-6 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded shadow-md hover:bg-gray-900 focus:shadow-outline focus:outline-none">
                Comprar
              </a>
        </div>

    </div>
</div>



<div class="px-4 py-20 bg-lightblue">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <h2 class="w-full mr-8 text-3xl font-extrabold leading-9 md:w-1/3">
            Preguntas frecuentes
        </h2>
        <dl class="w-full md:w-2/3">
            <dt class="mb-4">
                <h3 class="text-xl font-semibold">
                    We already have ongoing projects. Will Valohai easily integrate with them?
                </h3>
            </dt>
            <dd class="mb-16">
                <p>
                    Running existing machine learning projects in Valohai is very simple! Integration only requires adding a valohai.yaml configuration file. Moving projects in and out of Valohai is easy – the integration is only the configuration file.
                </p>
            </dd>
            <dt class="mb-4">
                <h3 class="text-xl font-semibold">
                    How do you compare to other data science platforms?
                </h3>
            </dt>
            <dd class="mb-16">
                <p>
                    We don’t. Valohai isn’t a data science platform; it&#x27;s a Machine Learning Management Platform that handles the whole ML pipeline from feature extraction, to training of your model and to deploying it into production in a reproducible manner. Data science platforms offer hosted notebooks and AutoML solutions.
                </p>
            </dd>
            <dt class="mb-4">
                <h3 class="text-xl font-semibold">
                    Does Valohai charge for computation?
                </h3>
            </dt>
            <dd class="mb-16">
                <p>
                    Depends. Most of our customers use their own cloud and thus pay for usage according to their own agreements. Valohai doesn&#x27;t charge anything on top of the per-user license fee. If you don&#x27;t have a cloud provider, you can use our AWS, GCP and Azure accounts, and we&#x27;ll only charge you for what you use.
                </p>
            </dd>
        </dl>
    </div>
</div>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>




















<script>
    AOS.init();
  </script>

@include('layouts.footer')
