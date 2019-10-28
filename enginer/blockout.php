<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    blockout.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    if(stristr(htmlentities($_SERVER['PHP_SELF']), 'blockout.php')) { header('Location: index.php'); die(); }

    if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password']) {
	$query = mysql_query("SELECT * FROM ".$prefix."_users WHERE id = '$_COOKIE[id]'");
	$data_splash = mysql_fetch_array($query);

	if($_COOKIE['id'] === $data_splash['id'] && $_COOKIE['user'] === $data_splash['username'] && $_COOKIE['password'] === $data_splash['password']){
        echo '<!-- ACCESS GRANTED -->'; } else {

    include("components/login/main.php");
    exit;

	}} else {

    include("components/login/main.php");
    exit;   }