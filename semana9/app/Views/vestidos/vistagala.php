<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALA</title>
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
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
        <h1>GALA</h1>
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
                        <a class="nav-link" href="<?php echo $Dirvestidos ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dircasual ?>">Casual</a>
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
                <h2>Encuentra el vestido perfecto para una gala</h2>
                <p>Explora nuestra selección de vestidos de gala elegantes.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/cd/e4/d3/cde4d36c030230983d94db7dd44b44c9.jpg"
                        class="card-img-top" alt="Vestido de Gala 1">
                    <div class="card-body">
                        <h5 class="card-title">Estrella Nocturna</h5>
                        <p class="card-text">Elegante vestido de gala negro con escote en V profundo, detalles de
                            pedrería en los hombros y cintura.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/2f/78/f9/2f78f9589fb82603a7c6ddb861819872.jpg"
                        class="card-img-top" alt="Vestido de Gala 2">
                    <div class="card-body">
                        <h5 class="card-title">Luna Plateada</h5>
                        <p class="card-text">Vestido de gala plateado con cuerpo ajustado y escote ilusión adornado con
                            aplicaciones de encaje.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/77/46/d9/7746d98d64bb745f768092698fbc1b7e.jpg"
                        class="card-img-top" alt="Vestido de Gala 3">
                    <div class="card-body">
                        <h5 class="card-title">Galaxia Encantada</h5>
                        <p class="card-text">Vestido de gala azul marino con una capa transparente de tul bordado con
                            estrellas plateadas sobre un corpiño ajustado.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
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
                    alert('¡Has hecho clic en un vestido de gala!');
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