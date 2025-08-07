<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoutRequrst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LogoutRequrst $request)
    {
        $request->validated();
        Auth::logout();

        return redirect()->route('home');
    }
}
