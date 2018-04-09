<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

/* auth routes */
Route::get('/registration', 'Auth\RegistrationController@index')->name('register');
Route::post('/registration/save', 'Auth\RegistrationController@saveUser')->name('register.save');
Route::get('/registration/confirm/{token?}', 'Auth\RegistrationController@confirm');
Route::post('/auth/loginUser', 'Auth\AuthController@loginUser')->name('auth.login');
Route::get('/auth/loginUser', 'Auth\AuthController@loginUser')->name('auth.login');
Route::get('/auth/logout', 'Auth\AuthController@logout')->name('auth.logout');
Route::get('/auth/redirect-auth', 'Auth\AuthController@redirect_auth')->name('auth.redirect');


/* * CATEGORIES* */
Route::get('/admin/categories', 'Categories\AdminController@indexAction')->name('admin.categories');
Route::post('/admin/categories/get-list', 'Categories\AdminController@getCategoriesListAction')->name('admin.categories.list');
Route::post('/admin/categories/get-add-edit-form', 'Categories\AdminController@getAddEditFormAction')->name('admin.categories.get-add-edit-form');
Route::post('/admin/categories/save-form', 'Categories\AdminController@saveCategoryAction')->name('admin.categories.save-form');


/* * CONTENT* */
Route::get('/admin/content', 'Content\AdminController@indexAction')->name('admin.content');
Route::get('/admin/content/add', 'Content\AdminController@addAction')->name('admin.content.add');
Route::post('/admin/content/save-form', 'Content\AdminController@saveContentAction')->name('admin.content.save-form');


$pages = DB::table('pages')->select(['url', 'content_id'])->get();

if (!empty($pages)) {
    foreach ($pages as $page) {
        Route::get($page->url,
                   function() use ($page) {
            return (new App\classes\ContentClass())->viewInnerPage((int) $page->content_id);
        });
    }
}


