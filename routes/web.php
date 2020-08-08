<?php

use Illuminate\Support\Facades\Route;

Route::get('/','DefaultController@index')->name('index');
Route::get('post/{category}/{slug}','DefaultController@postView')->name('postView');
Route::get('/category/{slug}','DefaultController@categoryView')->name('categoryView');
Route::get('/page/{slug}','DefaultController@pageView')->name('pageView');


Route::group(['prefix'=>'admin'],function (){
   Route::get('/','Admin\AdminController@index')->name('admin.index');
   Route::resource('category','Admin\CategoryController');
   Route::resource('page','Admin\PageController');
   Route::resource('pageDesign','Admin\PageDesignController');
   Route::post('/page/imageUpload','Admin\PageDesignController@imageUpload');
   Route::resource('gallery','Admin\GalleryController');
   Route::resource('galleryImages','Admin\GalleryImagesController');
   Route::resource('post','Admin\PostController');
    Route::resource('menu','Admin\MenuController');
   Route::post('post/imageUpload','Admin\PostController@imageUpload')->name('post.imageUpload');
   Route::post('/category/getSlug','Admin\HelperController@getCategorySlug');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
