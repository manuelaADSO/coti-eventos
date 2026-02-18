<main class="container-fluid my-5 flex-grow-1">

    <div id="weddingCarousel" class="carousel slide mb-5 shadow" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4">
            <div class="carousel-item active">
                <img src="./assets/img/eventos/xv/inicio/evento_1.webp" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="xv">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/eventos/xv/inicio/evento_2.webp" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="xv">
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
                <img src="./assets/img/eventos/xv/inicio/evento_3.webp" 
                     class="object-fit-cover" 
                     alt="Pareja">
            </div>
        </div>

        <div class="col-lg-7">
            <h1 class="display-4 fw-light mb-5">XV Años</h1>
<p class="lead text-dark fs-4">Tus XV años merecen mucho más que una fiesta: merecen convertirse en un recuerdo mágico que marque el inicio de una nueva etapa.
Creamos una atmósfera soñada donde cada detalle resalta la belleza, la ilusión y la alegría de este momento único,
capturando sonrisas, emociones y miradas que transforman esta celebración inolvidable en el comienzo más brillante de tu historia.</p>
            <p class="text-muted mb-5 fs-4">Diseñamos experiencias únicas y cuidamos cada detalle.</p>

            <div class="list-group list-group-flush">

    <!-- Vestuarios -->
    <a href="<?= BASE_URL ?>module=vestidos&view=listar_xv"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-danger-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-stars me-3 text-danger fs-3"></i> 
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Vestuarios</div>
                <small class="text-muted">
                    Elegantes vestidos y trajes para que la quinceañera y sus acompañantes brillen con estilo.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

    <!-- Banquete -->
    <a href="<?= BASE_URL ?>module=platillos&view=principal"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-warning-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-cup-hot-fill me-3 text-warning fs-3"></i> 
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Banquete Personalizado</div>
                <small class="text-muted">
                    Menús especiales y dulces elegantes para celebrar este día tan esperado.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

    <!-- Música -->
    <a href="<?= BASE_URL ?>module=sonido&view=principal"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-success-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-music-note-beamed me-3 text-success fs-3"></i>
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Música y baile</div>
                <small class="text-muted">
                    Selección de música para que todos disfruten y la quinceañera tenga un momento inolvidable.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

    <!-- Fotografía -->
    <a href="<?= BASE_URL ?>module=fotografia&view=principal"
       class="list-group-item list-group-item-action rounded-3 mb-2 py-4 px-3 bg-info-subtle">
        <div class="d-flex align-items-start">
            <i class="bi bi-camera-video-fill me-3 text-info fs-3"></i> 
            <div class="flex-grow-1">
                <div class="fs-4 fw-semibold text-dark">Fotografía y recuerdos</div>
                <small class="text-muted">
                    Captura cada momento especial de la celebración para que perdure por siempre.
                </small>
            </div>
            <i class="bi bi-chevron-right ms-2 text-dark"></i>
        </div>
    </a>

</div>

</div>
</div>
</main>