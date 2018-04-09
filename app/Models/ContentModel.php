<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\ModelBaseFunction;
use App\Traits\jqGridFunction;

class ContentModel extends ModelBaseFunction {
    
    use jqGridFunction;
    
    protected $table = 'content';

    public function isUniqContent($data)
    {
        $sql = DB::table($this->getNameTable())
          ->where('url', $data['url'])
          ->where('category_id', $data['category_id']);
        if (array_key_exists('id', $data)) {
            $sql->where('id', '!=', $data['id']);
        }

        return ($sql->count() == 0);
    }

    /**
     * сохранение записи, добавление/редактирование
     * @param array $save_data
     * @return integer id сохраненной записи
     */
    public function save($save_data)
    {
        $content_id = (array_key_exists('id', $save_data)) ? (int) $save_data['id'] : "";
        if (!empty($content_id)) {
            $this->updateData($save_data, ["id" => $content_id]);
        } else {
            $content_id = $this->insert($save_data);
        }

        return $content_id;
    }
}
