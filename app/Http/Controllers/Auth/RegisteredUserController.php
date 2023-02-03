<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\User\StoreRequest;
use App\Providers\RouteServiceProvider;
use App\Services\UserService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $user_data = $request->validated();
        $user = UserService::create($user_data);
//        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('employer.verification.dashboard');
    }
}
