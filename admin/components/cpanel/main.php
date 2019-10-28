<?php



?>

		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="border">
			<div class="padding">

				<div id="element-box">

					<div class="t">
						<div class="t">
							<div class="t"></div>
						</div>
					</div>
					<div class="m" >
						<table class="adminform">
						<tr>

							<td width="55%" valign="top">
									<div id="cpanel">

    <div style="float:left;"><div class="icon">
        <a href="index.php?mod=content&section=add">
        <span class="icon-48-addedit"/><br>
        <span>Añadir Contenido</span></span></a>
	</div></div>

				<div style="float:left;">
			<div class="icon">
				<a href="index.php?mod=content">
					<img src="media/images/normal/header/icon-48-article.png" alt="Gestor de Contenido"  />					<span>Gestor de artículos</span></a>
			</div>
		</div>
				<div style="float:left;">
			<div class="icon">

				<a href="index.php?option=com_frontpage">
					<img src="media/images/normal/header/icon-48-frontpage.png" alt="Gestor de la página principal"  />					<span>Gestor de la página principal</span></a>
			</div>
		</div>
				<div style="float:left;">
			<div class="icon">
				<a href="index.php?option=com_sections&amp;scope=content">
					<img src="media/images/normal/header/icon-48-section.png" alt="Gestor de secciones"  />					<span>Gestor de secciones</span></a>

			</div>
		</div>
				<div style="float:left;">
			<div class="icon">
				<a href="index.php?option=com_categories&amp;section=com_content">
					<img src="media/images/normal/header/icon-48-category.png" alt="Gestor de categorias"  />					<span>Gestor de categorias</span></a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index.php?option=com_media">
					<img src="media/images/normal/header/icon-48-media.png" alt="Gestor multimedia"  />					<span>Gestor multimedia</span></a>
			</div>
		</div>
				<div style="float:left;">
			<div class="icon">

				<a href="index.php?option=com_menus">
					<img src="media/images/normal/header/icon-48-menumgr.png" alt="Gestor de menús"  />					<span>Gestor de menús</span></a>
			</div>
		</div>

    <div style="float:left;"><div class="icon">
        <a href="index.php?mod=language">
	    <span class="icon-48-langmanager"/><br>
        <span>Gestor de Idiomas</span></span></a>
	</div></div>

    <div style="float:left;"><div class="icon">
        <a href="index.php?mod=language&section=translatemanager">
	    <span class="icon-48-langmanager_t"/><br>
        <span>Administrador de Traducciones</span></span></a>
	</div></div>


    <div style="float:left;"><div class="icon">
        <a href="index.php?mod=users">
	    <span class="icon-48-user"/><br>
        <span>Gestor de usuarios</span></span></a>
	</div></div>


    <div style="float:left;"><div class="icon">
        <a href="<?php admin_url('global-config');?>">
	    <span class="icon-48-config"/><br>
        <span>Configuración global</span></span></a>
	</div></div>


                       </div>
							</td>
							<td width="45%" valign="top">

<div id="content-pane" class="pane-sliders"><div class="panel">
    <h3 class="jpane-toggler title" id="cpanel-panel-custom">
        <span>Datos Principales</span></h3>

    <div class="jpane-slider content">
    <div style="padding: 5px">Panel de Administracion: Light Enginer 1.0 Platform</div></div></div>

    <div class="panel"><h3 class="jpane-toggler title" id="cpanel-panel-logged">

    <span>Usuarios identificados</span></h3><div class="jpane-slider content">

