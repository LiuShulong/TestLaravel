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

use App\Entity\Member;

Route::get('/', function () {
    return view('login');
//    return Member::all();
});


Route::get('/login','View\MemberController@toLogin');


Route::get('/register', 'View\MemberController@toRegister');

Route::Any('service/validate_code/create','Service\ValidateCodeController@create');

Route::Any('service/validate_code/send','Service\ValidateCodeController@sendSMS');

Route::post('register', 'View\MemberController@register');

Route::post('add', 'Service\Test@add');
Route::post('update', 'Service\Test@update');
