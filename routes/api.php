<?php

use Illuminate\Http\Request;


Route::group(['middleware' => 'auth:api'], function () {
    //operations related to user logout, editProfile, changePassword in UserController

    Route::post('/editProfile', 'API\UserController@editUser');
    Route::get('/logout', 'API\UserController@logout');
    Route::post('/changePassword', 'API\UserController@changePassword');
    Route::post('/editUser','API\UserController@editUser');
    Route::get('/myNotifications', 'API\UserController@get_notifications');
    //request teacher from student
    Route::post('requestTeacher/{id}', 'API\UserController@requestTeacher');
    Route::post('showReviews/{id}', 'API\UserController@showReviews');
    //rate the teacher by student
    Route::post('addRate/{id}', 'API\UserController@addRate');
    //show the requests and orders for student and teacher
    Route::get('showRequests', 'API\UserController@showRequests');
    
    //show the transactions for student or teacher
    Route::get('showTransactions', 'API\UserController@showTransactions');


    //routes for teacher in TeacherController

    //add new teacher
    Route::post('addNewTeacher', 'API\TeacherController@addNewTeacher');
    //teacherEdit
    Route::post('teacherEdit','API\TeacherController@teacherEdit');

});
//routes of UserController

//for signup controller
Route::post('/signUp', 'API\UserController@signUp');
//for login controller
Route::post('/login', 'API\UserController@login');
Route::post('/forgotPassword','API\UserController@forgotPassword');
Route::post('/resetPassword','API\UserController@resetPassword');
//retrieve avaliable times for teacher
Route::get('showAvaliableTime/{id}', 'API\UserController@showAvaliableTime');

//routes of AppController

//route for get ads
Route::get('getAds', 'API\AppController@getAds');
//route for get all questions
Route::get('allQuestions', 'API\AppController@allQuestions');
//route for get sliders
Route::get('slider', 'API\AppController@slider');
//get settings for website
Route::get('settings', 'API\AppController@settings');
//get countries and cities
Route::get('allCountry', 'API\AppController@allCountry');
Route::get('cityByCountryId/{id}', 'API\AppController@cityByCountryId');
//get all subjects which related to this specialist
Route::get('specialist_subject/{id}', 'API\AppController@getSubjects');
//get university search results by name
Route::get('universitySearch', 'API\AppController@universitySearch');
//get subject search results by name or code_no
Route::get('specialistSearch', 'API\AppController@specialistSearch');
//get subject search results by name or code_no
Route::get('subjectSearch', 'API\AppController@subjectSearch');
//get through walk of website
Route::get('walkThrough', 'API\AppController@walkThrough');
//post contact
Route::post('contact', 'API\AppController@contact');


//routes for chat controller
Route::post('sendMessage', 'API\ChatController@sendMessage');
Route::get('getAllMessage', 'API\ChatController@getAllMessage');
Route::get('getChatMessage/{id}', 'API\ChatController@getChatMessage');
Route::get('deleteChat/{id}', 'API\ChatController@deleteChat');

//route for get notifications
Route::get('getAllNotify', 'API\NotificationController@getAllNotify');

//routes of TeacherController

//get all teachers of specific subject related to student
//Route::get('subject_teachers/{id}', 'API\TeacherController@getTeachers');
//get all teachers of specific subject related to student
Route::post('subject_teachers/{id}', 'API\TeacherController@getTeachers');
//order teachers by price, rate, university and newest or oldest
Route::post('teacherFilter', 'API\TeacherController@teacherFilter');
//show teacher profile details for student
Route::get('Statistical', 'API\TeacherController@Statistical');

Route::get('teacherInfo/{id}','API\TeacherController@teacherInfo');
Route::get('teacherSort', 'API\TeacherController@teacherSort');
Route::post('acceptOrder/', 'API\TeacherController@acceptOrder');
Route::post('startOrder/', 'API\TeacherController@startOrder');
Route::post('endOrder/', 'API\TeacherController@endOrder');
Route::post('rejectOrder/', 'API\TeacherController@rejectOrder');

Route::post('payOrder/', 'API\UserController@payOrder');
Route::get('transaction', 'API\UserController@transaction');







