

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación Espacial</title>
    <link rel="stylesheet" href="estilo.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Menú de navegación superpuesto -->
    <nav class="navbar">
        <div class="logo">Sistema Solar</div>
        <ul class="nav-links" id="nav-links">
            <li><a href="#home">Inicio</a></li>
            <li><a href="Sistema_Solar.html">Sistema Solar</a></li>
            <li><a href="#galeria">Galeria</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div class="content">
        <h1>Sistema Solar</h1>
        <p>Aquí puedes explorar el cosmos y aprender más sobre el sistema solar y los misterios del universo.</p>
        <p>En esta sección puedes agregar más contenido relevante sobre tu tema, como información sobre los planetas, el Sol, etc.</p>

        <iframe class="Nave" src="Planetario/Planetario.html" width="400" height="200">
        </iframe>
    </div>

<div class="content_planet" id="galeria">
    <!-- Título principal de la galería -->
    <h1 class="titulo-galeria">Galería de Planetas</h1>
    
    <!-- Primera fila -->
    <div class="fila">
        <div class="planeta">
            <h2>Sol</h2>
            <iframe class="Nave" src="Escenografía_Sol/Escenografía_Sol.html" width="400" height="200"></iframe>
        </div>
        <div class="planeta">
            <h2>Mercurio</h2>
            <iframe class="Nave" src="Escenografía_Mercurio/Escenografía.html" width="400" height="200"></iframe>
        </div>
        <div class="planeta">
            <h2>Venus</h2>
            <iframe class="Nave" src="Escenografía_Venus/Escenografía_Venus.html" width="400" height="200"></iframe>
        </div>
        <div class="planeta">
            <h2>Tierra</h2>
            <iframe class="Nave" src="Escenografía_Tierra/Escenografía_Tierra.html" width="400" height="200"></iframe>
        </div>
    </div>

    <!-- Segunda fila -->
    <div class="fila">
        <div class="planeta">
            <h2>Luna</h2>
            <iframe class="Nave" src="Escenografía_Luna/Escenografía_Luna.html" width="400" height="200"></iframe>
        </div>
        <div class="planeta">
            <h2>Marte</h2>
            <iframe class="Nave" src="Escenografía_Marte/Escenografía_Marte.html" width="400" height="200"></iframe>
        </div>
        <div class="planeta">
            <h2>Jupiter</h2>
            <iframe class="Nave" src="Escenografía_Jupiter/Escenografía_Jupiter.html" width="400" height="200"></iframe>
        </div>  
        <div class="planeta">
            <h2>Urano</h2>
            <img class="Nave2" src="Videos/saturno.gif" alt="Descripción del GIF" width="400" height="200">
        </div>
    </div>

    <!-- Tercera fila -->
    <div class="fila">
        <div class="planeta">
            <h2>Urano</h2>
            <iframe class="Nave" src="Escenografía_Urano/Escenografía_Urano.html" width="400" height="200"></iframe>
        </div>
        <div class="planeta">
            <h2>Neptuno</h2>
            <iframe class="Nave" src="Escenografía_Neptuno/Escenografía_Neptuno.html" width="400" height="200"></iframe>
        </div>
    </div>
</div>


    <script src="menu.js"></script>
</body>
</html>