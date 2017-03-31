<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('center', 'Academy\CenterController');
Route::resource('client', 'Academy\ClientController');
Route::resource('list/country', 'Academy\ListCountryController');
Route::resource('list/department', 'Academy\ListDepartmentController');
Route::resource('list/municipality', 'Academy\ListMunicipalityController');
Route::resource('list/area', 'Academy\ListAreaController');
Route::resource('list/service', 'Academy\ListServiceController');
Route::resource('list/identification', 'Academy\ListIdentificationController');
Route::resource('list/sex', 'Academy\ListSexController');
Route::resource('list/nationality', 'Academy\ListNationalityController');
Route::resource('list/profession', 'Academy\ListProfessionController');
Route::resource('list/workstation', 'Academy\ListWorkstationController');
Route::resource('list/postal_code', 'Academy\ListPostalCodeController');
Route::resource('list/academic_level', 'Academy\ListAcademicLevelController');
Route::resource('menu', 'Academy\MenuController');