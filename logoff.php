<?php

    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

        //destruir a variável de sessão
        session_destroy();
        header('Location: index.php');

    




?>