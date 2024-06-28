<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar/Ocultar Texto</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #fff8dc;
        }
        div {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #FF4500;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Mostrar/Ocultar Texto</h1>
        <button onclick="mostrarTexto()">Mostrar/Ocultar</button>
        <p id="texto" style="display: none;">Este es un texto oculto.</p>
    </div>

    <script>
        function mostrarTexto() {
            const texto = document.getElementById('texto');
            if (texto.style.display === 'none') {
                texto.style.display = 'block';
            } else {
                texto.style.display = 'none';
            }
        }
    </script>
</body>
</html>
