<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\PcVisaController;
use App\Http\Controllers\ProfileController;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PcLicenseController;
use App\Http\Controllers\PcPackageController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PcActivityController;


//Frontend Controllers
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FreezonePageController;
use App\Http\Controllers\OtherServiceController;


//Admin routes added by brij and working routes
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Frontend\FileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\FreezoneController;
use App\Http\Controllers\Admin\ContactUsController;

use App\Http\Controllers\PriceCalculatorController;
use App\Http\Controllers\ProcessDocumentController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\PcAdditionalActivityController;
use App\Http\Controllers\Admin\FreezoneBookingController;
use App\Http\Controllers\Admin\CustomerDocumentController;

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeOptionController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\CurrencyController;
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

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/price-calculator', [PriceCalculatorController::class, 'calculator_form'])->name('calculator_form');
    Route::post('/price-calculator', [PriceCalculatorController::class, 'calculate'])->name('calculate_price');

    Route::get('/', function () {
        if (auth()->user()->hasRole('superadmin') || auth()->user()->can('dashboard')) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('profile.edit');
        }
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['role_or_permission:dashboard']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');

    Route::get('roles', [RoleController::class, 'index'])->name('roles.index')->middleware('role_or_permission:view-roles');
    Route::get('role/create', [RoleController::class, 'create'])->name('roles.create')->middleware('role_or_permission:create-roles');
    Route::post('role/store', [RoleController::class, 'store'])->name('roles.store')->middleware('role_or_permission:store-roles');
    Route::get('role/edit/{uuid}', [RoleController::class, 'edit'])->name('roles.edit')->middleware('role_or_permission:edit-roles');
    Route::put('role/update/{uuid}', [RoleController::class, 'update'])->name('roles.update')->middleware('role_or_permission:update-roles');
    Route::get('role/delete/{uuid}', [RoleController::class, 'delete'])->name('roles.delete')->middleware('role_or_permission:delete-roles');

    Route::get('freezone-users', [UserController::class, 'freezone_index'])->name('freezone-users.index')->middleware('role_or_permission:view-freezone-admin');
    Route::get('freezone-user/create', [UserController::class, 'freezone_create'])->name('freezone-users.create')->middleware('role_or_permission:create-freezone-admin');
    Route::post('freezone-user/store', [UserController::class, 'freezone_store'])->name('freezone-users.store')->middleware('role_or_permission:store-freezone-admin');
    Route::get('freezone-user/edit/{uuid}', [UserController::class, 'freezone_edit'])->name('freezone-users.edit')->middleware('role_or_permission:edit-freezone-admin');
    Route::put('freezone-user/{uuid}', [UserController::class, 'freezone_update'])->name('freezone-users.update')->middleware('role_or_permission:update-freezone-admin');
    Route::get('freezone-user/delete/{uuid}', [UserController::class, 'freezone_delete'])->name('freezone-users.delete')->middleware('role_or_permission:delete-freezone-admin');

    Route::get('sub-admins', [UserController::class, 'subadmin_index'])->name('subadmin-users.index')->middleware('role_or_permission:view-subadmins');
    Route::get('sub-admin/create', [UserController::class, 'subadmin_create'])->name('subadmin-users.create')->middleware('role_or_permission:create-subadmins');
    Route::post('sub-admin/store', [UserController::class, 'subadmin_store'])->name('subadmin-users.store')->middleware('role_or_permission:store-subadmins');
    Route::get('sub-admin/edit/{uuid}', [UserController::class, 'subadmin_edit'])->name('subadmin-users.edit')->middleware('role_or_permission:edit-subadmins');
    Route::put('sub-admin/{uuid}', [UserController::class, 'subadmin_update'])->name('subadmin-users.update')->middleware('role_or_permission:update-subadmins');
    Route::get('sub-admin/delete/{uuid}', [UserController::class, 'subadmin_delete'])->name('subadmin-users.delete')->middleware('role_or_permission:delete-subadmins');

    Route::get('freezones', [FreezoneController::class, 'index'])->name('freezones.index')->middleware('role_or_permission:view-freezones');
    Route::get('freezone/create', [FreezoneController::class, 'create'])->name('freezones.create')->middleware('role_or_permission:create-freezones');
    Route::post('freezone/store', [FreezoneController::class, 'store'])->name('freezones.store')->middleware('role_or_permission:store-freezones');
    Route::get('freezone/edit/{uuid}', [FreezoneController::class, 'edit'])->name('freezones.edit')->middleware('role_or_permission:edit-freezones');
    Route::put('freezone/{uuid}', [FreezoneController::class, 'update'])->name('freezones.update')->middleware('role_or_permission:update-freezones');
    Route::get('freezone/delete/{uuid}', [FreezoneController::class, 'destroy'])->name('freezones.delete')->middleware('role_or_permission:delete-freezones');

    Route::get('freezone-info/show/{uuid}', [FreezoneController::class, 'freezoneInfoShow'])->name('freezone-info.show')->middleware('role_or_permission:view-freezone-info');
    Route::get('freezone-info/edit/{uuid}', [FreezoneController::class, 'freezoneInfoEdit'])->name('freezone-info.edit')->middleware('role_or_permission:edit-freezone-info');
    Route::put('freezone-info/{uuid}', [FreezoneController::class, 'freezoneInfoUpdate'])->name('freezone-info.update')->middleware('role_or_permission:update-freezone-info');

    Route::get('customers', [CustomerController::class, 'index'])->name('customer.index')->middleware('role_or_permission:view-customers');
    Route::get('customer/{uuid}', [CustomerController::class, 'show'])->name('customer.show')->middleware('role_or_permission:view-customers');
    Route::get('customer/{uuid}/{status}', [CustomerController::class, 'update_status'])->name('customer.update_status')->middleware('role_or_permission:update-customer');
    Route::get('delete-customer/{uuid}', [CustomerController::class, 'destroy'])->name('customer.delete')->middleware('role_or_permission:delete-customer');
    Route::get('ajax-select-customer', [CustomerController::class, 'ajaxSelectCustomer']);
    Route::get('view-requested-documents/{uuid}', [CustomerController::class, 'selectedCustomerDocuments'])->name('customer.view-requested-documents-detail')->middleware('role_or_permission:view-process-document');

    Route::get('leads', [LeadController::class, 'index'])->name('lead.index')->middleware('role_or_permission:view-leads');
    Route::get('lead/{uuid}', [LeadController::class, 'show'])->name('lead.show')->middleware('role_or_permission:view-leads');
    Route::get('lead/{uuid}/{status}', [LeadController::class, 'update_status'])->name('lead.update_status')->middleware('role_or_permission:update-lead');
    Route::get('lead/delete/{uuid}', [LeadController::class, 'destroy'])->name('lead.delete')->middleware('role_or_permission:delete-lead');

    Route::get('offers', [OfferController::class, 'index'])->name('offer.index')->middleware('role_or_permission:view-offers');
    Route::get('offer/create', [OfferController::class, 'create'])->name('offer.create')->middleware('role_or_permission:create-offer');
    Route::post('offer/store', [OfferController::class, 'store'])->name('offer.store')->middleware('role_or_permission:store-offer');
    Route::get('offer/edit/{uuid}', [OfferController::class, 'edit'])->name('offer.edit')->middleware('role_or_permission:edit-offer');
    Route::put('offer/{uuid}', [OfferController::class, 'update'])->name('offer.update')->middleware('role_or_permission:update-offer');
    Route::get('offer/delete/{uuid}', [OfferController::class, 'destroy'])->name('offer.delete')->middleware('role_or_permission:delete-offer');

    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonial.index')->middleware('role_or_permission:view-testimonials');
    Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create')->middleware('role_or_permission:create-testimonial');
    Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store')->middleware('role_or_permission:store-testimonial');
    Route::get('testimonial/edit/{uuid}', [TestimonialController::class, 'edit'])->name('testimonial.edit')->middleware('role_or_permission:edit-testimonial');
    Route::put('testimonial/{uuid}', [TestimonialController::class, 'update'])->name('testimonial.update')->middleware('role_or_permission:update-testimonial');
    Route::get('testimonial/delete/{uuid}', [TestimonialController::class, 'destroy'])->name('testimonial.delete')->middleware('role_or_permission:delete-testimonial');

    Route::get('process-documents', [ProcessDocumentController::class, 'index'])->name('freezone-process-documents.index')->middleware('role_or_permission:view-process-document');
    Route::get('customer-process-detail/create/{uuid}', [ProcessDocumentController::class, 'customerDetailRequest'])->name('freezone-process-documents.customer-create')->middleware('role_or_permission:create-process-document');
    Route::get('customer-process-detail/{uuid}', [ProcessDocumentController::class, 'customerDetailShow'])->name('freezone-process-documents.customer-show')->middleware('role_or_permission:view-process-document');
    Route::post('customer-process-detail/request/{uuid}', [ProcessDocumentController::class, 'requestCustomerDetail'])->name('freezone-process-documents.customer-request')->middleware('role_or_permission:create-process-document');
    Route::get('freezone-process-documents/request/{uuid}', [ProcessDocumentController::class, 'processDocumentRequest'])->name('freezone-process-documents.request')->middleware('role_or_permission:view-process-document');
    Route::post('freezone-process-documents/request/{uuid}', [ProcessDocumentController::class, 'requestCustomerDocument'])->name('freezone-process-documents.store')->middleware('role_or_permission:create-process-document');
    Route::get('process-documents/create', [ProcessDocumentController::class, 'create'])->name('freezone-process-documents.create')->middleware('role_or_permission:create-process-document');

    Route::get('blogs', [BlogController::class, 'index'])->name('blog.index')->middleware('role_or_permission:view-blogs');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('role_or_permission:create-blog');
    Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('role_or_permission:store-blog');
    Route::get('blog/edit/{uuid}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('role_or_permission:edit-blog');
    Route::put('blog/{uuid}', [BlogController::class, 'update'])->name('blog.update')->middleware('role_or_permission:update-blog');
    Route::get('blog/delete/{uuid}', [BlogController::class, 'destroy'])->name('blog.delete')->middleware('role_or_permission:delete-blog');

    Route::get('static-pages', [StaticPageController::class, 'index'])->name('static-page.index')->middleware('role_or_permission:view-static-pages');
    Route::get('static-page/create', [StaticPageController::class, 'create'])->name('static-page.create')->middleware('role_or_permission:create-static-page');
    Route::post('static-page/store', [StaticPageController::class, 'store'])->name('static-page.store')->middleware('role_or_permission:store-static-page');
    Route::get('static-page/edit/{uuid}', [StaticPageController::class, 'edit'])->name('static-page.edit')->middleware('role_or_permission:edit-static-page');
    Route::put('static-page/{uuid}', [StaticPageController::class, 'update'])->name('static-page.update')->middleware('role_or_permission:update-static-page');
    Route::get('static-page/delete/{uuid}', [StaticPageController::class, 'destroy'])->name('static-page.delete')->middleware('role_or_permission:delete-static-page');

    Route::get('other-services', [OtherServiceController::class, 'index'])->name('other-service.index')->middleware('role_or_permission:view-other-service');
    Route::get('other-service/create', [OtherServiceController::class, 'create'])->name('other-service.create')->middleware('role_or_permission:create-other-service');
    Route::post('other-service/store', [OtherServiceController::class, 'store'])->name('other-service.store')->middleware('role_or_permission:store-other-service');
    Route::get('other-service/edit/{uuid}', [OtherServiceController::class, 'edit'])->name('other-service.edit')->middleware('role_or_permission:edit-other-service');
    Route::put('other-service/{uuid}', [OtherServiceController::class, 'update'])->name('other-service.update')->middleware('role_or_permission:update-other-service');
    Route::get('other-service/delete/{uuid}', [OtherServiceController::class, 'destroy'])->name('other-service.delete')->middleware('role_or_permission:delete-other-service');

    Route::post('ckeditor-image-upload', [CommonController::class, 'ckeditorImageUpload']);

    /*Route::get('activity', [PcActivityController::class, 'index'])->name('activity.index')->middleware('role_or_permission:view-actvity');
    Route::get('activity/create', [PcActivityController::class, 'create'])->name('activity.create')->middleware('role_or_permission:create-actvity');
    Route::post('activity/store', [PcActivityController::class, 'store'])->name('activity.store')->middleware('role_or_permission:store-actvity');
    Route::get('activity/edit/{uuid}', [PcActivityController::class, 'edit'])->name('activity.edit')->middleware('role_or_permission:edit-actvity');
    Route::put('activity/{uuid}', [PcActivityController::class, 'update'])->name('activity.update')->middleware('role_or_permission:update-actvity');
    Route::get('activity/delete/{uuid}', [PcActivityController::class, 'destroy'])->name('activity.delete')->middleware('role_or_permission:delete-actvity');*/


    Route::resource('activity', PcActivityController::class);
    Route::resource('licence', PcLicenseController::class);
    Route::get('licence/delete/{uuid}', [PcLicenseController::class, 'destroy'])->name('licence.delete');

    // Route::resource('package', PcPackageController::class);
    // Route::get('package/delete/{uuid}', [PcPackageController::class, 'destroy'])->name('package.delete');

    Route::resource('additionalactivity', PcAdditionalActivityController::class);
    Route::get('additionalactivity/delete/{uuid}', [PcAdditionalActivityController::class, 'destroy'])->name('additionalactivity.delete');

    Route::resource('visatype', PcVisaController::class);
    Route::get('visatype/delete/{uuid}', [PcVisaController::class, 'destroy'])->name('visatype.delete');

    //added by brij
    Route::get('freezone-page', [FreezonePageController::class, 'index'])->name('freezone-page.index')->middleware('role_or_permission:view-freezone-page');
    Route::get('freezone-page/create', [FreezonePageController::class, 'create'])->name('freezone-page.create')->middleware('role_or_permission:create-freezone-page');
    Route::post('freezone-page/store', [FreezonePageController::class, 'store'])->name('freezone-page.store')->middleware('role_or_permission:store-freezone-page');
    Route::get('freezone-page/edit/{id}', [FreezonePageController::class, 'edit'])->name('freezone-page.edit')->middleware('role_or_permission:edit-freezone-page');
    Route::put('freezone-page/{id}', [FreezonePageController::class, 'update'])->name('freezone-page.update')->middleware('role_or_permission:update-freezone-page');
    Route::get('freezone-page/delete/{id}', [FreezonePageController::class, 'destroy'])->name('freezone-page.delete')->middleware('role_or_permission:delete-freezone-page');

    Route::get('setting', [SettingController::class, 'setting'])->name('setting.view')->middleware('role_or_permission:view-setting');
    Route::post('setting', [SettingController::class, 'setting_store'])->name('setting.store')->middleware('role_or_permission:store-setting');

    Route::get('transaction', [TransactionController::class, 'index'])->name('transaction.index')->middleware('role_or_permission:view-transaction');
    Route::get('transaction/{transaction}', [TransactionController::class, 'show'])->name('transaction.show')->middleware('role_or_permission:show-transaction');
    
    Route::get('freezone/bookings', [FreezoneBookingController::class, 'index'])->name('booking.index')->middleware('role_or_permission:view-booking');
    Route::get('freezone/bookings/{id}', [FreezoneBookingController::class, 'show'])->name('booking.show')->middleware('role_or_permission:view-booking-detail');
    Route::get('document/send-document-request/{booking_id}', [CustomerDocumentController::class, 'send_document_request'])->name('document.send-document-request')->middleware('role_or_permission:send-document-request');
    Route::post('document/store-document-request', [CustomerDocumentController::class, 'store_document_request'])->name('document.store-document-request')->middleware('role_or_permission:store-document-request');
    Route::post('document/reject-document', [CustomerDocumentController::class, 'reject_document'])->name('document.reject-document')->middleware('role_or_permission:reject-document');
    Route::post('document/approve-document', [CustomerDocumentController::class, 'approve_document'])->name('document.approve-document')->middleware('role_or_permission:approve-document');
    Route::get('upload-document/{booking_id}', [CustomerDocumentController::class, 'upload_document'])->name('document.view-upload-document')->middleware('role_or_permission:view-upload-document');
    Route::post('store-upload-document/{booking_id}', [CustomerDocumentController::class, 'save_upload_documents'])->name('document.store-upload-document')->middleware('role_or_permission:store-upload-document');

    Route::get('contact', [ContactUsController::class, 'index'])->name('contact.index')->middleware('role_or_permission:view-contact');
    Route::get('contact/edit/{id}', [ContactUsController::class, 'edit'])->name('contact.edit')->middleware('role_or_permission:edit-contact');
    Route::put('contact/{id}', [ContactUsController::class, 'update'])->name('contact.update')->middleware('role_or_permission:update-contact');

    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index')->middleware('role_or_permission:view-category');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create')->middleware('role_or_permission:create-category');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store')->middleware('role_or_permission:store-category');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('role_or_permission:edit-category');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware('role_or_permission:update-category');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('role_or_permission:delete-category');

    Route::post('/update-booking-status', [FreezoneBookingController::class, 'update_booking_status']);

    Route::get('protected-file/{path}', [FileController::class, 'admin_download'])->name('admin-protected-file.download');

    Route::get('freezone-contact-us', [LeadController::class, 'index'])->name('lead.index')->middleware('role_or_permission:view-leads');
    Route::get('freezone-contact-us/{uuid}', [LeadController::class, 'show'])->name('lead.show')->middleware('role_or_permission:view-leads');
    Route::get('freezone-contact-us/{uuid}/{status}', [LeadController::class, 'update_status'])->name('lead.update_status')->middleware('role_or_permission:update-lead');
    Route::get('freezone-contact-us/delete/{uuid}', [LeadController::class, 'destroy'])->name('lead.delete')->middleware('role_or_permission:delete-lead');

    // Attributes Management
    Route::get('attributes', [AttributeController::class, 'index'])->name('attributes.index');
    Route::get('attributes/create', [AttributeController::class, 'create'])->name('attributes.create');
    Route::post('attributes/create', [AttributeController::class, 'store'])->name('attributes.store');
    Route::get('attributes/{attribute}/edit', [AttributeController::class, 'edit'])->name('attributes.edit');
    Route::put('attributes/{attribute}', [AttributeController::class, 'update'])->name('attributes.update');
    Route::delete('attributes/{attribute}', [AttributeController::class, 'destroy'])->name('attributes.destroy');
    Route::get('attributes/suggestions', [AttributeController::class, 'getSuggestions'])->name('attributes.suggestions');
    Route::get('attributes/{id}/disabled', [AttributeController::class, 'disabled'])->name('attributes.disabled');





    // Attributes Options Management
    Route::get('attribute-options', [AttributeOptionController::class, 'index'])->name('admin.attribute-options.index');
    Route::get('attribute-options/create', [AttributeOptionController::class, 'create'])->name('admin.attribute-options.create');
    Route::post('attribute-options', [AttributeOptionController::class, 'store'])->name('admin.attribute-options.store');
    Route::get('attribute-options/{attributeOption}/edit', [AttributeOptionController::class, 'edit'])->name('admin.attribute-options.edit');
    Route::put('attribute-options/{attributeOption}', [AttributeOptionController::class, 'update'])->name('admin.attribute-options.update');
    Route::delete('attribute-options/{attributeOption}', [AttributeOptionController::class, 'destroy'])->name('admin.attribute-options.destroy');
    Route::get('/get-attribute-options/{id}', [AttributeOptionController::class, 'getAttributeOptions']);
    Route::get('attribute-options/suggestions', [AttributeOptionController::class, 'getSuggestions']);
    Route::get('attribute-options/{id}/disabled', [AttributeOptionController::class, 'disabled'])->name('admin.attribute-options.disabled');

    // Packages Manager
    Route::get('packages', [PackageController::class, 'index'])->name('package.index');
    Route::get('packages/create', [PackageController::class, 'create'])->name('package.create');
    Route::post('packages', [PackageController::class, 'store'])->name('package.store');
    Route::get('packages/{package}/edit', [PackageController::class, 'edit'])->name('package.edit');
    Route::put('packages/{package}', [PackageController::class, 'update'])->name('package.update');
    Route::delete('packages/{package}', [PackageController::class, 'destroy'])->name('package.destroy');
    Route::get('packages/{package}/disabled', [PackageController::class, 'disabled'])->name('package.disabled');
    Route::get('packages/{package}/enabled', [PackageController::class, 'enabled'])->name('package.enabled');


    // currency Manager
    Route::get('currencies', [CurrencyController::class, 'index'])->name('currency.view');
    Route::get('currencies/create', [CurrencyController::class, 'create'])->name('currency.create');
    Route::post('currencies', [CurrencyController::class, 'store'])->name('currency.store');
    Route::get('currencies/{currency}/edit', [CurrencyController::class, 'edit'])->name('currency.edit');
    Route::put('currencies/{currency}', [CurrencyController::class, 'update'])->name('currency.update');
    Route::delete('currencies/{currency}', [CurrencyController::class, 'destroy'])->name('currency.destroy');

});
