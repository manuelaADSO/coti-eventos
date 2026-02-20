<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Cotizaciones Pendientes</h4>
            <p class="text-muted mb-0">Solicitudes de cotización en espera de respuesta.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-file-earmark-plus"></i> Nueva Cotización
        </a>
    </div>

    <!-- TARJETA -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- FILTROS -->
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar cliente o evento...">
                </div>

                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Prioridad</option>
                        <option>Alta</option>
                        <option>Media</option>
                        <option>Baja</option>
                    </select>
                </div>
            </div>

            <!-- TABLA -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electrónico</th>
                            <th>Evento</th>
                            <th>Fecha Solicitud</th>
                            <th>Presupuesto Estimado</th>
                            <th>Prioridad</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- COTIZACIÓN 1 -->
                        <tr>
                            <td>Ana</td>
                            <td>Martínez</td>
                            <td class="text-nowrap">ana@email.com</td>
                            <td>Boda</td>
                            <td>05/03/2026</td>
                            <td>$3.500.000</td>
                            <td>
                                <span class="badge bg-danger">Alta</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary mb-1">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-success mb-1">Responder</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Archivar</a>
                            </td>
                        </tr>

                        <!-- COTIZACIÓN 2 -->
                        <tr>
                            <td>Laura</td>
                            <td>Gómez</td>
                            <td class="text-nowrap">laura@email.com</td>
                            <td>XV</td>
                            <td>07/03/2026</td>
                            <td>$2.200.000</td>
                            <td>
                                <span class="badge bg-warning text-dark">Media</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary mb-1">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-success mb-1">Responder</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Archivar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- PAGINACIÓN -->
            <nav class="mt-3">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">Siguiente</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
