<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoonCafe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img width="80" src="img/mooncafe.jpg" alt="MoonCafe">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu') }}">Menú</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('crear_cuenta') }}">Crear Cuenta</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('novedades') }}">Novedades y promociones</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container mt-4">
            
           <section id="hero" class="jumbotron">
                
                <h1 class="display-4">Bienvenido a MoonCafe</h1>
                <p class="lead">Tu espacio ideal para disfrutar de un delicioso café.</p>
                <hr class="my-4">
                <p>Descubre nuestra atmósfera acogedora y nuestra selección de cafés y delicias.</p>
                <a class="btn btn-primary btn-lg" href="menu.html" role="button">Ver nuestro menú</a>
                
            </section>

            <section id="menu-dinamico" class="mt-4">
                <h2>Nuestro Menú</h2>
                <ul>
                    <li v-for="item in menuItems" :key="item.nombre">
                        {{ item.nombre }} - {{ item.precio }}
                    </li>
                </ul>
            </section>

            <section id="destacados" class="mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <img src="img/cafe_especialidad1.jpg" class="card-img-top" alt="Café Especialidad 1">
                            <div class="card-body">
                                <h5 class="card-title">Café Arábica Premium</h5>
                                <p class="card-text">Un café de origen único con notas aromáticas excepcionales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <img src="img/postre_destacado.jpg" class="card-img-top" alt="Postre Destacado">
                            <div class="card-body">
                                <h5 class="card-title">Torta de Chocolate Artesanal</h5>
                                <p class="card-text">Un delicioso postre elaborado con ingredientes frescos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="bg-light text-center py-3 mt-4">
            <p>&copy; 2025 MoonCafe. Todos los derechos reservados.</p>
        </footer>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="main.js"></script>
</body>
</html>