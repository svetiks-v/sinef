@inject('menu', 'App\classes\MenuClass')
<?$nav =[
    'company' =>$menu->getNavOneList(3)
  ];
?>
<div class="nav-main-collapse collapse">
    <div class="container maxwidth-theme">
        <div class="row">
            <div class="col-md-12">
                <nav class="mega-menu ">
                    <div class="table-menu hidden-xs">
                        <table>
                            <tr>
                                <?=$nav['company']['general'];?>
                         
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
                       <?=$nav['company']['mobile'];?>
                        
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