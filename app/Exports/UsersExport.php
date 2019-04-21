<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
    	$users = User::with(['userDisability.disability', 'userNeed.need'])->get();
        
        return view('admin.user.export-template', [
        	'users' => $users
        ]);
    }
}
