<?php

// En esta etapa no se consulta la base de datos.
// Más adelante aquí se buscará el producto que se desea editar.

$producto = [
    "id" => "",
    "nombre" => "",
    "precio" => "",
    "stock" => "",
    "categoria_id" => ""
];

$categorias = [];

require_once "../views/productos/formulario.php";
