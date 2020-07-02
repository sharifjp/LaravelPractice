<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/about', function()
{
    return view('about');
});

Route::get('/contact', 'AboutController@Contact');

// Route::get(md5('allcontact'),'ContactController@AllContact') -> name('all.contacts');
//Insert Data
Route::get('allcontact','ContactController@AllContact') -> name('all.contacts');
Route::get('insert-data','ContactController@InsertData');
Route::post('data-added','ContactController@DataAdded');

//Delete Data
Route::get('delete-contact/{id}','ContactController@Delete');
//Edit & Update Data
Route::get('edit-contact/{id}','ContactController@Edit');
Route::post('update-contact/{id}','ContactController@Update');
//Virw Data
Route::get('view-contact/{id}','ContactController@View');
