<?php

use Illuminate\Http\Request;

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
 

if(config('cities.middleware')){

    Route::middleware(config('cities.middleware'))->group(function () {
    
        Route::get("continents", "CityController@continents");
        Route::get("continents/{continent}", "CityController@continent");
        
        Route::get("countries", "CityController@countries");
        Route::get("countries/{country}", "CityController@country");
        
        Route::get("cities", "CityController@cities");
        Route::get("cities/{city}", "CityController@city");
        
        Route::get("districts", "CityController@districts");
        Route::get("districts/{district}", "CityController@district");
    
        Route::get("timezones", "CityController@timezones"); 
        Route::get("timezones/{timezone}", "CityController@timezone");
         
    });
}
else{

    Route::get("continents", "CityController@continents");
    Route::get("continents/{continent}", "CityController@continent");
    
    Route::get("countries", "CityController@countries");
    Route::get("countries/{country}", "CityController@country");
    
    Route::get("cities", "CityController@cities");
    Route::get("cities/{city}", "CityController@city");
    
    Route::get("districts", "CityController@districts");
    Route::get("districts/{district}", "CityController@district");

    Route::get("timezones", "CityController@timezones"); 
    Route::get("timezones/{timezone}", "CityController@timezone");
}