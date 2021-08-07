<?php

use App\Http\Controllers\Graebens\BranchesController;
use App\Http\Controllers\Graebens\CoursesController;
use App\Http\Controllers\Graebens\PagesController;
use App\Http\Controllers\Graebens\RegistrationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('pages.homepage');
})->name('Default');
Route::get('/Courses', [PagesController::class, 'courses'])->name('Courses');
Route::get('/Assessment', [PagesController::class, 'driver_assessment'])->name('Assessment');
Route::get('/Contact', [PagesController::class, 'contact'])->name('Contact');
Route::get('/Branches', [PagesController::class, 'school_branches'])->name('Branches');

// RegistrationController
Route::get('/OnlineRegistration', [PagesController::class, 'registration'])->name('OnlineRegistration');
Route::post('/OnlineRegistration', [RegistrationController::class, 'register'])->name('OnlineRegistration');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/Registration', [HomeController::class, 'student_registration'])->name('Registration');
Route::get('/home/{id}', [RegistrationController::class, 'edit'])->name('home.edit');

Route::get('/GraebensCourses', [CoursesController::class, 'index'])->name('GraebensCourses');
Route::get('/GraebensBranches',[BranchesController::class,'index'])->name('GraebensBranches');
Route::post('/StoreCourse', [CoursesController::class, 'store'])->name('StoreCourse');
Route::post('/StoreBranch', [BranchesController::class, 'store'])->name('StoreBranch');

