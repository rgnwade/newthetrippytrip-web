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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Home\HomepageController@index')->name('index');
Route::get('/event', 'Pages\EventController@EventPage')->name('eventpage');
Route::get('/food-drink', 'Pages\FoodDrinkController@FoodDrink')->name('food-drink');
Route::get('/nightlife', 'Pages\NightlifeController@Nightlife')->name('nightlife');
Route::get('/lifestyle', 'Pages\LifestyleController@Lifestyle')->name('lifestyle');
Route::get('/fashion', 'Pages\FashionController@Fashion')->name('fashion');
Route::get('/culture', 'Pages\CultureController@Culture')->name('culture');
Route::get('/tips', 'Pages\TipsController@Tips')->name('tips');
Route::get('/resource', 'Pages\ResourceController@Resource')->name('resource');
Route::get('/event/{channel_no}', 'Pages\EventController@EventCategory')->name('eventcategory');
Route::get('/food-drink/{channel_no}', 'Pages\FoodDrinkController@FoodDrinkCategory')->name('fooddrinkcategory');
Route::get('/nightlife/{channel_no}', 'Pages\NightlifeController@NightlifeCategory')->name('nightlifecategory');
Route::get('/fashion/{channel_no}', 'Pages\FashionController@FashionCategory')->name('fashioncategory');
Route::get('/destination/{channel_no}', 'Pages\DestinationController@DestinationCategory')->name('destinationcategory');
Route::get('/article/{id}', 'Pages\SinglePageController@getArticleSingle')->name('article');



//subscribe
Route::post('/post-subscribe', 'Home\HomepageController@Subscribe')->name('post-subscribe');
