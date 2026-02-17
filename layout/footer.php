<footer class="bg-dark text-white py-4 mt-auto">
        <div class="container fluid">
            <div class="row align-items-center">

                <!-- MENÚ IZQUIERDA -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <ul class="list-unstyled">
                        <li>
                            <a href="<?= BASE_URL ?>" class="text-white text-decoration-none">• Inicio</a>
                        </li>
                        <li>
                            <a href="index.php?module=eventos&view=listar" class="text-white text-decoration-none">• Servicios</a>
                        </li>
                        <li>
                            <a href="index.php?module=album&view=galeria" class="text-white text-decoration-none">• Galería</a>
                        </li>
                        <li>
                            <a href="#" class="text-white text-decoration-none">• Contáctanos</a>
                        </li>
                    </ul>
                </div>

                <!-- TEXTO CENTRO -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <p class="mb-0">Organización de Eventos San Luis - Antioquia</p>
                    <p class="mb-0">&copy; <?= date('Y') ?> CotiEventos</p>
                </div>

                <!-- REDES DERECHA -->
                <div class="col-md-4 d-flex justify-content-md-end justify-content-center gap-3 align-items-center">
                    <a href="https://wa.me/573225461697" target="_blank" class="text-white fs-4"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://instagram.com/CotiEventos_San_Luis" target="_blank" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="<?= BASE_URL ?>"><img src="assets/img/logotipo_blanco.svg" alt="logo" style="height: 90px;"></a>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>