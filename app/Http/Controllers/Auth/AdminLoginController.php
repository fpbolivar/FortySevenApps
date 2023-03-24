<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth,Exception;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AuthRequest;

class AdminLoginController extends Controller
{

    public function Login()
    {
        return view('admin.auth.login');
    }

    public function LoginAuthenticate(AuthRequest $validatedRequest)
    {
        $adminGuard = Auth::guard('admin');
        $remember = $validatedRequest->has('remember') ? true : false;
        if ($adminGuard->attempt(['email' => $validatedRequest['email'], 'password' => $validatedRequest['password']], $remember)){
            $validatedRequest->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }else{
            return back()->with('error', "Invalid Credentials!");
        }
    }
    
    public function Logout()
    {
        auth('admin')->logout();
        return redirect('admin/login');
    }

}
