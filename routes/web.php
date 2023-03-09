<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\NoteController;
use App\Models\Company;

Route::get('/', function (){
    $companies = Company::paginate(10);
    return view('home', ['companies' => $companies]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('companies', CompanyController::class)->except('edit');
Route::resource('notes', NoteController::class)->except('index');
