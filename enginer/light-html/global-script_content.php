<?php //----------------------------------------------------------------------------------
//  (C) 2015 Something Special | www.doitspecial.com | contacto@doitspecial.com
//  global-index_content.php | v 0.2 | date: 11/05/2015 - 00:00:00 | id: 0000
//----------------------------------------------------------------------------------------
//  WebPage Scripts Information
//----------------------------------------------------------------------------------------

    if (stristr(htmlentities($_SERVER['PHP_SELF']), 'global-script_content.php')) {
	Header('Location: index.php'); die();}

 if($_GET['section']== 'createarea'){ } else {
?>


      <script src="enginer/light-js/jquery.min.js"></script>

            <script src="enginer/light-js/jquery-2.1.1.js"></script>
                     <script src="enginer/light-js/jquery-1.3.2.js"></script>

     <script src="enginer/light-js/light-common.js"></script>

<?php } if ($_GET['mod']== 'signup'){    ?>


<?php if ($_GET['mod']== 'scenario' && $_GET['section']== 'create_scenario_area'){ echo ''; } else {    ?>
<?php } ?>
<script type="text/javascript">

$(document).ready(function() {
	$('#username_reg').blur(function(){

		$('#Info').html('<img src="media/images/loader.gif" alt="" />').fadeOut(1000);

		var username_reg = $(this).val();
		var dataString = 'username_reg='+username_reg;

		$.ajax({
            type: "POST",
            url: "enginer/light-functions/check.php",
            data: dataString,
            success: function(data) {
				$('#Info').fadeIn(1000).html(data);
				//alert(data);
            }
        });
    });
});
</script>


<?php } ?>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<?php if ($_GET['mod']== 'scenario' && $_GET['section']== 'createarea2'){     ?>
<link rel="stylesheet" type="text/css" href="media/styles/formwizard.css" />
<script src="enginer/light-js/formwizard.js"></script>

<script type="text/javascript">
var myform=new formtowizard({
	formid: 'init_asistant',
	persistsection: true,
	revealfx: ['slide', 500]    })
</script>

<?php } if ($_GET['mod']== 'scenario' && $_GET['mode']== 'addnew'){   ?>

<script language="JavaScript">
   function show1(){
     if (document.create_scenario.chairs.value != "1") {
 	document.create_scenario.f_no.disabled = true;
 	document.create_scenario.c_no.disabled = true;
    }else{
 	if (document.create_scenario.chairs.value == "1") {
            document.create_scenario.f_no.disabled = false;
            document.create_scenario.c_no.disabled = false;
 	}
   }
 }
   function show2(){
     if (document.create_scenario.tables.value != "1") {
 	document.create_scenario.t_no.disabled = true;
    }else{
 	if (document.create_scenario.tables.value == "1") {
            document.create_scenario.t_no.disabled = false;
 	}
   }
 }
 </script>

 <?php } if ($_GET['mod']== 'scenario' && $_GET['section']== 'createarea'){  ?>

   <script type="text/javascript">
emails=1;
function agregar() {
	emails=emails+1;
	$("#campos").append('<li class="email'+emails+'"><input type="text" name="email[]" size="25" />&nbsp;&nbsp;<a id="delete" href="#" onclick="javascript:borrar('+emails+');">Borrar</a></li>');
}
function borrar(cual) {
	$("li.email"+cual).remove();
	return false;
}
</script>

<?php } ?>

</head>
