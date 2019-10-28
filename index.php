<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    index.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    define('_EXEC', 1);
    define('PATH_BASE', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);

    require_once(PATH_BASE.DS.'enginer'.DS.'defines.php');
    require_once(PATH_ENGINER.DS.'framework'.PHP);
    include(PATH_HTML.DS.'global-head_content'.PHP);
    include(PATH_HTML.DS.'global-script_content'.PHP);
    require_once(PATH_ENGINER.DS.'blockout'.PHP);          
    include(PATH_HTML.DS.'global-header_content'.PHP);
    include(PATH_HTML.DS.'global-index_content'.PHP);
    include(PATH_HTML.DS.'global-footer_content'.PHP);