 <!--  Start final screen -->
                        <li class="tab-content active">
                            <form method="post" class="reservation-form" id="reservationfinal-form">
                            <article class="information segment no-target segment-title">
                                <div class="row text-left">

                                <div class="alert alert-danger carddeclined">
                                    <strong> Credit Card Declined Go Back and Check Card. </strong>
                                </div>
                                
                                <?php $legendprinted=false; $fields = array('Name' => 'name', 'Email' => 'email', 'Daytime Phone' => 'daytimephone', 'Evening Phone' => 'eveningphone','Fax' => 'fax', ); $legend = "Your Information"; foreach($fields as $key => $value): ?>
                                    <div class="col-md-6 col-md-offset-2">
                                        <?php if(!$legendprinted): ?>
                                          <legend><?php echo $legend; $legendprinted=true; ?></legend>
                                        <?php endif; ?>
                                        <div class="form-row">
                                            <div class="form-group2 required">
                                                <div class="col-md-6">
                                                    <label class="control-label"><?php echo $key; ?>:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="<?php echo $value; ?>"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                <?php endforeach; ?> 

                                <?php $legendprinted=false; $fields = array('Address' => 'address', 'Address2' => 'address2', 'City' => 'city', 'State' => 'state','Zip' => 'zip', 'Country'=>'country' ); $legend = "Billing Address"; foreach($fields as $key => $value): ?>
                                    <div class="col-md-6 col-md-offset-2">
                                        <?php if(!$legendprinted): ?>
                                          <legend><?php echo $legend; $legendprinted=true; ?></legend>
                                        <?php endif; ?>
                                        <div class="form-row">
                                            <div class="form-group2 required">
                                                <div class="col-md-6">
                                                    <label class="control-label"><?php echo $key; ?>:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="<?php echo $value; ?>"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                <?php endforeach; ?>     

                                <?php $legendprinted=false; $fields = array('Property' => 'propertyname', 'Condo/Room Type' => 'condoroomtype', 'Dates of Stay' => 'datesofstay', 'Guests 12+ / Adults' => 'guest12andover','Guests under 12 / Children' => 'guestunder12', 'Total'=>'total' ); $legend = "Reservation Details"; foreach($fields as $key => $value): ?>
                                    <div class="col-md-6 col-md-offset-2">
                                        <?php if(!$legendprinted): ?>
                                          <legend><?php echo $legend; $legendprinted=true; ?></legend>
                                        <?php endif; ?>
                                        <div class="form-row">
                                            <div class="form-group2 required">
                                                <div class="col-md-6">
                                                    <label class="control-label"><?php echo $key; ?>:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="<?php echo $value; ?>"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                <?php endforeach; ?>     

                                    <div class="col-md-6 col-md-offset-2">
                                        <legend>Additional Information</legend>
                                        <div class='form-row'>
                                            <div class='form-group2 required'>
                                                <div class="col-md-6">
                                                    <label class='control-label'>Special Instructions for Resort:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <textarea id="instructions" name="instructions" cols="40" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                

                                <div class="col-md-6 col-md-offset-2">

                                    <div class='form-row'>
                                        <div class='form-group2 required'>

                                            <div class="col-md-6 ">
                                                    <label class='control-label'>Terms and Conditions:  <input type="checkbox" id="policy_check" name="policy_check" value="on" required></label>
                                                </div>
                                            <div class="col-md-6">
                                               
                                               <textarea cols="40" rows="5"><?php $p = get_post( 533 ); echo $p->post_content; ?></textarea>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                                <hr>

                                <div class="row">

                                     <div class="alert alert-danger carddeclined">
                                        <strong> Credit Card Declined Go Back and Check Card. </strong>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <a href="?step=4" class="bookmystaybtn">Go Back</a>
                                    </div>
                                    <div class="col-md-6 ">
                                    <input type="submit" value="Book Reservation" class="bookmystaybtn">
                                    
                                    </div>
                                </div>
                            </article>
                            </form>
                        </li>
<script>
    $().ready(function() {
        rpt.main.loadreservationdata();
    });
</script>