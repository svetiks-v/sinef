$(document).ready(function(){

		$('<div>').attr('id','opaco').addClass('hidden').appendTo('body');
		$('<div>').attr('id','popup').addClass('hidden').appendTo('body');

		$(document).keypress(function(e) {
				if( !$('#popup').hasClass('hidden') ) {
						if (e.keyCode == 27) closePopup();
				}
		});
});

function flashMenu( html ) {
		//return;
		//added.seroga переменная usrlogined - глобальная, по другому придумать непалучается
		/*if ((html=='help-resume')&&(userlogined)) {
				window.location.href='/request/resume';
				return;
		}*/

		var opaco = $('#opaco');
		var popup = $('#popup');
		$.post("/application/data/popup", {html : html},
		function(data){
				if($(popup).hasClass('hidden')) {
					 //if($.browser.msie) {
							 $(opaco).height($(document).height()).toggleClass('hidden');
					 //} else {
					//		 $(opaco).height($(document).height()).toggleClass('hidden').fadeTo('slow', 0.7);
					 //}
					 $(popup).html(data).toggleClass('hidden').fadeTo('slow', 1, function(){
							 $('a',popup).eq(0).focus();
					 });
					 $(popup).css({'margin-left': - $('div.windownew',popup).width()/2 + 'px', 'margin-top':- $('div.windownew',popup).height()/2 + 'px'});
			 } else {
					 $(opaco).toggleClass('hidden').removeAttr('style');
					 $(popup).toggleClass('hidden').fadeOut('slow',1);
			 }
		} , "text");
}

function openModalWindow(postData, onLoad) {
		var opaco = $('#opaco');
		var popup = $('#popup');
		$.post("/index/popup/", postData,
		function(data){
				if($(popup).hasClass('hidden')) {
					 if($.browser.msie) {
							 $(opaco).height($(document).height()).toggleClass('hidden');
					 } else {
							 $(opaco).height($(document).height()).toggleClass('hidden').fadeTo('slow', 0.7);
					 }
					 $(popup).html(data).toggleClass('hidden').fadeTo('slow', 1, function(){
							 $('a',popup).eq(0).focus();
					 });
					 $(popup).css({'margin-left': - $('div.windownew',popup).width()/2 + 'px', 'margin-top':- $('div.windownew',popup).height()/2 + 'px'});
           if(onLoad && typeof(onLoad) == "function"){
             onLoad();
           }
			 } else {
					 $(opaco).toggleClass('hidden').removeAttr('style');
					 $(popup).toggleClass('hidden').fadeOut('slow',1);
			 }
		} , "text");
}

function closePopup() {
		$('#opaco').fadeOut('slow',function(){
				$(this).toggleClass('hidden').removeAttr('style');
		});
		$('#popup').fadeOut('slow',function(){
				$(this).toggleClass('hidden');
		});
		return false;
}

// Add Oleg. Это простой алерт для показа сообщения. Стили взяты из Popup который выше
function openPopup(Title, Text, Width, Height) {
	Width=Width==undefined?360:Width;
	Height=Height==undefined?260:Height;
	$('#alert1').remove();
	$('<div id="alert1" style="display:none;">').html('<div id="bgwnd" class="windownew"><div class="window_content"><div class="bgwindow"><div class="headline" style="margin:0 7px 0 0;"><h2>'+Title+'</h2></div></div></div></div>').appendTo('body');
	$('.bgwindow').append('<div class="txt" style="padding:10px 30px;min-height:86px;text-align:center;"><h3>'+Text+'</h3></div>')
	.css({'width':'560','height':'164','b1order':'3px solid #A80101','bo1rder-radius':'5px','b1ackground-color':'#f2f2f3'});
	$('.txt').append('<div style="text-align: center"><div class="sendl" onclick="$.closeDOMWindow(); return false;" style="float:none;">Закрыть</div></div>');
	$('.sendl').css({'margin-left':'auto','margin-right':'auto','margin-top':15});
	$.openDOMWindow({windowSourceID:'#alert1',	height:180, width:580,	windowPadding:2, windowBGColor:'Transparent', overlayOpacity:1, overlayOpacity:80});
}
//End add Oleg;

