<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Disability;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\UserDisability;
use App\Models\UserNeed;
use App\Models\Need;

class ReportController extends Controller
{
    public function all()
    {
        $disabilites = Disability::all()->pluck('name', 'id');
        $userDisability = [];
        foreach ($disabilites as $id => $disability) {
            $userDisability[] = UserDisability::where('disability_id', $id)->get()->count();
        }

        $needs = Need::all()->pluck('detail', 'id');
        $userNeeds = [];
        foreach ($needs as $id => $need) {
            $userNeed[] = UserNeed::where('need_id', $id)->get()->count();
        }
        return view('admin.report.all')->with([
            'disabilites' => $disabilites,
            'userDisability' => $userDisability,
            'needs' => $needs,
            'userNeed' => $userNeed
        ]);
    }
}
