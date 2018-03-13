/**
 * ф-я открытия диалогового окна
 * @param {String} name идентификатор окна
 * @param {String} html содержиимое окна
 * @param {Boolen} close_button надо ли кнопку закрытия
 */
var open_dialog = function(name, html, close_button, title_window, buttons)
{
    var title_window = title_window || "Уведомление";
    var buttons_list = [];

    

    if (buttons != undefined) {
        buttons_list.push(buttons);
    }
    
    if(close_button == undefined || close_button == true){
        buttons_list.push({
            text: "Закрыть",
			'class': 'but_close',
            click: function(){$('.' + name).dialog("close");$('.' + name).remove();}
        });
    }

    $('.' + name).remove();
    $("<div class='" + name + "'></div>")
        .html(html)
        .dialog({
            autoOpen:false,
            title: title_window,
            width: 'auto',
            modal:true,
            resizable: false,
            closeText: ''
        }).dialog("open");
        
    if(close_button == undefined || close_button == true){
       $('.' + name).dialog({
           buttons: buttons_list
       }) 
    }
}

/**
 * Диалоговое окно просмотра информации по оферте
 * @param {type} number_offer
 * @returns {undefined}
 */
var viewOfferDetails = function (number_offer)
{
    $.ajax({
        type: 'POST',
        url: '/offers/info/' + number_offer,
        success: function (data) {
            $('.dialog #info-offer').remove();
            var buttons = {
                'Закрыть': function () {
                    $(this).dialog("close");
                }
            };
            $('<div class="dialog" id="info-offer"></div>').html(data)
                    .dialog({
                        autoOpen: false,
                        title: "Информация по оферте",
                        modal: true,
                        closeText: "",
                        width: 750,
                        resizable: false,
                        buttons: buttons

                    }).dialog("open");

        }
    });
};
