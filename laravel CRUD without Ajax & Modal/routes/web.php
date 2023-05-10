<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CrudController;
// use App\Models\users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

require __DIR__.'/auth.php';

// Route::get('/table', view('crud\table'));
// Route::get('table', function () {
//     return view('crud\table');
// });
Route::get('table',[CrudController::class, 'index'])->name('table');
Route::get('delete/{id}',[CrudController::class, 'destroy']);
Route::post('create',[CrudController::class , 'store']);
Route::get('create', function () {
    return view('crud\create_user');
});
Route::get('edit/{id}', [CrudController::class, 'show'])->name('edit');
Route::post('edit', [CrudController::class, 'update']);
