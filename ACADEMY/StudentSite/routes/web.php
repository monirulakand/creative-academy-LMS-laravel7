<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@HomePage');

Route::get('/courses', 'CourseController@CoursesPage');
Route::get('/CourseEnrollPage/{id}', 'CourseEnrollController@CourseEnrollPage')->middleware('check');

Route::post('/onPurchase', 'CourseEnrollController@onPurchase')->middleware('check');

Route::get('/AllBlog', 'BlogController@AllBlog');
Route::get('/BlogDetails/{id}', 'BlogController@BlogDetails');

Route::get('/AllReview', 'ReviewController@AllReview');
Route::get('/about', 'AboutController@AboutIndex');

Route::get('/contact', 'ContactController@ContactIndex');
Route::post('/ContactSend', 'ContactController@ContactSend');

//Authentication
Route::get('/login','LoginController@LoginPage' );
Route::get('/registration','RegistrationController@RegistrationPage');
Route::post('/getRegistration','RegistrationController@onRegister');
Route::post('/passRecover','PassRecoverController@onRecover');
Route::post('/passReset','PassResetController@onReset');
Route::post('/loginSet','LoginController@onLogin');
Route::get('/logout','LogoutController@onLogout')->middleware('check');

//ClassRoom
Route::get('/classroom','ClassRoomController@ClassRoomPage')->middleware('check');
Route::get('/classRoomHome','ClassRoomController@classRoomHome')->middleware('check');

Route::get('/courseClass/{code}','TutorialController@TutorialByCourseCode')->middleware('check');
Route::get('/courseVideos','TutorialController@courseVideos')->middleware('check');

Route::get('/files','FilesController@FilesPage')->middleware('check');
Route::post('/fileList','FilesController@FileList')->middleware('check');

Route::get('/ReviewIndex','ReviewController@ReviewIndex')->middleware('check');
Route::post('/ReviewAdd','ReviewController@ReviewAdd')->middleware('check');

Route::get('/profile','ProfileController@ProfilePage')->middleware('check');
Route::post('/profileDetail','ProfileController@ProfileDetail')->middleware('check');
