<?php ob_start();
 ob_clean();
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
include ("c:/xampp/htdocs/_EasyBusiness/config/database.php");
class DashboardModel extends database{
    
    protected $duser;

    
    public function CreatePerson(){
        //we enter data from one form into two tables;
     //   $this->connec->beginTransaction();
        $stmt2=  $this->connec->prepare("insert into owner (name,fname,gfname,phone,dob,image) VALUES (:name,:fname,:gfname,:phone,:dateofbirth,:image)");
        $stmt2->bindParam(':name',  $this->name);
        $stmt2->bindParam(':fname',  $this->fname);
        $stmt2->bindParam(':gfname',  $this->gfname);
        $stmt2->bindParam(':phone',  $this->phone);
        $stmt2->bindParam(':dateofbirth',  $this->date);
        $stmt2->bindParam(':image',  $this->photo);
        if($stmt2->execute()){
        $stmt1=  $this->connec->prepare("select own_id from owner order by own_id desc limit 1");
        $stmt1->execute();
        $findid=$stmt1->fetch();
        $newid=$findid['own_id'];
        $stmtt=  $this->connec->prepare("insert into nic (TazID,juld,page,registration,own_id) values (:tazid,:juld,:page,:registration,:own_id)");
        $stmtt->bindParam(':tazid',  $this->tazkira);
        $stmtt->bindParam(':juld',  $this->juld);
        $stmtt->bindParam(':page',  $this->page);
        $stmtt->bindParam(':registration',  $this->registration);       
        $stmtt->bindParam(':own_id',$newid);
        $stmtt->execute();
        $addstmt=  $this->connec->prepare("insert into address(mainresidence,district,currentlocation,currentdistrict,own_id) values(:main,:district,:cur_location,:cur_district,:own_id)");
        $addstmt->bindParam(':main',  $this->mainresidence);
        $addstmt->bindParam(':district',  $this->maindistrict);
        $addstmt->bindParam(':cur_location',  $this->currentlocation);
        $addstmt->bindParam(':cur_district',  $this->currentdistrict);
        $addstmt->bindParam(':own_id',$newid);
        $addstmt->execute();
             header('location:/Dashboard/AddPerson.php');
        }
        else{
            echo "record not inserted  tables";
        }
      
    }
    
