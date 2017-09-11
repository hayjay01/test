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

Route::get('/', 'User\UserController@index')->name('index');

Route::match(['get', 'post'], '/login', 'User\UserController@login'
)->name('login')->middleware('guest');

Route::match(['get', 'post'], '/logout', 'User\UserController@logout')->name('logout');

Route::match(['get', 'post'], '/signup', 'User\UserController@signup'
)->name('signup');

Route::get('/signup/merchant', 'User\UserController@signup'
)->name('merchant');


Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/event_preview', function () {
    return view('event_preview');
})->name('event_preview');

Route::get('/event_confirm', function () {
    return view('event_confirm');
})->name('event_confirm')->middleware('auth');

Route::get('/book_event', function () {
    return view('book_event');
})->name('book_event');

Route::post('/attend_event', 'Event\EventController@attendEvent')->name('attend_event');

Route::get('/formcity_card', function () {
    return view('formcity_card');
})->name('formcity_card');



Route::get('/user_dashboard', function () {
    return view('user_dashboard');
})->name('user_dashboard');

Route::get('/booked_event', function () {
    return view('booked_event');
})->name('booked_event');

Route::get('/booked_event_details', function () {
    return view('booked_event_details');
})->name('booked_event_details');

Route::get('/search_result', function () {
    return view('search_result');
})->name('search_result');

Route::get('/seminars_conference', function () {
    return view('seminars');
})->name('seminars');

Route::get('/reality_shows', function () {
    return view('reality_shows');
})->name('reality_shows');

Route::get('/schools', 'SchoolController@schools')->name('schools');


Route::get('/school_page/{school}', 'SchoolController@school_page')->name('school_page');

Route::get('/school_payment', 'SchoolController@school_payment')->name('school_payment');

Route::get('/schoolpay_option', function () {
    return view('schoolpay_option');
})->name('schoolpay_option');

Route::match(['get', 'post'], '/school_form/{school}', 'SchoolController@school_apply')->name('school_form');

Route::get('/payment_type', function () {
    return view('payment_type');
})->name('payment_type');

Route::get('/school_notification', function () {
    return view('school_notification');
})->name('school_notification');


Route::group(['prefix'=> 'admin', 'middleware'=> 'admin'], function(){
    // Route::get('/dashboard', function(){
    //     return view('admin.dashboard');
    // })->name('admin_dashboard');

    Route::match(['get', 'post'], '/dashboard', 'Admin\AdminController@vendorsApplications')->name('vendors_applications');

    Route::match(['get', 'post'], '/users_applications', 'Admin\AdminController@usersApplications')->name('users_applications');

    Route::match(['get', 'post'], '/school_status/{school}/{status?}', 'Admin\AdminController@schoolStatus')->name('school_status');

    Route::match(['get', 'post'], '/event_admin_status/{admin}/{status?}', 'Admin\AdminController@eventAdminStatus')->name('event_admin_status');

    Route::match(['get', 'post'], '/event_beauty_status/{id}/{type}/{status?}', 'Admin\AdminController@eventStatus')->name('event_beauty_status');    
});

Route::group(['prefix'=> 'admin', 'middleware'=> 'school'], function(){

    Route::match(['get', 'post'], 'add_grade', 'SchoolController@addGrade')->name('add_grade');
    Route::match(['get', 'post'], '/grade_status/{grade_id?}/{status?}', 'SchoolController@gradeStatus')->name('grade_status');
    Route::match(['get', 'post'], 'add_campus', 'SchoolController@addCampus')->name('add_campus');
    Route::match(['get', 'post'], 'add_school', 'SchoolController@createSchool')->name('add_school');
    Route::match(['get', 'post'], '/admission_status/{school}/{status?}', 'SchoolController@admissionStatus')->name('admission_status');
    Route::match(['get', 'post'], '/school_edit_profile', 'SchoolController@editProfile')->name('school_edit_profile');

    Route::match(['get', 'post'], 'school_application', 'SchoolController@usersApplications')->name('school_application');
});

Route::group(['prefix'=> 'admin', 'middleware' => 'event_beauty'], function(){

    Route::match(['get', 'post'], 'event_beauty/update_profile', 'Event\EventController@profile')->name('event_beauty_profile');
    Route::match(['get', 'post'], 'add_event', 'Event\EventController@addEvent')->name('add_event');
    Route::match(['get', 'post'], 'event_beauty/applications', 'Event\EventController@eventpageantApplication')->name('event_beauty');

});

Route::get('get_image/{reference}', 'User\UserController@showImage')->name('show_image');
Route::get('/images', 'User\UserController@showImage')->name('images');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
