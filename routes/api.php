<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('/user')->group(function ()
{ 
   Route::post('register', 'API\DevController@devSignUp');
   Route::post('loginDev', 'API\DevController@devLogin');
   Route::post('login', 'API\FakeLoginController@login');
   Route::post('addtodo', 'API\DevController@addTodo');
   
   //  Route::post('register', 'API\AuthController@register');
   //  Route::post('login', 'API\AuthController@login');
   //  Route::post('forgot', 'API\ForgotPasswordController@forgot');
   //  Route::post('reset', 'API\ForgotPasswordController@reset');

    
     Route::middleware('auth:api')->group(function(){
        
      Route::post('logoutDev', 'API\DevController@logOutDev');
      Route::get('all', 'API\DevController@hackedUsers');
      Route::delete('delete/{id}', 'API\DevController@deleteUser');

      //   Route::post('addBio', 'API\UserProfileController@addBio');
      //   Route::post('deleteBio', 'API\UserProfileController@deleteBio');
      //   Route::get('/allUsers', 'API\UserController@index');
      //   Route::post('/logout', 'API\AuthController@logout');
      //   Route::post('/logout_all' , 'API\AuthController@logout_all');
      //   Route::resource('products', 'API\ProductController');
     });
        
});
