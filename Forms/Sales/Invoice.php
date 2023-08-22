<html>
<head>  
<title>Easy Business</title>
        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="../Public/assets/media/favicons/favicon.png"/>
        <link rel="icon" type="image/png" sizes="192x192" href="../Public/assets/media/favicons/favicon-192x192.png"/>
        <link rel="apple-touch-icon" sizes="180x180" href="../Public/assets/media/favicons/apple-touch-icon-180x180.png"/>
        <link rel="stylesheet" href="../Public/assets/js/plugins/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"/>
        <link rel="stylesheet" id="css-main" href="../Public/assets/css/oneui.min.css"/>
        <link rel="shortcut icon" href="../Public/assets/media/favicons/favicon.png">
        <link rel="stylesheet" href="../Public/assets/js/plugins/magnific-popup/magnific-popup.css">
            <link rel="stylesheet" href="../Public/assets/js/plugins/select2/css/select2.min.css">
 
  </head>
  <body>
 
      <main id="main-container">
      
     <div class="content content-boxed" style="font-family: Calibri;">
               <div class="block">
                        <div class="block-header">
                            <h3 class="block-title"><?php foreach ($invoiceid as $inv){ echo "#".$inv['INV_No'];}?></h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Helpers.print() -->
                                <button type="button" class="btn-block-option" onclick="One.helpers('print');">
                                    <i class="si si-printer mr-1"></i> Print Invoice
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-4 p-xl-7">
                                <!-- Invoice Info -->
                                <div class="row mb-4">
                                    <!-- Company Info -->
                                    <div class="col-3 font-size-sm">
                                        <img src="/UserUpload/logo.JPG" width="150px" height="150px" />
                                       
                                    </div>
                                    <!-- END Company Info -->

                                    <!-- Client Info -->
                                    
                                    <div class="col-9  font-size-sm " >
                                       
                                        <p class="h3 text-right" style=" margin-right: -10px;margin: auto; font-family: Calibri; ">شـــــرکت تـــجارتـــــــی لــــــودین همــــــــــدرد لــــــــمتد</p>
                                        <br><p class="h3 text-right" style="font-family: Times New Roman; margin: auto;  margin-top: -20px;">
                                            Lodin Hamdard Business Ltd
                                        </p>
                                        <address class="text-right" style="margin-top: 20px;">
                                           تاریخ: <?php echo date("d/m/Y"); ?><br>
                                           نوع فروش:  &nbsp; نقد<br>
                                           
                                        </address>
                                    </div>
                                    <!-- END Client Info -->
                                </div>
                                <!-- END Invoice Info -->

                                <!-- Table -->
                                <div class="table-responsive push">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 60px;">#</th>
                                                <th>Product Description</th>
                                                <th class="text-center" style="width: 90px;">Qnt</th>
                                                <th class="text-right" style="width: 120px;">Unit</th>
                                                <th class="text-right" style="width: 120px;">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($invoiceinfo as $invinfo){?>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td>
                                                    <p class="font-w600 mb-1"><?php echo $invinfo['ProductName']; ?></p>
                                                    
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $invinfo['Quantity']; ?>
                                                </td>
                                                <td class="text-right"><?php echo $invinfo['Sale_Price']; ?></td>
                                                <td class="text-right"><?php echo $invinfo['Total_amount']; ?></td>
                                            </tr>
                                           <?php } ?>
                                            
                                           
                                            <tr>
                                                <td colspan="4" class="font-w600 text-right">Discount</td>
                                                <td class="text-right"><?php echo $invinfo['Discount']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="font-w600 text-right">Cash Due</td>
                                                <td class="text-right"><?php echo $invinfo['Debt_amount']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="font-w700 text-uppercase text-right bg-body-light">Total </td>
                                                <td class="font-w700 text-right bg-body-light"><?php
                                                
                                                if($invinfo['cur_name']=="دالر" && !empty($invinfo['Paid_amount']) ){
                                                    echo $invinfo['cur_name'].$invinfo['Paid_amount']; 
                                                }
                                                else if($invinfo['cur_name']=="دالر" && !empty ($invinfo['Debt_amount']) && empty ($invinfo['Paid_amount'])){
                                                   echo $invinfo['cur_name'].$invinfo['Debt_amount'];   
                                                }
                                                else if($invinfo['cur_name']=="افغانی"&& !empty ($invinfo['Paid_amount']) ){
                                                     echo $invinfo['cur_name'].$invinfo['Paid_amount'];   
                                                }
                                                else if($invinfo['cur_name']=="افغانی" && !empty ($invinfo['Debt_amount']) ){
                                                    echo $invinfo['cur_name'].$invinfo['Debt_amount'];   
                                                }
                                                else if($invinfo['cur_name']=="کلدار" && !empty($invinfo['Paid_amount']) ){
                                                    echo $invinfo['cur_name'].$invinfo['Paid_amount'];   
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END Table -->

                                <!-- Footer -->
                                <p class="font-size-sm text-right py-3 my-3 border-top">
                                    آدرس:
                                    کابل قلعچه،
                                    سرک عمومی لوگر، حاجی زرین نیازی تجارتی مارکیت
                                    دوکان نمبر  9-10 دست چپ
                                </p>
                                <p  class="font-size-sm text-right my-3" style="font-weight: bold;">
                                نوت:
                                    جنس فروخته شده واپس گرفته نمیشود بل هذا بدون مهر و امضاء مدار اعتبار نیست
                                
                                     </p>
                                 <img src="/UserUpload/downlogo.jpg" width="100%" height="200px" />
                                <!-- END Footer -->
                            </div>
                        </div>
                    </div>
                    <!-- END Invoice -->
                </div>
      </main>
  </body>  
</html>
  <script src="../Public/assets/js/oneui.core.min.js"></script>
  <script src="../Public/assets/js/oneui.app.min.js"></script>