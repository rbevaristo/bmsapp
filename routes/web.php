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

Route::get('/test', function(){
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::group(['middleware' => 'auth'], function(){
    Route::resource('Projects', 'ProjectsController');
    Route::resource('Sales', 'SalesController');
    Route::resource('Reports', 'ReportsController');
    Route::resource('Employees', 'EmployeesController');
    Route::resource('Payroll', 'PayrollController');
    Route::resource('Settings', 'SettingsController');
    Route::resource('Roles', 'RoleController');
    Route::resource('Permissions', 'PermissionController');
    Route::resource('Users', 'UserController');
});