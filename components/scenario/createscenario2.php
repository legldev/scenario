<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: account.php  (c) por Something Special                        */
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 22:59:00; 0001           */
/*-------------------------------------------------------------------------*/
/*  Pagina de Cuenta de Usuarios                                           */
/*-------------------------------------------------------------------------*/

include("config.php");




         # Load Scenario
   $load  = mysql_query("SELECT * FROM ".$prefix."_scenarios
   WHERE token_id='$_GET[scenarioid]'") ;

   $load_s = mysql_fetch_array($load);

$s_name = $load_s['s_name'];
$s_id = $load_s['id'];
$location = $load_s['s_location'];
$capacity = $load_s['s_capacity'];
$ambient0 = $load_s['s_ambient'];




    if($ambient0 == 'indoor') {
        $ambient = 'Ambiente Cerrado';
    } else {
             $ambient = 'Ambiente al Aire Libre';
    }

    if($tables == 1) {
        $tables = 'Si';
    } else {
             $tables = 'No';
    }

        if($chairs == 1) {
        $chairs = 'Si';
    } else {
             $chairs = 'No';
    }
           # Load Stucture
   $load2  = mysql_query("SELECT * FROM ".$prefix."_structure
   WHERE id_scenario='$s_id'") ;

   $load_s2 = mysql_fetch_array($load2);


$f_no = $load_s2['rows'];
$c_no = $load_s2['chairs'];
$tables = $load_s2['tables'];
$t_no = $load_s2['t_no'];

?>
<!DOCTYPE html>

<html>

<head>
  <title>Scenario v.01 (Fase Gamma)</title>
  <link rel="stylesheet" type="text/css" href="media/styles/scenario_styles.css">
</head>

<body>

<?php   if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password'])   {
include("toolbar_nav.php");
 ?>

		<div id="register">
			<h3 class="dd">Agregar Escenarios    </h3>
<?php

echo 'Nombre:&nbsp;'.$s_name.'<br>';
echo 'Ubicacion:&nbsp;'.$location.'<br>';
echo 'Capacidad:&nbsp;'.$capacity.'<br>';
echo 'Tipo de ambiente:&nbsp;'.$ambient.'<br>';
echo 'Sillas:&nbsp;'.$chairs.'<br>';
echo 'Numero de Filas:&nbsp;'.$f_no.'<br>';
echo 'Numero de Sillas por Filas:&nbsp;'.$c_no.'<br>';
echo 'Mesas:&nbsp;'.$tables.' | Numero de Mesas:&nbsp;'.$t_no;




?>


          <div style="text-align: center">




               <table border=1>
               <h3 class="dd">Asientos   </h3>
<?php

            $cuenta =  1;
while ($cuenta <= $f_no) {
          echo "<tr><td>  Fila ".$cuenta++."</td>";
        $cuenta2 =  1;
while ($cuenta2 <= $c_no) {
          echo "<td>Asiento ".$cuenta2++."</td>";
}
echo "</tr>";
}



?>
     </table>

 <?php

 if($tables = 1) {



 ?>

  <h3 class="dd">Mesas</h3>        <br>

<?php

            $cuenta3 =  1;
while ($cuenta3 <= $t_no) {
          echo "<table border=1 align=center>     <tr><td>Mesa".$cuenta3++."</td> </tr>
     </table>";

}




        }                       

?>




</div>

           <a href="create_scenario2.php" target="_self" title="Agregar Escenario">Siguiente</a><br />

		<div class="clearAll"></div>

        	</div>


 <?php  } else {     ?>
<div style="text-align: center">
 No estas conectado

</div>  <?php  } ?>
<p>&nbsp;</p>


</body>
</html>