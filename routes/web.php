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

Route::get('','FrontendController@getHome');
Route::get('danh-muc/{strLink}', 'FrontendController@getCate');
Route::get('{strLink}.html','FrontendController@getPrd');
Route::get('thong-tin','FrontendController@getInfo');
Route::get('lien-he','FrontendController@getContact');
View::composer(['*'],  function ($view)
{
        $categories=App\Models\Category::all();
        $view->with('categories',$categories);
    
});
Route::get('update', function () {
    $user=new App\User;
    $user->username='admin';
    $user->level=1;
    $user->password=bcrypt('123456');
    $user->save();
});
//admin
Route::get('login','BackendController@getLogin')->middleware('checkLogout');
Route::post('login','BackendController@postLogin');
Route::group(['prefix' => 'admin','middleware'=>'checkLogin'], function () {
    Route::get('','BackendController@getIndex');
    Route::get('logout','BackendController@logout');
    Route::group(['prefix' => 'category'], function () {
        Route::get('','BackendController@getCategory' );
        Route::post('','BackendController@postCategory' );
        Route::get('edit/{idCate}', 'BackendController@getEditCategory');
        Route::post('edit/{idCate}','BackendController@postEditCategory' );
        Route::get('del/{idCate}', 'BackendController@delCategory');
    });
    Route::group(['prefix' => 'post'], function () {
        Route::get('','BackendController@getListPost');
         Route::get('add','BackendController@getAddPost');
         Route::post('add','BackendController@postAddPost');
         Route::get('edit/{idPost}','BackendController@getEditPost');
         Route::post('edit/{idPost}','BackendController@postEditPost');
         Route::get('delete','BackendController@deletePost');
    });

});