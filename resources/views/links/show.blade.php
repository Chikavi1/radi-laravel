@include('layouts.nav')

    @if(isset($link) == 1)
    <section class="max-w-lg px-4 py-20 mx-auto space-y-1 text-center">
        <img class="mx-auto w-1/4" src="{{asset('img/logo-blue.png')}}" />
        <h2 class="text-lg font-medium text-gray-800">Cargando link ...</h2>
        <p class="text-gray-600">
            Te vamos a redireccionar a la página
        </p>
      </section>

    @else
        <div *ngIf="link.length == 0">
            <h1>No existe link</h1>
        </div>
    @endif

<script>

    @if(isset($link) == 1)
        setTimeout(() => {
            window.location.replace("{{ $link->url }}");
        }, 1200);
    @endif
</script>
