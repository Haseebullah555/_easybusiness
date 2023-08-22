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
                                                <th>امپیر</th><th>ولت / هاس پاور</th>
                                                <th>تعداد </th><th>اسعار </th><th>نرخ فروش</th>
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($getlowstock as $lowst){ ?>
                                            <tr>
                                                <th class="text-center" scope="row"><?php  echo $lowst['P_ID'];?></th>
                                                <td class="font-w600 font-size-sm"> <?php echo $lowst['ProductName']; ?></td>
                                                 <td class="font-w600 font-size-sm"><?php echo $lowst['CompanyName']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $lowst['AMP']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $lowst['Volt']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $lowst['Quantity']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $lowst['cur_name']; ?> </td>
                                                <td class="font-w600 font-size-sm"><?php echo $lowst['Sale_Price']; ?> </td>
                                            </tr>
                                            <?php } ?>
                                           
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