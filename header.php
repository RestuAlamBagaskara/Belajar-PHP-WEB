<?php

    // Cek melalui postman
    
    header('Application: Belajar PHP Web');
    header('Author: Alam');

    $client = $_SERVER['HTTP_CLIENT'];

    echo "Hello $client";
