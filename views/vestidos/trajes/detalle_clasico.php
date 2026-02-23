 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body class="bg-white">
     <div class="container py-5">
         <div class="row g-4">
            
             <!-- GALERÍA -->
             <div class="col-lg-6">
                <div class="card border-0">
                    <img id="imagen-principal" src="./assets/img/eventos/bodas/vestuarios/trajes/traje_clasico.webp" class="img-fluid rounded-4 mb-3" alt="Vestido principal">
                </div>
            </div>

             <!-- INFORMACIÓN -->
             <div class="col-lg-6">
                 <span class="badge bg-light text-dark px-4 py-2 rounded-pill mb-3 fs-1">
                     Bodas
                 </span>

                 <h1 class="display-4 display-md-3 fw-normal lh-1 mt-2">Traje Clasico</h1>

                 <p class="text-muted mt-2 fs-3">
                     De líneas sobrias y corte tradicional, el traje clásico es sinónimo de elegancia atemporal.
                     Perfecto para bodas formales y ceremonias religiosas, aporta distinción y seguridad en cualquier escenario.

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
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/01_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/02_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/03_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/04_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                 </div>
             </div>

             <div class="carousel-item">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/05_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/06_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/07_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bodas/vestuarios/trajes/miniaturas/clasico/08_clasico.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
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