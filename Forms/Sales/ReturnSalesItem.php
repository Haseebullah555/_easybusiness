      
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
    .nopadding tr td{padding: 3 !important; }
    .nofont,thead th{font-size: 12 !important;}
    #smallinput{width: 80px;} .larginput{width:140px;}
    #currencysminput{width: 150px;}#currencyinput{width: 150px;}
</style>
<main id="main-container">
<div class="content">
   <div class="row">
       <div class="col-xl-12">
             <div id="one-inbox-side-nav" class="d-none d-md-block push">
             <div class="block">
               <div class="block-content">
                   <form action="" method="post">
                     <div class="col-xl-12">
                                <!-- Invoice Info -->
                                <div class="row mb-4">
                                    <!-- Company Info -->
                                    <div class="col-4 font-size-sm">
                                         <table>
                <tr>
                <td> <input type="text" class="form-control form-control-sm input-sm col-3  " value="<?php echo $empid; ?>" readonly="" name="inv_id" ></td>
            </tr>              
             <tr>
                 <td><select class="js-select2 form-control form-control-sm" id="example-select2" name="customer" data-placeholder="Choose one..">
                         <option></option>
               <?php foreach ($getcust as $cs){ ?>
               <option value="<?php echo $cs['Cus_ID']; ?>"><?php echo $cs['Cus_name'];?></option>
               <?php } ?>
                 </select></td></tr>
             <tr>
             <td><select class="form-control form-control-sm input-sm  " >
             <option>Cush</option></select>
             </td>
            </tr>
           <tr><td>  <label style="float:left" id="smallinput" class=" col-form-label" >Gross Total : </label>
             <input type="text" id="grosstotal"  value="<?php foreach($grosstotal as $gtt){echo $gtt['total'];} ?>" class="form-control form-control-sm input-sm larginput " disabled="" name="grossTotal" style="background-color: #6e6b5e; color: yellow; font-weight: bold;"></td>
           </tr>
         <tr><td>  <label style="float:left" id="smallinput" class=" col-form-label" >Discount : </label>
             <input type="text" class="form-control form-control-sm input-sm larginput " value="" id="Discount"  name="Discount" style="background-color: #6e6b5e;  color: red; font-weight: bold;"></td>
           </tr>
            <tr>
             <td>  <label class=" col-form-label" style="float:left" id="smallinput" > Cash Due : </label>
             <input type="text" class="form-control form-control-sm input-sm  larginput" id="CashDue" name="CashDue" style="background-color: #6e6b5e;  color: yellow; font-weight: bold;"></td>
            </tr>
            <tr>
                <td>  <label style="float:left" id="smallinput" class=" col-form-label" > Recieved : </label>
              <input type="text" class="form-control form-control-sm input-sm larginput " id="recieved" name="Receive" style="background-color: #6e6b5e;  color: yellow; font-weight: bold;"></td>
            
            </tr>
           
             
                       </table>
                                    </div>
                                    <div class="col-8 font-size-sm " style="margin-left:-20px;">
           <table class="table table-vcenter table-borderless  nopadding "   id="secondtbl">
                 <tr ><td><input type="text" name="searchbarcode" value="<?php foreach($getSalesItem as $br){echo $br['barcode'];} ?>" placeholder="بارکود" style="float:left; margin-right: 5px;" class="form-control form-control-sm col-sm-6"/>
                    <input type="submit" name="searchItm" value="Srch" class="btn btn-sm btn-warning"/></td>
                     <?php foreach ($getSalesItem as $sls){ ?>
                     <td><input type="text" name="proname" value="<?php echo $sls['ProductName']; ?>" class="form-control form-control-sm" style=""/></td>
                     <td><input type="text" name="sprice" value="<?php echo $sls['Sale_Price']; ?>" class="form-control form-control-sm"/></td>
                     <td><input type="text" name="qty" value="1" class="form-control form-control-sm"</td>
                     <?php } ?>
                     <td><input type="submit" value="+" name="AddProduct" class="btn btn-sm btn-outline-dark" /></td>
                 </tr>
             </table>                             
           </div>   
             <div class="col-8 text-right font-size-sm table-responsive" style="width:100%; margin-top: -200px; margin-left: 400px; max-height:280px;">
               
         <table class="table table-vcenter  table-responsive  nofont " > 
      <thead> 
              
          <tr><th>checked</th><th class="col-lg-8" style=" ">Item Desciption</th><th>Quantity</th> <th>Price</th><th>Currency</th>
      <th>Total</th>
     
     
      </thead>
      <tbody >
      <?php  foreach($getSaleInfo1 as $row){ ?>
      <tr  >
          <td>
              <input type="checkbox" class="form-control form-control-sm" name="checkid[]" value="<?php echo $row['onlyDate'] ?>" >
          </td>
        <td><?php echo $row['ProductName']; ?></td> 
        <td><?php echo $row['onlyQty']; ?></td>
        <td><?php echo $row['Sale_Price']; ?></td>
        <td><?php echo $row['cur_name']?></td>
        <td><?php echo $row['Total_amount']; ?></td>
      </tr>
      <?php } ?>
     
      
      </tbody>
      </table>
       </div>
        <div class="col-3 font-size-sm">
            <table class="table table-borderless nopadding" id="toptable">
               <tr><td><button type="submit" name="SavePrint" class="btn btn btn-outline-success">Save & Print</button>
                     <button class="btn btn btn-outline-info col-lg-5"><a href="/Sales/Invoice.php"><i class="fa fa-print"></i> Print</a></button></td>
           </tr>
           <tr><td><button class="btn btn btn-outline-warning">On Hold </button>
                   <button class="btn btn btn-outline-danger col-6" type="button" id="DiscountReceive" onclick="DiscountReceive();" name="PayAmount"> Pay</button></td>
           </tr>
          <tr><td><button class="btn btn btn-outline-danger col-lg-3"> Close </button> 
                  <button class="btn btn btn-outline-dark col-lg-3" type="button" id="debtcash" name="debt_data" onclick="debtcash();">
                      قرض </button>
              <button  type="submit" name="lastinvoice" class="btn btn btn-outline-warning">Last INV</button></td>
           </tr>
            <tr><td>
             <button  type="submit"  name="deletetable" class="btn btn btn-outline-danger col-lg-10"> Delete Item</button></td>
           </tr>
          </table>                             
         </div>
         
         </div>
        </div>
        </form>
        </div>
        </div>
    </div>
       </div>
    
                    </div>
                </div>
                <!-- END Page Content -->


 

</main>  
 

<script type="text/javascript" >
    $(document).ready(function(){
        $("#debtcash").click(function(){
            var getrs=$("#grosstotal").val();
            var disco=$("#Discount").val();
            if(disco == ""){
                $("#CashDue").val(getrs);
            }
            else{
                var ttl2=parseInt(getrs)-parseInt(disco);
                $("#CashDue").val(ttl2);
            }
        });
        });
    $(document).ready(function(){
        $("#DiscountReceive").click(function(){
            var grsttl=$("#grosstotal").val();
            var dsc=$("#Discount").val();
            if(dsc == ""){
              $("#recieved").val(grsttl);  
            }
            else{
            var ttl=parseInt(grsttl)-parseInt(dsc);
            $("#recieved").val(ttl);
        }
        });
    });
//    function DiscountReceive(){
//        var grossTTl=document.getElementById('grosstotal').val();
//        var discount=document.getElementById('Discount').val();
//        var receive= parseInt(grossTTl)-parseInt(discount);
//        document.getElementById('recieved').innerHTML=receive;
//    }
    </script>
    
    
    
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
