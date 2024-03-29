<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Memorial de {{$memorial->pets->name}} </title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css">
   <style>
    @page { margin: 0px;height: 791px; }
    body {
    }
    html, body {
        height: 100%;
    }
    .center {
    margin-left: auto;
    margin-right: auto;
    }
   </style>
</head>

<body style="background:black;color:white;">
    <table class="center">
        <tr>
            <td>
                <img width="45" height="45" style="padding: 1em;margin-top:6em;" src="https://i.ibb.co/cNxCq2C/logo-white.png" alt="">
            </td>
        </tr>
    </table>
    <table class="center">
        <tr>
            <td>
                <img style="border-radius: 10%;width: 25em;height: 25em;" class="center" src="{{$memorial->photo1}}" alt="">
            </td>
        </tr>
    </table>

    <div class="text-center">
        <h2 style="color:white;padding-top: 1em;font-size: 1.3em;" >En memoria de</h2>
        <h1 style="color: #e3c387;font-size: 4em;text-transform: capitalize;">{{$memorial->pets->name}}</h1>
        <p style="color:#e3c387;font-size: 1.4em;"> {{ date('Y', strtotime($memorial->pets->birthday)) }} - {{ date('Y', strtotime($memorial->pets->date_death)) }} </p>
    </div>
    <table class="center" style="margin-top:3em;">
        <tr>
            <td>
                {{-- <img class="center" style="width: 13em;height: 13em;" src="data:image/png;base64, {!! base64_encode(QrCode::size(250)->style('dot')->eye('circle')->backgroundColor(255,255,255)->color(227,195,135)->generate('https://radi.pet/memorial/'.$memorial->setHiddenId()) ) !!}"> --}}

                <img class="center" style="width: 13em;height: 13em;" src="data:image/png;base64, {!! base64_encode(QrCode::size(250)->style('dot')->eye('circle')->backgroundColor(0,0,0)->color(255,255,255)->generate('https://radi.pet/memorial/'.$memorial->setHiddenId()) ) !!}">
            </td>
        </tr>
    </table>

    </body>
</html>
