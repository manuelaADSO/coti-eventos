 <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

<div class="container py-5">
    <div class="row g-4">

        <!-- GALERÍA -->
        <div class="col-lg-6">
    <div class="card border-0">
      <img id="imagen-principal" src="./assets/img/eventos/bautizos/vestuarios/trajes/conjunto_bautismal.webp" 
             class="img-fluid rounded-4 mb-3" 
             alt="traje principal">
    </div>
</div>

        <!-- INFORMACIÓN -->
        <div class="col-lg-6">
            <span class="badge bg-light text-dark px-4 py-2 rounded-pill mb-3 fs-3 ">
            bautizo
            </span>

            <h1 class="display-1 display-md-3 fw-normal lh-1 mt-2">Conjunto Bautismal Clásico</h1>

            <p class="text-muted mt-5 fs-3">
               Conjunto de pantalón y camisa blanca, a veces acompañado de chaleco y corbatín o moño. 
               Elegante y cómodo, ideal para la ceremonia religiosa y las fotos del bautizo.
            </p>

            <h2 class="display-3 fw-bold my-4 mt-2">$500.000</h2>

            <!-- TALLAS -->
            <div class="d-flex gap-2 mt-5">
                <button class="btn btn-outline-secondary rounded-circle fs-2 px-4">0-3 m</button>
                <button class="btn btn-outline-secondary rounded-circle fs-2 px-4">3-6 m</button>
                <button class="btn btn-outline-secondary rounded-circle fs-2 px-4">6-9 m</button>
                <button class="btn btn-outline-secondary rounded-circle fs-2 px-4">9-12 m</button>
            </div>
             <a href="#" class="btn btn-dark w-100 py-4 fs-2 rounded-pill mt-2">
    Añadir al carrito
</a>
        </div>

<div id="carouselDisenos" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner pb-3">

             <div class="carousel-item active">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/01_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/02_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/03_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/04_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                 </div>
             </div>

             <div class="carousel-item">
                 <div class="d-flex justify-content-center gap-3">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/05_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/06_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/07_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
                         onclick="cambiarImagen(this)">
                     <img src="./assets/img/eventos/bautizos/vestuarios/trajes/miniaturas/bautismal/08_bautismal.webp" class="rounded-4" style="width:300px; height:420px; object-fit:cover; cursor:pointer;"
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

</body>