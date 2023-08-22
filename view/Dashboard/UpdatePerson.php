<?php

$title = "Person Form";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$Personid = Check_Get_Param($_GET['id']);
$dashboard->UpdatePerson(check_Get_Param($Personid));

?>