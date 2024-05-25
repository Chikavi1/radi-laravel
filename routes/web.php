<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\LostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\CartController;


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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', [HomeController::class, 'home'])->name('home.home');
Route::get('/download', [HomeController::class, 'download'])->name('home.download');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('home.feedback');

Route::post('/add-product', [CartController::class, 'add'])->name('cart.add');
Route::post('/remove-product/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart-buy', [CartController::class, 'buy'])->name('cart.buy');

Route::post('/chikavi/order-create', [HomeController::class, 'orderCreate'])->name('order.create');
Route::post('/chikavi/order-update', [HomeController::class, 'orderUpdate'])->name('order.update');


Route::get('/generateLogoPlaca/{name}/{color}', [HomeController::class, 'generateLogoPlaca'])->name('home.generateLogoPlaca');
Route::get('/generateQrPlaca/{url}', [HomeController::class, 'downloadQR'])->name('home.generateImage');
Route::get('/generateThanks/{name}/{pet_name}', [HomeController::class, 'generateThanks'])->name('home.generateThanks');
Route::get('/start-guide-id', [HomeController::class, 'startguide'])->name('home.startguide');

Route::get('/chikavi/orders', [HomeController::class, 'orders'])->name('cart.orders');
Route::get('/buy-status', [CartController::class, 'statuscart'])->name('cart.status');

Route::get('/affiliate-program', [HomeController::class, 'affiliateprogram'])->name('home.affiliateprogram');
Route::get('/garantia-placas', [HomeController::class, 'garantias'])->name('home.garantias');

Route::resource('org', OrganizationsController::class);
Route::resource('pet', PetsController::class);
Route::resource('places', PlacesController::class);
Route::resource('lost', LostController::class);
Route::resource('links', LinksController::class);

Route::get('/placas-buy', [HomeController::class, 'placasbuy'])->name('home.placasbuy');
Route::get('/running', [HomeController::class, 'running'])->name('home.running');
Route::get('/ads', [HomeController::class, 'ads'])->name('home.ads');
Route::get('/ads-create', [HomeController::class, 'adsCreate'])->name('home.adsCreate');

Route::get('/event/{id}', [EventsController::class, 'show'])->name('events.show');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');

Route::get('/discounts', [HomeController::class, 'discounts'])->name('home.discounts');
Route::get('/discount/{id}', [HomeController::class, 'discount'])->name('home.discount');
Route::get('/discount-business/{id}', [HomeController::class, 'discountbusiness'])->name('home.discountbusiness');

Route::get('/pawrtners', [HomeController::class, 'business'])->name('home.business');
Route::get('/business', [HomeController::class, 'business'])->name('home.business');
Route::get('/pre-business', [HomeController::class, 'prebusiness'])->name('home.prebusiness');
Route::post('/prebusinessregister', [HomeController::class, 'prebusinessregister'])->name('prebusinessregister');


Route::get('/report-discount', [HomeController::class, 'reportdiscount'])->name('home.reportdiscount');
Route::get('/placas-distribuidor', [HomeController::class, 'placasdist'])->name('home.placasdist');
Route::get('/placas-descuento', [HomeController::class, 'placasdescuento'])->name('home.placasdescuento');
Route::get('/register-negocio-descuento', [HomeController::class, 'registerplacasdescuento'])->name('home.registerplacasdescuento');

Route::get('/memorial', [HomeController::class, 'memorial'])->name('home.memorial');
Route::get('/memorial/{id}', [HomeController::class, 'memorialshow'])->name('home.memorialshow');


Route::get('/business/{id}', [BusinessController::class, 'show'])->name('business.show');



Route::get('/adoptions', [PetsController::class, 'index'])->name('adoptions.index');
Route::get('/losts/free', [LostController::class, 'free'])->name('lost.free');

Route::post('/storeValidate', [HomeController::class, 'storeValidate'])->name('validate.store');

Route::get('/test-email', [HomeController::class, 'testEmail'])->name('test.index');
Route::get('/user-info', [HomeController::class, 'userInfo'])->name('user.index');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/terms',  [HomeController::class, 'terms'])->name('home.terms');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('home.privacy');
Route::get('/pet-friendly-owners', [HomeController::class, 'petFriendly'])->name('home.petFriendly');
Route::get('/placas', [HomeController::class, 'placas'])->name('home.placas');

Route::get('/losts/thumbnail', [LostController::class, 'thumbnail'])->name('lost.thumbnail');
Route::get('/losts/poster', [LostController::class, 'poster'])->name('lost.poster');


Route::get('/pets/{id}', [PetsController::class, 'qrCode'])->name('lost.qrCode');
Route::get('/pet_death/{id}', [PetsController::class, 'deathpdf'])->name('pet.deathpdf');

Route::get('/results', [PlacesController::class, 'result'])->name('places.result');
Route::get('/places-register', [PlacesController::class, 'register'])->name('places.register');


Route::get('/adoptions/pdf', [PetsController::class, 'adoptionsPdf'])->name('adoptions.pdf');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/validate_pet', [HomeController::class, 'validate_index'])->name('home.validate_index');
Route::get('/validate_pet/{id}', [HomeController::class, 'validate_show'])->name('home.validate_show');


Route::middleware('auth')->group(function () {

    Route::get('/memorial/{id}/comments', [HomeController::class, 'memorialshowcomments'])->name('home.memorialshowcomments');
    Route::post('/memorial/comment/', [HomeController::class, 'createCommment'])->name('home.createCommment');


    Route::get('/review/{id}', [ReviewsController::class, 'show'])->name('reviews.show');
    Route::post('/review/store', [ReviewsController::class, 'store'])->name('reviews.store');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/my-pets', [PetsController::class, 'myPets'])->name('pets.my-pets');
    Route::get('/losts/finish/{id}', [LostController::class, 'finish'])->name('lost.finish');

});

require __DIR__.'/auth.php';
