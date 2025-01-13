<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilo del contenedor principal */
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        /* Estilos del formulario */
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-size: 1em;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Estilo para el mensaje de éxito */
        .success-message {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Estilos responsivos */
        @media (max-width: 600px) {
            .form-container {
                width: 90%;
                padding: 15px;
            }

            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Formulario de Datos</h1>

        <!-- Mostrar mensaje de éxito -->
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulario -->
        <form action="/store" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
