<?php

use App\Livewire\CreateProcurement;
use App\Livewire\ProcurementOrderTable;
use App\Livewire\ProcurementRequestTable;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\ViewProcurement;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get("/", CreateProcurement::class)->name('home');

Route::get("/procurement", CreateProcurement::class)->name('procurements');
Route::get("/procurements/{procurement}", ViewProcurement::class)->name('procurement.show');
Route::get("/procurement/request", ProcurementRequestTable::class)->name('procurement.requests');
Route::get("/procurement/order", ProcurementOrderTable::class)->name('procurement.orders');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
