<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    community_services.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');
    
    $date = date('Y-m-d H:i:s');
    $mode_inbox = 0;
    $mode_outbox = 1;
    $is_read = 0;
    $read = 1;
    $ip = $_SERVER["REMOTE_ADDR"];

    if(isset($_COOKIE['id'])) { $id = $_COOKIE['id']; } else { $id = ''; }
    if(isset($_COOKIE['user'])) { $user = $_COOKIE['user']; } else { $user = ''; }

    function check_messages() {
        global $id, $mode_inbox, $is_read, $prefix;
    $q_msg = mysql_query("SELECT * FROM `".$prefix."_users-messages` WHERE `id_user_send` = '".$id."' AND `is_read`='".$is_read."' AND `mode` = '".$mode_inbox."'");
    $msg = mysql_num_rows($q_msg);

    return  '<li><a href="'.create_url('account','messages').'" target="_self" title="'.MESSAGES.'"><img src="media/theme/doitpro/icons/msg_icons.png" width="20" height="20" style="border: 0; " alt="'.MESSAGES.'"><sup>'.$msg.'</sup></a></li>';
    }

