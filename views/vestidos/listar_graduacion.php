<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elige Tu Vestido y Traje Ideal</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

<!-- Header -->
<<div class="container my-4">
    <div class="row align-items-start">

        <!-- TÍTULO -->
        <div class="col-md-8">
            <h1 class="fw-semibold text-dark">
                Elige Tu Vestido y Traje Ideal
            </h1>
        </div>

        <!-- BOTÓN ARRIBA A LA DERECHA -->
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="#"
               class="btn bg-secondary-subtle text-dark fw-semibold fs-4 px-4 py-2 rounded-4">
            graduación
            </a>
        </div>

    </div>
</div>
<!-- Selector de género -->
<div class="row mb-4">
    <div class="col-md-6">
        <label class="form-label fw-semibold fs-5">Seleccionar género</label>
        <select class="form-select rounded-3" id="genero">
            <option value="femenino" selected>Femenino</option>
            <option value="masculino">Masculino</option>
        </select>
    </div>
</div>

<!-- Grid de productos -->
<div class="row g-4 text-center">

    <!-- Vestidos femeninos -->
    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_elegante" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_largo.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Largo Elegante</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_corto" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_corto.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Corto o Coctel</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_estraple" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_straple.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Strapless o Sin Hombros</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_tul" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/vestidos/vestido_manga.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido de Una Sola Manga</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Trajes masculinos -->
    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_negro_clasico" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_negro.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje clásico negro</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_azul_moderno" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_azul.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje azul oscuro moderno</h6>
                    <p class="fw-bold mb-0">$700.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_gris_elegante" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_gris.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje gris elegante</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_blazer_semiformal" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/graduacion/vestuarios/trajes/traje_semiformal.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Estilo semiformal con blazer</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script personalizado -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Mostrar/ocultar productos según género
    const generoSelect = document.getElementById('genero');
    generoSelect.addEventListener('change', function () {
        const generoSeleccionado = this.value;
        const productos = document.querySelectorAll('.producto');

        productos.forEach(producto => {
            if (producto.dataset.genero === generoSeleccionado) {
                producto.classList.remove('d-none');
            } else {
                producto.classList.add('d-none');
            }
        });
    });
});

</script>
</body>
</html>