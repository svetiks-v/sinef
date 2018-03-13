var error = {
    "password_length" : "Длина пароля должна быть не менее 6 символов",
    "password_confirm": "Пароли должны быть одинаковыми"
};

function getError(key){
    if(error[key] != undefined){
        return error[key];
    }
    return key;
}