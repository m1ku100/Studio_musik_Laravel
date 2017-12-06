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

Auth::routes();

Route::get('coba', 'user\OrderStudioController@coba');

Route::group(['middleware'=>'auth:admin'], function () {
    Route::resource('jenis-recorder', 'JenisRecorderController');
    Route::resource('jenis-recorder', 'JenisRecorderController');
    Route::group(['prefix' => 'jenis-recorder'], function () {
        Route::get('{id}/deleted', 'JenisRecorderController@destroy');
        Route::get('jenis-recorder/{id}', 'JenisRecorderController@update');
    });


    Route::group(['prefix' => 'api'], function () {
        Route::get('jenis-recorder/data', 'JenisRecorderController@apiData')->name('api.jenis_recorder.data');
        Route::get('studio/data', 'StudioController@apiData')->name('api.studio.data');
    });
});

Route::get('/', 'SistumController@index')->name('dashboard');
Route::post('/contact', 'SistumController@postContact')->name('submit_contact');

// Verify email + reCaptcha
Route::get('register/success', 'Auth\RegisterController@verifyEmailFirst')->name('register.success');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::post('login/notrobot', 'Auth\RegisterController@notrobot')->name('login/notrobot');

// Socialite login
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

//orderstudio
//gettime dinamic
Route::get('findtime', 'user\OrderStudioController@findtime');
Route::get('findtime2', 'user\OrderStudioController@findtime2');
Route::get('findstudio', 'user\OrderStudioController@findstudio');
Route::get('findstudio2', 'user\OrderStudioController@findstudio2');

Route::get('choice-studio', 'user\OrderStudioController@choice')->name('user.choice-studio');
Route::prefix('order-studio')->group(function () {
    Route::get('options/{id}', 'user\OrderStudioController@order')->name('user.option-studio');
    Route::get('schedule', 'user\ScheduleController@showSchedule')->name('schedule');

    Route::post('become-buyer', 'user\OrderStudioController@konfirmasi')->name('user.order-studio');
    Route::get('become-buyer/accept', 'user\OrderStudioController@pembayaran')->name('user.proses-studio');
    Route::get('become-buyer/approve', 'user\OrderStudioController@tosukses')->name('user.sukses-studio');
    Route::post('confirmation-buyer', 'user\OrderStudioController@store')->name('user.buyer-studio');
});

//pembayaranstudio
Route::prefix('konfirmasi')->group(function () {
    Route::get('{id}', 'user\KonfirmasiController@index')->name('user.konfirmasi-studio');
    Route::get('edit/{id}', 'user\KonfirmasiController@edit')->name('user.editkon-studio');
    Route::put('edit/{id}', 'user\KonfirmasiController@update')->name('user.updatekon-studio');
    Route::post('', 'user\KonfirmasiController@store')->name('user.prbayar-studio');
});

Route::prefix('member')->group(function () {
    Route::get('{user}/settings', 'Auth\UserController@showAccountSettings');
    Route::put('{user}', 'Auth\UserController@updateAccount');
    Route::get('{user}/history', 'Auth\UserController@showOrderHistory');
    Route::get('{user}/history/print', 'Auth\UserController@printOrderHistory');
    Route::get('{user}/{id}/report', 'Auth\UserController@showReport');
    Route::get('{user}/{id}/print', 'Auth\UserController@printSukses');
});

//order recorder
Route::prefix('order-recorder')->group(function () {
    Route::get('/{id}', 'user\OrderRecorderController@index')->name('user.option-recorder');
    Route::post('/', 'user\OrderRecorderController@become')->name('user.become-recorder');
    Route::get('become-buyer/accept', 'user\OrderRecorderController@pembayaran')->name('user.proses-recorder');
    Route::post('confirmation-buyer', 'user\OrderRecorderController@store')->name('user.buyer-recorder');

});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('add', 'Admin\AdminController@add')->name('admin.add');
    Route::get('adminlist/{admin}/banned', 'Admin\AdminController@TableAdminDelete');
    Route::get('adminlist/{admin}/restore', 'Admin\AdminController@TableAdminRestore');
    Route::get('{admin}/settings', 'Admin\AdminController@showEditProfileForm');
    Route::put('{admin}', 'Admin\AdminController@updateAdmin');

    Route::get('tables', 'Admin\MemberController@index')->name('admin.tables');
    Route::get('tablesmember/{user}/banned', 'Admin\MemberController@destroy')->name('admin.tables.delete');
    Route::get('tablesmember/{user}/restore', 'Admin\MemberController@restore')->name('admin.tables.delete');
    Route::get('tablesmember/{konfirm}/{kode}', 'Admin\MemberController@store')->name('admin.tables.salah');

});

Route::resource('studio', 'StudioController');
Route::prefix('studio')->group(function () {
    Route::post('/', 'StudioController@store')->name('submit.studio.content');
    Route::get('{id}/delete', 'StudioController@destroy')->name('delete.studio.content');
    Route::get('{id}/edit')->name('edit.studio.content');
    Route::put('{id}/edit/update', 'StudioController@update')->name('update.studio.content');
});




