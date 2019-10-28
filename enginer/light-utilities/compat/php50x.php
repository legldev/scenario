<?php
/*******************************************************************************
*   File Name: php50x.php                                                      *
*   Date Created: 28/06/2010 00:00:00 - Last Modified: 28/06/2010 00:00:00     *
*   Copyrighted: (C) 2010 Lg Networks IM Group.                                *
*   Email: lgwebemail@gmail.com                                                *
*   ID Code: 000026-05-05                                                      *
*   Version: 1.0                                                               *
*------------------------------------------------------------------------------*
*   WWW.LGWEB.COM.VE. Bajo Licencia GNU GPL. Este es un Script PHP Libre,      *
*   gratis y de código abierto, creado por LgNetWorks IM Group.                *
*------------------------------------------------------------------------------*
*   Compatibilidad con PHP 5.0.x                                               *
/*******************************************************************************
/******************************************************************************/
    defined( 'PATH_BASE' ) or die( 'Acceso Denegado' );
/******************************************************************************/
    /// Habilitar el Modo de Compatibilidad a PHP 5.0.x ///




if (!ini_get('register_globals')) {
	@import_request_variables("GPC", "");
}

    /// Reemplazar file_put_contents() ///
    /// PHP link de ref.: http://php.net/function.file_put_contents ///

    if (!function_exists('file_put_contents')) {
      function file_put_contents($filename, $content, $flags = null, $resource_context = null)
	{

		if (is_array($content)) {
			$content = implode('', $content);
		}

		if (!is_scalar($content)) {
			trigger_error('file_put_contents() The 2nd parameter should be either a string or an array', E_USER_WARNING);
			return false;
		}

		$length = strlen($content);

		$mode = ($flags & FILE_APPEND) ?
					$mode = 'a' :
					$mode = 'w';

		$use_inc_path = ($flags & FILE_USE_INCLUDE_PATH) ?
					true :
					false;

		if (($fh = @fopen($filename, $mode, $use_inc_path)) === false) {
			trigger_error('file_put_contents() failed to open stream: Permission denied', E_USER_WARNING);
			return false;
		}

		$bytes = 0;
		if (($bytes = @fwrite($fh, $content)) === false) {
			$errormsg = sprintf('file_put_contents() Failed to write %d bytes to %s',
							$length,
							$filename);
			trigger_error($errormsg, E_USER_WARNING);
			return false;
		}

		@fclose($fh);

		if ($bytes != $length) {
			$errormsg = sprintf('file_put_contents() Only %d of %d bytes written, possibly out of free disk space.',
							$bytes,
							$length);
			trigger_error($errormsg, E_USER_WARNING);
			return false;
		}

		return $bytes;
    }}

    if (version_compare(phpversion(), '5.0') < 0) {
        eval('
    function clone($object) {
        return unserialize(serialize($object));
                }');}

    if(!function_exists('stripos')) {
        function stripos($haystack, $needle, $offset = 0) {
             return strpos(strtolower($haystack), strtolower($needle), $offset);
                }}