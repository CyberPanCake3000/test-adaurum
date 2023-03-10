<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
use App\Http\Controllers\NoteController;

Route::get('/', function (){
    $companies = Company::paginate(10);
    return view('home', ['companies' => $companies]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('companies', CompanyController::class)->except('edit', 'update')->middleware('auth');
Route::post('createNote', [NoteController::class, 'create'])->name('createNote')->middleware('auth');
