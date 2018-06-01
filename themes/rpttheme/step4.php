                    <!--  Start Credit Card -->
                    <li class="tab-content active">
                        <form action="?step=5" method="post" class="reservationcc-form" id="reservationcc-form">

                            <input type="hidden" name="onstep" value="4">
                        <article class="information segment no-target segment-title">
                            <div class="row text-left">
                                <div class="col-md-6 col-md-offset-2">
                                    <legend>Credit Card Information</legend>
                                    <div class='form-row'>
                                        <div class='form-group required'>
                                            <div class="col-md-6">
                                                <label class='control-label'>Name on Card:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class='form-control' type='text' name="card_name" value="" id="card_name" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-2">
                                    <div class='form-row'>
                                        <div class='form-group required'>

                                            <div class="col-md-6">
                                                <label class='control-label'>Type:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="cc_type"><option>Visa</option><option>MasterCard</option></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-2">
                                    <div class='form-row'>
                                        <div class='form-group required'>

                                            <div class="col-md-6">
                                                <label class='control-label'>Credit Card Number:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class='form-control' type='text' name="cc_number" maxlength="16" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-2">
                                    <div class='form-row'>
                                        <div class='form-group required'>

                                            <div class="col-md-6">
                                                <label class='control-label'>Expiration Date:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="cc_exp_month">
                                                  <?php $ccmonths = array("01","02","03","04","05","06","07","08","09","10","11","12");
                                                  foreach($ccmonths as $value){
                                                    if($cc_exp_month == $value){
                                                        echo "<option selected>$value</option>";
                                                    }else {
                                                        echo "<option>$value</option>";
                                                     }
                                                  }
                                                   ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="cc_exp_year">
                                                <?php 
                                                for($a = date("Y"); $a < (date("Y") + 10); $a++ ){
                                                    $years[] = $a;
                                                }
                                                foreach($years as $value){
                                                  if($value == $cc_exp_year){
                                                    echo "<option value=\"" . substr($value, 2). "\" selected>$value</option>";
                                                  }else {
                                                    echo "<option value=\"" . substr($value, 2). "\">$value</option>";
                                                   }
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-2">
                                    <div class='form-row'>
                                        <div class='form-group required'>

                                            <div class="col-md-6">
                                                <label class='control-label'>Card Verification Number:</label>
                                            </div>
                                            <div class="col-md-3 smallfont">
                                                You can find the 3-digit CVC code on the back of your credit card.
                                            </div>
                                            <div class="col-md-3">
                                                <input class='form-control cc-ccv' type='text' name="cc_ccv" maxlength="3" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="?step=3" class="bookmystaybtn">Go Back</a>
                                </div>
                                <div class="col-md-6 ">
                                    <a class="bookmystaybtn" href="javascript:rpt.main.step('reservationcc-form');">Continue</a>
                                </div>
                            </div>
                        </article>
                        </form>
                    </li>
                    <!-- End credit card -->

                    <script>
$().ready(function() {
    rpt.main.loadForm('reservationcc-form');
});
</script>