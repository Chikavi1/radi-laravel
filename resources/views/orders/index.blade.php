@include('layouts.nav')

@if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

@if ($message = Session::get('error'))
<div class="bg-red-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
    crossorigin="anonymous"></script>


    {{-- <div class="grid grid-cols-12 gap-4">
        <div class="md:col-start-2 md:col-span-10 col-">
            <ins class="adsbygoogle mx-auto"
            style="display:block"
            data-ad-client="ca-pub-7789760036582954"
            data-ad-slot="8479090430"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        </div>
    </div> --}}

    <section class="container px-6 mx-auto">

        <div class="sm:flex sm:items-center sm:justify-between">

            <div>

                <div class="flex items-center gap-x-3 mt-6">
                    <h2 class="text-lg font-medium text-gray-800 ">Ordenes</h2>
                </div>

                <p class="mt-1 text-sm text-gray-500  ">Listado de las ordenes.</p>
            </div>

            <div class="flex items-center mt-4 gap-x-3">
                {{-- <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3098_154395)">
                        <path d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832" stroke="currentColor" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3098_154395">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <span>Import</span>
                </button> --}}

                <a class="open flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span>
                        Crear Orden</span>
                </a>
            </div>
        </div>

        {{-- <div class="mt-6 md:flex md:items-center md:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                    Pendientes
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Adoptados
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    En Proceso
                </button>
            </div>

            <div class="relative flex items-center mt-4 md:mt-0">


                <input type="text" placeholder="Buscar" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div> --}}

        @if(count($products) != 0)
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 ">
                                <thead class="bg-gray-50 dark:bg-gray-800 ">
                                    <tr>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Fecha
                                        </th>

                                        <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <button class="flex items-center gap-x-3 focus:outline-none">
                                                <span>Nombre</span>
                                            </button>
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Sku
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Atributos
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Info usuario
                                        </th>


                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Dirección
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Total
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Estado
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Notas
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Acciones</th>


                                        <th scope="col" class="relative py-3.5 px-4">
                                            <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($products as $pet)
                                        <tr>

                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                {{$pet->id}} <br>

                                                Fecha Pedido: <br>
                                                {{$pet->createdAt}}                                                <br>
                                                Fecha Max: <br>
                                                <span class="text-green-900 font-bold">
                                                   {{ Carbon\Carbon::parse($pet->createdAt)->addDays(7); }}
                                                </span>
                                             </td>

                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                <div>

                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400 capital">{{$pet->product_name}}</p>



                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                               {{$pet->sku}}
                                               @if($pet->sku == '1')
                                                <p>Placas ID</p>
                                               @elseif($pet->sku == '2')
                                                <p>Pecheras NFC</p>
                                               @elseif($pet->sku == '3')
                                               <p>Subscripción Caja</p>

                                               @endif

                                            </td>

                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                <p>{{$pet->pet_name}}</p>
                                                <br>
                                                Color: {{$pet->color}} <br>
                                                Size:  {{$pet->size}} <br>
                                                Gender:  {{$pet->gender}} <br>
                                                Specie:  {{$pet->specie}} <br>
                                                Allergies:  {{$pet->allergies}}
                                            </td>

                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                {{strtoupper($pet->user_name) }} <br>
                                                {{$pet->email}} <br>
                                                {{$pet->phone}}
                                            </td>


                                            <td class="px-4 py-4 text-sm w-56">
                                                <div>
                                                    @if($pet->shipping == 'express')
                                                    <i class="fa-solid fa-truck-fast text-green-500"></i>
                                                        @endif
                                                    {{$pet->address}}
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    {{$pet->total}}
                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                   @if($pet->status == 1)
                                                       Pendiente de Pago
                                                    @elseif($pet->status == 0)
                                                        Eliminado
                                                   @elseif($pet->status == 2)
                                                       Pagado
                                                   @elseif($pet->status == 3)
                                                       En Proceso de creación
                                                   @elseif($pet->status == 4)
                                                   <span class="text-green-900 font-bold">
                                                       Listo
                                                   </span>
                                                   @elseif($pet->status == 5)
                                                       Enviado
                                                   @elseif($pet->status == 6)
                                                       Entregado
                                                   @elseif($pet->status == 7)
                                                       Cancelado
                                                   @endif
                                                </p>
                                            </td>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                {{$pet->notes}}
                                            </th>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                @if($pet->sku == 1)
                                                    <a target="_blank" href="/generateLogoPlaca/{{$pet->pet_name}}/{{$pet->color}}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 ">
                                                        <i class="fa-solid fa-r"></i>
                                                    </a>
                                                    <a target="_blank" href ="/generateQrPlaca/{{$pet->id}}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 ">
                                                            <i class="fa-solid fa-qrcode"></i>
                                                    </a>
                                                @endif

                                                <a target="_blank" href="/generateThanks/{{$pet->user_name?$pet->user_name:'null'}}/{{$pet->pet_name}}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 ">
                                                    <i class="fa-solid fa-person-praying"></i>
                                                </a>

                                                <a class="open px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 ">
                                                        <i class="fa-solid fa-pen-to-square w-6 h-6"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- {{ $products->links() }} --}}
        @else
            <h2 class="py-44 text-center font-bold ">No tienes Ordenes
            </h2>

        @endif
    </section>

    {!! Form::open(['route' => ['order.create']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

    <section id="sectionmodal" class="w-screen h-screen flex items-center justify-center bg-white">
        <div id="modalOverlay" style="display:none;"
        >
             <div id="modal" class="rounded-2xl max-w-5xl">
                  <div class="flex py-2 w-full items-center justify-center border-b">
                       <h1 class="pt-4 text-xl text-black font-semibold text-center pb-4">Ordenar Pedido</h1>

                  </div>
                  <div class="p-12">
                   <div class="bg-white  rounded-lg shadow sm:max-w-5xl sm:w-full sm:mx-auto sm:overflow-hidden">
                       <div class="px-4 py-8 sm:px-10">

                           <div class="mt-6">
                               <div class="w-full space-y-6">
                                   <div class="w-full">

                                    <div class="grid grid-cols-12 gap-3 ">
                                        <div class="col-span-3 ">
                                            <input name="quantity" min="1" type="number" value="1" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre usuario"/>
                                        </div>
                                        <div class="col-span-9">
                                            <select name="sku" class="block px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-full focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option value="0001">
                                                    Placa de identificación
                                                </option>
                                                <option value="0002">
                                                    Pechera
                                                </option>
                                                <option value="0003">
                                                    Caja de subscripción
                                                </option>

                                            </select>
                                        </div>
                                    </div>



                                    <div class="grid grid-cols-12 gap-3 my-8">
                                        <div class="col-span-12">
                                            <input name="pet_name"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre mascota"/>
                                        </div>
                                        <div class="col-span-3">
                                            <select name="color" class="block px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-full focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option value="blue">
                                                    Azul
                                                </option>
                                                <option value="pink">
                                                    Rosa
                                                </option>
                                                <option value="black">
                                                    Negro
                                                </option>
                                                <option value="red">
                                                    Rojo
                                                </option>
                                                <option value="green">
                                                    Verde
                                                </option>
                                            </select>

                                        </div>
                                        <div class="col-span-3">
                                            <select name="size" class="block px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-full focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option value="mn">
                                                    Mini
                                                </option>
                                                <option value="sm">
                                                    Pequeño
                                                </option>
                                                <option value="md">
                                                    Mediano
                                                </option>
                                                <option value="lg">
                                                    Grande
                                                </option>
                                                <option value="xl">
                                                    Extragrande
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-span-3">
                                            <select name="gender" class="block px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-full focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option value="dog">
                                                    Perro
                                                </option>
                                                <option value="cat">
                                                    Gato
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-span-3">
                                            <select name="specie" class="block px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-full focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option value="boy">
                                                    Macho
                                                </option>
                                                <option value="girl">
                                                    Hembra
                                                </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class=" relative my-4">
                                        <textarea name="allergies"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Alergias o detalles"></textarea>
                                        </div>
                                    <div class="grid grid-cols-12 gap-3 mt-8">
                                        <div class="col-span-4">
                                            <input name="user_name"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre usuario"/>
                                        </div>
                                        <div class="col-span-4">
                                            <input name="email"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Correo usuario"/>
                                        </div>
                                        <div class="col-span-4">
                                            <input name="phone"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Celular usuario"/>
                                        </div>

                                    </div>

                                    <div class="grid grid-cols-12 gap-3 mt-8">
                                        <div class="col-span-9">
                                            <input name="address"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Dirección de entrega"/>
                                        </div>
                                        <div class="col-span-2">
                                            <select name="shipping"   class="block px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-52 focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                                <option value="normal">
                                                    Normal
                                                </option>
                                                <option value="express">
                                                    Express
                                                </option>

                                            </select>
                                    </div>

                                    </div>


                                       <div class=" relative my-4">
                                           <textarea name="notes"  type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Notas de compra o envio"></textarea>
                                           </div>
                                       </div>

                                    </div>
                                       <div class="w-full">

                                           <div class="w-full">

                                               <div>
                                                   <span class="block w-full rounded-md shadow-sm">
                                                       <button  class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                           Ordenar
                                                       </button>
                                                   </span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="px-4 py-6 border-t-2 border-gray-200  sm:px-10">
                                       <p id="close" class="text-xl font-bolf leading-5 text-red-500">
                                          Cerrar
                                       </p>
                                   </div>
                               </div>

                  </div>
             </div>
        </div>
    </section>
{!! Form::close() !!}





<style>
    #modalOverlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.4);
  z-index:9999;
}

#modal {
  position: fixed;
  width: 90%;
  top: 55%;
  left: 50%;
  text-align: center;
  background-color: #fafafa;
  box-sizing: border-box;
  opacity: 0;
  transform: translate(-50%,-50%);
  transition: all 300ms ease-in-out;
}

#modalOverlay.modal-open #modal {
  opacity: 1;
  top: 50%;
}
</style>

    <script>

        $('.open').click(function() {
        $('#modalOverlay').show().addClass('modal-open');
        });


        $('#close').click(function() {
        var modal = $('#modalOverlay');
        modal.removeClass('modal-open');
        setTimeout(function() {
            modal.hide();
        },200);
        });

    </script>

@include('layouts.footer')


