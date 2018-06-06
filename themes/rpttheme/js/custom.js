var rpt = rpt || {};

rpt.main = {

    resort: 0,
    rates: [],
    getReservation: function(){

        var start = $("#arrival").val();
        var stop = $("#depart").val();
        var adults = $("#adults").val();
        var kids = $("#kids").val();
        var condo = $("#condo").val();
        
        if(start == "" || stop == "" || adults == "" || condo == ""){
            alert('please choose all options before hitting book now');
            return;
        }
        if(kids == ""){
            kids = 0;
        }


        //set some text for travel dates
        $('.arrival-date').html(start);
        $('.depart-date').html(stop);
        $('.num_adults').html(adults);
        $('.num_children').html(kids);
        $('.trip-condo-name').html($('#condovalue').val());
        $('.trip-resort-name').html($('#resortvalue').val());

        var object;
        $.ajax({
            url: 'https://api.rockypointtravel.com/rates/getrate?condo=' + condo + '&adults=' + adults + '&kids=' + kids + '&start=' + start + '&stop=' + stop,
            method: 'get',
            data: '',
            dataType: 'text',
            complete: function(e, xhr) {
                if (e.status === 200) {
                     object = JSON.parse(e.responseText);
                    //$('#dashboard-time').html(object.data);
                    if(object.Error != null){
                        alert(object.Error);
                    }
                    rpt.main.rates = object;
                    rpt.main.setPricing(object);
                    
                    var reservationdata = {};
                    reservationdata.start = start;
                    reservationdata.stop = stop;
                    reservationdata.adults = adults;
                    reservationdata.kids = kids;
                    reservationdata.condoname = $('#condovalue').val();
                    reservationdata.condo = condo;
                    reservationdata.resort = $('#resortvalue').val();
                    reservationdata.total = rpt.main.rates.Total;
                    console.log("RATES: " + reservationdata);
                    rpt.main.setCookieData('reservationdata', reservationdata);

                } else {
                    console.log("reservation call failed");
                }
            }

        });


        



    },

    setPricing: function(object){

        var travelRates = object.Daily;
        if(travelRates == null){
            return;
        }
        var table;
        for (var i = 0; i < travelRates.length; i++){
            var obj = travelRates[i];    
            var name = obj.Season;
            var rates = obj.Price;
            var day_of_week = obj.Day_of_week;
            var subtotal = obj.Total;
            var date = obj.Date;
            var extra = obj.Extra;
            table += '<tr><td>' + name + '</td><td>' + date + '</td><td>' + day_of_week + '</td><td>' + rates + '</td><td>' + extra + '</td><td>' + subtotal + '</td></tr>';

            //console.log("** " + subtotal);

        }
        $('#trip-pricing-table').html('<tr><th>Season</th><th>Date</th><th>Day of Week</th><th>Price</th><th>Extra</th><th>Total</th></tr>' + table);
        $('#trip-pricing-subtotal').html('Subtotal: ' + object.Subtotal);
        $('#trip-pricing-taxes').html('Taxes & Fees: ' + object.Tax);
        $('#trip-pricing-total').html('Total: ' + object.Total);

        //call the click on tab pricing
        $('#banner .banner-bg').trigger('owl.goTo', 1);

    },

    getAdults: function(){

        $.ajax({
            url: 'https://api.rockypointtravel.com/data/getadults',
            method: 'get',
            data: '',
            dataType: 'text',
            complete: function(e, xhr) {
                if (e.status === 200) {
                    object = JSON.parse(e.responseText);

                    if(object.Error != null){
                        alert('Error loading adults');
                    }

                    for (var a=0; a < object.length; a++){
                        var resortid = object[a].resort_id;
                        var resortname = object[a].resort_name;
                        $("#resortselect").append(
                            $('<option>', {value:resortid, text:resortname})
                        );
                        $("#resortdropdown").append(
                            $("<li data-value='" + resortid + "'>").text(resortname)
                        );
                    }


                } else {
                    alert('Error loading adults');
                }
            }

        });

    },
    getResorts: function(){

        $.ajax({
            url: 'https://api.rockypointtravel.com/data/getresorts',
            method: 'get',
            data: '',
            dataType: 'text',
            complete: function(e, xhr) {
                if (e.status === 200) {
                    object = JSON.parse(e.responseText);

                    if(object.Error != null){
                        console.log('Error loading resorts');
                    }

                    for (var a=0; a < object.length; a++){
                        var resortid = object[a].resort_id;
                        var resortname = object[a].resort_name;
                        $("#resortselect").append(
                            $('<option>', {value:resortid, text:resortname})
                        );
                        $("#resortdropdown").append(
                            $("<li data-value='" + resortid + "'>").text(resortname)
                        );
                    }


                } else {
                    console.log('Error loading resorts');
                }
            }

        });

    },
    setCookieData: function(cookieName, data){
        
        //try{
            var exists = rpt.main.getCookieData(cookieName);
            //console.log(exists);
            if(exists){
                
                exists = JSON.parse(exists);
                for(var item in exists){
                    var found = false;
                    for(var dataItem in data){
                        if(item == dataItem){
                            //if same name then use recent update as latest
                            found = true;
                        }
                    }
                    if(!found){
                        //merge data
                        data[item] = exists[item];
                    }
                    //console.log(exists[item]);
                }
                console.log(data);
                //data = exists;
                //data = Object.assign(exists, data);
            }
        /*}catch(e){
            console.log('Error: ' + e);
        }*/
        
        Cookies.set(cookieName, data, { expires: 1 });
        //console.log(data);
    },
    getCookieData: function(cookieName){
        return Cookies.get(cookieName);
    },
    loadreservationdata: function(){
        var data = JSON.parse(rpt.main.getCookieData('reservationdata'));
        console.log(data);
        //reservation details
        $('.propertyname').html(data.resort);
        $('.condoroomtype').html(data.condoname);
        $('.datesofstay').html(data.start + " - " + data.stop);
        $('.guest12andover').html(data.adults);
        $('.guestunder12').html(data.kids);
        $('.total').html("$" + data.total);
        
        //customer information
        $('.name').html(data.fname + ' ' + data.middle + ' ' + data.lname );
        $('.email').html(data.email);
        $('.daytimephone').html(data.dayphone);
        $('.eveningphone').html(data.eveningphone);
        $('.fax').html(data.fax);

        //billing address
        $('.address').html(data.address1);
        $('.address2').html(data.address2);
        $('.city').html(data.city);
        $('.state').html(data.state);
        $('.zip').html(data.zip);
        $('.country').html(data.country);
        
        //$('#instructions').html();

    },
    step: function (formName){

        
        //var temp = $('#' + formName).serializeArray();
        var paramObj = {};
        $.each($('#' + formName).serializeArray(), function(_, kv) {
        if (paramObj.hasOwnProperty(kv.name)) {
            paramObj[kv.name] = $.makeArray(paramObj[kv.name]);
            paramObj[kv.name].push(kv.value);
        }
        else {
            paramObj[kv.name] = kv.value;
        }
        });
        console.log(paramObj);
        this.setCookieData('reservationdata', paramObj);
        document.getElementById(formName).submit();
    },
    loadForm: function(formName){
        
        var data = JSON.parse(this.getCookieData('reservationdata'));
        var formElement = document.getElementById(formName);
        populate(formElement, data);
        console.log(data);
        //check if credit card name and fill in that form field
        if(formName == "reservationcc-form"){
            var name = data.fname + " " + data.lname;
            $('#card_name').val(name);
        }

    },
    getCondo: function(resort){

        //console.log("resort selected: *" + resort + "*");

        $("#condoselect")
            .find('option')
            .remove()
            .end()
            .val('');
        $("#condodropdown")
            .find('li')
            .remove()
            .end()
            .val('');

        $("#condovalue").val('');
        $("#condo").val('');

        $.ajax({
            url: 'https://api.rockypointtravel.com/data/getcondos?resort=' + resort,
            method: 'get',
            data: '',
            dataType: 'text',
            complete: function(e, xhr) {
                if (e.status === 200) {
                    object = JSON.parse(e.responseText);

                    if(object.Error != null){
                        alert('Error loading resorts');
                    }

                    //console.log(object[2]);
                    for (var a=0; a < object.length; a++){
                        //console.log(object[a]);
                        var condoid = object[a].condo_id;
                        var condoname = object[a].condo_name;
                        $("#condoselect").append(
                            $('<option>', {value:condoid, text:condoname})
                        );
                        $("#condodropdown").append(
                            $("<li data-value='" + condoid + "'>").text(condoname)
                        );
                    }


                } else {
                    alert('Error loading resorts');
                }
            }

        });





    },



    /* //!Initialize Function
     ------------------------------*/
    initialize: function() {


        //load resorts list
        rpt.main.getResorts();

        //hide the card declined messages
        $(".carddeclined").hide();

        $('#booknowbtn').click(function (e) {
            e.preventDefault();
            rpt.main.getReservation();
            //$('.tab-pricing').show();
        });

        $('#reservationinformation-form').submit(function(){
            event.preventDefault();
            var email = $('#email').val();
            var emailverify = $('#emailverify').val();
            if(email == emailverify){
                rpt.main.step('reservationinformation-form');
            }else{
                alert('Email and email verify fields must match');
            }
        });
        $('#reservationbilling-form').submit(function(){
            event.preventDefault();
            rpt.main.step('reservationbilling-form');
        });
        $('#reservationcc-form').submit(function(){
            event.preventDefault();
            rpt.main.step('reservationcc-form');
        });

        $('#btn-creditcard').click(function (e) {
            e.preventDefault();
            $('#banner .banner-bg').trigger('owl.goTo', 5);
            //set reservation text
            $('.condoroomtype').html( $('#condovalue').val() );
            $('.datesofstay').html($('#arrival').val() + ' - ' + $('#depart').val());
            $('.guest12andover').html($('#adultvalue').val());
            $('.guestunder12').html($('#childrenvalue').val());
            $('.propertyname').html($('#resortvalue').val());
            

        });


        $('#gobackbtn1').click(function (e) {
            e.preventDefault();
            $('#banner .banner-bg').trigger('owl.goTo', 0);
        });
        $('#gobackbtn2').click(function (e) {
            e.preventDefault();
            $('#banner .banner-bg').trigger('owl.goTo', 1);
        });


        $('#reservationfinal-form').submit(function (e) {
            e.preventDefault();

            var myform = $('.reservation-form');
             // Find disabled inputs, and remove the "disabled" attribute
            var disabled = myform.find(':input:disabled').removeAttr('disabled');
          

            // re-disabled the set of inputs that you previously enabled
            disabled.attr('disabled','disabled');
            var data = JSON.parse(rpt.main.getCookieData('reservationdata'));
            data.instructions = $('#instructions').val();
            var res = $.param(data);
            console.log("CookieData");
            console.log(res);
            //'instructions=' + str
            $.ajax({
                url: 'https://api.rockypointtravel.com/save/order',
                method: 'post',
                data: res,
                dataType: 'json',
                complete: function(e, xhr) {
                    if (e.status === 200) {
                        object = JSON.parse(e.responseText);
                        console.log(object.reason);

                        if(object.charge_success){
                            $(".carddeclined").hide();
                            window.location.href = '/thankyou/';
                        }else{
                            $(".carddeclined").show();
                        }

                    } else {
                        $(".carddeclined").show();
                        console.log("charging order failed");
                    }
                }

            });



        });


        $('#resortlist').click(function (e) {
            e.preventDefault();
            var status = $('#resortdropdown').css("display");
            if(status == "none"){
                $('#resortdropdown').slideToggle(100);
            }
        });

        $('body').on('click', '#resortdropdown li', function(e) {
            e.preventDefault();
            var val = $(this).attr('data-value');
            var resortName = $(this).html();
            $('#resortvalue').val(resortName);
            console.log("@RESORT@" + resortName);
            $('#resort').val(val);
            $('#resortdropdown').slideUp(100);
            rpt.main.getCondo(val);
        });

        $('body').on('click', '#condolist', function(e) {
            e.preventDefault();
            $('#condodropdown').slideToggle(100);
        });

        $('body').on('click', '#condodropdown li', function(e) {
            e.preventDefault();
            var val = $(this).attr('data-value');
            var condoName = $(this).html();
            $('#condovalue').val(condoName);
            console.log("@@" + condoName);
            $('#condo').val(val);

            //$('#condodropdown').slideUp(100);
            //rpt.main.getCondo(condo);
        });

        $('#adultlist').click(function (e) {
            e.preventDefault();
            $('#adultsdropdown').slideToggle(100);

        });

        $('#adultsdropdown li').click(function (e) {
            e.preventDefault();
            var val = $(this).attr('data-value');
            var value = $(this).html();
            $('#adultvalue').val(value);
            $('#adults').val(val);

        });

        $('#childrenlist').click(function (e) {
            e.preventDefault();
            $('#childrendropdown').slideToggle(100);

        });

        $('#childrendropdown li').click(function (e) {
            e.preventDefault();
            var val = $(this).attr('data-value');
            var value = $(this).html();
            $('#childrenvalue').val(value);
            $('#kids').val(val);

        });


        $(document).ajaxStart(function() {
            console.log("ajax start");
            $(".loading").show();
        });

        $(document).ajaxStop(function() {
            $(".loading").hide();
        });



    }

};

//fire all engines!
$().ready(function() {
    rpt.main.initialize();
});