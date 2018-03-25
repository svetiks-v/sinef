<?php

namespace App\classes;

use App\Models\CategoriesModel;
use App\Traits\jqGridFunction;

/**
 * Класс для работы с категориями
 * @author Sagaida Svetlana <sagaida.sv@gmail.com>
 */
class ContentClass {

    use jqGridFunction;

   
    /**
     * Получить список договоров для формирование jqGrid таблицы
     * @param $parameters_jqGrid
     * @return mixed
     */
    public function getList($parameters_jqGrid) {
        $dataForjQGrid = (new CategoriesModel())->getDataForjQGrid($parameters_jqGrid);
        return $this->convertListFromBDToJqGridList($dataForjQGrid, $parameters_jqGrid);
    }

    /**
     * Сконвертировать данные полученные с БД в массив данных в формате json для jqGrid
     * @param $array_list
     * @param $parameters_jqGrid - массив параметров
     * @return string - json представление для jqGrid
     */
    public function convertListFromBDToJqGridList($array_list, $parameters_jqGrid) {
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
                    "id" => $item->id,
                    "url" => $item->url,
                    "name" => $item->name,
                    "parent_category" => $item->parent_category,
                ];
            }
        }
        return json_encode($response);
    }


}
