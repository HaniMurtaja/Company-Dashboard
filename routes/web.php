<?php

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


//Route::get('/home', function () {
//    return redirect('/');
//});

//Route::get('/', 'HomeController@index');

Route::get('/', function () {
    return view('website.index');
});


Route::get('dropdownlist/getstates/{id}','WEB\Admin\StudentsController@getStates');


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
], function () {



    Route::get('index','WEB\Frontend\FrontController@index');
    Route::post('contact/store','WEB\Frontend\ContactUsController@store');
    Route::get('teachers','WEB\Frontend\FrontController@teachers');
    Route::get('subjects','WEB\Frontend\FrontController@subjects');
    Route::get('questions','WEB\Frontend\FrontController@questions');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::post('/login', 'Auth\LoginController@login')->name('login');



    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');


    //Auth::routes();


    //ADMIN AUTH ///

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return route('/login');
        });


        Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login.form');
        Route::post('/login', 'AdminAuth\LoginController@login')->name('admin.login');
        Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
      //  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.reset');
     //   Route::post('/password/email', 'AdminAuth\ForgotPasswordController@send_email')->name('admin.password.email');
    });






    Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'as' => 'admin.',], function () {
        Route::get('/', function () {
            return redirect('/admin/home');
        });
        Route::post('/changeStatus/{model}', 'WEB\Admin\HomeController@changeStatus');

        Route::get('home', 'WEB\Admin\HomeController@index')->name('admin.home');

        Route::get('/admins/{id}/edit', 'WEB\Admin\AdminController@edit')->name('admins.edit');
        Route::patch('/admins/{id}', 'WEB\Admin\AdminController@update')->name('users.update');
        Route::get('/admins/{id}/edit_password', 'WEB\Admin\AdminController@edit_password')->name('admins.edit_password');
        Route::post('/admins/{id}/edit_password', 'WEB\Admin\AdminController@update_password')->name('admins.edit_password');



        if (can('admins')) {
            Route::get('/admins', 'WEB\Admin\AdminController@index')->name('admins.all');
            Route::post('/admins/changeStatus', 'WEB\Admin\AdminController@changeStatus')->name('admin_changeStatus');

            Route::delete('admins/{id}', 'WEB\Admin\AdminController@destroy')->name('admins.destroy');

            Route::post('/admins', 'WEB\Admin\AdminController@store')->name('admins.store');
            Route::get('/admins/create', 'WEB\Admin\AdminController@create')->name('admins.create');
        }

        // if (can('countries')) {
        //     Route::resource('/countries', 'WEB\Admin\CountriesController');
        // }
         if (can('cities')) {
            Route::resource('/cities', 'WEB\Admin\CitiesController');
            Route::get('/citiess/{id}' ,'WEB\Admin\CitiesController@cities');
        }

        if (can('slider')) {
            Route::resource('/slider', 'WEB\Admin\SliderController');
            Route::post('/slider/changeStatus', 'WEB\Admin\SliderController@changeStatus');
            Route::delete('slider/image/{image_id}', 'WEB\Admin\SliderController@deleteImage');
        }


        if (can('contact_us')) {
            Route::get('/contact', 'WEB\Admin\ContactController@index');
            Route::get('/viewMessage/{id}', 'WEB\Admin\ContactController@viewMessage');
            Route::delete('/contact/{id}', 'WEB\Admin\ContactController@destroy');
        }



        if (can('settings')) {
            Route::get('settings', 'WEB\Admin\SettingController@index')->name('settings.all');
            Route::post('settings', 'WEB\Admin\SettingController@update')->name('settings.update');
        }


        if(can('pages'))
        {
            Route::resource('/pages', 'WEB\Admin\PagesController');
            Route::post('/pages/changeStatus', 'WEB\Admin\PagesController@changeStatus');
        }


        if (can('users')) {

            Route::get('/users', 'WEB\Admin\UserController@index')->name('users.all');
           Route::post('/users', 'WEB\Admin\UserController@store')->name('users.store');
            Route::get('/users/create', 'WEB\Admin\UserController@create')->name('users.create');
            Route::delete('users/{id}', 'WEB\Admin\UserController@destroy')->name('users.destroy');
            Route::get('/users/{id}/edit', 'WEB\Admin\UserController@edit')->name('users.edit');
            Route::patch('/users/{id}', 'WEB\Admin\UserController@update')->name('users.update');
            Route::get('/users/{id}/edit_password', 'WEB\Admin\UserController@edit_password')->name('users.edit_password');
            Route::post('/users/{id}/edit_password', 'WEB\Admin\UserController@update_password')->name('users.edit_password');
            Route::post('users_changeStatus2', 'WEB\Admin\UserController@changeStatus2');

        }

        if (can('students')) {

            Route::get('/students', 'WEB\Admin\StudentsController@index')->name('students.all');
           Route::post('/students', 'WEB\Admin\StudentsController@store')->name('students.store');
            Route::get('/students/create', 'WEB\Admin\StudentsController@create')->name('students.create');
            Route::delete('students/{id}', 'WEB\Admin\StudentsController@destroy')->name('students.destroy');
            Route::get('/students/{id}/edit', 'WEB\Admin\StudentsController@edit')->name('students.edit');
            Route::patch('/students/{id}', 'WEB\Admin\StudentsController@update')->name('students.update');
            Route::get('/students/{id}/edit_password', 'WEB\Admin\StudentsController@edit_password')->name('students.edit_password');
            Route::post('/students/{id}/edit_password', 'WEB\Admin\StudentsController@update_password')->name('students.edit_password');
            Route::post('students_changeStatus2', 'WEB\Admin\StudentsController@changeStatus2');

        }
        if (can('teachers')) {

            Route::get('/teachers', 'WEB\Admin\TeachersController@index')->name('teachers.all');
           Route::post('/teachers', 'WEB\Admin\TeachersController@store')->name('teachers.store');
            Route::get('/teachers/create', 'WEB\Admin\TeachersController@create')->name('teachers.create');
            Route::delete('teachers/{id}', 'WEB\Admin\TeachersController@destroy')->name('teachers.destroy');
            Route::get('/teachers/{id}/edit', 'WEB\Admin\TeachersController@edit')->name('teachers.edit');
            Route::patch('/teachers/{id}', 'WEB\Admin\TeachersController@update')->name('teachers.update');
            Route::get('/teachers/{id}/edit_password', 'WEB\Admin\TeachersController@edit_password')->name('teachers.edit_password');
            Route::post('/teachers/{id}/edit_password', 'WEB\Admin\TeachersController@update_password')->name('teachers.edit_password');
            Route::post('studenteachersts_changeStatus2', 'WEB\Admin\TeachersController@changeStatus2');

        }

        if (can('promotions')) {
            Route::resource('/promotions', 'WEB\Admin\Promotion_codeController');
            Route::post('promotions_changeStatus', 'WEB\Admin\Promotion_codeController@changeStatus');

        }
        //  if (can('students')) {
        //     Route::resource('/students', 'WEB\Admin\StudentsController');

        // }
        //  if (can('teachers')) {
        //     Route::resource('/teachers', 'WEB\Admin\TeachersController');

        // }
        // if (can('upgradeRequests')) {
        //     Route::resource('/upgradeRequests', 'WEB\Admin\Upgrade_requestsController');
        // }
        
        if (can('upgradeRequests')) {

            Route::get('/upgradeRequests', 'WEB\Admin\Upgrade_requestsController@index')->name('upgradeRequests.all');
           Route::post('/upgradeRequests', 'WEB\Admin\Upgrade_requestsController@store')->name('upgradeRequests.store');
            Route::get('/upgradeRequests/create', 'WEB\Admin\Upgrade_requestsController@create')->name('upgradeRequests.create');
            Route::delete('upgradeRequests/{id}', 'WEB\Admin\Upgrade_requestsController@destroy')->name('upgradeRequests.destroy');
            Route::get('/upgradeRequests/{id}/edit', 'WEB\Admin\Upgrade_requestsController@edit')->name('upgradeRequests.edit');
            Route::patch('/upgradeRequests/{id}', 'WEB\Admin\Upgrade_requestsController@update')->name('upgradeRequests.update');
            Route::get('/upgradeRequests/{id}/edit_password', 'WEB\Admin\Upgrade_requestsController@edit_password')->name('upgradeRequests.edit_password');
            Route::post('/upgradeRequests/{id}/edit_password', 'WEB\Admin\Upgrade_requestsController@update_password')->name('upgradeRequests.edit_password');
            Route::post('studenteachersts_changeStatus2', 'WEB\Admin\Upgrade_requestsController@changeStatus2');

        }
        if (can('countries')) {

            Route::get('/countries', 'WEB\Admin\CountriesController@index')->name('countries.all');
            Route::post('/countries', 'WEB\Admin\CountriesController@store')->name('countries.store');
            Route::get('/countries/create', 'WEB\Admin\CountriesController@create')->name('countries.create');
            Route::delete('countries/{id}', 'WEB\Admin\CountriesController@destroy')->name('countries.destroy');
            Route::get('/countries/{id}/edit', 'WEB\Admin\CountriesController@edit')->name('countries.edit');
            Route::patch('/countries/{id}', 'WEB\Admin\CountriesController@update')->name('countries.update');
            Route::post('students_changecountry', 'WEB\Admin\CountriesController@changeStatus');

        }

        if (can('cities')) {

            Route::get('/cities', 'WEB\Admin\CitiesController@index')->name('cities.all');
            Route::post('/cities', 'WEB\Admin\CitiesController@store')->name('cities.store');
            Route::get('/cities/create', 'WEB\Admin\CitiesController@create')->name('cities.create');
            Route::delete('cities/{id}', 'WEB\Admin\CitiesController@destroy')->name('cities.destroy');
            Route::get('/cities/{id}/edit', 'WEB\Admin\CitiesController@edit')->name('cities.edit');
            Route::patch('/cities/{id}', 'WEB\Admin\CitiesController@update')->name('cities.update');

        }

        if (can('universities')) {

            Route::get('/universities', 'WEB\Admin\UniversityController@index')->name('universities.all');
            Route::post('/universities', 'WEB\Admin\UniversityController@store')->name('universities.store');
            Route::get('/universities/create', 'WEB\Admin\UniversityController@create')->name('universities.create');
            Route::delete('universities/{id}', 'WEB\Admin\UniversityController@destroy')->name('universities.destroy');
            Route::get('/universities/{id}/edit', 'WEB\Admin\UniversityController@edit')->name('universities.edit');
            Route::patch('/universities/{id}', 'WEB\Admin\UniversityController@update')->name('universities.update');

        }

        if (can('specialists')) {

            Route::get('/specialists', 'WEB\Admin\SpecialistController@index')->name('specialists.all');
            Route::post('/specialists', 'WEB\Admin\SpecialistController@store')->name('specialists.store');
            Route::get('/specialists/create', 'WEB\Admin\SpecialistController@create')->name('specialists.create');
            Route::delete('specialists/{id}', 'WEB\Admin\SpecialistController@destroy')->name('specialists.destroy');
            Route::get('/specialists/{id}/edit', 'WEB\Admin\SpecialistController@edit')->name('specialists.edit');
            Route::patch('/specialists/{id}', 'WEB\Admin\SpecialistController@update')->name('specialists.update');

        }

        if (can('subjects')) {

            Route::get('/subjects', 'WEB\Admin\SubjectsController@index')->name('subjects.all');
            Route::post('/subjects', 'WEB\Admin\SubjectsController@store')->name('subjects.store');
            Route::get('/subjects/create', 'WEB\Admin\SubjectsController@create')->name('subjects.create');
            Route::delete('subjects/{id}', 'WEB\Admin\SubjectsController@destroy')->name('subjects.destroy');
            Route::get('/subjects/{id}/edit', 'WEB\Admin\SubjectsController@edit')->name('subjects.edit');
            Route::patch('/subjects/{id}', 'WEB\Admin\SubjectsController@update')->name('subjects.update');

        }

        if (can('categories')) {
            Route::resource('/categories', 'WEB\Admin\CategoriesController');
        }

        if (can('services')) {
            Route::resource('/services', 'WEB\Admin\ServicesController');
            Route::delete('/imageService/{id}', 'WEB\Admin\ServicesController@destroyImage');


            Route::get('/additionServices/{service_id}', 'WEB\Admin\AdditionServicesController@index');
            Route::get('/createAdditionServices/{service_id}', 'WEB\Admin\AdditionServicesController@create')->name('admin.additionService.create');
            Route::post('/additionServices', 'WEB\Admin\AdditionServicesController@store');
            Route::get('/additionServices/{id}/edit', 'WEB\Admin\AdditionServicesController@edit');
            Route::patch('/additionServices/{id}', 'WEB\Admin\AdditionServicesController@update');
            Route::delete('/additionServices/{id}', 'WEB\Admin\additionServicesController@destroy');

        }



        if (can('questions')) {
            Route::resource('questions', 'WEB\Admin\QuestionsController');
            Route::post('/questions/{id}', 'WEB\Admin\QuestionsController@update');
        }

        
        
        if (can('rates')) {
            Route::resource('rates', 'WEB\Admin\RateController');
            Route::get('rates/rateDetails/{id}', 'WEB\Admin\RateController@rateDetails');
        }



        if (can('owners')) {
            Route::resource('/owners', 'WEB\Admin\OwnersController');
            Route::get('/owners/{id}/edit_password', 'WEB\Admin\OwnersController@edit_password')->name('owners.edit_password');
            Route::post('/owners/{id}/edit_password', 'WEB\Admin\OwnersController@update_password')->name('owners.edit_password');


        }


        if (can('notifications')) {

            Route::resource('/notifications', 'WEB\Admin\NotificationMessageController');
        }


        if(can('permissions'))
        {
            Route::resource('/role', 'WEB\Admin\RoleController');
        }

    });








});


