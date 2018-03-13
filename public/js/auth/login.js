
    function authUser(){
    
        var form_id = "#loginForm";
        $('.validation-error-text').remove();
        $.ajax({
            url : "/auth/loginUser",
            data: $(form_id).serialize(),
            type: "POST",
            dataType: "json",
            success: function(response){
                
                if (response.status == true){
                    window.location.replace("/auth/redirect-auth");
                } else {
                    bsAlert.error(response.error);
                }

            },
            error: function(response){
                var errors = $.parseJSON(response.responseText);
                $.each(errors, function(index, value) {
                    var selector = ("#" + index);
                    $(selector).parent().append("<span class='validation-error-text' id='" + index + "_error'>" + value + "</span>")
                });
            }

        })
    }