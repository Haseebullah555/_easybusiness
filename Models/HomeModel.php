<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
include ("c:/xampp/htdocs/_EasyBusiness/config/database.php");

class HomeModel extends database{
    
    public function getuserlist(){
        $stm=  $this->connec->prepare("select *from login");
        $stm->execute();
        return $rows=$stm->fetchAll();
    }
    public function getSaleInfo(){
        $stm01= $this->connec->prepare("select sum(Paid_amount) as Total_Payment from tbl_sales where Date(Entry_Date)=curdate()");
        $stm01->execute();
        return $stm01->fetchAll();
    }
    public function getPurchaseInfo(){
        $stm02= $this->connec->prepare("select sum(Total_Cost) as Purchases from tbl_purchase_rep,tbl_currency where tbl_purchase_rep.Currency= tbl_currency.ID and tbl_purchase_rep.Currency=2 and Date(Entry_Date)=curdate()");
        $stm02->execute();
        return $stm02->fetchAll();
        
    }
      public function getAFGPurchaseInfo(){
        $stm02= $this->connec->prepare("select sum(Total_Cost) as Purchases from tbl_purchase_rep,tbl_currency where tbl_purchase_rep.Currency= tbl_currency.ID and tbl_purchase_rep.Currency=1 and Date(Entry_Date)=curdate()");
        $stm02->execute();
        return $stm02->fetchAll();
        
    }
   public function ItemRegistration(){
       
       $itmreg= $this->connec->prepare("insert into tbl_goods_reg(barcode,ProductName,GenricName,CompanyName,p_size,
       Purchase_Price,Sale_Price,MinStock,MaxStock,expire_date,Entry_Date) 
       values(:barcode,:proname,:gname,:company,:psize,:pprice,:sprice,:mnstck,:mxstck,:expdate,now())");
       $itmreg->bindParam(':barcode', $this->Barcode);
       $itmreg->bindParam(':proname', $this->ProductName);
       $itmreg->bindParam(':gname',$this->GenricName);
       $itmreg->bindParam(':company', $this->CompanyName);
       $itmreg->bindParam(':psize', $this->P_Size);
       $itmreg->bindParam(':pprice', $this->purchaseprice);
       $itmreg->bindParam(':sprice', $this->saleprice);
       $itmreg->bindParam(':mnstck', $this->MinStock);
       $itmreg->bindParam(':mxstck', $this->MaxStock);
       $itmreg->bindParam(':expdate',$this->ExpireDate);
       if($itmreg->execute()){
        header("location:/Home/Item_Registration.php");
   }
   }
   public function getrecord(){
       $stt1= $this->connec->prepare("select *from tbl_goods_reg");
       $stt1->execute();
       return $stt1->fetchAll();
   }
    
   
 public function SearchItemForPurchase(){
     $srh= $this->connec->prepare("select * from tbl_goods_reg where barcode=:barcode");
     $srh->bindParam(':barcode', $this->searchProduct);
     $srh->execute();
     
     return $srh->fetchAll();
     
     
 }   
 public function SearchForPRCH(){
     $qry1= $this->connec->prepare("select tbl_goods_reg.barcode,tbl_goods_reg.ProductName,tbl_goods_reg.Purchase_Price,tbl_goods_reg.Sale_Price,tbl_currency.cur_name,tbl_purchase.Quantity,tbl_purchase.Total,tbl_purchase.Total_Cost,tbl_purchase.Total_Sale_Cost from tbl_goods_reg,tbl_purchase,tbl_currency where tbl_goods_reg.G_ID = tbl_purchase.G_ID and tbl_purchase.Currency = tbl_currency.ID ");
     $qry1->execute();
     return $qry1->fetchAll();
 }
  public function gtCurrency(){
      $gtcur= $this->connec->prepare("select *from tbl_currency");
      $gtcur->execute();
      return $gtcur->fetchAll();
  }
  public function PurchaseItemBYAfghani(){
       $stgd= $this->connec->prepare("select G_ID from tbl_goods_reg where barcode=:brcd");
    $stgd->bindParam(':brcd', $this->Barcode);
    $stgd->execute();
    $gids= $stgd->fetch();
    $g_id=$gids['G_ID'];
   $stmt1= $this->connec->prepare("insert into tbl_purchase (Quantity,Total,Total_Cost,Total_Sale_Cost,Currency,Entry_Date,G_ID)"
            . " values(:qty,:ttl,:ttlcost,:ttlscost,:crn,now(),:idofg) on duplicate key update Quantity=Quantity+(:qty),G_ID=:idofg");
    $stmt1->bindParam(':qty', $this->quantity);
    $stmt1->bindParam(':ttl', $this->totalafg);
    $stmt1->bindParam(':ttlcost', $this->ttafgcost);
    $stmt1->bindParam(':ttlscost', $this->ttsafgcost);
    $stmt1->bindParam(':crn', $this->currency);
    $stmt1->bindParam(':idofg',$g_id);
    if($stmt1->execute()){
         $stmt01= $this->connec->prepare("insert into tbl_purchase_rep(Quantity,Total,Total_Cost,Total_Sale_Cost,Currency,Entry_Date,G_ID)
          values(:qty,:ttl,:ttlcost,:ttlscost,:crn,now(),:idofg)");
         $stmt01->bindParam(':qty', $this->quantity);
        $stmt01->bindParam(':ttl', $this->totalafg);
        $stmt01->bindParam(':ttlcost', $this->ttafgcost);
        $stmt01->bindParam(':ttlscost', $this->ttsafgcost);
        $stmt01->bindParam(':crn', $this->currency);
        $stmt01->bindParam(':idofg',$g_id);
        $stmt01->execute();
        $_SESSION['message']="Quantity Inserted";
        header("location:/Home/PurchaseInvoice.php");
  
    }
  }
 public function PurchaseItemByDollor(){
    $stgd= $this->connec->prepare("select G_ID from tbl_goods_reg where barcode=:brcd");
    $stgd->bindParam(':brcd', $this->Barcode);
    $stgd->execute();
    $gids= $stgd->fetch();
    $g_id=$gids['G_ID'];
   
    $stmt1= $this->connec->prepare("insert into tbl_purchase (Quantity,Total,Total_Cost,Total_Sale_Cost,Currency,Entry_Date,G_ID)"
            . " values(:qty,:ttl,:ttlcost,:ttlscost,:crn,now(),:idofg) on duplicate key update Quantity=Quantity+(:qty),G_ID=:idofg");
    $stmt1->bindParam(':qty', $this->quantity);
    $stmt1->bindParam(':ttl', $this->total);
    $stmt1->bindParam(':ttlcost', $this->ttcost);
    $stmt1->bindParam(':ttlscost', $this->ttscost);
    $stmt1->bindParam(':crn', $this->currency);
    $stmt1->bindParam(':idofg',$g_id);
    
    if($stmt1->execute()){
         $stmt01= $this->connec->prepare("insert into tbl_purchase_rep(Quantity,Total,Total_Cost,Total_Sale_Cost,Currency,Entry_Date,G_ID) 
         values(:qty,:ttl,:ttlcost,:ttlscost,:crn,now(),:idofg)");
         $stmt01->bindParam(':qty', $this->quantity);
        $stmt01->bindParam(':ttl', $this->total);
        $stmt01->bindParam(':ttlcost', $this->ttcost);
        $stmt01->bindParam(':ttlscost', $this->ttscost);
        $stmt01->bindParam(':crn', $this->currency);
        $stmt01->bindParam(':idofg',$g_id);
        $stmt01->execute();
        $_SESSION['message']="Quantity Inserted";
        header("location:/Home/PurchaseInvoice.php");
    }
       
    
     
 }
   //testing checkbox
 public function Addcheck($value){
     $chvalue= Check_Param($value);
     $stmt00= $this->connec->prepare("insert into testing(checkboxvalue,name) values(:chk,:name)");
     $stmt00->bindParam(':chk', $chvalue);
     $stmt00->bindParam(':name', $this->name);
     if($stmt00->execute()){
         header("location:/Home/Testing.php");
     }
     
 }
 public function AddnameWithoutcheckbox(){
     $stmt000= $this->connec->prepare("insert into testing(name) values(:name)");
     $stmt000->bindParam(':name', $this->name);
     if($stmt000->execute()){
         header("location:/Home/Testing.php");
     }
 }
public function getdata(){
    $stmt01= $this->connec->prepare("select *from testing order by id desc");
    $stmt01->execute();
    return $stmt01->fetchAll();
}
public function getlastid(){
    $stm= $this->connec->prepare(" select id from tst order by id desc limit 1");
    $stm->execute();
   return $stm->fetchAll();
   
}
public function SaveInv(){
    $stmt05= $this->connec->prepare('insert into tst(id,ename,salary) values(:id,:name,:sal)');
    $stmt05->bindParam(':id', $this->id);
    $stmt05->bindParam(':name', $this->name);
    $stmt05->bindParam(':sal', $this->sal);
    $stmt05->execute();
}

// public function Add_Customer(){
//     $stmt6= $this->connec->prepare("insert into tbl_customer_reg(Cus_name,lname,fname,Shop_name,Market_name,owner_name,shop_no,Phone,Address,IMG,createdDate)"
//             . " values(:name,:lname,:fname,:shop,:market,:owner,:shopno,:phone,:add,:img,now())");
//     $stmt6->bindParam(':name', $this->uname);
//     $stmt6->bindParam(':lname', $this->lname);
//     $stmt6->bindParam(':fname', $this->fname);
//     $stmt6->bindParam(':shop', $this->shopname);
//     $stmt6->bindParam(':market', $this->marketname);
//     $stmt6->bindParam(':owner', $this->owner);
//     $stmt6->bindParam(':shopno', $this->shopno);
//     $stmt6->bindParam(':phone', $this->phone);
//     $stmt6->bindParam(':add', $this->address);
//     $stmt6->bindParam(':img', $this->image);
//     if($stmt6->execute()){
//         header("location:/Home/Add_Customer.php");
//     }
// }
public function Add_Customer(){
    $stmt6= $this->connec->prepare("insert into tbl_customer_reg(Cus_name,lname,fname,Phone,createdDate)"
            . " values(:name,:lname,:fname,:phone,now())");
    $stmt6->bindParam(':name', $this->uname);
    $stmt6->bindParam(':lname', $this->lname);
    $stmt6->bindParam(':fname', $this->fname);
    $stmt6->bindParam(':phone', $this->phone);
    
    if($stmt6->execute()){
        header("location:/Home/Add_Customer.php");
    }
}


public function Old_Bill_Data(){
    $stmt7=$this->connec->prepare("insert into tbl_old_bill( cus_name, bill_no,bill_date,company,amount_afg,amount_pk,total_amount,bill_type,created_date)
    values(:cusname,:bllno,:bldate,:cpy,:amtafg,:amtpk,:ttlamt,:blty,now()) ");
    $stmt7->bindParam(':cusname',$this->custName);
    $stmt7->bindParam(':bllno',$this->Billno);
    $stmt7->bindParam(':bldate',$this->bdate);
    $stmt7->bindParam(':cpy',$this->companyname);
    $stmt7->bindParam(':amtafg',$this->Afgamount);
    $stmt7->bindParam(':amtpk',$this->Pkamount);
    $stmt7->bindParam(':ttlamt',$this->totalamount);
    $stmt7->bindParam(':blty',$this->billtype);
    if($stmt7->execute()){
        header("location:/Home/OldBill.php");
    }

}

public function Get_Old_Bill_Data(){
    $stmt8=$this->connec->prepare("select *from tbl_old_bill");
    $stmt8->execute();
    return $stmt8->fetchAll();
}

 //end of class  
}
?>