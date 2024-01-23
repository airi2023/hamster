<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// 利用者サイト表示用-------------------------------------
Route::get('/', [BlogController::class, 'newsIndexTop']);

Route::get('/news', [BlogController::class, 'newsIndex']);

Route::get('/price', function () {
    return view('price');
});


// 管理者用画面------------------------------------------
//トップページ
Route::get('/admin-top', [BlogController::class, 'indexAdminTop']);

Route::get('/admin-news', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
Route::post('/edit', [App\Http\Controllers\BlogController::class, 'edit']);
Route::get('/edit', function () {
    return redirect('/');
});
Route::post('/delete', [App\Http\Controllers\BlogController::class, 'delete']);
Route::get('/delete', function () {
    return redirect("/");
});
Route::get('/new-article', function () {
    return view('admin.create');
});

Route::post('/create', [App\Http\Controllers\BlogController::class, 'create']);
// Route::post('/create', [App\Http\Controllers\BlogController::class,'upload']);

Route::post('/change', [App\Http\Controllers\BlogController::class, 'change']);
Route::post('/del_data', [App\Http\Controllers\BlogController::class, 'del_data']);


// ログイン
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
