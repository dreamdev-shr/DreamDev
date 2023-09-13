<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');
Route::get('/services', 'App\Http\Controllers\ServicesController@index')->name('services');
Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio');
Route::get('/team', 'App\Http\Controllers\TeamController@index')->name('team');
Route::get('/blog', 'App\Http\Controllers\BlogController@index')->name('blog');
Route::get('/blog_details', 'App\Http\Controllers\BlogController@blog_details')->name('blog-details');
Route::get('/portfolio_details', 'App\Http\Controllers\PortfolioController@portfolio_details')->name('portfolio-details');
Route::get('/services_details', 'App\Http\Controllers\ServicesController@services_details')->name('services-details');

// Example nested routes for the dropdown menu
Route::prefix('dropdown')->group(function () {
    Route::get('/', 'App\Http\Controllers\DropdownController@index')->name('dropdown');
    Route::get('/deep-dropdown', 'App\Http\Controllers\DeepDropdownController@index')->name('deep-dropdown');
    // Add other nested routes as needed
});

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
