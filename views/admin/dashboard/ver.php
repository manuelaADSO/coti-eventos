<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Dashboard</h4>
        <p class="text-muted mb-0">Resumen general del sistema y accesos rápidos a los módulos.</p>
    </div>

    <!-- TARJETAS DE RESUMEN -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-primary h-100">
                <div class="card-body">
                    <h6 class="card-title">Usuarios Registrados</h6>
                    <h3 class="fw-bold">120</h3>
                    <p class="small mb-0"><i class="bi bi-person-fill"></i> Total de usuarios</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-success h-100">
                <div class="card-body">
                    <h6 class="card-title">Eventos Programados</h6>
                    <h3 class="fw-bold">45</h3>
                    <p class="small mb-0"><i class="bi bi-calendar-event-fill"></i> Próximos eventos</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-warning h-100">
                <div class="card-body">
                    <h6 class="card-title">Cotizaciones Pendientes</h6>
                    <h3 class="fw-bold">18</h3>
                    <p class="small mb-0"><i class="bi bi-file-text-fill"></i> Por revisar</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-danger h-100">
                <div class="card-body">
                    <h6 class="card-title">Equipos Disponibles</h6>
                    <h3 class="fw-bold">32</h3>
                    <p class="small mb-0"><i class="bi bi-speaker-fill"></i> Total de equipos</p>
                </div>
            </div>
        </div>

    </div>

    <!-- ACCESOS RÁPIDOS -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <a href="index.php?module=usuarios&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-people-fill fs-1 mb-2"></i>
                    <h6 class="fw-bold">Usuarios</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="index.php?module=eventos&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-calendar-event fs-1 mb-2"></i>
                    <h6 class="fw-bold">Eventos</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="index.php?module=cotizaciones&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-file-earmark-text fs-1 mb-2"></i>
                    <h6 class="fw-bold">Cotizaciones</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="index.php?module=equipo_sonido&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-speaker fs-1 mb-2"></i>
                    <h6 class="fw-bold">Equipos de Sonido</h6>
                </div>
            </a>
        </div>
    </div>

    <!-- GRÁFICOS -->
    <div class="row g-4">

        <!-- EVENTOS POR MES -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title mb-4">Eventos por Mes</h5>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Enero</span>
                            <span>5</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 20%"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Febrero</span>
                            <span>8</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 35%"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Marzo</span>
                            <span>12</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 50%"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Abril</span>
                            <span>7</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 30%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Mayo</span>
                            <span>10</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 45%"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- COTIZACIONES POR ESTADO -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title mb-4">Cotizaciones por Estado</h5>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Pendientes</span>
                        <span class="badge bg-warning fs-6">18</span>
                    </div>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" style="width: 45%"></div>
                    </div>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Aprobadas</span>
                        <span class="badge bg-success fs-6">25</span>
                    </div>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" style="width: 65%"></div>
                    </div>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Rechazadas</span>
                        <span class="badge bg-danger fs-6">7</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width: 20%"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
