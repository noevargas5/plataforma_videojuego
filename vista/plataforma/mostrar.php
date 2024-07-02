<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../static/js/sweetalert2.all.min.js"></script>
</head>

<body>
    <h1>hola</h1>

    <table border="1">
        <thead>
            <th>NOMBRE</th>
            <th>FECHA LANZAMIENTO</th>
            <th>IMAGEN</th>
            <th>EMPRESA</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            <?php
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['fecha_lanzamiento'] ?></td>
                        <td><?= $row['imagen'] ?></td>
                        <td><?= $row['empresa'] ?></td>
                        <td>
                            <form class="eliminarForm" action="eliminar.php" method="POST">
                                <input type="text" name="id_plataforma" value="<?= $row['id_plataforma'] ?>" hidden>
                                <input type="submit" value="ELIMINAR">
                            </form>
                        </td>

                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>


</body>

</html>
<script>
    // Captura el evento de envío de todos los formularios con clase "eliminarForm"
    document.querySelectorAll('.eliminarForm').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Obtén el valor del input "id_plataforma" de este formulario específico
            const id_plataforma = this.querySelector('input[name="id_plataforma"]').value;

            // Muestra SweetAlert para confirmar la eliminación
            Swal.fire({
                title: '¿Estás seguro?',
                text: `Esta acción eliminará la plataforma con ID ${id_plataforma}. ¿Deseas continuar?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, procede a enviar este formulario específico
                    form.submit();
                }
            });
        });
    });
</script>