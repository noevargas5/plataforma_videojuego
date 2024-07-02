<?php

require_once __DIR__ . '/../../autoload.php';

use modelo\plataforma;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $plataforma = new plataforma($_POST['id_plataforma']);

    $res = $plataforma->eliminar();

    header("Location: mostrar.php");
}
