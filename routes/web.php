<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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



// Auth Routes
Route::post('/login', [LoginController::class, 'login'])->name('loginProcess'); // To Process Login Request

Route::get('/login', function () { return view('auth.login'); } )-> name('login'); // To view Login Page

Route::get('/register', function () { return view('auth.register'); } )-> name('register'); // To view Register Page

Route::post('/register', [LoginController::class, 'register'])->name('RegisterProcess'); // To Register Login Request

Route::get('/logout' , [LoginController::class, 'logout'])->name('logout'); // For Logout 

Route::middleware('auth')->group(function () {

    Route::get('/', function () { return view('dashboard');}) -> name('dashboard');

    Route::get('/viewStudents',[StudentController::class,'index'] )->name('students.index');

    Route::get('/viewTeachers',[TeacherController::class,'index'] )->name('teacher.index');

    Route::get('/viewClass',[ClassesController::class,'index'] )->name('classes.index');

    Route::get('/viewHolidays',function () { return view('view-holidays');} );

    Route::get('/viewNotices',function () { return view('view-notices');} );

    Route::get('/addStudent',[StudentController::class,'add'] );

    Route::get('/addTeacher',[TeacherController::class,'add'] );

    Route::get('/addClass',[ClassesController::class,'create'] );

    Route::get('/deleteTeacher/{id}', [TeacherController::class,'deleteTeacher']);

    Route::get('/deleteStudent/{id}', [StudentController::class,'deleteStudent']);


    // POST ROUTES

    Route::post('/AddStudent',[StudentController::class,'store' ]);

    Route::post('/addTeacher', [TeacherController::class, 'addTeacher']);

    Route::post('/addClass',[ClassesController::class,'store'] ); 

   

});
