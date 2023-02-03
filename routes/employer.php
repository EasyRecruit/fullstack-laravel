<?php

use App\Http\Livewire\Employer\Dashboard;
use App\Http\Livewire\Employer\Verification\Dashboard as VerificationDashboard;
use Illuminate\Support\Facades\Route;


Route::as('employer.')
    ->middleware(['auth', 'employer'])
    ->prefix('employer')
    ->group(function (){

        Route::get('dashboard', Dashboard::class)->name('dashboard');

    });

Route::prefix('employer/verification')->as('employer.verification.')->group(function (){
    Route::get('dashboard', VerificationDashboard::class)
        ->name('dashboard');
});

