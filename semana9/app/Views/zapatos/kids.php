<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAPATOS NIÑO</title>
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    
    body {
        font-family: Arial, sans-serif;
    }

    header {
        background-color: #007bff;
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
        background-color: #007bff;
        color: white;
        text-align: center;
        padding: 1rem 0;
        margin-top: 2rem;
    }
</style>

<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>ZAPATOS NIÑO</h1>
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
                        <a class="nav-link" href="<?php echo $Dirmujer ?>">Mujer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Dirhombre ?>">Hombre</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Encuentra los mejores zapatos para niño</h2>
                <p>Descubre nuestra selección exclusiva de zapatos para niño, donde la calidad y el estilo se unen.</p>
            </div>
        </div>
        <div class="row mt-4">
            
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/15/4c/cd/154ccd432da0e7d2ecd5d757e2898a10.jpg" class="card-img-top" alt="Zapatos 1">
                    <div class="card-body">
                        <h5 class="card-title">Zapato 1</h5>
                        <p class="card-text">Descripción del zapato 1.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/c1/a9/8c/c1a98cf00bc8c281df2b213947d85c05.jpg" class="card-img-top" alt="Zapatos 2">
                    <div class="card-body">
                        <h5 class="card-title">Zapato 2</h5>
                        <p class="card-text">Descripción del zapato 2.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/ce/d2/a1/ced2a1909d3e79b7352bd8a08aed3e0f.jpg" class="card-img-top" alt="Zapatos 3">
                    <div class="card-body">
                        <h5 class="card-title">Zapato 3</h5>
                        <p class="card-text">Descripción del zapato 3.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
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

    <footer class="bg-primary text-white text-center py-3 mt-5">
        &copy; 2024 Zapatos. Todos los derechos reservados.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>