 <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body class="bg-white">

     <div class="container py-5">
         <div class="row g-4">

             <!-- GALERÍA -->
             <div class="col-lg-6">
                 <div class="card border-0">
                     <img id="imagen-principal" src="https://i.pinimg.com/736x/fd/92/c4/fd92c46a05e32daa42fe69ea1281f926.jpg" class="img-fluid rounded-4 mb-3" alt="Vestido principal">
                 </div>
             </div>

             <!-- INFORMACIÓN -->
             <div class="col-lg-6">
                 <span class="badge bg-light text-dark px-4 py-2 rounded-pill mb-3 fs-1 ">
                     bautizo
                 </span>

                 <h1 class="display-4 display-md-3 fw-normal lh-1 mt-2">Vestido Blanco Clásico</h1>

                 <p class="text-muted mt-2 fs-3">
                     Vestido tradicional en color blanco o crema, generalmente hasta la rodilla o un poco más largo.
                     Suele incluir encaje, lazos o bordados delicados, aportando un look elegante y ceremonial, ideal para fotos memorables y la ceremonia religiosa.
                 </p>

                 <h2 class="fw-bold fs-2 my-3">$500.000</h2>

                 <!-- TALLAS -->
                 <div class="d-flex gap-2 mt-4">
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">0-3 m</button>
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">3-6 m</button>
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">6-9 m</button>
                     <button class="btn btn-outline-secondary rounded-circle px-3 py-2">9-12 m</button>
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
                     <img src="https://i.pinimg.com/1200x/d0/64/81/d06481afec48587da23e865c8762da64.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="https://i.pinimg.com/1200x/d0/5a/64/d05a648a9b29f13a13bde719ff20ece7.jpg" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
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