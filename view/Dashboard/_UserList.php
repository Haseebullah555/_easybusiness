
<?php

$title = "User List";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$dashboard->UserList();
require_once ("../layout/footer.php");
?>