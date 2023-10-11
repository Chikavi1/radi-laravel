@include('layouts.nav')

@if(count($products) != 0)

    <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">

      </div>
      <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
        <div class="px-4 pt-8">
          <p class="text-xl font-medium">Detalle de la orden</p>
          <p class="text-gray-400">Verifica que tu pedido sea el correcto.</p>
          <div class="mt-8 space-y-3 h-52 overflow-hidden overflow-y-auto rounded-lg border bg-white px-2 py-4 sm:px-6">
            @foreach ($products as $product)
                <div class="grid grid-cols-12" >
                    <div class="col-span-3">
                        <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="{{$product->attributes->image}}" alt="" />
                    </div>
                    <div class="col-span-8">
                        <p class="font-semibold mt-4">{{$product->name}}</p>
                        <p class=" text-gray-400">{{$product->attributes->pet_name}}</p>
                        <p class="text-lg font-bold">{{$product->price}}</p>

                        {!! Form::open(['route' => ['cart.remove',$product->id]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

                        <button class="text-red-600">Eliminar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach

          </div>

          <p class="mt-8 text-lg font-medium">Envios</p>
          <form class="mt-5 grid gap-6">
            <div class="relative">
              <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
              <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
                {{-- <img class="w-14 object-contain" src="https://enviosperros.com/img/ep/aliados/redpack.svg" alt="" /> --}}
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Envío estándar</span>
                  <p>Gratis</p>
                  <p class="text-slate-500 text-sm leading-6">Entrega de 3 a 7 días hábiles</p>
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
              <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_2">
                {{-- <img class="w-14 object-contain" src="https://enviosperros.com/img/ep/aliados/estafeta.svg" alt="" /> --}}
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Envio express</span>
                  <p>$149.00 MXN</p>
                  <p class="text-slate-500 text-sm leading-6">Entrega de 1 a 2 días hábiles</p>
                </div>
              </label>
            </div>
          </form>
        </div>

        {!! Form::open(['route' => ['cart.buy']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

            <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
            <p class="text-xl font-medium">Detalles de pago</p>
            <p class="text-gray-400">Completa tu pago</p>
                <div class="">
                    <div class="grid grid-cols-12 gap-2">
                        <div class="col-span-6">
                            <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                            <div class="relative">
                                <input required type="text" id="email" name="email" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="tucorreo@radi.pet" />
                                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">

                                </div>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <label for="cellphone" class="mt-4 mb-2 block text-sm font-medium">Celular</label>
                            <div class="relative">
                                <input required maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" type="text" id="cellphone" name="cellphone" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="52 1234 5678" />
                                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">

                                </div>
                            </div>
                        </div>
                    </div>



                <label for="name" class="mt-4 mb-2 block text-sm font-medium">Nombre</label>
                <div class="relative">
                <input required type="text" id="name" name="name" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm uppercase shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Nombre completo" />

                </div>
                <label for="card-no" class="mt-4 mb-2 block text-sm font-medium">Detalles Tarjeta</label>
                <div class="flex gap-2">
                <div class="relative w-7/12 flex-shrink-0">
                    <input required type="text"  maxlength="16" onkeyup=imposeMinMax(this) onblur="ValidateCreditCardNumber()"  id="card-no" name="card-no" class="w-full rounded-md border border-gray-200 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                    placeholder="xxxx-xxxx-xxxx-xxxx" />
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">

                    </div>
                </div>
                <input required type="text" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="credit-expiry" class="w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="MM" />

                <input required type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="credit-expiry" class="w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="YYYY" />
                <input required type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="credit-cvc" class="w-1/6 flex-shrink-0 rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="CVC" />
                </div>
                <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Dirección de Envio</label>

            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-6">
                        <input required type="text" id="billing-address" name="billing-address" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Calle y número" />

                    </div>
                <div class="col-span-6">
                        <input required type="text" id="billing-neighborhood" name="billing-address" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Colonia o barrio" />

                </div>
                <div class="col-span-6">
                    <input required type="text" name="billing-city" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Ciudad"  />

                </div>
                <div class="col-span-6">
                    <input required maxlength="7" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" type="text" name="billing-zip" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Código Postal"  />

                </div>
            </div>


                <div class="flex flex-col sm:flex-row">

                </div>

                <!-- Total -->
                <div class="mt-6 border-t border-b py-2">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Subtotal</p>
                    <p class="font-semibold text-gray-900">${{ Cart::getTotal()}}
                    </p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Envio</p>
                    <p class="font-semibold text-gray-900">$0.00</p>
                </div>
                </div>
                <div class="mt-6 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gray-900">$408.00</p>
                </div>
            </div>
            <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Ordenar</button>
            </div>
         {!! Form::close() !!}

      </div>

      @else
      <h2 class="text-center">No tienes productos en el carrito</h2>
      @endif


      <script>
        function ValidateCreditCardNumber() {

        var ccNum = document.getElementById("cardNum").value;
        var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
        var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
        var amexpRegEx = /^(?:3[47][0-9]{13})$/;
        var discovRegEx = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;
        var isValid = false;

        if (visaRegEx.test(ccNum)) {
        isValid = true;
        } else if(mastercardRegEx.test(ccNum)) {
        isValid = true;
        } else if(amexpRegEx.test(ccNum)) {
        isValid = true;
        } else if(discovRegEx.test(ccNum)) {
        isValid = true;
        }

        if(isValid) {
        alert("Thank You!");
        } else {
        alert("Please provide a valid Visa number!");
        }
}


      </script>
