<?php

use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\ticketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content.index');
})->name('index') ;

Route::get('/tickets', function () {
    return view('pages.tickets');
})->name('pages.tickets') ;

Route::resource('tickets', ticketController::class);

Route::get('/', [ticketController::class, 'index'])->name('index');

Route::get('/generate-qrcode', [QrCodeController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/plans', 'PlanController@index')->name('plans.index');
    Route::get('/plan/{plan}', 'PlanController@show')->name('plans.show');
    Route::post('/subscription', 'SubscriptionController@create')->name('subscription.create');

    //Routes for create Plan
    Route::get('create/plan', 'SubscriptionController@createPlan')->name('create.plan');
    Route::post('store/plan', 'SubscriptionController@storePlan')->name('store.plan');
});
