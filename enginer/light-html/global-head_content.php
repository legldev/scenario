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

<html lang="es">

<head><!-- Head & Meta Content for <?php echo $dirw; ?> -->
<title><?php echo $Head->sitename;?></title>
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

    <link href="media/theme/<?php echo $theme;?>/icon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="media/theme/<?php echo $theme;?>/styles.css">