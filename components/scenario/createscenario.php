<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: account.php  (c) por Something Special                        */
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 22:59:00; 0001           */
/*-------------------------------------------------------------------------*/
/*  Pagina de Cuenta de Usuarios                                           */
/*-------------------------------------------------------------------------*/


$s_name = $_POST['s_name'];
$location = $_POST['location'];
$capacity = $_POST['capacity'];
$ambient0 = $_POST['ambient'];
$chairs = $_POST['chairs'];
$f_no = $_POST['f_no'];
$c_no = $_POST['c_no'];
$tables0 = $_POST['tables'];
$t_no = $_POST['t_no'];
$token_id = $_POST['token'];

    if($ambient0 == 'indoor') {
        $ambient = 'Ambiente Cerrado';
    } else {
             $ambient = 'Ambiente al Aire Libre';
    }

    if($tables0 == 1) {
        $tables = 'Si';
    } else {
             $tables = 'No';
    }

        if($chairs == 1) {
        $chairs = 'Si';
    } else {
             $chairs = 'No';
    }
    // Guardar Datos principales

        $sql1 = "INSERT INTO `".$dbname."`.`".$prefix."_scenarios`
   (
`id` ,
`s_name` ,
`s_location` ,
`s_capacity` ,
`s_ambient` ,
`description` ,
`s_image` ,
`last_modified` ,
`saved_on` ,
`completed`,
`token_id`
)
VALUES (
  NULL, '$s_name', '$location', '$capacity', '$ambient0', '', '', '', '', '0','$token_id')";

// Perform Query
$result = mysql_query($sql1);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

          # Load Scenario
   $load  = mysql_query("SELECT * FROM ".$prefix."_scenarios
   WHERE token_id='$token_id'") ;

   $load_s = mysql_fetch_array($load);

    $id_prim = $load_s['id'];

    // Guardar Estructura

 $sql2 = "INSERT INTO `".$dbname."`.`".$prefix."_structure`
   (
`id` ,
`id_scenario` ,
`rows` ,
`chairs` ,
`tables` ,
`order_by`)
VALUES (
  NULL, '$id_prim', '$f_no', '$c_no', '$tables0', '')";

// Perform Query
$result2 = mysql_query($sql2);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}


?>
  <div class="complete_main"><!-- Contenedor -->
    <div class="clear-separator"></div><!-- Separador -->

    <table class="adminlist" cellpadding="1">
	    <thead>
            <tr><th class="title">Agregar Escenarios</th></tr><!-- Titulo -->
        </thead>

<tbody><!-- Cuerpo de la Tabla -->
          <tr class="row1"><td align="center">Informacion Principal del Escenario.</td></tr>

<tr class="row0"><td><label for="name_reg"><strong>Nombre:</strong></label><?php echo $s_name; ?></td></tr>
<tr class="row0"><td><label for="name_reg"><strong>Ubicación:</strong></label><?php echo $location; ?></td></tr>
<tr class="row0"><td><label for="name_reg"><strong>Capacidad:</strong></label><?php echo $capacity; ?></td></tr>
<tr class="row0"><td><label for="name_reg"><strong>Tipo de ambiente:</strong></label><?php echo $ambient; ?></td></tr>
<tr class="row0"><td><label for="name_reg"><strong>Sillas:</strong></label><?php echo $chairs; ?></td></tr>
<tr class="row0"><td><label for="name_reg"><strong>Numero de Filas:</strong></label><?php echo $f_no; ?>|<label for="name_reg"><strong>Numero de Filas:</strong></label><?php echo $c_no; ?></td></tr>
<tr class="row0"><td><label for="name_reg"><strong>Mesas:</strong></label><?php echo $tables; ?>|<label for="name_reg"><strong>Numero de Mesas:</strong></label><?php echo $t_no; ?></td></tr>

        </tbody>
    </table>

<table class="adminlist" cellpadding="1">
		<thead>

				<th class="title">
  Escenario: 	 <?php echo $s_name; ?>
			</th>
          <tr class="row1"><td align="center">Estructura del Escenario</td></tr>
		</thead>
	</table>



    <table class="adminlist" cellpadding="1">
        	<tfoot>
			<tr>
				<td colspan="12">
					<del class="container"><a class="button2" href="<?php echo create_url('scenario', 'createarea');?>&scenarioid=<?php echo $token_id;?>" target="_self" title="Agregar Escenario">Siguiente</a>
</del>				</td>
			</tr>
		</tfoot>
<tbody><!-- Cuerpo de la Tabla -->


<?php

            $cuenta =  1;
while ($cuenta <= $f_no) {
          echo '
         <tr class="row0"><td align="center"><p class="small">Fila '.$cuenta++.'</p></td>';
        $cuenta2 =  1;
while ($cuenta2 <= $c_no) {
          echo '<td align="center"><p class="small">Asiento '.$cuenta2++.'</p>
          <img src="media/images/chair.png" style="border: 0" alt="Asiento"></td>';
}
echo "</tr>";
}



?>


 <?php

    if($tables0 == 1) {



 ?>

<?php

            $cuenta3 =  1;
while ($cuenta3 <= $t_no) {
          echo "<table border=1 align=center>     <tr><td>Mesa".$cuenta3++."</td> </tr>
     </table>";

}
        }
?>
        </tbody>
    </table>


<div class="clearAll"></div>

        	</div>