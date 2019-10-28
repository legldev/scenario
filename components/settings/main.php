<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: account.php  (c) por Something Special                        */
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 22:59:00; 0001           */
/*-------------------------------------------------------------------------*/
/*  Pagina de Cuenta de Usuarios                                           */
/*-------------------------------------------------------------------------*/


if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password'])   {
        echo '<!-- Autorizado -->';
        include('enginer/light-html/global-sidebar_content.php');        ?>

   <div class="main" id="bg-main"><!-- Columna Principal Central -->

   <div class="section_head">
<div id="section_icon"><div id="section_title">Configuracion</div></div></div>
    <article class="content">

    <h1 style="color: #B80000"><center>Seccion en Construccion</center></h1>
<section>
    <div class="clear-separator"></div><!-- Separador -->
      <h2>Esta seccion permitirá configurar opciones del sistema.</h2>
      <p>Aqui podrá configurar el sistema de ayuda de Scenario asi como tambien opciones de
      rendimiento y contenido.</p>

              <br>
      <p>La interfaz actual del sistema <b>no es la interfaz final</b> y tome en cuenta que el sistema
      <b style="color:red">aun no esta completamente desarrollado</b>.</p>
          <br>
      <p>Si encuentra algun error o tiene algun problema al probar el sistema por favor notifiquelo. Si
      precisa ayuda, no dude en comunicarse con el desarrollador.</p>
</section>
</article>

    <div class="clear"></div>
    <div class="clear"></div>
</div>
<?php } else { echo '<script>alert("No puedes acceder a esta sección."); location="index.php"</script>';    } ?>

