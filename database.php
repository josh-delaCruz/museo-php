<?php

    $hostname = "localhost";
    $dbname = "compito_prep";
    $user = "root";
    $password = "";
    
    $mysqli = new mysqli($hostname, $user, $password, $dbname);

    if($mysqli-> connect_error){
        echo"connessione fallita".$mysqli-> connect_error;
    }

?>
