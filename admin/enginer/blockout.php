<?php

    if (stristr(htmlentities($_SERVER['PHP_SELF']), 'blockout.php')) {
	    Header('Location: index.php');
        die();}
/******************************************************************************/
    if($_COOKIE['id_admin'] && $_COOKIE['username_admin'] && $_COOKIE['password_admin']){
/******************************************************************************/
    $sql_query = mysql_query("SELECT * FROM ".$prefix."_users WHERE id ='$_COOKIE[id_admin]'");
	$data = mysql_fetch_array($sql_query);

    $id_us = $data['id'];

    $sql_query2 = mysql_query("SELECT * FROM ".$prefix."_admin WHERE id_users ='$id_us'");
	$data2 = mysql_fetch_array($sql_query2);

    $id_us2 = $data2['id_users'];

	if($_COOKIE['id_admin']==$data2['id_users'] && $_COOKIE['username_admin']==$data['username'] && $_COOKIE['password_admin']==$data['password']){

	echo"<!-- Usuario correcto -->";

	} else {
    include ( PATH_ADMINISTRATOR .DS.'components'.DS.'login'.DS.'main.php' );
    include ( PATH_ADMINISTRATOR .DS.'enginer'.DS.'light-html'.DS.'admin-footer_content.php' );
        die();

	}} else {

    include ( PATH_ADMINISTRATOR .DS.'components'.DS.'login'.DS.'main.php' );
    include ( PATH_ADMINISTRATOR .DS.'enginer'.DS.'light-html'.DS.'admin-footer_content.php' );
        die();



}

?>