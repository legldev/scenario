<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    compat.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('PATH_BASE') or die('Acceso Denegado');

    if(version_compare(PHP_VERSION, '5.3.0', '<')) {
    set_magic_quotes_runtime(0);
    @ini_set('zend.ze1_compatibility_mode', 0);     }

    if (version_compare(phpversion(), '4.1.0') < 0) { require_once(PATH_UTILITIES.DS.'compat'.DS.'php40x'.PHP); }
    if (version_compare(phpversion(), '5.0.0') < 0) { require_once(PATH_UTILITIES.DS.'compat'.DS.'php50x'.PHP); }
    if (version_compare(phpversion(), '5.1.0') < 0) { require_once(PATH_UTILITIES.DS.'compat'.DS.'php51x'.PHP); }
    if (version_compare(phpversion(), '5.3.0') >=0) { require_once(PATH_UTILITIES.DS.'compat'.DS.'php53x'.PHP); }