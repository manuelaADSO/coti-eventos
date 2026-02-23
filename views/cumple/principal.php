<!-- BOTÓN ARRIBA A LA DERECHA -->
<div class="col-md-6 text-md-end mt-3 mt-md-3 px-2">
    <a href="#"
        class="btn bg-secondary-subtle text-dark fw-semibold fs-4 px-4 py-2 rounded-4">
          Un cumpleaños inolvidable comienza aquí
    </a>
</div>

<main class="container-fluid my-3 flex-grow-1">

    <div id="weddingCarousel" class="carousel slide mb-5 shadow" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4">
            <div class="carousel-item active">
                <img src="./assets/img/eventos/cumple/inicio/evento_1.webp" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="Boda 1">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/eventos/cumple/inicio/evento_2.webp" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="Boda 2">
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
                <img src="./assets/img/eventos/cumple/inicio/evento_3.webp" 
                     class="object-fit-cover" 
                     alt="Pareja">
            </div>
        </div>

        <div class="col-lg-7">
            <h1 class="display-4 fw-light mb-5">Cumpleaños</h1>
<p class="lead text-dark fs-4">Tu cumpleaños merece mucho más que una fiesta: merece convertirse en un recuerdo lleno de alegría, emociones y momentos inolvidables.
Diseñamos una atmósfera única donde cada detalle celebra la vida, reuniendo sonrisas, abrazos y sorpresas que transforman este día especial en una experiencia que permanecerá para siempre en el corazón.</p>
            <p class="text-muted mb-5 fs-4">Diseñamos experiencias únicas y cuidamos cada detalle.</p>

            <div class="list-group list-group-flush">

    <a href="<?= BASE_URL ?>module=vestidos&view=listar_cumple"
    
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-danger-subtle">

        <div class="d-flex align-items-start">
            <i class="bi bi-stars me-3 text-danger fs-3"></i>
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Vestuarios</div>
                <small class="text-muted">
                    Atuendos divertidos y coloridos adultos que quieren brillar en su día especial.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

    <a href="<?= BASE_URL ?>module=platillos&view=principal"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-info-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-cup-hot-fill me-3 text-info fs-3"></i>
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Banquete Personalizado</div>
                <small class="text-muted">
                    Deliciosos bocadillos y dulces para celebrar con alegría cada año de vida.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

    <a href="<?= BASE_URL ?>module=sonido&view=principal"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-warning-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-music-note-beamed me-3 text-warning fs-3"></i>
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Música y diversión</div>
                <small class="text-muted">
                    Canciones y ritmos animados que harán que todos bailen y disfruten la fiesta.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

    <a href="<?= BASE_URL ?>module=fotografia&view=principal"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-success-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-camera-video-fill me-3 text-success fs-3"></i>
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Fotografía y recuerdos</div>
                <small class="text-muted">
                    Captura los momentos más felices y espontáneos de la celebración.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

</div>


</div>
</div>
</main>