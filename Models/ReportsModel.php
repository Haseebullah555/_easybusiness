<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
include ("c:/xampp/htdocs/_EasyBusiness/config/database.php");


class ReportsModel extends database{
    
        
    public function getPhotoGallery(){
        $gstmt=  $this->connec->prepare("select id,gallery from gallery_tbl");
        $gstmt->execute();
        return $gstmt->fetchAll();
    }
    
public function Get_Low_Stock(){
 $stmt10= $this->connec->prepare("select tbl_purchase.*,tbl_currency.cur_name,tbl_goods_reg.* from tbl_purchase,tbl_currency,tbl_goods_reg where ( tbl_currency.ID= tbl_purchase.Currency and tbl_purchase.G_ID = tbl_goods_reg.G_ID and tbl_purchase.Quantity <=2) order by P_ID asc   ");  
$stmt10->execute();
return $stmt10->fetchAll();
}
public function Get_Current_Stock(){
    $stmt11= $this->connec->prepare("select tbl_purchase.* from tbl_purchase,tbl_currency,tbl_goods_reg where (tbl_purchase.Currency= tbl_currency.ID and tbl_purchase.G_ID = tbl_goods_reg.G_ID) order by tbl_purchase.P_ID asc");
    $stmt11->execute();
    return $stmt11->fetchAll();
}

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>