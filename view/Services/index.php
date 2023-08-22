<?php

$title = "ContactUs";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyState/Helpers/init.php');
$contact = new Services();
$contact->Index();
require_once ("../layout/footer.php");
?>