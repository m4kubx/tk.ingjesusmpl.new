<?php

    require "config.php";
    require "helpers.php";


    //$url = isset($_GET["url"]) ? $_GET["url"] : "home";

    /* if ( empty($_GET["url"]) ) {
        $_GET["url"] = "home";
    } */


    // Llamar controladores
    controller($_GET["url"]);
