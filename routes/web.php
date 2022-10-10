<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\Setup\ExamTypeController;
use App\Http\Controllers\backend\Setup\DesignatioController;
use App\Http\Controllers\backend\Setup\DesignationController;

;
use App\Http\Controllers\backend\setup\StudentYearController;
use App\Http\Controllers\backend\Setup\StudentClassController;
use App\Http\Controllers\backend\Setup\StudentGroupController;
use App\Http\Controllers\backend\setup\StudentShiftController;
use App\Http\Controllers\backend\Setup\AssignSubjectController;
use App\Http\Controllers\backend\setup\StudentSubjectController;
use App\Http\Controllers\backend\setup\FeesCategoryAmountController;
use App\Http\Controllers\backend\setup\StudentFeesCategoryController;
use App\Http\Controllers\Student\StudentRegistrationController;

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
        Route::get('/destroy{id}', 'destroy')->name('setup.student.class.destroy');
    });
    Route::prefix('setup/student/year')->controller(StudentYearController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.year.index');
        Route::post('/store', 'store')->name('setup.student.year.store');
        Route::post('/update/{id}', 'update')->name('setup.student.year.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.year.destroy');
    });
    Route::prefix('setup/student/subject')->controller(StudentSubjectController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.subject.index');
        Route::post('/store', 'store')->name('setup.student.subject.store');
        Route::post('/update/{id}', 'update')->name('setup.student.subject.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.subject.destroy');
    });
    Route::prefix('setup/student/shift')->controller(StudentShiftController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.shift.index');
        Route::post('/store', 'store')->name('setup.student.shift.store');
        Route::post('/update/{id}', 'update')->name('setup.student.shift.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.shift.destroy');
    });

    Route::prefix('setup/student/fees/category')->controller(StudentFeesCategoryController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.fees.category.index');
        Route::post('/store', 'store')->name('setup.student.fees.category.store');
        Route::post('/update/{id}', 'update')->name('setup.student.fees.category.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.fees.category.destroy');
    });
    Route::prefix('setup/student/fees/category/amount')->controller(FeesCategoryAmountController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.fees.category.amount.index');
            Route::get('/show/{fee_category_id}', 'show')->name('setup.student.fees.category.amount.show');
        Route::post('/store', 'store')->name('setup.student.fees.category.amount.store');
        Route::get('/edit/{fee_category_id}', 'edit')->name('setup.student.fees.category.amount.edit');
        Route::post('/update/{fee_category_id}', 'update')->name('setup.student.fees.category.amount.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.fees.category.amount.destroy');
    });
    Route::prefix('setup/student/group')->controller(StudentGroupController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.group.index');
        Route::post('/store', 'store')->name('setup.student.group.store');
        Route::post('/update/{id}', 'update')->name('setup.student.group.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.group.destroy');
    });
    Route::prefix('setup/student/exam/type')->controller(ExamTypeController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.exam.type.index');
        Route::post('/store', 'store')->name('setup.student.exam.type.store');
        Route::post('/update/{id}', 'update')->name('setup.student.exam.type.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.exam.type.destroy');
    });
    Route::prefix('setup/student/assign/subject')->controller(AssignSubjectController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.assign.subject.index');
        Route::get('/create', 'create')->name('setup.student.assign.subject.create');
        Route::post('/store', 'store')->name('setup.student.assign.subject.store');
        Route::get('/edit/{class_id}', 'edit')->name('setup.student.assign.subject.edit');
        Route::post('/update/{class_id}', 'update')->name('setup.student.assign.subject.update');
        Route::get('/show{class_id}', 'show')->name('setup.student.assign.subject.show');
    });
    Route::prefix('setup/student/designation')->controller(DesignationController::class)->group(function () {
        Route::get('/index', 'index')->name('setup.student.designation.index');
        Route::get('/create', 'create')->name('setup.student.designation.create');
        Route::post('/store', 'store')->name('setup.student.designation.store');
        // Route::get('/edit/{class_id}', 'edit')->name('setup.student.designation.edit');
        Route::post('/update/{id}', 'update')->name('setup.student.designation.update');
        Route::get('/destroy{id}', 'destroy')->name('setup.student.designation.destroy');
    });


    //student registration routes
    Route::prefix('student/registration')->controller(StudentRegistrationController::class)->group(function () {
        Route::get('/index', 'index')->name('student.registration.index');
        Route::get('/create', 'create')->name('student.registration.create');
    });
});
Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
