<?php
if (isset($_SESSION["err_addBilling"]))
    if ($_SESSION["err_addBilling"] === "false") {
        ?>
        <div class="modal fade" id="myModalAddBillSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-success">
                        <strong>Notice</strong> <?= $_SESSION["alert_add"] ?>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }
?>
<?php
if (isset($_SESSION["err_addBilling"]))
    if ($_SESSION["err_addBilling"] === "true") {
        ?>
        <div class="modal fade" id="myModalAddBillFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-danger">
                        <strong>Notice</strong> <?= $_SESSION["alert_error"] ?>
                    </div>
                </div>

            </div>
        </div>

        <?php
    }

$_SESSION["err_addBilling"] = "";
?>




<?php
if (isset($_SESSION["BILLS_DELETE"]))
    if ($_SESSION["BILLS_DELETE"] == "Y") {
        ?>
        <div class="modal fade" id="myModalDeleteBillSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-success">
                        <strong>Notice</strong> <?= $_SESSION["alert_delete"] ?>
                    </div>
                </div>

            </div>
        </div>
        <?php
    } else if ($_SESSION["BILLS_DELETE"] == "N") {
        ?>
        <div class="modal fade" id="myModalDeleteBillFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-danger">
                        <strong>Notice</strong> <?= $_SESSION["alert_error"] ?>
                    </div>
                </div>

            </div>
        </div>

        <?php
    }
$_SESSION["BILLS_DELETE"] = "";
?>


<div id="ShowEditBill" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="600">
    <form action="/Control/Function/BillStaus.php" method="post" enctype="multipart/form-data">
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
                            <input class="m-wrap " type="text" placeholder="เลขบิล" name="bill_add" id="id_bill" pattern="[^'\x22]+" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class=" icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="username" name="acc_user" id="acc_user" pattern="[^'\x22]+" required readonly/>    
                        </div>





                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="จำนวนเงินรวม" name="sum_add" id="id_sum" pattern="[0-9]" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="ยอดเงินในกรณีที่ค้างชำระการจ่ายเงิน" name="pay_add" id="id_pay" pattern="\d*" required value="0" />    
                        </div>
                        <div class="input-icon left" align="left">
                            <span class="badge badge-important">NOTE!</span> <span > ระบุยอดเงินที่ชำระ ในกรณีที่มีการชำระเงินแค่บางส่วน </span><br/>



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



<?php
if (isset($_SESSION["TYPE_UPDATEBILLSTATUS"]))
    if ($_SESSION["TYPE_UPDATEBILLSTATUS"] === "Y") {
        ?>
        <div class="modal fade" id="myModalUpdateBillStatusSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-success">
                        <strong>Notice</strong> <?= $_SESSION["alert_edit"] ?>
                    </div>
                </div>

            </div>
        </div>
        <?php
    } else if ($_SESSION["TYPE_UPDATEBILLSTATUS"] == "N") {
        ?>
        <div class="modal fade" id="myModalUpdateBillStatusFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-danger">
                        <strong>Notice</strong> <?= $_SESSION["alert_error"] ?>
                    </div>
                </div>

            </div>
        </div>

        <?php
    }
$_SESSION["TYPE_UPDATEBILLSTATUS"] = "";
?>


<div id="ShowEditBill2" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="600">
    <form action="/Control/Function/BillStaus2.php" method="post" enctype="multipart/form-data">
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
                            <input class="m-wrap " type="text" placeholder="เลขบิล" name="bill_add2" id="id_bill2" pattern="[^'\x22]+" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class=" icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="username" name="acc_user2" id="acc_user2" pattern="[^'\x22]+" required readonly/>    
                        </div>




                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="จำนวนเงินรวม" name="sum_add2" id="id_sum2" pattern="[0-9]" required readonly/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-bitcoin"></i>
                            <input class="m-wrap " type="text" placeholder="ยอดเงินในกรณีที่ค้างชำระการจ่ายเงิน" name="pay_add2" id="id_pay2" pattern="\d*" required value="0" />    
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