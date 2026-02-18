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
                Baby Showers
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
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_comodo" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/vestidos/vestido_comodo.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Cómodo y Holgado</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_ajustado" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/vestidos/vestido_ajustado.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Midi Ajustado</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_bordado" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/vestidos/vestido_encaje.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido con Encaje o Bordado</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_floral" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/vestidos/vestido_floral.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Estampado o Floral</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Trajes masculinos -->
    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_casual" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/trajes/conjunto_casual.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Conjunto casual elegante</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_moderno" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/trajes/conjunto_moderno.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Look semiformal moderno</h6>
                    <p class="fw-bold mb-0">$700.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_familiar" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/trajes/conjunto_familiar.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Estilo familiar combinado</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_jeans" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/eventos/baby_showers/vestuarios/trajes/conjunto_jeans.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Outfit casual con jeans</h6>
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