<script>
    function printDiv(printableArea){
        var printcontents=document.getElementById(printableArea).innerHTML;
        var originalcontents=document.body.innerHTML;
        document.body.innerHTML = printcontents;
        window.print();
        document.body.innerHTML= originalcontents;
    }
    </script>
    <div id="printableArea">
<main id="main-container">
    <div class="content">
     <div class="row">
         <div class="col-xl-10" style="margin: auto;">
                            <!-- Small Table -->
                            <div class="block">
                                <div class="block-header">
                                    <h3 class="block-title"> Low Stock Report</h3>
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <button class="btn btn-primary btn-sm" onclick="printDiv('printableArea');">Print</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <table class="table table-sm table-vcenter" style="direction: rtl;">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px;">#</th>
                                                <th>نام جنس</th><th>نام شرکت </th>
                                                <th>امپیر</th><th class="text-center">ولت / هاس پاور</th>
                                                <th>تعداد </th><th>اسعار </th><th>نرخ خدید</th><th>نرخ فروش</th>
                                                
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($getcurrentstock as $curst){ ?>
                                            <tr>
                                                <th class="text-center" scope="row"><?php  echo $curst['P_ID'];?></th>
                                                <td class="font-w600 font-size-sm"> <?php echo $curst['ProductName']; ?></td>
                                                 <td class="font-w600 font-size-sm"><?php echo $curst['CompanyName']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $curst['AMP']; ?> </td>
                                                <td class="font-w600 font-size-sm text-center"><?php echo $curst['Volt']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $curst['Quantity']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $curst['cur_name']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $curst['Purchase_Price']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $curst['Sale_Price']; ?> </td>
                                            </tr>
                                            
                                            <?php } ?>
                                            <tr><td></td><td></td><td></td><td></td>
                                                <td></td><td></td><td>مجموعه</td>
                                                <td><?php foreach ($getcurrentstock as $cst){ } ?></td>
                                                 <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Small Table -->
                        </div>
     </div>
    </div>
</main>
    </div>