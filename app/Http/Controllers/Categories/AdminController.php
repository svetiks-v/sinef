<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\classes\CategoriesClass;
use App\Traits\jqGridFunction;

class AdminController extends Controller {

    use jqGridFunction;

    public function indexAction() {
        
        return view('categories.admin',[]);
    }

    
    public function getCategoriesListAction(Request $request){
        $parameters_jqGrid = $this->getParametersGridTable($request);
        return (new CategoriesClass())->getList($parameters_jqGrid);
    }
    
    public function getAddEditFormAction(Request $request){
        $category_id = $request->input('id', NULL);
        $category_array = (new CategoriesClass())->getCategory($category_id);
        
        $categories_name_array = (new CategoriesClass())->getAllName();
        
        return view('categories.form_category', ['category_info'=>$category_array, 'all' => $categories_name_array]);
    }
    
    public function saveCategoryAction(Request $request){
        $data = $request->all();
        return (new CategoriesClass())->save($data);
    }
   

}
