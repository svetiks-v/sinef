<? if ($categories_arr): ?>
    <div class="col-md-3 left-menu-md">
        <aside class="sidebar">
            <ul class="nav nav-list side-menu">
                <? foreach ($categories_arr as $id=>$category_data):?>

                    <li class="<?= ($id == $category_id) ? 'active' : '' ?>">
                        <a href="<?= $category_data['url'] ?>"><?= $category_data['name'] ?></a>
                    </li>

                <? endforeach ?>
            </ul>
        </aside>
    </div>
    <?
endif?>