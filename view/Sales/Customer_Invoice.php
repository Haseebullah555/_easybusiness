<?php 
$title = "Houses";
require_once ('c:/xampp/htdocs/_EasyBusiness/Helpers/init.php');
$users = new Sales();
$cusid= Check_Get_Param($_GET['id']);
$users->Customer_Invoice(Check_Get_Param($cusid));
//require_once ("../layout/footer.php");

?>