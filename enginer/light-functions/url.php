<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    url.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');
    
    function create_url($link = '', $section = '') {
    global $content, $get_id;
        if(empty($section)) { $link2 = ''; } else { $link2 = '&section='.$section; }
        return $content.PHP.'?'.$get_id.'='.$link.''.$link2; }

    function admin_url($link = '', $section = '') {
    global $content2, $get_id;
        if(empty($section)) { $link2 = ''; } else { $link2 = '&section='.$section; }
        echo $content2.PHP.'?'.$get_id.'='.$link.''.$link2; }

    function clean_url($url) {

    // Tranformamos todo a minusculas
    $url = strtolower($url);

    //Rememplazamos caracteres especiales latinos
    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    $url = str_replace ($find, $repl, $url);

    // Añadimos los guiones
    $find = array(' ', '&', '\r\n', '\n', '+');
    $url = str_replace ($find, '-', $url);

    // Eliminamos y Reemplazamos otros carácteres especiales
    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '-', '');
    $url = preg_replace ($find, $repl, $url);

    return $url; }