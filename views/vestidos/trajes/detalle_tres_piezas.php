 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body class="bg-white">
     <div class="container py-5">
         <div class="row g-4">
            
             <!-- GALERÍA -->
            <div class="col-lg-6">
                <div class="card border-0">
                    <img id="imagen-principal" src="https://i.pinimg.com/1200x/f2/a1/ca/f2a1ca2bac18b0ff4e0e01724e56914b.jpg" class="img-fluid rounded-4 mb-3" alt="Vestido principal">
                </div>
            </div>

<<<<<<< HEAD
<!-- GALERÍA -->
<div class="col-lg-6">
<div class="card border-0">
<img src="./assets/img/bodas/bodas/vestuarios/trajes/tres_piezas.webp" class="img-fluid rounded-4 mb-3" alt="traje principal">
=======
             <!-- INFORMACIÓN -->
             <div class="col-lg-6">
                 <span class="badge bg-light text-dark px-4 py-2 rounded-pill mb-3 fs-1">
                     Bodas
                 </span>
>>>>>>> 685aa399b8615bc4bf1eafc38c7284378ea7aa98

                 <h1 class="display-4 display-md-3 fw-normal lh-1 mt-2">Traje de Tres Piezas</h1>

                 <p class="text-muted mt-2 fs-3">
                     Compuesto por saco, pantalón y chaleco, este traje añade un toque distinguido y estructurado.
                     Ideal para bodas elegantes y novios que desean un look clásico con carácter.

                 <h2 class="fw-bold fs-2 my-3">$650.000</h2>

                 <!-- TALLAS -->
                 <div class="d-flex gap-2 mt-4">
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">S</button>
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">M</button>
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">L</button>
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">XL</button>
                 </div>
                 <div class="d-flex justify-content-start">
                     <a href="index.php?module=bodas&view=principal" class="btn btn-dark px-5 py-3 rounded-pill mt-4">
                         Añadir al carrito
                     </a>
                 </div>
             </div>
         </div>
     </div>
      <div id="carouselDisenos" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner pb-3">

             <div class="carousel-item active">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="https://i.pinimg.com/1200x/6b/db/71/6bdb71ec274afa7fdc5ea439f3bff1ba.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="https://i.pinimg.com/1200x/ab/b5/15/abb515e153147fd7ded0c1653bc91718.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
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