<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subdistrict;

class SubdistrictController extends Controller
{
    public function getSubdistricts(Request $request)
    {
    	$subdistricts = Subdistrict::where('district_id', $request->district_id)->select('id', 'name AS text')->get();
    	return response()->json([
    		'success' => true,
    		'subdistricts' => $subdistricts
    	]);
    }
}
