<div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">خریداری</div>
                                    <div class="font-size-h2 font-w400 " style="color:darkred"><?php foreach ($getPurchase as $prs){echo "$".$prs['Purchases'];} ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">فروش امروز - <?php echo date('d/m/Y'); ?></div>
                                    <div class="font-size-h2 font-w400" style="color:green"><?php foreach ($getSales as $slsin){echo $slsin['Total_Payment'];} ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">قرضداری</div>
                                    <div class="font-size-h2 font-w400 text-dark">$3,200</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">مجموعه مکمل روز</div>
                                    <div class="font-size-h2 font-w400 text-dark">$21</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->
</div>
<div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">خریداری به اففانی</div>
                                    <div class="font-size-h2 font-w400 " style="color:darkred"><?php foreach ($getAfgPurchase as $prsa){echo "$".$prsa['Purchases'];} ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">فروش امروزاففانی - <?php echo date('d/m/Y'); ?></div>
                                    <div class="font-size-h2 font-w400" style="color:green"><?php foreach ($getSales as $slsin){echo $slsin['Total_Payment'];} ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">قرضداری</div>
                                    <div class="font-size-h2 font-w400 text-dark">$3,200</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">مجموعه مکمل روز</div>
                                    <div class="font-size-h2 font-w400 text-dark">$21</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->
</div>