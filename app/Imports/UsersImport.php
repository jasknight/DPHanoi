<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;

class UsersImport implements OnEachRow
{
    public function onRow(Row $row)
    {
        if ($row->getIndex() < 9) {
            return;
        }
        $row = $row->toArray();

        $user = [
            'name' => $row[1],
            'birthday' => $row[2],
            'gender' => $row[3] === 'nam' ? 'male' : 'female',
            'academic_level' => $row[6],
            'specialize' => $row[7],
            'address' => $row[8],
            'phone' => (string)intval($row[9]),
            'labor_ability' => $row[10] === null ? 0 : 1,
            'employment_status' => $row[12],
            'income' => $row[14] === null ? null : ($row[14] === 'không có') ? 0 : str_replace($row[14], '', " vnđ")
        ];

        dd($user);
    }
}
