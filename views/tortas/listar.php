<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-4 bg-white pb-5 shadow-sm">
        
   <div id="carouselTortas" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded overflow-hidden" style="max-height: 380px;">
        <div class="carousel-item active">
            <img 
                src="./assets/img/banquete/torta/torta_1.webp" 
                class="d-block w-100 object-fit-cover"
                style="height: 380px;"
                alt="Banner">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTortas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselTortas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

        <div class="text-center mb-5">
            <h1 class="display-6 fw-normal">Tortas</h1>
         <div class="mt-3 mb-5">
    <label class="form-label fw-semibold fs-5">Tipo de torta para la ocasión</label>
    <select class="form-select rounded-3">
        <option selected disabled>Selecciona una opción</option>
        <option>XV Años</option>
        <option>Matrimonios</option>
        <option>Bautizos</option>
        <option>cumpleaños</option>
        <option> Baby Showers</option>
  <option>  Graduaciones</option>
    </select>
</div>
        </div>

        <div class="row g-4 px-3">
            
            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_xv"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/torta/torta_xv.webp" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta XV años</p>
                <h5 class="fw-semibold fs-4">150.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_boda"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/torta/torta_boda.webp" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Matrimonio</p>
                <h5 class="fw-semibold fs-4">180.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_bautizo"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/torta/torta_bautizo.webp" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Bautizo</p>
                <h5 class="fw-semibold fs-4">200.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_cumpleaños"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/torta/torta_cumple.webp" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Cumpleaños</p>
                <h5 class="fw-semibold fs-4">180.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_baby_shawer"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/torta/torta_baby_showers.webp" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Baby Showers</p>
                <h5 class="fw-semibold fs-4">170.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_graduacion"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="./assets/img/banquete/torta/torta_graduacion.webp" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Graduación</p>
                <h5 class="fw-semibold fs-4">145.000</h5>
                   </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>