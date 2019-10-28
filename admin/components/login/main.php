<?php

?>

<body onload="javascript:setFocus()">
	<div id="border-top" class="h_green">
		<div>
			<div>
				<span class="title"><?php echo $Head->sitename;?></span>
			</div>
		</div>
	</div>

	<div id="content-box">
		<div class="padding">
			<div id="element-box" class="login">
				<div class="t">
					<div class="t">
						<div class="t"></div>
					</div>
				</div>
				<div class="m">

					<h1>Acceso a la administración de <?php echo $Head->sitename;?></h1>

							<div id="section-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
		 		</div>
	 		</div>
			<div class="m">

				<form action="session.php?mode=in" method="post" name="login" id="form-login" style="clear: both;">
	<p id="form-login-username">
		<label for="modlgn_username">Nombre de usuario</label>
		<input name="username" id="modlgn_username" type="text" class="inputbox" size="15" />
	</p>

	<p id="form-login-password">
		<label for="modlgn_passwd">Contraseña</label>

		<input name="passwd" id="modlgn_passwd" type="password" class="inputbox" size="15" />
	</p>
		<p id="form-login-lang" style="clear: both;">
		<label for="lang">Idioma</label>
		<select name="lang" id="lang"  class="inputbox"><option value=""  selected="selected">Predeterminado</option><option value="ca-ES" >Catalan</option><option value="en-GB" >English (United Kingdom)</option><option value="es-ES" >Español (spanish formal Internacional)</option></select>	</p>
	<div class="button_holder">

	<div class="button1">
		<div class="next">
			<a onclick="login.submit();">
				Acceder</a>

		</div>
	</div>
	</div>
	<div class="clr"></div>

	<input type="submit" name="send" style="border: 0; padding: 0; margin: 0; width: 0px; height: 0px;" value="send" />
	<input type="hidden" name="option" value="com_login" />
	<input type="hidden" name="task" value="login" />
	<input type="hidden" name="a398eb1e4d50ce692728649a2ddc59c9" value="1" /></form>
				<div class="clr"></div>
			</div>
			<div class="b">
				<div class="b">
		 			<div class="b"></div>

				</div>
			</div>
		</div>

					<p>Usa un nombre de usuario y contraseña válido para poder tener acceso a la administración.</p>
					<p>
						<a href="<?php echo $dirw;?>">Regresar a la página de inicio</a>
					</p>
					<div id="lock"></div>

					<div class="clr"></div>
				</div>
				<div class="b">
					<div class="b">
						<div class="b"></div>
					</div>
				</div>
			</div>
			<noscript>
				¡Advertencia! JavaScript debe estar habilitado para un correcto funcionamiento de la Administración			</noscript>

			<div class="clr"></div>
		</div>
	</div>