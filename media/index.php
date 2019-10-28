<?php
if(stristr(htmlentities($_SERVER['PHP_SELF']), "index.php")) {Header("Location: ../index.php");
    die();}