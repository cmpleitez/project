<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\roleController;

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

Route::controller(permissionController::class)->prefix('permission')->group(function(){
    Route::get('/', 'index')->name('permission.index');
    Route::get('create', 'create')->name('permission.create');
    Route::get('edit/{id}', 'edit')->name('permission.edit');
    Route::post('store', 'store')->name('permission.store');
    Route::patch('update/{id}', 'update')->name('permission.update');
    Route::get('delete/{id}', 'delete')->name('permission.delete');
    Route::get('report', 'report')->name('permission.report');
});

Route::controller(roleController::class)->prefix('role')->group(function(){
    Route::get('/', 'index')->name('role.index');
    Route::get('create', 'create')->name('role.create');
    Route::get('edit/{id}', 'edit')->name('role.edit');
    Route::post('store', 'store')->name('role.store');
    Route::patch('update/{id}', 'update')->name('role.update');
    Route::get('delete/{id}', 'delete')->name('role.delete');
    Route::get('report', 'report')->name('role.report');
});


require __DIR__.'/auth.php';
