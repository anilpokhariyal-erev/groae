<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\FileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\CostCalculatorController;



// static pages controller

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('trending-freezone', [HomeController::class, 'trending_freezone'])->name('trending_freezone');
Route::get('compare-freezone', [HomeController::class, 'compare_freezone'])->name('compare-freezone');
Route::get('explore-freezone/{id?}', [HomeController::class, 'explore_freezone'])->name('explore-freezone');
Route::post('get-freezones', [HomeController::class, 'get_freezone'])->name('get-freezones');
Route::get('freezone-detail/{slug}/{name?}', [HomeController::class, 'freezone_detail'])->name('freezone-detail');

Route::resource('calculate-licensecosts', CostCalculatorController::class)->only(['index', 'store']);
Route::get('calculate-licensecost-payment/{id}', [CostCalculatorController::class, 'settle_payment'])->name('calculate-licensecosts.settle_payment');

Route::get('calculate-licensecost-comparison/{id}', [CostCalculatorController::class, 'ai_compare'])->name('calculate-licensecost.compare.ai');
Route::get('cost-summary', [CostCalculatorController::class, 'cost_summary'])->name('calculate-licensecost.summary');

// Route::post('get-freezone-amenities', [CostCalculatorController::class, 'getFreezoneAmenities'])->name('get-freezone-amenities');
// Route::post('get-offices', [CostCalculatorController::class, 'getOffices'])->name('get-offices');
// Route::post('get-visa-activity', [CostCalculatorController::class, 'getVisaActivity'])->name('get-visa-activity');

//added by brij these routes
Route::get('article-blogs', [BlogController::class, 'blogs'])->name('article-blogs');
Route::get('article-blogs/{slug}', [BlogController::class, 'blog_detail'])->name('blog-detail');

Route::get('/signin', [AuthController::class, 'signin'])->name('customer.login');
Route::post('/customer-login', [AuthController::class, 'login'])->name('customer.post.login');
Route::get('/signup', [AuthController::class, 'signup'])->name('customer.signup');
Route::post('/customer-signup', [AuthController::class, 'register_customer'])->name('customer.register');

Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('customer.forgotpassword');
Route::post('/forgot-password', [AuthController::class, 'submit_forgot_password'])->name('customer.post.forgotpassword');
Route::get('reset-password/{token}', [AuthController::class, 'reset_password'])->name('customer.password.reset');
Route::post('reset-password', [AuthController::class, 'reset_password_store'])->name('customer.password.store');



Route::middleware(['auth.customer'])->group(function () {
    Route::get('/my_profile', [CustomerController::class, 'view_profile'])->name('customer.profile.view');
    Route::patch('/my_profile', [CustomerController::class, 'update_profile'])->name('customer.profile.update');
    Route::get('/my_details', [CustomerController::class, 'view_details'])->name('customer.detail.view');
    Route::patch('/my_details', [CustomerController::class, 'update_details'])->name('customer.detail.update');
    Route::get('/my_uploads', [CustomerController::class, 'view_uploads'])->name('customer.upload.view');
    Route::patch('/my_uploads', [CustomerController::class, 'update_uploads'])->name('customer.upload.update');
    Route::get('/my_uploads/delete/{id}', [CustomerController::class, 'delete_uploads'])->name('customer.upload.delete');
    Route::get('/my_businessSetup', [CustomerController::class, 'view_businessSetup'])->name('customer.my_businessSetup.view');
    Route::get('/my_transactions', [CustomerController::class, 'view_transactions'])->name('customer.my_transactions.view');
    Route::get('/my_downloads', [CustomerController::class, 'view_downloads'])->name('customer.my_downloads.view');
    Route::post('customer-logout', [CustomerController::class, 'logout'])->name('customer.logout');

    //added by brij
    Route::get('/my_settings', [CustomerController::class, 'settings'])->name('customer.profile.settings');
    Route::patch('/my_settings', [CustomerController::class, 'change_password'])->name('customer.profile.updatepassword');
    Route::get('protected-file/{path}', [FileController::class, 'download'])->name('protected-file.download');
});

Route::post('/payment', [PaymentController::class, 'pay']);

Route::resource('contact-us', ContactUsController::class)->only(['index', 'store']);

Route::get('/{slug}', [HomeController::class, 'page_content'])->name('page.content');
