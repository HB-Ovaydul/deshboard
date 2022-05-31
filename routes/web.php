<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\staffcontroller;
use App\Http\Controllers\admin\studentcontroller;
use App\Http\Controllers\admin\teachercontroller;
use App\Http\Controllers\admin\deshboardcontroller;

/**
 * admin-Deshboard Route
 */
Route::get('admin-deshboard', [ deshboardcontroller::class,'admin' ]) -> name('admin.deshboard');

/**
 * Student All Routes
 */

 Route::get('student', [ studentcontroller::class, 'index' ]) -> name('student.index');
 Route::get('student-create', [ studentcontroller::class, 'create' ]) -> name('student.create');
 Route::get('student-single/{id}', [ studentcontroller::class, 'show' ]) -> name('student.show');
 Route::get('student/{id}', [ studentcontroller::class, 'edit' ]) -> name('student.edit');
 Route::post('student-store', [ studentcontroller::class, 'store' ]) -> name('student.store');
 Route::get('destroy/{id}', [ studentcontroller::class, 'destroy' ]) -> name('student.destroy');
 Route::put('update/{id}', [ studentcontroller::class, 'update' ]) -> name('student.update');
/**
 * Teachers All Routes
 */

 Route::get('teacher', [ teachercontroller::class, 'index' ]) -> name('teacher.index');
 Route::get('teacher-create', [ teachercontroller::class, 'create' ]) -> name('teacher.create');
 Route::get('teacher-single/{id}', [ teachercontroller::class, 'show' ]) -> name('teacher.show');
 Route::get('teacher/{id}', [ teachercontroller::class, 'edit' ]) -> name('teacher.edit');
 Route::post('teacher-store', [ teachercontroller::class, 'store' ]) -> name('teacher.store');
 Route::get('destroy/{id}', [ teachercontroller::class, 'destroy' ]) -> name('teacher.destroy');
 Route::post('update/{id}', [ teachercontroller::class, 'update' ]) -> name('teacher.update');
 
 /**
  *  Staff All Routes
  */

 Route::get('staff', [ staffcontroller::class, 'index' ]) -> name('staff.index');
 Route::get('staff-create', [ staffcontroller::class, 'create' ]) -> name('staff.create');
 Route::get('staff-single/{id}', [ staffcontroller::class, 'show' ]) -> name('staff.show');
 Route::get('staff/{id}', [ staffcontroller::class, 'edit' ]) -> name('staff.edit');
 Route::post('staff-store', [ staffcontroller::class, 'store' ]) -> name('staff.store');
 Route::get('destroy/{id}', [ staffcontroller::class, 'destroy' ]) -> name('staff.destroy');
 Route::post('update/{id}', [ staffcontroller::class, 'update' ]) -> name('staff.update');