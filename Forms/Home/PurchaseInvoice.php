        <link rel="shortcut icon" href="../Public/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../Public/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../Public/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../Public/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/dropzone/dist/min/dropzone.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/flatpickr/flatpickr.min.css">

         <link rel="stylesheet" href="../Public/assets/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="../Public/assets/css/oneui.min.css">
<style>
    .contentup{margin-top: -30px;}
     .bottomblock{margin-top: -15 !important;}
    .content {
    padding: 15 !important;
}
    content-block{padding: 0 !important;}div.block{font-size: 12;}
    .col-form-label{font-size: 12;}
    .nopadding tr td{padding: 3 !important; }.nopadding tr td input{width: 300px;}
    .nofont,thead th{font-size: 12 !important;}
    #smallinput{width: 50px;}
    #larginput{width: 250px;}#currencysminput{width: 150px;}#currencyinput{width: 150px;}
</style>
   <script >//$(function(){
//         $(document).ready(function(){
//             load_data();
//             function load_data(){
//                 $.ajax({
//                     url:"home.php",
//                     method:"POST",
//                     data:{query:query},
//                     success:function(data){
//                         $("#result").html(data);
//                     }
//                 });
//             }
//             $("#itemsearchby").keyup(function(){
//                 var search= $(this).val();
//                 if(search != '')
//                 {
//                     load_data(search);
//                 }
//                 else{
//                     load_data();
//                 }
//             });
//              });
//              
//              
//              function showrows(row){
//                  var x = row.cells;
//                  
//                  document.getElementById("ProductName").value=x[0].innerHTML;
//                  document.getElementById("Price").value=x[1].innerHTML;
//              
//                      }
          </script>
          
          
