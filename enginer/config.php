<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    config.php | v 1.0 | date: 02/07/2015
------------------------------------------------------------------------------------------
    Configuration File System
----------------------------------------------------------------------------------------*/
    if (stristr(htmlentities($_SERVER['PHP_SELF']),'config.php')) { header('Location: index.php'); die(); }
//----------------------------------------------------------------------------------------
    // SQL Configuration
	$dbhost = 'localhost';                  // SQL Host: localhost
	$dbname = 'scenario';                   // SQL Database Name: test
	$dbpass = '';                           // SQL Password: 12345
	$dbuser = 'root';                       // SQL User: root
   	$dbtype = 'mysql';                      // SQL Database TypeTipo: mysql, mysqli
    $prefix = 'global';                     // SQL Database Prefix: global
//----------------------------------------------------------------------------------------
    // SQL Conecction
    $sql_on = mysql_connect($dbhost, $dbuser, $dbpass);
    if(!$sql_on){ include(PATH_HTML.DS.'global-offline_content'.PHP); }

    $sql_link = mysql_select_db($dbname, $sql_on);
    if (!$sql_link) { die ('MySQL Error: ' . mysql_error()); }

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($mysqli->connect_errno) { include(PATH_HTML.DS.'global-offline_content'.PHP); }
//----------------------------------------------------------------------------------------
    // Web Configuration
    $web_config = $mysqli->query("SELECT * FROM ".$prefix."_configuration WHERE id = '1'");
    $web = $web_config->fetch_assoc();

    $dirw     = 'http://localhost/scenario/'; // Web URL: localhost
    $content  =  $web['content_manager'];       // Content Manager Used
    $content2 =  $web['content_admin'];         // Content Manager to Administration Used
    $get_id   =  $web['php_get'];               // PHP Get Used
    $lang     =  $web['languague'];             // Display Language
    $theme    =  $web['theme'];                 // Display Theme
    $setup    =  $web['setup_complete'];        // Setup Status
//----------------------------------------------------------------------------------------
//  PHP Check Version

    $GLOBALS['required_php_version'] = '5.0.4';
    $phpversion = phpversion();

	if($phpversion < $GLOBALS['required_php_version']){
	echo "La versión de PHP en tu servidor es inferior a 5.0.4, <br>la web no funciona en versiones anteriores a esta";
	exit;}
//----------------------------------------------------------------------------------------
//  Configuration

    class Config {

//  Light WebSite Config

    var $offline = 0;
    var $offline_message = 'Disculpa la web esta OFFLINE. Volveremos dentro de pocos instantes...';
    var $editor = 'tinymce';
    var $sitename = 'MasterTicket';
    var $list_limit = '20';
    var $legacy = '0';
    var $MetaDesc = 'Cuando piensas en Tickets, piensa en MasterTicket. Somos tu solución idea para entradas y ventas OnLine.';
	var $MetaKeys = 'MasterTicket, Master+Ticket, master, entradas, tickets, eventos, espectaculos, teatro, musica';
    var $MetaTitle = '1';
    var $MetaAuthor = '1';
    var $short_sitename = 'MasterTicket';

//  Light Debug Config

    var $debug = '1';
    var $debug_lang = '1';

//  Light SQL Layer Config

    var $dbtype = 'mysql';
    var $host = 'localhost';
    var $user = 'root';
    var $password = '';
    var $db = 'scenario';
    var $dbprefix = 'global';

//  Light Server Config
    var $live_site = '';
    var $secret = 'umfdADec1fvTXhUn';
    var $gzip = 1;
    var $error_reporting = 0; // None: 0 / Default: -1 / Simple: 7 / Maxim: 2047 /
    var $helpurl = 'light/';
    var $xmlrpc_server = 1;
    var $ftp_host = '';
    var $ftp_port = '21';
    var $ftp_user = '';
	var $ftp_pass = '';
	var $ftp_root = 'www';
    var $ftp_enable = '1';
    var $force_ssl = '1';
    var $offset = '0';
    var $offset_user = '0';

//  Light Email Config
    var $mailer = 'mail';
    var $mailfrom = 'contacto@masterticketca.com';
    var $fromname = 'MasterTicker';
    var $sendmail = '/usr/sbin/sendmail';
    var $smtpauth = '0';
    var $smtpsecure = '1';
	var $smtpport = '465';
	var $smtpuser = '';
    var $smtppass = '';
    var $smtphost = 'host.caracasemail.com';

//  Light Cache Config
    var $caching = 1;
    var $cachetime = '15';
    var $cache_handler = 'file';
    var $memcache_settings = array();

        //  SEO //
    var $sef = '1';
    var $sef_rewrite = '1';
    var $sef_suffix = '1';

        // Configuraciones de Feed //
    var $feed_limit = 10;
    var $feed_email = 'author';
    var $log_path =  'enginer/logs';
    var $tmp_path = 'enginer/tmp';

        // Configuraciones de Sessión //
	var $lifetime = '15';
	var $session_handler = 'database';

//  Light Enginer Config

    var $app_version = '1.0';
    var $php_web_version = '5.3.1';
    var $forum_version = '4.0';
    var $theme_enginer = 'light';
    var $mode_enginer = 'light-speed-(beta-mode)';
    var $act_percent = '100.00';
    var $enginer_lang = 'es';
    var $author = 'Something Special';
    var $generator = 'Light';
    var $distribution = 'global';
    var $rating = 'general';
    var $country = 'Venezuela';   }

class eFrameworkConfig
{
	var $dbtype 	= 'mysql';
	var $host 		= 'localhost';
	var $user 		= 'doitspec_admin';
	var $password 	= '23418878legl';
	var $db 		= 'doitspec_global';
	var $dbprefix 	= 'global_';
	var $ftp_host 	= 'host.caracasemail.com';
	var $ftp_port 	= '21';
	var $ftp_user 	= '';
	var $ftp_pass 	= '';
	var $ftp_root 	= '';
	var $ftp_enable = 0;
	var $tmp_path	= '/tmp';
	var $log_path	= '/logs';
	var $mailer 	= 'mail';
	var $mailfrom 	= 'contacto@doitspecial.com';
	var $fromname 	= '';
	var $sendmail 	= '/usr/sbin/sendmail';
	var $smtpauth 	= '0';
	var $smtpsecure = 'none';
	var $smtpport	= '465';
	var $smtpuser 	= '';
	var $smtppass 	= '';
	var $smtphost 	= 'host.caracasemail.com';
	var $debug 		= 0;
	var $caching 	= '0';
	var $cachetime	= '900';
	var $language  	= 'es-ve';
	var $secret		= null;
	var $editor		= 'none';
	var $offset		= 0;
	var $lifetime	= 15;
} ?>