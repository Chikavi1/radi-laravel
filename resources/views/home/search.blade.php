<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>

<meta name="viewport" content="width=device-width, initial-scale=1">

{!! SEO::generate() !!}

<div class="grid-cols-12 grid">
    <div class="col-span-12  p-4 lg:col-span-7 lg:p-20">
      <a href="/" class="text-gray-500 font-bold">Radi Pets</a>
      <h2 class="text-2xl font-bold md:text-4xl md:mb-4 "> Descubre que lugares aceptan a tu mascota</h2>
      <p class="mb-12">Trabajamos para encontrar más lugares pet friendly, si conoces uno o eres dueño puedes registrarlo <a class="font-bold text-purple-700" href="/places-register">aquí</a>.</p>


      <div class="w-full mt-12">
        <ng-autocomplete
          [data]="cities"
          [searchKeyword]="keyword"
          placeholder="Selecciona una Ciudad"
          (selected)='selectEvent($event)'
          (inputChanged)='onChangeSearch($event)'
          (inputFocused)='onFocused($event)'
          [itemTemplate]="itemTemplate"
          [notFoundTemplate]="notFoundTemplate">
        </ng-autocomplete>

        <ng-template class="bg-red-900" #itemTemplate let-item>
        <a [innerHTML]="item.title"></a>
        </ng-template>

        <ng-template #notFoundTemplate let-notFound>
        <div [innerHTML]="notFound"></div>
        </ng-template>
      </div>

      <div class="grid-cols-12 mt-8 grid">
        <div class="col-span-6 m-2 md:col-span-3" (click)="setType(1)">
          <img src="../../../assets/img/plato.png" class="mx-auto" alt="">
          <p class="text-gray-500 text-center"   [ngClass]="{'selectedType' : type == 1 }" >Restaurantes</p>
        </div>
        <div class="col-span-6 m-2 md:col-span-3 " (click)="setType(2)">
          <img src="../../../assets/img/cama.png" class="mx-auto" alt="">
          <p class="text-gray-500 text-center" [ngClass]="{'selectedType' : type == 2 }" >Hoteles</p>
        </div>
        <div class="col-span-6 m-2 md:col-span-3 " (click)="setType(3)">
          <img src="../../../assets/img/playa.png" class="mx-auto" alt="">
          <p class="text-gray-500 text-center" [ngClass]="{'selectedType' : type == 3 }" >Público</p>
        </div>
        <div class="col-span-6 m-2 md:col-span-3 " (click)="setType(0)">
          <img src="../../../assets/img/radi-32.png" class="mx-auto" alt="">
          <p class="text-gray-500 text-center" [ngClass]="{'selectedType' : type == 0 }" >Todos</p>
        </div>
      </div>

  <a *ngIf="cityTitle" [href]="'/results?type='+type+'&lat='+latitude+'&lng='+longitude" type="button" class="mt-2 py-2 px-4 flex justify-center items-center  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
    Buscar
  </a>

  <p class="text-gray-600 mt-6">¿Quieres ver más funcionalidades? 👀 <a href="/download" class="text-purple-800 font-bold" >Descarga la app.</a></p>

    </div>
    <div class="hidden lg:inline-block lg:col-span-5 h-screen">
      <img class="h-screen w-full" src="https://radi-images.s3.us-west-1.amazonaws.com/radi-places.webp" alt="image sticker radi pets">
    </div>
  </div>

