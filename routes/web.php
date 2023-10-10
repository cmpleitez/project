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


//pendiente el middleware
Route::controller(proyectoController::class)->prefix('project')->group(function(){
    Route::get('/', 'index')->name('project.index');
    Route::get('create', 'create')->name('project.create');
    Route::get('edit/{id}', 'edit')->name('project.edit');
    Route::post('store', 'store')->name('project.store');
    Route::patch('update/{id}', 'update')->name('project.update');
    Route::get('delete/{id}', 'delete')->name('project.delete');
    Route::get('report', 'report')->name('project.report');
});

require __DIR__.'/auth.php';
