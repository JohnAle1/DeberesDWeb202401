<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAPATOS MUJER</title>
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    
    body {
        font-family: Arial, sans-serif;
    }

    header {
        background-color: #343a40;
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
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 1rem 0;
        margin-top: 2rem;
    }
</style>

<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>ZAPATOS MUJER</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Zapatos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dirzapatos ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dirhombre ?>">Hombre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dirniño ?>">Niño</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Encuentra los mejores zapatos para mujer</h2>
                <p>Descubre nuestra selección exclusiva de zapatos para mujer, donde la calidad y el estilo se unen.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/98/19/7a/98197a018dc0a477a3c6f1feb7d1339e.jpg" class="card-img-top" alt="Zapatos 1">
                    <div class="card-body">
                        <h5 class="card-title">Zapato 1</h5>
                        <p class="card-text">Descripción del zapato 1.</p>
                        <a href="#" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/ab/98/be/ab98be4e15f90757313a3a1582aa33c7.jpg" class="card-img-top" alt="Zapatos 2">
                    <div class="card-body">
                        <h5 class="card-title">Zapato 2</h5>
                        <p class="card-text">Descripción del zapato 2.</p>
                        <a href="#" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/13/2f/0c/132f0c3cd06cfe4b6b6238c7ed698393.jpg" class="card-img-top" alt="Zapatos 3">
                    <div class="card-body">
                        <h5 class="card-title">Zapato 3</h5>
                        <p class="card-text">Descripción del zapato 3.</p>
                        <a href="#" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('click', () => {
                alert('¡Has hecho clic en un zapato!');
            });
        });
    });
</script>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2024 Zapatos. Todos los derechos reservados.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>