<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\ModelBaseFunction;
use App\Traits\jqGridFunction;

class CategoriesModel extends ModelBaseFunction {
    
    use jqGridFunction;
    
    protected $table = 'categories';

    public function getDataForjQGrid($parameters_jqGrid) {

        $sql = DB::table("{$this->getNameTable()} as cat1")
                ->select(
                        'cat1.id', 'cat1.name','cat1.url','cat2.name as parent_category'
                )
                ->leftJoin("{$this->getNameTable()} as cat2", 'cat2.id', '=', 'cat1.category_id')
                ->orderBy($parameters_jqGrid['sort'], $parameters_jqGrid['order'])
                ->offset(($parameters_jqGrid['page'] - 1) * $parameters_jqGrid['rowNum'])
                ->limit($parameters_jqGrid['rowNum']);

        $this->addFilterGridListToSelect($sql, $parameters_jqGrid);
        $data_from_bd = $sql->get();
        $sql_count = DB::table($this->getNameTable())->count();

        return [
            'list' => $data_from_bd,
            'count' => $sql_count
        ];
    }
    
    
    public function isUniqCategory($data){
        $sql = DB::table($this->getNameTable())
                ->where('url', $data['url']);
        if(array_key_exists('id', $data)){
            $sql->where('id', '!=', $data['id']);
        }
        
        return ($sql->count() == 0);
    }
    
    /**
     * сохранение записи, добавление/редактирование
     * @param array $save_data
     * @return integer id сохраненной записи
     */
    public function save($save_data){
        $category_id = (array_key_exists('id', $save_data))? (int)$save_data['id'] : "";
        if(!empty($category_id)){
            $this->updateData($save_data, ["id" =>$category_id ]);
        }else{
            $category_id = $this->insert($save_data);
        }
        
        return $category_id;
    }
}
