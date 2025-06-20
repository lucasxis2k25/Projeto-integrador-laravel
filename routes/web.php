<?php
 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/index', function () {
    return view('index');
});
 
Route::get('/courses', function () {
    return view('courses');
});
 
Route::get('/desc', function () {
    return view('desc');
});
 
Route::get('/video', function () {
    return view('video-aula');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';
 
 