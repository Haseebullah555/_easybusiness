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
    #itemsearch{width: 470px;}
    .contentup{margin-top: -30px;}
     .bottomblock{margin-top: -15 !important;}
    .content {
    padding: 15 !important;
}
#itemtype{width: 180px;}#nameitem{width: 200px; margin-right: 20px;}
    content-block{padding: 0 !important;}div.block{font-size: 12;}
    .col-form-label{font-size: 12; width: 100px;}
    .nopadding tr td{padding: 3 !important; }.nopadding tr td input{width: 300px;}
    .nofont,thead th{font-size: 12 !important;}
    #gname{width:180px;}
    #smallinput{width: 50px;}#stocklevel{width: 180px;}#stocklbl{margin-right: 90px;}
    #larginput{width: 250px;}#currencysminput{width: 150px;}#currencyinput{width: 150px;}
</style>
<div class="content">
     <div class="block">
         <div class="block-header">
           </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                          <div class="block-content contentup">
                         <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active " href="#btabswob-static-home">Item Master Form</a>
                                    </li>
                                    
                                   </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabswob-static-home" role="tabpanel">
                                        <div class="block">
    <div class="col-lg-12 ">
        <form action="" method="POST" class="js-validation" enctype="multipart/form-data">
           <table class="table table-borderless nopadding" id="toptable">
                <tr><td><label class=" col-form-label"> Search Item: </label></td>
    <td><input type="text" name="itemsearch" class="form-control form-control-sm" placeholder="جستجو جنس" id="itemsearch" /></td></tr>
    <tr>
        <td><label class=" col-form-label">Trade Name:</label></td>
        <td><input type="text" name="productname" class="form-control form-control-sm"   id="nameitem" placeholder="نام تجارتی جنس" style="float:left;" />
        <label class="col-form-label" style="float:left; margin-right: -30px;" >G-Name:</label>
            <input type="text" class="form-control form-control-sm" name="genricName" placeholder="  نام اصلی جنس" id="gname" />
         
        </td>
        <td><label class=" col-form-label">Purchase Price:</label></td>
        <td><input type="text" name="purchaseprice" class="form-control form-control-sm" placeholder="نرخ خرید" /></td>
    </tr>
    <tr>
        <td><label class=" col-form-label">Barcode:</label></td>
        <td><input type="text" name="barcode"  class="form-control form-control-sm" id="nameitem" placeholder=" بارکود نمبر" style="float:left;"/>
        <label class="col-form-label" style="float:left; margin-right: -30px;">Type:</label>
            <select class="form-control form-control-sm" name="itemtype" id="itemtype">
                <option hidden="">نوع جنس</option>
                <option>Tablet</option>
                <option>Ampole</option>
                <option>Caps</option>
                <option>Serup</option>

            </select>
        </td>
        <td><label class=" col-form-label">Sale Price</label></td>
        <td><input type="text" name="saleprice" class="form-control form-control-sm" placeholder="نرخ فروش" /></td>
    
    </tr>
    <tr>
        <td><label class=" col-form-label">Company Name:</label></td>
        <td><input type="text" name="companyname" class="form-control form-control-sm" id="nameitem" placeholder=" نام کمپنی"/></td>
        <td><label class=" col-form-label">Expire Date:</label></td>
        <td><input type="date" name="expriedate" class="form-control form-control-sm" placeholder=" تاریخ انقضاء " /></td>
    
    </tr>
    <tr>
        <td><label class=" col-form-label">P-zise:</label></td>
        <td><input type="text" name="psize" class="form-control form-control-sm" id="nameitem" placeholder="ظرفیت جنس"  />
             </td>
    </tr>
    <tr><td><label class=" col-form-label">Max Stock:</label></td>
        <td>
        <input type="text" name="maxstock" class="form-control form-control-sm" placeholder="سهام زیاد" id="nameitem" style="float:left;" />
        <label class="col-form-label" style="float:left; margin-right: -30px;" id="stocklbl">Min Stock:</label>
            <input type="text" class="form-control form-control-sm" name="minstock" placeholder=" سهام کمتر" id="stocklevel" />
      </td><td></td>
        <td><input type="submit" name="SaveItem" value="Save" class="btn btn-sm btn-outline-dark"/></td>
    </tr>
    
          </table>
          </form>
    </div>
    <div class="col-lg-12" >
        <div class="block" >
  <div class="block-content block-content-full">
        <table class="table table-bordered table-vcenter js-dataTable-full">
        <thead>
        <tr>
            <th>Barcode</th>
            <th>Trade Name</th>
            <th>Genric Name</th>
        <th>Company Name</th>
        <th>P-Size</th>
       <th>Purchase Price</th><th>Sale Price</th> <th>Expire Date</th>
        <th>Content Control</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($showrec as $hows ){ ?>
                <tr>
                    <td><?php  echo $hows['barcode']; ?></td>
                    <td><?php  echo $hows['ProductName']; ?></td>
                    <td><?php  echo $hows['GenricName']; ?></td>
                    <td><?php echo $hows['CompanyName']; ?></td>
                    <td><?php  echo $hows['p_size']; ?></td>
                <td class="d-none d-sm-table-cell font-size-sm"><?php echo $hows['Purchase_Price']; ?></td>
                <td class="d-none d-sm-table-cell"><?php echo $hows['Sale_Price']; ?></td>
                <td><?php  echo $hows['expire_date']; ?></td>
                <td class="text-center">
                    <div class="btn-group">
                 <a href="" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Item">
      <i class="fa fa-fw fa-pencil-alt"></i> </a>
      <a href="" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Item">
      <i class="fa fa-fw fa-times"></i> </a>
                   </div> 
                    </td>
                </tr>
                 <?php } ?>
 
               </tbody>
               </table>
               </div>
   </div>
   <!-- END Striped Table -->
   </div>
   
    </div>
  
     </div>
</div>
</div>
</div>
</div>
     </div>
  
    
    

        <script src="../Public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-validation/additional-methods.js"></script>
           <script>jQuery(function(){ One.helpers('select2'); });</script>
    <script src="../Public/assets/js/pages/be_forms_validation.min.js"></script>
     <script src="../Public/assets/js/oneui.core.min.js"></script>

<script src="../Public/assets/js/oneui.app.min.js"></script>
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