    public function showPersonTable(){
        $perStmt=  $this->connec->prepare(" select  owner.own_id,owner.name,owner.fname,owner.gfname,owner.phone,owner.dob,owner.image,nic.TazID,nic.juld,nic.page,nic.registration,address.mainresidence,address.district,address.currentlocation,address.currentdistrict from owner,nic,address where owner.own_id = nic.own_id and owner.own_id=address.own_id order by own_id desc");
        $perStmt->execute();
        return  $perStmt->fetchAll();
    }
    //to show person and taz  table content in form for update
    public function UpshowPerson($Personid){
          $tpid = Check_Get_Param($Personid);
          
         $upPersStmt=  $this->connec->prepare("select owner.name,fname,gfname,phone,dob,image,nic.t_id,juld,page,registration,address.mainresidence,district,currentlocation,currentdistrict from owner,nic,address where nic.own_id=owner.own_id and owner.own_id=:pID limit 1");
         $upPersStmt->bindParam(':pID',$tpid);
          $upPersStmt->execute();
          return $upPersStmt->fetchAll();
        
    }
    //update person table
    public function UpdateOldPerson($Personid){
        $tmpid=  Check_Get_Param($Personid);
        $oldstmt=  $this->connec->prepare("update owner set name=:name,fname=:fname,gfname=:gfname,phone=:phone,dob=:date,image=:image where own_id=:pID ");
           $oldstmt->bindParam(':name',  $this->name);
        $oldstmt->bindParam(':fname',  $this->fname);
        $oldstmt->bindParam(':gfname',  $this->gfname);
        $oldstmt->bindParam(':phone',  $this->phone);
        $oldstmt->bindParam(':date',  $this->date);
        $oldstmt->bindParam(':image',  $this->photo);
        $oldstmt->bindParam(':pID',$tmpid);
        if($oldstmt->execute()){
            $oldtaz=  $this->connec->prepare("update nic set t_id=:tazid,juld=:juld,page=:page,registration=:registration where own_id = :PID");
            $oldtaz->bindParam(':tazid',  $this->tazkira);
            $oldtaz->bindParam(':juld',  $this->juld);
            $oldtaz->bindParam(':page',  $this->page);
            $oldtaz->bindParam(':registration',  $this->registration);
            $oldtaz->bindParam(':PID',$tmpid);
            if($oldtaz->execute()){
                header('location:/Dashboard/AddPerson.php');
            }
           $oldadd=  $this->connec->prepare("update address set mainresidence= :mainresidence ,district =:district ,currentlocation =:currentlocation ,currentdistrict =:currentdistrict where own_id = :ownID");
           $oldadd->bindParam(':mainresidence',  $this->mainresidence);
            $oldadd->bindParam(':district',  $this->maindistrict);
            $oldadd->bindParam(':currentlocation',  $this->currentlocation);
            $oldadd->bindParam(':currentdistrict',  $this->currentdistrict);
            $oldadd->bindParam(':ownID',$tmpid);
            if($oldadd->execute()){
                header('location:/Dashboard/AddPerson.php');
            }
            else{
               echo "<font color='red'>Not Updated</font>";
            }
            
        }
        
        
    }
     public function DeleteOneOwner($delOne){
            $tempid=  Check_Get_Param($delOne);
            $delOnwer=  $this->connec->prepare("delete from nic where own_id= :ownId");
            $delOnwer->bindParam(':ownId',$tempid);
            $delOnwer->execute();
            $delOnwer1=  $this->connec->prepare("delete from address where own_id = :owniD");
            $delOnwer1->bindParam(':owniD',$tempid);
            $delOnwer1->execute();
            $delOnwer2=  $this->connec->prepare("delete from owner where own_id =:ownerID");
            $delOnwer2->bindParam(':ownerID',$tempid);
            $delOnwer2->execute();
            header('location:/Dashboard/AddPerson.php');
            
            
            
            
        }

// public function getuserid(){
//        $stm=  $this->connec->prepare("select prsn_id from persontbl where prsn_id=:idid");
//        $stm->bindParam(':idid',  $this->idid);
//        $stm->execute();
//        $lastid= $this->connec->lastInsertedId();
//        return $stm->fetch();
//        }
  
    //end of updating village
//////////////////////////////////////////////////////////////////////////////////////
   public function AddProvince(){
        $stmpro=  $this->connec->prepare("INSERT INTO province (pro_name) VALUES (:province)");
        $stmpro->bindParam(":province",  $this->province);
        if($stmpro->execute());
        else
         echo"not inserted";   
        
    }

    
    public function getPro(){
        $stmget=  $this->connec->prepare("select *from province");
        $stmget->execute();
        return $stmget->fetchAll();
    }
    
    
    public function getUpdateProvince($id){
        $tempid = Check_Get_Param($id);
        
        $disStmts=  $this->connec->prepare("select *from province where pro_id = :Proid ");
        $disStmts->bindParam(':Proid',$tempid);
        $disStmts->execute();
        return $disStmts->fetchAll();
        
    }
    public function updateOldProvince($Did){
        $tempid=  Check_Get_Param($Did);
        $updisstmt=  $this->connec->prepare("update province set pro_name = :province where pro_id =:Proid");
        $updisstmt->bindParam(':province',  $this->provincename);
        $updisstmt->bindParam(':Proid',$tempid);
        if($updisstmt->execute()){
           header("location:/Dashboard/AddProvince.php");
           exit(); 
        }
    }
    public function deleteProvince($Did){
        $tmpid=  Check_Get_Param($Did);
        $delstmts=  $this->connec->prepare("delete from province where pro_id = :Proid ");
        $delstmts->bindParam(':Proid',$tmpid);
        if($delstmts->execute()){
           header("location:/Dashboard/AddProvince.php");
           exit;
        }
        
        else{
             echo "<font color='red'>record is not Deleted .</font>";
        }
        
    }
    // District Opertion Insert , Update , Delete
       public function AddDistrict(){
       
           $disStat=  $this->connec->prepare("insert into district(dis_name,pro_id) values(:disName,:proID)");
       $disStat->bindParam(':disName',  $this->district);
       $disStat->bindParam(':proID',  $this->province);
       if($disStat->execute()){
           header('location:/Dashboard/AddDistrict.php');
        }
        else{
            echo "<font color='red'>Not inserted </font>";
        }
            }
    
