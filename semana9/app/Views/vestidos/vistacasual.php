<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASUAL</title>
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
        <h1>CASUAL</h1>
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
                        <a class="nav-link" href="<?php echo $Dirverano ?>">Veraniegos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Encuentra el vestido casual perfecto</h2>
                <p>Explora nuestra selección de vestidos casuales.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/12/b1/ee/12b1ee0816c2d3169d849a7a654c7834.jpg"
                        class="card-img-top" alt="Vestido Casual 1">
                    <div class="card-body">
                        <h5 class="card-title">Brisa Tropical</h5>
                        <p class="card-text">Tiene un estampado de flores tropicales, tela ligera de algodón, y corte
                            holgado hasta la rodilla.</p>
                        <a href="#" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/22/ba/87/22ba87f15b0029615dae4fc96e80a3ba.jpg"
                        class="card-img-top" alt="Vestido Casual 2">
                    <div class="card-body">
                        <h5 class="card-title">Ráfaga Bohemia</h5>
                        <p class="card-text">Modelo bohemio con detalles de encaje en las mangas y el dobladillo, tejido
                            suave de mezcla de algodón.</p>
                        <a href="#" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/e2/a7/73/e2a773b6e6322fdfedee566d335c10bd.jpg"
                        class="card-img-top" alt="Vestido Casual 3">
                    <div class="card-body">
                        <h5 class="card-title">Amanecer Sereno</h5>
                        <p class="card-text">De tono pastel con diseño cruzado en el pecho, tejido de modal suave al
                            tacto, y largo hasta los tobillos.</p>
                        <a href="#" class="btn btn-success">Ver más</a>
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
                    alert('¡Has hecho clic en un vestido casual!');
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