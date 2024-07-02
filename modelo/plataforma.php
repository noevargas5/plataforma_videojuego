<?php

namespace modelo;

class Plataforma
{

    public function __construct(
        private $id_plataforma = "",
        private $nombre = "",
        private $fecha_lanzamiento = "",
        private $imagen = "",
        private $empresa = ""
    ) {
    }

    public function mostrar()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM plataforma");
        return $sql;
    }

    public function registrar()
    {
        $db = new Conexion();
        $sql = $db->query("INSERT INTO plataforma (nombre, fecha_lanzamiento, imagen, empresa) 
                            VALUES ('$this->nombre','$this->fecha_lanzamiento', '$this->imagen', '$this->empresa')");
        return $sql;
    }

    public function eliminar()
    {
        $db = new Conexion();
        $sql = $db->query("DELETE FROM plataforma WHERE id_plataforma = '$this->id_plataforma'");
        return $sql;
    }
}
