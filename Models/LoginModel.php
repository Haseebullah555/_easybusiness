<?php
//include("../config/database.php");
require_once 'c:/xampp/htdocs/_EasyBusiness/config/database.php';
class LoginModel extends database{
  
    public function checklogin(){
       
         
         $loginquery="select count(u_id) from login where username =:username and password = :password";
         $state=  $this->connec->prepare($loginquery);
         $state->bindParam(":username",$this->username);
         $state->bindParam(":password",$this->password);
         if($state->execute()){
             $result= $state->fetchColumn();
             if($result==1){
                  $query="select * from login where username =:username and password = :password";
         $stmnt=  $this->connec->prepare($query);
         $stmnt->bindParam(":username",$this->username);
         $stmnt->bindParam(":password",$this->password);
         
         if($stmnt->execute()){
             $data=$stmnt->fetch();
             session_start();
             $_SESSION['username']=  Check_Param($data['username']);
             $_SESSION['userUniq']=Check_Parammore($data['userUniqe']);
             $_SESSION['language'] = Check_Param("ENGLISH");
             header("location:../Dashboard/");
         }
         else{
             echo"bad login";
             exit;
         }
         
         
             }
         }
    }
    // finish
    
    
    public function logout(){
         session_start();
        session_unset();
        session_destroy();
        header("location:../Home/");
    }
    
}
?>