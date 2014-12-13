<?php

    $languaje = "PHP";
    $title = "PHP PRO";
    $secret = "This is secret";
    $STATICS = "statics/";


    // view("view", ['languaje' => $languaje, 'title' => $title]);
    view("home", compact("languaje","title","STATICS") );
