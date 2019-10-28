<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    iaf.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');

    include(PATH_DB.DS.'db'.PHP);
    include(PATH_FUNC.DS.'url'.PHP);
    include(PATH_FUNC.DS.'html'.PHP);
    include(PATH_FUNC.DS.'functions'.PHP);
    include(PATH_FUNC.DS.'online_status'.PHP);
    include(PATH_FUNC.DS.'community_services'.PHP);
    if (!defined('ADMINISTRATION')) {
    include(PATH_FUNC.DS.'pagination'.PHP); }
