<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
     public function handle($request, Closure $next)
    {
        // Check if admin is logged in using a session flag
        if (!Session::get('admin_logged_in')) {
            return redirect('/adminlogin')->with('error', 'Access denied. Please login as admin.');
        }

        return $next($request);
    }
}
