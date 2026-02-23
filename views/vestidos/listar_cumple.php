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
        <div class="row align-items-center mb-4">
            <!-- Título -->
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <h1 class="fw-semibold">Elige Tu Vestido y Traje Ideal</h1>
            </div>

            <!-- BOTÓN ARRIBA A LA DERECHA -->
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="#"
               class="btn bg-secondary-subtle text-dark fw-semibold fs-4 px-4 py-2 rounded-4">
                Cumpleaños
            </a>
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
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_corto.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Vestido Corto Casual</h4>
                        <p class="fw-bold mb-0">
                        <h4>$500.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_casual" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 producto" data-genero="femenino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_coctel.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Vestido Fiesta o Coctel</h4>
                        <p class="fw-bold mb-0">
                        <h4>$500.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_fiesta" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 producto" data-genero="femenino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_largo.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Vestido Largo Elegante</h4>
                        <p class="fw-bold mb-0">
                        <h4>$500.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_largo" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 producto" data-genero="femenino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/vestidos/vestido_capas.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Vestido con Volantes o Capas</h4>
                        <p class="fw-bold mb-0">
                        <h4>$500.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_volante" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <!-- Trajes masculinos -->
            <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_casual.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Conjunto casual elegante</h4>
                        <p class="fw-bold mb-0">
                        <h4>$650.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_casual_elegante" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_jeans.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Outfit relajado con jeans</h4>
                        <p class="fw-bold mb-0">
                        <h4>$700.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_relajado_jeans" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/trajes/conjunto_moderno.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Look semiformal moderno</h4>
                        <p class="fw-bold mb-0">
                        <h4>$650.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_semiformal_moderno" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="./assets/img/eventos/cumple/vestuarios/trajes/traje_sin_corbata.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mb-1">Traje contemporáneo sin corbata</h4>
                        <p class="fw-bold mb-0">
                        <h4>$650.000</h4>
                        </p>
                        <!-- Flecha -->
                        <div class="text-center mt-2">
                            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_comtemporaneo" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <button class="btn btn-sm btn-outline-secondary"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#infoSirena">
                                    Ver más
                                </button>
                            </a>
                        </div>
                    </div>
                    </a>
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
            generoSelect.addEventListener('change', function() {
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