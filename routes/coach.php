<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CoachController;



Route::get('dashboard',[CoachController::class,'dashboard'])->name('dashboard');
