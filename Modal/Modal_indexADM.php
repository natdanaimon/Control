

<div id="ShowEditBillADM" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="600" style="position: fixed; top:20%; left:50%;">
    <form action="/Control/Function/BillStausADM.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-money"></i> <b><?= $_SESSION["_payment"] ?> </b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:130px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class=" icon-barcode"></i>
                            <input class="m-wrap " type="text" placeholder="เลขบิล" name="ADMbill_add" id="ADMid_bill" pattern="[^'\x22]+" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class=" icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="username" name="acc_user" id="acc_userADM" pattern="[^'\x22]+" required readonly/>    
                        </div>
                        <div class="input-icon left" align="left">




                        </div>



                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="จำนวนเงินรวม" name="ADMsum_add" id="ADMid_sum" pattern="[0-9]" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="ยอดเงินในกรณีที่ค้างชำระการจ่ายเงิน" name="ADMpay_add" id="ADMid_pay" pattern="\d*" required value="0" />    
                        </div>
                        <div class="input-icon left">
                            <span class="badge badge-important">NOTE!</span> <span > ระบุยอดเงินที่ชำระ ในกรณีที่มีการชำระเงินแค่บางส่วน </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["action_save"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>




<div id="ShowEditBillADM2" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="600" style="position: fixed; top:20%; left:50%;">
    <form action="/Control/Function/BillStausADM2.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-money"></i> <b><?= $_SESSION["_pay_accu"] ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:130px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class=" icon-barcode"></i>
                            <input class="m-wrap " type="text" placeholder="เลขบิล" name="ADMbill_add2" id="ADMid_bill2" pattern="[^'\x22]+" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class=" icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="username" name="acc_user2" id="acc_user2ADM" pattern="[^'\x22]+" required readonly/>    
                        </div>




                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="จำนวนเงินรวม" name="ADMsum_add2" id="ADMid_sum2" pattern="[0-9]" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="ยอดเงินในกรณีที่ค้างชำระการจ่ายเงิน" name="ADMpay_add2" id="ADMid_pay2" pattern="\d*" required value="0" />    
                        </div>
                        <div class="input-icon left" align="left">
                            <span class="badge badge-important">NOTE!</span> <span > ยอดเงินที่ต้องการชำระเพิ่มเติม </span>

                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["action_save"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>

