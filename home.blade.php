<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Pokémon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color:rgb(9, 255, 0);
        }

        .pokemon-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .pokemon-card {
            width: 200px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
        }

        .pokemon-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .pokemon-card h3 {
            color: #333;
            font-size: 18px;
        }

        .button {
            background-color: #ffcc00;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #333;
            font-weight: bold;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #ffaa00;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a la Tienda Pokémon De Wil que te dara todo loa que necesitas para </h1>

    <!-- Mensaje de éxito si es que se redirige con un mensaje -->
    @if(session('success'))
        <div style="color: green;">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <p>¡La mejor tienda para tus Pokémon favoritos!</p>

    <!-- Sección de Pokémon en venta -->
    <div class="pokemon-container">
        <!-- Primer Pokémon -->
        <div class="pokemon-card">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png" alt="Bulbasaur">
            <h3>Bulbasaur</h3>
            <p>Un Pokémon de tipo Planta/Veneno. ¡Llévatelo a casa ahora!</p>
            <button class="button">Comprar</button>
        </div>

        <!-- Segundo Pokémon -->
        <div class="pokemon-card">
            <img src="imagen1.png" alt="Charmander">
            <h3>Charmander</h3>
            <p>Un Pokémon de tipo Fuego. ¡Es el compañero perfecto!</p>
            <button class="button">Comprar</button>
        </div>

        <!-- Tercer Pokémon -->
        <div class="pokemon-card">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/7.png" alt="Squirtle">
            <h3>Squirtle</h3>
            <p>Un Pokémon de tipo Agua. ¡Hazlo tuyo ahora!</p>
            <button class="button">Comprar</button>
        </div>
    </div>

    <!-- Enlace para volver al formulario -->
    <a href="/" style="display: block; margin-top: 30px; color: #ffcc00;">Volver al formulario</a>

</body>
</html>
