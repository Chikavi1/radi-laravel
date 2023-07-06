@include('layouts.nav')
    <div style="background: black; padding:1em;">
        <img class="mx-auto rounded-md mt-4"  src="https://i.ibb.co/q9c6gc3/Whats-App-Image-2023-07-05-at-00-12-21.jpg" alt="">
          <h1 class="mt-12 text-center block pb-2 mb-5 text-4xl font-extrabold leading-none tracking-normal text-transparent md:text-6xl md:tracking-tight bg-clip-text bg-gradient-to-r from-green-400 to-purple-500">
            Crea un recuerdo especial
          </h1>
          <div class="md:px-44">
              <p class="text-white px-4 text-xl">
                Te ofrecemos una forma única y conmovedora de recordar a tu querida mascota que ya no está con nosotros. Nuestros cuadros con QR y fotos personalizados te permiten construir un memorial lleno de amor y recuerdos, manteniendo vivo el legado de tu compañero peludo.            </p>
          </div>

          <section class="grid grid-cols-1 gap-20 px-4 py-24 mx-auto max-w-7xl lg:px-16 xl:px-24 md:grid-cols-2 lg:grid-cols-3">
            <div>
                <p><i class="text-white text-3xl fa-solid fa-truck-fast"></i></p>
              <h3 class="mb-3 mt-4 text-lg font-medium leading-tight text-white">Envios gratis</h3>
              <p class="text-base leading-relaxed text-white">
                Te enviamos el marco de forma gratuita. Nos aseguramos de que tu memorial llegue a tus manos sin ningún costo adicional. Queremos que este proceso sea lo más cómodo y gratificante posible, para que puedas honrar a tu mascota amada sin preocupaciones.

              </p>
            </div>
            <div>
                <p><i class="text-white text-3xl fa-regular fa-heart"></i></p>
              <h3 class="mb-3 mt-4  text-lg font-medium leading-tight text-white">Experiencia unica</h3>
              <p class="text-base leading-relaxed text-white">
                Nuestra experiencia comienza con la selección de las fotos más emotivas y significativas de tu mascota. Capturamos cada travesura juguetona, cada mirada llena de amor y cada instante de complicidad para preservar su esencia en cada imagen.


              </p>
            </div>
            <div>
            <p><i class="text-white text-3xl fa-solid fa-check"></i></p>
              <h3 class="mb-3 mt-4  text-lg font-medium leading-tight text-white">Calidad</h3>
              <p class="text-base leading-relaxed text-white">
                Nuestro equipo se encargará de imprimir tu cuadro con la más alta calidad y atención al detalle. Utilizamos materiales duraderos y resistentes para garantizar que tu memorial dure toda la vida.

            </p>
            </div>
          </section>


        <section style="color:white !important;">
            <div class="pb-64 ">
              <div class="max-w-7xl px-4 pt-20 mx-auto text-center sm:text-left">
                <h1 class="mb-3 text-4xl font-bold leading-tight text-white md:text-5xl md:font-extrabold">Paquetes</h1>
                <p class="mb-10 text-lg text-white md:text-xl">Configuralo en menos de 5 min · </p>
              </div>
            </div>
            <div class="max-w-7xl pb-20 mx-auto -mt-48">
              <div class="grid grid-cols-1 gap-16 lg:grid-cols-3 sm:gap-8">
                <div class="border-0 rounded-none shadow-none card sm:shadow-md sm:rounded-lg">
                  <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                    <p class="mb-1 text-lg font-semibold text-white">Gratis</p>
                    <p class="pb-0 my-2  text-4xl font-extrabold text-white md:pb-2">$0</p>
                    <p class="text-base text-white" x-text="selected === 'monthly' ? 'billed monthly' : 'billed yearly'">Gratis</p>
                    <a href="#" class="w-full mt-6 btn btn-light btn-lg text-purple-800 font-bold text-2xl">Iniciar</a>
                  </div>
                  <div class="flex flex-col flex-grow p-6 space-y-3">
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Email APIs, SMTP Relay, and Webhooks</p>
                    </div>

                  </div>
                </div>
                <div class="border-0 rounded-none shadow-none card sm:shadow-md sm:rounded-lg">
                  <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                    <div>
                      <p class="mb-1 text-lg font-semibold text-white">Basico</p>
                      <p class="my-2  text-4xl font-extrabold text-white" x-text="selected === 'monthly' ? '$9' : '$89'">$99.00 MXN</p>
                      <p class="text-base text-white" x-text="selected === 'monthly' ? 'user / month' : 'user / year'">Único pago </p>
                    </div>
                    <a href="#" class="w-full mt-6 btn btn-light btn-lg text-purple-800 font-bold text-2xl">Comprar</a>
                  </div>
                  <div class="flex flex-col flex-grow p-6 space-y-3">
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Email APIs, SMTP Relay, and Webhooks</p>
                    </div>
                  </div>
                </div>
                <div class="border-0 rounded-none shadow-none card sm:shadow-md sm:rounded-lg">
                  <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                    <div>
                      <p class="mb-1 text-lg font-semibold text-white">Premium</p>
                      <p class="my-2  text-4xl font-extrabold text-white" x-text="selected === 'monthly' ? '$21' : '$189'">$399.00 MXN</p>
                      <p class="text-base text-white" x-text="selected === 'monthly' ? 'billed monthly' : 'billed yearly'">Único pago y envio incluido en México</p>
                    </div>
                    <a href="#" class="w-full mt-6 btn btn-light btn-lg text-purple-800 font-bold text-2xl">Comprar</a>
                  </div>
                  <div class="flex flex-col flex-grow p-6 space-y-3">
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Email APIs, SMTP Relay, and Webhooks</p>
                    </div>
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Suppression Management</p>
                    </div>
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Email Tracking and Analytics</p>
                    </div>
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">99.99% Guaranteed Uptime SLA</p>
                    </div>


                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Instant Chat Support</p>
                    </div>
                    <div class="flex items-start">
                      <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-green-600">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                      <p class="text-white">Custom Features</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
              <div class="lg:py-6 lg:pr-16">
                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div>
                      <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                        <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                          <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                        </svg>
                      </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                  </div>
                  <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold text-white">Step 1</p>
                    <p class="text-white">
                      All recipes are written using certain conventions, which define the characteristics of common ingredients. The rules vary from place to place.
                    </p>
                  </div>
                </div>
                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div>
                      <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                        <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                          <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                        </svg>
                      </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                  </div>
                  <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold text-white">Step 2</p>
                    <p class="text-white">
                      The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
                    </p>
                  </div>
                </div>
                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div>
                      <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                        <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                          <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                        </svg>
                      </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                  </div>
                  <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold text-white">Step 3</p>
                    <p class="text-white">
                        Una vez que hayas completado el diseño, nuestro equipo se encargará de imprimir tu cuadro con la más alta calidad y atención al detalle. Utilizamos materiales duraderos y resistentes para garantizar que tu memorial dure toda la vida.                    </p>
                  </div>
                </div>
                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div>
                      <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                        <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                          <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                        </svg>
                      </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                  </div>
                  <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold text-white">Step 4</p>
                    <p class="text-white">
                      If one examines precultural libertarianism, one is faced with a choice: either accept rationalism or conclude that context is a product.
                    </p>
                  </div>
                </div>
                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div>
                      <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                        <svg class="w-6 text-white" stroke="currentColor" viewBox="0 0 24 24">
                          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="mb-2 text-lg font-bold text-white">Success</p>
                    <p class="text-white"></p>
                  </div>
                </div>
              </div>
              <div class="relative">
                <img
                  class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
                  src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                  alt=""
                />
              </div>
            </div>
          </div>

        <h2 class="text-center text-white text-5xl">¿Por qué usar Radi Pets?</h2>
        <section class="px-4 py-24 mx-auto max-w-7xl">
            <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
              <div>
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Clear overview for efficient tracking</h2>
                <p class="mb-5 text-base text-center text-white sm:text-left md:text-lg">
                    Acompáñanos en este viaje de homenaje mientras te mostramos cómo podemos crear cuadros con QR y fotos de nuestra mascota fallecida para construir un memorial lleno de amor y recuerdos.
                </p>
                <a href="#" class="w-full btn btn-dark btn-lg sm:w-auto">Learn More</a>
              </div>
              <div class="w-full h-full py-48 bg-gray-200"></div>
            </div>
            <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
              <div class="order-none md:order-2">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Decide how you integrate Payments</h2>
                <p class="mb-5 text-base text-center text-white sm:text-left md:text-lg">
                  Love to code? Next to our ready-made and free plugins you can use our expansive yet simple API; decide how you integrate Payments and build advanced and reliable products yourself from
                  scratch.
                </p>
                <a href="#" class="w-full btn btn-dark btn-lg sm:w-auto">Learn More</a>
              </div>
              <div class="w-full h-full py-48 bg-gray-200"></div>
            </div>
          </section>

            <div class=" py-4">
              <h1 class="text-center text-white text-4xl">Radi Pets</h1>
              <p class="text-center text-white ">Powered by</p>
            </div>
    </div>

