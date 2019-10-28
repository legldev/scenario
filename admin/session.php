<?php

    define( '_EXEC', 1 );
    define('PATH_BASE', dirname(__DIR__) );
    define( 'DS', DIRECTORY_SEPARATOR );
    define('MODULE_FILE', true);
    define('ADMINISTRATION', true);


    require_once(PATH_BASE.DS.'enginer'.DS.'defines.php');
    require_once(PATH_BASE.DS.'enginer'.DS.'framework.php');

/*-------------------------------------------------------------------------*/
    // Variables y Funciones Principales //


    $date = time();
    $ip = $_SERVER["REMOTE_ADDR"];

    $user = make_safe($_POST['username']);
    $password = make_safe($_POST['passwd']);
    $secure_pass = md5($password);

/*-------------------------------------------------------------------------*/
    // Modo IN para Entrar //

    if($_POST['send'] && $_GET['mode'] == 'in'){
        if($user && $password){

    $sql_query = mysql_query("SELECT * FROM ".$prefix."_users WHERE username ='$user' OR email = '$user'");
	$data = mysql_fetch_array($sql_query);

    $id_us = $data['id'];

    $sql_query2 = mysql_query("SELECT * FROM ".$prefix."_admin WHERE id_users ='$id_us'");
	$data2 = mysql_fetch_array($sql_query2);

    $id_us2 = $data2['id_users'];

    if($id_us ==  $id_us2)  {

    if($data['password'] == $secure_pass){
        setcookie("id_admin",$data2[id_users],time()+90000);
		setcookie("username_admin",$data[username],time()+90000);
		setcookie("password_admin",$data[password],time()+90000);

 header("location: index.php?mod=cpanel");

        } else {    error2("Contraseña Incorrecta","1");    }
        } else {    error2("Algunos Datos son incorrectos","1");    }}  }
//----------------------------------------------------------------------------------------
//  Mode "OUT" for Logout

    if($_GET['mode']== 'out'){
    if($_COOKIE['id_admin'] && $_COOKIE['username_admin'] && $_COOKIE['password_admin']){
	        setcookie("id_admin");
	        setcookie("username_admin");
	        setcookie("password_admin");

    header("location: index.php");

    } else {    error2("No hay usuario conectado","0");     }}
?>