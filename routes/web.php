<?php

use App\Livewire\Pages\Admin\TourDestination\Index;
use Illuminate\Support\Facades\Route;

// Route::view('/dashboard', 'welcome')->name('dashboard');

Route::name('company-profile.')->group(function() {
    Route::view('/', 'livewire.pages.company-profile.index')->name('index');
    Route::view('/destinasi-wisata', 'livewire.pages.company-profile.destinasi-wisata')->name('tour-destination');

    Route::view('/about', 'livewire.pages.company-profile.about')->name('about');

    Route::view('/berita', 'livewire.pages.company-profile.berita')->name('news');
    Route::view('/berita/{id}', 'livewire.pages.company-profile.detail-berita')->name('news.detail');

    Route::view('/galeri', 'livewire.pages.company-profile.galeri')->name('galery');
});

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function() {
    // Route::view('dashboard', 'dashboard')
    //     ->middleware(['auth', 'verified'])
    //     ->name('dashboard');

    Route::get('/destinasi-wisata', Index::class)->name('tour-destination.index');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
