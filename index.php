<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// =============================================================================
// Carga controladores
// =============================================================================
require_once 'controladores/C_principal.php';
require_once 'controladores/C_usuarios.php';


// =============================================================================
// Carga Modelos
// =============================================================================

require_once 'modelos/M_usuarios.php';
require_once 'modelos/M_estilos.php';

session_start();

$plantilla = new C_principal;
$plantilla->index();