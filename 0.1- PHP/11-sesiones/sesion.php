<?php

/**
 * Sesiones en PHP
 * Se usan para almacenar y persistir datos mientras el usuario este en su navegador web y no lo cierre
 * y mientras tampoco cierre su sesión.
 * Se usa para hacer persistente la información de estado entre peticiones de paginas y se utliza con un ID de sesión único.
 */

 // Iniciar la sesión
 session_start();

 $_SESSION['variablesession'] = "sesion activa";

 echo  $_SESSION['variablesession'] = "sesion activa";
