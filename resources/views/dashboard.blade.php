<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Inicio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-900 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-white text-gray-900 text-3xl">
                   Mascotas
                </div>

                <div class="grid grid-cols-12 gap-4 px-4">
                    <div class="col-span-12  md:col-span-4">
                        <a href="/my-pets">
                            <article
                                class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                                >
                                <img
                                alt="Office"
                                src="https://images.unsplash.com/photo-1494913148647-353ae514b35e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80"
                                class="h-56 w-full object-cover"
                                />

                                <div class="p-4 sm:p-6">
                                    <h3 class="text-lg font-medium dark:text-white text-gray-900">
                                    Mis Mascotas
                                    </h3>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        Mira el perfil de tus mascotas
                                    </p>


                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-span-12  md:col-span-4">
                        <a href="/pet">
                                <article
                                class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                                >
                                <img
                                alt="Office"
                                src="https://images.unsplash.com/photo-1583334506575-bd01c6b92e57?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80"
                                class="h-56 w-full object-cover"
                                />

                                <div class="p-4 sm:p-6">
                                    <h3 class="text-lg font-medium dark:text-white text-gray-900">
                                    Mascotas en adopción
                                    </h3>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        Descubre las mascotas que estan en adopción.
                                    </p>
                                </div>
                            </article>
                        </a>

                    </div>


                    <div class="col-span-12  md:col-span-4">

                        <a href="/lost">
                            <article
                            class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                            >
                            <img
                            alt="Office"
                            src="https://images.unsplash.com/photo-1531263939119-4022c6cf273b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1175&q=80"
                            class="h-56 w-full object-cover"
                            />

                            <div class="p-4 sm:p-6">
                                <h3 class="text-lg font-medium dark:text-white text-gray-900">
                                Mascotas Desaparecidas
                                </h3>

                                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                    Descubre las mascotas que estan desaparecidas.
                                </p>


                            </div>
                            </article>
                        </a>

                    </div>

                </div>

                <div class="p-6 dark:text-white text-gray-900 text-3xl">
                    Descubre
                 </div>
                 <div class="grid grid-cols-12 gap-4 px-4">
                     <div class="col-span-12  md:col-span-6">

                         <a href="/results">
                         <article
                         class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                         >
                         <img
                         alt="Office"
                         src="https://radi-images.s3.us-west-1.amazonaws.com/radi-places.webp"
                         class="h-56 w-full object-cover"
                         />

                         <div class="p-4 sm:p-6">
                             <h3 class="text-lg font-medium dark:text-white text-gray-900">
                                Lugares Pet Friendly
                             </h3>

                             <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                Descubre los lugares Pet Friendly que están cerca de ti.
                            </p>


                        </div>
                    </article>
                </a>

                     </div>
                     <div class="col-span-12  md:col-span-6">

                         <a href="/org">
                         <article
                         class="overflow-hidden rounded-lg border border-gray-100 dark:bg-gray-900 bg-white shadow-sm"
                         >
                         <img
                         alt="Office"
                         src="https://images.unsplash.com/photo-1588736203973-99005e00af2b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                         class="h-56 w-full object-cover"
                         />

                         <div class="p-4 sm:p-6">
                             <h3 class="text-lg font-medium dark:text-white text-gray-900">
                                Albergues
                             </h3>

                             <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                Descubre los albergues o refugios que están cerca de ti.

                            </p>


                        </div>
                    </article>
                </a>

                     </div>

                 </div>
            </div>
        </div>
    </div>

</x-app-layout>
