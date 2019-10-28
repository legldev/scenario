<?php //----------------------------------------------------------------------------------
//  (C) 2015 Something Special | www.doitspecial.com | contacto@doitspecial.com
//  global-offline_content.php | v 0.2 | date: 15/04/2015 - 00:00:00 | id: 0000
//----------------------------------------------------------------------------------------
//  Configuration File System
//----------------------------------------------------------------------------------------
//  Security Block Code

    if (stristr(htmlentities($_SERVER['PHP_SELF']), 'config.php')) { header('Location: index.php'); die(); }

include(PATH_ENGINER.DS.'light-html'.DS.'global-head_content.php');
  ?>
  </head>
  <body>
 <div id="login_box">
        <p class="title_b">  <?php echo $CONFIG->offline_message; ?>  </p> 
     </div>

</body>

</html>

