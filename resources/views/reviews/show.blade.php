@include('layouts.nav')
<style>
    .circle {
  background-color:#fff;
  border:1px solid green;
  height:30px;
  border-radius:50%;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
  width:30px;
  display:inline-block;
}

.circle-selected{
  background-color:rgb(58, 227, 15);
  border:1px solid rgb(58, 227, 15);
  height:30px;
  border-radius:50%;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
  width:30px;
  display:inline-block;
}


</style>


    <div class="grid grid-cols-12 gap-3 lg:ml-20">
        <div class="col-span-12 lg:col-span-5 lg:shadow-md" >
            <div class="w-full bg-green-700 h-72 rounded-md">
                <h2 class="text-center text-white text-3xl py-12 px-4">
                    ¿Cómo fue tu experiencia en {{$place->title}}?
                </h2>
            </div>
            <img src="{{$place->image}}" class="-mt-20 lg:-mt-28 rounded-md w-52 lg:w-80 mx-auto" alt="image place">
        <div class="px-4 lg:px-2 pt-12">
            <h1 class="text-2xl font-bold">{{$place->title}}</h1>
            <p>{{$place->city}}</p>
            <p class="mt-6 mb-8">

                <a href="/places/{{$hash}}" class=" font-bold text-purple-800">
                    Ver lugar pet friendly
                </a>
            </p>
            </div>
        </div>

    @if(!$review)
        <div class="col-span-12 lg:col-span-6 p-4  lg:ml-6 lg:shadow-md">
            <h2 class="text-bold text-xl">Califica el lugar</h2>
            <p>Es muy importante tu opinión para que podamos darle el mejor servicio posible.</p>

            {!! Form::open(['route' => ['reviews.store',["id" => $hash]]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}


                <div id="reviews" style="display:inline-block !important;width: 100%;" class="mt-4">
                    <div id="ra"  class="circle text-center rw-c" >1</div>
                    <div id="r2"  class="circle text-center rw-c">2</div>
                    <div id="r3" class="circle text-center rw-c">3</div>
                    <div id="r4" class="circle text-center rw-c">4</div>
                    <div id="r5" class="circle text-center rw-c">5</div>
                    <div id="r6" class="circle text-center rw-c">6</div>
                    <div id="r7" class="circle text-center rw-c">7</div>
                    <div id="r8" class="circle text-center rw-c">8</div>
                    <div id="r9" class="circle text-center rw-c">9</div>
                    <div id="r10"  class="circle text-center rw-c">10</div>
                </div>

                <div id="score_div" class="text-center hidden">
                    <p>Calificación:</p>
                    <p id="score">
                    </p>
                    <input type="hidden" name="score" id="score_input" >
                    <input type="hidden" name="parking" id="parking_input" >
                    <input type="hidden" name="card" id="card_input" >
                    <input type="hidden" name="food" id="food_input" >
                    <input type="hidden" name="special" id="special_input" >
                    <input type="hidden" name="recommend" id="recommend_input" >

                </div>


                {!! Form::textarea('comments', null, ["required"=>"true","rows"=>"5","cols"=>"20",'id'=>'description','class' => 'w-full border mt-4 rounded px-4 w-full border-indigo-500']); !!}

                    <p class="mt-2">¿Tiene estacionamiento el lugar?</p>
                    <p class="my-2">
                        <span id="parking_1" onClick="setParking(1)" class="park px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                            Si
                        </span>
                        <span id="parking_2" onClick="setParking(2)" class="park px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                            No
                        </span>
                        <span id="parking_3" onClick="setParking(3)" class="park px-4 py-2 mx-2  text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                            No lo se
                        </span>
                    </p>
                <p>¿Acepta pagos con tarjeta?</p>
                <p class="my-2">
                    <span id="card_1" onClick="setCard(1)" class="cards px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        Si
                    </span>
                    <span id="card_2" onClick="setCard(2)" class="cards px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No
                    </span>
                    <span id="card_3" onClick="setCard(3)" class="cards px-4 py-2 mx-2  text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No lo se
                    </span>
                </p>
                <p>¿Cuenta con comida para mascotas?</p>
                <p class="my-2">
                    <span id="food_1" onClick="setFood(1)" class="food px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        Si
                    </span>
                    <span id="food_2" onClick="setFood(2)" class="food px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No
                    </span>
                    <span id="food_2" onClick="setFood(3)" class="food px-4 py-2 mx-2  text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No lo se
                    </span>
                </p>
                <p>¿Cuenta con un espacio especial para mascotas?</p>
                <p class="my-2">
                    <span id="special_1" onClick="setSpecial(1)" class="special px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        Si
                    </span>
                    <span id="special_2" onClick="setSpecial(2)" class="special px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No
                    </span>
                    <span id="special_3" onClick="setSpecial(3)" class="special px-4 py-2 mx-2  text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No lo se
                    </span>
                </p>
                <p>¿Recomendarías este lugar a otra persona con mascota?</p>
                <p class="my-2">
                    <span id="recommend_1" onClick="setRecommend(1)"  class="recommend px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        Si
                    </span>
                    <span id="recommend_2" onClick="setRecommend(2)"  class="recommend px-4 py-2 mx-2 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                        No
                    </span>
                </p>

                <button class="bg-green-300 mx-auto mt-4 hover:bg-green-400 text-green-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <span>Calificar</span>
                </button>
            {!! Form::close() !!}
        </div>
    @else
        <div class="col-span-12 lg:col-span-6 p-4  lg:ml-6 lg:shadow-md">
            <div class="text-center">
            <h2 class="text-4xl">Tu Reseña</h2>
            <img src="{{Auth::user()->photo}}" class="w-44 h-44 mx-auto rounded-full mt-6" alt="image profile" >

                <h2 class="mt-2 font-bold">{{Auth::user()->name}}</h2>
                <p class="text-yellow-300 text-2xl mt-6">
                    {{$review->score}} <i class="fa-sharp fa-solid fa-star "></i>
                </p>
                <p class="my-4 italic">"{{$review->comments}}"</p>
            </div>
        </div>
    @endif
</div>

<script>

    $(".rw-c").on('click',(e)=> {
        console.log(e.target.innerHTML);
        $("#reviews").addClass("invisible");
        $("#score").append(e.target.innerHTML);
        $("#score_div").removeClass("hidden");
        $("#score_input").val(e.target.innerHTML)

    })

    function setCard(id){
        $(".cards").removeClass("bg-blue-800 text-white");
        $("#card_"+id).addClass("bg-blue-800 text-white");
        $("#card_input").val(id);

    }
    function setParking(id){
        $(".park").removeClass("bg-blue-800 text-white");
        $("#parking_"+id).addClass("bg-blue-800 text-white");
        $("#parking_input").val(id);

    }

    function setFood(id){
        $(".food").removeClass("bg-blue-800 text-white");
        $("#food_"+id).addClass("bg-blue-800 text-white");
        $("#food_input").val(id);

    }

    function setSpecial(id){
        $(".special").removeClass("bg-blue-800 text-white");
        $("#special_"+id).addClass("bg-blue-800 text-white");
        $("#special_input").val(id);

    }

    function setRecommend(id){
        $(".recommend").removeClass("bg-blue-800 text-white");
        $("#recommend_"+id).addClass("bg-blue-800 text-white");
        $("#recommend_input").val(id);

    }



</script>
