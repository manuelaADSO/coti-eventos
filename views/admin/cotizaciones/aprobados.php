<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Cotizaciones Aprobadas</h4>
            <p class="text-muted mb-0">Cotizaciones confirmadas por los clientes.</p>
        </div>

        <a href="#" class="btn btn-success">
            <i class="bi bi-check2-circle"></i> Ver Eventos Generados
        </a>
    </div>

    <!-- TARJETA -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- FILTROS -->
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar nombre, apellido o evento...">
                </div>

                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tipo de evento</option>
                        <option>Boda</option>
                        <option>XV</option>
                        <option>Cumpleaños</option>
                        <option>Evento corporativo</option>
                    </select>
                </div>
            </div>

            <!-- TABLA -->
            <div class="table-responsive" style="min-width:1100px;">
                <table class="table table-hover align-middle w-100">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electrónico</th>
                            <th>Evento</th>
                            <th>Fecha Aprobación</th>
                            <th>Monto Aprobado</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- COTIZACIÓN APROBADA 1 -->
                        <tr>
                            <td>Ana</td>
                            <td>Martínez</td>
                            <td>ana@email.com</td>
                            <td>Boda</td>
                            <td>10/03/2026</td>
                            <td>$3.500.000</td>
                            <td>
                                <span class="badge bg-success">Aprobada</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Generar Evento</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Descargar PDF</a>
                            </td>
                        </tr>

                        <!-- COTIZACIÓN APROBADA 2 -->
                        <tr>
                            <td>Laura</td>
                            <td>Gómez</td>
                            <td>laura@email.com</td>
                            <td>XV</td>
                            <td>12/03/2026</td>
                            <td>$2.200.000</td>
                            <td>
                                <span class="badge bg-success">Aprobada</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Generar Evento</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Descargar PDF</a>
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
