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
<div id="section_icon"><div id="section_title">Mi Cuenta</div></div></div>
    <article class="content">

    <h1><center>Informacion</center></h1>

<section>

      <p>La seccion "Mi Cuenta" permitira observar informacion sobre:
      <ul>
          <li>Eventos Publicados</li>
          <li>Estadisticas de Ventas de Entradas</li>
          <li>Datos de Clientes</li>
          <li>Administración de Contenido</li>
          <li>Escenarios Creados</li>
          <li>Otras Opciones...</li>
      </ul>
      </p>
      <br>
      <p>Tambien se podrán modificar datos de perfil y administrar el diseño del perfil publico.</p>
            <br>
      <p>Todas opciones y sistemas se encuentran <b style="color: red">en DESARROLLO</b> por lo tanto no son visibles ni pueden
      ser probados aún.</p>
</section>
</article>

    <div class="clear"></div>
    <div class="clear"></div>
</div>
<?php } else { echo '<script>alert("No puedes acceder a esta sección."); location="index.php"</script>';    } ?>

