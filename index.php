<?php

require_once 'controladores/C_principal.php';

$plantilla = new C_principal;

$plantilla->assign(array(
    'const_prefectura' => 'Comisaria Temporal',
    'usuario_nombre' => 'Usuario Temporal',
    'usuario_tip' => 'PL001'
));

$plantilla->display('compartido/head.html');
$plantilla->display('compartido/cabecera.html');
$plantilla->display('compartido/menulateral.html');
$plantilla->display('plantilla.html');
$plantilla->display('compartido/piepagina.html');
$plantilla->display('compartido/footer.html');
