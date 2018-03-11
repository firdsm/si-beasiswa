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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personal', 'PesertaController@index');
Route::get('/personal/create', 'PesertaController@createView');
Route::post('/personal/create', 'PesertaController@create');
Route::get('/personal/update/personal', 'PesertaController@viewUpdatePersonal');
Route::post('/personal/update/personal', 'PesertaController@updatePersonal');
Route::get('/personal/update/parent', 'PesertaController@viewUpdateParent');
Route::post('/personal/update/parent', 'PesertaController@updateParent');

Route::get('/prestasi', 'PrestasiController@index');
Route::get('/prestasi/create', 'PrestasiController@createView');
Route::post('/prestasi/create', 'PrestasiController@create');
Route::get('/prestasi/download/{id}', 'PrestasiController@download');
Route::get('/prestasi/delete/{id}', 'PrestasiController@delete');

Route::get('/organisasi', 'OrganisasiController@index');
Route::get('/organisasi/create', 'OrganisasiController@createView');
Route::post('/organisasi/create', 'OrganisasiController@create');
Route::get('/organisasi/download/{id}', 'OrganisasiController@download');
Route::get('/organisasi/delete/{id}', 'OrganisasiController@delete');

Route::get('/lembaga', 'LembagaController@index');
Route::get('/lembaga/create', 'LembagaController@createView');
Route::post('/lembaga/create', 'LembagaController@create');
Route::get('/lembaga/update', 'LembagaController@updateView');
Route::post('/lembaga/update', 'LembagaController@update');

Route::get('/beasiswa', 'BeasiswaController@index');
Route::get('/beasiswa/create', 'BeasiswaController@createView');
Route::post('/beasiswa/create', 'BeasiswaController@create');
Route::get('/beasiswa/informasi/update/{id}', 'BeasiswaController@informasi');
Route::post('/beasiswa/informasi/update/{id}', 'BeasiswaController@updateInformasi');
Route::get('/beasiswa/kriteria/update/{id}', 'BeasiswaController@kriteria');
Route::post('/beasiswa/kriteria/update/{id}', 'BeasiswaController@updateKriteria');

Route::get('/oprec/peserta', 'PesertaController@index');
Route::get('/oprec/rekomendasi', 'PesertaController@index');