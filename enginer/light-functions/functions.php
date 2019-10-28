<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    functions.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');
    
    function make_safe($variable) {
    $variable = addslashes(trim(strtolower($variable)));
    return $variable; }

    function un_quote($variable) {
    $variable = stripslashes(htmlspecialchars_decode($variable));
    return $variable; }

    function error($mensajeError,$exit){
    echo '<b>Error: </b>'.$mensajeError;
    if($exit == '1'){ die (); }}

    function error2($mensajeError,$exit){
    echo '<script language=javascript>alert("'.$mensajeError.'")</script><script>location="index.php"</script>';
    echo '<b>Error: </b>'.$mensajeError;
    if($exit == '1'){ die (); } }

    function cut($variable, $len) {
    if (strlen($variable) > $len) {$variable = substr($variable,0,$len).'...'; }
    return $variable; }

    function htx($variable) {
    $variable = trim($variable);
    $variable = htmlspecialchars($variable);
    return $variable; }

    function html($texto) {
    $texto = trim($texto) ;
    $texto = htmlspecialchars($texto) ;
    return $texto;     }

    function token() {
    $random = rand(0000000, 1000000); // between 0 and 100 inclusive
    function mt_rand_str ($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890') {
    for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
    return $s; }
    $token = mt_rand_str(8) ."" .mt_rand_str(6, '0123456789ABCDEF') ."". $random;
    return $token; }