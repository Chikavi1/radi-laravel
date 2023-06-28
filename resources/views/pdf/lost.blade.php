<!DOCTYPE html>
<html>
<head>
    <title>Ayúdanos a encontrar a {{$lost->pet->name}}
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
    <th style="width: 100%;height: 791px;background:#d30303;">
        <h1 style="font-size:2.5em;text-align:center;color:white;margin-bottom:1em; ">
            Mascota desaparecida
        </h1>
        <p style="text-align: center;">
            <img style="border-radius:1em;width:75%" src="{{$lost->pet->photo}}" alt="">
        </p>
        <div style="text-align:center;color:white">
            <p style="font-size: 3em;">{{$lost->pet->name}}</p>
            @if($lost->rewards)
                <p style="font-size:1.3em;text-align:center;color:white;margin-bottom:1em;">Se ofrece recompensa</p>
            @endif
            <p style="font-size: 1.2em;text-align:left;padding:0em 2.5em;">
                {{$lost->note}}
            </p>
        </div>
    </th>
    <th style="width: 100%;color:#d30303">
        <p>Contacta a</p>
        <h2 style="font-size:2.5em;">{{$lost->cellphone}}</h2>
        <h1 style="font-size:1.5em;margin-top:1em;">Escanea para saber más <br> información</h1>
        <a target="_blank" href="{{'../lost/'.$lost->setHiddenId()}}">
            <img style="margin-top:4em;"  src="data:image/png;base64, {!! base64_encode(QrCode::size(250)->style('dot')->eye('circle')->color(211,3,3)->generate('https://radi.pet/lost/'.$lost->setHiddenId()  )) !!} ">
            <h2 style="color:#d30303;font-size:1.3em;margin-top:2em;">Radi Pets</h2>
        </a>
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
            <h1 style="font-size:2.5em;color:#d30303;">Escanea para saber más</h1>
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