    // get province and district
            
      public function getProDis(){
                
           $prodis=  $this->connec->prepare("select province.pro_name,district.dis_id,dis_name from province inner join district on province.pro_id=district.pro_id ");
           $prodis->execute();
           return $prodis->fetchAll();
            }
    public function getdis($vid){
        $temid=  Check_Get_Param($vid);
        $showdis=  $this->connec->prepare("select * from district where dis_id = :disid limit 1");
        $showdis->bindParam(':disid',$temid);
        $showdis->execute();
        return $rows=$showdis->fetchAll();
    }
    public function getDist(){
        $getDist=  $this->connec->prepare("select *from district");
        $getDist->execute();
        return $getDist->fetchAll();
    }

    // Updating District
     public function getUpdateDistrict($id){
          $tempid = Check_Get_Param($id);
           $prodis=  $this->connec->prepare("select province.pro_name,district.dis_name from province,district where province.pro_id=district.pro_id and dis_id=:dis_id limit 1 ");
          $prodis->bindParam(':dis_id',$tempid);
           $prodis->execute();
           return $prodis->fetchAll();
         
     }
    public function UpdateDistrict($Pid){
        $tempid=  Check_Get_Param($Pid);
        $upDistrict=  $this->connec->prepare("update district set dis_name = :dis_name where dis_id= :dis_id");
        $upDistrict->bindParam(':dis_name',  $this->district);
        $upDistrict->bindParam(':dis_id',$tempid);
         if($upDistrict->execute()){
            header("location:/Dashboard/AddDistrict.php");
        }
        else{
             echo "<font color='red'>record is not Updated .</font>";
        } 
    }
    
    public function deleteDistrict($delID){
        $tmpid=  Check_Get_Param($delID);
        $delstmtss=  $this->connec->prepare("delete from district where dis_id= :disid");
        $delstmtss->bindParam(':disid',$tmpid);
        if($delstmtss->execute()){
            header('location:/Dashboard/AddDistrict.php');
        }
        else{
             echo "<font color='red'>record is not Deleted .</font>";
        }
    }
    
      public function AddVillage(){
       $stat=  $this->connec->prepare("insert into village (village_name,dis_id) VALUES (:village,:dis_id)");
        $stat->bindParam(':village',  $this->village);
        $stat->bindParam(':dis_id',  $this->districtName);
        if($stat->execute()){
           header('location:/Dashboard/AddVillage.php');
        }
        else{
            echo "<font color='red'>Not inserted </font>";
        }
    }
    
    public function getVillage(){
        $stmts=  $this->connec->prepare("select village.v_id,village_name,district.dis_name from village,district where village.dis_id=district.dis_id");
        $stmts->execute();
        return $stmts->fetchAll();
    }
    public function GetVillageToHouse(){
        $vstmt=  $this->connec->prepare("select * from village");
        $vstmt->execute();
        return $vstmt->fetchAll();
    }
   
