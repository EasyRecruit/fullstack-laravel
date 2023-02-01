<?php

use App\Http\Livewire\Employer\Dashboard;
use Illuminate\Support\Facades\Route;


Route::as('employer.')
    ->middleware(['auth', 'verified', 'employer'])
    ->prefix('employer')
    ->group(function (){
        Route::get('dashboard', Dashboard::class)->name('dashboard');
    });
