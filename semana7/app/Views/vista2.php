<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Color de Fondo</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        div {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Cambiar Color de Fondo</h1>
        <button onclick="cambiarColor()">Cambiar Color</button>
    </div>

    <script>
        function cambiarColor() {
            const colores = ['red', 'blue', 'green', 'yellow', 'purple'];
            const colorAleatorio = colores[Math.floor(Math.random() * colores.length)];
            document.body.style.backgroundColor = colorAleatorio;
        }
    </script>
</body>
</html>
