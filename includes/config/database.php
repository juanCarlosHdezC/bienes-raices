<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', '', 'bienes_raices');

    if(!$db) {
        echo "Error al conectar conla base de datos";
        exit;
    }

    return $db;
}