<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();
/*
|------------------------------------------------------------------------------------
| Backend
|------------------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Backend', 'prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'MainController@getIndex');
    Route::resource('users', 'UserController');
    
    Route::group(["prefix" => "settings"], function(){
        Route::get('{slug}', 'SettingsController@getView');
        Route::post('default-cover', 'SettingsController@postDefaultCover');
        Route::post('default-avatar', 'SettingsController@postDefaultAvatar');
        Route::post('social', 'SettingsController@postSocial');
        Route::post('general', 'SettingsController@postGeneral');
        Route::get('/', 'SettingsController@getIndex');
    });
});
/*
|------------------------------------------------------------------------------------
| Frontend
|------------------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'MainController@getIndex');
    Route::get('our-waterpark', 'MainController@getOurWaterpark');
    Route::get('prices', 'MainController@getPrices');
    Route::get('events', 'MainController@getEvents');
    Route::get('gallery', 'MainController@getGallery');
    Route::get('contact-us', 'MainController@getContactUs');
    Route::get('faq', 'MainController@getFaq');
    Route::get('terms-and-condition', 'MainController@getTermsAndCondition');

    Route::group(['prefix' => 'booknow'], function () {
        Route::get('first-step', 'BooknowController@getBooknowFirstStep');
        Route::get('last-step', 'BooknowController@getBooknowLastStep');
    });
});
