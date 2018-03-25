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
