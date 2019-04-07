<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomVerificationController extends Controller
{
    public function show() {
        if ($user->status === User::APPROVED) {
            return redirect()->route('homepage');
        } else {
            return view('vendor.adminlte.verify');
        }
    }
}
