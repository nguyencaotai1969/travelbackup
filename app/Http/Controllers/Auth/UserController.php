<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    use AuthenticatesUsers;
    public function logout()
    {
        Auth::guard('web')->logout();
        // chuyển hướng về trang login của admin
        return redirect()->back();
    }
}