<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the lock screen view.
     */
    public function showLockScreen(): View
    {
        return view('auth.lockscreen');
    }

    /**
     * Unlock the user's session.
     */
    public function unlock(Request $request): RedirectResponse
    {
        // Validate the user's password
        if (Auth::guard('web')->attempt(['email' => Auth::user()->email, 'password' => $request->password])) {
            // Password is correct, redirect to the intended page or dashboard
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Password is incorrect, redirect back to the lock screen with an error message
        return redirect()->route('lockscreen')->with('error', 'Incorrect password. Please try again.');
    }
}
