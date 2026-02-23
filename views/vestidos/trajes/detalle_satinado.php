 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body class="bg-white">
<div class="container py-5">
<div class="row g-4">

<!-- GALERÍA -->
<div class="col-lg-6">
                 <div class="card border-0">
                     <img id="imagen-principal" src="./assets/img/eventos/xv/vestuarios/trajes/traje_satinado.webp" class="img-fluid rounded-4 mb-3" alt="Vestido principal">
                 </div>
             </div>

<!-- INFORMACIÓN -->
<div class="col-lg-6">
<span class="badge bg-light text-dark px-4 py-2 rounded-pill mb-3 fs-1">
XV
</span>

<h1 class="display-1 display-md-3 fw-normal lh-1 mt-5">Traje gris oscuro con detalles satinados</h1>

<p class="text-muted mt-5 fs-1">
Saco y pantalón en gris oscuro con solapas o accesorios en acabado satinado.
 Aporta un toque moderno y sofisticado, ideal para eventos nocturnos y celebraciones formales.
<h2 class="display-3 fw-bold my-4 mt-4">$650.000</h2>

<!-- TALLAS -->
<div class="d-flex gap-2 mt-5">
<button class="btn btn-outline-secondary rounded-circle fs-2 px-4">S</button>
<button class="btn btn-outline-secondary rounded-circle fs-2 px-4">M</button>
<button class="btn btn-outline-secondary rounded-circle fs-2 px-4">L</button>
<button class="btn btn-outline-secondary rounded-circle fs-2 px-4">XL</button>
</div>
                   <a href="#" class="btn btn-dark w-100 py-4 fs-2 rounded-pill mt-5">
    Añadir al carrito
</a>
</div>
<div id="carouselDisenos" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner pb-3">

             <div class="carousel-item active">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/01_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/02_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/03_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/04_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                 </div>
             </div>

             <div class="carousel-item">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/05_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/06_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/07_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/xv/vestuarios/trajes/miniaturas/satinado/08_satinado.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
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
</div>
</div>
</div>
</div>
</div>
</div>
</body>