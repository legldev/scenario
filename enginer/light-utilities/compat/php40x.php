<?php


    if (!defined('FILE_USE_INCLUDE_PATH')) {
      define('FILE_USE_INCLUDE_PATH', 1); }

    if (!defined('FILE_APPEND')) {
      define('FILE_APPEND', 8); }

    /// Reemplazar las Variables Superglobales si PHP es menor que 4.1.0 ///
if ($phpver < '4.1.0') {
  $_GET = $HTTP_GET_VARS;
  $_POST = $HTTP_POST_VARS;
  $_SERVER = $HTTP_SERVER_VARS;
  $_FILES = $HTTP_POST_FILES;
  $_ENV = $HTTP_ENV_VARS;
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $_REQUEST = $_POST;
  } elseif($_SERVER['REQUEST_METHOD'] == "GET") {
    $_REQUEST = $_GET;
  }
  if(isset($HTTP_COOKIE_VARS)) {
    $_COOKIE = $HTTP_COOKIE_VARS;
  }
  if(isset($HTTP_SESSION_VARS)) {
    $_SESSION = $HTTP_SESSION_VARS;
  }
}

    /// Reemplazar las Variables Superglobales si PHP es mayor que 4.1.0 ///
if($phpver >= '4.1.0') {
  $HTTP_GET_VARS = $_GET;
  $HTTP_POST_VARS = $_POST;
  $HTTP_SERVER_VARS = $_SERVER;
  $HTTP_POST_FILES = $_FILES;
  $HTTP_ENV_VARS = $_ENV;
  $PHP_SELF = $_SERVER['PHP_SELF'];
  if(isset($_SESSION)) {
    $HTTP_SESSION_VARS = $_SESSION;
  }
  if(isset($_COOKIE)) {
    $HTTP_COOKIE_VARS= $_COOKIE;
  }
}

    /// Chequeo ///
if (stristr(htmlentities($_SERVER['PHP_SELF']), "php50x.php")) {
    header("Location: index.php");
    exit();
}

if (!function_exists("floatval")) {
    function floatval($inputval) {
        return (float)$inputval;
    }
}
if ($phpver >= '4.0.4pl1' && isset($_SERVER['HTTP_USER_AGENT']) && strstr($_SERVER['HTTP_USER_AGENT'],'compatible')) {
	if (extension_loaded('zlib')) {
    	@ob_end_clean();
    	ob_start('ob_gzhandler');
  	}
} elseif ($phpver > '4.0' && isset($_SERVER['HTTP_ACCEPT_ENCODING']) && !empty($_SERVER['HTTP_ACCEPT_ENCODING'])) {
  	if (strstr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    	if (extension_loaded('zlib')) {
      		$do_gzip_compress = true;
      		ob_start(array('ob_gzhandler',5));
      		ob_implicit_flush(0);
      		if (ereg("MSIE", $_SERVER['HTTP_USER_AGENT'])) {
				header('Content-Encoding: gzip');
      		}
    	}
  	}
}
?>