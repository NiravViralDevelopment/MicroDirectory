<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ManageOrderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignaturePDFController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserImageController;

use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ManageDocumentController;


use App\Http\Controllers\LocationController;

Route::get('/get-states/{country}', [LocationController::class, 'getStates'])->name('location.states');
Route::get('/get-cities/{state}', [LocationController::class, 'getCities'])->name('location.cities');


Route::get('/', [FrontController::class, 'frontHome'])->name('front.home');
Route::get('directory-list/{slug}', [FrontController::class, 'directoryList'])->name('directory.list');
Route::get('directory-details/{slug}', [FrontController::class, 'directoryDetails'])->name('directory.details');
Route::get('search-directory', [FrontController::class, 'directoryDirectory'])->name('search.directory');
Route::get('about-us', [FrontController::class, 'about'])->name('about');
Route::get('terms-conditions', [FrontController::class, 'terms'])->name('terms');
Route::get('privacy-statement', [FrontController::class, 'privacy'])->name('privacy');
Route::get('registration-procedures', [FrontController::class, 'registration'])->name('registration');
Route::get('feedback', [FrontController::class, 'feedback'])->name('feedback');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('front-register', [FrontController::class, 'register'])->name('front.add');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Country Routes
    Route::resource('countries', CountryController::class);
    Route::get('category-status/{id}', [CountryController::class, 'statusChange'])->name('category.status');

    // State Routes
    Route::resource('states', StateController::class);
    Route::get('states-status/{id}', [StateController::class, 'statusChange'])->name('states.status');

    // City Routes
    Route::resource('cities', CityController::class);
    Route::get('city-status/{id}', [CityController::class, 'statusChange'])->name('city.status');
    Route::get('get-states/{country_id}', [CityController::class, 'getStates'])->name('get.states');

    // Other Routes
    Route::resource('cms', CmsController::class);
    Route::resource('roles', RoleController::class);
    Route::get('role-status/{id}', [RoleController::class, 'statusChange'])->name('role.status');

    Route::resource('experiences', ExperienceController::class);
    Route::get('experiences-status/{id}', [ExperienceController::class, 'experienceChange'])->name('experiences.status');

    Route::resource('languages', LanguageController::class);
    Route::get('language-status/{id}', [LanguageController::class, 'languageChange'])->name('language.status');

    Route::resource('users', UserController::class);

    Route::resource('products', ProductController::class);
    Route::get('product-status/{id}', [ProductController::class, 'productChange'])->name('product.status');

     Route::resource('service', ServiceController::class);
    Route::get('service-status/{id}', [ServiceController::class, 'serviceChange'])->name('service.status');


    // Order Routes
    Route::get('order-item', [OrderItemController::class, 'index'])->name('order-item');
    Route::post('order-item-store', [OrderItemController::class, 'orderItemStore'])->name('order-item-store');
    Route::get('order-create', [OrderItemController::class, 'orderCreate'])->name('order-create');
    Route::get('order-delete/{id}', [OrderItemController::class, 'orderDelete'])->name('order-delete');
    Route::get('order-edit/{id}', [OrderItemController::class, 'orderEdit'])->name('order-edit');
    Route::post('order-item-update/{id}', [OrderItemController::class, 'orderItemUpdate'])->name('order-item-update');

    // Manage Order Routes
    Route::get('manage-order', [ManageOrderController::class, 'index'])->name('manage-order');
    Route::get('manage-order-create', [ManageOrderController::class, 'manageOrderCreate'])->name('manage-order-create');
    Route::post('manage-order-store', [ManageOrderController::class, 'manageOrderStore'])->name('manage-order-store');
    Route::get('manage-order-delete/{id}', [ManageOrderController::class, 'manageOrderdelete'])->name('manage-order-delete');
    Route::get('manage-order-edit/{id}', [ManageOrderController::class, 'manageOrderedit'])->name('manage-order-edit');
    Route::post('manage-order-update/{id}', [ManageOrderController::class, 'manageOrderUpdate'])->name('manage-order-update');
    Route::get('manage-order-change-status/{id}', [ManageOrderController::class, 'manageOrderChangeStatus'])->name('manage-order-change-status');
    Route::post('manage-order-status-update/{id}', [ManageOrderController::class, 'manageOrderStatusUpdate'])->name('manage-order-status-update');
    Route::get('manage-order-import', [ManageOrderController::class, 'manageOrderImport'])->name('manage-order-import');
    Route::post('manage-order-import-store', [ManageOrderController::class, 'manageOrderImportStore'])->name('manage-order-importStore');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');

    // Other Utility Routes
    Route::get('download-demo-excel1', [ManageOrderController::class, 'downloadDemoExcel1'])->name('download-demo-excel1');
    Route::get('delevery_note_pdf/{id}', [ManageOrderController::class, 'deleveryNotePdf'])->name('delevery_note_pdf');
    Route::post('pdf-selected-ids', [ManageOrderController::class, 'pdfDwnload'])->name('pdf-selected-ids');

    // User Image Routes

       Route::get('user-images', [UserImageController::class, 'index'])->name('user-images.index');
Route::get('user-images/create', [UserImageController::class, 'create'])->name('user-images.create');
Route::post('user-images', [UserImageController::class, 'store'])->name('user-images.store');
Route::get('user-images/{userImage}/edit', [UserImageController::class, 'edit'])->name('user-images.edit');
Route::put('user-images/{userImage}', [UserImageController::class, 'update'])->name('user-images.update');
Route::delete('user-images/{userImage}', [UserImageController::class, 'destroy'])->name('user-images.destroy');


        Route::resource('video-galleries', VideoGalleryController::class);
        Route::resource('manage-documents', ManageDocumentController::class);


});

// Signature PDF Routes
Route::get('signature-pdf', [SignaturePDFController::class, 'index'])->name('signature-pdf');
Route::post('signature-pdf', [SignaturePDFController::class, 'upload'])->name('signature.upload');
Route::post('update-selected-ids', [ManageOrderController::class, 'stsUpdate'])->name('update-selected-ids');

// States routes - Make this accessible without auth for AJAX calls
Route::get('get-by-country', [StateController::class, 'getByCountry'])
    ->name('states.get-by-country');

Route::middleware(['auth', 'web'])->group(function () {
    // ... other routes ...

    // States CRUD routes
    Route::resource('states', StateController::class);

    // ... other routes ...
});
