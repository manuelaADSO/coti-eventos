<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

    <!-- Carrusel -->
    <div id="menuCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="./assets/img/banquete/postre/postre_1.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/postre/postre_2.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/postre/postre_3.webp"
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
    <h5 class="text-center fw-semibold mb-4">Postres</h5>

    <!-- Grid de menú -->
    <div class="row g-3">

        <!-- Card -->
        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/postre/postre_fresa.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Cheesecake de fresa</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                               <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_01"
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
                <img src="./assets/img/banquete/postre/tiramisu.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Tiramisú con frutos rojos</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                               <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_02"
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
                <img src="./assets/img/banquete/postre/cupcake.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Cupcakes de chocolate y vainilla con corazones</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                               <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_03"
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
                <img src="./assets/img/banquete/postre/cereza_chocolate.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Cheesecake de cereza y chocolate</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                              <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_04"
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
                <img src="./assets/img/banquete/postre/flan.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Flan de caramelo</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                 <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_05"
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
                   <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_06"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/postre/mousse.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Copas de mousse de chocolate y vainilla con fresa</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                 <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_05"
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>