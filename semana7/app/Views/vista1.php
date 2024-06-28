<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Clicks</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        div {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Contador de Clicks</h1>
        <button onclick="incrementarContador()">Haz Click</button>
        <p id="contador">0</p>
    </div>

    <script>
        let contador = 0;
        function incrementarContador() {
            contador++;
            document.getElementById('contador').textContent = contador;
        }
    </script>
</body>
</html>
