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
                    <div class="col-span-4">
                        <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="{{$product->attributes->image}}" alt="" />
                    </div>
                    <div class="col-span-8">
                        <p class="font-semibold mt-4">{{$product->name}}  {{$product->attributes->color}} </p>
                        <p class=" text-gray-400">{{$product->attributes->pet_name?$product->attributes->pet_name:'Sin Personalizar'}}</p>
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
              <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
                {{-- <img class="w-14 object-contain" src="https://enviosperros.com/img/ep/aliados/redpack.svg" alt="" /> --}}
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Envío estándar</span>
                  <p>Gratis</p>
                  <p class="text-slate-500 text-sm leading-6">Entrega de 3 a 7 días hábiles</p>
                </div>
              </label>
            </div>

          </form>
        </div>

        <form role="form" action="{{ route('cart.buy') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ 'pk_test_51KsA9rBp6uwr6porp9J8YwjOQER0i3Yakw8ovYpZU7H0GqwTZCNrnsUAetok7Giot72v8pHAKpWAFyLjVBBLYO0x00DIFUA2qm' }}" id="payment-form">
            @csrf
        {{-- {!! Form::open(['route' => ['cart.buy']],['id'=>'payment-form',
        'class' => 'require-validation p-6  flex items-center justify-center','data-cc-on-file' => 'false',' data-stripe-publishable-key'=> "{{ env('STRIPE_KEY') }}",'files' => true]) !!} --}}

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
                    <input required type="text"  maxlength="16"  id="card-no"  class="card-number w-full rounded-md border border-gray-200 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                    placeholder="xxxx-xxxx-xxxx-xxxx" />
                    <div class=" pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">

                    </div>
                </div>
                <input required type="text" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '')"  class="card-expiry-month w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="MM" />

                <input required type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '')"  class="card-expiry-year w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="YYYY" />
                <input required type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '')"  class="card-cvc w-1/6 flex-shrink-0 rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="CVC" />
                </div>
                <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Dirección de Envio</label>

            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-6">
                        <input required type="text" id="billing-address" name="billing-address" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Calle y número" />

                    </div>
                <div class="col-span-6">
                        <input required type="text" id="billing-neighborhood" name="billing-neighborhood" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Colonia o barrio" />

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
                <p class="text-2xl font-semibold text-gray-900">${{ Cart::getTotal()}}</p>
                </div>
            </div>
            <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Ordenar</button>
            </div>
         {{-- {!! Form::close() !!} --}}
        </form>

      </div>

      @else
      <img class="mx-auto rounded-lg mt-16" src="https://i.pinimg.com/564x/9b/c3/94/9bc394d271c6a44bb1b02d987423aa35.jpg" alt="no ">
      <h2 class="text-center mt-16 text-3xl">No tienes productos en el carrito</h2>
      @endif


      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form = $(".require-validation"),
    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      console.log($('.card-number').val(),
          $('.card-cvc').val(),
          $('.card-expiry-month').val(),
         $('.card-expiry-year').val())

      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-expiry-month').val(),
          exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
      if (response.error) {
          $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
              console.log(response.error);

      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
      }
  }
});
</script>

      <script>
//         function ValidateCreditCardNumber() {

//         var ccNum = document.getElementById("cardNum").value;
//         var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
//         var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
//         var amexpRegEx = /^(?:3[47][0-9]{13})$/;
//         var discovRegEx = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;
//         var isValid = false;

//         if (visaRegEx.test(ccNum)) {
//         isValid = true;
//         } else if(mastercardRegEx.test(ccNum)) {
//         isValid = true;
//         } else if(amexpRegEx.test(ccNum)) {
//         isValid = true;
//         } else if(discovRegEx.test(ccNum)) {
//         isValid = true;
//         }

//         if(isValid) {
//         alert("Thank You!");
//         } else {
//         alert("Please provide a valid Visa number!");
//         }
// }


      </script>
