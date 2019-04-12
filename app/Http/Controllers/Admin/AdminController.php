<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Subdistrict;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin.list');
    }

    public function create()
    {
    	$districts = District::all();
        $subdistricts = Subdistrict::all();
        return view('admin.admin.create')->with([
        	'districts' => $districts,
        	'subdistricts' => $subdistricts
        ]);
    }

}
