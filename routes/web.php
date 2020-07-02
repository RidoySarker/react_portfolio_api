<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/ChartData',['middleware'=>'auth','uses'=>'ChartDataController@selectall']);
$router->get('/ClientReview',['middleware'=>'auth','uses'=>'ClientReviewController@selectall']);
$router->post('/ContactSend',['middleware'=>'auth','uses'=>'ContactController@ContactSend']);

$router->get('/CourceHome',['middleware'=>'auth','uses'=>'CourceController@selectfour']);
$router->get('/CourceAll',['middleware'=>'auth','uses'=>'CourceController@selectall']);
$router->get('/CourceAll/{CourseID}',['middleware'=>'auth','uses'=>'CourceController@selectdetails']);
$router->get('/footer',['middleware'=>'auth','uses'=>'FooterController@selectall']);
$router->get('/information',['middleware'=>'auth','uses'=>'InformationController@selectall']);
$router->get('/Service',['middleware'=>'auth','uses'=>'ServiceController@selectall']);

$router->get('/ProjectHome',['middleware'=>'auth','uses'=>'ProjectController@selecthome']);
$router->get('/ProjectAll',['middleware'=>'auth','uses'=>'ProjectController@selectall']);
$router->get('/ProjectAll/{projectid}',['middleware'=>'auth','uses'=>'ProjectController@selectproject']);


$router->get('/videohome',['middleware'=>'auth','uses'=>'HomeController@video']);
$router->get('/TechDes',['middleware'=>'auth','uses'=>'HomeController@techdes']);
$router->get('/HomeTop',['middleware'=>'auth','uses'=>'HomeController@hometop']);
$router->get('/TotalProject',['middleware'=>'auth','uses'=>'HomeController@totalproject']);




