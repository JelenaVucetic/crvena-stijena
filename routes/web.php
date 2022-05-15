<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get(LaravelLocalization::transRoute('routes.visit'), [PagesController::class, 'visit'])->name('visit');
    Route::get(LaravelLocalization::transRoute('routes.how-to-get-there'), [PagesController::class, 'howToGetThere'])->name('how-to-get-there');
    Route::get(LaravelLocalization::transRoute('routes.importance'), [PagesController::class, 'importance'])->name('importance');
    Route::get(LaravelLocalization::transRoute('routes.landscape'), [PagesController::class, 'landscape'])->name('landscape');
    Route::get(LaravelLocalization::transRoute('routes.geology'), [PagesController::class, 'geology'])->name('geology');
    Route::get(LaravelLocalization::transRoute('routes.age-of-the-site'), [PagesController::class, 'ageOfTheSite'])->name('age-of-the-site');
    Route::get(LaravelLocalization::transRoute('routes.who-lived'), [PagesController::class, 'whoLived'])->name('who-lived');
    Route::get(LaravelLocalization::transRoute('routes.archaeological-excavations'), [PagesController::class, 'archaeologicalExcavations'])->name('archaeological-excavations');
    Route::get(LaravelLocalization::transRoute('routes.finds'), [PagesController::class, 'finds'])->name('finds');
    Route::get(LaravelLocalization::transRoute('routes.goals'), [PagesController::class, 'goals'])->name('goals');
    Route::get(LaravelLocalization::transRoute('routes.documentation'), [PagesController::class, 'documentation'])->name('documentation');
    Route::get(LaravelLocalization::transRoute('routes.neanderthal-fire-use'), [PagesController::class, 'neanderthalFireUse'])->name('neanderthal-fire-use');
    Route::get(LaravelLocalization::transRoute('routes.neanderthal-lithic-technology'), [PagesController::class, 'neanderthalLithicTechnology'])->name('neanderthal-lithic-technology');
    Route::get(LaravelLocalization::transRoute('routes.hunting-and-meat-consumption'), [PagesController::class, 'huntingAndMeatConsumption'])->name('hunting-and-meat-consumption');
    Route::get(LaravelLocalization::transRoute('routes.paleoenvironmental-reconstruction'), [PagesController::class, 'paleoenvironmentalReconstruction'])->name('paleoenvironmental-reconstruction');
    Route::get(LaravelLocalization::transRoute('routes.geoarchaeology'), [PagesController::class, 'geoarchaeology'])->name('geoarchaeology');
    Route::get(LaravelLocalization::transRoute('routes.books'), [PagesController::class, 'books'])->name('books');
    Route::get(LaravelLocalization::transRoute('routes.journal-articles'), [PagesController::class, 'journalArticles'])->name('journal-articles');
    Route::get(LaravelLocalization::transRoute('routes.village'), [PagesController::class, 'village'])->name('village');
    Route::get(LaravelLocalization::transRoute('routes.monastery'), [PagesController::class, 'monastery'])->name('monastery');
    Route::get(LaravelLocalization::transRoute('routes.scientific-team'), [PagesController::class, 'scientificTeam'])->name('scientific-team');
    Route::get(LaravelLocalization::transRoute('routes.national-museum'), [PagesController::class, 'nationalMuseum'])->name('national-museum');
    Route::get(LaravelLocalization::transRoute('routes.funding-sources'), [PagesController::class, 'fundingSources'])->name('funding-sources');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [PagesController::class, 'contact'])->name('contact');
});
