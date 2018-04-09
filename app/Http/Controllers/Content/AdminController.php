<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\classes\ContentClass;

class AdminController extends Controller
{

    public function indexAction()
    {
        return view('content.admin.index');
    }

    public function addAction()
    {
        $form_content = (new ContentClass())->getFormContent();
        return view('content.admin.add', ['form' => $form_content]);
    }

    public function saveContentAction(Request $request)
    {
        $data = $request->all();
        return (new ContentClass())->save($data);
    }

}