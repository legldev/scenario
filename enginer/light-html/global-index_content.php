<?php //----------------------------------------------------------------------------------
//  (C) 2015 Something Special | www.doitspecial.com | contacto@doitspecial.com
//  global-index_content.php | v 0.2 | date: 11/05/2015 - 00:00:00 | id: 0000
//----------------------------------------------------------------------------------------
//  Index Page
//----------------------------------------------------------------------------------------

if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password'])   {
        echo '<!-- Access Granted -->';

 ?>
   <div class="complete-main" id="bg-main"><!-- Columna Principal Central -->
               <div class="clear-separator"></div><!-- Separador -->
   <div class="section_head">

<div id="section_icon"><div id="section_title">Bienvenido</div></div></div>
    <article class="content">

    <h1 style="color: #B80000"><center>ATENCION - LEA ATENTAMENTA LA SIGUIENTE INFORMACION</center></h1>

<section>
    <div class="clear-separator"></div><!-- Separador -->
      <h2>Bienvenido al Sistema Scenario Version Alfa</h2>
      <p>Usted ha ingresado al sistema de Posicionamiento de Asientos y Butacas y Creacion de Eventos.
      Este sistema se encuentra en su fase alfa, lo cual quiere decir que está tanto el motor, el codigo y otros
      elementos que hacen funcionar el sistema estan en plena construcción. Por lo tanto, pueden ocurrir
      ciertos errores durante su ejecución y uso por lo que se recomienda <b>USARLO CON PRECAUCION</b> y
      seguir atentamente las instrucciones del desarrollador.</p>

              <br>
      <p>La interfaz actual del sistema <b>no es la interfaz final</b> y tome en cuenta que el sistema
      <b style="color:red">aun no esta completamente desarrollado</b>.</p>
          <br>
      <p>Si encuentra algun error o tiene algun problema al probar el sistema por favor notifiquelo. Si
      precisa ayuda, no dude en comunicarse con el desarrollador.</p>

            <br>
      <p>Para iniciar, Seleccione una opcion en la barra superior.</p>
</section>
</article>
    <div class="clear"></div>
    <div class="clear"></div>
     <div class="clear-separator"></div><!-- Separador -->           
</div>

<?php } else { echo '<script>alert("No puedes acceder a esta sección."); location="index.php"</script>';    } ?>

