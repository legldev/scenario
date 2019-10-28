<?php //----------------------------------------------------------------------------------
//  (C) 2015 Something Special | www.doitspecial.com | contacto@doitspecial.com
//  global-index_content.php | v 0.2 | date: 11/05/2015 - 00:00:00 | id: 0000
//----------------------------------------------------------------------------------------
//  Header Data
//----------------------------------------------------------------------------------------
    if (stristr(htmlentities($_SERVER['PHP_SELF']), 'global-head_content.php')) {
	Header('Location: index.php'); die();}
    $Head = new Config();
?>
<!DOCTYPE HTML>

<html lang="es" xml:lang="es-es" dir="ltr" >

<head><!-- Head & Meta Content for <?php echo $dirw; ?> -->
<title><?php echo $Head->sitename;?> | Administración</title>
<meta charset="utf-8" />

    <meta http-equiv="expires" content="0">
    <meta name="distribution" content="<?php echo $Head->distribution;?>">
    <meta name="author" content="<?php echo $Head->author;?>">
    <meta name="copyright" content="(c) MasterTicket">
    <meta name="robots" content="index, follow" />

    <meta name="Country" content="<?php echo $Head->country;?>">
    <meta http-equiv="content-language" content="<?php echo $Head->enginer_lang;?>" />
    <meta name="Company name" content="MasterTicket">
    <meta name="keywords" content="<?php echo $Head->MetaKeys;?>" lang="<?php echo $Head->enginer_lang;?>" />
    <meta name="description" content="<?php echo $Head->MetaDesc;?>" lang="<?php echo $Head->enginer_lang;?>" />
    <meta name="revisit-after" content="2 Days">
    <meta name="rating" content="general">
    <meta name="generator" content="<?php echo $Head->generator;?>" />

    <link href="../media/theme/<?php echo $theme;?>/icon.png" rel="shortcut icon" type="image/x-icon" />

<?php if (isset($_GET['mod'])){    ?>

  <link rel="stylesheet" href="media/styles/modal.css" type="text/css" />
  <link rel="stylesheet" href="media/styles/calendar_style.css" type="text/css"  title="Verde"  media="all" />

<link rel="stylesheet" href="media/styles/system.css" type="text/css" />
<link href="media/theme/normal/template.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="media/theme/normal/rounded.css" />
<!--[if IE 7]>
<link href="media/styles/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lte IE 6]>
<link href="media/styles/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<?php }  else {?>
  <script type="text/javascript" src="enginer/light-js/mootools.js"></script>
<link rel="stylesheet" href="media/styles/system.css" type="text/css" />
<link href="media/styles/login.css" rel="stylesheet" type="text/css" />


<!--[if IE 7]>
<link href="/styles/admin/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lte IE 6]>
<link href="/styles/admin/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

	<link rel="stylesheet" type="text/css" href="media/theme/normal/rounded.css" />
<?php }?>