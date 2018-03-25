<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" data-skip-moving="true">(function(w, d, n) {var cl = "bx-core";var ht = d.documentElement;var htc = ht ? ht.className : undefined;if (htc === undefined || htc.indexOf(cl) !== -1){return;}var ua = n.userAgent;if (/(iPad;)|(iPhone;)/i.test(ua)){cl += " bx-ios";}else if (/Android/i.test(ua)){cl += " bx-android";}cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");cl += w.devicePixelRatio && w.devicePixelRatio >= 2? " bx-retina": " bx-no-retina";var ieVersion = -1;if (/AppleWebKit/.test(ua)){cl += " bx-chrome";}else if ((ieVersion = getIeVersion()) > 0){cl += " bx-ie bx-ie" + ieVersion;if (ieVersion > 7 && ieVersion < 10 && !isDoctype()){cl += " bx-quirks";}}else if (/Opera/.test(ua)){cl += " bx-opera";}else if (/Gecko/.test(ua)){cl += " bx-firefox";}if (/Macintosh/i.test(ua)){cl += " bx-mac";}ht.className = htc ? htc + " " + cl : cl;function isDoctype(){if (d.compatMode){return d.compatMode == "CSS1Compat";}return d.documentElement && d.documentElement.clientHeight;}function getIeVersion(){if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)){return -1;}var rv = -1;if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)){rv = 11;}else if (!!d.documentMode && d.documentMode >= 10){rv = 10;}else if (!!d.documentMode && d.documentMode >= 9){rv = 9;}else if (d.attachEvent && !/Opera/.test(ua)){rv = 8;}if (rv == -1 || rv == 8){var re;if (n.appName == "Microsoft Internet Explorer"){re = new RegExp("MSIE ([0-9]+[\.0-9]*)");if (re.exec(ua) != null){rv = parseFloat(RegExp.$1);}}else if (n.appName == "Netscape"){rv = 11;re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)");if (re.exec(ua) != null){rv = parseFloat(RegExp.$1);}}}return rv;}})(window, document, navigator);</script>
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
                <div class="nav-main-collapse collapse">
                    <div class="container maxwidth-theme">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="mega-menu ">
                                    <div class="table-menu hidden-xs">
                                        <table>
                                            <tr>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle" href="/company/" title="Компания">Компания</a>
                                                        <ul class="dropdown-menu">
                                                            <li class=""><a href="/company/?" title="О компании">О компании</a></li>
                                                            <li class=""><a href="/company/licenses/" title="Лицензии">Лицензии</a></li>
                                                            <li class=""><a href="/company/partners/" title="Партнеры">Партнеры</a></li>
                                                            <li class=""><a href="/company/requisites/" title="Реквизиты">Реквизиты</a></li>
                                                            <li class=""><a href="/company/mission/" title="Миссия">Миссия</a></li>
                                                            <li class=""><a href="/company/dispetcherskie/" title="Диспетчерские">Диспетчерские</a></li>
                                                            <li class=""><a href="/company/energetics-day/" title="День Энергетика">День Энергетика</a></li>
                                                            <li class=""><a href="/company/vacancy" title="Вакансии">Вакансии</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle" href="/deyatelnost/" title="Деятельность">Деятельность</a>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="/deyatelnost/electrisity" title="Передача электроэнергии">Передача электроэнергии</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/deyatelnost/technological-join" title="Технологические присоединения к электрическим сетям">Технологические присоединения к электрическим сетям</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/deyatelnost/elektromontazhnye-raboty" title="Электромонтажные работы">Электромонтажные работы</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle" href="/info/" title="Раскрытие информации">
                                                            Раскрытие информации																	&nbsp;<i class="icon icon-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="/info/peredacha-elektroenergii/" title="Передача электроэнергии">Передача электроэнергии</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/info/tekhnologicheskie-prisoedineniya/" title="Технологические присоединения">Технологические присоединения</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/info/investitsionnye-programmy/" title="Инвестиционные программы">Инвестиционные программы</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/info/zakupochnaya-deyatelnost/" title="Закупочная деятельность">Закупочная деятельность</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/info/bukhgalterskaya-otchetnost/" title="Бухгалтерская отчетность">Бухгалтерская отчетность</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/info/sostoyanie-setey/" title="Состояние сетей">Состояние сетей</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/info/zony-deyatelnosti/" title="Зоны деятельности">Зоны деятельности</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle" href="/energosberezhenie/" title="Энергосбережение">
                                                            Энергосбережение																	&nbsp;<i class="icon icon-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="/energosberezhenie/programma-energosber" title="Программа энергосбержения">Программа энергосбержения</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/energosberezhenie/prezentatsii" title="Презентации">Презентации</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/energosberezhenie/energeticheskoe-obsledovanie" title="Энергетическое обследование">Энергетическое обследование</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/energosberezhenie/obschaya-informatsia" title="Общая информация">Общая информация</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle" href="/potrebitelyam/" title="Потребителям">
                                                            Потребителям																	&nbsp;<i class="icon icon-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="/potrebitelyam/territoriya-obsluzhivaniya-setevoy-organizatsii" title="Территория обслуживания сетевой организации">Территория обслуживания сетевой организации</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/potrebitelyam/peredacha-elektricheskoy-energii/" title="Передача электрической энергии">Передача электрической энергии</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/potrebitelyam/tekhnologicheskoe-prisoedinenie/" title="Технологическое присоединение">Технологическое присоединение</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/potrebitelyam/kommercheskiy-uchet-energii/" title="Коммерческий учет энергии">Коммерческий учет энергии</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/potrebitelyam/obsluzhivanie-potrebiteley/" title="Обслуживание потребителей">Обслуживание потребителей</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle" href="/contacts/" title="Контакты">
                                                            Контакты																	&nbsp;<i class="icon icon-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="/contacts/kontakty-dispetcherskoy/" title="Контакты диспетчерской">Контакты диспетчерской</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="/contacts/uchebnyy-klass/" title="Учебный класс">Учебный класс</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class="" href="/news/" title="Новости">
                                                            Новости															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class="" href="/normdocs/" title="Нормативно-правовая база">
                                                            Нормативно-правовая база															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class="" href="/internet-priemnaya/" title="Интернет приемная">
                                                            Интернет приемная															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class="" href="/opros/" title="Опрос">
                                                            Опрос															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class="" href="/personal" title="Личный кабинет">
                                                            Личный кабинет															</a>
                                                    </div>
                                                </td>
                                                <td class="dropdown js-dropdown nosave" style="display:none;">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle more-items" href="#">
                                                            <span>...</span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <ul class="nav nav-pills responsive-menu" id="mainMenu">
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/company/" title="Компания">
                                                Компания											<i class="icon icon-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="/company/?" title="О компании">
                                                        О компании																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/licenses/" title="Лицензии">
                                                        Лицензии																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/partners/" title="Партнеры">
                                                        Партнеры																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/requisites/" title="Реквизиты">
                                                        Реквизиты																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/mission/" title="Миссия">
                                                        Миссия																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/dispetcherskie/" title="Диспетчерские">
                                                        Диспетчерские																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/energetics-day/" title="День Энергетика">
                                                        День Энергетика																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/company/vacancy" title="Вакансии">
                                                        Вакансии																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/deyatelnost/" title="Деятельность">
                                                Деятельность											<i class="icon icon-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="/deyatelnost/electrisity" title="Передача электроэнергии">
                                                        Передача электроэнергии																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/deyatelnost/technological-join" title="Технологические присоединения к электрическим сетям">
                                                        Технологические присоединения к электрическим сетям																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/deyatelnost/elektromontazhnye-raboty" title="Электромонтажные работы">
                                                        Электромонтажные работы																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/info/" title="Раскрытие информации">
                                                Раскрытие информации											<i class="icon icon-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="/info/peredacha-elektroenergii/" title="Передача электроэнергии">
                                                        Передача электроэнергии																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/info/tekhnologicheskie-prisoedineniya/" title="Технологические присоединения">
                                                        Технологические присоединения																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/info/investitsionnye-programmy/" title="Инвестиционные программы">
                                                        Инвестиционные программы																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/info/zakupochnaya-deyatelnost/" title="Закупочная деятельность">
                                                        Закупочная деятельность																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/info/bukhgalterskaya-otchetnost/" title="Бухгалтерская отчетность">
                                                        Бухгалтерская отчетность																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/info/sostoyanie-setey/" title="Состояние сетей">
                                                        Состояние сетей																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/info/zony-deyatelnosti/" title="Зоны деятельности">
                                                        Зоны деятельности																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/energosberezhenie/" title="Энергосбережение">
                                                Энергосбережение											<i class="icon icon-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="/energosberezhenie/programma-energosber" title="Программа энергосбержения">
                                                        Программа энергосбержения																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/energosberezhenie/prezentatsii" title="Презентации">
                                                        Презентации																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/energosberezhenie/energeticheskoe-obsledovanie" title="Энергетическое обследование">
                                                        Энергетическое обследование																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/energosberezhenie/obschaya-informatsia" title="Общая информация">
                                                        Общая информация																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/potrebitelyam/" title="Потребителям">
                                                Потребителям											<i class="icon icon-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="/potrebitelyam/territoriya-obsluzhivaniya-setevoy-organizatsii" title="Территория обслуживания сетевой организации">
                                                        Территория обслуживания сетевой организации																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/potrebitelyam/peredacha-elektricheskoy-energii/" title="Передача электрической энергии">
                                                        Передача электрической энергии																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/potrebitelyam/tekhnologicheskoe-prisoedinenie/" title="Технологическое присоединение">
                                                        Технологическое присоединение																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/potrebitelyam/kommercheskiy-uchet-energii/" title="Коммерческий учет энергии">
                                                        Коммерческий учет энергии																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/potrebitelyam/obsluzhivanie-potrebiteley/" title="Обслуживание потребителей">
                                                        Обслуживание потребителей																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/contacts/" title="Контакты">
                                                Контакты											<i class="icon icon-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="/contacts/kontakty-dispetcherskoy/" title="Контакты диспетчерской">
                                                        Контакты диспетчерской																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="/contacts/uchebnyy-klass/" title="Учебный класс">
                                                        Учебный класс																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="/news/" title="Новости">
                                                Новости									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="/normdocs/" title="Нормативно-правовая база">
                                                Нормативно-правовая база									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="/internet-priemnaya/" title="Интернет приемная">
                                                Интернет приемная									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="/opros/" title="Опрос">
                                                Опрос									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="/personal" title="Личный кабинет">
                                                Личный кабинет									</a>
                                        </li>
                                        <li class="search visible-sm visible-xs">
                                            <div class="container maxwidth-theme">
                                                <div class="wrap">
                                                    <div class="search-input-div">
                                                        <input class="search-input" type="text" autocomplete="off" maxlength="50" size="40" placeholder="Поиск" value="" name="q">
                                                    </div>
                                                    <div class="search-button-div">
                                                        <button class="btn btn-search btn-primary" value="Поиск" name="s" type="submit">Поиск</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>	
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div role="main" class="main">
                <div class="maxwidth-theme">
                    <div class="top-slider flexslider unstyled " data-plugin-options='{"directionNav": true, "controlNav": true, "slideshow": true, "animation": "slide", "direction": "horizontal", "slideshowSpeed": 5000, "animationSpeed": 600, "animationLoop": false}'>
                        <ul class="slides">
                            <li id="bx_3218110189_60" style="background:url('/public/images/slide1.png') center center no-repeat !important;">
                                <div class="container">
                                    <div class="row dark">


                                        <div class="col-md-6 img">
                                            <div class="inner">
                                                <img src="{{asset('/public/images/engener2.png')}}" alt="Технологические присоединения" title="Технологические присоединения" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 text">
                                            <div class="inner">
                                                <div class="title">Технологические присоединения</div>
                                                <div class="text-block">
                                                    <p>5 простых шагов для присоединения ваших электропринимающих устройств.</p>
                                                </div>
                                                <a href="/services/" class="btn btn-primary">
                                                    Подробнее								</a>
                                                <a href="/services/" class="btn btn-transparent">
                                                    Заказать								</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="bx_3218110189_63" style="background:url('/public/images/slide2.png') center center no-repeat !important;">
                                <div class="container">
                                    <div class="row dark">
                                        <div class="col-md-6 img">
                                            <div class="inner">
                                                <a href="/services/" class="image">
                                                    <img src="{{asset('/public/images/5fef1c72c0c8e9560776226b0326a89e.png')}}" alt="Передача электроэнергии" title="Передача электроэнергии" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text">
                                            <div class="inner">
                                                <a href="/services/" class="title-link">
                                                    <div class="title">Передача электроэнергии</div>
                                                </a>
                                                <div class="text-block">
                                                    Качественно окажем услуги по передаче электроэнергии. Все тарифы формируются в соответствии с постановлением правительства РФ.															</div>
                                                <a href="/services/" class="btn btn-primary">
                                                    Заказать услугу								</a>
                                                <a href="/services/" class="btn btn-transparent">
                                                    Подробнее								</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="bx_3218110189_64" style="background:url('/public/images/slide4.png') center center no-repeat !important;">
                                <div class="container">
                                    <div class="row dark">


                                        <div class="col-md-6 img">
                                            <div class="inner">
                                                <a href="/services/" class="image">
                                                    <img src="{{asset('/public/images/de09a8142d73b36fc746fa2f2cc82665.png')}}" alt="Электромонтажные работы" title="Электромонтажные работы" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text">
                                            <div class="inner">
                                                <a href="/services/" class="title-link">
                                                    <div class="title">Электромонтажные работы</div>
                                                </a>
                                                <div class="text-block">
                                                    <p>
                                                        Выполняем весь комплекс услуг по проектированию и электромонтажу электроустановок, электромонтажным работам, согласованию проектов и сдачей их в эксплуатацию, комплектацию объекта электрооборудованием ведущих зарубежных и отечественных производителей.																	</p>
                                                </div>
                                                <a href="/services/" class="btn btn-transparent">
                                                    Подробнее								</a>
                                                <a href="/services/" class="btn btn-transparent">
                                                    Тарифы								</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="bx_3218110189_61" style="background:url('/public/images/Bild1_1920x410.jpg') center center no-repeat !important;">
                                <div class="container">
                                    <div class="row dark">


                                        <div class="col-md-6 text">
                                            <div class="inner">
                                                <a href="/services/" class="title-link">
                                                    <div class="title">Заголовок 3</div>
                                                </a>
                                                <div class="text-block">
                                                    <p>Текст слайдера 3</p>
                                                </div>
                                                <a href="/services/" class="btn btn-primary">
                                                    Подробнее								</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 img">
                                            <div class="inner">
                                                <a href="/services/" class="image">
                                                    <img src="{{asset('/public/images/13562.png')}}" alt="Заголовок 3" title="Заголовок 3" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="bx_3218110189_62" style="background:url('/public/images/slide3.png') center center no-repeat !important;">
                                <div class="container">
                                    <div class="row dark">


                                        <div class="col-md-6 img">
                                            <div class="inner">
                                                <a href="/services/" class="image">
                                                    <img src="{{asset('/public/images/engineers1.png')}}" alt="Заголовок 5" title="Заголовок 5" />
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>	                                                        
                </div>
                <div class="container maxwidth-theme">
                    <div class="row small-banner">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4" id="bx_651765591_59">
                                    <div class="banner" style="text-align:left;  background-position:0% 20%">
                                        <div class="title">
                                            <a href="/services/">Передача электроэнергии</a>
                                        </div>
                                        Предоставляем услуги по передаче электроэнергии. Расчет тарифов производится в соответствии с утвержденными постановлением Правительства РФ.																
                                    </div>
                                </div>
                                <div class="col-md-4" id="bx_651765591_58">
                                    <div class="banner" style="text-align:left;  background-position:33% 20%">
                                        <div class="title">
                                            <a href="/services/audit/">Технологические присоединения<br/> к электрическим сетям</a>
                                        </div>
                                        Технологическое присоединение это присоединение энергопринимающих устройств Заявителя к электрическим сетям сетевой организации.																
                                    </div>
                                </div>
                                <div class="col-md-4" id="bx_651765591_57">
                                    <div class="banner" style="text-align:left;  background-position:66% 20%">
                                        <div class="title">
                                            <a href="/services/autsorsing/soprovozhdenie-1s/">Электромонтажные работы</a>
                                        </div>
                                        Выполняем весь комплекс услуг по проектированию и электромонтажу. Гарантийное и послегарантийное обслуживание объектов и оборудования, сданных в эксплуатацию.																
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <b><span style="font-size: 16px;">Компания</span></b><br>
                        <hr>
                        В 2009 году, на базе многолетнего опыта, наличия необходимой разрешительной документации и высококвалифицированного персонала была создана Инвестиционно-проектная группа.<br>
                        <br>
                        Сегодня компания осуществляет деятельность на территории г. Москвы на основании Федерального закона от 26.03.2003 № 35 - ФЗ «Об электроэнергетике». В своей деятельности ИПГ подконтрольна Региональной энергетической комиссии г. Москвы и руководствуется нормативно-правовыми актами РЭК. Важным ориентиром в достижении и реализации целей компании является «Стратегия развития электросетевого комплекса Российской Федерации», принятая Распоряжением Правительства РФ от 03.04.2013г. № 511-р.<br>
                        <br>
                        Приоритетными направлениями деятельности ИПГ являются передача электрической энергии, технологическое присоединение и электромонтажные работы. За минувшие три года работы показатели переданной электроэнергии увеличились с 44,476  до 382,371 млн. кВт.ч. , количество обслуживаемых подстанций с 127 до 291 шт., протяженность кабельных линий увеличилась с 87669,5 до 124607,5 м. По расположению объектов обслуживания охватывает 12 округов г. Москвы. Нам доверяют свои электросети ведущие торговые, промышленные, финансовые и социальные организации: от малого бизнеса до крупнейших корпораций.<br>
                        <br>
                        Инвестиционно-проектная группа тесно взаимодействует с государственными и частными организациями, разрабатывает и реализует по согласованию с РЭК г. Москвы инвестиционные программы по повышению надежности электроснабжения. В своей деятельности опирается на тесное взаимодействие с ОАО «МОЭСК», ОАО «ОЭК», ОАО «МОЭК», ОАО «Мосэнергосбыт», отношения с которыми закреплены договорами о сотрудничестве и Постановлением Правительства РФ 861 от&nbsp;27.12.2004 г.<br>
                        <br>
                        На сегодняшний день компания обладает реально действующей системой ОДС (оперативно диспетчерская служба), ведется активная работа по улучшению качества обслуживания и расширению количества обслуживаемых объектов (абонентов). Особое внимание уделяется повышению квалификации сотрудников компании: допускаются к работе с электрооборудованием только аттестованный персонал с IV и V группой до и выше 1000 В.<br>
                        <br>
                        Важным направлением в деятельности ИПГ является работа по технологическому присоединению. Постановлением Региональной энергетической комиссии города Москвы от 27.12.2012 № 429 «Об установлении стандартизированных тарифных ставок и ставок за 1 кВт максимальной мощности на уровне напряжения ниже 35 кВ и присоединяемой мощности менее 8900 кВт для определения платы за технологическое присоединение к электрическим сетям ООО ИПГ на территории г.Москвы на 2013 год» установлены:<br>
                        1. Стандартизированные тарифные ставки;<br>
                        2. Ставки за 1 кВт максимальной мощности (руб/кВт);<br>
                        3. Формулы платы за технологическое присоединение.<br>
                        <br>
                        Компания принимает непосредственное участие в развитии энергокомплекса г. Москвы и видит свою задачу в дальнейшем повышении надежности электроснабжения и развитии сетевого комплекса для подключения новых потребителей.<br>
                        <br>
                        Сегодня ИПГ — конкурентоспособная компания, обладающая достаточной экономической и финансовой устойчивостью.
                        <p style="text-align: right;margin:0;">
                            <a href="/company" class="btn btn-default btn-sm">Подробнее&nbsp;&nbsp;<i class="icon icon-angle-right"></i></a>
                        </p>
                        <div class="feature">
                            <div class="row">
                            </div>
                        </div>									
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="styled-block main">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <h3>Консультация по услугам</h3>
                                    <p>Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и подготовят индивидуальное коммерческое предложение.</p>											
                                </div>
                                <div class="col-md-4 col-sm-4 text-right">
                                    <span class="btn btn-primary" data-event="jqm" data-param-id="28" data-name="question">Задать вопрос</span>											
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <b><span style="font-size: 16px;">Оперативно диспетчерская служба </span></b><br>
                                <hr>
                                Мы имеем круглосуточную оперативно-диспетчерскую службу. Время реагирования при возникновении аварийных ситуаций – до 2 часов с момента регистрации заявки диспетчерской службой. Сроки выполнения оперативных переключений по заявкам – 24 часа при условии поступления заявки в диспетчерскую службу до 12-00 часов текущего дня.

                                Наш ремонтно-эксплуатационный персонал выполняет мероприятия, направленные на обеспечение надежности работы электротехнического оборудования – текущие и капитальные ремонты, работы по перевооружению и модернизации, капитальному строительству в рамках инвестиционной программы, выполнение работ по техническому освидетельствованию действующих электроустановок, работ по сертификации качества электрической энергии.
                                <p style="text-align: right;margin:0;"></br>
                                    <a href="/company" class="btn btn-default btn-sm">Подробнее&nbsp;&nbsp;<i class="icon icon-angle-right"></i></a>
                                </p>										
                            </div>
                            <div class="col-md-6">
                                <div class="front-news">
                                    <h3>Новости</h3>
                                    <div class="news-item clearfix" id="bx_3485106786_154">
                                        <div class="news-image">
                                            <a href="/info/news/tekhnologicheskoe-prisoedinenie-2014/">
                                                <img src="/public/images/ac02561ebe14e720eaceae2cd48362e5.jpg" alt="Технологическое присоединение 2014" title="Технологическое присоединение 2014" class="img-responsive" />
                                            </a>
                                        </div>
                                        <div class="news-info">
                                            <div class="title"><a href="/info/news/tekhnologicheskoe-prisoedinenie-2014/">Технологическое присоединение 2014</a></div>
                                            <div class="date">13 Января 2014</div>
                                        </div>
                                    </div>
                                    <div class="news-item clearfix" id="bx_3485106786_152">
                                        <div class="news-image">
                                            <a href="/info/news/tekhnologicheskoe-prisoedinenie/">
                                                <img src="/public/images/a11f1536d5436dcb67e46b087dd1847e.jpg" alt="Технологическое присоединение" title="Технологическое присоединение" class="img-responsive" />
                                            </a>
                                        </div>
                                        <div class="news-info">
                                            <div class="title"><a href="/info/news/tekhnologicheskoe-prisoedinenie/">Технологическое присоединение</a></div>
                                            <div class="date">31 Октября 2013</div>
                                        </div>
                                    </div>
                                    <div class="news-item clearfix" id="bx_3485106786_166">
                                        <div class="news-image">
                                            <a href="/info/news/o-predlozhenii-stoimosti-za-tekhnologicheskoe-prisoedinenie/">
                                                <img src="{{asset('/public/images/noimage.png')}}" alt="" title="" class="img-responsive" />
                                            </a>
                                        </div>
                                        <div class="news-info">
                                            <div class="title"><a href="/info/news/o-predlozhenii-stoimosti-za-tekhnologicheskoe-prisoedinenie/">О предложении стоимости за технологическое присоединение</a></div>
                                            <div class="date">10 Октября 2013</div>
                                        </div>
                                    </div>

                                    <a href="/info/news/" class="btn btn-default btn-sm">Все новости&nbsp;&nbsp;<i class="icon icon-angle-right"></i></a>
                                </div> 										
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners hidden-sm hidden-xs">
                            <div class="flexslider unstyled" data-plugin-options='{"directionNav": false, "controlNav": false, "slideshow": true, "slideshowSpeed": 5000, "animationSpeed": 600, "animationLoop": true}'>
                                <ul class="slides">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2" id="bx_3099439860_156">
                                                <a href="/company/partners/rostekhnadzor/">
                                                    <img src="{{asset('/public/images/rosteh.png')}}" alt="Ростехнадзор" title="Ростехнадзор" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_91">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/moek.PNG')}}" alt="МОСКОВСКАЯ ОБЪЕДИНЕННАЯ ЭНЕРГЕТИЧЕСКАЯ КОМПАНИЯ" title="МОСКОВСКАЯ ОБЪЕДИНЕННАЯ ЭНЕРГЕТИЧЕСКАЯ КОМПАНИЯ" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_90">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/mosenergosbyt-official-site-1.png')}}" alt="Мосэнергосбыт" title="Мосэнергосбыт" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_89">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/merf.png')}}" alt="Министерство энергетики Российской Федерации" title="Министерство энергетики Российской Федерации" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_88">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/fsti.png')}}" alt="Федеральная служба по тарифам РФ" title="Федеральная служба по тарифам РФ" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_87">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/moek1.png')}}" alt="Московская  объедененная электросетевая компания" title="Московская  объедененная электросетевая компания" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2" id="bx_3099439860_86">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/oek.png')}}" alt="Объедененная энергитическая компания" title="Объедененная энергитическая компания" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_85">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/moscow.png')}}" alt="Правительство Москвы" title="Правительство Москвы" />
                                                </a>
                                            </div>
                                            <div class="col-md-2" id="bx_3099439860_84">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/rekm.png')}}" alt="Региональная энергитическая комиссия города Москвы" title="Региональная энергитическая комиссия города Москвы" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="partners visible-sm visible-xs">
                            <div class="flexslider unstyled" data-plugin-options='{"directionNav": false, "controlNav": false, "slideshow": true, "slideshowSpeed": 5000, "animationSpeed": 600, "animationLoop": true}'>
                                <ul class="slides">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_156">
                                                <a href="/company/partners/rostekhnadzor/">
                                                    <img src="{{asset('/public/images/rosteh.png')}}" alt="Ростехнадзор" title="Ростехнадзор" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_91">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/moek.PNG')}}" alt="МОСКОВСКАЯ ОБЪЕДИНЕННАЯ ЭНЕРГЕТИЧЕСКАЯ КОМПАНИЯ" title="МОСКОВСКАЯ ОБЪЕДИНЕННАЯ ЭНЕРГЕТИЧЕСКАЯ КОМПАНИЯ" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_90">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/mosenergosbyt-official-site-1.png')}}" alt="Мосэнергосбыт" title="Мосэнергосбыт" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_89">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/merf.png')}}" alt="Министерство энергетики Российской Федерации" title="Министерство энергетики Российской Федерации" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_88">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/fsti.png')}}" alt="Федеральная служба по тарифам РФ" title="Федеральная служба по тарифам РФ" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_87">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/moek1.png')}}" alt="Московская  объедененная электросетевая компания" title="Московская  объедененная электросетевая компания" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_86">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/oek.png')}}" alt="Объедененная энергитическая компания" title="Объедененная энергитическая компания" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_85">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/moscow.png')}}" alt="Правительство Москвы" title="Правительство Москвы" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12" id="bx_3099439860_84">
                                                <a href="/company/partners/">
                                                    <img src="{{asset('/public/images/rekm.png')}}" alt="Региональная энергитическая комиссия города Москвы" title="Региональная энергитическая комиссия города Москвы" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>							
                    </div>
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
<script type="text/javascript">if(!window.BX)window.BX={};if(!window.BX.message)window.BX.message=function(mess){if(typeof mess=='object') for(var i in mess) BX.message[i]=mess[i]; return true;};</script>

<script type="text/javascript"  src="{{asset('/public/js/kernel_main.js')}}"></script>
<script type="text/javascript">BX.setJSList(['/bitrix/js/main/core/core.js','/bitrix/js/main/core/core_ajax.js','/bitrix/js/main/json/json2.min.js','/bitrix/js/main/core/core_ls.js','/bitrix/js/main/core/core_fx.js','/bitrix/js/main/session.js','/bitrix/js/main/core/core_window.js','/bitrix/js/main/core/core_popup.js','/bitrix/js/main/core/core_date.js','/bitrix/js/main/utils.js','/bitrix/js/main/core/core_tooltip.js','/bitrix/js/main/rating_like.js','/bitrix/templates/aspro-allcorp/js/jquery.actual.min.js','/bitrix/templates/aspro-allcorp/js/jquery.fancybox.js','/bitrix/templates/aspro-allcorp/vendor/jquery.easing.js','/bitrix/templates/aspro-allcorp/vendor/jquery.appear.js','/bitrix/templates/aspro-allcorp/vendor/jquery.cookie.js','/bitrix/templates/aspro-allcorp/vendor/bootstrap.js','/bitrix/templates/aspro-allcorp/vendor/flexslider/jquery.flexslider-min.js','/bitrix/templates/aspro-allcorp/vendor/jquery.validate.min.js','/bitrix/templates/aspro-allcorp/js/jquery.uniform.min.js','/bitrix/templates/aspro-allcorp/js/jqModal.js','/bitrix/templates/aspro-allcorp/js/detectmobilebrowser.js','/bitrix/templates/aspro-allcorp/js/general.js','/bitrix/components/bitrix/search.title/script.js','/bitrix/templates/aspro-allcorp/js/jquery.inputmask.bundle.min.js']); </script>
<script type="text/javascript">BX.setCSSList(['/bitrix/js/main/core/css/core.css','/bitrix/js/main/core/css/core_popup.css','/bitrix/js/main/core/css/core_date.css','/bitrix/js/main/core/css/core_tooltip.css','/bitrix/templates/aspro-allcorp/css/bootstrap.css','/bitrix/templates/aspro-allcorp/css/fonts/font-awesome/css/font-awesome.css','/bitrix/templates/aspro-allcorp/vendor/flexslider/flexslider.css','/bitrix/templates/aspro-allcorp/css/jquery.fancybox.css','/bitrix/templates/aspro-allcorp/css/theme-elements.css','/bitrix/templates/aspro-allcorp/css/theme-responsive.css','/bitrix/templates/.default/ajax/ajax.css','/bitrix/templates/aspro-allcorp/components/aspro/social.info.allcorp/corp/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/search.title/corp/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/menu/top/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-big-banners/style.css','/bitrix/templates/aspro-allcorp/components//bitrix/system.pagenavigation/.default/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-small-banners/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-services/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-news/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/news.list/front-partners/style.css','/bitrix/templates/aspro-allcorp/components/bitrix/menu/bottom/style.css','/bitrix/templates/aspro-allcorp/styles.css','/bitrix/templates/aspro-allcorp/template_styles.css','/bitrix/templates/aspro-allcorp/css/responsive.css','/bitrix/templates/aspro-allcorp/themes/color5/style.css','/bitrix/templates/aspro-allcorp/css/custom.css']); </script>
<script>BX.message({'JS_REQUIRED':'Заполните это поле!','JS_FORMAT':'Неверный формат!','JS_FILE_EXT':'Недопустимое расширение файла!','JS_PASSWORD_COPY':'Пароли не совпадают!','JS_PASSWORD_LENGTH':'Минимум 6 символов!','JS_ERROR':'Неверно заполнено поле!','JS_RECAPTCHA_ERROR':'Не подтверждено!','JS_PROCESSING_ERROR':'Согласитесь с условиями!','JS_FILE_SIZE':'Максимальный размер 5мб!','JS_FILE_BUTTON_NAME':'Выберите файл','JS_FILE_DEFAULT':'Файл не найден','JS_DATE':'Некорректная дата!','JS_DATETIME':'Некорректная дата/время!','UNIFORM_FILE_BUTTON_NAME':'Выберите файл','UNIFORM_FILE_MESSAGE_DEFAULT':'Файл не найден','S_CALLBACK':'Заказать обратный звонок','ERROR_INCLUDE_MODULE_ALLCORP_TITLE':'Ошибка подключения модуля &laquo;Аспро. Корпоративный сайт&raquo;','ERROR_INCLUDE_MODULE_ALLCORP_TEXT':'Ошибка подключения модуля &laquo;Аспро. Корпоративный сайт&raquo;.<br />Пожалуйста установите модуль и повторите попытку'})</script>
<script type="text/javascript">
		var arAllcorpOptions = ({
			"SITE_DIR" : "/",
			"SITE_ID" : "s1",
			"SITE_TEMPLATE_PATH" : "/bitrix/templates/aspro-allcorp",
			"THEME" : ({
				"THEME_SWITCHER" : "N",
				"COLOR" : "color5",
				"WIDTH" : "auto",
				"MENU" : "second",
				"SIDEMENU" : "left",
				"PHONE_MASK" : "+7 (999) 999-99-99",
				"VALIDATE_PHONE_MASK" : "^[+][0-9] [(][0-9]{3}[)] [0-9]{3}[-][0-9]{2}[-][0-9]{2}$",
				"DATE_MASK" : "d:m:y",
				"DATE_PLACEHOLDER" : "дд:мм:гггг",
				"VALIDATE_DATE_MASK" : "^[0-9]{1,2}\:[0-9]{1,2}\:[0-9]{4}$",
				'DATETIME_MASK' : 'd:m:y h:s',
				'DATETIME_PLACEHOLDER' : 'дд:мм:гггг чч:мм',
				'VALIDATE_DATETIME_MASK' : '^[0-9]{1,2}\:[0-9]{1,2}\:[0-9]{4} [0-9]{1,2}\:[0-9]{1,2}$',
				"VALIDATE_FILE_EXT" : "png|jpg|jpeg|gif|doc|docx|xls|xlsx|txt|pdf|odt|rtf",
				"USE_CAPTCHA_FORM" : "N",
				"DISPLAY_PROCESSING_NOTE" : "N",
				"CATALOG_INDEX" : "N",
				"SERVICES_INDEX" : "Y",
				'USE_YA_COUNTER' : "N",
				'YA_COUNTER_ID' : "",
				'USE_FORMS_GOALS' : "COMMON",
				'USE_DEBUG_GOALS' : ""
			})
		});
		</script>
                <script type="text/javascript">
arAllcorpOptions['THEME']['THEME_SWITCHER'] = 'N';
arAllcorpOptions['THEME']['COLOR'] = 'color5';
arAllcorpOptions['THEME']['WIDTH'] = 'auto';
arAllcorpOptions['THEME']['MENU'] = 'second';
arAllcorpOptions['THEME']['SIDEMENU'] = 'left';
arAllcorpOptions['THEME']['CATALOG_INDEX'] = 'N';
arAllcorpOptions['THEME']['SERVICES_INDEX'] = 'Y';
arAllcorpOptions['THEME']['FILTER_VIEW'] = 'NONE';
arAllcorpOptions['THEME']['USE_CAPTCHA_FORM'] = 'N';
arAllcorpOptions['THEME']['DISPLAY_PROCESSING_NOTE'] = 'N';
arAllcorpOptions['THEME']['PARTNERSBANNER_SLIDESSHOWSPEED'] = '5000';
arAllcorpOptions['THEME']['PARTNERSBANNER_ANIMATIONSPEED'] = '600';
arAllcorpOptions['THEME']['BIGBANNER_HIDEONNARROW'] = 'N';
arAllcorpOptions['THEME']['BIGBANNER_SLIDESSHOWSPEED'] = '5000';
arAllcorpOptions['THEME']['BIGBANNER_ANIMATIONSPEED'] = '600';
arAllcorpOptions['THEME']['BIGBANNER_ANIMATIONTYPE'] = 'SLIDE_HORIZONTAL';
if(typeof(BX.localStorage) != 'undefined'){
	BX.localStorage.set('arAllcorpOptions', arAllcorpOptions, 86400);
}
</script>
<script type="text/javascript"  src="{{asset('/public/js/template_f5d51d7b8946ab73ce5e94e336fdee15.js')}}"></script>



<script type="text/javascript">
$(document).ready(function () {
    setTimeout(function () {
        $('.small-banner .banner').sliceHeight({slice: 3});
    }, 500)
});
</script>
@yield('content')
</body>
</html>