<div class="content">
     <div class="block">
         <div class="block-header">
           </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                          <div class="block-content contentup">
                         <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active " href="#btabswob-static-home">Purchase Invoice</a>
                                    </li>
                                   </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabswob-static-home" role="tabpanel">
                                        <div class="block">
    <div class="col-lg-12 ">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table table-borderless nopadding" id="toptable">
            <tr><td> <label class=" col-form-label" >شرکت</label></td>
                <td><input type="text" class="form-control form-control-sm input-sm col-lg-2" id="smallinput" style="float:left"  name="sname" >
                    <select class="form-control form-control-sm" id="larginput">
                        <option>Cush</option>
                    </select>
                </td>
            <td><label class=" col-form-label" >PI </label></td>
            <td><input type="text" class="form-control form-control-sm" name="tazkira"  > </td>
            <td> <label class=" col-form-label" >تاریخ </label></td>
            <td> <input type="text" class="js-flatpickr form-control bg-white form-control-sm" name="mainresidence" placeholder="Y-m-d" ></td>
            </tr>
           <tr><td> <label class=" col-form-label" >شماره تماس </label></td>
            <td><input type="text" class="form-control form-control-sm input-sm" name="fname" placeholder=" +93 (70)(000)(0000) " ></td>
            <td> <label class=" col-form-label" >اسعار</label></td>
            <td><input type="text" class="form-control form-control-sm input-sm" id="currencysminput" style="float:left"  name="sname" >
                <input type="text" class="form-control form-control-sm" id="currencyinput"/></td>
            <td> <label class=" col-form-label" >نمبر بلتی</label></td>
            <td> <input type="text" class="form-control form-control-sm" name="maindistrict" ></td>
            </tr>
         <tr><td> <label class=" col-form-label" >آدرس</label></td>
            <td><input type="text" class="form-control form-control-sm input-sm" name="gfname" placeholder=" آدرس" ></td>
            <td><label class=" col-form-label" >نوت</label></td>
            <td><input type="text" class="form-control form-control-sm" name="page"  > </td>
            <td> <label class=" col-form-label" > گدام نمبر</label></td>
            <td><input type="number" class="form-control form-control-sm input-sm" id="currencysminput" style="float:left"  name="sname" >
                <select class="form-control form-control-sm" id="currencyinput">
                    <option>a</option>
                </select> </td>
            </tr>
          
         
          </table>
          </form>
    </div>
   
    </div>
     
        <div class="col-xl-12">
   <div class="block bottomblock">
   <div class=" table-responsive" style="width:100%; ">
       <form action="" method="POST" enctype="multipart/form-data">
    <table class="table table-vcenter nofont ">
      <thead>
          <tr><th>Barcode</th>
          <th>Product</th><th>Purchase Price</th>
          <th>Sale Price</th><th>Currency</th>
          <th>Quantity</th></tr>
      </thead>
      <tbody>
          <tr><td><input type="text" name="barcode" id="barcode" value="<?php foreach($schproduct as $br){echo $br['barcode'];} ?>" style="float:left; margin-right: 4px;" class="form-control col-lg-8 form-control-sm" />
                  <input type="submit" class="btn btn-sm btn-outline-dark" value="Search" name="SearchItem"/></td>
              <?php foreach ($schproduct as $itmRow){ ?>
              <td >
         <input type="text"  name="ProductName" value="<?php echo $itmRow['ProductName']; ?>"  id="ProductName" disabled="" class="form-control form-control-sm "/></td>
              <td><input type="text" value="<?php echo $itmRow['Purchase_Price']; ?>"  name="purchasePrice" id="Price" class="form-control form-control-sm" /></td>
              <td><input type="text" value="<?php echo $itmRow['Sale_Price']; ?>" name="SalePrice"  id="saleprice" class="form-control form-control-sm" /></td>
              <?php  } ?>
              <td><select name="currency" class="form-control form-control-sm">
                      <option hidden=""> اسعار</option>
                      <?php foreach($gtCurrency as $cur){ ?>
                      <option value="<?php echo Check_Param($cur['ID']); ?>"><?php echo Check_Param($cur['cur_name']); ?></option>
                      <?php }?>
                  </select></td>
              <td><input type="text" name="quantity" onclick="countquant()" id="quantity" class="form-control form-control-sm" /></td>
              <td><input type="submit" name="PurchaseItem" class="btn btn-sm btn-outline-dark" value="Add"/></td>
          </tr>
      <script>
          countquant();
          
          
          function countquant(){
              var prices= document.getElementById('Price').value();
              var quantty= document.getElementById('quantity').value();
              var pqadd= prices * quantty;
              document.getElementById('amountis').innerHTML = pqadd;
            
             
          }
          
          </script>
      </tbody>
            
                </table>
            </form>
                                                 
    </div>
   </div>
   <!-- END Striped Table -->
   </div>
     
                                           
    <div class="col-xl-12" style="margin-top: -35px;">
        <div class="block" >
   <div class=" table-responsive block-content-full" style="width:100%; max-height:212px;">
    <table class="table table-vcenter nofont ">
      <thead>
      <tr>
      <th class="">Item Code</th>
       <th>Item Desciption</th><th>Batch No</th> <th>Expiry</th>
       <th>Unit</th><th>Currency</th> <th>Quantity</th>
       <th>Purchase Price</th><th>Expense</th><th>Sale Price</th>
       <th>Item Cost</th>
       <th>Amount</th>
     
      </thead>
      <tbody>
      <?php  foreach($srchItmP as $row){ ?>
      <tr >
      <th> <?php echo $row['barcode'];?></th>
       <td><?php  echo $row['ProductName'];?></td>
      <td><?php //echo $row['fname'];?></td>
     
      <td><?php // echo $row['registration'];?></td>
      <td><?php // echo $row['mainresidence'];?></td>
      <td> <?php   echo $row['cur_name'];?></td>
      <td><?php   echo $row['Quantity'];?></td>
      <td><?php  echo $row['Purchase_Price'];?></td>
      <td><?php  echo $row['Total'];?></td>
      <td><?php  echo $row['Sale_Price'];?></td>
      <td><?php  echo $row['Total_Sale_Cost'];?></td>
      <td><?php  echo $row['Total_Cost'];?></td>
      <td>
   
      </tr>
   
      
      <?php }      ?>
      </tbody>
      </table>
   </div>
   </div>
   <!-- END Striped Table -->
   </div>
<!--         table-->
        
     </div>
</div>
</div>
</div>
</div>
     </div>
    
    
    
      <script src="../Public/assets/js/oneui.core.min.js"></script>
        <script src="../Public/assets/js/oneui.app.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../Public/assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
        <script src="../Public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../Public/assets/js/plugins/dropzone/dropzone.min.js"></script>
        <script src="../Public/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
        <script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>
        <script src="../Public/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>
        <script src="../Public/assets/js/pages/be_tables_datatables.min.js"></script>

