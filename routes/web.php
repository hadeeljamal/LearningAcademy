<?php

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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

 Route::namespace('Front')->group(function ()
 {
    Route::get('/', 'HomePageController@index')->name('Front.HomePage');


    Route::get('/cat/{id}', 'CourseController@cat')->name('Front.cat');
    Route::get('/cat/{id}/course/{cat_id}', 'CourseController@show')->name('Front.show');

    Route::get('/contact', 'ContactController@index')->name('Front.contact');

    Route::post('/message/newsletter', 'MessageController@newsletter')->name('Front.message.newsletter');
    Route::post('/message/contact', 'MessageController@contact')->name('Front.message.contact');
    Route::post('/message/enroll', 'MessageController@enroll')->name('Front.message.enroll');

 });

 Route::namespace('Admin')->group(function(){
    Route::get('/dashboard', 'HomeController@index')->name('Admin.home');
//    Route::get('/dashboard/login', 'AuthController@login')->name('Admin.login');
//    Route::post('/dashboard/do-login', 'AuthController@doLogin')->name('Admin.doLogin');
//    ************************************* Cat************************************
    Route::get('/cats', 'CatController@index')->name('admin.cats.index');
    Route::get('/cats/create', 'CatController@create')->name('admin.cats.create');
    Route::post('/cats/store', 'CatController@store')->name('admin.cats.store');
     Route::get('/cats/edit/{id}', 'CatController@edit')->name('admin.cats.edit');
     Route::post('/cats/update', 'CatController@update')->name('admin.cats.update');
     Route::get('/cats/delete/{id}', 'CatController@destroy')->name('admin.cats.delete');

//     ************************************* trainers************************************
    Route::get('/trainers', 'TrainerController@index')->name('admin.trainers.index');
     Route::get('/trainers/create', 'TrainerController@create')->name('admin.trainers.create');
     Route::post('/trainers/store', 'TrainerController@store')->name('admin.trainers.store');
     Route::get('/trainers/edit/{id}', 'TrainerController@edit')->name('admin.trainers.edit');
     Route::post('/trainers/update', 'TrainerController@update')->name('admin.trainers.update');
     Route::get('/trainers/delete/{id}', 'TrainerController@destroy')->name('admin.trainers.delete');

//     ************************************* Courses************************************
    Route::get('/courses', 'CourseController@index')->name('admin.courses.index');
     Route::get('/courses/create', 'CourseController@create')->name('admin.courses.create');
     Route::post('/courses/store', 'CourseController@store')->name('admin.courses.store');
     Route::get('/courses/edit/{id}', 'CourseController@edit')->name('admin.courses.edit');
     Route::post('/courses/update', 'CourseController@update')->name('admin.courses.update');
     Route::get('/courses/delete/{id}', 'CourseController@destroy')->name('admin.courses.delete');

//     ************************************* Students************************************
     Route::get('/students', 'StudentController@index')->name('admin.students.index');
     Route::post('/students', 'StudentController@index')->name('admin.students.index');
     Route::get('/students/create', 'StudentController@create')->name('admin.students.create');
     Route::post('/students/store', 'StudentController@store')->name('admin.students.store');
     Route::get('/students/edit/{id}', 'StudentController@edit')->name('admin.students.edit');
     Route::post('/students/update', 'StudentController@update')->name('admin.students.update');
     Route::get('/students/delete/{id}', 'StudentController@destroy')->name('admin.students.delete');
     Route::get('/students/show-courses/{id}', 'StudentController@ShowCourses')->name('admin.students.ShowCourses');


     Route::get('pdfview',array('as'=>'pdfview','uses'=>'StudentController@pdfview'))->name('report.export-pdf');
     Route::get('users/export/', 'StudentController@export');


 });