<form method="post" action="index.php?option=com_users">
	<table class="adminlist">
		<thead>
			<tr>
				<td class="title">
					<strong>#</strong>
				</td>
				<td class="title">
					<strong>Nombre</strong>

				</td>
				<td class="title">
					<strong>Grupo</strong>
				</td>
				<td class="title">
					<strong>Cliente</strong>
				</td>
				<td class="title">

					<strong>Última vez Activo</strong>
				</td>
				<td class="title">
					<strong>Cerrar Sesión</strong>
				</td>
			</tr>
		</thead>


      	<tbody>

				<tr>
				<td width="5%">
		</td>
				<td>
					<a href="index.php?option=com_users&amp;task=edit&amp;cid[]=62" title="Editar usuario">	</a>				</td>
				<td>
	</td>

				<td>
 			</td>
				<td>
								</td>
			</tr>
					</tbody>

	</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="client" value="" />
	<input type="hidden" name="cid[]" id="cid_value" value="" />
	<input type="hidden" name="876c3ca72db1916538d7106190739826" value="1" /></form>
</div></div><div class="panel"><h3 class="jpane-toggler title" id="cpanel-panel-popular"><span>Popular</span></h3><div class="jpane-slider content">
<table class="adminlist">
<tr>
	<td class="title">
		<strong>Foros y Temas populares</strong>

	</td>
	<td class="title">
		<strong>Creado</strong>
	</td>
	<td class="title">
		<strong>Impresiones</strong>
	</td>
</tr>

	<tr>
		<td>
			<a href="index.php?option=com_content&amp;task=edit&amp;id=19">
			</a>
		</td>
		<td>
		  	</td>
		<td>

		 	</td>
	</tr>

	</table>
</div></div><div class="panel"><h3 class="jpane-toggler title" id="cpanel-panel-latest"><span>Editados y Abiertos recientemente</span></h3><div class="jpane-slider content">

<table class="adminlist">
<tr>
	<td class="title">
		<strong>Últimos items</strong>
	</td>
	<td class="title">
		<strong>Creado</strong>
	</td>
	<td class="title">

		<strong>Autor</strong>
	</td>
</tr>
<?php
?>

  		<tr>
			<td>
				<a href="index.php?option=com_content&amp;task=edit&amp;id=24">
				 </a>
			</td>

			<td>
			  </td>
			<td>
			  </td>
		</tr>
		</table>
</div></div><div class="panel"><h3 class="jpane-toggler title" id="cpanel-panel-stats"><span>Estadísticas del Portal</span></h3><div class="jpane-slider content"><table class="adminlist">
<tr>
		<td class="title" width="80%">
			<strong>Componente</strong>
		</td>

		<td class="title">
			<strong>Cantidad</strong>
		</td>
	</tr>
	<tr>
		<td>

		</td>
		<td>
		  	</td>
	</tr>
	<tr>
		<td>
			<a href="index.php?option=com_menus&amp;task=view&amp;menutype=keyconcepts">
				Foros</a>

		</td>
		<td>
	   </td>
	</tr>
	<tr>
		<td>
			<a href="index.php?option=com_menus&amp;task=view&amp;menutype=mainmenu">
				Temas</a>

		</td>
		<td>
	 </td>
	</tr>
	<tr>
		<td>
			<a href="index.php?option=com_menus&amp;task=view&amp;menutype=othermenu">
			Respuestas</a>

		</td>
		<td>
	  	</td>
	</tr>
	<tr>
		<td>
			<a href="index.php?option=com_menus&amp;task=view&amp;menutype=topmenu">
				topmenu</a>

		</td>
		<td>
			4		</td>
	</tr>
	<tr>
		<td>
			<a href="index.php?option=com_menus&amp;task=view&amp;menutype=usermenu">
				usermenu</a>

		</td>
		<td>
			4		</td>
	</tr>
</table>
</div></div></div>
							</td>
						</tr>
						</table>

						<div class="clr"></div>
					</div>
					<div class="b">
						<div class="b">
							<div class="b"></div>
						</div>
					</div>
				</div>
				<noscript>
					¡Advertencia! JavaScript debe estar habilitado para un correcto funcionamiento de la Administración				</noscript>

				<div class="clr"></div>
			</div>
		</div>
	</div>