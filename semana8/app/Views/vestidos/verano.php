<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestidos de Verano</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            display: block;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .category {
            margin: 20px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
        }
        .category h2 {
            margin-top: 0;
            color: #007bff;
        }
        .category p {
            color: #555;
        }
        .category img {
            width: 100%; 
            height: 500px; 
            object-fit: cover;
            display: block;
            margin: 10px 0;
        }
        .category a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        .category a:hover {
            text-decoration: underline;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="<?= $datos['iniciovestidos'] ?>">Inicio</a>
        <a href="<?= $datos['gala'] ?>">Gala</a>
        <a href="<?= $datos['nocturno'] ?>">Nocturno</a>
        <a href="<?= $datos['verano'] ?>">Verano</a>
    </div>
    <div class="container">
        <h1>Vestidos de Verano</h1>
        <div class="category">
            <h2>Vestidos de Verano</h2>
            <img src="../public/assets/png/verano.jpg" alt="Vestidos de Verano">
            <p>Perfectos para el clima cálido, los vestidos de verano son ligeros y frescos. Diseñados con telas suaves y transpirables, ofrecen comodidad y estilo.</p>
        </div>
        <div class="category">
            <h2>Vestidos de Verano</h2>
            <img src="../public/assets/png/verano.jpg" alt="Vestidos de Verano">
            <p>Perfectos para el clima cálido, los vestidos de verano son ligeros y frescos. Diseñados con telas suaves y transpirables, ofrecen comodidad y estilo.</p>
        </div>
        <div class="category">
            <h2>Vestidos de Verano</h2>
            <img src="../public/assets/png/verano.jpg" alt="Vestidos de Verano">
            <p>Perfectos para el clima cálido, los vestidos de verano son ligeros y frescos. Diseñados con telas suaves y transpirables, ofrecen comodidad y estilo.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Catálogo de Vestidos. Todos los derechos reservados.</p>
        <p>Contacto: aiusinaf@catalogovestidos.com</p>
    </footer>
</body>

</html>