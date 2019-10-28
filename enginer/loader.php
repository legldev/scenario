<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    loader.php | v 1.5 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    if(!defined('DS')) { define( 'DS', DIRECTORY_SEPARATOR ); }

    // Pack Framework //
    class eLoader {
	// Pack Framework //

	function import( $filePath, $base = null, $key = 'enginer.' ) {
	static $paths;

		if (!isset($paths)) { $paths = array(); }

    $keyPath = $key ? $key . $filePath : $filePath;

	if (!isset($paths[$keyPath])) {
	    if ( ! $base ) { $base =  dirname( __FILE__ ); }

	$parts = explode( '.', $filePath );
    $classname = array_pop( $parts );

        switch($classname) {
		    case 'helper' :
			    $classname = ucfirst(array_pop( $parts )).ucfirst($classname);
					break;

		default :
		$classname = ucfirst($classname);
		break; }

		$path  = str_replace( '.', DS, $filePath );

		if (strpos($filePath, 'enginer') === 0) {
		    $classname	= 'e'.$classname;
			$classes	= eLoader::register($classname, $base.DS.$path.'.php');
			$rs			= isset($classes[strtolower($classname)]); }

    else { $rs   = include($base.DS.$path.'.php');}
    $paths[$keyPath] = $rs; }

	return $paths[$keyPath]; }

	function & register ($class = null, $file = null) {
	static $classes;

	if(!isset($classes)) { $classes    = array(); }
    if($class && is_file($file)) {
	$class = strtolower($class);
	$classes[$class] = $file;

	if((version_compare( phpversion(), '5.0' ) < 0)) { eLoader::load($class); }}
        return $classes; }

	function load( $class ) {
	$class = strtolower($class);

	if (class_exists($class)) { return; }

	$classes = eLoader::register();

    if(array_key_exists( strtolower($class), $classes)) {
	include($classes[$class]);
	return true; }
	return false; }}

    function __autoload($class) {
    if(eLoader::load($class)) { return true; }
	return false; }


    function eexit($message = 0) {
    exit($message); }

    function eimport( $path ) {
	return eLoader::import($path); }