<?php
/*******************************************************************************
*   File Name: php51x.php                                                      *
*   Date Created: 28/06/2010 00:00:00 - Last Modified: 28/06/2010 00:00:00     *
*   Copyrighted: (C) 2010 Lg Networks IM Group.                                *
*   Email: lgwebemail@gmail.com                                                *
*   ID Code: 000027-05-05                                                      *
*   Version: 1.0                                                               *
*------------------------------------------------------------------------------*
*   WWW.LGWEB.COM.VE. Bajo Licencia GNU GPL. Este es un Script PHP Libre,      *
*   gratis y de código abierto, creado por LgNetWorks IM Group.                *
*------------------------------------------------------------------------------*
*   Compatibilidad con PHP 5.1.x                                               *
/*******************************************************************************
/******************************************************************************/
    defined( 'PATH_BASE' ) or die( 'Acceso Denegado' );
/******************************************************************************/
    /// Habilitar el Modo de Compatibilidad a PHP 5.1.x ///

    /// Reemplazar htmlspecialchars_decode() ///
    /// PHP link de ref.: http://php.net/htmlspecialchars_decode ///

    if (!function_exists("htmlspecialchars_decode")) {
	    function htmlspecialchars_decode($string, $quote_style = ENT_COMPAT) {
		    return strtr($string, array_flip(get_html_translation_table(HTML_SPECIALCHARS, $quote_style)));
	                    }}