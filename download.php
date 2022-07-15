<?php

    if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
        header('Content-Disposition: attachment; filename="php_8.jpg"');
        header('Content-Type: image/jpeg');
        readfile(__DIR__ . '/file/php_8_released.png');
        exit();
    }else{
        echo "Invalid Key";
    }