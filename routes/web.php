<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElijiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('home',[ElijiController::class, 'index'])->name('home');
Route::get('/servicedetails',[ElijiController::class, 'showservice'])->name('service.servicedetails');
Route::get('/vision',[ElijiController::class, 'vision'])->name('service.visions');
Route::get('/mission',[ElijiController::class, 'mission'])->name('service.missions');
Route::get('/objective',[ElijiController::class, 'objectives'])->name('service.objectives');

Route::get('/construction',[ElijiController::class, 'construction'])->name('what_we_do.constructions');
Route::get('/consultancy',[ElijiController::class, 'consultancy'])->name('what_we_do.consultancys');
Route::get('/disposal',[ElijiController::class, 'disposal'])->name('what_we_do.disposals');
Route::get('/supportcrop',[ElijiController::class, 'supportcrop'])->name('what_we_do.supportcrop');

Route::get('/allservicespage', [ElijiController::class, 'allservicespage'])->name('allservicesfolder.allservicespages');
Route::get('/contact-us', [ElijiController::class, 'contactus'])->name('contactus.contactus');
Route::get('/about-us', [ElijiController::class, 'aboutus'])->name('about_us.aboutus');


