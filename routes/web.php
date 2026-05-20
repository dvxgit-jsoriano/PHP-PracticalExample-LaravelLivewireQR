<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::main')->name('/');
Route::livewire('/main', 'pages::main')->name('/main');

Route::livewire('/generate-qr', 'pages::generate-qr')->name('/generate-qr');
Route::livewire('/scanner-qr', 'pages::scanner-qr')->name('/scanner-qr');
