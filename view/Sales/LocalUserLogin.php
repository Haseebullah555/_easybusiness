<?php

$title = "UserLogin";
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$users = new House();
$lui= Check_Get_Param($_GET['id']);
$users->LocalUserLogin(Check_Get_Param($lui));

?>