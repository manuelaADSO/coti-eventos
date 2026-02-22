<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

    <!-- Carrusel -->
    <div id="menuCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="./assets/img/banquete/coctel/coctel_1.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/coctel/coctel_2.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/coctel/coctel_3.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Título -->
    <h5 class="text-center fw-semibold mb-4">Cocteles</h5>

    <!-- Grid de menú -->
    <div class="row g-3">

        <!-- Card -->
        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/coctel/tropical_durazno.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Cóctel tropical de durazno</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                  <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_01"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                      <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
               </div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/coctel/limonada_rosa.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Limonada rosada con menta</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_02"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                   <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
                </div>
</div>
        </div>


        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/coctel/sunrise_tropical.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Sunrise tropical</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                 <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_03"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                      <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/coctel/coctel_colada.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1"> Piña colada clásica</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                 <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_04"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                       <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
               </div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/coctel/atardecer.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Cóctel atardecer de frutos rojosl</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                 <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_05"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                       <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/coctel/margarita_limon.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Margarita de limón</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                      <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_06"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                       <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
               </div>
               </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>