<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CoachController;
use App\Http\Controllers\Backend\CoachProfileController;




Route::get('dashboard',[CoachController::class,'dashboard'])->name('dashboard');
Route::get('profile',[CoachProfileController::class,'index'])->name('profile');
Route::put('profile',[CoachProfileController::class,'updateProfile'])->name('profile.update');
Route::post('profile',[CoachProfileController::class,'updatePassword'])->name('profile.update.password');

