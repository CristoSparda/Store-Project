<?php

    session_start();

    //eliminar todas las variables de $_SESSION

    session_destroy();
    //redireccióna al login
    header("Location: http://localhost/store-project/index.php");

?>