<?php
// ==========================================================
// 1. OBTENCIÓN DE DATOS DE LA BASE DE DATOS
// ==========================================================

// require_once './includes/Database.php'; 

try {
    $db = Database::getInstance()->getConnection(); 

    // Obtener Tipos de Documento
    $query_doc = "SELECT id_tipo_documento, nombre FROM tipo_documento ORDER BY nombre ASC";
    $stmt_doc = $db->prepare($query_doc);
    $stmt_doc->execute();
    $tipos_documento = $stmt_doc->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $tipos_documento = []; 
    error_log("Error al cargar datos del formulario: " . $e->getMessage());
}

// Configuración de la vista
$base_url = "index.php"; 
$exitoso = $_SESSION['success'] ?? null;
unset($_SESSION['success']);

$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

            <?php if ($error): ?>
                <div class="alert alert-danger text-center mb-4 rounded" role="alert">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($exitoso): ?>
                <div class="alert alert-success text-center mb-4 rounded" role="alert">
                    <?= htmlspecialchars($exitoso) ?>
                </div>
            <?php endif; ?>
            
            <div class="bg-light p-4 rounded-3 shadow-sm">
                
                <form action="<?= BASE_URL ?>module=usuarios&action=crear" method="POST">

                    <div class="row">

                        <!-- Nombre -->
                        <div class="col-md-6 mb-3">
                            <input type="text"
                                name="nombre"
                                class="form-control text-center rounded"
                                placeholder="Nombre"
                                required>
                        </div>

                            <!-- Apellido-->
                        <div class="col-md-6 mb-3">
                            <input type="text"
                                name="apellidos"
                                class="form-control text-center rounded"
                                placeholder="apellido"
                                required>
                        </div>

                         <!-- Tipo documento -->
                        <div class="col-md-6 mb-3">
                            <select name="id_tipo_documento" class="form-select text-center rounded" required>
                                <option value="" disabled selected>Tipo Doc.</option>
                                <?php foreach ($tipos_documento as $tipo): ?>
                                    <option value="<?= $tipo['id_tipo_documento'] ?>">
                                        <?= htmlspecialchars($tipo['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Número documento -->
                        <div class="col-md-6 mb-3">
                            <input type="text"
                                name="documento"
                                class="form-control text-center rounded"
                                placeholder="Número de Documento"
                                required>
                        </div>

                        <!-- Dirección -->
                        <div class="col-md-6 mb-4">
                            <input type="text"
                                name="direccion"
                                class="form-control text-center rounded"
                                placeholder="Dirección completa"
                                required>
                        </div>

                       <!-- Teléfono móvil -->
                        <div class="col-md-6 mb-3">
                            <input type="tel"
                                name="telefono_movil"
                                class="form-control text-center rounded"
                                placeholder="Teléfono Móvil"
                                required>
                        </div>

                        <!-- Teléfono fijo -->
                        <div class="col-md-6 mb-3">
                            <input type="tel"
                                name="telefono_fijo"
                                class="form-control text-center rounded"
                                placeholder="Teléfono Fijo (Opcional)">
                        </div>

                        <!-- Correo -->
                        <div class="col-md-6 mb-3">
                            <input type="email"
                                name="email"
                                class="form-control text-center rounded"
                                placeholder="Correo electrónico"
                                required>
                        </div>

                        <!-- Contraseña -->
                        <div class="col-12 mb-3">
                            <input type="password"
                                name="password"
                                class="form-control text-center rounded"
                                placeholder="Contraseña"
                                required>
                                </div>
                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3">
                        <button type="submit" class="btn btn-light px-4 border rounded-pill">
                            Registrar Usuario
                        </button>

                        <a href="<?= BASE_URL ?>module=usuarios&view=login"
                           class="btn btn-light border rounded-pill px-4">
                            Volver a iniciar sesión
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>