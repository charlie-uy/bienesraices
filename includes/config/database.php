<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienes_raices');
    $db->set_charset('utf8');

    if(!$db) {
        echo "Error, no se puedo conectar";
        exit;
    }

    return $db;
}