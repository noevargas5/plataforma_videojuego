<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hola</h1>

    <table border="1">
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

                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>


</body>

</html>