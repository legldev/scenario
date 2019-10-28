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
                  			<h3 class="dd">Areas del Escenario   </h3>
               <table border=1>
               <h3 class="dd">Asientos   </h3>

               <?php
if($_POST['end']) {



for ($cuenta =  1; $cuenta <= $f_no; $cuenta++) {
   // $ct1 = $cuenta++;
     //     echo "<tr><td>  Fila ".$ct1."</td>";

     echo "<tr><td>Fila&nbsp;".$cuenta."</td>";

for ($cuenta2 =  1; $cuenta2 <= $c_no; $cuenta2++) {
while(list($nummensaje , $num) = each($_POST)) {
        $match = 'Fila'.$cuenta.'Asiento'.$cuenta2;

}

             echo "<td>Asiento&nbsp;".$cuenta2."</td>";
}
echo "</tr>
";
}


}


?>

</table>
	<br><br>
<table border=1>
<?php





if(preg_match("^asiento^",$nummensaje)) {

     $count = 0;
     $count = count($num);
     $i=1;



echo '<tr id="vip"><td>vip</td>';


for ($i=0; $i<=$count; $i++) {

if(preg_match("^Area1^", $num[$i]))  {

echo $nummensaje[$i].'--'.$num[$i].'/';

echo '<td>

<input id="asiento[]" name="asiento[]" type="checkbox" value="">'.$num[$i].'

<input id="chairs" type="hidden" name="chairs" value='.$num[$i].'></td>';

}





}

echo "</tr>";

echo '<tr id="arena"><td>arena</td>';
for ($i=0; $i<=$count; $i++) {


if(preg_match("^Area2^", $num[$i]))  {


echo '<td>

<input id="asiento[]" name="asiento[]" type="checkbox" value="">'.$num[$i].'

<input id="chairs" type="hidden" name="chairs" value='.$num[$i].'></td>';

}


}

echo "</tr>";

}




?>
     </table>

</div>

           <a href="create_scenario2.php" target="_self" title="Agregar Escenario">Siguiente</a><br />

		<div class="clearAll"></div>

        	</div>

