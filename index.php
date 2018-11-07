<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'controladores/C_principal.php';

$plantilla = new C_principal;
$plantilla->index();