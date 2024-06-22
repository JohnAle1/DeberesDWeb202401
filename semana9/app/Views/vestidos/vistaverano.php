<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERANO</title>
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
        <h1>VERANO</h1>
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
                        <a class="nav-link" href="<?php echo $Dirgala ?>">Gala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dircasual ?>">Casual</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Encuentra el vestido perfecto para el verano</h2>
                <p>Explora nuestra selección de vestidos veraniegos.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/3e/18/83/3e18839655546880ae66903b09a2e53f.jpg"
                        class="card-img-top" alt="Vestido Veraniego 1">
                    <div class="card-body">
                        <h5 class="card-title">Sol Dorado</h5>
                        <p class="card-text">Vestido veraniego amarillo brillante con tirantes finos cruzados en la
                            espalda, tela ligera de algodón.</p>
                        <a href="#" class="btn btn-danger">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/e4/1f/e9/e41fe9a1b1b9584c67c95cc8e10197f2.jpg"
                        class="card-img-top" alt="Vestido Veraniego 2">
                    <div class="card-body">
                        <h5 class="card-title">Briza Marina</h5>
                        <p class="card-text">Vestido veraniego azul celeste con estampado de conchas y detalles de
                            encaje en el escote y los hombros.</p>
                        <a href="#" class="btn btn-danger">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/98/7b/f4/987bf4ebc7c7f3afa6f5264460ecd8dd.jpg"
                        class="card-img-top" alt="Vestido Veraniego 3">
                    <div class="card-body">
                        <h5 class="card-title">Tropicalía</h5>
                        <p class="card-text">Vestido veraniego estampado con motivos tropicales en tonos vibrantes,
                            cuello halter cruzado en la espalda, tela de viscosa suave.</p>
                        <a href="#" class="btn btn-danger">Ver más</a>
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
                    alert('¡Has hecho clic en un vestido veraniego!');
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