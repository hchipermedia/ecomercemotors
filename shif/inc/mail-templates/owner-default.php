<?php

$ownerMessage = 
'<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333;" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
        <!-- Encabezado del mail -->
        <tr>
            <td style="background-color:#fff;" align="center" valign="top">
                <img src="http://dev8.shipermedia.com/wp-content/uploads/logo-mail-template.png" style="display: block;" height="160" width="600">
            </td>
        </tr>
        <!-- Mensaje para el vendedor -->
        <tr>
            <td style="background-color:#fff;" align="left" valign="top">
                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" valign="top">
                                <div style="font-size: 1.2em; color: #333; font-weight: bold;">
                                </div>
                                <h4 style="text-align: left;">Resumen</h4>
                                <p style="text-align: left;">
                                    <strong>Nombre: </strong>'  . $_POST['shif-name'] . '<br />
                                    <strong>Correo: </strong>' . $_POST['shif-email'] . '<br />
                                    <strong>Teléfono: </strong>' . $_POST['shif-phone'] . '<br />
                                    <strong>Ciudad: </strong>' . $_POST['shif-city'] . '<br />
                                    <strong>Mensaje: </strong>' . $_POST['shif-desc'] . '<br />
                                </p>
                              <p></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <!-- Pié de página del correo -->
        <tr>
            <td style="background-color:#013861;" align="left" valign="top">
                <table border="0" cellpadding="15" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="color:#fff;" align="left" valign="top">
                                <strong><span>'.$shifEmailGlobalInfo['title'].'</span><br>
                                <span>'.$shifEmailGlobalInfo['address'].'</span><br>
                                <span>Teléfono: </span>'.$shifEmailGlobalInfo['phone'].' <span class=""></span><br>
                                <span>Email: <a href="'.$shifEmailGlobalInfo['email'].'" style="color: #fff; text-decoration: none;">'.$shifEmailGlobalInfo['email'].'</a></span><br>
                                <span>Website: <a href="'.$shifEmailGlobalInfo['website'].'" target="_blank" style="color: #fff; text-decoration: none;">'.$shifEmailGlobalInfo['website'].'</a></span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>';
