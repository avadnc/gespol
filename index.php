<?php

require_once 'controladores/C_principal.php';

$plantilla = new C_principal;

$plantilla->display('compartido/head.html');
$plantilla->display('compartido/cabecera.html');
$plantilla->display('compartido/menulateral.html');
$plantilla->display('plantilla.html');
$plantilla->display('compartido/piepagina.html');
$plantilla->display('compartido/footer.html');
