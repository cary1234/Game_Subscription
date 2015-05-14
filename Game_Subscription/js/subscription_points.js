// subscription points ajax
$(document).ready(function () {

    // process the form
    $('#points_convert').submit(function (event) {

        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'points_convert': $('select[name=points_convert]').val()
        };

        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: 'subscription_points.php', // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true
        })

                .always(function () {
                    $('#div_alert').remove();
                })

                // using the done promise callback
                .done(function (data) {
                    // log data to the console so we can see
                    //console.log(data);
                    // here we will handle errors and validation messages
                    if (!data.success) {
                        // handle errors for card number ---------------
                        if (data.errors.points_convert) {
                            $('#points-no_group').addClass('has-error'); // add the error class to show red input
                            $('#points-no_group').append('<div class="help-block">' + data.errors.points_convert + '</div>'); // add the actual error message under our input
                        }
                    } else {


                        $('#subs_status').remove();
                        $('#points_status').remove();

                        // ALL GOOD! just show the success message!
                        $('form#points_convert').append('<div id="div_alert" class="alert alert-success">' + data.message + '</div>');

                        $('#subs-status_group').append('<p class="text-success" id="subs_status">You have ' + data.subs_status + ' days of subscription</div>');
                        $('#points-status_group').append('<p class="text-success" id="points_status">' + data.points_status + ' points</div>');
                        // usually after form submission, you'll want to redirect
                        // window.location = '/thank-you'; // redirect a user to another page
                    }
                })

                // using the fail promise callback
                .fail(function (data) {

                    // show any errors
                    // best to remove for production
                    console.log(data);
                    $('form#points_convert').append('<div id="div_alert" class="alert alert-danger">' + data.message + '</div>');
                });




        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
