<?php 

//if(!isset($_SESSION['username'])){
//    header('location:/Home/');
//}
//// require_once(MODELS_PAT . DS . 'loginmodel.php');
////$logout=new loginmodel();
////if(isset($_POST['logout'])){
////    $logout->logout();
////}
?>
<style>body{text-align: right;}
 .bottomblock{margin-top: -15 !important;}
 .content {padding: -150 !important;}
 content-block{padding: 0 !important;}div.block{}
 .col-form-label{font-size: 13; }
 .nopadding tr td{padding: 5 !important; }.nopadding tr td input{width: 300px;}
 .nofont,thead th{font-size: 12 !important;}
 .nopadding #contenttable{width: 300px;}
</style>

<main id="main-container" style="direction: rtl; font-family:Calibri;">

     <div class="content col-xl-12 ">
         <div class="block">
                <div class="bg-white">
                    <div class="content">
                        <div class="row items-push justify-content-center">
                            <div class="col-md-12">
                                <form action="" method="post" class="js-validation"  enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="frontend-contact-firstname">اسم</label>
                                                <input type="text" class="form-control" id="frontend-contact-firstname" name="uname" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="frontend-contact-lastname">تخلص</label>
                                                <input type="text" class="form-control" id="frontend-contact-lastname" name="lname">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="frontend-contact-lastname">ولد</label>
                                                <input type="text" class="form-control" id="frontend-contact-lastname" name="fname">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="form-group col-md-4">
                                        <label for="frontend-contact-subject">  نام مارکیت</label>
                                     <input type="text" class="form-control" id="frontend-contact-lastname" name="marketname">
                                    </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="frontend-contact-firstname">نام مالک</label>
                                                <input type="text" class="form-control" id="frontend-contact-firstname" name="owner" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="frontend-contact-lastname">نام دوکان</label>
                                                <input type="text" class="form-control" id="frontend-contact-lastname" name="shopname">
                                            </div>
                                        </div>
                                       
                                    </div>
                                   -->
                                    <div class="row">
                                     <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="frontend-contact-lastname">شماره تماس</label>
                                                <input type="text" class="form-control" id="frontend-contact-lastname" name="phone">
                                            </div>
                                        </div>
                                   <!-- <div class="form-group col-md-4">
                                        <label for="frontend-contact-subject">  نمبر دوکان </label>
                                     <input type="text" class="form-control" id="frontend-contact-lastname" name="shopno">
                                    </div>     
                                   <div class="form-group col-md-4">
                                        <label for="frontend-contact-subject">  ادرس  </label>
                                     <input type="text" class="form-control" id="frontend-contact-lastname" name="address">
                                    </div> -->
                                    </div>
                                    <!-- <div class="row">
                                        <div class="form-group col-md-4">
                                        <label for="">عکس</label>
                                        <input type="file" name="file" class="form-control"   >
                                    </div>
                                    </div> -->
                                    <div class="form-group">
                                        <input type="submit" name="AddCustomer" value=" ایجاد مشتری" class="btn btn-primary" style="font-family:Calibri; ">
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
     </div>   
               
     </div>
                        </main>
<script src="../Public/assets/js/oneui.core.min.js"></script>
<script src="../Public/assets/js/oneui.app.min.js"></script>
<script src="../Public/assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="../Public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../Public/assets/js/plugins/jquery-validation/additional-methods.js"></script>
<script>jQuery(function(){ One.helpers('select2'); });</script>
<script src="../Public/assets/js/pages/be_forms_validation.min.js"></script>
    