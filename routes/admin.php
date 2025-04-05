<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\PcVisaController;
use App\Http\Controllers\ProfileController;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\UserController;


//Frontend Controllers
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FreezonePageController;
use App\Http\Controllers\OtherServiceController;


//Admin routes added by brij and working routes
use App\Http\Controllers\Admin\ActivityGroupController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\VisaPackageAttributeHeaderController;
use App\Http\Controllers\Admin\VisaPackageAttributeController;
use App\Http\Controllers\Admin\FixedFeeController;
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
use App\Http\Controllers\Admin\PackageBookingController;
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
    Route::post('role/store', [RoleController::class, 'store'])->name('roles.store')->middleware('role_or_permission:create-roles');
    Route::get('role/edit/{uuid}', [RoleController::class, 'edit'])->name('roles.edit')->middleware('role_or_permission:edit-roles');
    Route::put('role/update/{uuid}', [RoleController::class, 'update'])->name('roles.update')->middleware('role_or_permission:edit-roles');
    Route::get('role/delete/{uuid}', [RoleController::class, 'delete'])->name('roles.delete')->middleware('role_or_permission:delete-roles');

    Route::get('freezone-users', [UserController::class, 'freezone_index'])->name('freezone-users.index')->middleware('role_or_permission:view-freezone-admin');
    Route::get('freezone-user/create', [UserController::class, 'freezone_create'])->name('freezone-users.create')->middleware('role_or_permission:create-freezone-admin');
    Route::post('freezone-user/store', [UserController::class, 'freezone_store'])->name('freezone-users.store')->middleware('role_or_permission:create-freezone-admin');
    Route::get('freezone-user/edit/{uuid}', [UserController::class, 'freezone_edit'])->name('freezone-users.edit')->middleware('role_or_permission:edit-freezone-admin');
    Route::put('freezone-user/{uuid}', [UserController::class, 'freezone_update'])->name('freezone-users.update')->middleware('role_or_permission:edit-freezone-admin');
    Route::get('freezone-user/delete/{uuid}', [UserController::class, 'freezone_delete'])->name('freezone-users.delete')->middleware('role_or_permission:delete-freezone-admin');

    Route::get('sub-admins', [UserController::class, 'subadmin_index'])->name('subadmin-users.index')->middleware('role_or_permission:view-subadmins');
    Route::get('sub-admin/create', [UserController::class, 'subadmin_create'])->name('subadmin-users.create')->middleware('role_or_permission:create-subadmins');
    Route::post('sub-admin/store', [UserController::class, 'subadmin_store'])->name('subadmin-users.store')->middleware('role_or_permission:create-subadmins');
    Route::get('sub-admin/edit/{uuid}', [UserController::class, 'subadmin_edit'])->name('subadmin-users.edit')->middleware('role_or_permission:edit-subadmins');
    Route::put('sub-admin/{uuid}', [UserController::class, 'subadmin_update'])->name('subadmin-users.update')->middleware('role_or_permission:edit-subadmins');
    Route::get('sub-admin/delete/{uuid}', [UserController::class, 'subadmin_delete'])->name('subadmin-users.delete')->middleware('role_or_permission:delete-subadmins');

    Route::get('freezones', [FreezoneController::class, 'index'])->name('freezones.index')->middleware('role_or_permission:view-freezones');
    Route::get('freezone/create', [FreezoneController::class, 'create'])->name('freezones.create')->middleware('role_or_permission:create-freezones');
    Route::post('freezone/store', [FreezoneController::class, 'store'])->name('freezones.store')->middleware('role_or_permission:create-freezones');
    Route::get('freezone/edit/{uuid}', [FreezoneController::class, 'edit'])->name('freezones.edit')->middleware('role_or_permission:edit-freezones');
    Route::put('freezone/{uuid}', [FreezoneController::class, 'update'])->name('freezones.update')->middleware('role_or_permission:edit-freezones');
    Route::get('freezone/delete/{uuid}', [FreezoneController::class, 'destroy'])->name('freezones.delete')->middleware('role_or_permission:delete-freezones');

    Route::get('freezone-info/show/{uuid}', [FreezoneController::class, 'freezoneInfoShow'])->name('freezone-info.show')->middleware('role_or_permission:view-freezone-info');
    Route::get('freezone-info/edit/{uuid}', [FreezoneController::class, 'freezoneInfoEdit'])->name('freezone-info.edit')->middleware('role_or_permission:edit-freezone-info');
    Route::put('freezone-info/{uuid}', [FreezoneController::class, 'freezoneInfoUpdate'])->name('freezone-info.update')->middleware('role_or_permission:edit-freezone-info');

    Route::get('customers', [CustomerController::class, 'index'])->name('customer.index')->middleware('role_or_permission:view-customers');
    Route::get('customer/{uuid}', [CustomerController::class, 'show'])->name('customer.show')->middleware('role_or_permission:view-customers');
    Route::get('customer/{uuid}/{status}', [CustomerController::class, 'update_status'])->name('customer.update_status')->middleware('role_or_permission:edit-customer');
    Route::get('delete-customer/{uuid}', [CustomerController::class, 'destroy'])->name('customer.delete')->middleware('role_or_permission:delete-customer');
    Route::get('ajax-select-customer', [CustomerController::class, 'ajaxSelectCustomer']);
    Route::get('view-requested-documents/{uuid}', [CustomerController::class, 'selectedCustomerDocuments'])->name('customer.view-requested-documents-detail')->middleware('role_or_permission:view-process-document');

    Route::get('leads', [LeadController::class, 'index'])->name('lead.index')->middleware('role_or_permission:view-leads');
    Route::get('lead/{uuid}', [LeadController::class, 'show'])->name('lead.show')->middleware('role_or_permission:view-leads');
    Route::get('lead/{uuid}/{status}', [LeadController::class, 'update_status'])->name('lead.update_status')->middleware('role_or_permission:edit-lead');
    Route::get('lead/delete/{uuid}', [LeadController::class, 'destroy'])->name('lead.delete')->middleware('role_or_permission:delete-lead');

    Route::get('offers', [OfferController::class, 'index'])->name('offer.index')->middleware('role_or_permission:view-offers');
    Route::get('offer/create', [OfferController::class, 'create'])->name('offer.create')->middleware('role_or_permission:create-offer');
    Route::post('offer/store', [OfferController::class, 'store'])->name('offer.store')->middleware('role_or_permission:create-offer');
    Route::get('offer/edit/{uuid}', [OfferController::class, 'edit'])->name('offer.edit')->middleware('role_or_permission:edit-offer');
    Route::put('offer/{uuid}', [OfferController::class, 'update'])->name('offer.update')->middleware('role_or_permission:edit-offer');
    Route::get('offer/delete/{uuid}', [OfferController::class, 'destroy'])->name('offer.delete')->middleware('role_or_permission:delete-offer');

    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonial.index')->middleware('role_or_permission:view-testimonials');
    Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create')->middleware('role_or_permission:create-testimonial');
    Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store')->middleware('role_or_permission:create-testimonial');
    Route::get('testimonial/edit/{uuid}', [TestimonialController::class, 'edit'])->name('testimonial.edit')->middleware('role_or_permission:edit-testimonial');
    Route::put('testimonial/{uuid}', [TestimonialController::class, 'update'])->name('testimonial.update')->middleware('role_or_permission:edit-testimonial');
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
    Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('role_or_permission:create-blog');
    Route::get('blog/edit/{uuid}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('role_or_permission:edit-blog');
    Route::put('blog/{uuid}', [BlogController::class, 'update'])->name('blog.update')->middleware('role_or_permission:edit-blog');
    Route::get('blog/delete/{uuid}', [BlogController::class, 'destroy'])->name('blog.delete')->middleware('role_or_permission:delete-blog');

    Route::get('static-pages', [StaticPageController::class, 'index'])->name('static-page.index')->middleware('role_or_permission:view-static-pages');
    Route::get('static-page/create', [StaticPageController::class, 'create'])->name('static-page.create')->middleware('role_or_permission:create-static-page');
    Route::post('static-page/store', [StaticPageController::class, 'store'])->name('static-page.store')->middleware('role_or_permission:create-static-page');
    Route::get('static-page/edit/{uuid}', [StaticPageController::class, 'edit'])->name('static-page.edit')->middleware('role_or_permission:edit-static-page');
    Route::put('static-page/{uuid}', [StaticPageController::class, 'update'])->name('static-page.update')->middleware('role_or_permission:edit-static-page');
    Route::get('static-page/delete/{uuid}', [StaticPageController::class, 'destroy'])->name('static-page.delete')->middleware('role_or_permission:delete-static-page');

    Route::get('other-services', [OtherServiceController::class, 'index'])->name('other-service.index')->middleware('role_or_permission:view-other-service');
    Route::get('other-service/create', [OtherServiceController::class, 'create'])->name('other-service.create')->middleware('role_or_permission:create-other-service');
    Route::post('other-service/store', [OtherServiceController::class, 'store'])->name('other-service.store')->middleware('role_or_permission:create-other-service');
    Route::get('other-service/edit/{uuid}', [OtherServiceController::class, 'edit'])->name('other-service.edit')->middleware('role_or_permission:edit-other-service');
    Route::put('other-service/{uuid}', [OtherServiceController::class, 'update'])->name('other-service.update')->middleware('role_or_permission:edit-other-service');
    Route::get('other-service/delete/{uuid}', [OtherServiceController::class, 'destroy'])->name('other-service.delete')->middleware('role_or_permission:delete-other-service');

    Route::post('ckeditor-image-upload', [CommonController::class, 'ckeditorImageUpload']);

    Route::get('activity-groups', [ActivityGroupController::class, 'index'])->name('activity-group.index')->middleware('role_or_permission:view-activity-groups');
    Route::get('activity-group/create', [ActivityGroupController::class, 'create'])->name('activity-group.create')->middleware('role_or_permission:create-activity-group');
    Route::post('activity-group/store', [ActivityGroupController::class, 'store'])->name('activity-group.store')->middleware('role_or_permission:create-activity-group');
    Route::get('activity-group/edit/{id}', [ActivityGroupController::class, 'edit'])->name('activity-group.edit')->middleware('role_or_permission:edit-activity-group');
    Route::put('activity-group/{activityGroup}', [ActivityGroupController::class, 'update'])->name('activity-group.update')->middleware('role_or_permission:edit-activity-group');
    Route::get('activity-group/delete/{id}', [ActivityGroupController::class, 'destroy'])->name('activity-group.delete')->middleware('role_or_permission:delete-activity-group');


    Route::get('activities', [ActivityController::class, 'index'])->name('activity.index')->middleware('role_or_permission:view-activities');
    Route::get('activity/create', [ActivityController::class, 'create'])->name('activity.create')->middleware('role_or_permission:create-activity');
    Route::post('activity/store', [ActivityController::class, 'store'])->name('activity.store')->middleware('role_or_permission:create-activity');
    Route::get('activity/edit/{id}', [ActivityController::class, 'edit'])->name('activity.edit')->middleware('role_or_permission:edit-activity');
    Route::put('activity/{id}', [ActivityController::class, 'update'])->name('activity.update')->middleware('role_or_permission:edit-activity');
    Route::get('activity/delete/{id}', [ActivityController::class, 'destroy'])->name('activity.delete')->middleware('role_or_permission:delete-activity');

    Route::get('visa-package-attributes', [VisaPackageAttributeController::class, 'index'])->name('visa-package-attributes.index')->middleware('role_or_permission:view-visa-types');
    Route::get('visa-package-attributes/create', [VisaPackageAttributeController::class, 'create'])->name('visa-package-attributes.create')->middleware('role_or_permission:create-visa-type');
    Route::post('visa-package-attributes/store', [VisaPackageAttributeController::class, 'store'])->name('visa-package-attributes.store')->middleware('role_or_permission:create-visa-type');
    Route::get('visa-package-attributes/edit/{id}', [VisaPackageAttributeController::class, 'edit'])->name('visa-package-attributes.edit')->middleware('role_or_permission:edit-visa-type');
    Route::put('visa-package-attributes/{id}', [VisaPackageAttributeController::class, 'update'])->name('visa-package-attributes.update')->middleware('role_or_permission:edit-visa-type');
    Route::get('visa-package-attributes/delete/{id}', [VisaPackageAttributeController::class, 'destroy'])->name('visa-package-attributes.delete')->middleware('role_or_permission:delete-visa-type');
    
    Route::get('visa-package-attribute-headers', [VisaPackageAttributeHeaderController::class, 'index'])->name('visa-package-attribute-headers.index')->middleware('role_or_permission:view-visa-package-attribute-headers');
    Route::get('visa-package-attribute-headers/create', [VisaPackageAttributeHeaderController::class, 'create'])->name('visa-package-attribute-headers.create')->middleware('role_or_permission:create-visa-package-attribute-header');
    Route::post('visa-package-attribute-headers/store', [VisaPackageAttributeHeaderController::class, 'store'])->name('visa-package-attribute-headers.store')->middleware('role_or_permission:create-visa-package-attribute-header');
    Route::get('visa-package-attribute-headers/edit/{id}', [VisaPackageAttributeHeaderController::class, 'edit'])->name('visa-package-attribute-headers.edit')->middleware('role_or_permission:edit-visa-package-attribute-header');
    Route::put('visa-package-attribute-headers/{id}', [VisaPackageAttributeHeaderController::class, 'update'])->name('visa-package-attribute-headers.update')->middleware('role_or_permission:edit-visa-package-attribute-header');
    Route::get('visa-package-attribute-headers/delete/{id}', [VisaPackageAttributeHeaderController::class, 'destroy'])->name('visa-package-attribute-headers.delete')->middleware('role_or_permission:delete-visa-package-attribute-header');


    Route::get('license', [LicenseController::class, 'index'])->name('license.index')->middleware('role_or_permission:view-license');
    Route::get('license/delete/{uuid}', [LicenseController::class, 'destroy'])->name('license.delete')->middleware('role_or_permission:delete-license');

    Route::resource('additionalactivity', PcAdditionalActivityController::class);
    Route::get('additionalactivity/delete/{uuid}', [PcAdditionalActivityController::class, 'destroy'])->name('additionalactivity.delete');

    Route::resource('visatype', PcVisaController::class);
    Route::get('visatype/delete/{uuid}', [PcVisaController::class, 'destroy'])->name('visatype.delete');

    //added by brij
    Route::get('freezone-page', [FreezonePageController::class, 'index'])->name('freezone-page.index')->middleware('role_or_permission:view-freezone-page');
    Route::get('freezone-page/create', [FreezonePageController::class, 'create'])->name('freezone-page.create')->middleware('role_or_permission:create-freezone-page');
    Route::post('freezone-page/store', [FreezonePageController::class, 'store'])->name('freezone-page.store')->middleware('role_or_permission:create-freezone-page');
    Route::get('freezone-page/edit/{id}', [FreezonePageController::class, 'edit'])->name('freezone-page.edit')->middleware('role_or_permission:edit-freezone-page');
    Route::put('freezone-page/{id}', [FreezonePageController::class, 'update'])->name('freezone-page.update')->middleware('role_or_permission:edit-freezone-page');
    Route::get('freezone-page/delete/{id}', [FreezonePageController::class, 'destroy'])->name('freezone-page.delete')->middleware('role_or_permission:delete-freezone-page');

    Route::get('setting', [SettingController::class, 'setting'])->name('setting.view')->middleware('role_or_permission:view-setting');
    Route::get('numbers', [SettingController::class, 'numbers'])->name('numbers.view')->middleware('role_or_permission:view-setting');
    Route::post('setting', [SettingController::class, 'setting_store'])->name('setting.store')->middleware('role_or_permission:create-setting');
    Route::post('numbers', [SettingController::class, 'numbers_store'])->name('numbers.store')->middleware('role_or_permission:create-setting');


    Route::get('transaction', [TransactionController::class, 'index'])->name('transaction.index')->middleware('role_or_permission:view-transaction');
    Route::get('transactions/create', [TransactionController::class, 'create'])->name('transactions.create')->middleware('role_or_permission:create-transaction');
    Route::post('transaction/store', [TransactionController::class, 'store'])->name('transaction.store')->middleware('role_or_permission:create-transaction');
    Route::get('transaction/{transaction}', [TransactionController::class, 'show'])->name('transaction.show')->middleware('role_or_permission:show-transaction');
    Route::put('/transactions/{id}/update-status', [TransactionController::class, 'updateStatus'])->name('transactions.updateStatus');
    Route::put('/transactions/{id}/refund', [TransactionController::class, 'markRefunded'])->name('transactions.markRefunded');
  
    Route::get('freezone/bookings', [FreezoneBookingController::class, 'index'])->name('booking.index')->middleware('role_or_permission:view-booking');
    Route::get('freezone/bookings/{id}', [FreezoneBookingController::class, 'show'])->name('booking.show')->middleware('role_or_permission:view-booking-detail');
    Route::get('document/send-document-request/{booking_id}', [CustomerDocumentController::class, 'send_document_request'])->name('document.send-document-request')->middleware('role_or_permission:send-document-request');
    Route::post('document/store-document-request', [CustomerDocumentController::class, 'store_document_request'])->name('document.store-document-request')->middleware('role_or_permission:create-document-request');
    Route::post('document/reject-document', [CustomerDocumentController::class, 'reject_document'])->name('document.reject-document')->middleware('role_or_permission:reject-document');
    Route::post('document/approve-document', [CustomerDocumentController::class, 'approve_document'])->name('document.approve-document')->middleware('role_or_permission:approve-document');
    Route::get('upload-document/{booking_id}', [CustomerDocumentController::class, 'upload_document'])->name('document.view-upload-document')->middleware('role_or_permission:view-upload-document');
    Route::post('store-upload-document/{booking_id}', [CustomerDocumentController::class, 'save_upload_documents'])->name('document.store-upload-document')->middleware('role_or_permission:create-upload-document');

    Route::get('contact', [ContactUsController::class, 'index'])->name('contact.index')->middleware('role_or_permission:view-contact');
    Route::get('contact/edit/{id}', [ContactUsController::class, 'edit'])->name('contact.edit')->middleware('role_or_permission:edit-contact');
    Route::put('contact/{id}', [ContactUsController::class, 'update'])->name('contact.update')->middleware('role_or_permission:edit-contact');

    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index')->middleware('role_or_permission:view-category');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create')->middleware('role_or_permission:create-category');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store')->middleware('role_or_permission:create-category');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('role_or_permission:edit-category');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware('role_or_permission:edit-category');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('role_or_permission:delete-category');

    Route::post('/update-booking-status', [FreezoneBookingController::class, 'update_booking_status'])->middleware('role_or_permission:update-booking-status');


    Route::get('protected-file/{path}', [FileController::class, 'admin_download'])->name('admin-protected-file.download');

    Route::get('freezone-contact-us', [LeadController::class, 'index'])->name('contact_us.index')->middleware('role_or_permission:view-leads');
    Route::get('freezone-contact-us/{uuid}', [LeadController::class, 'show'])->name('contact_us.show')->middleware('role_or_permission:view-leads');
    Route::get('freezone-contact-us/{uuid}/{status}', [LeadController::class, 'update_status'])->name('contact_us.update_status')->middleware('role_or_permission:edit-lead');
    Route::get('freezone-contact-us/delete/{uuid}', [LeadController::class, 'destroy'])->name('contact_us.delete')->middleware('role_or_permission:delete-lead');

    
    // AI Search Filters
    Route::get('/attributes/ai-tool-search-filters', [AttributeController::class, 'aiSearchFilters'])
    ->name('admin.ai_search_filters')
    ->middleware('role_or_permission:view-ai-tool-search-filters');

    Route::post('/attributes/ai-tool-search-filters/store', [AttributeController::class, 'storeAiSearchFilters'])
    ->name('admin.ai_search_filters.store')
    ->middleware('role_or_permission:edit-ai-tool-search-filters');

    // Attributes Management
    Route::get('attributes', [AttributeController::class, 'index'])
            ->name('attributes.index')
            ->middleware('role_or_permission:view-attributes');

    Route::get('attributes/create', [AttributeController::class, 'create'])
            ->name('attributes.create')
            ->middleware('role_or_permission:create-attribute');

    Route::post('attributes/create', [AttributeController::class, 'store'])
            ->name('attributes.store')
            ->middleware('role_or_permission:create-attribute');

    Route::get('attributes/{attribute}/edit', [AttributeController::class, 'edit'])
            ->name('attributes.edit')
            ->middleware('role_or_permission:edit-attribute');

    Route::put('attributes/{attribute}', [AttributeController::class, 'update'])
            ->name('attributes.update')
            ->middleware('role_or_permission:edit-attribute');

    Route::delete('attributes/{attribute}', [AttributeController::class, 'destroy'])
            ->name('attributes.destroy')
            ->middleware('role_or_permission:delete-attribute');

    Route::get('attributes/suggestions', [AttributeController::class, 'getSuggestions'])
            ->name('attributes.suggestions')
            ->middleware('role_or_permission:view-attributes');

    Route::get('attributes/{id}/disabled', [AttributeController::class, 'disabled'])
            ->name('attributes.disabled')
            ->middleware('role_or_permission:disable-attribute');

    Route::get('attributes/{id}/enabled', [AttributeController::class, 'enabled'])
            ->name('attributes.enabled')
            ->middleware('role_or_permission:enable-attribute');


    // Attribute Options Manager
    Route::get('attribute-options', [AttributeOptionController::class, 'index'])
        ->name('admin.attribute-options.index')
        ->middleware('role_or_permission:view-attribute-options');

    Route::get('attribute-options/create', [AttributeOptionController::class, 'create'])
        ->name('admin.attribute-options.create')
        ->middleware('role_or_permission:create-attribute-option');

    Route::post('attribute-options', [AttributeOptionController::class, 'store'])
        ->name('admin.attribute-options.store')
        ->middleware('role_or_permission:create-attribute-option');

    Route::get('attribute-options/{attributeOption}/edit', [AttributeOptionController::class, 'edit'])
        ->name('admin.attribute-options.edit')
        ->middleware('role_or_permission:edit-attribute-option');

    Route::put('attribute-options/{attributeOption}', [AttributeOptionController::class, 'update'])
        ->name('admin.attribute-options.update')
        ->middleware('role_or_permission:edit-attribute-option');

    Route::delete('attribute-options/{attributeOption}', [AttributeOptionController::class, 'destroy'])
        ->name('admin.attribute-options.destroy')
        ->middleware('role_or_permission:delete-attribute-option');

    Route::get('/get-attribute-options/{id}', [AttributeOptionController::class, 'getAttributeOptions'])
        ->middleware('role_or_permission:view-attribute-options');

    Route::get('attribute-options/suggestions', [AttributeOptionController::class, 'getSuggestions'])
        ->middleware('role_or_permission:view-attribute-options');

    Route::get('attribute-options/{id}/disabled', [AttributeOptionController::class, 'disabled'])
        ->name('admin.attribute-options.disabled')
        ->middleware('role_or_permission:edit-attribute-option');

    Route::get('attribute-options/{id}/enabled', [AttributeOptionController::class, 'enabled'])
        ->name('admin.attribute-options.enabled')
        ->middleware('role_or_permission:edit-attribute-option');

    // Packages Manager
    Route::get('packages', [PackageController::class, 'index'])->name('package.index')->middleware('role_or_permission:view-packages');
    Route::get('packages/create', [PackageController::class, 'create'])->name('package.create')->middleware('role_or_permission:create-package');
    Route::post('packages', [PackageController::class, 'store'])->name('package.store')->middleware('role_or_permission:create-package');
    Route::get('packages/{package}/edit', [PackageController::class, 'edit'])->name('package.edit')->middleware('role_or_permission:edit-package');
    Route::put('packages/{package}', [PackageController::class, 'update'])->name('package.update')->middleware('role_or_permission:edit-package');
    Route::delete('packages/{package}', [PackageController::class, 'destroy'])->name('package.destroy')->middleware('role_or_permission:delete-package');
    Route::get('packages/{package}/disabled', [PackageController::class, 'disabled'])->name('package.disabled')->middleware('role_or_permission:edit-package');
    Route::get('packages/{package}/enabled', [PackageController::class, 'enabled'])->name('package.enabled')->middleware('role_or_permission:edit-package');


    Route::get('pacakage/bookings', [PackageBookingController::class, 'index'])->name('package-bookings.index')->middleware('role_or_permission:view-booking');
    Route::get('pacakage/bookings/{id}', [PackageBookingController::class, 'show'])->name('package-bookings.show')->middleware('role_or_permission:view-booking');
    Route::post('pacakage/bookings/adjustments', [PackageBookingController::class, 'adjustments'])->name('package-bookings.adjustments')->middleware('role_or_permission:edit-booking-adjustments');
    Route::post('pacakage/bookings/update_status', [PackageBookingController::class, 'update_status'])->name('package-bookings.update_status')->middleware('role_or_permission:edit-booking-status');
    Route::get('package/bookings/{id}/documents', [PackageBookingController::class, 'documents'])->name('package-bookings.documents')->middleware('role_or_permission:upload-booking-documents');


    // Currency Manager
    Route::get('currencies', [CurrencyController::class, 'index'])->name('currency.view')->middleware('role_or_permission:view-currencies');
    Route::get('currencies/create', [CurrencyController::class, 'create'])->name('currency.create')->middleware('role_or_permission:create-currency');
    Route::post('currencies', [CurrencyController::class, 'store'])->name('currency.store')->middleware('role_or_permission:create-currency');
    Route::get('currencies/{currency}/edit', [CurrencyController::class, 'edit'])->name('currency.edit')->middleware('role_or_permission:edit-currency');
    Route::put('currencies/{currency}', [CurrencyController::class, 'update'])->name('currency.update')->middleware('role_or_permission:edit-currency');
    Route::delete('currencies/{currency}', [CurrencyController::class, 'destroy'])->name('currency.destroy')->middleware('role_or_permission:delete-currency');


    Route::get('fixed-fees', [FixedFeeController::class, 'index'])->name('fixed-fee.index')->middleware('role_or_permission:view-fixed-fees');
    Route::get('fixed-fee/create', [FixedFeeController::class, 'create'])->name('fixed-fee.create')->middleware('role_or_permission:create-fixed-fee');
    Route::post('fixed-fee/store', [FixedFeeController::class, 'store'])->name('fixed-fee.store')->middleware('role_or_permission:create-fixed-fee');
    Route::get('fixed-fee/edit/{id}', [FixedFeeController::class, 'edit'])->name('fixed-fee.edit')->middleware('role_or_permission:edit-fixed-fee');
    Route::put('fixed-fee/{id}', [FixedFeeController::class, 'update'])->name('fixed-fee.update')->middleware('role_or_permission:edit-fixed-fee');
    Route::get('fixed-fee/delete/{id}', [FixedFeeController::class, 'destroy'])->name('fixed-fee.delete')->middleware('role_or_permission:delete-fixed-fee');
});
