<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    online_status.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');

    if(!function_exists('stats')){
    function stats(){

    global $prefix;
    echo 'Estadisticas<br>';

    $query_tot = mysql_query("SELECT * FROM ".$prefix."_users");
    $total = mysql_num_rows($query_tot);

    echo ' ' . $total.'<br>';

    $query_ult = mysql_query("SELECT * FROM ".$prefix."_users ORDER BY id DESC LIMIT 1");
    $ultim = mysql_fetch_array($query_ult);
    echo $ultim['username'];    }}

//----------------------------------------------------------------------------------------

    if(isset($_COOKIE['id']) && isset($_COOKIE['user']) && isset($_COOKIE['password'])) {

    $query0 = mysql_query("SELECT * FROM `".$prefix."_users` WHERE `username` = '".$_COOKIE['user']."' AND `password` = '".$_COOKIE['password']."' AND `id` ='".$_COOKIE['id']."'");
    $count = mysql_num_rows($query0);

    if($count != 1){ exit('Sesión erronea. Finalizando página...'); }}

//----------------------------------------------------------------------------------------

    if(!function_exists('online')){
    function online() {

    global $dbname, $prefix;

    $fecha = time() ;
    $tiempo = 10;
    $tiempo = $fecha-$tiempo*60 ;
    $ip = $_SERVER["REMOTE_ADDR"];

    if(isset($_COOKIE['user'])) { $usuario = $_COOKIE['user']; } else { $usuario = ''; }
    if(isset($_COOKIE['id'])) { $id_user = $_COOKIE['id']; } else { $id_user = ''; }

    mysql_query("DELETE FROM `".$prefix."_stats-online-users` WHERE date < $tiempo") ;

    $query1 = mysql_query("SELECT `ip` FROM `".$prefix."_stats-online-users` WHERE `ip` ='$ip'") ;

    if(mysql_num_rows($query1) == 0) {
        mysql_query("INSERT INTO `".$dbname."`.`".$prefix."_stats-online-users`
(
`id` ,
`ip` ,
`date` ,
`id_users` ,
`username` ,
`user_type`
)
VALUES (
  NULL, '$ip', '$fecha', '0000', 'ANONYMOUS', 'ANONYMOUS')"); }
    else {
        mysql_query("UPDATE `".$prefix."_stats-online-users` SET `date` = '$fecha' WHERE `ip` = '$ip'"); }

    if($usuario) {
        $query2 = mysql_query("SELECT * FROM `".$prefix."_stats-online-users` WHERE `username` = '$usuario'") ;

    if(mysql_num_rows($query2) == 0) {
        mysql_query("INSERT INTO `".$dbname."`.`".$prefix."_stats-online-users`
(
`id` ,
`ip` ,
`date` ,
`id_users` ,
`username` ,
`user_type`
)
VALUES (
  NULL, '$ip', '$fecha', $id_user, '$usuario', 'USER')"); }
    else {
        mysql_query("UPDATE `".$prefix."_stats-online-users` SET `date` = '$fecha' WHERE `username` = '$usuario'"); }}

}}