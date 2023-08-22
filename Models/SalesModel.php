<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
include ("c:/xampp/htdocs/_EasyBusiness/config/database.php");


class SalesModel extends database{
    
    public function PropertyInfo(){
        $stp= $this->connec->prepare("select *from setup limit 1");
        $stp->execute();
        return $stp->fetchAll();
    }
    public function SearchAndDisplay(){
        $stmt1= $this->connec->prepare("select * from tbl_purchase,tbl_goods_reg where tbl_purchase.G_ID= tbl_goods_reg.G_ID and barcode=:barcode");
        $stmt1->bindParam(':barcode', $this->brcd);
        $stmt1->execute();
        return $stmt1->fetchAll();
                
    }
    public function DisplayAllStock(){
        $stmt002=$this->connec->prepare("select * from tbl_goods_reg");
        $stmt002->execute();
        return $stmt002->fetchAll();
    }
    public function SearchAndDisplayreturn(){
        $stmt001= $this->connec->prepare("select tbl_sales.*,tbl_goods_reg.* from tbl_sales join tbl_goods_reg on tbl_sales.G_ID = tbl_goods_reg.G_ID where tbl_goods_reg.barcode= :barcode order by tbl_sales.INV_No desc limit 1 ");
        $stmt001->bindParam(':barcode', $this->brcd);
        $stmt001->execute();
        return $stmt001->fetchAll();
                
    }
    public function OnlyForBarcode($idd1){
        $idd2= Check_Param($idd1);
        $stmt01= $this->connec->prepare("select G_ID from tbl_sales where barcode=:brd");
        $stmt01->bindParam(':brd',$idd2);
        $stmt01->execute();
        return $stmt01->fetch();
    }
//    public function SearchQty($id){
//        $ids= Check_Param($id);
//        $stmt2= $this->connec->prepare("select * from tbl_purchase where G_ID=:gid");
//        $stmt2->bindParam(':gid',$ids);
//        $stmt2->execute();
//       return $stmt2->fetch();
//        
//       
//    }
//    public function INV_NO(){
//        $stmt001= $this->connec->prepare("select *from tbl_inv_no");
//        $stmt001->execute();
//        $i_n=$stmt001->fetchAll();
//        $inv=$i_n['inv_no'];
//        $invno="INV-";
//        $invID="01";
//        while (strlen($invID)<=5){
//            $invID="0"+$invID;
//        }
//        $ninv=$invno+$invID;
//      
//        
//    }
    public function Sales_Item(){
        $stgd= $this->connec->prepare("select G_ID from tbl_goods_reg where barcode=:brcd");
        $stgd->bindParam(':brcd', $this->barcode);
        $stgd->execute();
       $gids= $stgd->fetch();
       $g_id=$gids['G_ID'];
       $sp=$_POST['sprice'];
     
      $stmt02= $this->connec->prepare("select tbl_purchase.Quantity,tbl_currency.cur_name from tbl_purchase join tbl_currency on tbl_purchase.Currency= tbl_currency.ID where tbl_purchase.G_ID=:pGid");
      $stmt02->bindParam(':pGid',$g_id);
      $stmt02->execute();
      $dta=$stmt02->fetch();
      $qty1=$dta['Quantity'];
      $cur=$dta['Currency'];
      if($cur == "افغانی"){
          
      }
      else if($cur == "دالر"){
      }
       $qy= $this->qty_pro;
      $ttlp=$sp*$qy;
      if($qty1>=0){
        $stmt3= $this->connec->prepare("insert into tbl_sales_temp(Quantity,Total_amount,G_ID,Entry_Date) values(:qty,:ttl,:g_id,now()) on duplicate key update Quantity=Quantity+(:qty),G_ID=:g_id");
        $stmt3->bindParam(':qty', $qy);
        $stmt3->bindParam(':ttl',$ttlp);
        $stmt3->bindParam(':g_id',$g_id);
        if($stmt3->execute()){
            $nqty=$qty1-$qy;
            $stmt03= $this->connec->prepare("update tbl_purchase set Quantity=:nqty where G_ID= :ngid");
            $stmt03->bindParam(':nqty',$nqty);
            $stmt03->bindParam(':ngid',$g_id);
            
            $stmt03->execute();
            $stmt04= $this->connec->prepare("update tbl_sales_temp set INV_No = :invn");
            $stmt04->bindParam(':invn', $this->invid);
            print_r($this->invid);
            $stmt04->execute();
            header("location:/Sales/");
        }  
      }
      else if($qty1==0){
          echo "جنس را خریداری کنید";
      }
        
    }
    public function get_Sales_Info(){
        $stmt4= $this->connec->prepare("select tbl_goods_reg.ProductName,tbl_goods_reg.Sale_Price,tbl_sales_temp.Quantity as onlyQty,tbl_sales_temp.Total_amount,tbl_sales_temp.Entry_Date as onlyDate,tbl_currency.cur_name,tbl_purchase.* from tbl_goods_reg join tbl_sales_temp on tbl_sales_temp.G_ID = tbl_goods_reg.G_ID join tbl_purchase on tbl_purchase.G_ID = tbl_goods_reg.G_ID join tbl_currency on tbl_currency.ID = tbl_purchase.Currency ");
        $stmt4->execute();
        return $stmt4->fetchAll();
    }
     public function get_Sales_return_Info(){
        $stmt004= $this->connec->prepare("select tbl_goods_reg.ProductName,tbl_goods_reg.Sale_Price,tbl_sales_return_temp.Quantity as onlyQty,tbl_sales_return_temp.Total_amount,tbl_sales_return_temp.Entry_Date as onlyDate,tbl_currency.cur_name,tbl_purchase.* from tbl_goods_reg join tbl_sales_return_temp on tbl_sales_return_temp.G_ID = tbl_goods_reg.G_ID join tbl_purchase on tbl_purchase.G_ID = tbl_goods_reg.G_ID join tbl_currency on tbl_currency.ID = tbl_purchase.Currency  ");
        $stmt004->execute();
        return $stmt004->fetchAll();
    }
    public function Gross_Total(){
        $stmt5= $this->connec->prepare("select sum(Total_amount) as total from tbl_sales_temp");
        $stmt5->execute();
       return $stmt5->fetchAll();
       
        
    }
     public function Gross_return_Total(){
        $stmt05= $this->connec->prepare("select sum(Total_amount) as total from tbl_sales_return_temp");
        $stmt05->execute();
       return $stmt05->fetchAll();
       
        
    }
    public function getlastid(){
        $stmt6= $this->connec->prepare('select INV_No,Entry_Date from tbl_sales order by Entry_Date desc limit 1 ');
        $stmt6->execute();
        return $stmt6->fetchAll();
    }
    public function getlastidreturn(){
        $stmt06= $this->connec->prepare('select INV_No,Entry_Date from tbl_sales_item_return order by Entry_Date desc limit 1');
        $stmt06->execute();
        return $stmt06->fetchAll();
    }
    public function SaveDataReceive(){
      
        $stmt7= $this->connec->prepare("update tbl_sales_temp set Paid_amount=:paid");
        $stmt7->bindParam(':paid', $this->receive);
        if($stmt7->execute()){
           $stmt8= $this->connec->prepare("insert into tbl_sales (select *from tbl_sales_temp)");
           if($stmt8->execute()){
               $stmt9= $this->connec->prepare("delete from tbl_sales_temp");
               $stmt9->execute();
               header("location:/Sales/Invoice.php");
           }
         }
    }
    public function ReturnSaveDataReceive(){
      
        $stmt07= $this->connec->prepare("update tbl_sales_return_temp set Paid_amount=:paid");
        $stmt07->bindParam(':paid', $this->receive);
        if($stmt07->execute()){
           $stmt08= $this->connec->prepare("insert into tbl_sales_item_return (select *from tbl_sales_return_temp)");
           if($stmt08->execute()){
               $stmt0009= $this->connec->prepare("delete from tbl_sales_return_temp");
               $stmt0009->execute();
              header("location:/Sales/Return_Invoice.php");
           }
         }
    }
    public function SaveDataCaseDue(){
        $cs1= $this->customer;
        $stmt20= $this->connec->prepare("update tbl_sales_temp set Debt_amount=:debt,cus_id=:cusid");
        $stmt20->bindParam(':debt', $this->debtamount);
        $stmt20->bindParam(':cusid', $this->customer);
        if($stmt20->execute()){
            $stmt21= $this->connec->prepare("insert into tbl_sales(select *from tbl_sales_temp)");
            $stmt21->execute();
            $stmt124= $this->connec->prepare("delete from tbl_sales_temp");
            $stmt124->execute();
            header("location:/Sales/Customer_Invoice.php?id=$cs1");
        }
    }
    public function Print_Invoice(){
           
        $stmt009= $this->connec->prepare("select tbl_sales.*,tbl_goods_reg.*,tbl_purchase.Currency, tbl_currency.cur_name from tbl_sales,tbl_goods_reg,tbl_purchase,tbl_currency WHERE tbl_purchase.Currency= tbl_currency.ID and tbl_sales.G_ID= tbl_purchase.G_ID and tbl_sales.G_ID= tbl_goods_reg.G_ID and INV_No=(select INV_No from tbl_sales order by Entry_Date desc limit 1)");
        $stmt009->execute();
        return $stmt009->fetchAll();
       
    }
    public function Customer_Print_Invoice($cusid){
        $getid= Check_Param($cusid);
        
        $stmtcus= $this->connec->prepare("select tbl_sales.*,tbl_goods_reg.*,tbl_purchase.Currency, tbl_currency.cur_name,tbl_customer_reg.* from tbl_sales join tbl_goods_reg on tbl_sales.G_ID= tbl_goods_reg.G_ID join tbl_purchase on tbl_sales.G_ID= tbl_purchase.G_ID join tbl_currency on tbl_purchase.Currency= tbl_currency.ID JOIN tbl_customer_reg on tbl_sales.cus_id = tbl_customer_reg.Cus_ID WHERE tbl_sales.cus_id=:csid order by tbl_sales.INV_No= (select INV_No from tbl_sales order by Entry_Date desc limit 1) limit 1");
        $stmtcus->bindParam(':csid',$getid);
        $stmtcus->execute();
        return $stmtcus->fetchAll();
        
    }
     public function Print_Return_Invoice(){
        $stmt09= $this->connec->prepare("select tbl_sales_item_return.*,tbl_goods_reg.*,tbl_purchase.Currency, tbl_currency.cur_name from tbl_sales_item_return,tbl_goods_reg,tbl_purchase,tbl_currency WHERE tbl_purchase.Currency= tbl_currency.ID and tbl_sales_item_return.G_ID= tbl_purchase.G_ID and tbl_sales_item_return.G_ID= tbl_goods_reg.G_ID and INV_No=(select INV_No from tbl_sales_item_return order by Entry_Date desc limit 1)");
        $stmt09->execute();
        return $stmt09->fetchAll();
        
    }
    public function Find_max_INV(){
        $stmt10= $this->connec->prepare("select INV_No,Entry_Date from tbl_sales order by Entry_Date desc limit 1 ");
        $stmt10->execute();
        return $stmt10->fetchAll();
    }
    public function Find_return_max_INV(){
        $stmt010= $this->connec->prepare("select(INV_No)as INV_No,Entry_Date from tbl_sales_item_return order by Entry_Date desc limit 1");
        $stmt010->execute();
        return $stmt010->fetchAll();
    }
    public function Get_Customer(){
        $stmt11= $this->connec->prepare("select *from tbl_customer_reg");
        $stmt11->execute();
        return $stmt11->fetchAll();
    }
    public function Get_Last_INV(){
        $stmt17= $this->connec->prepare('select * from tbl_sales,tbl_goods_reg where tbl_sales.G_ID = tbl_goods_reg.G_ID and INV_No=(select max(INV_No) from tbl_sales )');
        $stmt17->execute();
        return $stmt17->fetchAll();
    }
    public function SaveDataReceiveDiscount(){
         $stmt13= $this->connec->prepare("update tbl_sales_temp set Paid_amount=:paid,Discount=:disc");
        $stmt13->bindParam(':paid', $this->receive);
        $stmt13->bindParam(':disc', $this->discount);
        if($stmt13->execute()){
           $stmt14= $this->connec->prepare("insert into tbl_sales (select *from tbl_sales_temp)");
           if($stmt14->execute()){
               $stmt15= $this->connec->prepare("delete from tbl_sales_temp");
               $stmt15->execute();
               header("location:/Sales/Invoice.php");
           }
         }
    }
     public function ReturnSaveDataReceiveDiscount(){
         $stmt13= $this->connec->prepare("update tbl_sales_return_temp set Paid_amount=:paid,Discount=:disc");
        $stmt13->bindParam(':paid', $this->receive);
        $stmt13->bindParam(':disc', $this->discount);
        if($stmt13->execute()){
           $stmt14= $this->connec->prepare("insert into tbl_sales_item_return (select *from tbl_sales_return_temp)");
           if($stmt14->execute()){
               $stmt15= $this->connec->prepare("delete from tbl_sales_return_temp");
               $stmt15->execute();
               header("location:/Sales/Return_Invoice.php");
           }
         }
    }
      public function SaveDataCaseDueDiscount(){
          $cs= $this->customer;
        $stmt020= $this->connec->prepare("update tbl_sales_temp set Debt_amount=:debt,Discount=:disc,cus_id=:cusid");
        $stmt020->bindParam(':debt', $this->debtamount);
        $stmt020->bindParam(':cusid', $this->customer);
        $stmt020->bindParam(':disc',$this->discount);
        if($stmt020->execute()){
            $stmt021= $this->connec->prepare("insert into tbl_sales(select *from tbl_sales_temp)");
            $stmt021->execute();
            $stmt024= $this->connec->prepare("delete from tbl_sales_temp");
            $stmt024->execute();
            header("location:/Sales/Customer_Invoice.php?id=$cs");
        }
    }
    
