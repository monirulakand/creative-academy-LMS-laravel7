<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');

// For Course
Route::get('/courseIndex', 'CourseController@courseIndex')->middleware('loginCheck');
Route::get('/getCourseData','CourseController@getCourseData')->middleware('loginCheck');
Route::post('/CourseDelete','CourseController@CourseDelete')->middleware('loginCheck');
Route::post('/getCourseDetails','CourseController@getCourseDetails')->middleware('loginCheck');
Route::post('/courseUpdate','CourseController@courseUpdate')->middleware('loginCheck');
Route::post('/CourseAdd','CourseController@CourseAdd')->middleware('loginCheck');

//For Student
Route::get('/StudentInfo', 'StudentInfoController@StudentIndex')->middleware('loginCheck');
Route::get('/getStudentData','StudentInfoController@getStudentData')->middleware('loginCheck');
Route::post('/StudentDelete','StudentInfoController@StudentDelete')->middleware('loginCheck');

//For Purchase Course
Route::get('/PurchaseCourseIndex', 'PurchaseCourseController@PurchaseCourseIndex')->middleware('loginCheck');
Route::get('/getPurchaseCourseData','PurchaseCourseController@getPurchaseCourseData')->middleware('loginCheck');
Route::post('/PurchaseCourseDelete','PurchaseCourseController@PurchaseCourseDelete')->middleware('loginCheck');
Route::post('/getPurchaseCourseDetails','PurchaseCourseController@getPurchaseCourseDetails')->middleware('loginCheck');
Route::post('/PurchaseCourseUpdate','PurchaseCourseController@PurchaseCourseUpdate')->middleware('loginCheck');

//For Login Info Student
Route::get('/LoginInfoStudentIndex', 'LoginInfoStudentController@LoginInfoStudentIndex')->middleware('loginCheck');
Route::get('/getLoginInfoStudentData','LoginInfoStudentController@getLoginInfoStudentData')->middleware('loginCheck');


//For Teacher List
Route::get('/TeacherList','TeacherController@TeacherIndex')->middleware('loginCheck');
Route::get('/getTeacherData','TeacherController@getTeacherData')->middleware('loginCheck');
Route::post('/TeacherDelete','TeacherController@TeacherDelete')->middleware('loginCheck');
Route::post('/getTeacherDetails','TeacherController@getTeacherDetails')->middleware('loginCheck');
Route::post('/TeacherUpdate','TeacherController@TeacherUpdate')->middleware('loginCheck');
Route::post('/TeacherAdd','TeacherController@TeacherAdd')->middleware('loginCheck');

//For Blog List
Route::get('/BlogIndex','BlogController@BlogIndex')->middleware('loginCheck');
Route::get('/getBlogData','BlogController@getBlogData')->middleware('loginCheck');
Route::post('/BlogDelete','BlogController@BlogDelete')->middleware('loginCheck');
Route::post('/getBlogDetails','BlogController@getBlogDetails')->middleware('loginCheck');
Route::post('/BlogUpdate','BlogController@BlogUpdate')->middleware('loginCheck');
Route::post('/BlogAdd','BlogController@BlogAdd')->middleware('loginCheck');


//For Contact List
Route::get('/ContactIndex','ContactController@ContactIndex')->middleware('loginCheck');
Route::get('/getContactData','ContactController@getContactData')->middleware('loginCheck');
Route::post('/ContactDelete','ContactController@ContactDelete')->middleware('loginCheck');

//For Review List
Route::get('/ReviewIndex','ReviewController@ReviewIndex')->middleware('loginCheck');
Route::get('/getReviewData','ReviewController@getReviewData')->middleware('loginCheck');
Route::post('/ReviewDelete','ReviewController@ReviewDelete')->middleware('loginCheck');
Route::post('/getReviewDetails','ReviewController@getReviewDetails')->middleware('loginCheck');
Route::post('/ReviewUpdate','ReviewController@ReviewUpdate')->middleware('loginCheck');

//Admin Login
Route::get('/Login','LoginController@LoginPage');
Route::post('/onLogin','LoginController@onLogin');
Route::get('/Logout','LoginController@onLogout');
