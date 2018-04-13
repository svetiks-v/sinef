@inject('menu', 'App\classes\MenuClass')
<?$nav =[
    'company' =>$menu->getNavOneList(3),
    'activities' => $menu->getNavOneList(15),
    'raskrytie_informacii' => $menu->getNavOneList(19),
    'energosberejenie' => $menu->getNavOneList(7),
    'potrebitelyam' => $menu->getNavOneList(29),
    'contacts' => $menu->getNavOneList(35),
    'news' => $menu->getNavOneList(4),
    'normativno_pravovaya_baza' => $menu->getNavOneList(38),
    'internet-priemnaya' => $menu->getNavOneList(39),
    'opros' => $menu->getNavOneList(40)
  ];
?>
<div class="nav-main-collapse collapse">
    <div class="container maxwidth-theme">
        <div class="row">
            <div class="col-md-12">
                <nav class="mega-menu ">
                    <!--   general menu-->
                    <div class="table-menu hidden-xs">
                        <table>
                            <tr>
                                <?=$nav['company']['general'];?>
                                <?=$nav['activities']['general'];?>
                                <?=$nav['raskrytie_informacii']['general'];?>
                                <?=$nav['energosberejenie']['general'];?>
                                <?=$nav['potrebitelyam']['general'];?>
                                <?=$nav['contacts']['general'];?>
                                <?=$nav['news']['general'];?>
                                <?=$nav['normativno_pravovaya_baza']['general'];?>
                                <?=$nav['internet-priemnaya']['general'];?>
                                <?=$nav['opros']['general'];?>
                                
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
                    
                    <!--mobile_menu-->
                    <ul class="nav nav-pills responsive-menu" id="mainMenu">
                       <?=$nav['company']['mobile'];?>
                       <?=$nav['activities']['mobile'];?>
                       <?=$nav['raskrytie_informacii']['mobile'];?>
                       <?=$nav['energosberejenie']['mobile'];?>
                       <?=$nav['potrebitelyam']['mobile'];?>
                       <?=$nav['contacts']['mobile'];?>
                       <?=$nav['news']['mobile'];?>
                       <?=$nav['normativno_pravovaya_baza']['mobile'];?>
                       <?=$nav['internet-priemnaya']['mobile'];?>
                       <?=$nav['opros']['mobile'];?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>