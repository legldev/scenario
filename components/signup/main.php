<?php
/*-------------------------------------------------------------------------*/
/*  Archivo: signup.php  (c) por Something Special                         */
/*  Versión, Fecha y Codigo Id: v 0.1; 16/04/15 - 09:24:00; 0001           */
/*-------------------------------------------------------------------------*/
/*  Archivo de Registro de Usuarios                                        */
/*-------------------------------------------------------------------------*/


if (isset($_POST['submit'])) {
    $submit = $_POST['submit'];     } else {
        $submit = '';}

if (isset($_POST['password_reg'])) {
    $pass101 = $_POST['password_reg'];     } else {
        $pass101 = '';}
if (isset($_POST['confirm_password'])) {
    $pass2 = $_POST['confirm_password'];     } else {
        $pass2 = '';}
if (isset($_POST['username_reg'])) {
    $username = $_POST['username_reg'];     } else {
        $username = '';}

        if (isset($_POST['f_name'])) {
    $name = $_POST['f_name'];     } else {
        $name = '';}

if (isset($_POST['email'])) {
    $email = $_POST['email'];     } else {
        $email = '';}

    $pass1 = md5($pass101);

                    $date = time();
                        $ip = $_SERVER["REMOTE_ADDR"];
                         $us_type = '0001';


if($submit){ if($pass101==$pass2){

    $sql_01 = mysql_query("SELECT * FROM ".$prefix."_users WHERE username='$username' or email='$email'");

if(mysql_num_rows($sql_01)== 0){

$error = '';
  if(!$username){ $error = "Falta tu nombre de usuario"; }
  if(!$pass101){ $error = "Error contraseña"; }
  if(!$email){ $error = "Falta email"; }
        } else { $error = "Usuario ya registrado"; }
        } else { $error = "Error contraseña"; }


    if($error){ echo"<script>alert('Faltan Datos'); window.location='javascript:history.back()';</script>"; }
else {

    if(!mysql_query("INSERT INTO ".$prefix."_users (username,password,email,date,f_name,ip,user_type) VALUES ('$username','$pass1','$email','$date','$name','$ip','$us_type')"))
    {
      echo"<script>alert('Error'); window.location='javascript:history.back()';</script>"; }
      echo"<script>location='index.php?username=".$username."'</script>"; }
        } else {
 ?>


    <div class="complete_main"><!-- Contenedor -->
    <div class="clear-separator"></div><!-- Separador -->

    <!-- Formulario --><form action="content.php?mod=signup&mode=new_user" method="post" id="sign_up" name="sign_up" enctype="multipart/form-data" target="_self">

    <table class="adminlist" cellpadding="1">
	    <thead>
            <tr><th class="title">Regístrate</th></tr><!-- Titulo -->
        </thead>

<tbody><!-- Cuerpo de la Tabla -->

      <tr class="row0"><td align="center">Registrarse es muy fácil y solo toma 1 minuto.</td></tr>

      	<!-- Campo 1: Nombre --><tr class="row0"><td><label for="name_reg"><strong>Nombre:</strong></label>
                 		    <input name="f_name" id="f_name" maxlength="50" size="40"  onfocus="showHelp(this);" onblur="hideHelp(this);" type="text">
	<div id="f_name_text" class="info_box"><p>Ingresa solamente tu Primer Nombre, Ej.: Luis.</p></div></td></tr>

   <!-- Campo 2: Usuario --><tr class="row0"><td><label for="username_reg"><strong>Nombre de Usuario</strong></label>
  <input name="username_reg" id="username_reg" maxlength="25" size="40" type="text">
  <div id="Info"></div>
    <div id="username_reg_text" class="info_box"><p>Solo están permitidos letras del Alfabeto Latino (A-Z), números (0-9) y carácteres como: guión (-) y guión bajo (_). Se permite como mínimo 3 carácteres y debe iniciar con una letra.</p></div>





    </td></tr>

    <!-- Campo 3: Email --><tr class="row0"><td><label for="email"><strong>Email:</strong></label>
    <input name="email" id="email" class="inputbox required validate-email" size="40" maxlength="100" onfocus="showHelp(this);" onblur="hideHelp(this);" type="text">
    <div id="email_text" class="info_box"><p>Se requiere que ingrese un E-mail real. Su correo no será publicado sin su permiso o utilizado para enviarle Spam o correo basura.</p></div></td></tr>

    <!-- Campo 4: Contraseña --><tr class="row0"><td><label for="password_reg"><strong>Contraseña:</strong></label>
    <input name="password_reg" id="password_reg" class="inputbox required validate-password" size="40" maxlength="32" onfocus="showHelp(this);" onblur="hideHelp(this);" type="password">
    <div id="password_reg_text" class="info_box"><p>Se permite un mínimo de 4 carácteres. No puede contener espacios y es sensible a las mayúsculas.<br>Ej.: AZULejo = azulejo.</p></div></td></tr>

    <!-- Campo 5: Verificación de Contraseña --><tr class="row0"><td><label for="confirm_password"><strong>Repite tu contraseña:</strong></label>
    <input name="confirm_password" id="confirm_password" class="inputbox required validate-passverify" size="40" maxlength="32" onfocus="showHelp(this);" onblur="hideHelp(this);" type="password">
    <div id="confirm_password_text" class="info_box"><p>Por seguridad, debes verificar tu contraseña volviendola a escribir.</p></div></td></tr>

    <!-- Botón --><tr class="row0"><td><input name="submit" value="Registrate" class="button validate" type="submit"></td></tr>


				<input name="token" id="token" value="a7149330dd459f7d207d5c7a495e7dce" type="hidden">
				<input name="register" value="true" type="hidden">



        </tbody>
    </table>
</form>

    <div class="clear-separator"></div><!-- Separador -->
</div>


<?php } ?>