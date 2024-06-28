<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saber la hora xd</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: white;
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
            margin: 10px;
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Saber la hora actual</h1>
        <button onclick="mostrarHora()">Mostrar Hora</button>
        <p id="hora"></p>
    </div>

    <script>
        function mostrarHora() {
            const ahora = new Date();
            const hora = ahora.getHours() + ':' + ahora.getMinutes() + ':' + ahora.getSeconds();
            document.getElementById('hora').textContent = 'Hora actual: ' + hora;
        }
    </script>
</body>
</html>
