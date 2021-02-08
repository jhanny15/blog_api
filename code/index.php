<?php

    //Connessione al DB
    $link = mysqli_connect("db", "main", "pass");
    
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }