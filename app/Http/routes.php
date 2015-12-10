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

//use DB;
use Carbon\Carbon;

Route::get('/', function () {
    //return view('welcome');
    
   // $names = DB::select('SELECT * FROM testing');
 // return $names;
});

Route::get('/', function () {
 
 //return Carbon::now();
    $url =  new \Purl\Url('http://jwage.com');
     $url->set('scheme', 'https')
         ->set('path', 'about/me');
         
         echo $url->getUrl();
    
});
