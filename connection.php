<?php

    $database= new mysqli("localhost","root","","mengo");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>