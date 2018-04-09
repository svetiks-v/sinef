<?php

namespace App\classes;

use App\classes\CategoriesClass;
use App\Models\CategoriesModel;

class MenuClass
{

    /**
     * получение одного пункта для главного меню
     * @param Integer $category_id
     * @return Attay ['general' => 'String html', 'mobile' => 'String html']
     */
    public function getNavOneList($category_id)
    {
        $category_arr = (new CategoriesModel())->getByIdInArray($category_id, ['id', 'name', 'url', 'category_id']);
        $sub_categories = (new CategoriesClass())->getSubCategories($category_id);

        $one_nav = [
            'general' => ($category_arr) ? view('layouts.menu.general_menu',
                                                     compact('category_arr', 'sub_categories', 'category_id')) : '',
            'mobile'       => ($category_arr) ? view('layouts.menu.mobile_menu',
                                                     compact('category_arr', 'sub_categories', 'category_id')) : '',
        ];

        return $one_nav;
    }

    public function getSidebar($category_id)
    {
        $parent_category_id = (new CategoriesClass())->getParentCategoryId($category_id);

        if ($parent_category_id) {
            $categories_arr = (new CategoriesClass())->getSubCategories($parent_category_id);
            if (count($categories_arr)) {
                return view('layouts.menu.sidebar', compact('categories_arr', 'category_id'));
            }

            return false;
        }

        return false;
    }

}