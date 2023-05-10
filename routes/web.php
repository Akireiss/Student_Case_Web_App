<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LoginController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/recent', function () {
    return view('profile.recent');
});

// Can access by the admin or teacher
Route::get('case/view', function () {
    return view('admin.student_case.view');
});



Route::get('redirects', 'App\Http\Controllers\LoginController@index');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
Route::get('dashboard', function () {
        return view('admin.dashboard.dashboard');
});
Route::get('reports', [ReportController::class, 'index']);

Route::get('case', function () {
    return view('admin.student_case.index');
});

Route::get('settings/rules', function () {
    return view('admin.settings.rules.index');
});
Route::get('settings/grades', function () {
    return view('admin.settings.grades.index');
});
Route::get('settings/students', function () {
    return view('admin.settings.students.index');
});
Route::get('report/view', function () {
    return view('admin.reports.view');
});
Route::get('usermanagement', function () {
    return view('admin.user_management.index');
});

});




// Staff or Advisors
Route::prefix('staff')->middleware(['auth'])->group(function () {
    Route::get('students', function () {
        return view('staff.students.index');
    });
});