    public function Delete_Sales_Item($deleteID){
        $getdelid= Check_Param($deleteID);
        $stmt20= $this->connec->prepare("select tbl_sales_temp.Quantity,tbl_sales_temp.G_ID from tbl_sales_temp where tbl_sales_temp.Entry_Date=:deldate ");
        $stmt20->bindParam(':deldate',$getdelid);
        $stmt20->execute();
        $gtdta=$stmt20->fetch();
        $delQty=$gtdta['Quantity'];
        $delGID=$gtdta['G_ID'];
        $stmt21= $this->connec->prepare("select Quantity from tbl_purchase where tbl_purchase.G_ID=:gid");
        $stmt21->bindParam(':gid',$delGID);
        $stmt21->execute();
        $gtqtdta=$stmt21->fetch();
        $purQty=$gtqtdta['Quantity'];
        $newpurQty=$purQty+$delQty;
        $stmt22= $this->connec->prepare("update tbl_purchase set Quantity=:nqty where G_ID=:ngid");
        $stmt22->bindParam(':nqty',$newpurQty);
        $stmt22->bindParam(':ngid',$delGID);
        $stmt22->execute();
        
        $stmt16= $this->connec->prepare("delete from tbl_sales_temp where Entry_Date=:endate");
        $stmt16->bindParam(':endate',$getdelid);
        if($stmt16->execute()){
        header("location:/Sales/");
        }
        
    }
    public function Return_Sales_Item(){
            $stmt23= $this->connec->prepare("select G_ID from tbl_goods_reg where barcode=:bcd");
            $stmt23->bindParam(':bcd', $this->barcode);
            $stmt23->execute();
            $bd=$stmt23->fetch();
            $g_id=$bd['G_ID'];
             $stmt28= $this->connec->prepare("select tbl_purchase.Quantity,tbl_currency.cur_name from tbl_purchase join tbl_currency on tbl_purchase.Currency= tbl_currency.ID where tbl_purchase.G_ID=:pGid");
            $stmt28->bindParam(':pGid',$g_id);
            $stmt28->execute();
            $dta=$stmt28->fetch();
            $qty1=$dta['Quantity'];
            $sp1=$_POST['sprice'];
            $qt1= $this->qty_pro;
            $ttl=$qt1*$sp1;
            print_r($ttl);
             $stmt29= $this->connec->prepare("insert into tbl_sales_return_temp(Quantity,Total_amount,G_ID,Entry_Date) values(:qty,:ttl,:g_id,now())");
                $stmt29->bindParam(':qty', $qt1);
                $stmt29->bindParam(':ttl',$ttl);
                $stmt29->bindParam(':g_id',$g_id);
                if($stmt29->execute()){
                    $nqty=$qty1+$qt1;
                    $stmt30= $this->connec->prepare("update tbl_purchase set Quantity=:nqty where G_ID= :ngid");
                    $stmt30->bindParam(':nqty',$nqty);
                    $stmt30->bindParam(':ngid',$g_id);
                    $stmt30->execute();
                    $stmt31= $this->connec->prepare("update tbl_sales_return_temp set INV_No = :invn");
                    $stmt31->bindParam(':invn', $this->invid);
                    $stmt31->execute();
                    header("location:/Sales/ReturnSalesItem.php");
        }  
      
    }
    
    public function Return_Sale_Bill_Print(){
//         $stmt23= $this->connec->prepare("select G_ID from tbl_goods_reg where barcode=:bcd");
//     $stmt23->bindParam(':bcd', $this->barcode);
//     $stmt23->execute();
//     $bd=$stmt23->fetch();
//     $brcd=$bd['G_ID'];
//     $stmt24= $this->connec->prepare("select Quantity from tbl_purchase where G_ID=:gid");
//     $stmt24->bindParam(':gid',$brcd);
//     $stmt24->execute();
//     $qt=$stmt24->fetch();
//     $nqt=$qt['Quantity'];
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>