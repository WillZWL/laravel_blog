<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * admin.
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('index', 'AdminController@index');

    //articles
    Route::get('articles/index', 'ArticlesController@index');
    Route::get('articles/trash', 'ArticlesController@trash');
    Route::post('articles/restore/{id}', 'ArticlesController@restore');
    Route::delete('articles/forceDelete/{id}', 'ArticlesController@forceDelete');
    Route::resource('articles', 'ArticlesController');

    //categories
    Route::get('categories/index', 'CategoriesController@index');
    Route::delete('categories/delete/{id}', 'CategoriesController@destroy');
    Route::resource('categories', 'CategoriesController');

    //tags
    Route::get('tags/index', 'TagsController@index');
    Route::resource('tags', 'TagsController');

    //setting
    Route::get('settings/index', 'SettingsController@index');
    Route::get('settings/user', 'SettingsController@user');
    Route::patch('settings/index', 'SettingsController@update');
    Route::get('setting/user_edit/{id}', 'SettingsController@user_edit');
    Route::resource('settings', 'SettingsController@user_update');

    //upload
    Route::post('uploadImage', 'ArticlesController@uploadImage');
    Route::get('setting/flush', 'SettingsController@flush');

    //resume
    Route::get('resume/experience', 'ResumeController@experience');
    Route::get('resume/add_experience', 'ResumeController@add_experience');
    Route::post('resume/store_experience', 'ResumeController@store_experience');
    Route::get('resume/project', 'ResumeController@project');
    Route::get('resume/add_project', 'ResumeController@add_project');

    //upload
    Route::get('upload', 'UploadController@index');
    Route::post('upload/file', 'UploadController@uploadFile');
    Route::delete('upload/file', 'UploadController@deleteFile');
    Route::post('upload/folder', 'UploadController@createFolder');
    Route::delete('upload/folder', 'UploadController@deleteFolder');
});

/*
 * auth
 */
Route::get('login', 'Admin\AuthController@getLogin');
Route::post('login', 'Admin\AuthController@postLogin');
Route::get('logout', 'Admin\AuthController@logout');

/*
 * home
 */
Route::group(['namespace' => 'Home', 'middleware' => 'httpcache'], function () {
    Route::get('/', 'AboutController@index');
    Route::get('/blog', 'HomeController@index');
    Route::get('tags', 'TagsController@index');
    Route::get('tags/{slug}', 'TagsController@show');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{slug}', 'CategoriesController@show');
    Route::get('abouts', 'AboutController@index');
    Route::get('abouts/{slug}', 'AboutController@index');
    Route::get('blogs', 'ArticlesController@index');
    Route::get('timeline', 'TimelineController@index');
    Route::get('contact', 'ContactsController@index');
    Route::post('contact/message', 'ContactsController@message');
    Route::get('gallerys', 'GallerysController@index');
    Route::get('{slug}', 'ArticlesController@show');
});
