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

    static public function index()
    {
        $plantilla = new C_principal;

        $plantilla->assign(array(
            'aplicacion' => 'Gestion Prefectura Policial',
            'const_prefectura' => 'Comisaria Temporal',
            'usuario_nombre' => 'Usuario Temporal',
            'usuario_tip' => 'PL001'
        ));


        if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok') {


            $plantilla->assign(array(
                'css' => 'hold-transition skin-blue sidebar-mini sidebar-collapse',
                'js' => estilosPagina::cargarJs()
            ));

            switch ($_GET['pol']) {

                case 'inicio':

                    $plantilla->display('compartido/head.html');
                    $plantilla->display('compartido/cabecera.html');
                    $plantilla->display('compartido/menulateral.html');
                    $plantilla->display('plantilla.html');
                    $plantilla->display('compartido/piepagina.html');
                    $plantilla->display('compartido/footer.html');
                    break;

                case 'usuarios':

                    $usuarios = array(
                        'usuario' => ModeloUsuarios::MdlObtenerUsuarios('usuarios')
                    );
                   
                    // var_dump($usuarios);
                    $plantilla->assign($usuarios);

                    $plantilla->display('compartido/head.html');
                    $plantilla->display('compartido/cabecera.html');
                    $plantilla->display('compartido/menulateral.html');
                    $plantilla->display('usuarios.html');
                    $plantilla->display('compartido/piepagina.html');
                    $plantilla->display('compartido/footer.html');
                    break;

                case 'novedades':
                    $plantilla->display('compartido/head.html');
                    $plantilla->display('compartido/cabecera.html');
                    $plantilla->display('compartido/menulateral.html');
                    $plantilla->display('sc/novedades.html');
                    $plantilla->display('compartido/piepagina.html');
                    $plantilla->display('compartido/footer.html');
                    break;

                case 'salir':

                    session_destroy();
                    echo '<script> window.location = "inicio"; </script>';
                    break;

                default:

                    $plantilla->display('compartido/head.html');
                    $plantilla->display('compartido/cabecera.html');
                    $plantilla->display('compartido/menulateral.html');
                    $plantilla->display('plantilla.html');
                    $plantilla->display('compartido/piepagina.html');
                    $plantilla->display('compartido/footer.html');
                    break;

            }

        } else {
            $plantilla->assign(array(
                'css' => 'hold-transition login-page',
                'js' => array(
                    'jquery' => 'assets/vendor_components/jquery/dist/jquery.min.js',
                    'popper' => 'assets/vendor_components/popper/dist/popper.min.js',
                    'bootstrap' => 'assets/vendor_components/bootstrap/dist/js/bootstrap.min.js'
                )
            ));

            $plantilla->display('compartido/head.html');
            $plantilla->display('login.html');
            $plantilla->display('compartido/footer.html');
        }
    }
}