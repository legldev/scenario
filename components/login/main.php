<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | www.DoItSpecial.com | soporte@doitspecial.com
    main.php | v 1.0 | date: 15/06/2015
----------------------------------------------------------------------------------------*/
    $get_user = $_GET['username'];
    d_begin('complete_main','begin.complete-main');
    sep();
    d_begin_id('login_box','begin.login_box');   ?>
    <form id="login" name="login" action="session.php?mode=in" method="POST" enctype="multipart/form-data">
        <p class="title"><?php echo LOGIN_MENU_TITLE;?></p>
        <label for="user"><?php echo USER_LABEL;?></label><p><input id="user" name="user" type="text" class="inputbox1" value="<?php echo $get_user;?>"></p><br>
        <label for="password"><?php echo PASSWORD_LABEL;?></label><p><input id="password" name="password" type="password" class="inputbox1"></p>
        <input id="sign_in" name="sign_in" type="submit" class="button1" value="<?php echo SIGNIN_BUTTON;?>"><br><br>
        <input id="redir" type="hidden" name="redir" value="">
        <p><a title="Registrate" href="<?php echo create_url('signup');?>"><?php echo SIGNUP_TITLE;?></a><br>
        <a title="¿Olvidaste tu contraseña?" href="<?php echo create_url('account','lost-password');?>"><?php echo LOSTPASSWORD_LINK;?></a></p>
    </form>
<?php
    d_end('end.login_box');
    clear();
    d_end('end.complete-main'); ?>