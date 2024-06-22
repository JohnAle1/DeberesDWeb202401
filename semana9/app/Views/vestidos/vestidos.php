<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VESTIDOS</title>
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    /* estilos.css */

    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
    }

    .bg-rosado {
        background-color: #ff69b4;
        /* Color rosado */
    }

    header {
        color: white;
        text-align: center;
        padding: 1.5rem 0;
    }

    header h1 {
        margin: 0;
        font-size: 2.5rem;
    }

    .navbar {
        margin-bottom: 2rem;
    }

    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    footer {
        color: white;
        text-align: center;
        padding: 1rem 0;
        margin-top: 2rem;
    }
</style>

<body>
    <header class="bg-rosado text-white text-center py-3">
        <h1>VESTIDOS</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Vestidos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dircasual ?>">Casual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dirgala ?>">Gala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dirverano ?>">Veraniegos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Encuentra el vestido perfecto para cada ocasión</h2>
                <p>Explora nuestra selección de vestidos casuales, de gala y veraniegos.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/dd/a2/00/dda2009871f40ad7ae6efab715828484.jpg"
                        class="card-img-top" alt="Vestido Casual">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Casual</h5>
                        <p class="card-text">Informales y cómodos, ideales para el día a día.</p>
                        <a href="#" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/37/f7/2a/37f72ae38f89de39eb001703a50e27a7.jpg"
                        class="card-img-top" alt="Vestido de Gala">
                    <div class="card-body">
                        <h5 class="card-title">Vestido de Gala</h5>
                        <p class="card-text">Elegantes y sofisticados, diseñados para eventos formales.</p>
                        <a href="#" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/f0/1c/b8/f01cb89e91e60048c37df2952e63f1c5.jpg"
                        class="card-img-top" alt="Vestido Veraniego">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Veraniego</h5>
                        <p class="card-text">Frescos y ligeros, perfectos para el calor.</p>
                        <a href="#" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('click', () => {
                    alert('¡Has hecho clic en un vestido!');
                });
            });
        });
    </script>

    <footer class="bg-rosado text-white text-center py-3 mt-5">
        &copy; 2024 Vestidos. Todos los derechos reservados.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>