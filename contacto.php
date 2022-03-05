<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "biogenicaoncocit@gmail.com,gestion@biogenica.org";

    $email_subject = "Solicitud Recell";

    $first_name = $_POST['nombre']; // required 
    $email_from = $_POST['email']; // required
    $phone = $_POST['telefono']; // required
    $tipo = $_POST['tipo']; // required

    $comments = $_POST['mensaje']; // required

    $email_message = "Detalles del contacto.\n\n";
    $email = "$email_from"; // required


    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }


    $email_message .= "Nombre: " . clean_string($first_name) . "\n";
    $email_message .= "Correo: " . clean_string($email_from) . "\n";
    $email_message .= "Telefono: " . clean_string($phone) . "\n";
    $email_message .= "Tipo de cancer: " . clean_string($tipo) . "\n";
    $email_message .= "Mensaje: " . clean_string($comments) . "\n";


    // create email headers

    $headers = 'From: ' . $email . "\r\n" .

        'Reply-To: ' . $email_from . "\r\n" .

        'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);
?>
    <!-- include your own success html here -->

    <head>

        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-M7ST2M5');
        </script>
        <!-- End Google Tag Manager -->
        <style>
            * {
                padding: 0;
                box-sizing: border-box;
                margin: 0;
            }

            .header-back {
                /* background-image: url("./images/background.jpg;"); */
                /* background-color: #0109f3; */
                background-image: linear-gradient(rgba(20, 20, 20, 0.4),
                        rgba(20, 20, 20, 0.4)),
                    url("./images/background.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                /* height: 100vh; */
            }

            body {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }
        </style>
    </head>

    <body class="header-back">
        <header>
            <nav style="background-color: white; width: 100%; padding: 30px 100px; display: flex; justify-content: space-between; align-items: center;">
                <img style="width: 200px;" src="./logo-recell.png" alt="logo">
                <img style="width: 160px;" src="./num.png" alt="">
            </nav>
        </header>
        <img style="margin: 180px auto 100px; width: 80px; display: block;" src="./success.png" alt="logo">
        <div style="text-align: center;">
            <h2 style="text-align:center; color: white; margin-top: 100px; ">
                ¡Hemos recibido satisfactoriamente tu solicitud!
                <br>
                Un asesor se contactará a la brevedad
            </h2>
            <br>
            <br>
            <span style="font-weight: 300; color:white; font-size: 20px;">Visita nuestro sitio web: <a href="https://www.recell.cl">www.recell.cl</a></span>

        </div>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7ST2M5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

    </body>
<?php
}
?>