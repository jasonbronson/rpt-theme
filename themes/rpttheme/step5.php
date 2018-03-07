 <!--  Start final screen -->
                        <li class="tab-content active">
                            <form method="post" class="reservation-form" id="reservation-form">
                            <article class="information segment no-target segment-title">
                                <div class="row text-left">
                                    <div class="col-md-6 col-md-offset-2">
                                        <legend>Your Reservation</legend>
                                        <div class='form-row'>
                                            <div class="alert alert-danger carddeclined">
                                                <strong></strong> Credit Card Declined Go back and check card
                                            </div>

                                            <div class='form-group2 required'>

                                                <div class="col-md-6">
                                                    <label class='control-label'>Property:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="propertyname"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-2">
                                        <div class='form-row'>
                                            <div class='form-group2 required'>

                                                <div class="col-md-6">
                                                    <label class='control-label'>Condo/Room Type:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="condoroomtype"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-2">
                                        <div class='form-row'>
                                            <div class='form-group2 required'>

                                                <div class="col-md-6">
                                                    <label class='control-label'>Dates of Stay:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="datesofstay"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-2">
                                        <div class='form-row'>
                                            <div class='form-group2 required'>

                                                <div class="col-md-6">
                                                    <label class='control-label'>Guests 12 and over:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="guest12andover"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-2">
                                        <div class='form-row'>
                                            <div class='form-group2 required'>

                                                <div class="col-md-6">
                                                    <label class='control-label'>Guest under 12:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="guestunder12"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                </div>

                                <div class="col-md-6 col-md-offset-2">

                                    <div class='form-row'>
                                        <div class='form-group2 required'>

                                            <div class="col-md-12 col-md-offset-2">
                                                <label class='control-label'><input type="checkbox" name="policy_check" value="on" checked=""></label>
                                                <small>I have read and agree to the <a href="/rentalpolicy/" target="_blank" class="bluelink">Rental Policies</a> and authorize Rocky Point Travel to book this reservation and charge my credit card. I also understand that all renters must be at least 25 during spring break for Sonoran Sea, Sonoran Spa, Las Palomas and Las Palmas.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="?step=4" class="bookmystaybtn">Go Back</a>
                                    </div>
                                    <div class="col-md-6 ">
                                        <a class="bookmystaybtn" id="bookmyreservation" href="#">Book Reservation</a>
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