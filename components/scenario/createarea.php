<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: account.php  (c) por Something Special                        */
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 22:59:00; 0001           */
/*-------------------------------------------------------------------------*/
/*  Pagina de Cuenta de Usuarios                                           */
/*-------------------------------------------------------------------------*/


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
          <tr class="row1"><td align="center">Agregar Areas del Escenario</td></tr>
		</thead>
	</table>



           <div style="text-align: center">
   	<form name="frm_multiple" method="post" action="<?php echo create_url('scenario', 'createarea2');?>">
      <ul id="campos">
	<li class="email"><input type="text" name="email[]" size="25">&nbsp;&nbsp;<a id="add" href="javascript:agregar();">Agregar</a></li>
</ul>

    <p align="center"><input type="submit" name="Send" value="Siguiente" /></p>
    <input id="token_id" type="hidden" name="token_id" value="<?php echo $_GET['scenarioid'];?>">
    </form>
</div>



<div class="clearAll"></div>

        	</div>
