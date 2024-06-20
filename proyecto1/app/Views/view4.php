<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="public/estilo.css">
</head>

<style>
    .mission-vision-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .mission-vision-box {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }


    .mission-vision-icon {
        font-size: 36px;
        color: #007bff;
        margin-right: 10px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cinamon Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Acerca de Nosotros</h1>

        <div class="row">
            <div class="col-lg-6">
                <div class="mission-vision-box">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-bullseye mission-vision-icon"></i>
                        <h5 class="mission-vision-title">Misión</h5>
                    </div>
                    <p>En Cinamon Restaurant nos dedicamos a ofrecer una experiencia gastronómica excepcional, donde la
                        calidad de nuestros ingredientes se combina con la creatividad de nuestros chefs para
                        proporcionar platos exquisitos que deleitan a nuestros comensales. Nos comprometemos a mantener
                        un ambiente acogedor y un servicio impecable, asegurando que cada visita sea memorable y
                        satisfactoria para nuestros clientes.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-vision-box">
                    <div class="d-flex align-items-center mb-3">
                        <i class="far fa-eye mission-vision-icon"></i>
                        <h5 class="mission-vision-title">Visión</h5>
                    </div>
                    <p>Ser reconocidos como el destino preferido para aquellos que buscan una combinación única de
                        sabores exóticos y ambiente acogedor. Nos esforzamos por expandir nuestra oferta gastronómica
                        y servicios, manteniendo siempre nuestros estándares de calidad y hospitalidad. Aspiramos a ser
                        un referente en la industria culinaria, destacando por nuestra innovación, sostenibilidad y
                        compromiso con la satisfacción total de nuestros clientes.</p>
                </div>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.hellofresh.com/w_3840,q_auto,f_auto,c_fill,fl_lossy/hellofresh_s3/image/HF_Y24_R16_W05_ES_ESSGB17579-4_Main_high-15709f99.jpg"
                        class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="https://img.hellofresh.com/w_3840,q_auto,f_auto,c_fill,fl_lossy/hellofresh_s3/image/HF_Y24_R16_W18_ES_ESSGPF21333-2_Main_high-121a43c1.jpg"
                        class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="https://img.hellofresh.com/w_3840,q_auto,f_auto,c_fill,fl_lossy/hellofresh_s3/image/HF_Y24_R16_W02_ES_ESSGB17598-4_Main_high-1d52ab11.jpg"
                        class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="public/view3.js"></script>
</body>

<footer class="bg-dark text-white mt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p>&copy; 2024 Cinamon Restaurant. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

</html>