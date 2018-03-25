<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\classes\CategoriesClass;

class AdminController extends Controller
{

    public function indexAction()
    {
        return view('content.admin');
    }

    public function addAction()
    {
        $form_content =
        return view('content.admin.add');
    }

}