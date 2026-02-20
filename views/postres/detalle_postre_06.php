<body class="bg-light">

<div class="container py-4">

    <!-- CARRUSEL SUPERIOR -->
    <div id="carouselBuffet" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner rounded shadow">

            <div class="carousel-item active">
                <img src="https://i.pinimg.com/1200x/44/b4/30/44b430bce2940a18113bfc68e9811f02.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/f8/4b/c3/f84bc32fe4fb2bc8c1ed36b31d06418a.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/3c/6e/28/3c6e28290a173e572f0a1e61203dd4b7.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBuffet" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselBuffet" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>


    <!-- CONTENIDO PRINCIPAL -->
    <div class="row g-4 align-items-center mb-5">

        <!-- Imagen principal -->
        <div class="col-md-5">
            <img id="imagen-principal"  src="https://i.pinimg.com/1200x/75/2d/d0/752dd003966e759728bb23f903af2110.jpg"
                 class="img-fluid rounded-4 mb-3">
        </div>

        <!-- Texto y precio -->
         <div class="col-md-7 d-flex flex-column">

            <h2 class="fw-semibold mb-4">
                Copas de mousse de chocolate y vainilla con fresa
            </h2>

            <p class="text-muted mb-4">
                Capas de mousse ligera servidas en copas, decoradas con crema y fresas frescas.
                Un postre elegante, cremoso y perfecto para ocasiones especiales.
            </p>

            <label class="fw-semibold text-muted">Cantidad de porciones</label>
            <input type="number" class="form-control mb-4" placeholder="Ej: 50">

            <h3 class="fw-bold">$380.000</h3>

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
                     <img src="./assets/img/banquete/menu/02_menu/comida_1.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/banquete/menu/02_menu/comida_2.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
