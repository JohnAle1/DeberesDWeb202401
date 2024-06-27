<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</head>

<body>
    <h1>Vista de Publicaciones</h1>
    <table class="table table-dark table-striped">
        <tr>
            <td>Usuario id</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Fecha de registro</td>
            <td>Post id</td>
            <td>Titulo</td>
            <td>Contenido</td>
            <td>Fecha de Publicación</td>
        </tr>
        <?php foreach ($keyselectbdd as $key): ?>
            <tr>
                <td><?php echo $key->usuario_id ?></td>
                <td><?php echo $key->nombre ?></td>
                <td><?php echo $key->email ?></td>
                <td><?php echo $key->fecha_registro ?></td>
                <td><?php echo $key->post_id ?></td>
                <td><?php echo $key->titulo ?></td>
                <td><?php echo $key->contenido ?></td>
                <td><?php echo $key->fecha_publicacion ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>