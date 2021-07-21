<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("all", "CustomersContoller@list");
// Route::get("/all", "CustomersContoller@getCountryCodes");
Route::get("/all", "CustomersContoller@getAll");
Route::get("/country_filter/{country_filter}", "CustomersContoller@getFilteredCountries");
Route::get("/state_filter/{state_filter}", "CustomersContoller@getSateFilter");
Route::get("/country_state_filter/{country_filter}/{state_filter}", "CustomersContoller@getStateCountryFilter");

