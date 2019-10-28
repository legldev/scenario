<?php //----------------------------------------------------------------------------------
//  (C) 2015 Something Special | www.doitspecial.com | contacto@doitspecial.com
//  global-index_content.php | v 0.2 | date: 11/05/2015 - 00:00:00 | id: 0000
//----------------------------------------------------------------------------------------
//  Footer Data
//----------------------------------------------------------------------------------------

    if (stristr(htmlentities($_SERVER['PHP_SELF']), 'global-footer_content.php')) {
	Header('Location: index.php'); die();}
?>
<footer>
<div class="footer1"><a href="http://www.masterticketca.com" target="_blank"><img src="media/images/mt_footer_logo.png" style="border: 0; float: left;" alt="MasterTicket, C.A." width="269" height="47"></a><a href="http://www.masterticketca.com" target="_self" title="MasterTicket, C.A.">MasterTicket</a>&trade;, C.A. <br>&copy; <?php $year = date("Y"); print $year;?> | Todos los Derechos Reservados</div>
             <br>
<div class="footer1"><a href="http://www.doitspecial.com" target="_blank"><img src="media/images/ss_footer_logo.png" width="269" height="47" style="border: 0; float: left" alt="Something Special"></a>Powered by <a href="http://www.doitspecial.com" target="_blank" title="Something Special">Something Special</a>&trade;<br>&copy; <?php $year = date("Y"); print $year;?> | Todos los Derechos Reservados</div>
</footer>
  <!-- end .container --></div>
    </body>
</html>