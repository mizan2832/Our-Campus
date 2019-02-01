<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|Route::get('/', function () {
    return view('home');
});

*/




//Route::get('home','userController@postSignUp');
//Route::post('store','userController@store');



Route::group(['middleware' => ['web']], function () {
	//Authentication Routes
	Route::get('auth/login',['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
	Route::post('auth/login','Auth\AuthController@postLogin');
	Route::get('auth/logout',['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);

	//registration route
	Route::get('auth/register',['as'=>'register', 'uses'=>'Auth\AuthController@getRegister']);
	//Route::get('auth/register','Auth\AuthController@getRegister');
	Route::post('auth/register','Auth\AuthController@postRegister');

	//password reset 

	Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');
	Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset','Auth\PasswordController@reset');

	//Categories 



	//Route::get('admin',['as'=>'admin', 'uses'=>'HomeController@getAdmin']);

	//tags
	Route::resource('tags','TagController',['except'=>['create']]);

	Route::resource('tagpage','TagPageController',['except'=>['create']]);
	//comments

	Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as'=>'comments.store']);
    Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit','as'=>'comments.edit']);
    Route::put('comments/{id}',['uses'=>'CommentsController@update','as'=>'comments.update']);
    Route::delete('comments/{id}',['uses'=>'CommentsController@destroy','as'=>'comments.destroy']);
    
    Route::get('comments/{id}/delete',['uses'=>'CommentsController@delete','as'=>'comments.delete']);
	

    Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])
        ->where('slug','[\w\ d\-\_]+');
    Route::get('blog',['as'=>'blog.index','uses'=>'BlogController@getIndex']);
	Route::get('', 'PagesController@getWelcome');

	Route::get('about', 'PagesController@getAbout');
   
 //tuition 
    Route::get('tui',['uses'=>'TuitionController@getIndex']);
	Route::resource('tuition','TuitionController');     
    Route::resource('tuitioncategory','TuitioncatController'); 

		//image crud

	//Route::get('image-gallery', 'ImageGalleryController@index');
    //Route::post('image-gallery', 'ImageGalleryController@upload');
    //Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');
	

	

	Route::resource('posts','PostController');

	Route::resource('profile','ProfileController');

	//Image Gallery

	//Route::resource('image','ImageController');
     Route::get('donate',['uses'=>'BloodController@getBlood']);

    Route::resource('blood','BloodController');
    //profile controller 


    //search

    Route::any('/search','HomeController@search');
    Route::any('/blood','HomeController@blood');
    Route::resource('blood_search','SearchController');

	Route::resource('categories','CategoryController',['except'=>['create']]);
	Route::resource('categories','CategoryController',['except'=>['create']]);

   //location

	Route::resource('location','LocationController',['except'=>['create']]);
	
	//blood 

	Route::resource('location','LocationController',['except'=>['create']]);
	//research
	Route::resource('res','ResearchController');
	Route::get('research','ResearchController@getResearch');

});



Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
         
         Route::get('/',function(){
         	
         	return view('admin.index');
         })->name('admin.index');

   
});

