Registration = function () {
    var form_id = "#registrationForm",
            self = this,
            require = [
                "full_name", "name", "inn", 'kpp', 'ogrn', 'iku', 'okato', 'country_id', 'legal_address', 'fact_address', 'phone',
                'email', 'contact_person', 'bank_name', 'bik', 'cor_account_number'
            ],
            errors = {
                empty: "Необходимо заполнить все обязательные поля",
                valid_email: "Введите корректный email",
                email_uniq: "Пользователь с таким Email уже есть в системе"
            };

    this.init = function () {
        $("#BtnFormRegistration").on("click", function () {
            self.registrationUser();
        })

        $("#iku").on("keydown", function (event) {
           var val = $(this).val();
           console.log(val)
           if(val.length >= 20) $(this).val(val.substr(0, 19));
        })
        
        $('[name="subordinate_organization"]', form_id).on("click", function(){
            var prop = $(this).prop("checked");
            if(prop){
                $('#block_type_organization').hide().find("input:radio").prop("checked", false);
                
            }else{
                $('#block_type_organization').show().find("input:first").prop("checked", false);
            }
        })
    }

    this.registrationUser = function () {
        var valid = this.validUser();
        if (valid) {
            $.ajax({
                type: "POST",
                url: "/registration/save",
                dataType: 'json',
                data: $(form_id).serialize(),
                success: function (data) {
                    if (data.status == 'ok') {
                        open_dialog("ok", "На почту отправлено письмо с подтверждением регистрации", true);
						$('input[type="text"], textarea', form_id).val('');
                    } else {
                        bsAlert.error(data.message);
                        $('#QapTcha').empty().QapTcha({
                            txtLock: 'Переместите ползунок вправо для разблокировки',
                            txtUnlock: 'Форма разблокирована',
                            disabledSubmit: true,
                        });
                    }
                }
            });
        }
    }

    this.validUser = function () {
        var errors_value = {empty: true, email_uniq: true, valid_email: true};

        $('div', form_id).removeClass('has-error');
        $('.error').remove();
        $.each(require, function (key, value) {
            var val = $('[name="' + value + '"]', form_id).val();
            val = $.trim(val);
            if (val == "") {
				console.log(value)
                $('[name="' + value + '"]', form_id).parent('div').addClass('has-error');
                errors_value.empty = false;
            }
        })

        //проверка на заполняемость
        if (!errors_value.empty) {
            bsAlert.error('Заполните все обязательные поля');

            return false;
        }

        var email = $('[name="email"]', form_id).val();
        email = $.trim(email);
        if (email != "" && !isEmail(email)) {
            $('[name="email"]', form_id).parent('div').addClass('has-error');
            $('[name="email"]', form_id).after("<span class='color_red error'>" + errors.valid_email + "</span>");
            errors_value.valid_email = false;
            valid = false;
        }

        //проверка на заполняемость
        if (!errors_value.valid_email) {
            bsAlert.error('Неверный формат Email');

            return false;
        }

        return true;
    }




};

var registrtionClass = new Registration();


function isEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$(function () {
    registrtionClass.init();

    $(".number").on("keydown", function (event) {

        // Разрешаем: backspace, delete, tab и escape
        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 ||
                (event.keyCode == 65 && event.ctrlKey === true) || //Ctrl+A
                (event.keyCode == 86 && event.ctrlKey === true) || //Ctrl+V
                (event.keyCode >= 35 && event.keyCode <= 39)) {  //home, end, влево, вправо
            return;
        } else {
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    })
    $(".number").on("change", function(){
        var value = $(this).val();
        value = $.trim(value);
        
        var new_value = [];
        value=value.split("");
        for(var i = 0; i< value.length; i++){
            if (!isNaN(value[i])){
                new_value.push(value[i])
            }
        }
        value = new_value.join("");
        $(this).val(value)
    })



})
