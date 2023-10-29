<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElijiController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\Contact\ContactCOntroller;

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


Route::get('/',[ElijiController::class, 'index'])->name('home');
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


Route::get('/create-contact',[ContactCOntroller::class, 'create'])->name('contacts.create');
Route::post('/store-client',[ContactCOntroller::class, 'store'])->name('contacts.store');



Route::group(['middleware' => 'auth'], function() {
    Route::get('/elijidashboard', [DashboardController::class,'dashboardhome'])->name('dashboard.dashboardhomepage');

    // Route::get('/dashboard',[ElijiController::class, 'index'])->name('home');
    
});


Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('registers.register');
    Route::post('/register', [AuthController::class, 'registerPOst'])->name('registers.register');
    Route::get('/login', [AuthController::class, 'login'])->name('logins.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('logins.login');


});
