<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Detalle de Plato</title>
</head>

<body class="bg-light">

<div class="container py-4">

    <!-- CARRUSEL -->
    <div id="carouselBuffet" class="carousel slide mb-4" data-bs-ride="carousel" >
        <div class="carousel-inner rounded shadow">

            <div class="carousel-item active">
                <img src="./assets/img/banquete/menu/carne_pasta.webp"
                     class="d-block w-100"
                     style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/inicio/comida_1.webp"
                     class="d-block w-100"
                     style="height:450px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="./assets/img/banquete/inicio/comida_3.webp"
                     class="d-block w-100"
                     style="height:450px; object-fit:cover;">
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBuffet" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselBuffet" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>


    <!-- CONTENIDO -->
    <div class="row g-4">

        <!-- Imagen principal -->
        <div class="col-md-5">
             <img id="imagen-principal" src="./assets/img/banquete/menu/carne_pasta.webp"
                 class="img-fluid rounded-4 mb-3">
        </div>

        <!-- Texto y precio -->
         <div class="col-md-7 d-flex flex-column">

            <div>
                <h1 class="display-1 display-md-3 fw-normal lh-1 mt-2">Carne a la parrilla con pasta cremosa de camarones</h1>

                <p class="text-muted mt-2 fs-3">
                  Corte de carne jugoso y bien sellado, acompañado de pasta en salsa cremosa con camarones.
Un plato elegante que combina sabores intensos del mar y la parrilla.
                </p>

                <!-- Input -->
                <label class="fw-semibol text-muted fs-3">cantidad de porciones</label>
                <input type="text" class="form-control mb-3" placeholder="Value">
            </div>

            <!-- Precio y botón -->
            <div>
                <h3 class="fw-semibold fs-3">$380.000</h3>
            </div>
            
<!-- botón de carrito -->
             <div class="d-flex justify-content-start">
                     <a href="<?= BASE_URL ?>module=platillos&view=principal" class="btn btn-dark px-5 py-3 rounded-pill mt-4">
                         Añadir al carrito
                     </a>
                 </div>
        </div>
    </div>


    <div id="carouselDisenos" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner pb-3">

             <div class="carousel-item active">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="./assets/img/banquete/menu/06_menu/comida_1.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/banquete/menu/06_menu/comida_2.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="assets/img/galeria/baby-showers/galeria_baby1.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="assets/img/galeria/cumpleaños/galeria_cumple1.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                 </div>
             </div>

             <div class="carousel-item">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="assets/img/galeria/bodas/galeria_boda2.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="assets/img/galeria/bautizos/galeria_bautizos1.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="assets/img/galeria/bautizos/galeria_bautizos2.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="assets/img/galeria/cumpleaños/galeria_cumple2.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                 </div>
             </div>
         </div>
     </div>
     <script>
         function cambiarImagen(imagenPequena) {
            document.getElementById("imagen-principal").src = imagenPequena.src;
         }
     </script>
 </body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>