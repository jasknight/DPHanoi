<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['district', 'subdistrict'])->get();
        return view('admin.user.list')->with([
            'users' => json_encode($users)
        ]);
    }

    public function showUserImport()
    {
        return view('admin.user.import');
    }

    public function importUser(Request $request)
    {
        Excel::import(new UsersImport, request()->file('user_file'));
    }

    public function show(Request $request)
    {
        $user = auth()->user();
        return view('admin.user.show')->with(['user' => $user]);
    }
}
