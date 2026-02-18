
<!-- ===================== -->
<!--  CARRUSEL SUPERIOR     -->
<!-- ===================== -->
 
<div id="carouselCoti" class="carousel slide" data-bs-ride="carousel" 
    style="height: 450px; overflow: hidden;">

    <!-- Indicadores -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselCoti" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselCoti" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselCoti" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="./assets/img/inicio/evento.webp"
                class="d-block w-100"
                style="height: 500px; object-fit: cover;"
                alt="evento 1">
        </div>

        <div class="carousel-item">
            <img src="./assets/img/inicio/evento_2.webp"
                class="d-block w-100"
                style="height: 500px; object-fit: cover;"
                alt="evento 2">
        </div>

        <div class="carousel-item">
            <img src="./assets/img/inicio/dulces.webp"
                class="d-block w-100"
                style="height: 500px; object-fit: cover;"
                alt="evento 3">
        </div>

    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCoti" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselCoti" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- ===================== -->
<!--  QUIÉNES SOMOS         -->
<!-- ===================== -->

<div class="container mt-4 mb-5">
    <div class="row align-items-start">

        <!-- TEXTO + 2 IMÁGENES IZQUIERDA -->
        <div class="col-md-5">
            <h3 class="fw-semibold text-center mb-3">¿Quiénes Somos?</h3>

            <p>
                En CotiEventos la logística en eventos se transforma en una experiencia 
                llena de pasión, dedicación y experiencia para hacer realidad cada sueño.
            </p>

            <p>
                Más que proveedores, somos aliados estratégicos que cuidan cada detalle, 
                desde la idea inicial hasta el último aplauso, garantizando que todo sea perfecto y memorable.
            </p>
        </div>

        <!-- 4 IMÁGENES DERECHA -->
         <div class="col-md-7">
            <div class="row g-3">

                <div class="col-4">
                    <img src="./assets/img/inicio/salon.webp"
                         class="img-fluid rounded w-100"
                         style="height: 220px; object-fit: cover;"
                         alt="Salón">
                </div>

                <div class="col-4">
                    <img src="./assets/img/inicio/mesa_dulce.webp"
                         class="img-fluid rounded w-100"
                         style="height: 220px; object-fit: cover;"
                         alt="Comida">
                </div>

                <div class="col-4">
                    <img src="./assets/img/inicio/boda.webp"
                         class="img-fluid rounded w-100"
                         style="height: 220px; object-fit: cover;"
                         alt="Boda">
                </div>
        </div>

    </div>


    <div class="text-center mt-4">
    <a href="<?= BASE_URL ?>module=eventos&view=listar"
       class="btn btn-secondary btn-lg rounded-pill px-5">
        Empezar a cotizar tu evento
    </a>


    
</div>
</div>