    public function getUpdateVillage($Vid){
            $tempid = Check_Get_Param($Vid);
            //$stm2=  $this->connec->prepare("select q_id from qarya where q_id=':qid'"); 
            $stmts=  $this->connec->prepare("select village.village_name,district.dis_name from village,district where village.dis_id=district.dis_id and v_id = :qid limit 1");
             $stmts->bindParam(':qid',$tempid);
            $stmts->execute();
        return $stmts->fetchAll();
    }
    // update village
    public function UpdateOldVillage($Vid){
         $tempids = Check_Get_Param($Vid);
        $upstmts=  $this->connec->prepare("update village set village_name = :Vname where v_id=:vid");
        $upstmts->bindParam(':Vname',  $this->qname);
        $upstmts->bindParam(':vid',$tempids);
        if($upstmts->execute()){
            header("location:/Dashboard/AddVillage.php");
        }
        else{
            echo "<font color='red'>Not Updated</font>";
        }
        
    }
    
    // delete village
    public function deleteVillage($Vid){
        $tempid=  Check_Get_Param($Vid);
        $delStat=  $this->connec->prepare("delete from village where v_id=:vid");
        $delStat->bindParam(':vid',$tempid);
        if($delStat->execute()){
             header("location:/Dashboard/AddVillage.php");
        }
        else {
            echo "<font color='red'>record is not deleted .</font>";
        }
        
    }
    
    
    public function AddHouse($Hid){
         $tpHid = Check_Get_Param($Hid);
         
         $query="insert into housetbl(rooms,kitchen,bathroom,floor,north_measure,south_measure,east_measure,west_measure,"
                 . "nearby,widtharea,garage,gustroom,electircity,yard,water,propertylicense,rent_price,status,about,v_id,"
                 . "own_id,hou_type_id,deal_id)";
         $query.="values (:rooms,:kitchen,:bathroom,:floor,:northmeasure,:southmeasure,:eastmeasure,:westmeasure,:nearby,"
                 . ":widtharea,:garage,:guestroom,:power,:yard,:water,:license,:rent,:status,:moreabout,:vid,:ownid,:houtypeid,"
                 . ":dealid)";
         $hstmt=  $this->connec->prepare($query);
         $hstmt->bindParam(':rooms',$this->rooms1);
         $hstmt->bindParam(':kitchen',$this->kitchen1);
         $hstmt->bindParam(':bathroom',$this->bathroom1);
         $hstmt->bindParam(':floor',$this->floors1);
         $hstmt->bindParam(':northmeasure',  $this->northMeasure1);
         $hstmt->bindParam(':southmeasure',  $this->southMeasure1);
         $hstmt->bindParam(':eastmeasure',  $this->eastMeasure1);
         $hstmt->bindParam(':westmeasure',  $this->westMeasure1);
         $hstmt->bindParam(':nearby',  $this->nearby1);
         $hstmt->bindParam(':widtharea',  $this->widthArea1);
         $hstmt->bindParam(':garage',$this->garage1);
         $hstmt->bindParam(':guestroom',$this->guestroom1);
         $hstmt->bindParam(':power',$this->power1);
         $hstmt->bindParam(':yard',$this->yard1);
         $hstmt->bindParam(':water',$this->water1);
         $hstmt->bindParam(':license',$this->license1);
         $hstmt->bindParam(':rent',$this->rent1);
         $hstmt->bindParam(':status',$this->status1);
         $hstmt->bindParam(':moreabout',$this->about1);
         $hstmt->bindParam(':vid',  $this->village1);
         $hstmt->bindParam(':houtypeid',$this->TypeofHouse1);
         $hstmt->bindParam(':dealid',  $this->housedeal1);
         $hstmt->bindParam(':ownid',$tpHid);
         if($hstmt->execute()){
                header("location:/Dashboard/showHouses.php");
        }
        else{
             echo "<font color='red'>Record is Not inserted </font>"; 
        }
         
        
    }
    public function HouseShowTable(){                          
        $hstmts=  $this->connec->prepare("select housetbl.hou_id,rooms,kitchen,bathroom,floor,north_measure,south_measure,east_measure,west_measure,nearby,widtharea,garage,gustroom,electircity,yard,water,propertylicense,about,owner.name,village.village_name ,housetype.housetype from housetbl,owner,village,housetype where  housetbl.own_id=owner.own_id and housetbl.v_id=village.v_id and housetbl.hou_type_id= housetype.hou_type_id order by hou_id desc");
        $hstmts->execute();
        return $hstmts->fetchAll();
    }
    public function housetblshow($uHid){
        $tempd=  Check_Get_Param($uHid);
        $shHouse= $this->connec->prepare("select housetbl.hou_id,rooms,kitchen,bathroom,floor,north_measure,south_measure,east_measure,west_measure,nearby,widtharea,garage,gustroom,electircity,yard,water,propertylicense,rent_price,status,about,owner.name,village.village_name ,housetype.housetype,housedealtype.dealtype from housetbl,owner,village,housetype,housedealtype where  housetbl.own_id=owner.own_id and housetbl.v_id=village.v_id and housetbl.hou_type_id= housetype.hou_type_id and housetbl.deal_id=housedealtype.deal_id and hou_id=:houid limit 1");
        $shHouse->bindParam(':houid',$tempd);
        $shHouse->execute();
        return $shHouse->fetchAll();  
    }
    public function UpdateHouse($uHid){
        
        $HUID=  Check_Get_Param($uHid);
       $upHstat=  $this->connec->prepare(" update housetbl set rooms=:rooms, kitchen=:kitchen, bathroom=:bathroom, floor= :floor,north_measure = :north , south_measure= :south, east_measure= :east, west_measure= :west, nearby= :nearby , widtharea = :width, garage= :garage, gustroom=:gust ,electircity= :power,yard= :yard,water= :water,propertylicense= :license,rent_price=:rent ,status=:status,about=:about where hou_id =:houseid");
        
        $upHstat->bindParam(':rooms',  $this->uprooms);
        $upHstat->bindParam(':kitchen',  $this->upkitchen);
        $upHstat->bindParam(':bathroom',  $this->upbathroom);
        $upHstat->bindParam(':floor',  $this->upfloor);
        $upHstat->bindParam(':north',  $this->upnorthmeasure);
        $upHstat->bindParam(':south',  $this->upsouthmeasure);
        $upHstat->bindParam(':east',  $this->upeastmeasure);
        $upHstat->bindParam(':west',  $this->upwestmeasure);
        $upHstat->bindParam(':nearby',  $this->upnearby);
        $upHstat->bindParam(':width',  $this->upwidtharea);
        $upHstat->bindParam(':garage',  $this->upgarage);
        $upHstat->bindParam(':gust',  $this->upgustroom);
        $upHstat->bindParam(':power',  $this->uppower);
        $upHstat->bindParam(':yard',  $this->upyard);
        $upHstat->bindParam(':water',  $this->upwater);
        $upHstat->bindParam(':license',  $this->uplicense);
        $upHstat->bindParam(':rent',  $this->uprent);
        $upHstat->bindParam(':status',  $this->upstatus);
        $upHstat->bindParam(':about',  $this->upabout);
        $upHstat->bindParam(':houseid',$HUID);
        
        if($upHstat->execute()){
           header("location:/Dashboard/showHouses.php");
        }
        else{
             echo "<font color='red'>Record is Not Updated </font>"; 
        }
        
        }  
     public function DeleteHouse($dHid){
         $hou_id=  Check_Get_Param($dHid);
         $delhouse=  $this->connec->prepare("delete from housetbl where hou_id=:houseID");
         $delhouse->bindParam(':houseID',$hou_id);
         if($delhouse->execute()){
             header("location:/Dashboard/showHouses.php");
        }
        else{
             echo "<font color='red'>Record is Not Deleted </font>"; 
        }
     }
     public function AddPhoto($picID){
        $tempID=  Check_Get_Param($picID);
        $picStmt=  $this->connec->prepare("insert into gallery(gallery,hou_id) values(:photo,:hID)");
        $picStmt->bindParam(':photo',  $this->pic);
        $picStmt->bindParam(':hID',$tempID);
        if($picStmt->execute()){
             echo "<font color='black' size='4'>inserted photo</font>";
            }
           else{
              echo "<font color='red'>Not inserted </font>"; 
           }        
    }
  public function Housetype(){
        $Htype=  $this->connec->prepare("insert into housetype(housetype) values(:htype)");
        $Htype->bindParam(':htype',  $this->housetype);
        if($Htype->execute()){
            header('location:/Dashboard/HouseType.php');
        }
        else{
            echo "<font color='red'>Not inserted </font>";
        }
    }
  public function getHousetype(){
        $ht=  $this->connec->prepare("select *from housetype");
        $ht->execute();
        return $ht->fetchAll();
    }
  public function gettype($upID){
        $tempid=  Check_Get_Param($upID);
        $getty=  $this->connec->prepare("select housetype from housetype where hou_type_id=:typeid");
        $getty->bindParam(':typeid',$tempid);
        $getty->execute();
        return $getty->fetchAll();
    }
  public function UpdateType($upID){
         
         $tmpid=  Check_Get_Param($upID);
         $sttype=  $this->connec->prepare("update housetype set housetype=:type where hou_type_id=:typeid");
         $sttype->bindParam(':type',  $this->type);
         $sttype->bindParam(':typeid',$tmpid);
         if($sttype->execute()){
              header("location:/Dashboard/HouseType.php");
        }
        else{
            echo "<font color='red'>Not Updated</font>";
        }
     }
  public function DeleteType($del){
         $tmepid=  Check_Get_Param($del);
         $delst=  $this->connec->prepare("delete from housetype where hou_type_id=:idtype");
         $delst->bindParam(':idtype',$tmepid);
         if($delst->execute()){
             header("location:/Dashboard/HouseType.php");
        }
        else{
            echo "<font color='red'>record is not deleted .</font>";
        }
     }
  public function HouseDealType(){
          $dType=  $this->connec->prepare("insert into housedealtype(dealtype) values(:dealtype)");
          $dType->bindParam(':dealtype',  $this->dealtype);
          if($dType->execute()){
               echo "<font color='yellow'>record inserted</font> ";
        }
        else{
            echo "<font color='red'>Not inserted </font>";
        }
      } 
  public function getDealType(){
          $getdel=  $this->connec->prepare("select *From housedealtype");
          $getdel->execute();
          return $getdel->fetchAll();
      }
  public function getdeal($udID){
          $tempid=  Check_Get_Param($udID);
          $dtst=  $this->connec->prepare("select dealtype from housedealtype where deal_id=:dealid");
          $dtst->bindParam(':dealid',$tempid);
          $dtst->execute();
          return $dtst->fetchAll();
      }
  public function UpdateDealType($udID){
          $tempid=  Check_Get_Param($udID);
          $stathdt=  $this->connec->prepare("update housedealtype set dealtype=:dealtype where deal_id = :idDeal");
          $stathdt->bindParam(':dealtype',  $this->dealtypes);
          $stathdt->bindParam(':idDeal',$tempid);
          if($stathdt->execute()){
              header("location:/Dashboard/HouseDealType.php");
        }
        else{
            echo "<font color='red'>Not Updated</font>";
        }
      }
  public function DeleteDeal($udID){
          $tmID=  Check_Get_Param($udID);
          $deletedeal=  $this->connec->prepare("delete from housedealtype where deal_id = :dele_id");
          $deletedeal->bindParam(':dele_id',$tmID);
          if($deletedeal->execute()){
               header("location:/Dashboard/HouseDealType.php");
        }
        else{
            echo "<font color='red'>record is not deleted .</font>";
        }
      }
  public function AddCarInfo($own_car_id){
      $ownCar= Check_Get_Param($own_car_id);
      $carQuery="insert into cars(deal_id,Type,Asnad,Color,Model,Engine,InsideCar,NumberPlate,ShasiNumber,Price,CarStatus,MoreAbout,own_id)";
      $carQuery.= "values(:dealtype,:type,:asnad,:color,:model,:engine,:insidecar,:plate,:shasi,:price,:status,:about,:ownId)";
      $car= $this->connec->prepare($carQuery);
      $car->bindParam(':dealtype', $this->housedealtype);
      $car->bindParam(':type', $this->cartype);
      $car->bindParam(':asnad', $this->asnad);
      $car->bindParam(':color', $this->carcolor);
      $car->bindParam(':model', $this->model);
      $car->bindParam(':engine', $this->engine);
      $car->bindParam(':insidecar', $this->insidecar);
      $car->bindParam(':plate', $this->numberplate);
      $car->bindParam(':shasi', $this->shasi);
      $car->bindParam(':price', $this->carprice);
      $car->bindParam(':status', $this->status);
      $car->bindParam(':about', $this->about);
      $car->bindParam(':ownId', $ownCar);
      if($car->execute()){
          header("location:/Dashboard/CarList.php");
      }
      }
  public function CarList(){
          $carlst= $this->connec->prepare("select *from cars");
          $carlst->execute();
          return $carlst->fetchAll();
      }
  public function Get_Car_Info($UdtCar){
         $get_carid= Check_Get_Param($UdtCar);
        $querycar= "select cars.CarID,Type,Asnad,Color,Model,Engine,InsideCar,NumberPlate,ShasiNumber,Price,CarStatus,MoreAbout,owner.name,housedealtype.dealtype from cars,owner,housedealtype where cars.own_id=owner.own_id and cars.deal_id=housedealtype.deal_id and CarID =:caRid limit 1";
         $gtinfo= $this->connec->prepare($querycar);
         $gtinfo->bindParam(':caRid',$get_carid);
         $gtinfo->execute();
         return $gtinfo->fetchAll(PDO::FETCH_ASSOC);
     }
  public function Update_Car($UdtCar){
        $upcardateid= Check_Get_Param($UdtCar);
        $carqueries= $this->connec->prepare("update cars set Type=:type, Asnad=:asnad, Color=:color, Model=:model, Engine=:engine, InsideCar=:inside, NumberPlate=:plate, ShasiNumber=:shasi, Price=:price, CarStatus=:status, MoreAbout=:about where CarID=:CARID");
        $carqueries->bindParam(':type', $this->type);
        $carqueries->bindParam(':asnad', $this->asnad);
        $carqueries->bindParam(':asnad', $this->asnad);
        $carqueries->bindParam(':color', $this->color);
        $carqueries->bindParam(':model', $this->model);
        $carqueries->bindParam(':engine', $this->engine);
        $carqueries->bindParam(':inside',$this->insidecar);
        $carqueries->bindParam(':plate', $this->plate);
        $carqueries->bindParam(':shasi', $this->shasi);
        $carqueries->bindParam(':price', $this->carsprice);
        $carqueries->bindParam(':status', $this->status);
        $carqueries->bindParam(':about', $this->about);
        $carqueries->bindParam(':CARID',$upcardateid);
        if($carqueries->execute()){
            echo"<font color='red' size='3'>inserted </font>";
            header('location:/Dashboard/CarList.php');
        } else {
        echo "<font color='yellow' size='4'> not updated</font>";    
        }  
    }
    public function Add_Car_Photos($car_pics){
        $imgID= Check_Get_Param($car_pics);
        $ptstmts= $this->connec->prepare("insert into Gallery_Car(car_image,car_id) values(:image,:carid)");
        $ptstmts->bindParam(':image', $this->pics);
        $ptstmts->bindParam(':carid',$imgID);
        if($ptstmts->execute()){
            echo"Photo inserted";
           // header('location:/Dashboard/AddCarPhotos.php');
        }else{echo"<font color='red' size='3'>Photo not Uploaded</font>";}
    }
    public function Delete_Car($delcid){
        $del_id= Check_Get_Param($delcid);
        $delstmts= $this->connec->prepare("delete from cars where CarID=:CarID");
        $delstmts->bindParam(':CarID',$del_id);
        if($delstmts->execute()){
            header('location:/Dashboard/CarList.php');
        }
        else{
            echo"<font color='red' size='3'>not deleted</font>";
        }
    }
    public function getprovince(){
        $getprovince=  $this->connec->prepare("select *from province ");
        $getprovince->execute();
        return $getprovince->fetchAll();
        
        
    }
    
       
  

///Creating of User
    public function CreateUser(){
        $userStmt=  "insert into login (firstname,lastname,username,email,password,dateofbirth,phone,type,sec_Question,sec_Answer,sec_Code,image)";
        $userStmt.= " values(:name,:lname,:uname,:email,:password,:dob,:phone,:type,:question,:answer,:code,:image)";
        $nstmt=  $this->connec->prepare($userStmt);
        $nstmt->bindParam(':name',$this->firstname);
        $nstmt->bindParam(':lname',  $this->lastname);
        $nstmt->bindParam(':uname',  $this->username);
        $nstmt->bindParam(':email',  $this->email);
        $nstmt->bindParam(':password',  $this->password);
        $nstmt->bindParam(':dob',  $this->dateOB);
        $nstmt->bindParam(':phone',  $this->phone);
        $nstmt->bindParam(':type',  $this->type);
        $nstmt->bindParam(':question',  $this->sec_question);
        $nstmt->bindParam(':answer',  $this->sec_answer);
        $nstmt->bindParam(':code',  $this->sec_code);
        $nstmt->bindParam(':image',  $this->file);
        if($nstmt->execute()){
             echo "<font color='black' size='4'>Record inserted !</font>";
           
             header("location:/Dashboard/CreateUser.php");
//               $getid=  $this->connec->prepare("select u_id from login order by u_id desc");
//             $getid->execute();
//              $getid->fetch();
//              return $Nid=$getid{$_Get['u_id']};
        }
        else{
             echo "<font color='red'>Not inserted </font>"; 
        }
        
    }

