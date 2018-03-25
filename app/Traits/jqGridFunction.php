<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\classes\CommonClass\GF;
use App\classes\CommonClass\GF_time;

trait jqGridFunction
{

    /**
     * Получить параметры переданные для формирования таблицы jqGrid
     * @param \App\Traits\Request|\Illuminate\Http\Request $request
     * @return array
     */
    public function getParametersGridTable(Request $request)
    {
        $parameters_jqGrid = [
            "page" => $request->input('page'),
            "sort" => $request->input('sidx', 'id'),
            "order" => $request->input('sord', 'ASC'),
            "rowNum" => $request->input('rows', 10),
            "search" => $request->input('_search', false),
            "filters" => $request->input('filters', ''),
        ];
        return $parameters_jqGrid;
    }

    /**
     * Установить нулевые параметры для таблицы jqGrid
     * @param $response
     */
    public static function setZerrorResultInJqGrid(&$response)
    {
        $response['page'] = 1;
        $response['total'] = 1; //количество страниц
        $response['record'] = 0;
        $response['rows'] = array();
    }

    /**
     * Получить html вставку операций
     * @param $id
     * @param array $array_operations
     * @param null $template_id
     * @return string
     */
    private function getHtmlOperation($id, $array_operations = array('edit', 'delete', 'word'), $template_id = null)
    {
        $html = '';
        foreach ($array_operations as $name_operation) {
            if ($name_operation == 'delete') {
                $html .= view('default.delete-operation-jqGrid', array('id_item' => $id, 'name_function' => 'deleteRow'));
            } elseif ($name_operation == 'deleteBlock') {
                $html .= view('default.delete-operation-jqGrid', array('id_item' => $id, 'name_function' => 'deleteBlock'));
            }  elseif ($name_operation == 'deleteRow') {
                $html .= view('default.delete-operation-jqGrid', array('id_item' => $id, 'name_function' => 'destroyDescRow', 'template_id' => $template_id));
            } elseif ($name_operation == 'edit') {
                $html .= view('default.edit-operation-jqGrid', array('id_item' => $id, 'name_function' => 'edit_add_Row'));
            } elseif ($name_operation == 'editBlock') {
                $html .= view('default.edit-operation-jqGrid', array('id_item' => $id, 'name_function' => 'edit_add_Block'));
            } elseif ($name_operation == 'editRow') {
                $html .= view('default.edit-operation-jqGrid', array('id_item' => $id, 'name_function' => 'viewEditModalWindowByDescRow', 'template_id' => $template_id));
            } elseif ($name_operation == 'preview') {
                $html .= view('default.preview-operation-jqGrid', array('id_item' => $id));
            }  elseif ($name_operation == 'word') {
                $html .= view('default.word-operation-jqGrid', array('id_item' => $id));
            }   elseif ($name_operation == 'chat') {
                $html .= view('default.chat-operation-jqGrid', array('id_item' => $id));
            } elseif ($name_operation == 'blocks') {
                $html .= view('default.blocks-operation-jqGrid', array('id_item' => $id));
            }
        }
        return $html;
    }

    /**
     * Добавляет к переданному сформированному sql запросу фильтр установленный в jqGrid
     * @param object $sql
     * @param array $filter
     * @return object
     */
    private function addFilterGridListToSelect(&$sql, $filter)
    {
        if (array_key_exists('search', $filter) && array_key_exists(
                'filters',
                $filter
            ) && $filter['search'] == true && $filter['filters'] != ""
        ) {
            $filters = json_decode($filter['filters']);
            $rules = $filters->rules;
            foreach ($rules as $rule) {
                $like = '%' . trim($rule->data) . '%';
                if ($rule->op == 'eq') {
                    $like = trim($rule->data);
                }
                $sql->where(
                    $rule->field,
                    ($rule->op == 'eq') ? '=' : 'like',
                    $like
                );
            }
        }
    }

    /**
     * Выдает представление для выдачи в столбце добавления записи
     * @param $created_at
     * @param $updated_at
     * @return string
     */
    public function getHtmlDataCreatedInCell($created_at)
    {
        return GF_time::convertDateTimeDBToDate($created_at);
    }
    
    

    /**
     * Получить строчку для селекта фильтра jqGrid
     * @param $array
     * @return string
     */
    public function getListForFilters($array)
    {
        $html_list = array();
        $html_list[] = ':Все';
        if (!empty($array)){
            foreach($array as $number => $value){
                $html_list[] =$number . ':' . $value;
            }
        }
        return implode(';', $html_list );
    }
}
