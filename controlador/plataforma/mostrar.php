<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\plataforma;

$plataforma = new Plataforma();

$res = $plataforma->mostrar();




require("../../vista/" . basename(dirname(__FILE__)) . "/mostrar.php");
