<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios y Roles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Usuarios y Roles</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Fecha de Registro</th>
                    <th>Rol</th>
                    <th>Descripción del Rol</th>
                    <th>Estado del Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->usu_id; ?></td>
                    <td><?php echo $user->usu_nombre; ?></td>
                    <td><?php echo $user->usu_apellido; ?></td>
                    <td><?php echo $user->usu_correo; ?></td>
                    <td><?php echo $user->usu_fecha_registro; ?></td>
                    <td><?php echo $user->rol_nombre; ?></td>
                    <td><?php echo $user->rol_descripcion; ?></td>
                    <td><?php echo $user->rol_estado; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
