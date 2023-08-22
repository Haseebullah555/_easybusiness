<?php

$title = "UserLogin";
require_once ('c:/xampp/htdocs/EasyBusiness/Helpers/init.php');
$users = new Login();
$lui= Check_Get_Param($_GET['id']);
$users->LocalUserLogin(Check_Get_Param($lui));

?>