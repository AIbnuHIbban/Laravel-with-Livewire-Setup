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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Component 
Route::livewire('/livewire', 'example-component')
    ->section('content')
    ->layout('livewire.app');

Route::livewire('/about', 'about')
    ->section('content')
    ->layout('livewire.app');
