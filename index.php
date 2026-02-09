<?php
// =====================================================
// CONFIGURACIÓN BÁSICA
// =====================================================
session_start();

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once './includes/db_connection.php';
require_once './includes/functions.php';
require_once './includes/config.php';
// require_once './helpers/auth.php';

//  llamamos a la clase de la libreria de google que descargaamos para poder 
// llenar los datos que necesitamos para redirigir a los servidores de google
// y lo llamamos aca en el index por que estamos usando un modal para el inicio de sesion

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URL']);
$client->addScope("email");
$client->addScope("profile");



// Generamos la URL para el botón
$url_google = $client->createAuthUrl();

//detercar el rol del usuario para ver que header y footer cargar
// Por defecto usamos el layout de cliente
$headerPath = './layout/header.php';
$footerPath = './layout/footer.php';

// 1. Detección de Rol y Configuración de Layout
$isAdmin = (isset($_SESSION['rol']) && $_SESSION['rol'] === 'Administrador');

$headerPath = $isAdmin ? './views/admin/layout/header.php' : './layout/header.php';
$footerPath = $isAdmin ? './views/admin/layout/footer.php' : './layout/footer.php';

// =====================================================
// PARÁMETROS GET
// =====================================================
//
$module = $_GET['module'] ?? 'home';
$view   = $_GET['view']   ?? 'index';
$action = $_GET['action'] ?? null;



// =====================================================
// LISTAS BLANCAS (SEGURIDAD)
// =====================================================

// Módulos (carpetas principales)
$modulosPermitidos = [
    'vestuarios',
    'bodas',
    'admin',
    'home',
    'usuarios',
    'lugares',
    'eventos',
    'cotizaciones',
    'vestuarios',
    'vestidos',
    'platillos',
    'cocteles',
    'postres',
    'tortas',
    'menu',
    'cumpleaños',
    'xv_años',
    'bautizos',
    'baby_shawers',
    'graduaciones',
    'sonido'
];

// Acciones permitidas por módulo
$accionesPermitidas = [
    'usuarios' => ['crear', 'editar', 'eliminar', 'login', 'logout', 'callback'],
    'lugares' => ['crear', 'editar', 'eliminar'],
    'eventos' => ['crear', 'editar', 'eliminar'],
    'cotizaciones' => ['crear', 'aprobar', 'rechazar', 'completar'],
    'vestuarios' => ['crear', 'editar', 'asignar'],
    'vestidos' => ['crear', 'editar', 'asignar'],
    'platillos' => ['asignar'],
    'cocteles' => ['asignar'],
    'postres' => ['asignar'],
    'tortas' => ['asignar'],
    'menu' => ['asignar'],
    'cumpleaños' => ['asignar'],
    'xv_años' => ['asignar'],
    'bautizos' => ['asignar'],
    'baby_shawers' => ['asignar'],
    'graduaciones' => ['asignar'],
    'sonido' => ['asignar']
];

//cargamos las acciones aca para evitar que cuando vaya a una accion lleve el html del header
if ($action) {

    if (
        isset($accionesPermitidas[$module]) &&
        in_array($action, $accionesPermitidas[$module])
    ) {

        $actionFile = "./acciones/$module/$action.php";

        if (file_exists($actionFile)) {
            require $actionFile;
            exit;
        }
    }
}

// =====================================================
// HEADER
// =====================================================

require_once  $headerPath;


// =====================================================
// CARGA DE VISTAS
// =====================================================
// Contenedor principal: d-flex solo si es admin para poner el sidebar al lado
echo '<div class="' . ($isAdmin ? 'd-flex flex-grow-1' : '') . '">';


// SIDEBAR (Solo Admin)
if ($isAdmin) {
    $sidebarPath = './views/admin/layout/sidebar.php';
    if (file_exists($sidebarPath)) {
        echo '<aside class="bg-dark border-end d-none d-md-block" style="min-width: 250px;">';
        require_once $sidebarPath;
        echo '</aside>';
    }
}

// CONTENIDO DINÁMICO
// Si es admin, le damos padding y crecimiento. Si es cliente, queda limpio.
echo '<main class="' . ($isAdmin ? 'flex-grow-1 p-4' : 'w-100') . '">';
if (in_array($module, $modulosPermitidos)) {
    $viewFile = "./views/$module/$view.php";
    if (file_exists($viewFile)) {
        require $viewFile;
    } else {
        require './views/404.php';
    }
} else {
    require './views/404.php';
}
echo '</main>';


// if (in_array($module, $modulosPermitidos)) {

// Ruta de la vista
// $viewFile = "./views/$module/$view.php";

// Caso especial: home y login no están en subcarpetas
// if (in_array($module, ['home', 'login'])) {
//     $viewFile = "./views/$module.php";
// }

// if (file_exists($viewFile)) {
// require $viewFile;
// } else {
// require './views/404.php';
// }

// } else {
// require './views/404.php';
// }


// =====================================================
// EJECUCIÓN DE ACCIONES (POST / lógica)
// =====================================================



echo '</div>'; // Fin del contenedor (d-flex o div normal)


// =====================================================
// FOOTER
// =====================================================

require_once $footerPath;
