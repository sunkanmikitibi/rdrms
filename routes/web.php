<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.newlogin');
});

Route::get('/rdr-login', 'Auth\NewLoginController@index')->name('newlogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources(
    [
        'drivers' => 'DriverController',
        'vehicle' => 'VehicleController',
        'lgas' => 'LgaController',
        'ticket-sales' => 'TicketController'
    ]
    
    );

    Route::get('/admin/clients', function(Request $request) {
        return view('users.clients', [
            'clients' => $request->user()->clients
        ]);
    })->middleware('auth')->name('admin.clients');

    Route::group(['middleware' => ['auth']], function() {
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);        
    });

Route::get('/driver-details/{driver}', 'DriverController@getDriverDetails')->name('driverdetails');
Route::get('/bike-drivers', 'DriverController@getAllBikers')->name('bikedrivers');
Route::get('/korope-drivers', 'DriverController@koropeDrivers')->name('korope-drivers');