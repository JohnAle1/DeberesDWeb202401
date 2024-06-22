<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatos - Página de Inicio</title>
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    body {
    font-family: Arial, sans-serif;
}
.carousel-item img {
    width: 100%;
    height: 600px;
    object-fit: cover;
}
.category {
    margin: 30px 0;
}
.category a {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    background-color: #007BFF;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}
.category a:hover {
    background-color: #0056b3;
}
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>

<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Zapatos</h1>
        <p>Bienvenido a nuestra tienda de zapatos. Encuentra el calzado perfecto para ti.</p>
    </header>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.pinimg.com/736x/c6/ab/2f/c6ab2f1982c3b2f7cbb3fb0489e7d509.jpg" alt="Zapatos 1">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/27/71/3b/27713bb1670b9db4bbc0c4e91fbfeddf.jpg" alt="Zapatos 2">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/a0/0c/c4/a00cc42823e2ef508d70d4f554e6ac6a.jpg" alt="Zapatos 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container text-center category">
        <h2>Zapatos para Hombre</h2>
        <p>Encuentra la mejor selección de zapatos para hombre.</p>
        <a href="<?php echo $Dirhombre?>">Ver zapatos de hombre</a>
    </div>

    <div class="container text-center category">
        <h2>Zapatos para Mujer</h2>
        <p>Descubre la variedad de estilos y diseños en zapatos para mujer.</p>
        <a href="<?php echo $Dirmujer?>">Ver zapatos de mujer</a>
    </div>

    <div class="container text-center category">
        <h2>Zapatos para Niño</h2>
        <p>Explora nuestra colección de zapatos para los más pequeños.</p>
        <a href="<?php echo $Dirniño?>">Ver zapatos de niño</a>
    </div>

    <footer>
        &copy; 2024 Zapatos. Todos los derechos reservados.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
