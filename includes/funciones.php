<?php 
require 'app.php'; //require sirve Bien para llamar funciones  (trae archivos)

function incluirTemplate($nombre, $inicio = false) {
    include TEMPLATES_URL . "/${nombre}.php"; //Include sirve bien para llamar templates  (trae codigo en archivos)
}