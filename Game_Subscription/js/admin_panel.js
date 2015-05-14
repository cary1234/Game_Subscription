$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    
	$(document).ready(function() {
		$("#btn_delete").click(function(event) {
			alert("delete");
		});
	});
	
	$(document).ready(function() {
		$("#btn_edit").click(function(event) {
			src="functions/edit_User.php"
		});
	});
	
	$(document).ready(function() {
		$("#btn_message").click(function(event) {
			src="functions/email.php"
		});
	});
});