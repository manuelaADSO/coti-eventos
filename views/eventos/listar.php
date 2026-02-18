<!-- ===================== CARRUSEL ===================== -->
<div id="carouselEventos" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-indicators">
<button data-bs-target="#carouselEventos" data-bs-slide-to="0" class="active"></button>
<button data-bs-target="#carouselEventos" data-bs-slide-to="1"></button>
<button data-bs-target="#carouselEventos" data-bs-slide-to="2"></button>
</div>

<div class="carousel-inner">

<div class="carousel-item active">
<img src="./assets/img/eventos/inicio/evento_1.webp"
class="d-block w-100"
style="height:300px; object-fit:cover;">
</div>

<div class="carousel-item">
<img src="./assets/img/eventos/inicio/evento_2.webp"
class="d-block w-100" style="height:300px; object-fit:cover;">
</div>

<div class="carousel-item">
<img src="./assets/img/eventos/inicio/evento_3.webp"
class="d-block w-100" style="height:300px; object-fit:cover;">
</div>
</div>

<button class="carousel-control-prev" data-bs-target="#carouselEventos" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" data-bs-target="#carouselEventos" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>

<!-- ===================== TITULO ===================== -->
<div class="container text-center mb-5">
<h2 class="fw-bold text-uppercase">Selecciona el tipo de evento </h2>
</div>

<div class="container pb-5">
<div class="row g-4"> 
    

<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm rounded-0">
<img src="./assets/img/eventos/inicio/graduacion.webp"
class="card-img-top rounded-0" style="height:250px; object-fit:cover;">
<a href="<?= BASE_URL ?>module=graduaciones&view=principal" class="btn btn-secondary w-100 fw-bold py-3 text-uppercase rounded-0 border-0 text-decoration-none text-center">
Graduaciones </a>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm rounded-0">
<img src="./assets/img/eventos/inicio/baby_showers.webp"
class="card-img-top rounded-0" style="height:250px; object-fit:cover;">
<a href="<?= BASE_URL ?>module=baby_showers&view=principal" class="btn btn-secondary w-100 fw-bold py-3 text-uppercase rounded-0 border-0 text-decoration-none text-center">
Baby Showers </a>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm rounded-0">
<img src="./assets/img/eventos/inicio/bautizo.webp"
class="card-img-top rounded-0" style="height:250px; object-fit:cover;">
<a href="<?= BASE_URL ?>module=bautizos&view=principal" class="btn btn-secondary w-100 fw-bold py-3 text-uppercase rounded-0 border-0 text-decoration-none text-center">
Bautizos </a>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm rounded-0">
<img src="./assets/img/eventos/inicio/cumple.webp"
class="card-img-top rounded-0" style="height:250px; object-fit:cover;">
<a href="<?= BASE_URL ?>module=cumple&view=principal" class="btn btn-secondary w-100 fw-bold py-3 text-uppercase rounded-0 border-0 text-decoration-none text-center">
Cumpleaños </a>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm rounded-0">
<img src="./assets/img/eventos/inicio/bodas.webp"
class="card-img-top rounded-0" style="height:250px; object-fit:cover;">
<a href="<?= BASE_URL ?>module=bodas&view=principal" class="btn btn-secondary w-100 fw-bold py-3 text-uppercase rounded-0 border-0 text-decoration-none text-center">
Matrimonios </a>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm rounded-0">
<img src="./assets/img/eventos/inicio/xv.webp"
class="card-img-top rounded-0" style="height:250px; object-fit:cover;">
<a href="<?= BASE_URL ?>module=xv&view=principal" class="btn btn-secondary w-100 fw-bold py-3 text-uppercase rounded-0 border-0 text-decoration-none text-center">
XV Años </a>
</div>
</div>

</div>
</div>
</main>

        <!-- </div>
    </div> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
