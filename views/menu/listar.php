<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

    <!-- Carrusel -->
    <div id="menuCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="./assets/img/banquete/inicio/comida_2.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/inicio/comida_1.webp"
                     class="d-block w-100" style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/inicio/comida_3.webp"
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
    <h5 class="text-center fw-semibold mb-4">Menú</h5>

    <!-- Grid de menú -->
    <div class="row g-3">

        <!-- Card -->
        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/menu/pollo_papas.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Pollo Asado con papas Doradas</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                               <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_01"
class="text-decoration-none text-dark d-flex flex-column h-100">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#infoSirena">
                                        <h4>Ver más</h4>
                                    </button>
                                </a>
                            </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <img src="./assets/img/banquete/menu/pollo_cremoso.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Pollo en salsa cremosa con pasta fusilli</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                  <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_02"
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
                <img src="./assets/img/banquete/menu/pollo_salsa.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Pollo en salsa cremosa con pasta fusilli</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                  <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_03"
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
                <img src="./assets/img/banquete/menu/burrito.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Burrito gratinado relleno de carne y papas</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                     <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_04"
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
                <img src="./assets/img/banquete/menu/lasaña.webp"
                     class="card-img-top rounded-3">
               <div class="card-body">
                    <h4 class="fw-semibold mb-1">Lasaña de carne con queso gratinado</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                   <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_05"
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
                <img src="./assets/img/banquete/menu/carne_pasta.webp"
                     class="card-img-top rounded-3">
                <div class="card-body">
                    <h4 class="fw-semibold mb-1">Carne a la parrilla con pasta cremosa de camarones</h4>
                            <p class="fw-bold mb-0"><h4>$650.000</h4></p>
                    <!-- Flecha -->
                            <div class="text-center mt-2">
                                  <a href="<?= BASE_URL ?>module=menu&view=detalle_menu_06"
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>