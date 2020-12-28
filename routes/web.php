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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/covid19', 'HomeController@covid19')->name('covid19');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('admin');
Route::get('admin/data-covid', 'AdminController@dataCovid')->name('data-covid');
Route::post('admin/store-data-covid', 'AdminController@storeDataCovid')->name('store-data-covid');
Route::put('admin/update-data-covid/{id}', 'AdminController@updateDataCovid')->name('update-data-covid');
Route::delete('admin/delete-data-covid/{id}', 'AdminController@destroyDataCovid')->name('delete-data-covid');

Route::get('admin/mapping', 'AdminController@mappingCovid')->name('mapping-covid');
Route::post('admin/store-mapping', 'AdminController@storeMappingCovid')->name('store-mapping-covid');
Route::put('admin/update-mapping/{id}', 'AdminController@updateMappingCovid')->name('update-mapping-covid');
Route::delete('admin/delete-mapping/{id}', 'AdminController@destroyMappingCovid')->name('delete-mapping-covid');

//------------------ Clear ------------
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    // Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
 
 });
 //------------------ Storage Link ------------
 Route::get('/storagelink', function () {
    Artisan::call('storage:link');

    return "Success Storage Link!";
});
Route::get('/linkstorage', function () { 
    $targetFolder = base_path().'/storage/app/public'; 
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage'; 
    symlink($targetFolder, $linkFolder); 
    
});