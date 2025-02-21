<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\SmsAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// SMS Service
// Route::post('/register-phone', [SmsAuthController::class, 'registerWithPhone']);
// Route::post('/login-phone', [SmsAuthController::class, 'loginWithPhone']);
// Route::post('/reset-password-phone', [SmsAuthController::class, 'resetPasswordWithPhone']);



################## Admin routes  ##################
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin/dashboard' , [AdminController::class, 'index'])->name('admin.dashboard');

});

################## Vendor routes  ##################
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/vendor' , [VendorController::class, 'index'])->name('vendor.dashboard');

});



require __DIR__.'/auth.php';
