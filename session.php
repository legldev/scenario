<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    session.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    define('_EXEC', 1);
    define('PATH_BASE', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);

    require_once(PATH_BASE.DS.'enginer'.DS.'defines.php');
    require_once(PATH_ENGINER.DS.'framework'.PHP);

    $date = time();
    $user = make_safe($_POST['user']);
    $password = make_safe($_POST['password']);
    $secure_pass = md5($password);

    // Mode "IN" for LogIn
    if($_POST['sign_in'] && $_GET['mode'] == 'in'){
        if($user && $password){

    $sql_query = $mysqli->query("SELECT * FROM ".$prefix."_users WHERE username ='".$user."' OR email = '".$user."'");
    $data = $sql_query->fetch_array();

    if($data['password'] == $secure_pass){
        setcookie("id",$data['id'],time()+90000);
		setcookie("user",$data['username'],time()+90000);
		setcookie("password",$data['password'],time()+90000);

    header("location: index".PHP);

    } else { error2(PASSWORD_ERROR,"1"); }
    } else { error2(DATA_ERROR,"1"); }}

    // Mode "OUT" for LogOut
    if($_GET['mode']== 'out'){
        if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password']){
	    setcookie("id", "",time() - 3600);
	    setcookie("user", "",time() - 3600);
	    setcookie("password", "",time() - 3600);

    header("location: index".PHP);

    } else { error2(USER_ERROR,"0"); }}