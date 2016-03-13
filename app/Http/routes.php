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
    Route::get('articles/index', 'ArticlesController@index');
    Route::get('articles/trash', 'ArticlesController@trash');
    Route::post('articles/restore/{id}', 'ArticlesController@restore');
    Route::delete('articles/forceDelete/{id}', 'ArticlesController@forceDelete');
    Route::resource('articles', 'ArticlesController');
    Route::get('categories/index', 'CategoriesController@index');
    Route::resource('categories', 'CategoriesController');
    Route::get('tags/index', 'TagsController@index');
    Route::resource('tags', 'TagsController');
    Route::get('settings/index', 'SettingsController@index');
    Route::get('settings/user', 'SettingsController@user');
    Route::patch('settings/index', 'SettingsController@update');
    Route::post('uploadImage', 'ArticlesController@uploadImage');
    Route::get('setting/flush', 'SettingsController@flush');
    Route::get('resume/experience', 'ResumeController@experience');
    Route::get('resume/add_experience', 'ResumeController@add_experience');
    Route::post('resume/store_experience', 'ResumeController@store_experience');
    Route::get('resume/project', 'ResumeController@project');
    Route::get('resume/add_project', 'ResumeController@add_project');

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
Route::group(['namespace' => 'Home'], function () {
    Route::resource('/', 'HomeController@index');
    Route::get('tags', 'TagsController@index');
    Route::get('tags/{slug}', 'TagsController@show');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{slug}', 'CategoriesController@show');
    Route::get('abouts', 'AboutController@index');
    Route::get('abouts/{slug}', 'AboutController@index');
    Route::get('articles', 'ArticlesController@index');
    Route::get('{slug}', 'ArticlesController@show');
});
