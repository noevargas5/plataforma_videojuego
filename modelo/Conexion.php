<?php

namespace modelo;

class Conexion extends \mysqli
{
    public function __construct()
    {
        parent::__construct("localhost", "root", "", "videojuegos");
    }
}
