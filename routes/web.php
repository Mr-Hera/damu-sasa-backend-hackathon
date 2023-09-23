<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/patients', PatientController::class);
// Route::resource('/appointments', PatientController::class);
// Route::resource('/prescriptions', PatientController::class);

// Routes for the patient data
Route::get('/patients', 'PatientController@index');
Route::post('/patients', 'PatientController@store');
Route::get('/patients/{patient}', 'PatientController@show');
Route::put('/patients/{patient}', 'PatientController@update');
Route::delete('/patients/{patient}', 'PatientController@destroy');

// Routes for the appointment data
Route::get('/appointments', 'AppointmentController@index');
Route::post('/appointments', 'AppointmentController@store');
Route::get('/appointments/{appointment}', 'AppointmentController@show');
Route::put('/appointments/{appointment}', 'AppointmentController@update');
Route::delete('/appointments/{appointment}', 'AppointmentController@destroy');

// Routes for the prescription data
Route::get('/prescriptions', 'PrescriptionController@index');
Route::post('/prescriptions', 'PrescriptionController@store');
Route::get('/prescriptions/{prescriptions}', 'PrescriptionController@show');
Route::put('/prescriptions/{prescriptions}', 'PrescriptionController@update');
Route::delete('/prescriptions/{prescriptions}', 'PrescriptionController@destroy');

// show register form
Route::get('/register', [UserController::class, 'login']);

// logout user
Route::post('/logout', [UserController::class, 'logout']);

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);