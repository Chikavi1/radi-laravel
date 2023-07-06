<!DOCTYPE html>
<html>
<head>
    <title>Memorial de Milo </title>
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
                <img width="45" height="45" style="padding: 1em;margin-top:1em;" src="https://i.ibb.co/cNxCq2C/logo-white.png" alt="">
            </td>
        </tr>
    </table>
    <table class="center">
        <tr>
            <td>
                <img style="padding:.5em;border-radius: 15% !important;width: 15em;height: 15em;object-fit: cover;" src="https://i.ibb.co/P5RPZjz/Whats-App-Image-2023-07-04-at-15-17-28-1.jpg" alt="">
            </td>
            <td>
                <img style="padding:.5em;border-radius: 15% ;width: 15em;height: 15em;object-fit: cover;" src="https://i.ibb.co/g6hX4Hq/Whats-App-Image-2023-07-04-at-15-17-29.jpg" alt="">
            </td>
          </tr>
          <tr>
            <td>
                <img style="padding:.5em;border-radius: 15% ;width: 15em;height: 15em;object-fit: cover;" src="https://i.ibb.co/Nr5Dnpb/Whats-App-Image-2023-07-04-at-15-17-31-2.jpg" alt="">
            </td>
            <td>
                <img style="padding:.5em;border-radius: 15% ;width: 15em;height: 15em;object-fit: cover;" src="https://i.ibb.co/SvFYyLP/Whats-App-Image-2023-07-04-at-15-17-31-1.jpg" alt="">

            </td>
          </tr>
    </table>
    <div class="text-center">
        <h2 style="color:#a9acad;padding-top: 1em;font-size: 1.3em;" >En memoria de</h2>
        <h1 style="color: #e3c387;font-size: 3em;">Milo</h1>
        <p style="color:#a9acad">2017 - 2023</p>
    </div>
    <table class="center" style="margin-top:1em;">
        <tr>
            <td>
                <img class="center" style="width: 13em;height: 13em;" src="data:image/png;base64, {!! base64_encode(QrCode::size(250)->style('dot')->eye('circle')->backgroundColor(0,0,0)->color(227,195,135)->generate('https://radi.pet/memorial') ) !!}">
            </td>
        </tr>
    </table>

    </body>
</html>
