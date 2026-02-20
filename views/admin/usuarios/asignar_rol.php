<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold">Asignar Rol a Usuario</h4>
        <p class="text-muted mb-0">Selecciona un usuario y asígnale un rol dentro del sistema.</p>
    </div>

    <!-- TARJETA PRINCIPAL -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="#" method="POST">

                <div class="row g-3">

                    <!-- NOMBRE -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" required>
                    </div>

                    <!-- APELLIDO -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingresa el apellido" required>
                    </div>

                    <!-- CORREO -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Correo electrónico</label>
                        <input type="email" class="form-control" name="correo" placeholder="ejemplo@correo.com" required>
                    </div>

                    <!-- ROL -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Rol</label>
                        <select class="form-select" name="rol_id" required>
                            <option value="">Seleccione un rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                        </select>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar Asignación
                    </button>

                    <a href="#" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
