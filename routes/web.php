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
    Route::resource('projects', 'ProjectsController');
    Route::resource('sales', 'SalesController');
    Route::resource('reports', 'ReportsController');
    Route::resource('employees', 'EmployeesController');
    Route::resource('payroll', 'PayrollController');
    Route::resource('settings', 'SettingsController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('users', 'UserController');
    Route::resource('clients', 'ClientController');
    Route::resource('positions', 'PositionController');
    Route::resource('departments', 'DepartmentController');
});

// Customizing Routes
Route::group(['middleware' => 'auth'], function(){
    Route::get('users/edit/{slug}', 'UserController@edit')->name('user.edit');
});