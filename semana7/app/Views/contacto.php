<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/estilo.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">F1 Noticias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="http://localhost/tareas2P/semana7/ejercicio1">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tareas2P/semana7/EJERCICIO2">Campeones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tareas2P/semana7/EjErCiSiO3">Historias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tareas2P/semana7/eJeRcIsIo4">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <h1>Contacto</h1>
    <form>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea class="form-control" id="mensaje" rows="3" placeholder="Ingresa tu mensaje"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>