<!DOCTYPE html>
<html>
<head>
    <title>Adopta a {{$pet->name}}
    </title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css">
   <style>
    @page { margin: 0px;height: 791px; }
    body {
    }
    html, body {
        height: 100%;
    }
   </style>
</head>

<body style="background:#fdfdfd;">
<table style="width:100%">

  <tr >
    <th style="width: 100%;height: 791px;background:#643c83;">
        <h1 style="font-size:3.5em;text-align:center;color:white;margin-bottom:1em;">
            Adóptame
        </h1>
        <p style="text-align: center;">
            <img style="border-radius:1em;width:75%" src="{{$pet->photo}}" alt="">
        </p>
        <div style="text-align:center;color:white">

            <p style="font-size: 4em;"> {{ ucfirst($pet->name)}}</p>
            @if ($pet->sterelized)
                <p style="font-size: 1.7em;">Esterilizado</p>
            @endif
            <p style="font-size: 1.5em;">{{$pet->gender==2?'Macho':'Hembra'}}   Talla
                    @switch($pet->size)
                        @case('mn')
                            <span class="status">Mini</span>
                        @break
                        @case('sm')
                            <span class="status">Pequeño</span>
                        @break
                        @case('md')
                            <span class="status">Mediano</span>
                        @break
                        @case('lg')
                            <span class="status">Grande</span>
                        @break
                        @case('xl')
                            <span class="status">Extra Grande</span>
                        @break
                        @default
                            <span class="status">N/A</span>
                    @endswitch
            </p>
            <p  style="font-size: 1.3em;">Nació {{$age}}</p>

        </div>
    </th>
    <th style="width: 100%;color:#3b1687">
        <h1 style="font-size:2.5em;margin-top:1em;">Escanea para saber más información</h1>

        <img style="margin-top:4em;"  src="data:image/png;base64, {!! base64_encode(QrCode::size(250)->style('dot')->eye('circle')->color(59,22,135)->generate('https://radi.pet/pet/'.$pet->setHiddenId()  )) !!} ">
        <h2>

            <img src="img/logo-blue.png" style="margin-top: 3em;" width="60" height="60" alt="">
            <h2 style="color:#37147d;font-bold">Radi Pets</h2>
        </h2>
    </th>
  </tr>

</table>

    {{-- <div style="padding:1em;width:44%; display:inline-block;">
        <h1 style="margin-top:7em;font-size:3.5em;text-align:center">
            Adoptame
        </h1>
        <p style="text-align: center;">
            <img style="border-radius:1em;width:75%" src="https://static.fundacion-affinity.org/cdn/farfuture/PVbbIC-0M9y4fPbbCsdvAD8bcjjtbFc0NSP3lRwlWcE/mtime:1643275542/sites/default/files/los-10-sonidos-principales-del-perro.jpg" alt="">
        </p>
        <div style="text-align:center;">

            <p style="font-size: 2em;">Scobby</p>
            <p style="font-size: 1.7em;">Protocolo completo</p>
            <p style="font-size: 1.5em;">Macho | Talla Mediana</p>
        </div>
    </div>
    <div style="width:40%; display:inline-block;margin-top:-20em !important;">
        <div style="text-align:center;margin-top:-13em">
            <h1 style="font-size:2.5em;color:#3b1687;">Escanea para saber más</h1>
            <h2 style="font-size:1.5em;">Radi Pets</h2>
            <p> </p>
            <p> </p>
            <p></p>
        </div>
        <div style="text-align: center;">
            <img style="margin-top:-6em;"  src="data:image/png;base64, {!! base64_encode(QrCode::size(250)->style('dot')->eye('circle')->color(59,22,135)->generate('https://radi.pet/validate_pet/')) !!} ">
        </div>

    </div> --}}

</body>
</html>
