<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::view('', 'instruction' );
Route::get('/students', 'StudentController@index')->name('students');
Route::group(['prefix' => 'export'], function(){
    Route::post('/students', 'ExportController@exportStudentsToCSV')->name('export.students');
    Route::get('/total_attendance', 'ExportController@exportTotalAttendanceToCSV')->name('export.total_attendance');
    Route::get('/course_attendance', 'ExportController@exportCoursesAttendanceToCSV')->name('export.course_attendance');
});
Route::get('/students/csv', 'FileController@uploadStudentCsv')->name('student.csv');
Route::get('/total_attendance/csv', 'FileController@uploadTotalAttendanceCsv')->name('total_attendance.csv');
Route::get('/course_attendance/csv', 'FileController@uploadCoursesAttendanceCsv')->name('course_attendance.csv');