    public function UserList(){
        $uStmt=  $this->connec->prepare("select *from login order by u_id desc");
        $uStmt->execute();
        return $uStmt->fetchAll();
        
    }


    // for slide show
    public function SlideShow(){
        
        $ss= $this->connec->prepare("insert into slideshow(SlideImages) values(:images)");
        $ss->bindParam(':images',  $this->file); 
        if($ss->execute()){
             header("location:/Dashboard/SlideShow.php");
        }
       
    }
    
    public function showSlideShow(){
        $sts=  $this->connec->prepare("select *from slideshow");
        $sts->execute();
        return $rowss=$sts->fetchAll();
    }
    
    
    public function DeleteSlide($Sid){
        $slideID=  Check_Get_Param($Sid);
        $dlslide=  $this->connec->prepare("Delete from slideshow where SlideID=:sID");
        $dlslide->bindParam(':sID',$slideID);
        if($dlslide->execute()){
            
            // header("location:/Dashboard/SlideShow.php");
             header('location:/Dashboard/SlideShow.php');
             die($dlslide);
        }
    }
    
    
    public function CompanyInfo(){
       $ComInfo=  $this->connec->prepare("update setup set EnglishName=:engname,DariName=:dariname,Phone=:phone,"
               . "javaz_no=:jvzno,CompanyAddress=:cadd,LogoImage=:image where ID=1");
       $ComInfo->bindParam(':engname',  $this->EnglishName);
       $ComInfo->bindParam(':dariname',  $this->DariName);
       $ComInfo->bindParam(':phone',  $this->ComPhone);
       $ComInfo->bindParam(':jvzno', $this->javazno);
       $ComInfo->bindParam(':cadd',  $this->ComAddress);
       $ComInfo->bindParam(':image',  $this->file);
        if($ComInfo->execute()){
             header('location:/Dashboard/CompanyInfo.php');
        }
        
        
    }
    public function getCompanyInfo(){
        $cominfo=  $this->connec->prepare("select *From setup");
        $cominfo->execute();
        return $rows=$cominfo->fetchAll();
    }
    //do it up not down
    //end of index
}
ob_end_flush();
?>