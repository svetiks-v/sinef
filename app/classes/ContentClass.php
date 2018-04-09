<?php

namespace App\classes;

use App\Models\ContentModel;
use App\Traits\jqGridFunction;
use App\classes\CategoriesClass;
use App\Models\PageModel;
use App\classes\MenuClass;

/**
 * Класс для работы с категориями
 * @author Sagaida Svetlana <sagaida.sv@gmail.com>
 */
class ContentClass
{

    use jqGridFunction;
    //@todo: дописать для редактирования контекте
    public function getFormContent($content_id = null)
    {
        $categories = (new CategoriesClass())->getAllCategoriesFullURL();

        return view('content.admin.form_content', compact("categories"));
    }

    /**
     * сохранение данных категории
     * @param type $data
     */
    public function save($data)
    {
        $save_data = $this->prepareBeforeSave($data);
        $is_uniq = $this->isUniqContent($save_data);

        if ($is_uniq) {
            $page_save = ['url' => $save_data['full_url']];
            unset($save_data['full_url']);
            $content_id = (new ContentModel())->save($save_data);
            $page_save['content_id'] = $content_id;
            (new PageModel())->save($page_save, $content_id);

            echo json_encode(['status' => 'ok', 'id' => $content_id]);
            die;
        }
//@todo: переделать на ajax
        echo json_encode(['status' => 'error', 'message' => 'В системе уже есть запить с указанным URL']);
    }

    /**
     * todo^ проверить на несколько слэшей, убрать задубленность кода
     * @param string $save_data
     * @return type
     */
    public function prepareBeforeSave($save_data)
    {
        if (array_key_exists('url', $save_data)) {
            $url = trim(str_replace('\/\/', '/', $save_data['url']), '\/');
            $save_data['url'] = '/' . $url;
        }
        if (array_key_exists('full_url', $save_data)) {
            $url = trim(str_replace('\/\/', '/', $save_data['full_url']), '\/');
            $save_data['full_url'] = '/' . $url;
        }

        return array_map("trim", $save_data);
    }

    /**
     * проверка на уникальность по URL
     * @param array $data
     * @return boolean
     */
    public function isUniqContent($data)
    {
        if (isset($data['url']) && isset($data['category_id'])) {
            return (new ContentModel())->isUniqContent($data);
        }

        return false;
    }

    public function viewInnerPage($content_id)
    {
        $content_arr = (new ContentModel())->getByIdInArray($content_id);

        if (!$content_arr) {
            return response()->view('errors.404', [], 404);
        } else {
             $sidebar_category = (new MenuClass())->getSidebar($content_arr['category_id']);
            return view('content.view_inner_page', ['content' => $content_arr, 'sidebar' => $sidebar_category]);
        }
    }

}