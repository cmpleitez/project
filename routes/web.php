<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProyectoController::class,'index'])->name('index');
Route::get('create', [ProyectoController::class,'create'])->name('create');
Route::get('edit/{id}', [ProyectoController::class,'edit'])->name('edit');
Route::post('store', [ProyectoController::class,'store'])->name('store');
Route::patch('update/{id}', [ProyectoController::class,'update'])->name('update');
Route::get('delete/{id}', [ProyectoController::class,'delete'])->name('delete');
Route::get('report', [ProyectoController::class,'report'])->name('report');

require __DIR__.'/auth.php';
