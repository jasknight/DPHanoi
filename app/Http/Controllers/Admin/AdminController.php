<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin.list');
    }

    public function create()
    {
        return view('admin.admin.create');
    }

}
