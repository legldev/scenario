<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: main.php  (c) por Something Special
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 22:59:00; 0001
/*-------------------------------------------------------------------------*/
/*  Pagina de Escenarios
/*-------------------------------------------------------------------------*/


 if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];     } else {
        $mode = '';}

                       # Query Last Scenario Created
   $sql_s = mysql_query("SELECT * FROM ".$prefix."_scenarios
   ORDER BY `global_scenarios`.`saved_on` DESC LIMIT 1") ;

   $last_s = mysql_fetch_array($sql_s);

 if($mode=='addnew')   {

// uncomment next line if running on PHP below 4.2.0
// srand((double)microtime()*1234567);
$random = rand(0000000, 1000000); // between 0 and 100 inclusive

      function mt_rand_str ($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890') {
     for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
     return $s;
 }

$token = mt_rand_str(8) ."" .mt_rand_str(6, '0123456789ABCDEF') ."". $random;  // Something like B9CD0F      ;

?>
<!-- Add New Event -->
    <div class="complete_main">
    <table class="adminlist" cellpadding="1">
		<thead><tr><th class="title">Agregar Evento</th></tr></thead>

    <tbody>

    <tr class="row1"><td align="center">Ingresa los datos principales del Evento a crear.</td></tr>

    <div class="form">
    <form action="content.php?mod=scenario&section=createscenario" method="post" name="create_scenario" enctype="multipart/form-data" target="_self" id="create_scenario">

    <tr class="row0"><td>
        <label for="e_name">Nombre<b class="red">*</b></label>
        <input name="e_name" id="e_name" maxlength="50" size="40" onfocus="showHelp(this);" onblur="hideHelp(this);" type="text">
        <div id="e_name_text" class="info_box"><p>Ingresa el Nombre del Evento (Ejemplo: "Off Road 2015").</p></div>
    </td></tr>

    <tr class="row0"><td>
        <label for="location">Ubicacion:<b class="red">*</b></label>
        <input name="location" id="location"  onfocus="showHelp(this);" onblur="hideHelp(this);" maxlength="25" size="40" type="text">
        <div id="location_text" class="info_box"><p>Ingresa la ubicacion del escenario (Ejemplo: "Valencia").</p></div>
    </td></tr>

    <tr class="row0"><td>
        <label for="capacity">Capacidad:<b class="red">*</b></label>
		<input name="capacity" id="capacity" size="6" onfocus="showHelp(this);" onblur="hideHelp(this);" maxlength="100" type="text">
        <div id="capacity_text" class="info_box"><p>Ingresa la capacidad en numero de Asientos (Ejemplo: "200").</p></div>
    </td></tr>

    <tr class="row0"><td>
        <label for="ambient">Selecciona el tipo de ambiente:<b class="red">*</b></label>
	    <select id="ambient" name="ambient" onfocus="showHelp(this);" onblur="hideHelp(this);" size="1">
            <option value="outdoor">Aire Libre</option>
            <option value="indoor">Cerrado</option>
            <option value="mix">Mixto</option>
        </select>
        <div id="ambient_text" class="info_box"><p>Selecciona el Tipo de Ambiente o Escenario.</p></div>
    </td></tr>

    <tr class="row0"><td>
        <label for="chairs">Sillas:<b class="red">*</b></label>
        <select id="chairs" name="chairs" size="1" onchange="show1()" onfocus="showHelp(this);" onblur="hideHelp(this);">
            <option value="">--Selecciona</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>

        <label for="rows">Numero de Filas:&nbsp;</label>
        <input id="f_no" name="f_no" size="3" onfocus="showHelp(this);" onblur="hideHelp(this);" disabled>
        <label for="chairsperrow">Numero de Sillas por Fila:&nbsp;</label>
        <input id="c_no" name="c_no" size="3" onfocus="showHelp(this);" onblur="hideHelp(this);" disabled>

        <div id="chairs_text" class="info_box"><p>Si el Escenario tiene sillas para los asistentes selecciona SI, de lo contrario Seleccion NO.</p></div>
        <div id="f_no_text" class="info_box"><p>Ingrese el numero de Filas Total del Escenario.</p></div>
        <div id="c_no_text" class="info_box"><p>Ingrese el numero de Sillas por Filas.</p></div>
    </td></tr>

    <tr class="row0"><td>
        <label for="tables">Mesas:<b class="red">*</b></label>
		<select id="tables" name="tables" size="1" onchange="show2()">
            <option value="">--Selecciona</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>

        <label for="rows">Numero de Mesas:&nbsp;</label>
        <input id="t_no" name="t_no" size="3" disabled>
    </td></tr>

    <input name="token" id="token" value="<?php echo $token;?>" type="hidden">
    <tr align="center"><td><input type="submit" name="submit" value="Siguiente"></td></tr>


    </form>
    </div>
	</tbody>
	</table>

    <!-- end .content --><div class="clear"></div>
    <div class="clear"></div>
    </div>


  <?php }  else  if($mode=='delete')   {

  $scenarioid = $_GET['scenarioid'];

        mysql_query("DELETE FROM ".$prefix."_scenarios WHERE id = '$scenarioid'");
        mysql_query("DELETE FROM ".$prefix."_structure WHERE id_scenario = '$scenarioid'");

      echo '<script>location="content.php?mod=scenario"</script>';

      } else {

      // Pagina PRINCIPAL

      include('enginer/light-html/global-sidebar_content.php');

  ?>

   <div class="main" id="bg-main"><!-- Columna Principal Central -->

   <div class="section_head">
<div id="section_icon"><div id="section_title">Eventos</div></div></div>
    <article class="content">

    <h1><center>Seleccione una Opción</center></h1>

<section>
    <div class="clear-separator"></div><!-- Separador -->

    <div class="options"><!-- Menu de Opciones -->

    <ul class="options_buttons">



<li> <a onclick="alert ('Opcion no Disponible');"target="_self" title="Agregar Evento">Agregar Nuevo Evento</a></li>
<li>              <a target="_self" title="Agregar Escenario" onclick="alert ('Opcion no Disponible');">Modificar Evento</a>  </li>
<li>                  <a target="_self" title="Ver Lista de Escenarios" onclick="alert ('Opcion no Disponible');">Mostrar todos los Eventos</a>     </li>




        </ul>
    </div>
</section>
</article>

<article class="content">
    <h1><center>Ultimo Evento Creado</center></h1>
   <section>
    <div class="clear-separator"></div><!-- Separador -->


       <div class="options"><!-- Menu de Opciones -->

    <ul class="options_buttons">

   <?php

     if(mysql_num_rows($sql_s)==0) { echo ''; } else {

   echo '<li>'.$last_s['s_name'].'<a href="content.php?mod=scenario&mode=delete&scenarioid='.$last_s['id'].'" target="_self" title="Agregar Escenario">&nbsp;-&nbsp;Eliminar</a></li>';
  }
   ?>

        </ul>
    </div>
</section>

 </article>
    <div class="clear"></div>
    <div class="clear"></div>
</div>








 <?php }  ?>