<?php

use App\Http\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;


Route::as('admin.')
    ->middleware(['auth', 'verified', 'admin'])
    ->prefix('admin')
    ->group(function (){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
});

