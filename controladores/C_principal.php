<?php
// =============================================================================
// Controlador principal para la carga de la página y carga de Smarty
// =============================================================================
require($_SERVER['DOCUMENT_ROOT'] . '/gespol/smarty/SmartyBC.class.php');

class C_principal extends SmartyBC
{
    function __construct()
    {
        parent::__construct();

        require($_SERVER['DOCUMENT_ROOT'] . '/gespol/configuracion/config.php');

        $this->setTemplateDir($config['base_url'] . '/smarty/templates');
        $this->setCompileDir($config['base_url'] . '/smarty/templates_c');
    }

}