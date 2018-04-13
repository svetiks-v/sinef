<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" data-skip-moving="true">(function(w, d, n) {var cl = "bx-core"; var ht = d.documentElement; var htc = ht ? ht.className : undefined; if (htc === undefined || htc.indexOf(cl) !== - 1){return; }var ua = n.userAgent; if (/(iPad;)|(iPhone;)/i.test(ua)){cl += " bx-ios"; } else if (/Android/i.test(ua)){cl += " bx-android"; }cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch"); cl += w.devicePixelRatio && w.devicePixelRatio >= 2? " bx-retina": " bx-no-retina"; var ieVersion = - 1; if (/AppleWebKit/.test(ua)){cl += " bx-chrome"; } else if ((ieVersion = getIeVersion()) > 0){cl += " bx-ie bx-ie" + ieVersion; if (ieVersion > 7 && ieVersion < 10 && !isDoctype()){cl += " bx-quirks"; }} else if (/Opera/.test(ua)){cl += " bx-opera"; } else if (/Gecko/.test(ua)){cl += " bx-firefox"; }if (/Macintosh/i.test(ua)){cl += " bx-mac"; }ht.className = htc ? htc + " " + cl : cl; function isDoctype(){if (d.compatMode){return d.compatMode == "CSS1Compat"; }return d.documentElement && d.documentElement.clientHeight; }function getIeVersion(){if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)){return - 1; }var rv = - 1; if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)){rv = 11; } else if (!!d.documentMode && d.documentMode >= 10){rv = 10; } else if (!!d.documentMode && d.documentMode >= 9){rv = 9; } else if (d.attachEvent && !/Opera/.test(ua)){rv = 8; }if (rv == - 1 || rv == 8){var re; if (n.appName == "Microsoft Internet Explorer"){re = new RegExp("MSIE ([0-9]+[\.0-9]*)"); if (re.exec(ua) != null){rv = parseFloat(RegExp.$1); }} else if (n.appName == "Netscape"){rv = 11; re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)"); if (re.exec(ua) != null){rv = parseFloat(RegExp.$1); }}}return rv; }})(window, document, navigator);</script>
        <title>{{ config('app.name') }}</title>

        <!-- Styles -->

        <link href="{{ asset('css/kernel_main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bitrix_themplate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Scripts-->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="body">
            <div class="body_media"></div>
            <div class="top-row">
                <div class="container maxwidth-theme">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-text">
                                        <div class="email">
                                            <i class="icon icon-envelope"></i>
                                            <a href="mailto:info@sinef-group.com">info@sinef-group.com</a>
                                        </div>
                                        <div class="phone">
                                            <i class="icon icon-phone"></i> 
                                            +7 (495) 740-43-37
                                        </div>
                                        <div class="skype hidden-xs">
                                            <i class="icon icon-skype"></i>
                                            sinef_group
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="social-icons">

                                    </div>								
                                </div>
                                <div class="col-md-3">
                                    <div class="search" id="title-search">
                                        <form action="/search/">
                                            <input class="search-input" id="title-search-input" type="text" name="q" value="" placeholder="Поиск" size="40" maxlength="50" autocomplete="off" />
                                            <button class="btn-search" type="submit" name="s" value="Поиск"><i class="icon icon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="menu-type-2">
                <div class="container maxwidth-theme">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="{{asset('/public/images/logo.png')}}" alt="ООО Инвестиционно-проектная группа" />
                                        </a>										
                                    </div>
                                </div>
                                <div class="col-md-4 hidable">
                                    <div class="top-description">
                                        <p style="text-align: center;color:#271474;margin-bottom: 0;">НАДЁЖНОЕ ЭЛЕКТРОСНАБЖЕНИЕ</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="top-callback clearfix hidable pull-right">
                                        <div class="phone">
                                            <i class="icon icon-phone"></i>
                                            +7 (495) 740-43-37	
                                        </div>
                                        <div class="callback" data-event="jqm" data-param-id="29" data-name="callback"><span>Заказать обратный звонок</span></div>
                                    </div>
                                    <button class="btn btn-responsive-nav" data-toggle="collapse" data-target=".nav-main-collapse">
                                        <i class="icon icon-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @include('layouts.menu.menu');
            </header>
            <div role="main" class="main">
                <section class="page-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 id="pagetitle">@yield('title')</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb" id="navigation">
                                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="/" title="Главная" itemprop="url">
                                            <span itemprop="title">Главная</span>
                                        </a>
                                    </li>
                                    <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a itemprop="url" style="display:none;" href="https://allcorp.aspro-demo.ru/company/"></a>
                                        <span itemprop="title">О компании</span>
                                    </li>
                                </ul>									</div>
                        </div>
                    </div>
                </section>
                <div class="container maxwidth-theme">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                
                               <?if(isset($sidebar)):
                                   echo $sidebar;?>
                                <div class="col-md-9">
                                <?else:?>
                                <div class="col-md-12">
                                <?endif?>
                            
                                    @yield('content')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="container maxwidth-theme">
                <div class="row">
                    <div class="col-md-3">
                        <div class="copy">
                            © 2013-2017 "SINEF Group"<br />Все права защищены.							<br /><br />
                            115280, г. Москва, ул. Автозаводская,<br />дом 17, корпус 3
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="/company/">О компании</a></li>
                                        <li><a href="/info/news/">Новости</a></li>
                                        <li><a href="/info/faq/">Вопросы и ответы</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="/info/articles/">Статьи</a></li>
                                        <li><a href="/info/more/">Возможности</a></li>
                                        <li><a href="/contacts/">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="email">
                                <i class="icon icon-envelope"></i>
                                <a href="mailto:info@sinef-group.com">info@sinef-group.com</a>
                            </div>
                            <div class="phone">
                                <i class="icon icon-phone"></i>
                                +7 (495) 740-43-37
                            </div>
                            <div class="skype">
                                <i class="icon icon-skype"></i>
                                sinef_group
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bx-composite-banner"></div>
            </div>
        </footer>
        <div class="bx_areas">
        </div>

        <script type="text/javascript" src="{{asset('/public/js/jquery/jquery-1.8.3.min.js')}}"></script>
        <script type="text/javascript">if (!window.BX)window.BX = {}; if (!window.BX.message)window.BX.message = function(mess){if (typeof mess == 'object') for (var i in mess) BX.message[i] = mess[i]; return true; };</script>

        <script type="text/javascript"  src="{{asset('/public/js/kernel_main.js')}}"></script>
        <script type="text/javascript">BX.setJSList(['/bitrix/js/main/core/core.js', '/bitrix/js/main/core/core_ajax.js', '/bitrix/js/main/json/json2.min.js', '/bitrix/js/main/core/core_ls.js', '/bitrix/js/main/core/core_fx.js', '/bitrix/js/main/session.js', '/bitrix/js/main/core/core_window.js', '/bitrix/js/main/core/core_popup.js', '/bitrix/js/main/core/core_date.js', '/bitrix/js/main/utils.js', '/bitrix/js/main/core/core_tooltip.js', '/bitrix/js/main/rating_like.js', '/bitrix/templates/aspro-allcorp/js/jquery.actual.min.js', '/bitrix/templates/aspro-allcorp/js/jquery.fancybox.js', '/bitrix/templates/aspro-allcorp/vendor/jquery.easing.js', '/bitrix/templates/aspro-allcorp/vendor/jquery.appear.js', '/bitrix/templates/aspro-allcorp/vendor/jquery.cookie.js', '/bitrix/templates/aspro-allcorp/vendor/bootstrap.js', '/bitrix/templates/aspro-allcorp/vendor/flexslider/jquery.flexslider-min.js', '/bitrix/templates/aspro-allcorp/vendor/jquery.validate.min.js', '/bitrix/templates/aspro-allcorp/js/jquery.uniform.min.js', '/bitrix/templates/aspro-allcorp/js/jqModal.js', '/bitrix/templates/aspro-allcorp/js/detectmobilebrowser.js', '/bitrix/templates/aspro-allcorp/js/general.js', '/bitrix/components/bitrix/search.title/script.js', '/bitrix/templates/aspro-allcorp/js/jquery.inputmask.bundle.min.js']);</script>
        <script type="text/javascript">BX.setCSSList(['/bitrix/js/main/core/css/core.css', '/bitrix/js/main/core/css/core_popup.css', '/bitrix/js/main/core/css/core_date.css', '/bitrix/js/main/core/css/core_tooltip.css', '/bitrix/templates/aspro-allcorp/css/bootstrap.css', '/bitrix/templates/aspro-allcorp/css/fonts/font-awesome/css/font-awesome.css', '/bitrix/templates/aspro-allcorp/vendor/flexslider/flexslider.css', '/bitrix/templates/aspro-allcorp/css/jquery.fancybox.css', '/bitrix/templates/aspro-allcorp/css/theme-elements.css', '/bitrix/templates/aspro-allcorp/css/theme-responsive.css', '/bitrix/templates/.default/ajax/ajax.css', '/bitrix/templates/aspro-allcorp/components/aspro/social.info.allcorp/corp/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/search.title/corp/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/menu/top/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-big-banners/style.css', '/bitrix/templates/aspro-allcorp/components//bitrix/system.pagenavigation/.default/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-small-banners/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-services/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-news/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-partners/style.css', '/bitrix/templates/aspro-allcorp/components/bitrix/menu/bottom/style.css', '/bitrix/templates/aspro-allcorp/styles.css', '/bitrix/templates/aspro-allcorp/template_styles.css', '/bitrix/templates/aspro-allcorp/css/responsive.css', '/bitrix/templates/aspro-allcorp/themes/color5/style.css', '/bitrix/templates/aspro-allcorp/css/custom.css']);</script>
        <script>BX.message({'JS_REQUIRED':'Заполните это поле!', 'JS_FORMAT':'Неверный формат!', 'JS_FILE_EXT':'Недопустимое расширение файла!', 'JS_PASSWORD_COPY':'Пароли не совпадают!', 'JS_PASSWORD_LENGTH':'Минимум 6 символов!', 'JS_ERROR':'Неверно заполнено поле!', 'JS_RECAPTCHA_ERROR':'Не подтверждено!', 'JS_PROCESSING_ERROR':'Согласитесь с условиями!', 'JS_FILE_SIZE':'Максимальный размер 5мб!', 'JS_FILE_BUTTON_NAME':'Выберите файл', 'JS_FILE_DEFAULT':'Файл не найден', 'JS_DATE':'Некорректная дата!', 'JS_DATETIME':'Некорректная дата/время!', 'UNIFORM_FILE_BUTTON_NAME':'Выберите файл', 'UNIFORM_FILE_MESSAGE_DEFAULT':'Файл не найден', 'S_CALLBACK':'Заказать обратный звонок', 'ERROR_INCLUDE_MODULE_ALLCORP_TITLE':'Ошибка подключения модуля &laquo;Аспро. Корпоративный сайт&raquo;', 'ERROR_INCLUDE_MODULE_ALLCORP_TEXT':'Ошибка подключения модуля &laquo;Аспро. Корпоративный сайт&raquo;.<br />Пожалуйста установите модуль и повторите попытку'})</script>

       
        <script type="text/javascript"  src="{{asset('/public/js/template_f5d51d7b8946ab73ce5e94e336fdee15.js')}}"></script>



 
     
    </body>
</html>