/** И в продолжении всплывающих окошек **/

/**
 * открывает окошко с контентом по урлу
 */
function openHTTPPopup(url, Title, postData, Alpha){
  if(!postData) postData = {};
  if(!Title) Title = '';
  $.ajax({
      url:url,
      data:postData,
      type:'POST',
      dataType:'html',
      success:function(data){
        $('#alert1').remove();
       /* $('<div id="alert1" style="display:none;">').html('<div id="bgwnd" class="windownew"><div class="window_content"><div class="bgwindow" style="height:auto;"><div class="headline" style="margin:0 7px 0 0;"><h2>'+Title+'</h2></div></div></div></div>').appendTo('body');
        $('.bgwindow').append('<div class="txt" id="hrModalTxt" style="padding:10px 30px;min-height:86px;"></div>');
        $.openDOMWindow({windowSourceID:'#alert1',width:560,windowPadding:2, windowBGColor:'Transparent', overlayOpacity:80});      
        $('#DOMWindow #hrModalTxt').html(data);
        $('#alert1').remove();*/
        if(Alpha)
          hrAlphaPopup(data); 
        else
          hrPopup(Title,data);
      }
   });
}

/*типа кривой аналог openDOMWindow аналог. стиль красные окошки*/
$(document).ready(function(){
  $('.domHrModal').bind('click',function(){
    var Title = ($(this).attr('title')) ? $(this).attr('title') : $(this).text();
    openHTTPPopup($(this).attr('href'), Title);
    return false;
  });
});

/** что то типа хинта **/
/** хз как вязаться.... пока не придумал... Пока будет так - распологаем слой с контентом хинта после элемента на кот вешаем хинт **/
/** при этом береться не весь слой а его содержимое... **/
(function($){
  $.fn.hint = function(){
    $(this).bind('mouseover',function(e){
      if($('#hrHint').length) return;
      var x = 0;
      var y = 0;
      if($.browser.msie){
        x = e.clientX;
        y = e.clientY;
      } else {
        x = e.pageX;
        y = e.pageY;
      }
      hintcontent = $(this).next();
      var hrHint = $('<div id="hrHint" class="hrHint" style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0); opacity:0;position:absolute; left:'+(x+10)+'px; top:'+(y+15)+'px; padding:5px 10px; box-shadow: 0 0 10px rgba(0,0,0,0.6); text-align:left; background:white; border:1px solid silver; border-radius:5px;">'+hintcontent.html()+'</div>');      
      $('body').append(hrHint);
      hrHint.animate({opacity:1},"1500","swing");
      return false;
    });
    $(this).bind('mouseout',function(){
      $('#hrHint').remove();
    });
  }
})(jQuery);

/** заменяем контент всплывающего окна на свой с кнопочкой "Назад"... пока не уверен что особо нужен **/
/** точнее сказать временая замена соддержимого. Основная задумка вывод сообщений в попап окошках**/
//var lastpopuphtml = '';
function chengeContent(conteiner, content, noBack){
    //lastpopuphtml = conteiner.html();
    conteiner.find('*').hide();
    content.addClass('new_content');
    if(!noBack) {
/*      var back = $('<div style="padding-top: 10px; padding-left:'+parseInt(conteiner.width()/2-70)+'px;"><div class="sendl" style="float:none;">Назад</div></div>');*/
      var back = $('<div style="padding-left:210px;"><div class="conf_previous_step_btn">Назад</div></div>');
      back.bind('click',function(){
        //conteiner.empty().html(lastpopuphtml);
        conteiner.find('.new_content').remove();
        conteiner.find('*').show();
        return false;
      });
      content.append(back);
    }
    conteiner.append(content);
}

