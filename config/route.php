<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/1/22
 * Time: 20:57
 */

use Universe\Support\Route;


/**
 * $route->addRoute('GET', '/users', 'get_all_users_handler');
 * {id} must be a number (\d+)
 * $route->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
 * The /{title} suffix is optional
 * $route->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
 */


/**
 * 首页
 */
Route::get('/', 'IndexController@index');

Route::group(['prefix' => '/test', 'middleware' => 'login'],function () {
    Route::get('', 'IndexController@test');

    Route::get('/one', 'IndexController@test');
});

Route::get('/tow', 'IndexController@index');