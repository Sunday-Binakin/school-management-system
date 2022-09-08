<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\Setup\StudentClassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    // creating a group route for all admin actions
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });

    Route::prefix('user')->controller(UserController::class)->group(function () {
        Route::get('/index', 'index')->name('user.index');
        Route::get('/create', 'create')->name('user.create');
        Route::post('/store', 'store')->name('user.store');
        Route::get('/edit/{id}', 'edit')->name('user.edit');
        Route::post('/update/{id}', 'update')->name('user.update');
        Route::get('/destroy/{id}', 'destroy')->name('user.destroy');
    });

    Route::prefix('manage/profile')->controller(ProfileController::class)->group(function () {
        Route::get('/index', 'index')->name('manage.profile.index');
        Route::get('/edit', 'edit')->name('manage.profile.edit');
        Route::post('/update', 'update')->name('manage.profile.update');
    });


    Route::prefix('setup/student/class')->controller(StudentClassController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.class.index');
        Route::post('/store', 'store')->name('setup.student.class.store');
        Route::post('/update/{id}', 'update')->name('setup.student.class.update');
        Route::get('/destroy', 'destroy')->name('setup.student.class.destroy');
    });
});
Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
