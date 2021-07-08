<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');

// For Class List
Route::get('/ClassListIndex', 'ClassListController@ClassListIndex')->middleware('loginCheck');
Route::get('/getClassListData','ClassListController@getClassListData')->middleware('loginCheck');
Route::post('/ClassListDelete','ClassListController@ClassListDelete')->middleware('loginCheck');
Route::post('/getClassListDetails','ClassListController@getClassListDetails')->middleware('loginCheck');
Route::post('/ClassListUpdate','ClassListController@ClassListUpdate')->middleware('loginCheck');
Route::post('/ClassListAdd','ClassListController@ClassListAdd')->middleware('loginCheck');

// For File Document
Route::get('/FileDocumentIndex', 'FileDocumentController@FileDocumentIndex')->middleware('loginCheck');
Route::get('/getFileDocumentData','FileDocumentController@getFileDocumentData')->middleware('loginCheck');
Route::post('/FileDocumentDelete','FileDocumentController@FileDocumentDelete')->middleware('loginCheck');
Route::post('/FileDocumentAdd','FileDocumentController@FileDocumentAdd')->middleware('loginCheck');


// For Contact
Route::get('/ContactIndex', 'ContactController@ContactIndex')->middleware('loginCheck');
Route::get('/getContactData','ContactController@getContactData')->middleware('loginCheck');


// For Review
Route::get('/ReviewIndex', 'ReviewController@ReviewIndex')->middleware('loginCheck');
Route::get('/getReviewData','ReviewController@getReviewData')->middleware('loginCheck');

//Admin Login
Route::get('/Login','TeacherLoginController@LoginIndex');
Route::post('/onLogin','TeacherLoginController@onLogin');
Route::get('/Logout','TeacherLoginController@onLogout');
