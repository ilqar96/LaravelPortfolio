<?php


// Frontend routes
Route::group(['namespace'=>'User','as'=>'home.'],function (){

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/resume', 'HomeController@resume')->name('resume');
    Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
    Route::get('/resume', 'HomeController@resume')->name('resume');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/blog/{slug}', 'HomeController@singleBlog')->name('single_blog')->where('slug','[A-Za-z0-9]+');;

});

// redirect if route is home
Route::redirect('/home','/');


// Admin side routes
Route::group(['middleware'=>['admin'],'prefix'=>'admin','as'=>'admin.','namespace'=>'Admin'],function () {

    Route::get('/','DashboardController@index')->name('dashboard');

    // user controller route
    Route::resource('users','UserController');
    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController');


});


// change language route
Route::get('/locale/{locale}', function ($locale){
    Session::put('locale',$locale);
    return back();
})->name('locale');

// Auth routes
Auth::routes();

