<?php

namespace App\classes;

use App\Models\CategoriesModel;
use App\Traits\jqGridFunction;

/**
 * Класс для работы с категориями
 * @author Sagaida Svetlana <sagaida.sv@gmail.com>
 */
class CategoriesClass
{

    use jqGridFunction;

    private $errors = [
    ];

    /**
     * получение текста ошибки по коду
     * @param String $code код ошибки
     * @return String
     */
    public function getError($code)
    {
        if (array_key_exists($code, $this->errors)) {
            return $this->errors[$code];
        } else {
            return $code;
        }
    }

    /**
     * Получить список договоров для формирование jqGrid таблицы
     * @param $parameters_jqGrid
     * @return mixed
     */
    public function getList($parameters_jqGrid)
    {
        $dataForjQGrid = (new CategoriesModel())->getDataForjQGrid($parameters_jqGrid);
        return $this->convertListFromBDToJqGridList($dataForjQGrid, $parameters_jqGrid);
    }

    /**
     * Сконвертировать данные полученные с БД в массив данных в формате json для jqGrid
     * @param $array_list
     * @param $parameters_jqGrid - массив параметров
     * @return string - json представление для jqGrid
     */
    public function convertListFromBDToJqGridList($array_list, $parameters_jqGrid)
    {
        $total_count = $array_list['count'];
        $pagesCount = ceil($total_count / $parameters_jqGrid['rowNum']);

        $response = [];
        if ($total_count == 0) {
            $this->setZerrorResultInJqGrid($response);
        } else {
            $response['page'] = $parameters_jqGrid['page'];
            $response['total'] = $pagesCount;
            $response['records'] = $total_count;

            $key = 0;
            foreach ($array_list['list'] as $item) {
                $response['rows'][$key]['id'] = $item->id;
                $response['rows'][$key++]['cell'] = [
                    "id"              => $item->id,
                    "url"             => $item->url,
                    "name"            => $item->name,
                    "parent_category" => $item->parent_category,
                ];
            }
        }
        return json_encode($response);
    }

    /**
     * получение информации о категории
     * @param Integer $category_id ид категории
     * @return array | boolean
     */
    public function getCategory($category_id)
    {
        $is_category = (new CategoriesModel())->isItemById($category_id);
        if ($is_category) {
            return (new CategoriesModel())->getItemByParams(['id', 'name', 'url', 'category_id'], ['id' => $category_id]);
        }
        return false;
    }

    public function getAllName()
    {
        return (new CategoriesModel())->getAllDataFieldIdIsKey('name', ['id', 'asc']);
    }

    /**
     * сохранение данных категории
     * @param type $data
     */
    public function save($data)
    {
        $save_data = $this->prepareBeforeSave($data);
        $is_uniq = $this->isUniqCategory($save_data);

        if ($is_uniq) {
            $category_id = (new CategoriesModel())->save($save_data);
            return json_encode(['status' => 'ok', 'id' => $category_id]);
        }

        return json_encode(['status' => 'error', 'message' => 'В системе уже есть запить с указанным URL']);
    }

    /**
     * todo^ проверить на несколько слэшей
     * @param string $save_data
     * @return type
     */
    public function prepareBeforeSave($save_data)
    {
        if (array_key_exists('url', $save_data)) {
            $url = trim(str_replace('\/\/', '/', $save_data['url']), '\/');
            $save_data['url'] = '/' . $url;
        }
        return array_map("trim", $save_data);
    }

    /**
     * проверка на уникальность по URL
     * @param array $data
     * @return boolean
     */
    public function isUniqCategory($data)
    {
        if (isset($data['url'])) {
            return (new CategoriesModel())->isUniqCategory($data);
        }
        return false;
    }

    /**
     *
     */
    public function getAllCategoriesFullURL()
    {
        $categories = (new CategoriesModel())->getAllWithKeyId();
        $categories_full_data = [];

        foreach ($categories as $category_id => $category_data) {
            $categories_full_data[$category_id] = [
                'name' => $category_data['name'],
                'url'  => $this->getUrl($category_id, $categories)
            ];
        }

        return $categories_full_data;
    }

    public function getUrl($category_id, $categories_data = [], $url = '')
    {
        $category_data = [];
        if (!empty($categories_data)) {
            $category_data = (array_key_exists($category_id, $categories_data)) ? $categories_data[$category_id] : [];
        }

        if (empty($category_data)) {
            $category_data = (new CategoriesModel())->getByIdInArray($category_id, ['id', 'category_id', 'url']);
        }

        $url = $category_data['url'] . $url;
        if (array_key_exists('category_id', $category_data) && !empty($category_data['category_id'])) {
            return $this->getUrl($category_data['category_id'], $categories_data, $url);
        }

        return $url;
    }

    public function getSubCategories($category_id)
    {

        $categories = (new CategoriesModel())->getAllWithKeyId($category_id);
        if (!$categories) {
            return false;
        }

        $categories_full_data = [];
        foreach ($categories as $category_id => $category_data) {
            $categories_full_data[$category_id] = [
                'name' => $category_data['name'],
                'url'  => $this->getUrl($category_id, $categories)
            ];
        }

        return $categories_full_data;
    }

    public function getParentCategoryId($category_id)
    {
        $category = (new CategoriesModel())->getByIdInArray($category_id, ['category_id', 'id']);

        if ($category) {
            if (!empty($category['category_id'])) {

                return $this->getParentCategoryId($category['category_id']);
            } else {

                return $category['id'];
            }
        }

        return false;
    }

    

}