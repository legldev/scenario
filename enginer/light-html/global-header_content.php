<?php //----------------------------------------------------------------------------------
//  (C) 2015 Something Special | www.doitspecial.com | contacto@doitspecial.com
//  global-header_content.php | v 0.3 | date: 11/05/2015 - 00:00:00 | id: 0000
//----------------------------------------------------------------------------------------
//  Header & Body Data
//----------------------------------------------------------------------------------------

    if (stristr(htmlentities($_SERVER['PHP_SELF']), 'global-header_content.php')) {
	Header('Location: index.php'); die();}

?>

<body><!-- Body Begin -->
<div class="container"><!-- Contenedor -->

<!-- Header: Barra Superior Estatica -->
  <header>

      <a href="index.php"><img src="media/theme/<?php echo $theme;?>/logo.png" alt="<?php echo $Head->short_sitename;?>" width="200" height="100" id="<?php echo $Head->short_sitename;?>" class="logo_header" style="display: block; float: left;"></a>

<div class="toolbar"><!-- Barra Superior -->

<?php    if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password']) {  ?>
<div id="user_nav"><li id="links_options" class="left">
<a target="_self" title="Inicio" href="index.php"><img src="media/theme/<?php echo $theme;?>/icons/icon_profile.png"><br><?php echo $_COOKIE['user'];?></a></li>
</div><?php } else {?>
<div id="user_nav"><li id="links_options" class="left"></li>
</div>
<?php }    ?>



    <div id="primary_nav"><!-- Barra de Superior de Botones de Navegación -->
        <ul>
<?php  if($_COOKIE['id'] && $_COOKIE['user'] && $_COOKIE['password']) {

?>
<!-- Botón 1: Inicio -->
<li id="nav_home" class="left"><a target="_self" title="Inicio" href="index.php"><img src="media/theme/<?php echo $theme;?>/icons/icon_primary_home.png"><br>Inicio</a></li>

<!-- Botón 2: Mi Cuenta -->
<li id="" class="left"><a target="_self" title="Mi Cuenta" href="<?php echo create_url('account');?>"><img src="media/theme/<?php echo $theme;?>/icons/icon_account.png"><br>Mi Cuenta</a></li>

<!-- Botón 3: Escenarios -->
<li id="" class="left"><a target="_self" title="Escenarios" href="<?php echo create_url('scenario');?>"><img src="media/theme/<?php echo $theme;?>/icons/icon_scenario.png"><br>Escenarios</a></li>

<!-- Autorizado --><!-- Botón 4: Inventario -->
<li id="" class="left"><a target="_self" title="Eventos" href="<?php echo create_url('events');?>"><img src="media/theme/<?php echo $theme;?>/icons/icon_events.png"><br>Eventos</a></li>

<!-- Botón 5: Perfil -->
<li id="" class="left"><a target="_self" title="Entradas" href="<?php echo create_url('tickets');?>"><img src="media/theme/<?php echo $theme;?>/icons/icon_tickets.png"><br>Entradas</a></li>

<!-- Botón 6: Ayuda -->
<li id="" class="left"><a target="_self" title="Mas" href="<?php echo create_url('settings');?>"><img src="media/theme/<?php echo $theme;?>/icons/icon_config.png"><br>Configuración</a></li>

<!-- Botón 7: Salir -->
<li id="" class="left"><a target="_self" title="Salir" href="session.php?mode=out" onclick="return confirm('¿Está seguro que desea Finalizar su Sesión?')"><img src="media/theme/<?php echo $theme;?>/icons/icon_exit.png"><br>Salir</a></li>
<?php } else {?>

<!-- Botón 1: Inicio -->
<li id="nav_home" class="left"><a target="_self" title="Inicio" href="index.php"><img src="media/theme/<?php echo $theme;?>/icons/icon_primary_home.png"><br>Inicio</a></li>

<?php } ?>
        </ul>


            </div>


                </div>

  </header>



