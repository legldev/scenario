<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: account.php  (c) por Something Special                        */
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 22:59:00; 0001           */
/*-------------------------------------------------------------------------*/
/*  Pagina de Cuenta de Usuarios                                           */
/*-------------------------------------------------------------------------*/

         # Load Scenario
   $load  = mysql_query("SELECT * FROM ".$prefix."_scenarios
   WHERE token_id='$_POST[token_id]'") ;

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

$emails = $_POST['email'];
  $count = count($emails);
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
          <tr class="row1"><td align="center">Estructura de Areas del Escenario <?php echo $count; ?>          </td></tr>
		</thead>
	</table>

<form id="init_asistant" name="init_asistant" action="<?php create_url('scenario', 'createarea3');?>" method="POST" enctype="multipart/form-data" target="_self">
  <div id="formwizard" class="formwizard">
<?php
for ($i=1; $i<=$count; $i++) {

$ul = $emails[''.$i.''];

?>
<!-- Step 01: Intro -->
<fieldset class="sectionwrap">
<legend><?php echo $ul;?></legend>
<div id="intro_div" class="show">
<div id="intro_message"></div>

     <table class="adminlist" cellpadding="1">

<tbody><!-- Cuerpo de la Tabla -->

<?php

            $cuenta =  1;
while ($cuenta <= $f_no) {
          echo '
          <!-- New Row ---->
          <tr class="row0"><td align="center"><p class="small">Fila '.$cuenta++.'</p></td>';

$f = $cuenta-1;
        $cuenta2 =  1;
while ($cuenta2 <= $c_no) {

      echo '<td align="center"><p class="small"><input id="asiento[]" name="asiento[]" type="checkbox" value="Fila'.$f.'Asiento'.$cuenta2.'Area'.$i.'">Asiento '.$cuenta2++.'</p>
          <img src="media/images/chair.png" style="border: 0" alt="Asiento"></td>';
}
echo "</tr>";
}


    if($tables0 == 1) {



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
        </tbody>
    </table>



</div>
</fieldset>
  <?php
}
?>

<fieldset class="sectionwrap">
<legend></legend> <p>Haga click en Finalizar para continuar</p>

                                            <br /><br />

<input id="token_id" type="hidden" name="token_id" value="<?php echo $load_s['token_id'];?>">
<input id="scenario_id" type="hidden" name="scenario_id" value="<?php echo $load_s['id'];?>">
<input type="submit" class="button2" value="Finalizar" name="end" id="end"/>
</fieldset>

 </div>
  </form>

<div class="clearAll"></div>

        	</div>
