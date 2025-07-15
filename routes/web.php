<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\AttractionSectionController;
use App\Http\Controllers\EventSectionController;
use App\Http\Controllers\GeographicalSectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoSectionController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Contact form submission (frontend)
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.submit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/about-section', [AboutSectionController::class, 'form'])->name('about.form');
    Route::post('/about-section', [AboutSectionController::class, 'storeOrUpdate'])->name('about.save');
    Route::prefix('attraction-section')->group(function () {
        Route::get('/', [AttractionSectionController::class, 'index'])->name('attraction-section.index');
        Route::get('/create', [AttractionSectionController::class, 'create'])->name('attraction-section.create');
        Route::post('/store', [AttractionSectionController::class, 'store'])->name('attraction-section.store');
        Route::get('/{id}/edit', [AttractionSectionController::class, 'edit'])->name('attraction-section.edit');
        Route::put('/{id}', [AttractionSectionController::class, 'update'])->name('attraction-section.update');
        Route::delete('/{id}', [AttractionSectionController::class, 'destroy'])->name('attraction-section.destroy');
        Route::get('/{id}/toggle-status', [AttractionSectionController::class, 'toggleStatus'])->name('attraction-section.toggle-status');

        Route::prefix('event-section')->group(function () {
            Route::get('/', [EventSectionController::class, 'index'])->name('event-section.index');
            Route::get('/create', [EventSectionController::class, 'create'])->name('event-section.create');
            Route::post('/store', [EventSectionController::class, 'store'])->name('event-section.store');
            Route::get('/{id}/edit', [EventSectionController::class, 'edit'])->name('event-section.edit');
            Route::put('/{id}', [EventSectionController::class, 'update'])->name('event-section.update');
            Route::delete('/{id}', [EventSectionController::class, 'destroy'])->name('event-section.destroy');
        });
        Route::prefix('photo-gallery')->group(function () {
            Route::get('/', [PhotoGalleryController::class, 'index'])->name('photo-gallery.index');
            Route::get('/create', [PhotoGalleryController::class, 'create'])->name('photo-gallery.create');
            Route::post('/store', [PhotoGalleryController::class, 'store'])->name('photo-gallery.store');
            Route::delete('/{id}', [PhotoGalleryController::class, 'destroy'])->name('photo-gallery.destroy');
        });
        Route::prefix('geographical-section')->group(function () {
            Route::get('/', [GeographicalSectionController::class, 'index'])->name('geographical-section.index');
            Route::get('/create', [GeographicalSectionController::class, 'create'])->name('geographical-section.create');
            Route::post('/store', [GeographicalSectionController::class, 'store'])->name('geographical-section.store');
            Route::get('/{id}/edit', [GeographicalSectionController::class, 'edit'])->name('geographical-section.edit');
            Route::put('/{id}', [GeographicalSectionController::class, 'update'])->name('geographical-section.update');
            Route::delete('/{id}', [GeographicalSectionController::class, 'destroy'])->name('geographical-section.destroy');
        });
    });
});
Route::resource('banner', BannerController::class)->middleware(['auth']);
Route::resource('info-section', InfoSectionController::class)->middleware(['auth']);

// Admin contact form management
Route::middleware('auth')->group(function () {
    Route::get('/contact-forms', [ContactFormController::class, 'index'])->name('contact-forms.index');
    Route::get('/contact-forms/{id}', [ContactFormController::class, 'show'])->name('contact-forms.show');
    Route::delete('/contact-forms/{id}', [ContactFormController::class, 'destroy'])->name('contact-forms.destroy');
});

require __DIR__ . '/auth.php';
