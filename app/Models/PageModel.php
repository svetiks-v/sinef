<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\ModelBaseFunction;

class PageModel extends ModelBaseFunction
{

    protected $table = 'pages';

    public function save($save_data, $content_id)
    {
        $page_id = $this->getItemByParams(['id'], ['content_id' =>$content_id ]);
        
        if($page_id){
            $this->updateData($save_data, ['id' => $page_id]);
            return $page_id;
        }else{
            return $this->insert($save_data);
        }
    }

}