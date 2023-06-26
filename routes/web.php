<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EncadrantController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\PageNotFoundController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\formationComplementaireController;

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

Route::get('/', [EvenementController::class,'welcome'])->name('welcome');
Auth::routes();
Route::get('lang/{locale}', [App\Http\Controllers\LanguageController::class, 'swap'])->name('lang.swap');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// in web.php

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('admin')->name('admin.dashboard');


Route::resource('users', UserController::class);
Route::resource('centre', CentreController::class);
Route::resource('evenements',EvenementController::class);
Route::resource('encadrant',EncadrantController::class);
Route::resource('offre',OffreController::class);
Route::resource('programme',ProgrammeController::class);
Route::resource('certification',CertificationController::class);
// Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);

Route::get('/botman',[BotManController::class,'handle']);
Route::post('/botman',[BotManController::class,'handle']);
Route::get('/master', [MasterController::class, 'getOffers'])->name('master');
Route::get('showMaster/{lieu}', [MasterController::class, 'showMoreMaster'])->name('showMaster');
Route::get('Masteroffre/{offre}', [MasterController::class, 'showOfferMaster'])->name('Masteroffre');

Route::get('/licence', [LicenceController::class, 'getOffers'])->name('licence');
Route::get('showLicence/{lieu}', [LicenceController::class, 'showMoreLicence'])->name('showLicence');
Route::get('Licenceoffre/{offre}', [LicenceController::class, 'showOfferLicence'])->name('Licenceoffre');
Route::view('/contact','contactForm')->name('contactForm');
Route::post("/sent",[ContactController::class,'send'])->name('send.email');
Route::get("/actualite",[ActualiteController::class,'index']);
Route::get('certificat',[OffreController::class,'certificat'])->name('certificat');
Route::get('certificat-details/{offre}',[OffreController::class,'details'])->name('certificat-details');


Route::get('/formationComplementaire',[formationComplementaireController::class,'index']);

Route::fallback(FallbackController::class);
Route::post('/offres/{offre}/participate', [OffreController::class,'participate'])->name('offre.participate');
Route::get('/offres/{offre}/participants', [OffreController::class,'showParticipants'])->name('offre.participants');
