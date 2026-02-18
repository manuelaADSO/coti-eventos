<main class="container-fluid my-5 flex-grow-1">

<div id="weddingCarousel" class="carousel slide mb-5 shadow" data-bs-ride="carousel">
<div class="carousel-inner rounded-4 ">
<div class="carousel-item active">
<img src="./assets/img/banquete/inicio/comida_1.webp" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="platillo 1">
</div>
<div class="carousel-item">
<img src="./assets/img/banquete/inicio/comida_2.webp" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="platillo 2">
</div>
</div>
       
<button class="carousel-control-prev" type="button" data-bs-target="#weddingCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#weddingCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
</button>
</div>

<div class="row align-items-center g-5">
        
<div class="col-lg-5 text-center">
<div class="ratio ratio-1x1 mx-auto shadow-lg rounded-circle overflow-hidden" style="max-width: 400px;">
<img src="./assets/img/banquete/inicio/comida_3.webp" 
class="object-fit-cover" 
alt="comida">
</div>
</div>

<div class="col-lg-7">
<h1 class="display-4 fw-light mb-3">Platillos</h1>
<p class="lead text-dark">Una selección de platillos elegantes con una presentación cuidada y moderna, dispuestos individualmente con detalle y armonía. 
Cada plato resalta por su diseño sofisticado, acompañado de luces cálidas y delicados arreglos florales que realzan la experiencia visual y gastronómica.
Una propuesta refinada, ideal para elevar celebraciones y eventos especiales con un toque de distinción.</p>

<div class="list-group list-group-flush">

<a href="<?= BASE_URL ?>module=menu&view=listar"
   class="list-group-item list-group-item-action border-0 bg-primary-subtle px-3 py-4 d-flex align-items-center rounded-3 mb-3 shadow-sm">

    <i class="bi bi-egg-fried me-3 text-primary fs-2 p-3 bg-white rounded-circle shadow-sm"></i>

    <div>
        <span class="fs-4 fw-semibold text-primary d-block">Menú</span>
        <small class="text-muted">Platos principales preparados con sabor casero y variedad para todos los gustos.</small>
    </div>

    <i class="bi bi-chevron-right ms-auto text-primary fs-5"></i>
</a>

<a href="<?= BASE_URL ?>module=postres&view=listar"
   class="list-group-item list-group-item-action border-0 bg-danger-subtle px-3 py-4 d-flex align-items-center rounded-3 mb-3 shadow-sm">

    <i class="bi bi-cake me-3 text-danger fs-2 p-3 bg-white rounded-circle shadow-sm"></i>

    <div>
        <span class="fs-4 fw-semibold text-danger d-block">Postres</span>
        <small class="text-muted">Deliciosas opciones dulces para cerrar tu experiencia con un toque especial.</small>
    </div>

    <i class="bi bi-chevron-right ms-auto text-danger fs-5"></i>
</a>

<a href="<?= BASE_URL ?>module=cocteles&view=listar"
   class="list-group-item list-group-item-action border-0 bg-success-subtle px-3 py-4 d-flex align-items-center rounded-3 mb-3 shadow-sm">

    <i class="bi bi-cup-straw me-3 text-success fs-2 p-3 bg-white rounded-circle shadow-sm"></i>

    <div>
        <span class="fs-4 fw-semibold text-success d-block">Cócteles</span>
        <small class="text-muted">Bebidas refrescantes y creativas ideales para cualquier celebración.</small>
    </div>

    <i class="bi bi-chevron-right ms-auto text-success fs-5"></i>
</a>

<a href="<?= BASE_URL ?>module=tortas&view=listar"
   class="list-group-item list-group-item-action border-0 bg-warning-subtle px-3 py-4 d-flex align-items-center rounded-3 mb-3 shadow-sm">

    <i class="bi bi-cake2 me-3 text-warning fs-2 p-3 bg-white rounded-circle shadow-sm"></i>

    <div>
        <span class="fs-4 fw-semibold text-warning d-block">Tortas</span>
        <small class="text-muted">Tortas personalizadas perfectas para cumpleaños, eventos y momentos únicos.</small>
    </div>

    <i class="bi bi-chevron-right ms-auto text-warning fs-5"></i>
</a>

</div>

</div>
</div>
</main>