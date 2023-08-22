<?php

$title = "Address";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$dashboard->AddAddress();
require_once ("../layout/footer.php");
?>