<?php



?>
<body id="minwidth-body">
	<div id="border-top" class="h_green">
		<div>

			<div>
				<span class="version">Light Enginer Versión <?php echo $Head->app_version;?></span>
				<span class="title"><?php echo $Head->sitename;?></span>
			</div>
		</div>
	</div>
	<div id="header-box">
		<div id="module-status">

			<span class="preview"><a href="<?php echo $dirw;?>" target="_blank">Previsualizar</a></span><a href="index.php?option=com_messages"><span class="no-unread-messages">0</span></a><span class="loggedin-users">1</span><span class="logout"><a href="session.php?mode=out">Cerrar sesión</a></span>
		</div>
		<div id="module-menu">
			<ul id="menu" >

<li class="node"><a>Sitio</a><ul>


<li><a class="icon-16-cpanel" href="<?php admin_url('cpanel');?>">Panel de control</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-user" href="">Gestor de usuarios</a></li>
<li><a class="icon-16-media" href="index.php?option=com_media">Gestor multimedia</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-config" href="<?php admin_url('global-config');?>">Configuración global</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-logout" href="session.php?mode=out">Cerrar sesión</a></li>
</ul></li>



<li class="node"><a>Menús</a>
<ul>
<li><a class="icon-16-menu" href="index.php?option=com_menus">Gestor de menús</a></li>

<li><a class="icon-16-trash" href="index.php?option=com_trash&amp;task=viewMenu">Papelera de menús</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-menu" href="index.php?option=com_menus&amp;task=view&amp;menutype=mainmenu">Menú principal *</a></li>
<li><a class="icon-16-menu" href="index.php?option=com_menus&amp;task=view&amp;menutype=usermenu">Menú de usuario</a></li>
<li><a class="icon-16-menu" href="index.php?option=com_menus&amp;task=view&amp;menutype=topmenu">Menú principal</a></li>
<li><a class="icon-16-menu" href="index.php?option=com_menus&amp;task=view&amp;menutype=othermenu">Recursos</a></li>
<li><a class="icon-16-menu" href="index.php?option=com_menus&amp;task=view&amp;menutype=ExamplePages">Páginas de ejemplo</a></li>
<li><a class="icon-16-menu" href="index.php?option=com_menus&amp;task=view&amp;menutype=keyconcepts">Conceptos clave</a></li>
</ul>
</li>

<li class="node"><a>Contenido</a>
<ul>
<li><a class="icon-16-article" href="<?php admin_url('content');?>">Gestor de Contenido</a></li>
<li><a class="icon-16-trash" href="index.php?option=com_trash&amp;task=viewContent">Papelera de artículos</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-section" href="index.php?option=com_sections&amp;scope=content">Gestor de secciones</a></li>
<li><a class="icon-16-category" href="index.php?option=com_categories&amp;section=com_content">Gestor de categorías</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-frontpage" href="index.php?option=com_frontpage">Gestor de la página de inicio</a></li>
</ul>
</li>

<li class="node"><a>Componentes</a>
<ul>
<li><a class="icon-16-language" href="index.php?option=com_translationsmanager">Administrador de Traducciones</a></li>
<li class="node"><a class="icon-16-component" href="index.php?option=com_banners">Banner</a><ul id="menu-banner" class="menu-component">
<li><a class="icon-16-edit" href="index.php?option=com_banners">Anuncios(Banners)</a></li>
<li><a class="icon-16-categories" href="index.php?option=com_banners&amp;c=client">Clientes</a></li>
<li><a class="" href="index.php?option=com_categories&amp;section=com_banner">Categorías</a></li>
</ul>
</li>
<li><a class="icon-16-component" href="index.php?option=com_search">Buscar</a></li>

<li class="node"><a class="icon-16-component" href="index.php?option=com_contact">Contactos</a><ul id="menu-contactos" class="menu-component">
<li><a class="icon-16-edit" href="index.php?option=com_contact">Contactos</a></li>
<li><a class="icon-16-categories" href="index.php?option=com_categories&amp;section=com_contact_details">Categorías</a></li>
</ul>
</li>
<li><a class="icon-16-component" href="index.php?option=com_poll">Encuestas</a></li>
<li class="node"><a class="icon-16-component" href="index.php?option=com_weblinks">Enlaces web</a><ul id="menu-enlaces-web" class="menu-component">
<li><a class="icon-16-edit" href="index.php?option=com_weblinks">Enlaces</a></li>
<li><a class="icon-16-categories" href="index.php?option=com_categories&amp;section=com_weblinks">Categorías</a></li>
</ul>

</li>
<li class="node"><a class="icon-16-component" href="index.php?option=com_newsfeeds">Servidor de Noticias(newsfeeds)</a><ul id="menu-servidor-de-noticias(newsfeeds)" class="menu-component">
<li><a class="icon-16-edit" href="index.php?option=com_newsfeeds">Noticias</a></li>
<li><a class="icon-16-categories" href="index.php?option=com_categories&amp;section=com_newsfeeds">Categorías</a></li>
</ul>
</li>
</ul>
</li>
<li class="node"><a>Extensiones</a>
<ul>
<li><a class="icon-16-install" href="index.php?option=com_installer">Instalar/Desinstalar</a></li>
<li class="separator"><span></span></li>

<li><a class="icon-16-module" href="index.php?option=com_modules">Gestor de módulos</a></li>
<li><a class="icon-16-plugin" href="index.php?option=com_plugins">Gestor de plugins</a></li>
<li><a class="icon-16-themes" href="index.php?option=com_templates">Gestor de plantillas</a></li>
<li><a class="icon-16-language" href="index.php?option=com_languages">Gestor de idiomas</a></li>
</ul>
</li>
<li class="node"><a>Herramientas</a>
<ul>
<li><a class="icon-16-messages" href="index.php?option=com_messages">Leer mensajes</a></li>
<li><a class="icon-16-messages" href="index.php?option=com_messages&amp;task=add">Escribir mensaje</a></li>

<li class="separator"><span></span></li>
<li><a class="icon-16-massmail" href="index.php?option=com_massmail">Correo Masivo</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-checkin" href="index.php?option=com_checkin">Desbloqueo global</a></li>
<li class="separator"><span></span></li>
<li><a class="icon-16-config" href="index.php?option=com_cache">Limpiar la caché</a></li>
<li><a class="icon-16-config" href="index.php?option=com_cache&amp;task=purgeadmin">Purgar la caché expirada</a></li>
</ul>
</li>
<li class="node"><a>Ayuda</a>
<ul>
<li><a class="icon-16-help" href="<?php echo $Head->helpurl;?>">Ayuda</a></li>

<li><a class="icon-16-info" href="<?php admin_url('info');?>">Información del sistema</a></li>
</ul>
</li>
</ul>

		</div>


