<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/privacy-policy', function () {
    return view('Help.privacypolicy');
});

Route::get('/terms-condition', function () {
    return view('Help.TermsCondition');
});

Route::get('/disclaimer', function () {
    return view('Help.disclaimer');
});


//Home page
Route::get('/','IndexController@index');
Route::get('/package/{id}','IndexController@PackageCategory')->name('index-package');

//Category page
Route::get('/dietplans-category','IndexController@DietPlansCategory')->name('dietplans-category');
Route::get('/fitness-category','IndexController@FitnessCategory')->name('fitness-category');

//Category Details
Route::get('/nutrition-category/{id}','IndexController@NutritionCategory')->name('nutrition-category');
Route::get('/fitnessyoga-category/{id}','IndexController@FitnessYogaCategory')->name('fitnessyoga-category');


//Header Pages
Route::get('/fitness','IndexController@Headerfitness')->name('fitness');
Route::get('/programs','IndexController@HeaderPrograms')->name('programs');
Route::get('/nutrition','IndexController@HeaderNutrition')->name('nutrition');
Route::get('/explore','IndexController@HeaderExplore')->name('explore');
Route::get('/mindfulness','IndexController@HeaderMindfulness')->name('mindfulness');
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });


//Product Detail
Route::get('/nutrition-detail/{id}','IndexController@FullNutritionDetail')->name('nutrition-detail');
Route::get('/fitness-yoga-detail/{id}','IndexController@FitnessYogaDetail')->name('fitness-yoga-detail');
Route::get('/program-detail/{id}','IndexController@ProgramDetail')->name('program-detail');

//Calculator
Route::get('/bmi-calculator', function () {
    return view('calculator.bmicalculator');
});


//Header Explore Detail page
Route::get('/explore-detail/{id}','IndexController@ExploreDetail')->name('explore-detail');

Route::get('/program-category/{id}','IndexController@ProgramCategory')->name('program-category');
