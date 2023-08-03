@if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="bg-red-600 px-4 py-3 text-white">
            <p class="text-center text-sm font-medium">
                {{ $error }}
            </p>
        </div>
    @endforeach
@endif



<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>
<html translate="no">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="flex flex-wrap w-full">
    <div class="flex flex-col w-full md:w-1/2">
        <div class="flex justify-center pt-12 md:justify-start md:pl-12 md:-mb-24">
            <a href="/" class="p-4 text-xl font-bold text-white  w-24 h-24">
               <img src="../img/logo-blue.png" alt="">
            </a>
        </div>
        <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">

            <p class="text-3xl text-center">
               Registrate
            </p>
            <form method="POST" action="{{ route('prebusinessregister') }}" class="flex flex-col pt-3 md:pt-8">
                @csrf
                <div class="flex flex-col pt-4">
                    <div class="flex relative ">

                        <input type="text" required name="name" id="design-login-email" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre del negocio"/>

                    </div>
                    </div>
                    <div class="flex flex-col pt-4 mb-12">
                        <div class="flex relative ">

                            <input type="email" required name="email" id="design-login-email" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Correo"/>
                        </div>

                        <div class="flex relative mt-4 ">




                        <select required class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="type">
                            <option value="">
                                Selecciona una opción
                            </option>
                            <option value="2">
                                Parque o escuela canina
                            </option>
                            <option value="3">
                                Estilista
                            </option>
                            <option value="4">
                                Veterinaria
                            </option>
                            <option value="5">
                                Lugar Petfriendly
                            </option>
                            <option value="6">
                                Guarderia
                            </option>
                        </select>


                        </div>
                    </div>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-center text-red-600">{{$error}}</div>
                        @endforeach
                    @endif


                        <button type="submit" class="mt-4 w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-black shadow-md hover:text-black hover:bg-white focus:outline-none focus:ring-2">
                            <span class="w-full">
                                Registrarme
                            </span>
                        </button>
                    </form>

                    <h4>Te contactaremos por correo para pedir más información, te pedimos seas paciente.</h4>

                    <div class="text-center">

                        <p class="mt-20">
                            Conoces los beneficios?
                            <a href="/business" class="dark:text-white text-blue-800 font-bold" >
                                ver más
                            </a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 shadow-2xl">
                <img class="hidden object-cover w-full h-screen md:block" src="https://images.unsplash.com/photo-1581887936036-3f4f7f0b6679?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=462&q=80"/>
            </div>
        </div>
