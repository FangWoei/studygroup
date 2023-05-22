<?php

    session_start();

    $path = parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH );

    $path = trim( $path, '/' );

    if ( $path == 'process' ) {
        require "process_contact_form.php";

    } else {
        require "home.php";
    }