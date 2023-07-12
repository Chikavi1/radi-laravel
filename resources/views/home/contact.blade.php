@include('layouts.nav')

<div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <p class="font-normal text-sm leading-3 text-indigo-700 hover:text-indigo-800 cursor-pointer pb-2">Acerca de nosotros</p>
        <div class="flex lg:flex-row flex-col lg:gap-8 sm:gap-10 gap-12">
            <div class="w-full lg:w-6/12">
                <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">Somos una Startup que ama a las mascotas</h2>
                <p class="font-normal text-base leading-6 text-gray-600 mt-6">Originaria de México, creemos que las mascotas son el mejor amigo de los humanos. Por eso desarrollamos Radi una aplicación que ayuda a los dueños de las mascotas a darle una mejor vida con recomendaciones, recordatorios y herramientas para prevenir enfermedades, así como hacer reservaciones, una sección para reportar a tu mascota perdida o darle una segunda oportunidad a una mascota que está en uno de nuestros albergues verificados.</p>
            </div>
            <div class="w-full lg:w-6/12">
                <img class="lg:block hidden w-full" src="https://i.ibb.co/RjNH7QB/Rectangle-122-1.png" alt="people discussing on board" />
                <img class="lg:hidden sm:block hidden w-full" src="https://i.ibb.co/16fPqrg/Rectangle-122-2.png" alt="people discussing on board" />
                <img class="sm:hidden block w-full" src="https://i.ibb.co/Jxhpxh6/Rectangle-122.png" alt="people discussing on board" />
            </div>
        </div>



    </div>


<div class="container mx-auto pt-16">

        <div class="lg:flex">
            <div class="xl:w-2/5 lg:w-2/5 bg-indigo-700 py-16 xl:rounded-bl rounded-tl rounded-tr xl:rounded-tr-none">
                <div class="xl:w-5/6 xl:px-0 px-8 mx-auto">
                    <h1 class="xl:text-4xl text-3xl pb-4 text-white font-bold">Contáctanos</h1>
                    <p class="text-xl text-white pb-8 leading-relaxed font-normal lg:pr-4">¿Quieres ser parte de Radi? ¿Estás interesado en patrocinarnos? ¿Tienes alguna sugerencia? ¿Alguna queja? ¿Agradecimiento? No importa, contáctame, estaré contento de poder ayudarte.
                      <br> <br> Te invitamos que nos sigas para que conozcas nuestras ofertas y funcionalidades que vamos agregando.
                    </p>

                    <div class="flex items-center my-4 mx-4 space-x-4 sm:mt-0">
                        <a target="_blank" href="https://www.instagram.com/radipets/" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
                          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                            ></path>
                          </svg>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/radipetsmx" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
                          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                            ></path>
                          </svg>
                        </a>
                      </div>

                    <div class="flex pb-4 items-center">
                        <div>

                        </div>
                        <p class="pl-4 text-white text-base">+52 33 1764 2715</p>
                    </div>
                    <div class="flex items-center">
                        <div>

                        </div>
                        <p class="pl-4 text-white text-base">luisrojas@radi.pet</p>
                    </div>
                    <p class="text-lg text-white pt-10 tracking-wide">
                        San pedro Tlaquepaque,<br />
                        Jalisco,México.
                    </p>
                    <a href="javascript:void(0)">
                        <!-- {/* <p class="text-white pt-16 font-bold tracking-wide underline">View Job Openings</p> */} -->
                    </a>
                </div>
            </div>
           <img src="https://images.unsplash.com/photo-1444212477490-ca407925329e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80"/>
        </div>
    </div>

    @include('layouts.footer')
