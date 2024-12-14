<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
//use App\Http\Controllers\UserController;
//use App\Http\Controllers\OfferController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\PcVisaController;
use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\CustomerController;
//use App\Http\Controllers\FreezoneController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PcLicenseController;
use App\Http\Controllers\PcPackageController;
use App\Http\Controllers\Front\CostCalculator;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\PcActivityController;
//use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\FreezonePageController;


//Frontend Controllers
use App\Http\Controllers\OtherServiceController;
use App\Http\Controllers\PriceCalculatorController;
use App\Http\Controllers\ProcessDocumentController;
use App\Http\Controllers\PcAdditionalActivityController;



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

/** Dynamic routes by brij **/



/** End Dynamic routes by brij**/

Route::middleware(['check.customer.status'])->group(function () {

//Route::get('/', [PageController::class, 'home'])->name('home');

//Route::get('/signin', [PageController::class, 'onboarding'])->name('customer.login');

//Route::get('/forgot_password', [PageController::class, 'forgot_password'])->name('forgot_password');

Route::get('/reset_password', [PageController::class, 'reset_password']);

Route::get('/search_result', [PageController::class, 'search_result'])->name('search_result');

Route::get('/article_blogs', [PageController::class, 'article_blogs'])->name('article_blogs');

Route::get('/blog_details', [PageController::class, 'blog_details'])->name('blog_details');

// Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact');

//Route::get('/explore_freezone', [PageController::class, 'explore_freezone'])->name('explore_freezone');

// Route::get('/compare_freezone', [PageController::class, 'compare_freezone'])->name('compare_freezone');

// Route::get('/trending_freezone', [PageController::class, 'trending_freezone'])->name('trending_freezone');

// Route::get('/about_us', [PageController::class, 'about_us'])->name('about_us');

Route::get('/benefits_details', [PageController::class, 'benefits_details'])->name('benefits_details');

Route::get('/business_licenses_information', [PageController::class, 'business_licenses_information'])->name('business_licenses_information');

Route::get('/customer_guides', [PageController::class, 'customer_guides'])->name('customer_guides');

Route::get('/rules_regulation', [PageController::class, 'rules_regulation'])->name('rules_regulation');

Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');

Route::get('/activities_information', [PageController::class, 'activities_information'])->name('activities_information');

//Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/view_lowestprice', [PageController::class, 'view_lowestprice'])->name('view_lowestprice');

Route::get('/calculate_licensecost', [PageController::class, 'calculate_licensecost'])->name('calculate_licensecost');

Route::get('/pre_postinfo', [PageController::class, 'pre_postinfo'])->name('pre_postinfo');

Route::get('/pre_postdetail', [PageController::class, 'pre_postdetail'])->name('pre_postdetail');

require __DIR__ . '/auth.php';

});
