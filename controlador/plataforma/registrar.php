<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\plataforma;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require("../../vista/" . basename(dirname(__FILE__)) . "/registrar.php");
} else {

    $plataforma = new Plataforma(
        "",
        $_POST['nombre'],
        $_POST['fecha_lanzamiento'],
        $_POST['imagen'],
        $_POST['empresa'],
    );

    $res = $plataforma->registrar();

    if ($res) {
        require("../../vista/" . basename(dirname(__FILE__)) . "/registrar.php");

?>
        <script src="../../static/js/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                title: "REGISTRO EXITOSO",
                text: "Se realizó el registro exitosamente",
                icon: "success"
            }).then(() => {
                location.href = 'mostrar.php'; // Redirigir a la página de mostrar.php
            });
        </script>

<?php
    }
}
?>