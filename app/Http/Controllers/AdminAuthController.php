<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_logged_in' => true]);

            return response()->json([
                'success' => true,
                'message' => 'Admin login successful',
                'redirect' => '/adminContact'
            ]);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    //    public function logout(Request $request)
    //     {
    //         $request->session()->forget('admin_logged_in');
    //         return response()->json(['message' => 'Logged out successfully']);
    //     }
    // // ✅ For API logout (POST /logout)
    //     public function logout(Request $request)
    //     {
    //         $request->session()->forget('admin_logged_in');
    //         return response()->json(['message' => 'Logged out successfully']);
    //     }

    // ✅ For Web logout (GET /adminlogout)
    public function webLogout(Request $request)
    {
        $request->session()->forget('admin_logged_in');
        return redirect('/adminlogin'); // or any other login page
    }
}
//      public function logout()
//  {
//      session()->forget('admin_logged_in');
//      return redirect('/adminlogin');
//  }
