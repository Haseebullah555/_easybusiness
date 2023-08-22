<?php

$title = "Users";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyState/Helpers/init.php');
$users = new Users();
$users->Add();
require_once ("../layout/footer.php");
?>