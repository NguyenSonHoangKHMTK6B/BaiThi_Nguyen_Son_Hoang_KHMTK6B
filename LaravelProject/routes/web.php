<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/home',
    function () {
        $html = "<h1>Welcome to my world</h1>";
        return $html;
    }
);

Route::get('/greeting', function() {
    return view('greeding', ['name' => 'TiNo']);
});

Route::get('/customer', function() {
    return view('customer');
} 
);

// Cách khác
// Route::get('/customer',
//     'App\Http\Controllers\CustomerController@index'
// );

// Route::get('/getProduct', function() {
//     return view('getProducts');
// });

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'patient'], function() {
        Route::get('/getPatients',
            'App\Http\Controllers\PatientController@getPatient'
        );

            
        Route::get('/getPatientsbyName',
            'App\Http\Controllers\PatientController@getPatientsbyName'
        ) -> name('admin.patient.getPatientsbyName');


        Route::get('/insertPatient',
            'App\Http\Controllers\PatientController@forminsertPatient'
        );

        Route::post('/insertPatient',
            'App\Http\Controllers\PatientController@insertPatient'
        );

        Route::get('/deletePatient/{id}',
            'App\Http\Controllers\PatientController@deletePatient'
        ) -> name('admin.patient.deletePatient');

        Route::get('/updatePatient/{pid}',
            'App\Http\Controllers\PatientController@editPatient'
        );

        Route::post('/updatePatient/{pid}',
            'App\Http\Controllers\PatientController@updatePatient'
        ) -> name('admin.patient.updatePatient');



    });

    Route::group(['prefix' => 'doctor'], function() {
        Route::get('/getDoctors',
            'App\Http\Controllers\DoctorController@getDoctor'
        );

        Route::get('/getDoctorsbySpecialized',
            'App\Http\Controllers\DoctorController@getDoctorsbySpecialized'
        ) -> name('admin.doctor.getDoctorsbySpecialized');

        Route::get('/insertDoctor',
            'App\Http\Controllers\DoctorController@forminsertDoctor'
        );

        Route::post('/insertDoctor',
            'App\Http\Controllers\DoctorController@insertDoctor'
        );

    });

    Route::group(['prefix' => 'order'], function() {
        Route::get('/getOrder',
            'App\Http\Controllers\OrderController@getOrder'
        );
    });

    Route::group(['prefix' => 'orderdetail'], function() {

    });
});