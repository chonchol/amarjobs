<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/







Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::auth();

// Job Categories Route
Route::group(['prefix' => 'categories','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allCategory' , 'uses' => 'CategoryController@index']);
    Route::get('add', ['as' => 'addCategory', 'uses' => 'CategoryController@create']);
    Route::get('edit/{id}', ['as' => 'editCategory', 'uses' => 'CategoryController@edit']);
    Route::post('save', ['as' => 'saveCategory', 'uses' => 'CategoryController@store']);
    Route::put('update', ['as' => 'updateCategory', 'uses' => 'CategoryController@update']);
    Route::get('delete/{id}', ['as' => 'deleteCategory', 'uses' => 'CategoryController@destroy']);

});

// Job Degrees Route
Route::group(['prefix' => 'degrees','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allDegree' , 'uses' => 'DegreeController@index']);
    Route::get('add', ['as' => 'addDegree', 'uses' => 'DegreeController@create']);
    Route::get('edit/{id}', ['as' => 'editDegree', 'uses' => 'DegreeController@edit']);
    Route::post('save', ['as' => 'saveDegree', 'uses' => 'DegreeController@store']);
    Route::put('update', ['as' => 'updateDegree', 'uses' => 'DegreeController@update']);
    Route::get('delete/{id}', ['as' => 'deleteDegree', 'uses' => 'DegreeController@destroy']);

});

// Job Skills Route
Route::group(['prefix' => 'skills','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allSkill' , 'uses' => 'SkillController@index']);
    Route::get('add', ['as' => 'addSkill', 'uses' => 'SkillController@create']);
    Route::get('edit/{id}', ['as' => 'editSkill', 'uses' => 'SkillController@edit']);
    Route::post('save', ['as' => 'saveSkill', 'uses' => 'SkillController@store']);
    Route::put('update', ['as' => 'updateSkill', 'uses' => 'SkillController@update']);
    Route::get('delete/{id}', ['as' => 'deleteSkill', 'uses' => 'SkillController@destroy']);

});


// Jobseeker Profiles Route
Route::group(['prefix' => 'profiles','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allProfile' , 'uses' => 'ProfileController@index']);
    Route::get('add', ['as' => 'addProfile', 'uses' => 'ProfileController@create']);
    Route::get('edit/{id}', ['as' => 'editProfile', 'uses' => 'ProfileController@edit']);
    Route::post('save', ['as' => 'saveProfile', 'uses' => 'ProfileController@store']);
    Route::put('update', ['as' => 'updateProfile', 'uses' => 'ProfileController@update']);
    Route::get('delete/{id}', ['as' => 'deleteProfile', 'uses' => 'ProfileController@destroy']);

});


// Jobs Company Route
Route::group(['prefix' => 'companies','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allCompany' , 'uses' => 'CompanyController@index']);
    Route::get('add', ['as' => 'addCompany', 'uses' => 'CompanyController@create']);
    Route::get('edit/{id}', ['as' => 'editCompany', 'uses' => 'CompanyController@edit']);
    Route::post('save', ['as' => 'saveCompany', 'uses' => 'CompanyController@store']);
    Route::put('update', ['as' => 'updateCompany', 'uses' => 'CompanyController@update']);
    Route::get('delete/{id}', ['as' => 'deleteCompany', 'uses' => 'CompanyController@destroy']);

});

// Jobs Route
Route::group(['prefix' => 'jobs','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allJob' , 'uses' => 'JobController@index']);
    Route::get('add', ['as' => 'addJob', 'uses' => 'JobController@create']);
    Route::get('edit/{id}', ['as' => 'editJob', 'uses' => 'JobController@edit']);
    Route::post('save', ['as' => 'saveJob', 'uses' => 'JobController@store']);
    Route::put('update', ['as' => 'updateJob', 'uses' => 'JobController@update']);
    Route::get('delete/{id}', ['as' => 'deleteJob', 'uses' => 'JobController@destroy']);

});

// User roles Route
Route::group(['prefix' => 'roles','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allRole', 'uses' => 'RoleController@index']);
    Route::get('add', ['as' => 'addRole', 'uses' => 'RoleController@create']);
    Route::get('edit/{id}', ['as' => 'editRole', 'uses' => 'RoleController@edit']);
    Route::post('save', ['as' => 'saveRole', 'uses' => 'RoleController@store']);
    Route::get('update', ['as' => 'updateRole', 'uses' => 'RoleController@update']);
    Route::get('delete/{id}', ['as' => 'deleteRole', 'uses' => 'RoleController@destroy']);

});

// User Permission
Route::group(['prefix' => 'permissions','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allPermission', 'uses' => 'PermissionController@index']);
    Route::get('add', ['as' => 'addPermission', 'uses' => 'PermissionController@create']);
    Route::get('edit/{id}', ['as' => 'editPermission', 'uses' => 'PermissionController@edit']);
    Route::post('save', ['as' => 'savePermission', 'uses' => 'PermissionController@store']);
    Route::get('update', ['as' => 'updatePermission', 'uses' => 'PermissionController@update']);
    Route::get('delete/{id}', ['as' => 'deletePermission', 'uses' => 'PermissionController@destroy']);

});

// User Route
Route::group(['prefix' => 'users','middleware' => 'auth'], function () {
    Route::get('all', ['as' => 'allUser', 'uses' => 'UserController@index']);
    Route::get('add', ['as' => 'addUser', 'uses' => 'UserController@create']);
    Route::get('edit/{id}', ['as' => 'editUser', 'uses' => 'UserController@edit']);
    Route::post('save', ['as' => 'saveUser', 'uses' => 'UserController@store']);
    Route::get('update', ['as' => 'updateUser', 'uses' => 'UserController@update']);
    Route::get('delete/{id}', ['as' => 'deleteUser', 'uses' => 'UserController@destroy']);
    Route::get('deactive/{id}', ['as' => 'deactiveUser', 'uses' => 'UserController@destroy']);
    Route::get('active/{id}', ['as' => 'activeUser', 'uses' => 'UserController@destroy']);

});

    Route::get('/home', 'HomeController@index');

});