/** сюда же добавим еще функцию сотворяющую кнопочки **/
/** еще корявая будет переделываться **/
function hrButton(text, callback, type){
  var b = $('<div style="float:none;margin: 0;">'+text+'</div>');
  if (type=="red"){
    b.addClass('sendr');
  } else {
    b.addClass('sendl');
  }
  b.bind('click',callback);
  return b;
}
/** пока тоже кривовата*/
(function($){
  $.fn.hrButton  =  function(option){
    if(!$(this).find('#btndiv').lenght){
      $(this).append('<div id="btndiv" style="padding-top: 15px; padding-left:'+parseInt($(this).width()/2-(option.length*70))+'px;"></div>');
    }
    var tbl = $('<table><tr></tr></table>');   
    var btndiv = $(this).find('#btndiv');
    btndiv.append(tbl);
    for(var i in option){
      var type = (option[i].type) ? option[i].type:null;
      var button = hrButton(option[i].title, option[i].callback,type);
      var td = $('<td></td>');
      if(i>0)
        td.css('padding-left','5px');
      td.append(button);
      tbl.append(td); 
    }
  }
})(jQuery);

function updateBalance(){
  $.ajax({
    url:'/balance/get-balance',
    success:function(balance){
       $('#balancespan').html(balance);
    }
  });
}

function hrPopup(title,content){
  $('.txt').remove();
  $('<div id="alert1" style="display:none;">').html('<div id="bgwnd" class="windownew"><div class="window_content"><div class="bgwindow" style="height:auto;"><div class="headline" style="margin:0; padding-top:0px"><h2>'+title+'</h2><a href="javascript:;" onclick="javascript:$.closeDOMWindow();"><img src="/images/popup/close.gif" width="20" height="19" align="" class="window_close"></a></div></div></div></div>').appendTo('body');
  $('.bgwindow').append('<div class="txt" id="hrModalTxt" style="padding:10px 30px;min-height:86px;"></div>');
  $.openDOMWindow({windowSourceID:'#alert1',width:565,windowPadding:2, windowBGColor:'Transparent', overlayOpacity:80});      
  $('#DOMWindow #hrModalTxt').append(content);
  $('#alert1').remove();
}
/** 
 *  еще один Алерт
 * @param text - текст подсказки 
 * @param options - обьект(необязательный). Имеет поля title для указания заголовка и callback для функции после закрытия окна, ибо приостановить код нельзя
*/
function hrAlert(text,options){
  var _options = {
    'title':'Подсказка',
    'callback':null
  }
  if(options){
    for(var i in options){
      _options[i] = options[i];
    }
  }
  var _close = function(){$.closeDOMWindow();if(typeof(_options.callback) == 'function') _options.callback();}
  var p = $('<p></p>');
  hrPopup(_options.title, p);
  p.text(text);
  p.hrButton([{title:'Закрыть', callback:_close, type:'red'}]);
  return false;
}
/**
 * прозрачное окошко
 */
function hrAlphaPopup(content){
  $('.txt').remove();
  $('<div id="alert1" style="display:none;">').html('<div class="Abgwindow"><div class="AlphaPopupTitle" style="height:30px;"><a href="javascript:$.closeDOMWindow();"><img src="/images/icons/delete.png" width="30" height="30" align="" class="window_close"></a></div></div>').appendTo('body');
  $('.Abgwindow').append('<div class="txt" id="hrModalTxt" style="padding:10px 30px;min-height:86px;"></div>');
  $.openDOMWindow({windowSourceID:'#alert1',width:560,windowPadding:2, windowBGColor:'Transparent', overlayOpacity:80});      
  $('#DOMWindow #hrModalTxt').append(content);
  $('#alert1').remove();
}

function avatarFullSize(img){
	var content = '<div style="display:block; overflow:hidden"><img src="/avatar/'+ img +'"></div>';
	$.modal(content, {overlayClose:true, minHeight:'333', minWidth:'500'});
}