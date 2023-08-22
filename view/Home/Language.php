<?php

$title = 'Language';
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyBusiness/Helpers/init.php');
$home = new Purchase();
$home->LanguageChange(Check_Param($_GET['lang']));
include("../Layout/Footer.php");
?>
