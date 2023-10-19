<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <head>
    <style>
      body {
        font-family: uber move text, helveticaneue, Helvetica, Arial, sans-serif
      }
    </style>
  </head>
  <body>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style=";border:0;border-collapse:collapse;border-spacing:0" bgcolor="#d6d6d5">
      <tbody>
        <tr>
          <td align="center" style="display:block">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:0;border-collapse:collapse;border-spacing:0;max-width:700px">
              <tbody>
                <tr>
                  <td>

                    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;text-align:left;">
                            <div class="m_-995294407785604879hide414"><img src="https://i.ibb.co/BsjTgjs/tabla-fondo-radi-pets-10.png" width="700" height style="clear:both;display:block;height:auto;max-width:100%;outline:none;text-decoration:none;width:700px" border="0" alt tabindex="0"></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td >
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="background-color:#144F60;border-collapse:collapse;table-layout:fixed;width:100%">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="margin:0 auto;max-width:560px;width:100%">
                              <tbody>
                                <tr>
                                  <td style="padding:30px 14px 7px;direction:ltr;text-align:left;color:white !important;font-size:44px;font-weight:500;line-height:50px">Tu pago en Radi Pets fue exitoso</td>
                                </tr>
                                <tr>
                                  <td style="padding:7px 14px 23px;direction:ltr;text-align:left;color:white;font-size:20px;font-weight:400;line-height:26px">
                                    <div>Te enviaremos un enlace con la información de la guía. Si tienes alguna pregunta o necesitas más detalles, te sugerimos que nos sigas en <a style="color:white;font-weight: bold;" href="https://www.instagram.com/radipets/">Instagram</a>  o  <a style="color:white;font-weight: bold;" href="https://www.facebook.com/radipetsmx">Facebook</a> para obtener más información.</div>
                                  </td>
                                </tr>
                                <tr>

                                </tr>
                                <p style="text-align: center !important;">

                                  <small style="color:white; font-size:.5em;text-align:center;">
                                    La imagen de la placa es meramente representativa y no necesariamente corresponde a la placa que se le entregará.
                                  </small>
                                </p>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="background-color:#144F60;border-collapse:collapse;table-layout:fixed;width:100%">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="padding:25px 14px 10px;margin:0 auto;max-width:560px;width:100%">
                              <tbody>
                                <tr>
                                  <td style="direction:ltr;text-align:left;color:white;font-size:20px;line-height:26px;font-weight:500">Total</td>
                                </tr>
                                <tr>
                                  <td style="direction:ltr;text-align:left;color:white;font-size:20px;line-height:26px">{{$total}} MXN</td>
                                </tr>
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="padding:10px 14px;margin:0 auto;max-width:560px;width:100%">
                              <tbody>
                                <tr>
                                  <td style="direction:ltr;text-align:left;color:white;font-size:20px;font-weight:500;line-height:26px">Información</td>
                                </tr>

                                @foreach($info as $product)
                                  <tr>
                                    <td style="direction:ltr;text-align:left;color:white;font-size:20px;line-height:26px">{{$product->name}}  {{$product->attributes->color}} | {{$product->attributes->pet_name?$product->attributes->pet_name:'Sin Personalizar'}} - {{$product->price}}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="padding:10px 14px 30px;margin:0 auto;max-width:560px;width:100%">
                              <tbody>
                                <tr>
                                  <td style="direction:ltr;text-align:left;color:white;font-size:20px;font-weight:500;line-height:26px">Entrega aproximada</td>
                                </tr>
                                <tr>
                                  <td style="direction:ltr;text-align:left;color:white;font-size:20px;line-height:26px"> {{$delivery}} </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border-collapse:collapse;table-layout:fixed;width:100%">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="padding:40px 14px;margin:0 auto;max-width:560px;width:100%">
                              <tbody>
                                <tr>
                                  <td style="direction:ltr;text-align:left;color:black;font-size:12px;line-height:18px">
                                    <div>
                                      En cualquier momento, si enfrentas una avería o extravío, te ofrecemos la opción de solicitar un reemplazo de tu placa de forma gratuita.
                Solo necesitas cubrir los gastos de envío a tu domicilio.Para más información checa las condiciones de la <a class="text-purple-900 font-bold" href="https://www.radi.pet/garantia-placas">garantia</a>.
                                      <div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td >
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top:25px;padding-bottom:25px;table-layout:fixed">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="table-layout:fixed;max-width:560px;width:100%">
                              <tbody>
                                <tr>
                                  <td>
                                    <table border="0" cellpadding="0" cellspacing="0" class="m_-995294407785604879t3of12" align="left" style="max-width:168px;width:100%">
                                      <tbody>
                                        <tr>
                                          <td style="direction:ltr;text-align:left;padding:0 12px">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="table-layout:fixed;width:100%">
                                              <tbody>

                                                <tr>
                                                  <td style="color:white;font-family:uber move text,helveticaneue,Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;padding:3px 0;direction:ltr;text-align:left"><a href="https://www.radi.pet/terms" style="color:white;text-decoration:none" target="_blank">Términos</a></td>
                                                </tr>
                                                <tr>
                                                  <td style="color:white;font-family:uber move text,helveticaneue,Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;padding:3px 0;direction:ltr;text-align:left"><a href="https://www.radi.pet/privacy" style="color:white;text-decoration:none" target="_blank">Privacidad</a></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" class="m_-995294407785604879t3of12" align="left" style="max-width:300px;width:100%">
                                      <tbody>
                                        <tr>
                                          <td style="direction:ltr;text-align:left;padding:0 12px">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="table-layout:fixed;width:100%">
                                              <tbody></tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
