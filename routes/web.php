<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentAuthController;

// Coordinator start

use App\Http\Controllers\coor_controller;

// Coordinator end

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
})->name('home');

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/student/register', [PagesController::class, 'stdreg'])->name('stdreg');
Route::get('/teacher/register', [teacherController::class, 'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register', [teacherController::class, 'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home', [teacherController::class, 'teacherHome'])->name('teacherHome');
Route::get('/logout', [teacherController::class, 'logout'])->name('tlogout');
Route::get('/teacher/Profile', [teacherController::class, 'teacherProfile'])->name('teacherProfile')->middleware('teache.profile');
Route::get('/teacher/changepassword', [teacherController::class, 'teacherChangepassword'])->name('teacherChangepassword')->middleware('teache.profile');
Route::post('/teacher/changepassword', [teacherController::class, 'teacherUpdatepassword'])->name('teacherUpdatepassword')->middleware('teache.profile');
Route::get('/Profile', [teacherController::class, 'profilePicturesubmit'])->name('profilePicturesubmit');
Route::post('/teacher/Profile', [teacherController::class, 'profilePicturesubmit'])->name('profilePicturesubmit');
Route::get('/student/dashboard',[PagesController::class,'studentdash'])->name('stddash');
Route::get('/student/logout',[PagesController::class,'studentlogout'])->name('stdlogout');
Route::get('/student/profile',[StudentAuthController::class,'StdviewProfile'])->name('stdprofile');
Route::post('/student/changepass',[StudentAuthController::class,'changepassword'])->name('chngpass');
Route::get('/student/changepass',[PagesController::class,'changepassword'])->name('chngpass');



Route::get('/teacher/register',[teacherController::class,'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register',[teacherController::class,'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home',[teacherController::class,'teacherHome'])->name('teacherHome');





// Coordinator start
Route::get('/Coordinator/register',[coor_controller::class,'fill_register'])->name('fill_register');
Route::post('/Coordinator/register',[coor_controller::class,'submit_register'])->name('submit_register');
Route::get('/Coordinator/home',[coor_controller::class,'coor_home'])->name('coor_home');
Route::get('/Coordinator/coor_profile',[coor_controller::class,'coor_profile'])->name('coor_profile')->middleware("logincheck");
Route::get('/logout',[coor_controller::class,'logout'])->name('logout');
Route::get('/Coordinator/coor_new_course',[coor_controller::class,'newcourse'])->name('newcourse');
Route::get('/Coordinator/coor_act_course',[coor_controller::class,'activecourse'])->name('activecourse');
Route::post('/Coordinator/coor_new_course',[coor_controller::class,'newcourse_submit'])->name('newcourse');
Route::get('/Coordinator/coor_teacher',[coor_controller::class,'teacher'])->name('teacher');
Route::get('/Coordinator/coor_student',[coor_controller::class,'student'])->name('student');
Route::get('/Coordinator/coor_cngpass',[coor_controller::class,'changepassword'])->name('changepassword');
Route::post('/Coordinator/coor_cngpass',[coor_controller::class,'changepassword_submit'])->name('changepassword_submit');

// Coordinator end







