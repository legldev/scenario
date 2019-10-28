<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    db-ve.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');

    if (defined('ADMINISTRATION')) { $the_include = PATH_DB; }
    elseif (defined('INSIDE_MOD')) { $the_include = PATH_DB; }
    else { $the_include = PATH_DB; }

    switch($dbtype) {
	case 'mysql':
	    include(''.$the_include.'/mysql'.PHP);
		break;
	case 'mysql4':
	    include(''.$the_include.'/mysql4'.PHP);
		break;
	case 'sqlite':
	    include(''.$the_include.'/sqlite'.PHP);
		break;
}
    $db = new sql_db($dbhost, $dbuser, $dbpass, $dbname, false);
    if(!$db->db_connect_id) { die('<center><b>Estamos experimentando problemas en nuestros servidores, en breve volvemos.</b></center>'); } ?>