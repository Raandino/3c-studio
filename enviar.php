<?php

if (isset($_POST['enviar'])){
    if (!empty($_POST ['nombre_empresa']) && !empty($_POST ['persona_contacto']) && !empty($_POST ['email']) && !empty($_POST ['phone'])  ){
        //llamado de los campos
            $nombre_empresa = $_POST ['nombre_empresa'];
            $persona_contacto = $_POST['persona_contacto'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];


            // Datos para el correo
            $destinatario = "direccion@grupo3cideas.com";
            $asunto = "Contacto desde nuestra web";

            $carta = "Nombre de la empresa: $nombre_empresa \n";
            $carta .= "Persona de contacto: $persona_contacto \n";
            $carta .= "Correo electrónico: $email \n";
            $carta .= "Teléfono: $phone \n";
            $carta .= "Quiere contactarse";

            // Enviando Mensaje
            mail($destinatario, $asunto, $carta);
            

    }
}


?>
