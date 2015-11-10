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

Route::get('/', function () {
    return view('welcome');
});

Route::get('all_reports', array(
    'as' => 'all_reports',
    'uses' => 'ReportController@allReports'
));

Route::get('by_phone_number/{phone_number}', array(
    'as' => 'by_phone_number',
    'uses' => 'ReportController@byPhoneNumber'
));

Route::get('by_category/{category}', array(
    'as' => 'by_category',
    'uses' => 'ReportController@byCategory'
));

Route::get('by_mobile_network/{mobile_network}', array(
    'as' => 'by_mobile_network',
    'uses' => 'ReportController@byMobileNetwork'
));

Route::post('create_report', array(
    'as' => 'create_report',
    'uses' => 'ReportController@createReport'
));